<?php
session_start();
require('dbconfig.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Student Feedback System</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background:#00001a">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="color:#C03506">STUDENT FEEDBACK SYSTEM</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li style="color:#FFFFFF">
                        <a style="color:#C03506" href="index.php"><i class="fa fa-home fa-fw"></i>Home</a>
                    </li>
                    <li><a style="color:#C03506" href="index.php?info=registration"><i class="fa fa-sign-out fa-fw"></i>Registration</a></li>
                    <li class="dropdown">
                        <a style="color:#C03506" href="#" class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-sign-in fa-fw"></i>Login
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">

                            <li><a href="index.php?info=login">Student</a></li>
                            <li><a href="index.php?info=faculty_login">Faculty</a></li>
                            <li><a href="admin">Admin</a></li>
                        </ul>
                    </li>
                    <li style="color:#FFFFFF">
                        <a style="color:#C03506" href="index.php?info=about"><i class="fa fa-home fa-fw"></i>About</a>
                    </li>
                    <li>
                        <a style="color:#C03506" href="index.php?info=contact"><i class="fa fa-phone fa-fw"></i>Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <?php 
					@$info=$_GET['info'];
					if( !empty($info) && in_array( $info, ['about', 'contact', 'login','faculty_login', 'registration'] ) )
					{
                        if($info === 'login') {
                            include('student/'.$info.'.php');
                        } else if($info === 'faculty_login') {
                            include('faculty/'.$info.'.php');
                        } else {
                            include($info.'.php');   
                        }
					}
					else
					{
				?>
        <!-- slider start -->
        <header id="myCarousel" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="fill" style="background-image:url('images/feedbacka.jpg');"></div>
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="item">
                    <div class="fill" style="background-image:url('images/feedbackb.jpg');"></div>
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="item">
                    <div class="fill" style="background-image:url('images/feedbackc.jpg');"></div>
                    <div class="carousel-caption">

                    </div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="icon-prev"></span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="icon-next"></span>
                </a>
        </header>
        <!-- slider -->


        <!-- Page Content -->
        <div class="container">

            <div class="row">
                <div class="col-lg-12">

                    <div class="col-sm-10" style="margin-top:20Spx;margin-bottom:80px">
                        <h2>About Student Feedback System</h2>
                        <p color="#741E35">
                            This is a Student Feedback System where students can give feedback about their courses and faculties.
                            This feedback system asks a bunch of questions so that proper feedback can be given regarding various topics.
                            This project takes feedback from students and provides them to the required faculties so that they know whether they are doing well or they need to do better.
                            Students can also give feedback on the courses undertaken so that the courses can be modified according to the given feedbacks.
                        </p>

                    </div>

                <?php } ?>
                </div>

            </div>
            <!-- /.container -->

            <div class="navbar-fixed-bottom nav navbar-inverse text-center" style="padding:15px;height:40px; background:#000000">
                <span style="color:#DD7A20">A project on Student Feedback System by Sanchit Saxena & Aman Srivastava</span>
            </div>
            <!-- jQuery -->
            <script src="css/jquery.js"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="css/bootstrap.min.js"></script>

            <!-- Script to Activate the Carousel -->
            <script>
                $('.carousel').carousel({
                    interval: 5000 //changes the speed
                })
            </script>
</body>
</html>