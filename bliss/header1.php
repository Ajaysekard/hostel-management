<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <!-- Bootstrap Core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/datepicker.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="dist/css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="dist/css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="dist/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="dist/css/dataTable.css" rel="stylesheet" type="text/css">
    <link href="dist/css/timepicker.css" rel="stylesheet" type="text/css">
    <link href="dist/css/calendar.css" rel="stylesheet" type="text/css">
    <link href="dist/css/custom_2.css" rel="stylesheet" type="text/css">
    <link href="dist/css/app.css" rel="stylesheet" type="text/css">

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
            <h3>Bliss House - Boys</h3>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">

            <li>
                <h5 class="titlehms"></h5>
            </li>

            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">

                  
                    <li class="divider"></li>
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
                        <a href="admin_bliss.php"><i class="fa fa-2x fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-users fa-fw"></i>Students Manage<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="stuapp.php">Application</a>
                            </li>
                            <li>
                                <a href="stuappview.php">Student List</a>
                            </li>

                            
                            
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                           <li>
                        <a href="#"><i class="fa fa-users fa-fw"></i>Rooms<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="sturoom.php">Rooms Add</a>
                            </li>
                              <li>
                                <a href="sturoomview.php">Rooms view</a>
                            </li>
                            <li>
                                <a href="sturoomset.php">Student room Set</a>
                            </li>
<li>
                                <a href="stualtroom.php">Student room Alt</a>
                            </li>
                            
                            
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-file-text fa-fw"></i>Attendence<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="attendence_add.php">Add Attendence</a>
                            </li>
                            
                            <li>
                                <a href="attendence_view.php">Attendence View</a>
                            </li>

                        </ul>
                    </li>
                                   
                    <li>
                        <a href="#"><i class="fa fa-list-alt fa-fw"></i>Outpass<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="outing.php">Outing</a>
                            </li>
                            <li>
                                <a href="native.php">Native</a>
                            </li>



                        </ul>
                    </li>
                    
                    
                    
                    <li>
                        <a href="#"><i class="fa fa-list-alt fa-fw"></i>Notice Board<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="addnotice.php">Notice Add/List</a>
                            </li>



                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-cog fa-fw"></i>Setting<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo $base_url.'ui/setting/adduser.php'?>">System Admin User</a>
                            </li>


                        </ul>
                    </li>
                    


                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>
