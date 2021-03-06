<?php 
require_once "class/admin.class.php";
$admin= new Admin();
$admin->checkLoginStatus();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> <?php echo $title ?> </title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Purnima Shrestha</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
               
                <!-- /.dropdown -->
              
                <!-- /.dropdown -->
               
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                      <?php echo' Welcome,'. $_SESSION['admin_name'];?>
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                      
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       
                        <li>
                            <a href="welcome.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Blog Management<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="create_blog.php"><i class="fa fa-plus"></i>Create Blog page</a>
                                </li>
                                <li>
                                    <a href="list_blog.php"><i class="fa fa-list alt"></i>List Blog page</a>
                                </li>
                                <li>
                                    <a href="list_comment.php"><i class="fa fa-list alt"></i>List Comments</a>
                                </li>
                            </ul>
                            <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Image Management<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                        <li>
                                    <a href="create_image.php"><i class="fa fa-plus"></i>Create Image page</a>
                                </li>
                                  <li>
                                    <a href="show_image.php"><i class="fa fa-list alt"></i>Show Image page</a>
                                </li>
                             

                            </ul>
                                  <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Video Management<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                        <li>
                                    <a href="create_video.php"><i class="fa fa-plus"></i>Video Create  </a>
                                </li>
                                 <li>
                                    <a href="delete_video.php"><i class="fa fa-list alt"></i>Video Delete  </a>
                                </li>
                             

                            </ul>
                            <li>
                            <!-- /.nav-second-level -->
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Contact Management<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="show_contact.php"><i class="fa fa-list salt"></i>Contact Lists</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>