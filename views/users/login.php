<h2>Inicio de sesion</h2>
<div class="row">
	<div class="col-md-12">
		<form action="<?php echo APP_URL; ?>users/login" method="POST">
			<div class="form-group">
		    	<label for="exampleInputEmail1">Username:</label>
		    	<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Username" name="username">
		  	</div>
			<div class="form-group">
			    <label for="exampleInputPassword1">Password:</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
			</div>
		  	<div class="checkbox">
			    <label>
			      <input type="checkbox"> Recordar contraseña
			    </label> 	
		  	</div>

		  	<button type="entrar" class="btn btn-default">Entrar</button>
		</form>
	</div>
</div>