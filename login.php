<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/hover.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" media="all">
</head> 
<body>

	<div class="header">
		<h2 class="animated infinite pulse">Login SYD-CSE</h2>
	</div>
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Roll No.</label>
			<input type="number" name="rl" >
		</div>
		<div class="input-group">
			<label>Enrollment No.</label>
			<input type="password" name="enr">
		</div>
		<div class="input-group">
			<button type="submit" class="btn hvr-curl-bottom-right" name="login_user">Login</button>
		</div>
		<p>
			Not yet registered? <a href="register.php" class="hvr-icon-wobble-horizontal">Sign up</a>
		</p>
	</form>
    </div>
    <p class="dev">@VirajKanse(ADevDX)</p>
</body>
</html>