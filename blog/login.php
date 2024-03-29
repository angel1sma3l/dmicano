<?php include('config.php'); ?>
<?php include(ROOT_PATH . '/includes/registration_login.php'); ?>
<?php include(ROOT_PATH . '/includes/head_action.php'); ?>
	<title>DmicanoBlog | Sign in </title>
</head>
<body>
<div class="container">
	
	<?php include( ROOT_PATH . '/includes/navbar.php'); ?>
	
	<div class="login_div">
		<form method="post" action="login.php">
			<h2>Login</h2>
			<?php include(ROOT_PATH . '/includes/errors.php'); ?>
			<input type="text" name="username" value="<?php echo $username; ?>" value="" placeholder="Username">
			<input type="password" name="password" placeholder="Password">
			<button type="submit" class="btn" name="login_btn">Login</button>
			<p>
				Not yet a member? <a href="register.php">Sign up</a>
			</p>
		</form>
	</div>
	</div>	
	<?php include( ROOT_PATH . '/includes/footer.php'); ?>
