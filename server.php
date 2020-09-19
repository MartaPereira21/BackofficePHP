<?php
session_start();
$errors = array();
$email    = "";
$username = "aluno";
// initializing variables
$servername = "localhost"; 
$usernameBd = "aluno";
$passwordBd = "aluno";
$dbname = "DWEB2";
// Create connection
$conn = new mysqli($servername, $usernameBd, $passwordBd, $dbname);


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// REGISTER USER
if (isset($_POST['reg_user'])) {

  // receive all input values from the form
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
  array_push($errors, "The two passwords do not match");
  }
  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  if ($user) { // if user exists
  if ($user['username'] === $username) {
  array_push($errors, "Username already exists");
  }
  if ($user['email'] === $email) {
  array_push($errors, "email already exists");
  }
  }
  
  // Finally, register user if there are no errors in the form
if (count ($errors)==0)
  $password = $password_1 ;
  $query = "INSERT INTO users(username, email, password)
  VALUES('$username', '$email', '$password')";
  mysqli_query($conn, $query);
  $_SESSION['username'] = $username;
  $_SESSION['success'] = "You are now logged in";

  header('location: login.php');
  }

// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
 
    if (empty($username)) {
    array_push($errors, "É necessário inserir um utilizador");
    }
    if (empty($password)) {
    array_push($errors, "É necessário inserir uma Password");
    }

    if (count($errors) == 0) {
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($conn, $query);
    if (mysqli_num_rows($results) == 1) {
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    session_start();
$_SESSION["user_id"] = $username;;
session_destroy();
    header('location: tables.php');
    }else {
    array_push($errors, "Combinação de nome de usuário / senha incorreta");
    }
  }
}
  
$conn->close();
?>