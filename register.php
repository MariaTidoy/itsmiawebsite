<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Sign up</title> 
    <link rel="stylesheet" href="login_register.css">
    <!--ref link for icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  </head>
  <body>
    <header>
      <h1>It's Mia Website</h1>
    </header>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Sign up</span></div>
        <form method="post" action="register.php">
            <?php include('errors.php'); ?>
          <div class="row">
          <i class="fas fa-user"></i>
            <input type="text" name="fname" placeholder="First Name" required>
          </div>
          <div class="row">
          <i class="fas fa-user"></i>
            <input type="text" name="lname" placeholder="Last Name" required>
          </div>

          <div class="row">
            <i class='bx bxs-envelope'></i>
            <input type="email" name="email" placeholder="Email" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" name="password_1" placeholder="Password" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" name="password_2" placeholder="Confirm Password" required>
          </div>
          <div class="row button">
            <input type="submit" name="reg_user" value="Register">
          </div>
          <div class="signup-link">Have an account already?<br> <a href="login.php"> Login now</a></div>
        </form>
      </div>
    </div>

  </body>
</html>