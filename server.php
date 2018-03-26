<?php 
	session_start();

	// variable declaration
	$stud = "";
	$rl    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'registration');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$stud = mysqli_real_escape_string($db, $_POST['stud']);
		$rl = mysqli_real_escape_string($db, $_POST['rl']);
		$enr_1 = mysqli_real_escape_string($db, $_POST['enr_1']);
		$enr_2 = mysqli_real_escape_string($db, $_POST['enr_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($stud)) { array_push($errors, "stud is required"); }
		if (empty($rl)) { array_push($errors, "rl is required"); }
		if (empty($enr_1)) { array_push($errors, "enr is required"); }

		if ($enr_1 != $enr_2) {
			array_push($errors, "The two enrs do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$enr = md5($enr_1);//encrypt the enr before saving in the database
			$query = "INSERT INTO users (stud, rl, enr) 
					  VALUES('$stud', '$rl', '$enr')";
			mysqli_query($db, $query);

			$_SESSION['stud'] = $stud;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$rl = mysqli_real_escape_string($db, $_POST['rl']);
		$enr = mysqli_real_escape_string($db, $_POST['enr']);

		if (empty($rl)) {
			array_push($errors, "rl is required");
		}
		if (empty($enr)) {
			array_push($errors, "enr is required");
		}

		if (count($errors) == 0) {
			$enr = md5($enr);
			$query = "SELECT * FROM users WHERE rl='$rl' AND enr='$enr'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['rl'] = $rl;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			}else {
				array_push($errors, "Wrong rl/enr combination");
			}
		}
	}

?>