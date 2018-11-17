<?php

include './includes/connect-db.php';
include './includes/errors.php';


session_start();


// initializing variables
$email    = "";
$errors = array();


if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  if (empty($email)) {
  	array_push($errors, "Email is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM accounts WHERE email='$email' AND password='$password'";
  	$results = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($results);

  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['email'] = $email;
  	  $_SESSION['success'] = "You are now logged in";

      if ($user['role'] === '0') {
          header('location: user-index');
       }
       if ($user['role'] === '1') {
           header('location: admin-index');
        }

  	}

    else {
  	 header('location: signin');
  	}
  }
}

?>
