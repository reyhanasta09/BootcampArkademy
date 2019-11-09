<?php
// include Database connection file
include("conn.php");

// check request
if( isset($_POST['id']))
{
    // get values
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $id_category = $_POST['id_category'];
    $id_cashier = $_POST['id_cashier'];

    // Updaste User details
    $query = "UPDATE product SET id = '$id', name = '$name', price = '$price' , id_category = '$id_ccategory', id_cashier = '$id_cashier' WHERE id = '$id'";
    if (!$result = mysqli_query($conn, $query)) {
        exit(mysqli_error($conn));
    }
}