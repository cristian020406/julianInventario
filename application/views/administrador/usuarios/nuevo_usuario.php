
<div class="ui grid">

<div class="ui one wide column">dd</div>
<div class="ui nine wide column">
<div class="ui segment inverted ">
<div class="ui red ribbon label">Informacion Personal</div>
<div class="ui aligned teal inverted segment">

						<label>Nombre</label>
			<div class="ui labeled input">
		  		<input id="Nombre"type="text" placeholder="">
		  	<div class="ui corner label">
		    	<i class="asterisk icon"></i>
		  	</div>
		</div>

					<label>Apellidos</label>
			<div class="ui labeled input">
		  		<input id="Apellido"type="text" placeholder="">
		  	<div class="ui corner label">
		    	<i class="asterisk icon"></i>
		  	</div>
	</div>



		<label>Documento</label>
			<div class="ui labeled input">
		  		<input id="Documento"type="text" placeholder="">
		  	<div class="ui corner label">
		    	<i class="asterisk icon"></i>
		  	</div>
		</div>
		<label>Genero</label>
			   <div id="Genero" class="ui  selection dropdown">
		      <div class="text">Seleccione el Genero</div>
		      <i class="dropdown icon"></i>
		      <input type="hidden" name="gender">
		      <div class="menu">
		        <div class="item" data-value="1">Masculino</div>
		        <div class="item" data-value="2">Femenino</div>
		      </div>
		    </div>
</div>
<div class="ui red ribbon label">Datos De Seccion</div>
<div class="ui inverted teal segment">

			<label>Usuario </label>
			<div class="ui labeled input">
		  		<input id="usuario"type="text" placeholder="">
		  	<div class="ui corner label">
		    	<i class="asterisk icon"></i>
		  	</div>
		</div>
			<label> Contraseña</label>
			<div class="ui labeled input">
		  		<input id="Clave"type="text" placeholder="">
		  	<div class="ui corner label">
		    	<i class="asterisk icon"></i>
		  	</div>
		</div>
					<label> Confirmar Contraseña</label>
			<div class="ui labeled input">
		  		<input id="cclave"type="text" placeholder="">
		  	<div class="ui corner label">
		    	<i class="asterisk icon"></i>
		  	</div>
		</div>
</div>
<div class="ui red ribbon label">Datos de la Aplicacion</div>
<div class="ui inverted teal segment">

			<label>Rol </label>
	    	<div id="Rol" class="ui fluid selection dropdown">
		      <div class="text">Seleccione el Rol</div>
		      <i class="dropdown icon"></i>
		      <input type="hidden" name="gender">
		      <div class="menu">
<?php foreach ($roles as $r ): ?>
	<div class="item" data-value="<?php echo $r->id_rol; ?>"><?php echo $r->nombre_rol ?></div>
<?php endforeach ?>
		      </div>
		    </div>
			<label> Cargo </label>
	    	<div id="Cargo" class="ui fluid selection dropdown">
		      <div class="text">Seleccione El cargo</div>
		      <i class="dropdown icon"></i>
		      <input type="hidden" name="gender">
		      <div class="menu">
<?php foreach ($cargos as $c ): ?>
	<div class="item" data-value="<?php echo $c->id_cargo; ?>"><?php echo $c->cargo ?></div>
<?php endforeach ?>
		      </div>
		    </div>
</div>
	


<div class="ui center aligned inverted  segment">
		<div class="ui buttons">
  <div id="rCliente" class="ui purple inverted 	button">Registrar</div>
  <div class="or "></div>
  <div class="ui negative button">Cancelar</div>
</div>
		
</div>
<div id="respuestadatos" class="ui hidden success message">
  <i class="close icon"></i>
  <div class="header">
    Felicitaciones Se ha registrado el usuario.
  </div>
</div>
</div>




</div>
<div class="ui four wide column">fff</div>





	</div>
