<?php

// Get the user id
$stkid = $_REQUEST['stkid'];

// Database connection
$con = mysqli_connect("localhost", "root", "", "reglog");

if ($stkid !== "") {
	
	// Get corresponding first name and
	// last name for that user id	
	$query = mysqli_query($con, "SELECT stkname,
	stkquantity FROM stk_entry WHERE stkid='$stkid'");

	$row = mysqli_fetch_array($query);

	// Get the first name
	$stkname = $row["stkname"];

	// Get the first name
	$availablequantity = $row["stkavailablequantity"];
}

// Store it in a array
$result = array("$stkname", "$stkavailablequantity");

// Send in JSON encoded form
$myJSON = json_encode($result);
echo $myJSON;
?>
