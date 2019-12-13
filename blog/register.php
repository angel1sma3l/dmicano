<?php  include('config.php'); ?>

<?php  include(ROOT_PATH . '/includes/registration_login.php'); ?>

<?php include(ROOT_PATH . '/includes/head_action.php'); ?>

<title>DmicanoBlog | Sign up </title>
</head>
<body>
<div class="container">
	
		<?php include( ROOT_PATH . '/includes/navbar.php'); ?>
	

	<div class="login_div">
		<form method="post" action="register.php">
			<h2>Register on DmicanoBlog</h2>
			
            <?php include(ROOT_PATH . '/includes/errors.php'); ?>
			
            <input type="text" name="username" value="<?php echo $username; ?>"  placeholder="Username">
            <br><br>
            <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Email">
			<br><br>
            <input type="password" name="password_1" placeholder="Password">
			<br><br>
            <input type="password" name="password_2" placeholder="Password confirmation">
			<br><br>
            <button type="submit" class="btn" name="reg_user">Register</button>
			<p>
				Already a member? &nbsp; &nbsp; <a href="login.php">Signin</a>
			</p>
		</form>
	</div>
	</div>
	<?php include( ROOT_PATH . '/includes/footer.php'); ?>
	