<?php

if (isset($_POST["submit"])) {
	

	$loginUsername = $_POST["loginUsername"];
	$password = $_POST["loginPassword"];

	require_once 'database-handler.php';
	require_once 'functions-handler.php';


	loginUser($conn, $loginUsername, $password);

}
else{

	header("location: ../login.php"):
	exit();
}