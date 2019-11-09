<?php
 if(isset($_POST['id']) && isset($_POST['id']) != "")
 {
 
  // include Database connection file 
  include("conn.php");

  // get values 
  $id = $_POST['id'];
  $name = $_POST['name'];
  $price = $_POST['price'];
  $id_category = $_POST['id_category'];
  $id_cashier = $_POST['id_cashier'];

  $query = "INSERT INTO product (id, name, price , id_category , id_cashier) VALUES('$id', '$name', '$price','$id_category','$id_cashier')";
  if (!$result = mysqli_query($conn, $query)) {
         exit(mysqli_error($conn));
     }
     echo "1 Record Added!";
    }
?>