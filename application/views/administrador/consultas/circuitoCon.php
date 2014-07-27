
 <?php if ($respuesta): ?>
	<?php echo $respuesta['nombre_circuito'] ?>
 <?php else: ?>
 	<div class="ui red message">Circuito no existe</div>
 	
 <?php endif ?>