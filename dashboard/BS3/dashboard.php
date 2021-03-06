<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="../../common_assets/utep_logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Dashboard Home </title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet" />

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet" />


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <!-- <link href="assets/css/demo.css" rel="stylesheet" /> -->


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
                        Student Dashboard "<?=$var?>"
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
                    <li>
                        <a href="portfolio.php">
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
                        <a class="navbar-brand" href="#">Dashboard</a>
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
                                    <b class="caret hidden-lg hidden-md"></b>
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
                            <!-- <li class="dropdown"> -->
                            <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
                                        Dropdown
                                        <b class="caret"></b>
                                    </p>

                                </a> -->
                            <!-- <ul class="dropdown-menu"> -->
                            <!-- <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul> -->
                            <!-- </li> -->
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
                    <!-- <div class="row">
                        <div class="col-md-4">
                            <div class="card">

                                <div class="header">
                                    <h4 class="title">Email Statistics</h4>
                                    <p class="category">Last Campaign Performance</p>
                                </div>
                                <div class="content">
                                    <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>

                                    <div class="footer">
                                        <div class="legend">
                                            <i class="fa fa-circle text-info"></i> Open
                                            <i class="fa fa-circle text-danger"></i> Bounce
                                            <i class="fa fa-circle text-warning"></i> Unsubscribe
                                        </div>
                                        <hr>
                                        <div class="stats">
                                            <i class="fa fa-clock-o"></i> Campaign sent 2 days ago
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Users Behavior</h4>
                                    <p class="category">24 Hours performance</p>
                                </div>
                                <div class="content">
                                    <div id="chartHours" class="ct-chart"></div>
                                    <div class="footer">
                                        <div class="legend">
                                            <i class="fa fa-circle text-info"></i> Open
                                            <i class="fa fa-circle text-danger"></i> Click
                                            <i class="fa fa-circle text-warning"></i> Click Second Time
                                        </div>
                                        <hr>
                                        <div class="stats">
                                            <i class="fa fa-history"></i> Updated 3 minutes ago
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->



                    <div class="row">
                        <!-- <div class="col-md-6">
                            <div class="card ">
                                <div class="header">
                                    <h4 class="title">2014 Sales</h4>
                                    <p class="category">All products including Taxes</p>
                                </div>
                                <div class="content">
                                    <div id="chartActivity" class="ct-chart"></div>

                                    <div class="footer">
                                        <div class="legend">
                                            <i class="fa fa-circle text-info"></i> Tesla Model S
                                            <i class="fa fa-circle text-danger"></i> BMW 5 Series
                                        </div>
                                        <hr>
                                        <div class="stats">
                                            <i class="fa fa-check"></i> Data information certified
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <div class="col-md-6">
                            <div class="card ">
                                <div class="header">
                                    <h4 class="title">Milestones</h4>
                                    <p class="category">Spring 2020</p>
                                </div>
                                <div class="content">
                                    <div class="table-full-width">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="checkbox">
                                                            <input id="checkbox1" type="checkbox">
                                                            <label for="checkbox1"></label>
                                                        </div>
                                                    </td>
                                                    <td>Review of student’s progress with doctoral studies committee
                                                    </td>
                                                    <!-- <!-- <td class="td-actions text-right">
                                                        <button type="button" rel="tooltip" title="Edit Task"
                                                            class="btn btn-info btn-simple btn-xs">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                        <button type="button" rel="tooltip" title="Remove"
                                                            class="btn btn-danger btn-simple btn-xs">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </td> -->
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="checkbox">
                                                            <input id="checkbox2" type="checkbox">
                                                            <label for="checkbox2"></label>
                                                        </div>
                                                    </td>
                                                    <td>Successful completion of qualifying process
                                                    </td>
                                                    <!-- <td class="td-actions text-right">
                                                        <button type="button" rel="tooltip" title="Edit Task"
                                                            class="btn btn-info btn-simple btn-xs">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                        <button type="button" rel="tooltip" title="Remove"
                                                            class="btn btn-danger btn-simple btn-xs">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </td> -->
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="checkbox">
                                                            <input id="checkbox3" type="checkbox">
                                                            <label for="checkbox3"></label>
                                                        </div>
                                                    </td>
                                                    <td>Coursework successfully completed
                                                    </td>
                                                    <!-- <td class="td-actions text-right">
                                                        <button type="button" rel="tooltip" title="Edit Task"
                                                            class="btn btn-info btn-simple btn-xs">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                        <button type="button" rel="tooltip" title="Remove"
                                                            class="btn btn-danger btn-simple btn-xs">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </td> -->
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="checkbox">
                                                            <input id="checkbox4" type="checkbox">
                                                            <label for="checkbox4"></label>
                                                        </div>
                                                    </td>
                                                    <td>Dissertation Committee appointed and approved by Graduate School
                                                    </td>
                                                    <!-- <td class="td-actions text-right">
                                                        <button type="button" rel="tooltip" title="Edit Task"
                                                            class="btn btn-info btn-simple btn-xs">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                        <button type="button" rel="tooltip" title="Remove"
                                                            class="btn btn-danger btn-simple btn-xs">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </td> -->
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="checkbox">
                                                            <input id="checkbox5" type="checkbox">
                                                            <label for="checkbox5"></label>
                                                        </div>
                                                    </td>
                                                    <td>Research protocols and/or IRB approval (as applicable) </td>
                                                    <!-- <td class="td-actions text-right">
                                                        <button type="button" rel="tooltip" title="Edit Task"
                                                            class="btn btn-info btn-simple btn-xs">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                        <button type="button" rel="tooltip" title="Remove"
                                                            class="btn btn-danger btn-simple btn-xs">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </td> -->
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="checkbox">
                                                            <input id="checkbox6" type="checkbox">
                                                            <label for="checkbox6"></label>
                                                        </div>
                                                    </td>
                                                    <td>Dissertation proposal completed and approved </td>
                                                    <!-- <td class="td-actions text-right">
                                                        <button type="button" rel="tooltip" title="Edit Task"
                                                            class="btn btn-info btn-simple btn-xs">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                        <button type="button" rel="tooltip" title="Remove"
                                                            class="btn btn-danger btn-simple btn-xs">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </td> -->
                                                <tr>
                                                    <td>
                                                        <div class="checkbox">
                                                            <input id="checkbox7" type="checkbox">
                                                            <label for="checkbox7"></label>
                                                        </div>
                                                    </td>
                                                    <td>Student admitted to doctoral candidacy </td>
                                                    <!-- <td class="td-actions text-right">
                                                        <button type="button" rel="tooltip" title="Edit Task"
                                                            class="btn btn-info btn-simple btn-xs">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                        <button type="button" rel="tooltip" title="Remove"
                                                            class="btn btn-danger btn-simple btn-xs">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </td> -->
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="checkbox">
                                                            <input id="checkbox8" type="checkbox">
                                                            <label for="checkbox8"></label>
                                                        </div>
                                                    </td>
                                                    <td>Dissertation completed, successfully defended, and approved by
                                                        Committee</td>
                                                    <!-- <td class="td-actions text-right">
                                                        <button type="button" rel="tooltip" title="Edit Task"
                                                            class="btn btn-info btn-simple btn-xs">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                        <button type="button" rel="tooltip" title="Remove"
                                                            class="btn btn-danger btn-simple btn-xs">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </td> -->
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="checkbox">
                                                            <input id="checkbox9" type="checkbox">
                                                            <label for="checkbox9"></label>
                                                        </div>
                                                    </td>
                                                    <td>Student completes and files all paperwork required for
                                                        graduation</td>
                                                    <!-- <td class="td-actions text-right">
                                                        <button type="button" rel="tooltip" title="Edit Task"
                                                            class="btn btn-info btn-simple btn-xs">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                        <button type="button" rel="tooltip" title="Remove"
                                                            class="btn btn-danger btn-simple btn-xs">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </td> -->
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="checkbox">
                                                            <input id="checkbox10" type="checkbox">
                                                            <label for="checkbox10"></label>
                                                        </div>
                                                    </td>
                                                    <td>Dissertation accepted by Graduate School </td>
                                                    <!-- <td class="td-actions text-right">
                                                        <button type="button" rel="tooltip" title="Edit Task"
                                                            class="btn btn-info btn-simple btn-xs">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                        <button type="button" rel="tooltip" title="Remove"
                                                            class="btn btn-danger btn-simple btn-xs">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </td> -->
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="checkbox">
                                                            <input id="checkbox11" type="checkbox">
                                                            <label for="checkbox11"></label>
                                                        </div>
                                                    </td>
                                                    <td>Exit interview completed</td>
                                                    <!-- <td class="td-actions text-right">
                                                        <button type="button" rel="tooltip" title="Edit Task"
                                                            class="btn btn-info btn-simple btn-xs">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                        <button type="button" rel="tooltip" title="Remove"
                                                            class="btn btn-danger btn-simple btn-xs">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </td> -->
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="checkbox">
                                                            <input id="checkbox12" type="checkbox">
                                                            <label for="checkbox12"></label>
                                                        </div>
                                                    </td>
                                                    <td>Survey of Earned Doctorates submitted </td>
                                                    <!-- <td class="td-actions text-right">
                                                        <button type="button" rel="tooltip" title="Edit Task"
                                                            class="btn btn-info btn-simple btn-xs">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                        <button type="button" rel="tooltip" title="Remove"
                                                            class="btn btn-danger btn-simple btn-xs">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </td> -->
                                                </tr>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="footer">
                                        <hr>
                                        <div class="stats">
                                            <i class="fa fa-history"></i> Updated 3 minutes ago
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card ">
                                <div class="header">
                                    <h4 class="title">Degree Completion Checklist</h4>
                                    <p class="category">Spring 2020</p>
                                </div>
                                <div class="content">
                                    <div class="table-full-width">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="checkbox">
                                                            <input id="checkbox13" type="checkbox">
                                                            <label for="checkbox13"></label>
                                                        </div>
                                                    </td>
                                                    <td>Maintain active student status by registering for courses every
                                                        fall and spring semester.
                                                    </td>
                                                    <!-- <td class="td-actions text-right">
                                                        <button type="button" rel="tooltip" title="Edit Task"
                                                            class="btn btn-info btn-simple btn-xs">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                        <button type="button" rel="tooltip" title="Remove"
                                                            class="btn btn-danger btn-simple btn-xs">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </td> -->
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="checkbox">
                                                            <input id="checkbox14" type="checkbox">
                                                            <label for="checkbox14"></label>
                                                        </div>
                                                    </td>
                                                    <td>Complete Milestones Agreement Form with your advisor no later
                                                        than the last class day of the
                                                        first semester.
                                                    </td>
                                                    <!-- <td class="td-actions text-right">
                                                        <button type="button" rel="tooltip" title="Edit Task"
                                                            class="btn btn-info btn-simple btn-xs">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                        <button type="button" rel="tooltip" title="Remove"
                                                            class="btn btn-danger btn-simple btn-xs">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </td> -->
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="checkbox">
                                                            <input id="checkbox15" type="checkbox">
                                                            <label for="checkbox15"></label>
                                                        </div>
                                                    </td>
                                                    <td>Complete all required organized coursework.
                                                    </td>
                                                    <!-- <td class="td-actions text-right">
                                                        <button type="button" rel="tooltip" title="Edit Task"
                                                            class="btn btn-info btn-simple btn-xs">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                        <button type="button" rel="tooltip" title="Remove"
                                                            class="btn btn-danger btn-simple btn-xs">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </td> -->
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="checkbox">
                                                            <input id="checkbox16" type="checkbox">
                                                            <label for="checkbox16"></label>
                                                        </div>
                                                    </td>
                                                    <td>Schedule and successfully complete required qualifying process
                                                    </td>
                                                    <!-- <td class="td-actions text-right">
                                                        <button type="button" rel="tooltip" title="Edit Task"
                                                            class="btn btn-info btn-simple btn-xs">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                        <button type="button" rel="tooltip" title="Remove"
                                                            class="btn btn-danger btn-simple btn-xs">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </td> -->
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="checkbox">
                                                            <input id="checkbox17" type="checkbox">
                                                            <label for="checkbox17"></label>
                                                        </div>
                                                    </td>
                                                    <td>Form your Dissertation Supervising Committee in consultation
                                                        with your Dissertation Advisor. </td>
                                                    <!-- <td class="td-actions text-right">
                                                        <button type="button" rel="tooltip" title="Edit Task"
                                                            class="btn btn-info btn-simple btn-xs">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                        <button type="button" rel="tooltip" title="Remove"
                                                            class="btn btn-danger btn-simple btn-xs">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </td> -->
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="checkbox">
                                                            <input id="checkbox18" type="checkbox">
                                                            <label for="checkbox18"></label>
                                                        </div>
                                                    </td>
                                                    <td>Have your committee approved by the Graduate Program Committee
                                                        and Graduate School.</td>
                                                    <!-- <td class="td-actions text-right">
                                                        <button type="button" rel="tooltip" title="Edit Task"
                                                            class="btn btn-info btn-simple btn-xs">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                        <button type="button" rel="tooltip" title="Remove"
                                                            class="btn btn-danger btn-simple btn-xs">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </td> -->
                                                <tr>
                                                    <td>
                                                        <div class="checkbox">
                                                            <input id="checkbox19" type="checkbox">
                                                            <label for="checkbox19"></label>
                                                        </div>
                                                    </td>
                                                    <td>Prepare and successfully present your dissertation proposal.
                                                    </td>
                                                    <!-- <td class="td-actions text-right">
                                                        <button type="button" rel="tooltip" title="Edit Task"
                                                            class="btn btn-info btn-simple btn-xs">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                        <button type="button" rel="tooltip" title="Remove"
                                                            class="btn btn-danger btn-simple btn-xs">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </td> -->
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="checkbox">
                                                            <input id="checkbox20" type="checkbox">
                                                            <label for="checkbox20"></label>
                                                        </div>
                                                    </td>
                                                    <td>Apply for Advancement to Candidacy.</td>
                                                    <!-- <td class="td-actions text-right">
                                                        <button type="button" rel="tooltip" title="Edit Task"
                                                            class="btn btn-info btn-simple btn-xs">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                        <button type="button" rel="tooltip" title="Remove"
                                                            class="btn btn-danger btn-simple btn-xs">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </td> -->
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="checkbox">
                                                            <input id="checkbox21" type="checkbox">
                                                            <label for="checkbox21"></label>
                                                        </div>
                                                    </td>
                                                    <td>Enroll in required dissertation hours and complete your
                                                        dissertation.</td>
                                                    <!-- <td class="td-actions text-right">
                                                        <button type="button" rel="tooltip" title="Edit Task"
                                                            class="btn btn-info btn-simple btn-xs">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                        <button type="button" rel="tooltip" title="Remove"
                                                            class="btn btn-danger btn-simple btn-xs">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </td> -->
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="checkbox">
                                                            <input id="checkbox22" type="checkbox">
                                                            <label for="checkbox22"></label>
                                                        </div>
                                                    </td>
                                                    <td>Successfully complete the defense of your dissertation. </td>
                                                    <!-- <td class="td-actions text-right">
                                                        <button type="button" rel="tooltip" title="Edit Task"
                                                            class="btn btn-info btn-simple btn-xs">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                        <button type="button" rel="tooltip" title="Remove"
                                                            class="btn btn-danger btn-simple btn-xs">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </td> -->
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="checkbox">
                                                            <input id="checkbox23" type="checkbox">
                                                            <label for="checkbox23"></label>
                                                        </div>
                                                    </td>
                                                    <td>Submit required documentation to the Graduate School for review
                                                        of graduation requirements
                                                        and final approval for graduation.</td>
                                                    <!-- <td class="td-actions text-right">
                                                        <button type="button" rel="tooltip" title="Edit Task"
                                                            class="btn btn-info btn-simple btn-xs">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                        <button type="button" rel="tooltip" title="Remove"
                                                            class="btn btn-danger btn-simple btn-xs">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </td> -->
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="checkbox">
                                                            <input id="checkbox24" type="checkbox">
                                                            <label for="checkbox24"></label>
                                                        </div>
                                                    </td>
                                                    <td>Students are expected to publish their work in conferences and
                                                        journals that are established in
                                                        their areas of studies.</td>
                                                    <!-- <td class="td-actions text-right">
                                                        <button type="button" rel="tooltip" title="Edit Task"
                                                            class="btn btn-info btn-simple btn-xs">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                        <button type="button" rel="tooltip" title="Remove"
                                                            class="btn btn-danger btn-simple btn-xs">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </td> -->
                                                </tr>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="footer">
                                        <hr>
                                        <div class="stats">
                                            <i class="fa fa-history"></i> Updated 3 minutes ago
                                        </div>
                                    </div>
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

<script type="text/javascript">
    $(document).ready(function () {

        demo.initChartist();

        // $.notify({
        //     icon: 'pe-7s-gift',
        //     message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

        // }, {
        //     type: 'info',
        //     timer: 4000
        // });

    });
</script>

</html>
