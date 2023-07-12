<?php
session_start();

$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'food');



// LOGIN USER
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) {
  	array_push($errors, "email is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  
  	$query = "SELECT * FROM register WHERE password='$password' AND email='$email'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['email'] = $email;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: me.php');
  	}else {
  		array_push($errors, "Wrong email/password combination");
  	}
  }
}

?>