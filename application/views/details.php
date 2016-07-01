
		<div id="page-wrapper">
				
			<div class="inner-content single">
			
				<div class="tittle-head">
					<h3 class="tittle">Déscription du film</h3>
					<div class="clearfix"> </div>
				</div>
				
				<div class="single_left">
					<div class="video-main">
						<div class="video-record-list">
							<div id="jp_container_1" class="jp-video jp-video-270p" role="application" aria-label="media player">
								<div class="jp-type-playlist">
									<div id="jquery_jplayer_1" class="jp-jplayer" style="width: 480px; height: 270px;">
									<video id="jp_video_0" preload="metadata" src="" title="" style="width: 0px; height: 0px;"></video></div>
									<div class="jp-gui">
										<div class="jp-video-play" style="display: block;">
											<button class="jp-video-play-icon" role="button" tabindex="0">play</button>
										</div>
										<div class="jp-interface">
											<div class="jp-progress">
												<div class="jp-seek-bar" style="width: 100%;">
													<div class="jp-play-bar" style="width: 0%;"></div>
												</div>
											</div>
											<div class="jp-current-time" role="timer" aria-label="time">00:00</div>
											<div class="jp-duration" role="timer" aria-label="duration">00:70</div>
											<div class="jp-controls-holder">
												<div class="jp-controls">
													<button class="jp-previous" role="button" tabindex="0">previous</button>
													<button class="jp-play" role="button" tabindex="0">play</button>
												</div>
												<div class="jp-volume-controls">
													<button class="jp-mute" role="button" tabindex="0">mute</button>
													<button class="jp-volume-max" role="button" tabindex="0">max volume</button>
													<div class="jp-volume-bar">
														<div class="jp-volume-bar-value" style="width: 100%;"></div>
													</div>
												</div>
												<div class="jp-toggles">
												
													<button class="jp-full-screen" role="button" tabindex="0">full screen</button>
												</div>
											</div>
										</div>
									</div>
									<div class="jp-playlist">
										<ul style="display: block;"><li class="jp-playlist-current"><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item jp-playlist-current" tabindex="0"><span class="jp-artist"></span></a></div></li></ul>
									</div>
									<div class="jp-no-solution" style="display: none;">
										Erreur de compatibilité du lecteur vidéo et du navigateur.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
	
				<div class="response">
					<h4><span class="new">Titre du film : </span> <?php echo $film->getTitre();?> </h4>
					<div class="media response-info">
						<div class="row">
							<div class="col-md-3">
								<div class="media-body response-text-left">
									<img src="<?php echo images_url($film->getImage());?>" width="200" height="300">
								</div>
							</div>
							<div class="col-md-9">
								<div class="media-body response-text-right">
									<p>Introduction: <?php echo $film->getIntroduction();?></p>
									<p>Réalisateur(s): <?php echo $film->getRealisateur();?></p>
									<div id="data-video" data-video="<?php echo($film->getExtrait());?>"></div>
									<ul>
										<li>Date de sortie: </li>
										<div class="btn-group">
										  <button type="button" class="btn btn-default" href="#">suivre</button>
										  <button type="button" class="btn btn-default" href="#"><i class="fa fa-plus-circle"></i> evénement</button>
											<!--<button type="button" class="btn btn-default" href="#" data-toggle="modal" data-target="#myModal7"><i class="fa fa-plus-circle"></i> evénement</button>-->
										</div>
									</ul>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					
				</div>
								
				<div class="clearfix"> </div>
					
			</div>
			
			<div class="browse">
				<div class="tittle-head two">
					<h3 class="tittle">Top 6 des films de la même catégorie</h3>
					<a href="<?php echo pageVisiteur_url("ensemble");?>"><h4 class="tittle third">voir plus</h4></a>
					<div class="clearfix"> </div>
				</div>
				
				<?php foreach($listTop6FilmMemeCategorie as $topFilmMemeCategorie){?>
				<div class="col-md-3 browse-grid">
					<a  href="<?php echo pageVisiteur_function("details");?>/<?php echo $topFilmMemeCategorie->getIdFilm();?>"><img  src="<?php echo images_url($topFilmMemeCategorie->getImage());?>" title="allbum-name"></a>
					<a class="sing" href="<?php echo pageVisiteur_function("details");?>/<?php echo $topFilmMemeCategorie->getIdFilm();?>"><?php echo $topFilmMemeCategorie->getTitre();?></a>
				</div>
				<?php } ?>	
				<div class="clearfix"></div>
			</div>

			
			<div class="clearfix"> </div>
						
		</div>
	