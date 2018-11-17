<?php
session_destroy();
unset($_SESSION['email']);
unset($_SESSION['success']);
header("location: home");

?>
