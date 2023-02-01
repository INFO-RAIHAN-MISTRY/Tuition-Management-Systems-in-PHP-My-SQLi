<?php
session_start();
	include'../db_conn.php';

	if (!isset($_SESSION['st_email'])) {
		header('location:../login.php');
	}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="./vendor/bootstrap.min.css">
	<link rel="stylesheet" href="./vendor/bootstrap.css">
	<link href="./vendor/bootswatch.scss" rel="stylesheet/scss" type="text/css">
	<link href="./vendor/variables.scss" rel="stylesheet/scss" type="text/css">
	<script src="https://kit.fontawesome.com/940549f740.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

  </head>
  <body class="d-flex flex-column h-100">
    <header>
    	<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  <div class="container-fluid">
			    <a class="navbar-brand" href="#">Navbar</a>
			    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
			      <span class="navbar-toggler-icon"></span>
			    </button>
			    <div class="collapse navbar-collapse" id="navbarColor03">
			      <ul class="navbar-nav me-auto">
			        <li class="nav-item">
			          <a class="nav-link active" href="./index.php"><i class="fa-solid fa-house p-2"></i>Home
			            <span class="visually-hidden">(current)</span>
			          </a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link" href="./mycourses.php"><i class="fa-solid fa-book p-2"></i>My Courses</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link" href="./myfees.php"><i class="fa-solid fa-indian-rupee p-2"></i>My Fees</a>
			        </li>
			        <li class="nav-item dropdown">
			          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-gear p-2"></i></i>Settings</a>
			          <div class="dropdown-menu">
			          	<!-- <a class="dropdown-item" href="./profile.php">Profile</a> -->
			            <a class="dropdown-item" href="./change_password.php">Change Password</a>
			          </div>
			        </li>
			      </ul>
			      <div class="d-flex">
			        <a href="./logout.php" class="btn btn-outline-primary my-2 my-sm-0" role="button">Logout</a>
			      </div>
			    </div>
			  </div>
			</nav>
    </header>