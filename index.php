<?php
 ob_start();
 session_start();
 require_once 'dbconnect.php';
 
 // if session is not set this will redirect to login page
 if( !isset($_SESSION['user']) ) {
  header("Location: login.php");
  exit;
 }
 // select loggedin users detail
 $res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
 $userRow=mysql_fetch_array($res);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>TriTechathlon</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="shortcut icon" href="images/favicon.ico" />
	</head>
	<body>

			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="index.php">TriTechathlon</a></h1>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<div class="inner">
							<h2>Menu</h2>
							<ul class="links">
								<li><a href="index.php">Home</a></li>
								<li><a href="about.php">about</a></li>
								<li><a href="scorecard.php">Scorecard</a></li>
								<li><a href="login.php">LogIn/SignUp</a></li>
							</ul>
							<a href="#" class="close">Close</a>
						</div>
					</nav>

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<div class="logo"><img src="images/Logo.png" style="width:200px;height:200px;"></div>
							<h2>TriTechathlon</h2>
							<p>Competitive Coding | Web Development | Graphic Design</a></p>
							<p><?php echo $userRow['userEmail']; ?><a href="logout.php"> Logout</a></p>
						</div>
					</section>

				<!-- Wrapper -->
					<section id="wrapper">

							<section id="one" class="wrapper spotlight style1">
								<br /><h2 align="center">Organizers</h2>
								<div class="inner">
									<a href="#" class="image"><img src="images/k.jpg" alt="" /></a>
									<div class="content">
										<h2 class="major">Abhinav Khare</h2>
										<p>Organizer</p>
										<a href="#" class="special">Learn more</a>
									</div>
								</div>
							</section>

							<section id="two" class="wrapper alt spotlight style2">
								<div class="inner">
									<a href="#" class="image"><img src="images/r.jpg" alt="" /></a>
									<div class="content">
										<h2 class="major">Raghav Khandelwal</h2>
										<p>Organizer</p>
										<a href="#" class="special">Learn more</a>
									</div>
								</div>
							</section>

							<section id="three" class="wrapper spotlight style3">
								<div class="inner">
									<a href="#" class="image"><img src="images/p.jpg" alt="" /></a>
									<div class="content">
										<h2 class="major">Shubham Padia</h2>
										<p>Organizer</p>
										<a href="#" class="special">Learn more</a>
									</div>
								</div>
							</section>

						
				<!-- Footer -->
					<section id="footer">
						<div class="inner">
							<h2 class="major">Get in touch</h2>
							<p>Fill the form below to get in touch!</p>
							<form method="post" action="#">
								<div class="field">
									<label for="name">Name</label>
									<input type="text" name="name" id="name" />
								</div>
								<div class="field">
									<label for="email">Email</label>
									<input type="email" name="email" id="email" />
								</div>
								<div class="field">
									<label for="message">Message</label>
									<textarea name="message" id="message" rows="4"></textarea>
								</div>
								<ul class="actions">
									<li><input type="submit" value="Send Message" /></li>
								</ul>
							</form>
							<ul class="contact">
								<li class="fa-home">
									IIIT Allahabad<br />
									Devghat, Jhawla<br />
									Allahabad, UP 211012
								</li>
								<li class="fa-phone">+91 94140 38742</li>
								<li class="fa-envelope"><a href="#">information@tritechathlon.iiita.ac.in</a></li>
								<li class="fa-twitter"><a href="#">twitter.com/tritechathlon-iiita</a></li>
								<li class="fa-facebook"><a href="#">facebook.com/tritechathlon-iiita</a></li>
								<li class="fa-instagram"><a href="#">instagram.com/tritechathlon-iiita</a></li>
							</ul>
							<ul class="copyright">
								<li>&copy; TriTechathlon - IIITA. All rights reserved.</li><li>Design: Piyush Arora</li>
							</ul>
						</div>
					</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
<?php ob_end_flush(); ?>