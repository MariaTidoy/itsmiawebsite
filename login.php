<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login</title> 
    <link rel="stylesheet" href="login_register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body>
  <header>
			<h1>It's Mia Website</h1>
		</header>
     <div class="container">
      <div class="wrapper">
        <div class="title"><span>Login Form</span></div>
        <form method="post" action="login.php">
          <?php include('errors.php'); ?>
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" name="email" placeholder="Email">
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password" >
          </div>
          <div class="row button">
            <input type="submit" name="login_user" value="Login">
          </div>
          <div class="signup-link">Not a member? <a href="register.php">Sign up now</a></div>
        </form>
      </div>
    </div>
  </body>
</html>