<?php 
    session_start();
    require_once("../../common_assets/config.php");

    $internships = $conn->query("SELECT * FROM User JOIN Internships WHERE User.u_id = Internships.u_id AND User.u_email = " . "'" . $_SESSION['username'] . "'");
    $awards = $conn->query("SELECT * FROM User JOIN Awards WHERE User.u_id = Awards.u_id AND User.u_email = " . "'" . $_SESSION['username'] . "'");
    $conferences = $conn->query("SELECT * FROM User JOIN Conferences WHERE User.u_id = Conferences.u_id AND User.u_email = " . "'" . $_SESSION['username'] . "'");
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="../../common_assets/utep_logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Portfolio</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet" />

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet" />


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>

<body>

    <div class="wrapper">
        <div class="sidebar" data-color="orange" data-image="assets/img/sidebar-5.jpg">

            <!--

Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
Tip 2: you can also add an image using data-image tag

-->

            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="dashboard.php" class="simple-text">
                        Student Dashboard
                    </a>
                </div>

                <ul class="nav">
                    <li>
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
                    <li class="active">
                        <a href="portfolio.html">
                            <i class="pe-7s-note2"></i>
                            <p>Portfolio</p>
                        </a>
                    </li>
                    <li>
                        <a href="documents.php">
                            <i class="pe-7s-news-paper"></i>
                            <p>Documents</p>
                        </a>
                    </li>
                    <!-- <li>
                <a href="icons.html">
                    <i class="pe-7s-science"></i>
                    <p>Icons</p>
                </a>
            </li> -->
                    <!-- <li>
                    <a href="maps.html">
                        <i class="pe-7s-map-marker"></i>
                        <p>Milestones</p>
                    </a>
                </li> -->
                    <!-- <li>
                        <a href="notifications.html">
                            <i class="pe-7s-bell"></i>
                            <p>Notifications</p>
                        </a>
                    </li> -->
                    <!-- <li class="active-pro">
                <a href="upgrade.html">
                    <i class="pe-7s-rocket"></i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
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
                        <a class="navbar-brand" href="#">Portfolio</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-left">
                            <!-- <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-dashboard"></i>
                                    <p class="hidden-lg hidden-md">Dashboard</p>
                                </a>
                            </li> -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-sm hidden-xs"></b>
                                    <span class="notification hidden-sm hidden-xs">5</span>
                                    <p class="hidden-lg hidden-md">
                                        5 Notifications
                                        <b class="caret"></b>
                                    </p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Notification 1</a></li>
                                    <li><a href="#">Notification 2</a></li>
                                    <li><a href="#">Notification 3</a></li>
                                    <li><a href="#">Notification 4</a></li>
                                    <li><a href="#">Another notification</a></li>
                                </ul>
                            </li>
                            <!-- <li>
                                <a href="">
                                    <i class="fa fa-search"></i>
                                    <p class="hidden-lg hidden-md">Search</p>
                                </a>
                            </li> -->
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <!-- <li>
                                <a href="">
                                    <p>Account</p>
                                </a>
                            </li> -->
                            <!-- <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
                                        Dropdown
                                        <b class="caret"></b>
                                    </p>

                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </li> -->
                            <li>
                                <a href="../../login/login.php">
                                    <p>Log out</p>
                                </a>
                            </li>
                            <li class="separator hidden-lg hidden-md"></li>
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
                                    <h4 class="title">Internships</h4>
                                    <!-- <p class="category">Here is a subtitle for this table</p> -->
                                </div>
                                <div class="content table-responsive table-full-width">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>ID</th>
                                            <th>Company</th>
                                            <th>Position</th>
                                            <th>Date Range</th>
                                            <!-- <th>City</th> -->
                                        </thead>
                                        <tbody>
                                            <?php
                                                $i = 1;
                                                while ($rows = $internships->fetch_assoc()) {
                                                    $u_id = $rows['u_id'];
                                                    $i_name = $rows['i_company'];
                                                    $i_pos = $rows['i_position'];
                                                    $i_date = $rows['i_date_range'];
                                                    echo "
                                                    <tr>
                                                        <td>$i</td>
                                                        <td>$i_name</td>
                                                        <td>$i_pos</td>
                                                        <td>$i_date</td>
                                                        <td>
                                                            <form action=\"\" method=\"post\">
                                                                <button type=\"submit\" class=\"button\" name=\"remove_user\" value= \"" . $u_id . "\" data-value=\"" . $i_date . "\"> Remove Internship </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    ";
                                                    $i++;
                                                }
                                            ?>
                                            
                                        </tbody>
                                    </table>
                                    <a type="button" href="internshipInsert.php" class="btn btn-primary">Add
                                        Internship</a>
                                    <a type="button" href="internshipModify.php" class="btn btn-primary">Modify
                                        Internship</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Awards</h4>
                                    <!-- <p class="category">Here is a subtitle for this table</p> -->
                                </div>
                                <div class="content table-responsive table-full-width">
                                    <table class="table table-hover table-striped">
                                        
                                        <thead>
                                            <th>ID</th>
                                            <th>Award Name</th>
                                            <th>Award Date</th>
                                            <!-- <th>Salary</th>
                                            <th>Country</th>
                                            <th>City</th> -->
                                        </thead>
                                        <tbody>
                                        <?php
                                                $i = 1;
                                                while ($rows = $awards->fetch_assoc()) {
                                                    $u_id = $rows['u_id'];
                                                    $a_name = $rows['a_name'];
                                                    $a_date = $rows['a_date_received'];
                                                    echo "
                                                    <tr>
                                                        <td>$i</td>
                                                        <td>$a_name</td>
                                                        <td>$a_date</td>
                                                        <td>
                                                            <form action=\"\" method=\"post\">
                                                                <button type=\"submit\" class=\"button\" name=\"remove_user\" value= \"" . $u_id . "\" data-value=\"" . $a_name . "\"> Remove Award</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    ";
                                                    $i++;
                                                }
                                            ?>
                                            
                                        </tbody>
                                    </table>
                                    <a type="button" href="awardInsert.php" class="btn btn-primary">Add Award</a>
                                    <a type="button" href="awardModify.php" class="btn btn-primary">Modify Award</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Conferences</h4>
                                    <!-- <p class="category">Here is a subtitle for this table</p> -->
                                </div>
                                <div class="content table-responsive table-full-width">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>ID</th>
                                            <th>Conference Name</th>
                                            <th>Conference Date</th>
                                        </thead>
                                        <tbody>

                                        <?php
                                                $i = 1;
                                                while ($rows = $conferences->fetch_assoc()) {
                                                    $u_id = $rows['u_id'];
                                                    $c_name = $rows['c_name'];
                                                    $c_date = $rows['c_dates_attended'];
                                                    echo "
                                                    <tr>
                                                        <td>$i</td>
                                                        <td>$c_name</td>
                                                        <td>$c_date</td>
                                                        <td>
                                                            <form action=\"\" method=\"post\">
                                                                <button type=\"submit\" class=\"button\" name=\"remove_user\" value= \"" . $u_id . "\" data-value=\"" . $c_date . "\"> Remove Conference</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    ";
                                                    $i++;
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                    <a type="button" href="conferenceInsert.php" class="btn btn-primary">Add
                                        Confrence</a>
                                    <a type="button" href="conferenceModify.php" class="btn btn-primary">Modify
                                        Confrence</a>
                                </div>
                            </div>
                        </div>





                    </div>
                </div>
            </div>

            <footer class="footer">
                <div class="container-fluid">
                    <!-- <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </nav> -->
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


</html>