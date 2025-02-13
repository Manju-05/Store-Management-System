<?php
echo "update2";
// Include another PHP file
require 'connection.php';
//if(isset($_POST['submit2'])){
    echo "hello";
// Assuming you have a table named "register" with columns: id, sname, gender, dob, bloodgroup, placeofbirth, mothertongue, caste, religion, nationality, aadhar
$id=$_POST['stkid'];
$quantity = $_POST["Required_Quantity"];
// $gender = $_POST["gdrdrpdwnlist"];
// $dob = $_POST["dob"];
// $bloodgroup = $_POST['bldgrpdrpdwn'];
// $pob = $_POST['plc_txtbx'];
// $mothertongue = $_POST['mothertngedrpdwn'];
// $caste = $_POST['cstedrpdwn'];
// $religion = $_POST['rligndrpdwn'];
// $nationality = $_POST['ntndrpdwn'];
// $aadhar = $_POST['Aadr_txtbx'];
// $contact=$_POST['cnt_txtbx'];
// $mole=$_POST['mole_txtbx'];
// $email=$_POST['emailid_txtbx'];
// $scchall=$_POST['sscno_txtbx'];
// $sscboard=$_POST['sscbrddrpdwn'];
// $sscgpa=$_POST['sscper_txtbx'];
// $yearofpassing=$_POST['sscyeardrpdwn'];
// $sscschoolname=$_POST['schoolname_txtbx'];
// $passtype=$_POST['sscpassdrpdwn'];
$sql = "SELECT * FROM stocktable WHERE stkid = '$id'";
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
  // Get the name from the result set
  $row = mysqli_fetch_assoc($result);
  //$stock_name = $row['stkname'];
  $Available_Quantity = $row['stkquantity'];
} else {
   //echo '<script>alert("hello") </script>';
     echo '<script>document.getElementById("place").innerHTML = "this number is not avilable"</script>';
}
$id2=$Available_Quantity-$quantity;

 echo "$id2";

$update_query = "UPDATE stocktable SET  stkquantity= '$quantity'  WHERE stkid = '$id2'";



if ($connection->query($update_query) ===TRUE) {
        echo "New record inserted successfully.";
    } else {
         echo "Error: " . $sql . "<br>" . $connection->error;
     }
     header("location: update.php");
    
   // }
      //Close the statement and connection
    // $update_query->close();
     $connection->close();
?>