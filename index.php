<?php 
	session_start(); 

	if (!isset($_SESSION['rl'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['rl']);
		header("location: login.php");
	}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="hover.css">
	<link rel="stylesheet" type="text/css" href="animate.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" media="all">
</head>
<body>
	<div class="header">
		<h2 class="animated flip">Home Page</h2>
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
		<?php  if (isset($_SESSION['rl'])) : ?>
			<p>Welcome <strong class="hvr-bounce-in"><?php echo "Student ⊂((・▽・))⊃"; ?></strong></p>
			<p> <a href="index.php?logout='1'" class="hvr-icon-hang">logout</a> </p>
		<?php endif ?>
	</div>
	<p class="dev">@VirajKanse(ADevDX)</p>
		
</body>
</html>