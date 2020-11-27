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
				<div class="navBarTopContainer container">
					<!--Navbar Items-->	
					<nav class="navbarItems">
						<div class=" logo " href="#">
							<!--Logo on the left-side-->
							<a href="index.php" style="font-size: 36px; padding: 5px;">
								<img style="height: 506x;width: 56px;" src=" assets/images/logo.png">
								<span style="color: #ffff; font-weight: bold;vertical-align: middle;"> Slotify</span>
							</a>							
						</div>	
						<div class="innerNavItems" >
										
						<li class="nav-item">
							<a class ="nav-link nav-text active" href="#slides"><i class="material-icons" style="font-size:24px; padding-right: 4px;">home</i>
							<div class="innerNavText">
								Start
							</div>	
						</a>
						</li>
						<li class="nav-item">
							<a class ="nav-link nav-text   gray-border-bottom pl-3 pr-3" href="#about"><i class="material-icons" style="font-size:24px; padding-right: 4px;">search</i>
								<div class="innerNavText">
									Search	
								</div>	
							</a>
						</li>
						<li class="nav-item">
							<a class ="nav-link nav-text gray-border-bottom pl-3 pr-3" href="#skills"><i class="material-icons" style="font-size:24px; padding-right: 4px;">bar_chart</i>

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
				

					
					
			</div>

			<!--Main Page-->
			<div id="mainContainer" class="container-fluid">
				<div class="topContainer">
					<div class="row">
						<div class="col-12">
							
						</div>
						
					</div>
				</div>
			</div>

			<!--Footer -- Now Playing Bar --if signed in-->
			<div id="nowPlayingContainer" class="container-fluid">
				<!-- Now Playing Bar Elements-->
				<div id="nowPlayingBar">
					<!-- Now Playing Bar Left-->
					<div id="nowPlayingBarLeft" class="">
						<div class="content ">
							<span class="albumLink " >
								<img class="albumImage" src="https://images.unsplash.com/photo-1512608121467-72931bf816c0?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTB8fGFsYnVtJTIwYXJ0fGVufDB8fDB8&auto=format&fit=crop&w=500&q=60" >
								<div class="d-flex">
									<div class="trackInfo ">
										<span class="trackName"> Like That</span>
										<span class="trackArtist">Bea Miller</span>
									</div>
									<div class="saveToLibraryBtn">
										<button class="controlButton" title="Save to Favorite" >
										<img src="assets/images/icons/heart-50.png"> 
										</button>
									</div>
								</div>
							</span>
						</div>
					</div>

					<!-- Now Playing Bar Center-->
					<div id="nowPlayingBarCenter" >
						<div class="content  playerControls">
							<!-- Player Buttons-->
							<div class="buttons">
								<!-- Suffle Button-->
								<button class="controlButton shuffle" title="Shuffle">
									<img src="assets/images/icons/shuffle.png" alt="Shuffle Button">
								</button>

								<!-- Previous Button-->
								<button class="controlButton " title="Previous">
									<img src="assets/images/icons/previous.png" alt="Previous Button">
								</button>

								<!-- Play Button-->
								<button class="controlButton centerButton" title="Play">
									<img src="assets/images/icons/play.png" alt="Play Button">
								</button>

								<!-- Pause Button-->
								<button class="controlButton centerButton" title="Pause" style="display: none">
									<img src="assets/images/icons/pause.png" alt="Pause Button">
								</button>

								<!-- Next Button-->
								<button class="controlButton " title="Next">
									<img src="assets/images/icons/next.png" alt="Next Button">
								</button>

								<!-- Repeat Button-->
								<button class="controlButton " title="Repeat">
									<img src="assets/images/icons/repeat.png" alt="Repeat Button">
								</button>
							</div>

							<!-- Progress Bar Container-->
							<div  class=" playbackBar" >
								<span class="progressTime current">0:00</span>
								<div class="progressBar ">
									<div class="progressBarBg">
										<div class="progress">
											
										</div>
									</div>
								</div>
								<span class="progressTime remaining">0:00</span>
								
							</div>

							
							
						</div>
					</div>

					<!-- Now Playing Bar Right-->
					<div id="nowPlayingBarRight" class="">
						<div class="content">
							<div class="volumeBar d-flex">
								<button class="controlButton" title="Volume">
									<img src="assets/images/icons/volume.png" alt="Volume Button">	
								</button>
									<div class="progressBar ">
									<div class="progressBarBg">
										<div class="progress">					
										</div>
									</div>
								</div>
								
							</div>
							
						</div>
					</div>
					
				</div>

			</div>
		</div>

	</div>
	



<script type="text/javascript" src="js/script.js" charset="utf-8"></script>

<!--Bootstrap CDN-->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>