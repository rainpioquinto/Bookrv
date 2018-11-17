<?php

include './includes/connect-db.php';
include './includes/errors.php';

session_start();

// initializing variables

$email    = "";
$errors = array();

$errorsemailctr = 0;



// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);


    // by adding (array_push()) corresponding error unto $errors array
    if (empty($firstname)) { array_push($errors, "firstname is required"); }
    if (empty($lastname)) { array_push($errors, "lastname is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password_1)) { array_push($errors, "Password is required"); }
    if ($password_1 != $password_2) {
  	array_push($errors, "The two passwords do not match");
    }

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM accounts WHERE email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user['email'] === $email) {
     array_push($errors, "email already exists");
     $errorsemail = "email already exists";
     $errorsemailctr = 1;
   }



  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO accounts (firstname, lastname, email, password, role)
  			  VALUES('$firstname', '$lastname', '$email', '$password', 0)";
  	mysqli_query($conn, $query);
  	$_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: user-index');
  }

}
?>
