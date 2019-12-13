<?php if (isset($_SESSION['user']['username'])) { ?>
	<div class="logged_in_info">
		<span>Welcome <?php echo $_SESSION['user']['username']; ?> </span>
        <span><a href="logout.php">logout</a></span>
	</div>
<?php }else{ ?>
	<div class="banner">
		<div class="welcome_msg">
			<h1>Today's Inspiration</h1>
			<p> 
			    One day your life <br> 
			    will flash before your eyes. <br> 
			    Make sure it's worth watching. <br>
				<span>~ Gerard Way</span>
                </p>
			<a href="register.php">Join us!</a>
		</div>

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
<?php } ?>
