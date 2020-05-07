<?php
    session_start();
    require_once "../../common_assets/config.php";

    // Remove student
    if(isset($_POST['remove_user'])){
        $conn->query("DELETE FROM Student WHERE Student.u_id = '" . $_POST['remove_user'] . "'");
        $conn->query("DELETE FROM User WHERE User.u_id = '" . $_POST['remove_user'] . "'");
    }

    $user_name = $_SESSION['username'];
    $r_students = $conn->query("SELECT * FROM User JOIN Student WHERE Student.u_id = User.u_id");

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="../../common_assets/utep_logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Dashboard Home</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet" />

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>

<body>

    <div class="wrapper">
        <div class="sidebar" data-color="blue" data-image="assets/img/sidebar-5.jpg">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="dashboard.php" class="simple-text">
                        Admin Dashboard
                    </a>
                </div>

                <ul class="nav">
                    <li class="active">
                        <a href="dashboard.php">
                            <i class="pe-7s-graph"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="user.php">
                            <i class="pe-7s-user"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-panel">
            <nav class="navbar navbar-default navbar-fixed">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#navigation-example-2">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Dashboard</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-left">
                            
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="../../login/login.php">
                                    <p>Log out</p>
                                </a>
                            </li>
                            <li class="separator hidden-lg"></li>
                        </ul>
                    </div>
                </div>
            </nav>


            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Students</h4>
                                    <!-- <p class="category">Created using Roboto Font Family</p> -->
                                </div>
                                <div class="content table-responsive table-full-width">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Classification</th>
                                            <th></th>
                                            <!-- <th>Link</th> -->
                                        </thead>
                                        <tbody>
                                            <?php
                                                while ($rows = $r_students->fetch_assoc()) {
                                                    $s_id = $rows['u_id'];
                                                    $s_name = $rows['u_fname'] . " " . $rows['u_lname'];
                                                    $s_class = $rows['s_is_doctorate_student'] > 0 ? "Doctorate student" : "Master Student";
                                                    echo "
                                                    <tr>
                                                    <td>$s_id</td>
                                                    <td>$s_name</td>
                                                    <td>$s_class</td>
                                                    <td>
                                                        <form action=\"\" method=\"post\">
                                                            <button type=\"submit\" class=\"button\" name=\"remove_user\" value= \"" . $s_id . "\"> Remove User </button>
                                                        </form>
                                                    </td>
                                                    </tr>
                                                    ";
                                                }
                                            ?>

                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>


            <footer class="footer">
                <div class="container-fluid">

                    <p class="copyright pull-right">
                        &copy;
                        <script>document.write(new Date().getFullYear())</script> <a
                            href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                    </p>
                </div>
            </footer>

        </div>
    </div>


</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>

<script type="text/javascript">
    $(document).ready(function () {

        demo.initChartist();
    });
</script>

</html>