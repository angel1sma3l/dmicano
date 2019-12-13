<?php require_once('config.php'); ?>
<?php include(ROOT_PATH . '/includes/contact_function.php'); ?>
<?php include(ROOT_PATH . '/includes/head.php'); ?>
<title>Contact</title>
</head>
<body style="background-color: black">

	<nav class="navbar navbar-expand-lg navbar-dark bg-black">
		<a class="navbar-brand" href="index.php">DMICANO</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent1">
			<ul class="navbar-nav mr-auto" >
			  <li class="nav-item"> <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
			  <li class="nav-item"> <a class="nav-link" href="apps/index.php">Apps</a> </li>
				<li class="nav-item"> <a class="nav-link" href="blog.html">Blog</a> </li>
				<li class="nav-item active"> <a class="nav-link" href="contact.php">Contact</a> </li>
				<li class="nav-item"> <a class="nav-link" href="bio/index.html">Bio</a> </li>

			  <!--<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown </a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown1"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a>
				  <div class="dropdown-divider"></div>
				  <a class="dropdown-item" href="#">Something else here</a> </div>
			  </li>
			  <li class="nav-item"> <a class="nav-link disabled" href="#">Disabled</a> </li>-->
			</ul>
			<!--<form class="form-inline my-2 my-lg-0">
			  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>-->
	  </div>
	</nav>
<!-- Main Container -->


	<div class="content_wrap">

	<?php echo "<h3 style=\"color: white\">$result</h3>";?>

	<form action="contact.php" method="post">
    <h3 style="color: white">Quick Contact</h3>
		<!--ROW FIRST LAST NAME-->
				<div class="contact-info">
					<label for="first_name">First Name</label>
	  			<input name="first_name" placeholder="First Name" type="text" required autofocus>
					<?php echo "<p>$errfName</p>";?>

					<label for="last_name">Last Name</label>
	  			<input name="last_name" placeholder="Last Name" type="text" required autofocus><?php echo "<p class=\"alert\">$errlName</p>";?>

					<label for="">Email</label>
	 				<input name="email" placeholder="Your Email Address" type="email" classs="form-control" required>
					<?php echo "<p class=\"alert\">$errEmail</p>";?>

					<label for="">Phone</label>
					<input name="phone" placeholder="Your Phone Number" type="tel">
					<br><br>
					<label for="message">Message</label>
	  			<textarea name="message" placeholder="Type your Message Here...." required></textarea>
					<?php echo "<p style=\"color: white\">$errMessage</p>";?>

	  			<button type="submit" class="btn btn-primary" name="send">Send</button>
				</div>
	</form>
	<div class="contact-info" id="phoneNumber">
		<label for="phone">Tel: (978) 440-0319</label>
	</div>
</div>

<footer>
	<div class="content_wrap">
	<h2>Contact</h2>

	<!--Social networks-->
	<div class="social-media">
		<ul>
			<li><a href="https://www.linkedin.com/in/angel-ismael-linares-394bbb70/"><i class="fa fa-linkedin"></i></a></li>
			<li><a href="#phoneNumber"><i class="fa fa-phone"></i></a></li>
		</ul>
	</div>

	<p>Copyright&copy; 2019 Angel Ismael Linares</p>

	</div>
</footer>


	<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="js/popper.min.js" type="text/javascript"></script>
	<script src="/js/bootstrap-4.0.0.js" type="text/javascript"></script>

</body>
</html>
