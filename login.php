<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.php">
</head>
<body style="background: linear-gradient(to left,#380036 0%,#0cbaba 100%)" ;>
  <div class="header">
    <img src="logo.png" alt="Hook With A Book" class="logo" style="height: 110px; widows: auto;float: left;">
  	<h2 style="color: white; font-size: 50px; text-align: center ; margin-top: 2px;">Login ~ HOOK WITH A BOOK</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label style="text-align: center; font-size: 50px; margin-top: 20px;">Username</label>
  		<input type="text" name="username" style="text-align: center;" >
  	</div>
  	<div class="input-group">
  		<label style="text-align: center; font-size: 50px;">Password</label>
  		<input type="password" name="password">
  	</div>
    <div class="input-group">
      <button type="submit" class="btn" name="login_user">Login</button>
    </div>
    <p style="text-decoration-color: darkred; font-size: 30px;">
      Not yet a member? <a href="register.php">Sign up</a>
    </p>
  </form>
</body>
</html>