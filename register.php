<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="hover.css">
	<link rel="stylesheet" type="text/css" href="animate.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" media="all">
</head>
<body>
	<div class="header">
		<h2 class="animated infinite pulse">Register SYD-CSE</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Student Name</label>
			<input type="text" name="stud" value="<?php echo $stud; ?>">
		</div>
		<div class="input-group">
			<label>Roll No</label>
			<input type="number" name="rl" value="<?php echo $rl; ?>">
		</div>
		<div class="input-group">
			<label>Enrollment No.</label>
			<input type="password" name="enr_1">
		</div>
		<div class="input-group">
			<label>Confirm Enrollment No.</label>
			<input type="password" name="enr_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn hvr-curl-bottom-left" name="reg_user">Register</button>
		</div>
		<p>
			Already registered? <a href="login.php" class="hvr-icon-back">Sign in</a>
		</p>
	</form>
	<p class="dev">@VirajKanse(ADevDX)</p>
</body>
</html>