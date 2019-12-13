<?php 
	session_start();

  $host_name = 'db738504855.db.1and1.com';
  $database = 'db738504855';
  $user_name = 'dbo738504855';
  $password = 'Dmicano.13';
  $connect = mysqli_connect('localhost', 'root', 'aaa', 'db738504855');

if (mysqli_connect_errno()) {
    die('<p>Failed to connect to MySQL: '.mysqli_connect_error().'</p>');
  } else {
    echo '';
  }

      
	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define ('BASE_URL', 'localhost/dmicano/blog/');
?>