<?php 
// funcion que recibe los datos de la consulta de logeo y deside a donde envia el usuarios
 ?>
 <?php if ($miusuario): ?>

<?php 

	$miusuario = array(
		'Nombre' => $miusuario['Nombre'], 
			'Usuario' => $miusuario['Usuario'],
			'id_rol' => $miusuario['id_rol'],
				);
			$this->session->set_userdata($miusuario);

 ?>

 <?php   
 	echo "<script>window.location= '". base_url()."'</script>";



 	 ?>
 
 <?php else: ?>
	 <?php echo "USUARIO O CONTRASEÑA NO EXISTE" ?>
 <?php endif ?>