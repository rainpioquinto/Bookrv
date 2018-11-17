<?php

include './includes/connect-db.php';
include './includes/errors.php';


session_start();

if (isset($_POST['send_btn'])) {

  // receive all input values from the form
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $message = mysqli_real_escape_string($conn, $_POST['message']);

  	$query = "INSERT INTO feedbacks (email, message)
  			       VALUES('$email','$message')";
  	mysqli_query($conn, $query);

  echo '<p class="featurette-heading text-center">Feedback sent!</p>';
  }






?>
