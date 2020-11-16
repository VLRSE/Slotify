<?php



function invalidUserID($username){
	$result; 

	if (!preg_match("/^[a-zA-Z0-9_]{5,50}$/", $username)) {
		$result = true;
	}
	else{
		$result = false;
	}

	return $result;
}
function invalidFirstName($firstName){
	$result; 

	if (!preg_match("/^[a-zA-Z]*$/", $firstName)) {
		$result = true;
	}
	else{
		$result = false;
	}

	return $result;
}
function invalidLastName($lastName){
	$result; 

	if (!preg_match("/^[a-zA-Z]*$/", $lastName)) {
		$result = true;
	}
	else{
		$result = false;
	}

	return $result;
}

function invalidEmail($email){
	$result; 

	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$result = true;
	}
	else{
		$result = false;
	}

	return $result;
}


function emailsMatch($email,  $emailConfirm){
	$result; 

	if ($email !== $emailConfirm){
		
		$result = true;
	}
	else{
		
		$result = false;
	}

	return $result;

}

function invalidPassword($password){
	$result; 

	if(!preg_match("/^(?=.*[^a-zA-Z]).{8,40}$/", $password)){
	
		$result = true;
	}
	
	else{
		
		$result = false;
	}

	return $result;

} 	

function passwordMatch($password,  $passwordConfirm){
	$result; 

	if ($password !== $passwordConfirm){
		$result = true;
	}
	else{
		$result = false;
	}

	return $result;

}

function userIdExists($conn, $username, $email){

	$sql = "SELECT * FROM users1 WHERE username = ? OR usersEmail = ?;";
	//Create prepared statement
	$stmt = mysqli_stmt_init($conn);
	
	//test if the statement will fail or succeed
	if(!mysqli_stmt_prepare($stmt, $sql)){
		//Checks for an error
		header("location: ../signup.php?error=stmtFailed");
			//stops the script
			exit();
	}

	//Bind parameters to the statement
	mysqli_stmt_bind_param($stmt, "ss", $username, $email);
	//execute statement
	mysqli_stmt_execute($stmt);

	$resultData = mysqli_stmt_get_result($stmt);


	//Fetch data as an associative array
	if ($row = mysqli_fetch_assoc($resultData)) {
		echo "<p>$row</p>";
		return $row;
	}
	else{
		
		$result = false;
		return $result;
	}
	//close statement
	mysqli_stmt_close($stmt);

}


function createUser($conn, $username, $firstName, $lastName, $email, $password){

	$sql = "INSERT INTO users1(username, usersFirstName, usersLastName, usersEmail, usersPassword ) VALUES(?, ?, ?, ?, ?);";
	//Create prepared statement
	$stmt = mysqli_stmt_init($conn);
	
	if(!mysqli_stmt_prepare($stmt,$sql)){
		//Checks for an error
		header("location: ../signup.php?error=stmtFailed");
			//stops the script
			exit();
	}
	//hash password
	$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

	//Bind data to the statement
	mysqli_stmt_bind_param($stmt, "sssss", $username, $firstName, $lastName, $email, $hashedPassword);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);

	//send user to the signup page to show success registration
	header("location: ../signup.php?error=none");
	//stops the script
	exit();
}