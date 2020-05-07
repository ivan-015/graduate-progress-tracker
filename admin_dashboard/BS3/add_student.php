<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values

/* Empty values for general user */
$password = $id = $email = $f_name = $l_name = $m_name = "";
$username_err = $password_err = "";

/* Empty values for student user */
 $major_gpa = $is_doctorate = $credit_hours = $funding = $graduate_date = $date_of_entry = $gpa = '';


if($_SERVER["REQUEST_METHOD"] == "POST"){
 

    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        $input_password = $_POST['password'];


        $sql_general = "INSERT INTO User VALUES(?,?,?,?,?,?)";
        $sql_student = "INSERT INTO Student VALUES(?,?,?,?,?,?,?,?)";
        
        if($stmt_general = mysqli_prepare($link, $sql_general)){

            $id = (rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9));
            $email = trim($_POST['email'] );
            $f_name = trim($_POST['first_name']);
            $l_name = trim($_POST['last_name']);
            $m_name = trim($_POST['middle_name']);
            $password = trim($_POST['password']);

            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            mysqli_stmt_bind_param($stmt_general, "isssss", $id,$email,$f_name,$m_name,$l_name,$hashed_password);

            if(mysqli_stmt_execute($stmt_general)){
                /* store result */
                mysqli_stmt_store_result($stmt_general);
                
                if(mysqli_stmt_num_rows($stmt_general) == 1){
                    $username_err = "This user already exists.";
                } else{
                    if($stmt_student = mysqli_prepare($link, $sql_student)){
                        $major_gpa = trim($_POST['major_gpa']);
                        $is_doctorate = trim($_POST['is_doctorate']);
                        $credit_hours = trim($_POST['credit_hours']);
                        $funding = trim($_POST['funding']);
                        $graduate_date = trim($_POST['graduate_date']);
                        $date_of_entry = trim($_POST['date_of_entry']);
                        $gpa = trim($_POST['gpa']);

                        mysqli_stmt_bind_param($stmt_student, 'idbiissd', $id, $major_gpa,
                    $is_doctorate,$credit_hours,$funding,$graduate_date,$date_of_entry,$gpa);
                        if(mysqli_stmt_execute($stmt_student)) {
                            mysqli_stmt_store_result($stmt_student);
                            header('location: dashboard.html');

                        }else{
                            echo "Oops! Something went wrong. Please try again later.";
                        }
                    }
                    
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt_student);
            mysqli_stmt_close($stmt_general);
        }
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Add Student</h2>
        <p>Please fill this form to create an student account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Emai</label>
                <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>First Name</label>
                <input type="password" name="password" class="form-control" value="<?php echo $f_name; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Last Name</label>
                <input type="password" name="password" class="form-control" value="<?php echo $l_name; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Middle Name</label>
                <input type="password" name="password" class="form-control" value="<?php echo $m_name; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <br>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Major GPA</label>
                <input type="password" name="password" class="form-control" value="<?php echo $major_gpa; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Credit Hours</label>
                <input type="password" name="password" class="form-control" value="<?php echo $credit_hours; ?>">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>Funding</label>
                <input type="password" name="password" class="form-control" value="<?php echo $funding; ?>">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>Graduate Date</label>
                <input type="password" name="password" class="form-control" value="<?php echo $graduate_date; ?>">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>Date Of Entry</label>
                <input type="password" name="password" class="form-control" value="<?php echo $date_of_entry; ?>">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>GPA</label>
                <input type="password" name="password" class="form-control" value="<?php echo $gpa; ?>">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>    
</body>
</html>