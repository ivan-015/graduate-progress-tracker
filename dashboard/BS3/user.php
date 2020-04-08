<?php
session_start();
require_once "../../common_assets/config.php";
$username = $_SESSION['username'];

// $fname_query = "select u_fname from user where u_email='" . $username . "';";
// $fname_res = $conn->query($fname_query);

// $fname = $fname_res->fetch_assoc()['u_fname'];

// $lname_query = "select u_fname from user where u_email='" . $username . "';";
// $lname_res = $conn->query($lname_query)->fetch_assoc();
// $fname = $fname_res['u_lname'];
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="../../common_assets/utep_logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>User Profile</title>

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
                    <a href="dashboard.html" class="simple-text">
                        Student Dashboard
                    </a>
                </div>

                <ul class="nav">
                    <li>
                        <a href="dashboard.html">
                            <i class="pe-7s-graph"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="user.html">
                            <i class="pe-7s-user"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li>
                        <a href="portfolio.html">
                            <i class="pe-7s-note2"></i>
                            <p>Portfolio</p>
                        </a>
                    </li>
                    <li>
                        <a href="documents.html">
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
                        <a class="navbar-brand" href="#">User</a>
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
                        <div class="col-md-8">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Edit Profile</h4>
                                </div>
                                <div class="content">
                                    <form>
                                        <div class="row">
                                            <!-- <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Company (disabled)</label>
                                                    <input type="text" class="form-control" disabled
                                                        placeholder="Company" value="Creative Code Inc.">
                                                </div>
                                            </div> -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>username</label>
                                                    <input type="text" class="form-control"
                                                        value="<?=$username?>" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email address</label>
                                                    <input type="email" class="form-control"
                                                        value="<?=$username?>@miners.utep.edu">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>First Name</label>
                                                    <input type="text" class="form-control" placeholder="Company"
                                                    value="<?=$fname?>" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Last Name</label>
                                                    <input type="text" class="form-control" placeholder="Last Name"
                                                        value="Andrew" disabled>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input type="text" class="form-control" placeholder="Home Address"
                                                        value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>City</label>
                                                    <input type="text" class="form-control" placeholder="City"
                                                        value="Mike">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Country</label>
                                                    <input type="text" class="form-control" placeholder="Country"
                                                        value="Andrew">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Postal Code</label>
                                                    <input type="number" class="form-control" placeholder="ZIP Code">
                                                </div>
                                            </div>
                                        </div> -->

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>About Me</label>
                                                    <textarea rows="5" class="form-control"
                                                        placeholder="Here can be your description"
                                                        value="Mike">Hello, my name is User. I am a PhD Student at the University of Texas at El Paso.</textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-info btn-fill pull-right">Update
                                            Profile</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-user">
                                <div class="image">
                                    <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400"
                                        alt="..." />
                                </div>
                                <div class="content">
                                    <div class="author">
                                        <a href="#">
                                            <img class="avatar border-gray" src="assets/img/faces/face-3.jpg"
                                                alt="..." />

                                            <h4 class="title">Mike Andrew<br />
                                                <small>michael23</small>
                                            </h4>
                                        </a>
                                    </div>
                                    <p class="description text-center"> Major GPA: 3.9<br>
                                        Overall GPA: 3.6<br>
                                        Graduation date: May 2020<br>
                                        Credit hours: 120
                                    </p>
                                </div>
                                <hr>
                                <!-- <div class="text-center">
                                    <button href="#" class="btn btn-simple"><i
                                            class="fa fa-facebook-square"></i></button>
                                    <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                    <button href="#" class="btn btn-simple"><i
                                            class="fa fa-google-plus-square"></i></button>

                                </div> -->
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