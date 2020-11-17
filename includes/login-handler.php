<?php
//Login button was pressed or clicked
if(isset($_POST['loginButton'])) {
	
	$username = $_POST["loginUsername"];
	$password = $_POST["loginPassword"];


	require_once 'database-handler.php';
	require_once 'functions-handler.php';


	loginUser($conn, $username, $password);
}
else{
	header("location: ../login.php");
	exit();
}
