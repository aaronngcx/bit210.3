<?php
include("connection.php");
session_start();
$user_name = $_SESSION['login_user'];

if(isset($_POST['submit']))
{
	$serviceDate= $_POST['date'];
	$serviceNote= $_POST['notes'];
	$user_name= $_SESSION['login_user'];


	if (isset($_POST['checkbox'])) {
			$svcheckbox = implode(", ",$_POST['checkbox']);
		}

		$query = "insert into servicerequest (date,notes,servicetype,requestedby)
								values ('$serviceDate','$serviceNote','$svcheckbox','$user_name')";

	if(mysqli_query($conn,$query)){
		echo '<script language="javascript">';
		echo 'alert("Your request has been submitted!")';
		echo '</script>';
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

<body class="is-preload homepage">
	<div id="page-wrapper">

		<!-- Header -->
		<div id="header-wrapper">
			<header id="header" class="container">

				<!-- Logo -->
				<div id="logo">
					<h1><a href="indexSU.php">Medicare</a></h1>
					<span>For The Elderly..</span>
				</div>

				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li><a href="indexSP.php">Welcome </a></li>
						<li>
							<li class="current"><a href="CreateNewRequest.php">Create New Request</a>
							<ul>
								<li><a href="ViewRequestsSU.php">View Your Requests</a>
								<li><a href="ReviewRequestsSU.php">Review Service</a>
								</li>
							</ul>
						<li>

							<li><a href="logout.php">Log Out</a></li>
							<li><b><?php echo $user_name;?></b></li>
					</li>
					</ul>
				</nav>

			</header>
		</div>

		<!-- Features -->
		<div id="features-wrapper">
					<div class="createrequest">
						<form action="createnewrequest.php" method="post" style="border:1px solid #ccc">
							<div class="createrequestcontainer">
								<br>
								<h2>Create New Service Request</h2>
								<label for="date"><b>Date: </b>
								<input type="date" placeholder="Enter Date" name="date" required>
								<label for="notes"><b>Note:</b>
								<input type="text" name="notes" placeholder="Enter Your Note Here">
							</label>
							<b>Type of Services:<b><br>
							<input type="checkbox" name="checkbox[]" value="Appointment">C01-Assist for appointment<br>
					    <input type="checkbox" name="checkbox[]" value="Medication">C02-Supply Medications<br>
					    <input type="checkbox" name="checkbox[]" value="Checkup">C03-Home-Based Checkup
								<div class="signinbtn">
									<input type="submit" name="submit" value="Submit">
								</div>
								</div>
						</form>
					</div>

					</div>
				</div>
			</div>
		</div>

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
