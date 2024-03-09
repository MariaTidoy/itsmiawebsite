<?php
session_start();
// initializing variables
$fname = " ";
$lname = "";
$email    = "";
$errors = array(); 

// connect to the database
// format: host, user, password, db_name
$db = mysqli_connect('localhost', 'root', '', 'user');

// REGISTER USER
if (isset($_POST['reg_user']))  {
   // receive all input values from the form
    $fname = mysqli_real_escape_string($db, $_POST['fname']);
    $lname = mysqli_real_escape_string($db, $_POST['lname']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($fname) OR empty($lname) OR empty($password_1) OR empty($password_2)) {
      array_push($errors, "All fields are required");
    }

    if (strlen($password_1)<8){
      array_push($errors, "Password is less than 8 characters");
    }

    if ($password_1 !== $password_2) {
      array_push($errors, "The two passwords do not match");
    }
    // first check the database to make sure 
    // a user does not already exist with the same email
    $user_check_query = "SELECT * FROM user WHERE email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
  
    if ($user) { // if user exists
      if ($user['email'] === $email) {
        array_push($errors, "Email already exists");
      }
    }
    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
      $password = ($password_1);
      $query = "INSERT INTO user (fname, lname, email, password) 
            VALUES('$fname', '$lname', '$email', '$password')";
      mysqli_query($db, $query);
       header('location: login.php'); 
    }
}

  // LOGIN USER
   
  if (isset($_POST['login_user'])) {
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($email)) {
      array_push($errors, "Email is required");
    }
    if (empty($password)) {
      array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
      $password = ($password);
      $query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
      $results = mysqli_query($db, $query);
      $row = mysqli_fetch_array($results);
      if (mysqli_num_rows($results) == 1) {
        $_SESSION['id'] = $id;
        $_SESSION['email'] = $email;
        $_SESSION['fname'] = $row['fname'];
        header('location: index.php');
      } else {
        array_push($errors, "Wrong username/password combination");
      }
    }
  }

?>