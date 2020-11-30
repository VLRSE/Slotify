<?php
	
function getInputValue($name){
		if (isset($_POST[$name])) {
			echo $_POST[$name];
		}
	}


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
				<form id="registerForm" action="includes/login-handler.php" method="POST">
					<div style="text-align: center;">
						<h3>Member Login</h3>
					</div>
					

					<!--ERROR MESSAGE-->
					<div  class = " errorMessage container d-flex justify-content-center text-danger pt-2">
						<?php 
							if(isset($_GET["error"])){
								if($_GET["error"] == "invalidLoginDetails"){
									echo "<p>Username does not exist</p>";
								}
								elseif ($_GET["error"] == "wrongPassword") {
									echo "<p>Wrong password</p>";
								}
							}
											
						?>

				</div>
					<!--Username-->
					<label class="pt-2" for="loginUsername">Username</label>
					<p>						
						<input id="loginUsername" class="form-control"  name="loginUsername" type="text" placeholder="e.g. Your username or Email" required>
					</p>					
					
					<!--Password-->
					<label for="loginPassword">Password</label>
					<p>
						
						<input id="passwologinPasswordrd" class="form-control" name="loginPassword" type="password" placeholder="Your password" required>
					</p>

					<!--Reset Password-->
				<div class="row reset-password pt-2">
					<div class="col-md-12">
						<p>
							<u><a id = "reset-password-link" href="includes/password-reset.php">Forgot password?</a></u>
						</p>						
					</div>					
				</div>

				<!--Login Button-->
				<div id= "loginButton"class=" colouredButton col-md-12 justify-content-center pt-2">
					<button   class=" btn btn-lg btn-block btn-success rounded-pill" type="submit" name="loginButton">LOG IN</button>
				</div>					
			</form>			
		</div>
		
				<!--Login Section-->
			<div id="sign-up-button-link-content" class=" buttonLinkContent pt-3 ">
					<div id="hasAccountText" class="col-12 pt-3" style="text-align: center;">
						<div class="col-12">
							<span>Don´t have an account yet?</span>
						</div>
						
					</div>	
					<div id="loginButtonLink" class=" buttonLink justify-content-center ">
						<div class="">
							<a  href="signup.php" role ="button"  ><button class="btn btn-outline-secondary rounded-pill btn-lg btn-block">REGISTER</button></a>
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