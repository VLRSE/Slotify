<!-- Now Playing Bar Elements-->
				<footer id="nowPlayingBar">
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
					
				</footer>