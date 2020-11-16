<?php
	
	if(isset($_POST["registerButton"])){
		//if user has clicked the regiester Button
		$username = $_POST["username"];
		$firstName = $_POST["firstName"];
		$lastName = $_POST["lastName"];
		$email = $_POST["email"];
		$emailConfirm = $_POST["emailConfirm"];
		$password = $_POST["password"];
		$passwordConfirm = $_POST["passwordConfirm"];


		//error handlers

		require_once 'database-handler.php';
		require_once 'functions-handler.php';


		/*if(emptyInputSignup($username, $firstName, $lastName, $email, $emailConfirm, $password, $passwordConfirm)!==false){
			//if anything besides false, then throw an error
			header("location: ../signup.php?error=emptyInput");
			//stops the script
			exit();
		}*/
		if(invalidUserID($username)!==false){
			//if anything besides false, then throw an error
			header("location: ../signup.php?error=invalidUserID");
			//stops the script
			exit();
		}
		if(invalidFirstName($firstName)!==false){
			//if anything besides false, then throw an error
			header("location: ../signup.php?error=invalidFirstName");
			//stops the script
			exit();
		}
		if(invalidLastName($lastName)!==false){
			//if anything besides false, then throw an error
			header("location: ../signup.php?error=invalidLastName");
			//stops the script
			exit();
		}
		if(invalidEmail($email)!==false){
			//if anything besides false, then throw an error
			header("location: ../signup.php?error=invalidEmail");
			//stops the script
			exit();
		}
		if(emailsMatch($email,  $emailConfirm)!==false){
			//if anything besides false, then throw an error
			header("location: ../signup.php?error=emailsDoNotMatch");
			//stops the script
			exit();
		}
		if(invalidPassword($password)!==false){
			//if anything besides false, then throw an error
			header("location: ../signup.php?error=invalidPassword");
			//stops the script
			exit();
		}
		if(passwordMatch($password,  $passwordConfirm)!==false){
			//if anything besides false, then throw an error
			header("location: ../signup.php?error=passwordsDoNotMatch");
			//stops the script
			exit();
		}
		//checks if userName or/and email is/are already taken
		if(userIdExists($conn, $username, $email)!==false){
			//if anything besides false, then throw an error
			header("location: ../signup.php?error=usernameTaken");
			
			//stops the script
			exit();
		}

		echo "success registration";

		createUser($conn, $username, $firstName, $lastName, $email, $password);


	}
	else{
		//redirect user to the signup page 
		header("location: ../signup.php");
		//stops the script
		exit();
	}

