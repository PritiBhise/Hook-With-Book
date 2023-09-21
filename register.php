<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system for HOOK WITH BOOK </title>
  <link rel="stylesheet" type="text/css" href="style.php">
</head>
<style>
* {
  box-sizing: border-box;
}
input[type=text]:focus,
input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
</style>
<body style="background: linear-gradient(to left,#380036 0%,#0cbaba 100%)" ;>
  <img src="logo.png" alt="Hook With A Book" class="logo" style="height: 110px; widows: auto;float: left;">
  <div class="header">
  	<h2 style="text-align: center; font-size: 50px; color: white;">Register ~ HOOK WITH A BOOK</h2>
  </div>     
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label style="text-align: center; font-size: 40px;">Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label style="text-align: center; font-size: 40px;">Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label style="text-align: center; font-size: 40px;">Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label style="text-align: center; font-size: 40px;">Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p style="font-size: 30px;">
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>