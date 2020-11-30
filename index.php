<!DOCTYPE html>
<html>
<head>
	<title>Welcome to  Slotify!</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<!--Google Icons-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<!--LOGO-->
	<link rel="icon" type="icon" href=" assets/images/logo.png">

	<!--<meta name="viewport" content="width=device-width, initial-scale=1">

			********TEST THIS FEATURE*****-->


	<!--Google Font-->
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400&family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
	<!--Bootstrap CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body data-spy = scroll data-target = ".navbar">

	<div id ="main" >
		<div class="grid-container ">		
			<!--Navbar-->
			<div class="navbar">
				<!--Navbar Items-->	
					<nav class="navbarItems">
						<div class=" logo " href="#">
							<!--Logo on the left-side-->
							<a href="index.php" style="font-size: 36px; padding: 5px;">
								<img style="height: 56px;width: 56px;" src=" assets/images/logo.png">
								<span style="color: #ffff; font-weight: bold;vertical-align: middle;"> Slotify</span>
							</a>							
						</div>	
						<div class="innerNavItems" >
										
						<li class="nav-item">
							<a class ="nav-link nav-text active" href="includes/startPage.php"><img src="assets/images/icons/home-white.png" style="height: 24px; width: 24px;"> 
							<div class="innerNavText">
								Start
							</div>	
						</a>
						</li>
						<li class="nav-item">
							<a class ="nav-link nav-text   gray-border-bottom pl-3 pr-3" href="includes/searchPage.php"><i class="material-icons" style="font-size:24px; padding-right: 4px;">search</i>
								<div class="innerNavText">
									Search	
								</div>	
							</a>
						</li>
						<li class="nav-item">
							<a class ="nav-link nav-text gray-border-bottom pl-3 pr-3" href="#skills">
								<img src="assets/images/icons/lib-white.png" style="height: 24px; width: 24px;"> 

								<div class="innerNavText">
									Library	
								</div>				
							</a>
						</li>
						</div>

						
					
						<!-- Navbar Left Items-->	
					<ul class="nav flex-column ">	
					</ul>

					</nav>
			</div>

			<!--Main Page-->
			<div id="mainContainer" class="container-fluid">
				

				<!--Music List Page-->
				<div id="mainView" class="musicAlbumPage  ">
					<!--Top Navbar-->
				<div class="topNavbar container-fluid d-flex ">
					<?php include("includes/topNavbar.php");?>
				</div>
					<div id="mainContent">
						<?php include("includes/startPage.php");?>
					</div>
					

				</div>	
		<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
			</div>

			<!--Footer -- Now Playing Bar --if signed in-->
			<div id="nowPlayingContainer" class="container-fluid">
				<!-- Now Playing Bar Elements-->
				<?php include("includes/footer.php");?>
			</div>

		</div>	
	</div>

</div>
	



<script type="text/javascript" src="js/script.js" charset="utf-8"></script>

<!--Bootstrap CDN-->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>