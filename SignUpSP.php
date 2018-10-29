<?php
include("connection.php");

if(isset($_POST['signup']))
{
	$name= $_POST['user_name'];
	$pass= $_POST['password'];
	$full= $_POST['fullName'];
	$num= $_POST['mobileNo'];

	if(isset($name)){
		$query=mysqli_query($conn,"SELECT * FROM serviceprovider WHERE user_name='$name'");
		$rows=mysqli_num_rows($query);
		if($rows>=1){
			echo '<script language="javascript">';
			echo 'alert("Username is already in use!")';
			echo '</script>';
		}
	}

	if (isset($_POST['checkbox'])) {
			$svcheckbox = implode(", ",$_POST['checkbox']);
		}

	$query ="insert into serviceprovider (user_name,password,fullName,mobileNo,serviceType)
						values ('$name','$pass','$full','$num','$svcheckbox')";

	if(mysqli_query($conn,$query)){
		echo '<script language="javascript">';
		echo 'alert("Registered Successfully!")';
		echo '</script>';
		echo  "<script> window.location.assign('loginSP.php'); </script>";
	}
}
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>MediCare</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
</head>

<body class="is-preload left-sidebar">
	<div id="page-wrapper">

		<!-- Header -->
		<div id="header-wrapper">
			<header id="header" class="container">

				<!-- Logo -->
				<div id="logo">
					<h1><a href="index.html">MediCare</a></h1>
					<span>For The Elderly..</span>
				</div>

				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li class="current"><a href="index.html">Welcome</a></li>
						<li>
						<li>
							<a href="LoginSU.php">Login/Sign Up</a>
							<ul>
								<li><a href="loginSU.php">Login As Senior User</a></li>
								<li><a href="loginSP.php">Login As Service Provider</a></li>
								<li><a href="SignUpSU.php">Sign Up As Senior User</a></li>
								<li><a href="SignUpSP.php">Sign Up As Service Provider</a></li>
						</li>
					</ul>
					</li>
					</ul>
				</nav>

			</header>
		</div>

		<!--Sign Up-->
		<div class="SignUp">
			<form action="signupsp.php" method="post" style="border:1px solid #ccc">
				<div class="signupprovidercontainer">
							<br>
							<h2>Sign Up as Service Provider</h2>
							<label for="userName"><b>User Name</b>
							<input type="text" placeholder="Enter User Name" name="user_name" required>
							<label for="psw"><b>Password</b>
							<input type="password" placeholder="Enter Password" name="password" required>
							<label for="fullName"><b>Full Name</b>
							<input type="text" placeholder="Enter Full Name" name="fullName" required>
							<label for="mobileNumber"><b>Mobile Number</b>
							<input type="text" placeholder="Enter Mobile Number" name="mobileNo" required>
							<b>Type of services:<b><br>
							<input type="checkbox" name="checkbox[]" value="Appointment">C01-Assist for appointment<br>
					    <input type="checkbox" name="checkbox[]" value="Medication">C02-Supply Medications<br>
					    <input type="checkbox" name="checkbox[]" value="Checkup">C03-Home-Based Checkup

							<div class="signupbtn">
								<input type="submit" name="signup" value="Sign Up">
							</div>
						</div>
			</form>
		</div>
		<!--Sign Up-->

		<!-- Footer -->
		<div id="footer-wrapper">
			<footer id="footer" class="container">
				<div class="row">
					<div class="col-3 col-6-medium col-12-small">

						<!-- Links -->
						<section class="widget links">
							<h3>Our Affiliates </h3>
							<ul class="style2">
								<li><a href="#">HireABabysitter.com</a></li>
								<li><a href="#">HireAChef.com</a></li>
								<li><a href="#">HireAGardener.com</a></li>
								<li><a href="#">HireAPlumber.com</a></li>
								<li><a href="#">HireAProgrammer.com</a></li>
							</ul>
						</section>

					</div>
					<div class="col-3 col-6-medium col-12-small">

						<!-- Links -->
						<section class="widget links">
							<h3>Social</h3>
							<ul class="style2">
								<li><a href="#">Blog</a></li>
								<li><a href="#">LinkedIn</a></li>
							</ul>
						</section>

					</div>
					<div class="col-3 col-6-medium col-12-small">

						<!-- Links -->
						<section class="widget links">
							<h3>Support</h3>
							<ul class="style2">
								<li><a href="#">Support</a></li>
								<li><a href="#">Security Info</a></li>
								<li><a href="#">Senior Care Cost Guide</a></li>
							</ul>
						</section>

					</div>
					<div class="col-3 col-6-medium col-12-small">

						<!-- Contact -->
						<section class="widget contact last">
							<h3>Contact Us</h3>
							<ul>
								<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
								<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
							</ul>
							<p>15, Jalan Sri Semantan 1,<br/>
              Damansara Heights, 50490 KL<br />
              03-2716 2000</p>
						</section>

					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div id="copyright">
							<ul class="menu">
								<li>&copy; MediCare. All rights reserved</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>

	</div>

	<!-- Scripts -->

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.dropotron.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>
