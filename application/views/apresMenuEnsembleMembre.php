	
	</div>

		<!-- signup -->
		<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content modal-info">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
					</div>
					<div class="modal-body modal-spa">
						<div class="sign-grids">
							<div class="sign">
								<div class="sign-right">
									<form action="#" method="post">
										<h3>Créer un compte pour être membre</h3>
										<input type="text" value="Nom" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
										<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email id';}" required="">	
										<input type="text" value="Login" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Login';}" required="">
										<input type="password" value="Mot de passe" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">	
										<input type="password" value="Mot de passe" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">		
										<input type="submit" value="créer" >
									</form>
								</div>
								<div class="clearfix"></div>								
							</div>
							<p>Devenez <span>membre</span> et <span> profitez pleinement de tous nos services.</span></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- eventadd -->
		<div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content modal-info">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
					</div>
					<div class="modal-body modal-spa">
						<div class="sign-grids">
							<div class="sign">
								<div class="sign-right">
									<form action="#" method="post">
										<h3>Séléctionner les membres à inviter</h3>
											<label for="choixmultiple"></label>
											<select name="select3" size="7" multiple>
												<option> élément 1</option>
												<option> élément 2</option>
												<option> élément 3</option>
												<option> élément 4</option>
												<option> élément 5</option>
											</select>
										<input type="submit" value="inviter" >
									</form>
								</div>
								<div class="clearfix"></div>								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- main content start-->
		<div class="main-content">
		
			<div class="header-section">
				
				<a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
				
				<div class="menu-right">
				
					<div class="profile_details">	
					
						<div class="col-md-4 serch-part">
							<div id="sb-search" class="sb-search">
								<form action="#" method="post">
									<input class="sb-search-input" placeholder="recherche" type="search" name="search" id="search" ng-model="titleSearch" ng-keyup="changeTitle">
									<input class="sb-search-submit" type="submit" value="">
									<span class="sb-icon-search"> </span>
								</form>
							</div>
						</div>
						
						<div class="col-md-4 player"></div>
										
						<div class="col-md-4 login-pop">
							<div id="loginpop"> <a href="<?php echo pageMembre_function("logout");?>"><span>logout</span></a></div>
						</div>
						
						<div class="clearfix"> </div>
						
					</div>
					
				</div>
				
				<div class="clearfix"></div>
				
			</div>