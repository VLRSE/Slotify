<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Slotify!</title>

	<!--Customized CSS-->
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<!--Bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
		<div class="background">
			<div class="overlay">				
			
				<div id = "inputContainer" class="d-block">
					<!--Logo-->
					<div class=" logo container d-flex justify-content-center " >
						<img src=" assets/images/logo.png ">
					</div>	
					<!--Login Form-->					
					<div id = "loginContainer" class=" container ">
						<div class="content col-12 col-md-6 col-sm-6 col-xs-12 justify-content-center d-flex">
						
						<form id="loginForm" action="includes/login-handler.php" method="POST">		
						<h2>Login to your account</h2>
						<!--ERROR MESSAGE-->
						<div  class = "container d-flex justify-content-center text-danger pt-2">
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
						<div class="row ">
							<div class="col-md-12">
								<p>	
									<label for="loginUsername">Username or Email</label>								
									<input id="loginUsername" class="form-control" name="loginUsername" type="text" placeholder="e.g. Your username or Email " required>
								</p>
							</div>
							
						</div>
						<!--Password-->
						<div class="row">
							<div class="col-md-12">
								<p>		
									<label for="loginPassword">Password</label>
									<input id="loginPassword" class="form-control" name="loginPassword" type="password" placeholder="Your password" required>
								</p>
							</div>
						</div>			
					<!--Reset Password-->
						<div class="row reset-password pt-2">
							<div class="col-md-12">
								<p>
									<u><a id = "reset-password-link" href="password-reset.php">Forgot password?</a></u>
								</p>						
							</div>					
							</div>
							<!--Login Button-->
							<div class="col-md-12 justify-content-center pt-2">
								<button  class="btn btn-success btn-lg btn-block rounded-pill " type="submit" name="loginButton">LOG IN</button>
							</div>					
						</form>			
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