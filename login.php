<html>
<head>
	<title>Welcome to Slotify!</title>

	<!--Bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
	<div id="inputContainer" class="container d-block ">
		<!--Logo-->
		<div class="container d-flex justify-content-center p-2 " >
			<img src=" assets/images/logo.png ">
		</div>
		<div class=" row  ">
				<!--Login Form-->			
			<div class="col-12  p-5 d-flex justify-content-center ">
				<form id="loginForm" action="login.php" method="POST">		
					<h2>Login to your account</h2>
					<!--Username-->
					<label class="pt-2" for="loginUsername">Username or E-mail</label>
					<p>		
						<input id="loginUsername" class="form-control" name="loginUsername" type="text" placeholder="e.g. bartSimpson / bart@gmail.com" required>
					</p>
					<!--Password-->
						<label for="loginPassword">Password</label>
					<p>
						<input id="loginPassword" class="form-control" name="loginPassword" type="password" placeholder="Your password" required>
					</p>
					<!--Login Button-->
					<div class="container-fluid p-2">
						<button  class="btn btn-success btn-lg btn-block rounded-pill " type="submit" name="loginButton">LOG IN</button>
					</div>
					
				</form>
			</div>
		</div>
		</div>	

	<!--Bootstrap-->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>