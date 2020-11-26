
<?php
	
	function getInputValue($name){
		if (isset($_POST[$name])) {
			echo $_POST[$name];
		}
	}


?>

<!DOCTYPE html>
<head>
	<title>Welcome to Slotify!</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--Google Sign-in Authentication-->
	<meta name="google-signin-client_id" content="679500978025-2hnlfiodm896da6f068r3mtmou7e4jai.apps.googleusercontent.com">

	 <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
  <script src="https://apis.google.com/js/api:client.js"></script>

	<!--Customized CSS-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!--Bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<script src="https://apis.google.com/js/api:client.js"></script>
  
</head>

<body id="bootrap-overrides">

	<div id = "inputContainer" class="container d-block ">
		<!--Logo-->
		<div class="container d-flex justify-content-center " >
			<img src=" assets/images/logo.png ">

		</div>	
		<hr>			
		<div id = "loginContainer" class=" content row justify-content-center">
		<div class="container">
			
				<h3>Login to your account</h3>
			
		</div>	
			
			<!--Google Sign-in Button-->
			<div class="socialMediaSignIn col-12 p-5">
				<div id="my-signin2" class="justify-content-center"></div>
				<script>
				    function onSuccess(googleUser) {
				      console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
				    }
				    function onFailure(error) {
				      console.log(error);
				    }
				    function renderButton() {
				      gapi.signin2.render('my-signin2', {
				        'scope': 'profile email',
				        'width': 240,
				        'height': 50,
				        'longtitle': true,
				        'theme': 'dark',
				        'onsuccess': onSuccess,
				        'onfailure': onFailure
				      });
				    }
 				 </script>
				 <!--Divider--> 
				<div id="divider " class="col-12 "></div>

			</div>

			<div class=" col-12 justify-content-center d-flex">
				<!--Login Form-->		
				<form id="loginForm" action="includes/login-handler.php" method="POST">		
				
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
							<input id="loginUsername" class="form-control" name="loginUsername" type="text " placeholder="e.g. Your username or Email " value="<?php getInputValue('loginUsername') ?>" required>
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
				<div id= "loginButton"class=" colouredButton col-md-12 justify-content-center pt-2">
					<button   class=" btn btn-lg btn-block btn-success rounded-pill" type="submit" name="loginButton">LOG IN</button>
				</div>					
			</form>			
		</div>
		<!--SignUp Section-->
		<div id="sign-up-button-link-content" class="container pt-3 ">
			<div class="row justify-content-center border-top">
				<div id="hasAccountText" class="col-12 pt-3" style="text-align: center;">
					<div class="col-12 ">
						<span>Don´t have an account yet?</span>
					</div>
					
				</div>	
				<div id="registerButtonLink" class=" buttonLink  col-10 justify-content-center ">
					<div class="">
							<a  href="signup.php" role ="button"  ><button class="btn btn-outline-secondary rounded-pill btn-lg btn-block">REGISTER</button></a>
					</div>
				
				</div>				
			</div>
			<div></div>
		</div>
	
	</div>
		
	</div>	
	








<!--Google Sign in Authentication-->
	<script>
		  var googleUser = {};
		  var startApp = function() {
		    gapi.load('auth2', function(){
		      // Retrieve the singleton for the GoogleAuth library and set up the client.
		      auth2 = gapi.auth2.init({
		        client_id: 'YOUR_CLIENT_ID.apps.googleusercontent.com',
		        cookiepolicy: 'single_host_origin',
		        // Request scopes in addition to 'profile' and 'email'
		        //scope: 'additional_scope'
		      });
		      attachSignin(document.getElementById('customBtn'));
		    });
		  };

		  function attachSignin(element) {
		    console.log(element.id);
		    auth2.attachClickHandler(element, {},
		        function(googleUser) {
		          document.getElementById('name').innerText = "Signed in: " +
		              googleUser.getBasicProfile().getName();
		        }, function(error) {
		          alert(JSON.stringify(error, undefined, 2));
		        });
		  }
  </script>


	<!--Bootstrap-->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<!--Google Sign-In Button-->
	 <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>

</html>