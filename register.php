<?php
$hn="localhost:3307";
$un="root";
$pass="";
$db="showroom";
$conn=mysqli_connect($hn,$un,$pass,$db); 
if(!$conn )
{
die('Connection Failed:'.mysqli_error());
}
session_start(); 

if (!isset($_POST['fn'], $_POST['ln'], $_POST['email'], $_POST['pass'], $_POST['cpass'])) {
	.
	exit('Please complete the registration form!');
}

if (empty($_POST['fn']) || empty($_POST['ln']) || empty($_POST['email']|| empty($_POST['pass']) || empty($_POST['cpass'])) {
	// One or more values are empty.
	exit('Please complete the registration form');
}
f ($stmt = $con->prepare('SELECT id, pass FROM registration WHERE email = ?')) {
	
	$stmt->bind_param('s', $_POST['email']);
	$stmt->execute();
	$stmt->store_result();

	if ($stmt->num_rows > 0) {
	
		echo 'Email exists, please choose another!';
	} else {
		
	}
	$stmt->close();
} else {
	
	echo 'Could not prepare statement!';
}
$con->close();
?>