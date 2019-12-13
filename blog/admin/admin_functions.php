<?php 
$admin_id = 0;
$isEditingUser = false;
$username = "";
$role = "";
$email = "";
$errors = [];

if (isset($_POST['create_admin'])) {
	createAdmin($_POST);
}if (isset($_GET['edit-admin'])) {
	$isEditingUser = true;
	$admin_id = $_GET['edit-admin'];
	editAdmin($admin_id);
}if (isset($_POST['update_admin'])) {
	updateAdmin($_POST);
}if (isset($_GET['delete-admin'])) {
	$admin_id = $_GET['delete-admin'];
	deleteAdmin($admin_id);
}



function getAdminUsers(){
	global $connect, $roles;
	$sql = "SELECT * FROM users WHERE role IS NOT NULL";
	$result = mysqli_query($connect, $sql);
	$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

	return $users;
}

function esc(String $value){
	global $connect;
	$val = trim($value); 
	$val = mysqli_real_escape_string($connect, $value);
	return $val;
}

function makeSlug(String $string){
	$string = strtolower($string);
	$slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
	return $slug;
}

function createAdmin($request_values){
	global $connect, $errors, $role, $username, $email;
	$username = esc($request_values['username']);
	$email = esc($request_values['email']);
	$password = esc($request_values['password']);
	$passwordConfirmation = esc($request_values['passwordConfirmation']);

	if(isset($request_values['role'])){
		$role = esc($request_values['role']);
	}
	if (empty($username)) { array_push($errors, "Uhmm...We gonna need the username"); }
	if (empty($email)) { array_push($errors, "Oops.. Email is missing"); }
	if (empty($role)) { array_push($errors, "Role is required for admin users");}
	if (empty($password)) { array_push($errors, "uh-oh you forgot the password"); }
	if ($password != $passwordConfirmation) { array_push($errors, "The two passwords do not match"); }
	$user_check_query = "SELECT * FROM users WHERE username='$username' 
							OR email='$email' LIMIT 1";
	$result = mysqli_query($connect, $user_check_query);
	$user = mysqli_fetch_assoc($result);
	if ($user) {		if ($user['username'] === $username) {
		  array_push($errors, "Username already exists");
		}

		if ($user['email'] === $email) {
		  array_push($errors, "Email already exists");
		}
	}
	if (count($errors) == 0) {
		$password = md5($password);		
			$query = "INSERT INTO users (username, email, role, password, created_at, updated_at) 
				  VALUES('$username', '$email', '$role', '$password', now(), now())";
		mysqli_query($connect, $query);

		$_SESSION['message'] = "Admin user created successfully";
		header('location: users.php');
		exit(0);
	}
}

function editAdmin($admin_id)
{
	global $connect, $username, $role, $isEditingUser, $admin_id, $email;

	$sql = "SELECT * FROM users WHERE id=$admin_id LIMIT 1";
	$result = mysqli_query($connect, $sql);
	$admin = mysqli_fetch_assoc($result);

	$username = $admin['username'];
	$email = $admin['email'];
}


function updateAdmin($request_values){
	global $connect, $errors, $role, $username, $isEditingUser, $admin_id, $email;
	$admin_id = $request_values['admin_id'];
	$isEditingUser = false;


	$username = esc($request_values['username']);
	$email = esc($request_values['email']);
	$password = esc($request_values['password']);
	$passwordConfirmation = esc($request_values['passwordConfirmation']);
	if(isset($request_values['role'])){
		$role = $request_values['role'];
	}
	if (count($errors) == 0) {
			$password = md5($password);

		$query = "UPDATE users SET username='$username', email='$email', role='$role', password='$password' WHERE id=$admin_id";
		mysqli_query($connect, $query);

		$_SESSION['message'] = "Admin user updated successfully";
		header('location: users.php');
		exit(0);
	}
}function deleteAdmin($admin_id) {
	global $connect;
	$sql = "DELETE FROM users WHERE id=$admin_id";
	if (mysqli_query($connect, $sql)) {
		$_SESSION['message'] = "User successfully deleted";
		header("location: users.php");
		exit(0);
	}
}
?>