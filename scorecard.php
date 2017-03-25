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
		<header id="header">
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

		<!-- Wrapper -->
		<section id="wrapper">
			<header>
				<div class="inner">
					<h2>Scorecard</h2>
					<p>Scorecard - TriTechathlon</p>
				</div>
			</header>

			<!-- Content -->
			<div class="wrapper">
				<div class="inner">
					<iframe frameborder="0" border="0" cellspacing="0" style="border-style: none;width: 80%; height: 60%;" src="https://docs.google.com/spreadsheets/d/1sKdy-xqEbo_W5khkedbB2QVGqMFSj_uDITKcLQFDL1s/pubhtml?gid=0&amp;single=true&amp;widget=true&amp;headers=false"></iframe>
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
						IIIT Allahabad<br /> Devghat, Jhawla<br /> Allahabad, UP 211012
					</li>
					<li class="fa-phone">+91 94140 38742</li>
					<li class="fa-envelope"><a href="#">information@tritechathlon.iiita.ac.in</a></li>
					<li class="fa-twitter"><a href="#">twitter.com/tritechathlon-iiita</a></li>
					<li class="fa-facebook"><a href="#">facebook.com/tritechathlon-iiita</a></li>
					<li class="fa-instagram"><a href="#">instagram.com/tritechathlon-iiita</a></li>
				</ul>
				<ul class="copyright">
					<li>&copy; TriTechathlon - IIITA. All rights reserved.</li>
					<li>Design: Piyush Arora</li>
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