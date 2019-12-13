<?php 

	$username = "";
	$email    = "";
	$password_1 = "";
	$password_2 = "";
	$errors = array(); 



	if (isset($_POST['reg_user'])) {
		$username = ($_POST['username']);
		$email = ($_POST['email']);
		$password_1 = ($_POST['password_1']);
		$password_2 = ($_POST['password_2']);

		if (empty($username)) { array_push($errors, "need your username"); }
		if (empty($email)) { array_push($errors, "Email is missing"); }
		if (empty($password_1)) { array_push($errors, "you forgot the password"); }
		if ($password_1 != $password_2) { array_push($errors, "The two passwords do not match");}
				
				global $connect;
				$user_check_query = "SELECT * FROM users WHERE username='$username' 
								OR email='$email' LIMIT 1";

		$result = mysqli_query($connect, $user_check_query);
		$user = mysqli_fetch_assoc($result);

		if ($user) { if ($user['username'] === $username) {
			  array_push($errors, "Username already exists");
			}
			if ($user['email'] === $email) {
			  array_push($errors, "Email already exists");
			}
		}
			if (count($errors) == 0) {
				$password = md5($password_1);
					
				$query = "INSERT INTO users (username, email, password, created_at, updated_at) 
					  VALUES('$username', '$email', '$password', now(), now())";
			mysqli_query($connect, $query);

					$reg_user_id = mysqli_insert_id($connect); 

					$_SESSION['user'] = getUserById($reg_user_id);

					if ( in_array($_SESSION['user']['role'], ["Admin", "Author"])) {
				$_SESSION['message'] = "You are now logged in";
							header('location: admin/dashboard.php');
				exit(0);
			} else {
				$_SESSION['message'] = "You are now logged in";
							header('location:index.php');				
				exit(0);
			}
		}
	}

//login set u

	if (isset($_POST['login_btn'])) {
		$username = ($_POST['username']);
		$password = ($_POST['password']);

		if (empty($username)) { array_push($errors, "Username required"); }
		if (empty($password)) { array_push($errors, "Password required"); }
		if (empty($errors)) {
			$password = md5($password);			
			$sql = "SELECT * FROM users WHERE username='$username' and password='$password' LIMIT 1";

			$result = mysqli_query($connect, $sql);
			if (mysqli_num_rows($result) > 0) {
							$reg_user_id = mysqli_fetch_assoc($result)['id']; 

							$_SESSION['user'] = getUserById($reg_user_id); 

							if ( in_array($_SESSION['user']['role'], ["Admin", "Author"])) {
					$_SESSION['message'] = "You are now logged in";
									header('location:admin/dashboard.php');
					exit(0);
				} else {
					$_SESSION['message'] = "You are now logged in";
									header('location:index.php');				
					exit(0);
				}
			} else {
				array_push($errors, 'Wrong credentials');
			}
		}
	}


	function esc(String $value)
	{	
			global $connect;

		$val = trim($value);		
		$val = mysqli_real_escape_string($connect, $value);

		return $val;
	}


	function getUserById($id)
	{
		global $connect;
		$sql = "SELECT * FROM users WHERE id=$id LIMIT 1";

		$result = mysqli_query($connect, $sql);
		$user = mysqli_fetch_assoc($result);

				return $user; 
	}
?>