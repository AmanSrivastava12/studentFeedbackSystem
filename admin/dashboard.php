<?php
session_start();
if(!isset($_SESSION['user']))
{
header('location:index.php');
}
include('../dbconfig.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin Dashboard</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/metisMenu.min.css" rel="stylesheet">
    <link href="../css/sb-admin-2.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php">Student Feedback System</a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="dashboard.php?info=update_password"><i class="fa fa-gear fa-fw"></i> Change Password</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="dashboard.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
						<li>
                            <a href="#"><i class="fa fa-user fa-fw"></i>Faculty<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="dashboard.php?info=add_faculty"><i class="fa fa-plus fa-fw"></i> Add Faculty</a>
                                </li>
								 <li>
                                    <a href="dashboard.php?info=show_faculty"><i class="fa fa-eye"></i> Manage faculty</a>
                                </li>                           
							</ul>
                        </li>
						<li>
                            <a href="#"><i class="fa fa-user fa-fw"></i>Student<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
								 <li>
                                    <a href="dashboard.php?info=display_student"><i class="fa fa-eye"></i> Manage Student</a>
                                </li> 
							             
							</ul>
                        </li>
		                <li>
                            <a href="#"><i class="fa fa-user fa-book"></i>Feedback<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">  
                            <li><a href="dashboard.php?info=feedback"><i class="fa fa-eye"></i> Feedback</a></li>
                            <li><a href="dashboard.php?info=feedback_average"><i class="fa fa-eye"></i> Feedback Average</a></li>           
							</ul>
                        </li>		
		<li>
			<a href="dashboard.php?info=contact"><i class="fa fa-eye"></i> Contact us</a>
		</li>       
                    </ul>
                </div>
            </div>
        </nav>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                	        <?php 
								@$id=$_GET['id'];
								@$info=$_GET['info'];
								if($info!="" && ($info=="add_faculty" || $info=="show_faculty" || $info=="edit_faculty" || $info=="display_student" || $info=="contact" || $info=="feedback" || $info=="feedback_average" || $info=="update_password"))
								{
								include($info.'.php');	
								}
								else
								{
								include('dashboard_home.php');
								}
							?>
				</div>
            </div>
        </div>
    </div>
    <script src="../css/jquery.min.js"></script>
    <script src="../css/bootstrap.min.js"></script>
    <script src="../css/metisMenu.min.js"></script>
    <script src="../css/sb-admin-2.js"></script>
</body>
</html>
