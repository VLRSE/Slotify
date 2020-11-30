<!DOCTYPE html>
<head>
	<title>Reset your Password - Slotify</title>

	<!--Customized CSS-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!--Bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
	<div></div>

		<div class="container-fluid bg-dark">
			<header class="header-banner" role="banner">
				<div class="container ">
					<div id="navbarLogo" class="logo-wrapper p-2">						
						<a href="https://www.slotify.com/">	
							<img src=" assets/images/logo.png ">
						</a>
					</div>
				</div>
			</header>
		</div>
		<div id="loginContainer"  class="row justify-content-center">
			<div class="content container block-content text-center d-flex">
				<div class="row justify-content-center">
					<div class="col-8 col-sm-offset-2">							
						<h1>Password Reset</h1>				
				
						<p>Enter <b>username</b>, or <b>Email address</b> used to register. We´ll send you an Email with a link to reset password.</p>				
					</div>
				
				<div class="col-6">
					<!--Login Form-->		
				<form id="loginForm" action="includes/login-handler.php" method="POST">					
						
					<!--ERROR MESSAGE-->
					<div  class = "container d-flex justify-content-center text-danger pt-2">
						<?php 

							if(isset($_GET["error"])){
								if($_GET["error"] == "invalidLoginDetails"){
									echo "<p>Username does not exist</p>";
								}
							}
						?>
					</div>
				<!--Username-->
					<div class="row pt-2">
						<div class="col-md-12 ">
							<p>	
								<label for="loginUsername" >Username or Email</label>								
								<input id="loginUsername" class="form-control" name="loginUsername" type="text " placeholder="e.g. Your username or Email "  required>
							</p>
						</div>
						
					</div>
					
				<!--Captcha-->
					<div id="recaptcha-container" class="row justify-content-center pt-2">
						 <form action="?" method="POST">
						      <div class="g-recaptcha" data-sitekey="6Lfb0-gZAAAAAEMU6w0J7Zd2MiGrBbJEMcziNczL"></div>
						      <br/>
						      <input type="submit" value="Submit">
					    </form>
						
					<!--Reset Button-->
					<div id= "resetButton"class="col-md-12 justify-content-center pt-2">
						<button   class=" btn btn-lg btn-block btn-success rounded-pill" type="submit" name="resetButton">SEND</button>
					</div>					
			</form>	
					
				</div>
			</div>
			</div>
		</div>
			
	</div>






	<!--Bootstrap CDN-->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<!--Google Recaptcha-->
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>

</body>
</html>
