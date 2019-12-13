	<?php require_once('config.php'); ?>

<?php include(ROOT_PATH . '/includes/head.php'); ?>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dmicano</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-black">
		<a class="navbar-brand" href="index.php">DMICANO</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent1">
			<ul class="navbar-nav mr-auto" >
			  <li class="nav-item active"> <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
			  <li class="nav-item"> <a class="nav-link" href="apps/index.php">Apps</a> </li>
				<li class="nav-item"> <a class="nav-link" href="blog.php">Blog</a> </li>
				<li class="nav-item"> <a class="nav-link" href="contact.php">Contact</a> </li>
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

	<?php include(ROOT_PATH . '/includes/carrusel.php'); ?>
	<div class="container">
		<div class="jumbotron">
	  	<h1 class="display-4">Welcome to Dmicano!</h1>
	  	<p class="lead">Descarga Domino Apunte, una app para jugadores de domino. Para anotar los puntos en tu mobil no en paper.</p>
			<p class="lead">Download this app if you like to play Dominoes. This apps is a digital scoresheet to keep track of you points in your phone no in paper</p>
	  	<hr class="my-4">
	  	<p>Try our new app Domino Apunte! for Dominoes players</p>
	  	<p class="lead"> <a class="btn btn-primary btn-lg" href="apps/index.php" role="button">Learn more</a> </p>
		</div>
	</div>

	<footer>
		<div class="content_wrap">
		<h2>Contact</h2>

		<!--Social networks-->
		<div class="social-media">
			<ul>
				<li><a href="https://www.linkedin.com/in/angel-ismael-linares-394bbb70/"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="contact.php#phoneNumber"><i class="fa fa-phone"></i></a></li>
			</ul>
		</div>

		<p>Copyright&copy; 2019 Angel Ismael Linares</p>

		</div>
	</footer>


	<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="js/popper.min.js" type="text/javascript"></script>
	<script src="js/bootstrap-4.0.0.js" type="text/javascript"></script>

	</body>
	</html>
