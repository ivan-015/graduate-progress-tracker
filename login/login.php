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
$username = $password = $err = "";
if($_SERVER['REQUEST_METHOD']=='POST'){
	if(empty(trim($_POST['username']))){
		$err = "empty username";
	}
	else{
		$username = trim($_POST['username']);
	}

	if(empty(trim($_POST['password']))){
		$err = "empty password";
	}
	else{
		$password = trim($_POST['password']);
	}

	if(empty($err)){
		$sql = "SELECT u_id, username, password FROM Users WHERE username = ?";
	

		if($stmt = mysqli_prepare($conn, $sql)){
			mysqli_stmt_bind_param($stmt, "s", $param_username);
			$param_username = $username;

			if(mysqli_stmt_execute($stmt)){
				mysqli_stmt_store_result($stmt);
				if(mysqli_stmt_num_rows($stmt)==1){
					mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
					
					//Check if user is Student or Admin or Faculty
					$if_admin = 'SELECT * FROM Admin WHERE u_id = ?';
					$stmt = mysqli_prepare($conn, $if_admin);
					mysqli_stmt_bind_param($stmt, "s", $id);
					if(mysqli_stmt_num_rows($stmt) == 1 ){
						
						if(password_verify($password, $hashed_password)){
							session_start();
							
							$_SESSION['username'] = $username;
							$_SESSION['logged_in'] = true;
							header("Location: ../admin_dashboard/BS3/dashboard.html");
						
						} else $password_err = "The password you entered was not valid.";
					}
					//Check if user is faculty
					$if_faculty = 'SELECT * FROM Faculty WHERE u_id = ?';
					$stmt = mysqli_prepare($conn, $if_faculty);
					mysqli_stmt_bind_param($stmt, "s", $id);}
					elseif(mysqli_stmt_num_rows($stmt) == 1 ){
					
						//DEFAULT: Faculty goes to admin dashboard
						if(password_verify($password, $hashed_password)){
							session_start();
							
							$_SESSION['username'] = $username;
							$_SESSION['logged_in'] = true;
							header("Location: ../admin_dashboard/BS3/dashboard.html");
						
						} else $password_err = "The password you entered was not valid.";
					}
					//Check if user is student
					$if_student = 'SELECT * FROM Student WHERE u_id = ?';
					$stmt = mysqli_prepare($conn, $if_student);
					mysqli_stmt_bind_param($stmt, "s", $id);}
					elseif(mysqli_stmt_num_rows($stmt) == 1 ){
							if(password_verify($password, $hashed_password)){
								session_start();
								
								$_SESSION['username'] = $username;
		                		$_SESSION['logged_in'] = true;
        		        		header("Location: ../dashboard/BS3/dashboard.html");
							
							} else $password_err = "The password you entered was not valid.";
					}  
					else $username_err = "No account found with that username.";
		 				//	} else echo "Oops! Something went wrong. Please try again later.";
			
			mysqli_stmt_close($stmt);
        }
    }

    mysqli_close($link);
}

/*
if (!empty($_POST)) {
    if (isset($_POST['Submit'])) {
        $input_username = isset($_POST['username']) ? $_POST['username'] : " ";
        $input_password = isset($_POST['password']) ? $_POST['password'] : " ";
		/*
		 * Hashing and Salting goes here.
		 *
        $queryUser = "SELECT * FROM user  WHERE U_email='" . $input_username . "' AND U_Password='" . $input_password . "';";
        $resultUser = $conn->query($queryUser);

        if ($resultUser->num_rows > 0) {
            //if there is a result, that means that the user was found in the database
            $queryAdmin = "SELECT * FROM faculty WHERE u_email='" . $input_username . "';";
            $resultAdmin = $conn->query($queryAdmin);
            // echo $queryAdmin;
            if ($resultAdmin->num_rows > 0) {
                $_SESSION['username'] = $input_username;
                $_SESSION['logged_in'] = true;
                header("Location: ../admin_dashboard/BS3/dashboard.html");
            } else {
                $_SESSION['username'] = $input_username;
                $_SESSION['logged_in'] = true;
                header("Location: ../dashboard/BS3/dashboard.php");
            }

        } else {
            echo "User not found.";
        }
    }
}*/
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

					<div class="wrap-input100 validate-input m-t-85 m-b-35
					<?php echo (!empty($username_err)) ? 'has-error' : ''; ?>" 
					data-validate="Enter username">
						<input class="input100" type="text" name="username">
						<span class="focus-input100" data-placeholder="Username"></span>
						<span class="help-block"><?php echo $username_err; ?></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50 
					<?php echo (!empty($password_err)) ? 'has-error' : ''; ?>"
					 data-validate="Enter password">
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Password"></span>
						<span class="help-block"><?php echo $password_err; ?></span>
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
