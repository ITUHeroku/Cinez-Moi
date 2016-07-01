
			<!-- page -->
			<div id="page-wrapper">
			
				<div class="inner-content">
				
					<div class="browse">
					
						<div class="tittle-head two">
							<h3 class="tittle">Liste de films récents <span class="new">Nouveautés</span></h3>
							<a href="<?php echo pageVisiteur_url("ensemble");?>"><h4 class="tittle third">voir plus</h4></a>
							<div class="clearfix"> </div>
						</div>

						<?php foreach($listTop6FilmRecent as $topFilmRecent){?>
						<div class="col-md-3 browse-grid">
							<a  href="<?php echo pageVisiteur_function("details");?>/<?php echo $topFilmRecent->getIdFilm();?>"><img src="<?php echo images_url($topFilmRecent->getImage());?>" title="allbum-name"></a>
							<a class="sing" href="<?php echo pageVisiteur_function("details");?>/<?php echo $topFilmRecent->getIdFilm();?>"><?php echo $topFilmRecent->getTitre();?></a>
						</div>
						<?php } ?>
						<div class="clearfix"></div>
						
					</div>
					
					<div class="browse">
					
						<div class="tittle-head two">
							<h3 class="tittle">Liste de films populaires <span class="new">A ne pas rater</span></h3>
							<a href="<?php echo pageVisiteur_url("ensemble");?>"><h4 class="tittle third">voir plus</h4></a>
							<div class="clearfix"> </div>
						</div>

						<?php foreach($listTop6FilmPopulaire as $topFilmPopulaire){?>
						<div class="col-md-3 browse-grid">
							<a  href="<?php echo pageVisiteur_function("details");?>"><img src="<?php echo images_url($topFilmPopulaire->getImage());?>" title="allbum-name"></a>
							<a class="sing" href="<?php echo pageVisiteur_function("details");?>/<?php echo $topFilmPopulaire->getIdFilm();?>"><?php echo $topFilmPopulaire->getTitre();?></a>
						</div>
						<?php } ?>
						
						<div class="clearfix"></div>
						
					</div>
					
					<div class="browse">
					
						<div class="tittle-head two">
							<h3 class="tittle">Liste de films </h3>
							<a href="<?php echo pageVisiteur_url("ensemble");?>"><h4 class="tittle third">voir plus</h4></a>
							<div class="clearfix"> </div>
						</div>

						<?php foreach($listTop6Film as $topFilm){?>
						<div class="col-md-3 browse-grid">
							<a  href="<?php echo pageVisiteur_function("details");?>/<?php echo $topFilm->getIdFilm();?>"><img src="<?php echo images_url($topFilm->getImage());?>" title="allbum-name"></a>
							<a class="sing" href="<?php echo pageVisiteur_function("details");?>/<?php echo $topFilm->getIdFilm();?>"><?php echo $topFilm->getTitre();?></a>
						</div>
						<?php } ?>
						
						<div class="clearfix"></div>
						
						<div class="clearfix"></div>
						
					</div>
					
					<div class="clearfix"></div>	
			
				</div>
				
			</div>
		
			