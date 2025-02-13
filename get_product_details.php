//Sample program to display the data in the textboxes automatically when id is enterd
<?php
require 'connection.php';

$stkid = $_GET['stkid'];

$query = "SELECT stkname, stkavailableqty FROM stk_entry WHERE stkid = $stkid";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $response = array("stockname" => $row["stkname"], "stkavailableqty" => $row["stkavailableqty"]);
    echo json_encode($response);
} else {
    echo json_encode(null);
}

$conn->close();

?>