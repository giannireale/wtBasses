<div class="modal fade" id="regModal">
		  <div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<ul class="nav nav-tabs" id="tabs" data-tabs="tabs">
						<li><a href="#registrati" data-toggle="tab">Registrati</a></li>
						<li class="active"><a href="#login" data-toggle="tab">Log-in</a></li>
					</ul>
					<br/>
					<div class="tab-content">
						<div class="tab-pane fade in" id="registrati">
							<form class="form-horizontal" method="POST" action="bin/register.php" id="form_registrazione" name="registrazione">
									<div class="form-group">
										<label for="inputUserReg" class="col-sm-2 control-label">Username</label>
										<div class="col-sm-10">
											<input type="text" name="username" class="form-control" id="inputUserReg" placeholder="Username">
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmailReg" class="col-sm-2 control-label">Email</label>
										<div class="col-sm-10">
											<input type="email" name="email" class="form-control" id="inputEmailReg" placeholder="Email">
										</div>
									</div>
									<div class="form-group">
										<label for="inputPasswordReg" class="col-sm-2 control-label">Password</label>
										<div class="col-sm-10">
											<input type="password" name="password" class="form-control" id="inputPasswordReg" placeholder="Password">
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-offset-2 col-sm-10">
											<button type="submit" class="btn btn-unique">Registrati</button>
											<button type="button" class="btn btn-default" data-dismiss="modal">Chiudi</button>
										</div>
									</div>
							</form>
						</div>
						<div class="tab-pane fade in active" id="login">	
							<form class="form-horizontal" method="POST" action="bin/login.php" id="form_login" name="login">
									<div class="form-group">
										<label for="inputEmailLog" class="col-sm-2 control-label">Email</label>
										<div class="col-sm-10">
											<input type="email" name="email" class="form-control" id="inputEmailLog" placeholder="Email o Username">
										</div>
									</div>
									<div class="form-group">
										<label for="inputPasswordLog" class="col-sm-2 control-label">Password</label>
										<div class="col-sm-10">
											<input type="password" name="password" class="form-control" id="inputPasswordLog" placeholder="Password">
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-offset-2 col-sm-10">
											<button type="submit" class="btn btn-unique">Accedi</button>
											<button type="button" class="btn btn-default" data-dismiss="modal">Chiudi</button>
										</div>
									</div>
							</form>
						</div>
					</div>
				</div>
			</div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		

