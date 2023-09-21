<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.php">
</head>
<body style="background-image:url(bg-img.jpg);height: 100vh;
  background-size: cover;
  background-position: center;
  position: relative;">

<div class="header">
  <img src="logo.png" alt="Hook With A Book" class="logo" style="height: 110px; widows: auto;float: left;">
	<h1 style="text-align: center; size: 1000px; color: #ff0000; font: sans-serif;">HELLO AVID READER!!</h1>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<h2 style="text-align: center; font-size: 100px; font: sans-serif; color: #ff3399; margin-top: 30px">Welcome <strong><?php echo $_SESSION['username']; ?></strong></h2>
      <a style="font-size: 50px; color: limegreen;" href="New folder/index.html">CLICK TO GO TO HOME PAGE</a>
    	<p style=" size: 100px;"> <a style="font-size: 50px; color: burlywood;" href="index.php?logout='1'">logout</a> </p>
    <?php endif ?>
</div>
		
</body>
</html>
