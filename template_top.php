<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Garage System</title>
	<meta name="description" content="">
	<!--

Template 2079 Garage

http://www.tooplate.com/view/2079-garage

-->
	<meta name="author" content="Web Domus Italia">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="source/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="source/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="style/slider.css">
	<link rel="stylesheet" type="text/css" href="style/mystyle.css">

	<!-- borey added --><!--
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet"> -->
	<!-- // -->
</head>

<!-- <body background="image/bg.jpg"> -->
<body>
	<!-- Header -->
	<div class="allcontain">
		<div class="header" align="right">
		<!-- login register -->
			<ul class="logreg">
			<?php
			session_start();
			if(isset($_SESSION['active'])==1)
			{
			if ($_SESSION['active'] == 1 || $_SESSION['active'] == 2)

				echo '<li>'.$_SESSION['username'].'</li>&nbsp;  &nbsp;&nbsp;  &nbsp;';
			} else {
			?>
				<li><a href="login.php">Login</a></li>
				<li><a href="register.php"><span class="register">Register</span></a></li>
			<?php
			}

			?>
			</ul>

		</div>

		<nav class="topnavbar navbar-default topnav">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed toggle-costume" data-toggle="collapse" data-target="#upmenu" aria-expanded="false">
					<span class="sr-only"> Toggle navigaion</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
					<a class="navbar-brand logo" href="index.php"><img src="image/logo1.png" alt="logo"></a>
				</div>
			</div>
			<div class="collapse navbar-collapse" id="upmenu">
				<ul class="nav navbar-nav" id="navbarontop">
				<?php  if(isset($_SESSION['active'])==1) {
					if ($_SESSION['active'] == 2) { //admin?>

						<!-- <li class="active"><a href="mainpage.php">หน้าแรก</a> </li> -->
						<li class=""><a href="manager_transaction.php">ทำรายการ</a> </li>
						<li class=""><a href="report.php">รายงาน</a> </li>
						<li class=""><a href="manager_user.php">จัดการผู้ใช้งาน</a> </li>
						<li class=""><a href="manager_user-add.php">เพิ่มรายชื่อผู้ใช้</a> </li>

					<?php } if ($_SESSION['active'] == 1) { ?>
						<li class=""><a href="report_user_car.php">ดูสถานะรถ</a> </li>
					<?php } if ($_SESSION['active'] == 1 || $_SESSION['active'] == 2)
					{ //adminoruser ?>
						<li class=""><a href="update_profile.php">แก้ไขข้อมูลส่วนตัว</a> </li>
					<?php } if ($_SESSION['active'] == 1 || $_SESSION['active'] == 2 ) { //admin or user ?>
						<button><span class="postnewcar"><a href="signout.php">ออกจากระบบ</a></span></button>
					<?php }
				}?>
				</ul>
			</div>
		</nav>
	</div>
