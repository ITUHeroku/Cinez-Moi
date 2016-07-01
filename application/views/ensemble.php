
			<div id="page-wrapper">
			
				<div class="inner-content">
				
				    <div class="music-browse">
					
						<div class="browse">
						
							<div class="tittle-head two">
								<h3 class="tittle">Liste de films</h3>
								<div class="clearfix"> </div>
							</div>
							

							<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
							
								<ul id="myTab" class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Tous</a></li>
								</ul>
								
								<div id="myTabContent" class="tab-content">
								
									<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
										<div class="browse-inner">
											<div class="row">
												<div class="col-md-2" id="mytab" ng-repeat="x in resultSearch | filter:titleSearch">
													<a  href=""><img  src="<?php echo images_url(null,true);?>{{x.image}}" title="allbum-name"></a>
													<a class="sing" href="<?php echo pageVisiteur_function("details");?>/{{x._idfilm}}">
													{{x.titre}}</a>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
								
									</div>
								
								</div>
						
						</div>
					
					</div>
						
				</div>
						
			</div>
			
			
	