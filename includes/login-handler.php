<?php
<<<<<<< HEAD

if (isset($_POST["submit"])) {
	

	$loginUsername = $_POST["loginUsername"];
	$password = $_POST["loginPassword"];

=======
//Login button was pressed or clicked
if(isset($_POST['loginButton'])) {
	
	$username = $_POST["loginUsername"];
	$password = $_POST["loginPassword"];


>>>>>>> updated
	require_once 'database-handler.php';
	require_once 'functions-handler.php';


<<<<<<< HEAD
	loginUser($conn, $loginUsername, $password);

}
else{

	header("location: ../login.php"):
	exit();
}
=======
	loginUser($conn, $username, $password);
}
else{
	header("location: ../login.php");
	exit();
}
>>>>>>> updated
