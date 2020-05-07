<?php
/**
 * CS 4342 Database Management
 * @author Kevin Apodaca
 * @since 2/12/20
 * @version 1.0
 * Description: The purpose of this file is to serve as simple login system that validates username and password.
 */

session_start();
require_once ("../common_assets/config.php");
$_SESSION['logged_in'] = false;


if (!empty($_POST)) {
    if (isset($_POST['Submit'])) {
        $input_username = isset($_POST['username']) ? $_POST['username'] : " ";
        $input_password = isset($_POST['password']) ? $_POST['password'] : " ";
		/*
		 * Hashing and Salting goes here.
		 */
        $queryUser = "SELECT * FROM user  WHERE U_email=?" ;
		$stmt_q = mysqli_prepare($conn, $queryUser);
		mysqli_stmt_bind_param($stmt_q, 's', $input_username);
		mysqli_stmt_execute($stmt_q);
		$result_for_pwd = mysqli_stmt_get_result($stmt_q);

        if ($resultUser = mysqli_fetch_assoc($result_for_pwd)) {

			if(password_verify($input_password, $resultUser['u_password'])){
				
				$queryAdmin = "SELECT * FROM faculty WHERE u_email=?";
				
				$stmt_p = mysqli_prepare($conn, $queryAdmin);
				mysqli_stmt_bind_param($stmt_p, 's', $input_username);
				mysqli_stmt_execute($stmt_p);
				$result_p = mysqli_stmt_get_result($stmt_p);

				if ($resultAdmin = mysqli_fetch_assoc($result_p)) {
					session_start();
					$_SESSION['username'] = $input_username;
					$_SESSION['logged_in'] = true;
					header("Location: ../admin_dashboard/BS3/dashboard.html");
				} else {
					session_start();
					$_SESSION['username'] = $input_username;
					$_SESSION['logged_in'] = true;
					header("Location: ../dashboard/BS3/dashboard.php");
				}
			} else{
				echo "Password Incorrect";
				exit();
			}

        } else {
            echo "User not found.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>UTEP Grad Tracking Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../common_assets/utep_logo.png" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
				<form class="login100-form validate-form" action="login.php" method="post">
					<span class="login100-form-title p-b-70">
						Welcome, Miner!
					</span>
					<span class="login100-form-avatar">
						<img src="../common_assets/utep_logo.png" alt="AVATAR">
					</span>

					<div class="wrap-input100 validate-input m-t-85 m-b-35">
						<input class="input100" type="text" name="username">
						<span class="focus-input100" data-placeholder="Username"></span>
						
					</div>

					<div class="wrap-input100 validate-input m-b-50 ">
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="Submit">


							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>

	<div id="dropDownSelect1"></div>

	<!-- =============================================================================================== -->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!-- =============================================================================================== -->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!-- =============================================================================================== -->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!-- =============================================================================================== -->
	<script src="vendor/select2/select2.min.js"></script>
	<!-- =============================================================================================== -->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!-- =============================================================================================== -->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!-- =============================================================================================== -->
	<script src="js/main.js"></script>

</body>

</html>
