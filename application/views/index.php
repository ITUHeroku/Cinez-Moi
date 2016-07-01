
			<div id="page-wrapper">
			
				<div class="inner-content">
				
					<div class="col-md-2">
					</div>
					
					<div class="col-md-8">
					
						<div class="music-left">
							
							<div class="banner-section">
								<div class="banner">
									<div class="callbacks_container">
										<ul class="rslides callbacks callbacks1" id="slider4">
											<li>
												<div class="banner-img">
													<img src="<?php echo images_url("11.jpg");?>" class="img-responsive" alt="">
												 </div>
												<div class="banner-info">
													<h3>Cinez-moi</h3>
													<p>Mes <span>préférences</span></p>
												 </div>
											</li>
											<li>
												<div class="banner-img">
													<img src="<?php echo images_url("11.jpg");?>" class="img-responsive" alt="">
												</div>
												<div class="banner-info">
													<h3>Cinez-moi</h3>
													<p>Tes <span>préférences</span></p>
												</div>
											</li>
											<li>
												<div class="banner-img">
													<img src="<?php echo images_url("11.jpg");?>" class="img-responsive" alt="">
												</div>
												<div class="banner-info"> 
													<h3>Cinez-moi</h3>
													<p>Nos <span>préférences</span></p>
												</div>
											</li>
										</ul>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
							
							<!--albums 1-->
							<div class="albums">
							
								<div class="tittle-head">
									<h3 class="tittle">Top 12 des films récents <span class="new">Nouveautés</span></h3>
									<a href="<?php echo pageVisiteur_url("ensemble");?>"><h4 class="tittle third">voir tous</h4></a>
									<div class="clearfix"> </div>
								</div>
								
								<div class="row">
								<?php foreach($listTop12FilmRecent as $topFilm){?>
									<div class="col-md-3 browse-grid">
										<a  href="<?php echo pageVisiteur_function("details");?>/<?php echo $topFilm->getIdFilm();?>"><img src="<?php echo images_url($topFilm->getImage());?>" title="allbum-name"></a>
										<a class="sing" href="<?php echo pageVisiteur_function("details");?>/<?php echo $topFilm->getIdFilm();?>"><?php echo $topFilm->getTitre();?></a>
									</div>		
								<?php } ?>
								</div>
								<div class="clearfix"> </div>		
							</div>
							
							<!--albums 2-->
							<div class="albums">
							
								<div class="tittle-head">
									<h3 class="tittle">Liste de tous les catégories de film</h3>
									<a href="<?php echo pageVisiteur_url("ensemble");?>"><h4 class="tittle third">voir tous</h4></a>
									<div class="clearfix"> </div>
								</div>
										
								<div class="row">
								<?php foreach($listCategorie as $categorie){?>
									<div class="col-md-3 browse-grid">
											<a  href="#"><img src="<?php echo images_url("categorie.png");?>" title="allbum-name"></a>
											<a class="sing" href="#"><?php echo $categorie->getNomCategorie();?></a>
										</div>
								<?php } ?>
								</div>
								
								<div class="clearfix"> </div>
							</div>
							
						</div>
						
					</div>
					
					<div class="col-md-2">
					</div>
			
				</div>
				
			</div>
		