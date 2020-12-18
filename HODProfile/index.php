﻿<?php
	include 'index1.php';
	?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!--favicon-->
        <link rel="shortcut icon" href="image/favicon.png" type="image/icon">
        <link rel="icon" href="favicon.png" type="image/icon">

		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>HOD Login</title>
        <meta name="description" content="">
        <meta name="author" content="templatemo">
	    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
	    <link href="css/font-awesome.min.css" rel="stylesheet">
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/templatemo-style.css" rel="stylesheet">
        <!-- Footer -->
        <link type="text/css" rel="stylesheet" href="../../Homepage/css/style.css">

	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body class="light-gray-bg">
		<div class="templatemo-content-widget templatemo-login-widget white-bg">
			<header class="text-center">

	          <h1>HOD Login</h1>
	        </header>
	        <form class="templatemo-login-form" method="POST" action="login1.php">
				<div class="col-lg-6 col-md-6 form-group">
                  <label class="control-label templatemo-block">Branch</label>
                  <select class="form-control" name="Branch">
                    <option value="select">Branch</option>
                    <option value="CE">CE</option>
                    <option value="IT">IT</option>
                    <option value="EE">EE</option>
                    <option value="EC">EC</option>
                    <option value="ME">ME</option>
                    <option value="CL">CL</option>
                    <option value="MBA">MBA</option>
                  </select>
                </div>
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>
		              	<input type="text" class="form-control" placeholder="Username" name="username" >
		          	</div>
	        	</div>
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>
		              	<input type="password" class="form-control" placeholder="******" name="password">
		          	</div>
	        	</div>
	          	<div class="form-group">
				    <div class="checkbox squaredTwo">
				        <input type="checkbox" id="c1" name="cc" />
						<label for="c1"><span></span>Remember me</label>
				    </div>
				</div>
				<div class="form-group">
					<button type="submit" class="templatemo-blue-button width-100">Login</button>
				</div>
	        </form>
		</div>
        <div class="templatemo-content-widget templatemo-login-widget templatemo-register-widget white-bg">
			<p>Can't Access Account? <strong><a href="Forgot Password.php" class="blue-text">Reset Password</a></strong></p>
		</div>
		<!--Footer-->
		<div class="footer">
			<div class="container">
				<div class="col-md-3 ftr_navi ftr">
					<h3>NAVIGATION</h3>
					<ul>
						<li>
							<a href="../Homepage/index.php">Home</a>
						</li>
						<li>
							<a href="../SProfile/index.php">Student Login</a>
						</li>
						<li>
							<a href="../PProfile/index.php">Placement Login</a>
						</li>
						<li>
							<a href="../HODProfile/index.php">HOD Login</a>
						</li>
						<li>
							<a href="../Priprofile/index.php">Administrative Login</a>
						</li>
						                        <li>
                            <a href="../Gallery/index.html">PMS Gallery</a>
                        </li>
					</ul>
				</div>
				<div class="col-md-3 ftr_navi ftr">
					<h3>MEMBERS</h3>
					<ul>
						<li>
							<a href="#">Customer Support</a>
						</li>
						<li>
							<a href="#">Placement Support</a>
						</li>
						<li>
							<a href="#">Faculty Support</a>
						</li>
						<li>
							<a href="#">Registered Companies</a>
						</li>
						<li>
							<a href="#">Training</a>
						</li>
					</ul>
				</div>
				<div class="col-md-3 get_in_touch ftr">
					<h3>GET IN TOUCH</h3>
					<p>Khatraj - Kalol Road, Moti Bhoyan
                    Tal. Kalol, Dist. Gandhinagar-382721</p>
                    <p> +91 27642 81862|+91 9904405900/01</p>
				<p> <a href="mailto:director@git.org.in">director@git.org.in</a></p>
				</div>
				<div class="col-md-3 ftr-logo">
					<p>Copyright &copy; 2020 Gandhinagar Institute of Technology</p>
                    <p>Developed by
                    <a title="Designer" target="_blank" href="https://iamkhantil.github.io/"><img alt="Developer" src="../Homepage/img-logo.png" class=""></a>
				</div>
				<div class="clearfix"></div>
			</div>
			</div>
	</body>
</html>
