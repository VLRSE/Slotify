<?php
	


?>


<html>
<head>
	<!--PROCEDURAL CODE -->

	<title>Welcome to Slotify!</title>

	<!--Customized CSS-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!--Bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<!--reCaptcha-->
	<script src='https://www.google.com/recaptcha/api.js'></script>

</head>
<body>


	<div id="inputContainer" class="container d-block ">
		<!--Logo-->
		<div class="container d-flex justify-content-center " >
			<img src=" assets/images/logo.png ">
		</div>
		<div id="loginContainer" class=" row  ">
			<div class=" content col-12 d-flex justify-content-center pt-2 ">
				<!--Registration Form -->
				<form id="registerForm" action="includes/signup-handler.php" method="POST">
					<div style="text-align: center;">
						<h3>Create Your Free Account</h3>
					</div>
					<!--ERROR MESSAGE-->
					<div  class = " errorMessage container d-flex justify-content-center text-danger pt-2">
						<?php 

<<<<<<< HEAD
			?>
				
			</div>
=======
						if(isset($_GET["error"])){
							if($_GET["error"] == "emptyInput"){
								echo "<p> Fill in all fields</p>";
							}
							elseif ($_GET["error"] == "invalidUserID") {
								echo "<p>Invalid username! Enter atleast 5 characters</p>";
							}
							elseif ($_GET["error"] == "invalidFirstName") {
								echo "<p>Enter letters only </p>";
							}
							elseif ($_GET["error"] == "invalidLastName") {
								echo "<p>Enter letters only </p>";
							}
							elseif ($_GET["error"] == "emailsDoNotMatch") {
								echo "<p>Retype email correctly</p>";
							}
							elseif ($_GET["error"] == "invalidPassword") {
								echo "<p>Enter a password with letters in uppercase and lowercase, and special characters</p>";
							}
							elseif ($_GET["error"] == "passwordsDoNotMatch") {
								echo "<p>Retype password correctly</p>";
							}
							elseif ($_GET["error"] == "usernameTaken") {
								echo "<p >Either username or email is already taken, please login</p>";
							}
							elseif ($_GET["error"] == "none") {
								echo "<h5 class='text-success'>You have successfully signed up!</h5>";
							}
						}
					?>
				</div>
>>>>>>> updated
					<!--Username-->
					<label class="pt-2" for="username">Username</label>
					<p>						
						<input id="username" class="form-control"  name="username" type="text" placeholder="e.g. john_doe" required>
					</p>
					
					<label for="firstName">First name</label>
					<p>						
						<input id="firstName" class="form-control" name="firstName" type="text" placeholder="e.g. John"  required>
					</p>
					<!--Lastname-->
					<label for="lastName">Last name</label>
					<p>						
						<input id="lastName" class="form-control" name="lastName" type="text" placeholder="e.g. Doe" required>
					</p>
					<!--Email-->
					<label for="email">Email</label>
					<p>						
						<input id="email" class="form-control"  name="email" type="email" placeholder="e.g. johnDoe@gmail.com" required>
					</p>
					<!--Email Confirmation-->
					<label for="email2">Confirm email</label>
					<p>
						<input id="email2" class="form-control" name="emailConfirm" type="email" placeholder="e.g. johnDoe@gmail.com" required>
					</p>
					<!--Password-->
					<label for="password">Password</label>
					<p>
						
						<input id="password" class="form-control" name="password" type="password" placeholder="Password at least 8 characters" required>
					</p>
					<!--Password confirmation-->
					<label for="password2">Confirm password</label>
					<p>	
						<input id="password2" class="form-control" name="passwordConfirm" type="password" placeholder="Retype password" required>
					</p>
						<!--Sign Up button-->
					<div id= "signUpButton" class="colouredButton col-md-12 justify-content-center pt-2">
						<button class="btn btn-success btn-lg btn-block rounded-pill " type="submit" name="registerButton">SIGN UP</button>
					</div>	
				   </form>
				</div>		
				<!--Login Section-->
			<div id="sign-up-button-link-content" class=" buttonLinkContent pt-3 ">
					<div id="hasAccountText" class="col-12 pt-3" style="text-align: center;">
						<div class="col-12">
							<span>Have already an account?</span>
						</div>
						
					</div>	
					<div id="loginButtonLink" class=" buttonLink justify-content-center ">						
						<a  href="login.php" role ="button"  ><button class="btn btn-outline-secondary rounded-pill btn-lg btn-block">LOG IN</button></a>
					</div>				
				
				
			</div>			
			</div>
		</div>

	</div>

	<!--Bootstrap-->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>