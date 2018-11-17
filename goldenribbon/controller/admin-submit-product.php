<?php

include './includes/connect-db.php';
include './includes/errors.php';

session_start();

$errors = array();

$errorsemailctr = 0;
$successmsgctr = 0;

// REGISTER USER
if (isset($_POST['add-product-btn'])) {
  // receive all input values from the form
  if(isset($_FILES['image'])){
     $errors= array();
     $file_name = $_FILES['image']['name'];
     $file_size =$_FILES['image']['size'];
     $file_tmp =$_FILES['image']['tmp_name'];
     $file_type=$_FILES['image']['type'];
     $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

     $expensions= array("jpeg","jpg","png");

     if(in_array($file_ext,$expensions)=== false){
        $errors[]="extension not allowed, please choose a JPEG or PNG file.";
     }

     if($file_size > 2097152){
        $errors[]='File size must be excately 2 MB';
     }
   }



  // asffffffffffffffffffffffffffffffffffff


  $productname = mysqli_real_escape_string($conn, $_POST['productname']);
  $productdescription = mysqli_real_escape_string($conn, $_POST['productdescription']);
  $productprice = mysqli_real_escape_string($conn, $_POST['productprice']);
  $productqty = mysqli_real_escape_string($conn, $_POST['productqty']);


  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM products WHERE productname='$productname' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user['productname'] === $productname) {
     array_push($errors, "product already exists");
     $errorsemail = "Product already exists";
     $errorsemailctr = 1;
   }



  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {

  	$query = "INSERT INTO products (productname, productdescription, productprice, productqty)
  			  VALUES('$productname', '$productdescription', '$productprice', '$productqty')";
  	mysqli_query($conn, $query);

    move_uploaded_file($file_tmp,"../img/".$file_name);
    echo "Success";
    $successmsgctr = 1;
    $successmsg = "Product Added!";

  }

}
?>
