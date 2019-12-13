<?php require_once('../config.php'); ?>

<?php include(ROOT_PATH . '/includes/head.php'); ?>
<title>APPS</title>
</head>
<body>
  <!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-black">
		<a class="navbar-brand" href="../index.php">DMICANO</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent1">
			<ul class="navbar-nav mr-auto" >
			  <li class="nav-item"> <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a> </li>
			  <li class="nav-item active"> <a class="nav-link" href="index.php">Apps</a> </li>
				<li class="nav-item"> <a class="nav-link" href="../blog.php">Blog</a> </li>
				<li class="nav-item"> <a class="nav-link" href="../contact.php">Contact</a> </li>
				<li class="nav-item"> <a class="nav-link" href="../bio/index.html">Bio</a> </li>

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

	<?php include(ROOT_PATH . '/includes/carrusel-domino-app.php'); ?>

	<div class="domino-summary">
		<h1>Domino Apunte</h1>
		<p>Para aquellos que les fascina el juego de Domino.<br>
		Esta app les sirve de mascota de apunte, no mas lapiceros sin tinta ni gastadera de hojas.<br>
		<br> For those players that love the game.<br> This app allows you to write down your points without the need of a notepad and a pencil</p>
	</div>

	<!-- Domino apunte Image icon --->
<div class="content_wrap" id="download" align="center">
		<h3>Descargala Gratis!!</h3><br>

		<img src="../images/domino1024.png" width="300" height="auto" >
		<!--Apple & Google download banners-->
		<div class="">
			<a href="https://itunes.apple.com/us/app/domino-apunte/id1385265662?mt=8"><img src="../images/appstore.png" width="200px" height="70"></a>

			<a href="https://play.google.com/store/apps/details?id=com.dmicano.angel1sma3l.cartondeapunte&hl=en_US"><img src="../images/Google-Play-Transparent-border.png" width="200px" height="70"></a>
		</div>
</div>

	<!--VIDEO -->
    <video width="100%" height="550px" controls style="background-color: #000;">
        <source src="../images/Domino_Apunte_Ad.mp4" type="video/mp4">
        <!-- <source src="movie.ogg" type="video/ogg"> -->
        Your browser does not support the video tag.
		</video>

  <!-- Instructions carousel of photos of the app-->
	<?php include(ROOT_PATH . '/includes/carrusel-domino-app1.php'); ?>

	<div class="instructions">

		<h2>INSTRUCTIONS</h2>
	  		<ul>
					<li>Cambiar nombre de equipos: Presione el botón de equipo para cambiar nombre de equipo.</li>
					<li>Anotar: solo presione el botón (+) y apunte la cantidad.</li>
					<li>Borrar: solo deslice el dedo en los puntos que desee borrar hacia la izquierda. (OS).</li>
					<li>Borrar: precione y mantenga presionado los puntos que desea borrar(Android)</li>
					<li>Empezar nueva mano. presione RESET y luego nueva mano/new hand.</li>
					<br><br>
					<li>Changing teams name: Tap on team to change team's names</li>
					<li>Adding points: tap on the plus icon below your team</li>
					<li>Deleting points: just slide the points you want to delete to left</li>
					<li>(Android) Hold down the points you want to delete until they are gone</li>
					<li>New hand: just tap Reset-> New hand/nueva mano-> Ok to confirm</li>
				</ul>

</div>

<footer>
	<div class="content_wrap">
	<h2>Contact</h2>

	<!--Social networks-->
	<div class="social-media">
		<ul>
			<li><a href="https://www.linkedin.com/in/angel-ismael-linares-394bbb70/"><i class="fa fa-linkedin"></i></a></li>
			<li><a href="../contact.php#phoneNumber"><i class="fa fa-phone"></i></a></li>
		</ul>
	</div>

	<p>Copyright&copy; 2019 Angel Ismael Linares</p>

	</div>
</footer>



<script src="../js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="../js/popper.min.js" type="text/javascript"></script>
<script src="../js/bootstrap-4.0.0.js" type="text/javascript"></script>
</body>
</html>
