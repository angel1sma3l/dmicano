<?php require_once('config.php'); ?>

<?php include(ROOT_PATH . '/includes/head.php'); ?>
<title>Contact</title>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-black">
		<a class="navbar-brand" href="index.php">DMICANO</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent1">
			<ul class="navbar-nav mr-auto" >
			  <li class="nav-item"> <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
			  <li class="nav-item"> <a class="nav-link" href="apps/index.php">Apps</a> </li>
				<li class="nav-item"> <a class="nav-link" href="blog.php" active>Blog</a> </li>
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
<!-- Main Container -->
<div class="container">

	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- DmicanoAds -->
<ins class="adsbygoogle"
     style="display:inline-block;width:970px;height:250px"
     data-ad-client="ca-pub-4488637500188914"
     data-ad-slot="4645864743"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

<section class="container">
<div class="hero_header">
	<h2>How to scroll to the end of a listView ANDROID</h2>
	</div>

	<p>To auto scroll to the bottom of the list view, use this code:</p>
<code> &#60;ListView android:transcriptMode="alwaysScroll"&#62; </code>
	<p>To start the list from the bottom up use the fallowing code:</p>
	<code>android:stackFromBottom="true"</code>
	<p>You can also use the following parameters in your .java</p>
<code>Scroll lv.setTranscriptMode(ListView.TRANSCRIPT_MODE_ALWAYS_SCROLL);</code>
	<p>Start bottom to top: </p>
	<code>lv.setStackFromBottom(true);</code>

</section>


<footer>
	<div class="content_wrap">
	<h2>Contact</h2>

	<!--Social networks-->
	<div class="social-media">
		<ul>
			<li><a href="https://www.linkedin.com/in/angel-ismael-linares-394bbb70/"><i class="fa fa-linkedin"></i></a></li>
			<li><a href="contact.php/#phoneNumber"><i class="fa fa-phone"></i></a></li>
		</ul>
	</div>

	<p>Copyright&copy; 2019 Angel Ismael Linares</p>

	</div>
</footer>

	</div>

	<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="js/popper.min.js" type="text/javascript"></script>
	<script src="/js/bootstrap-4.0.0.js" type="text/javascript"></script>
</body>
</html>
