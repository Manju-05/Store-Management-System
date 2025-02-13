//sample code for updating the values in the stock table

<?php
require 'connection.php';

$stkid = $_POST["stkid"];
  $stkname=$_POST["stkname"];
  $stkquantity=$_POST["stkquantity"];
  $stkvendor=$_POST["stkvendor"];
  $stkprice=$_POST["stkprice"];

$update_query = "UPDATE stocktable SET remaining_quantity = '$new_product_name', quantity = $new_quantity WHERE id = $product_id";

if ($conn->query($update_query) === TRUE) {
    if ($conn->affected_rows > 0) {
        echo "Product updated successfully";
    } else {
        echo "No matching product found for the provided ID";
    }
} else {
    echo "Error updating product: " . $conn->error;
}

$conn->close();
?>
