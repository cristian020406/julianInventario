
 <?php if ($respuesta): ?>
 	<th id="cam-busM" colspan="2"><?php echo $respuesta['descripcion1'] ?></th>
	<th id="desMate" colspan="4"><?php echo $respuesta['descripcion2'] ?></th>
 <?php else: ?>
 	<th id="cam-busM"  class="error" colspan="2"> El material no ha sido encontrado</th>
	<th id="desMate"  class="error" colspan="4"> El material no ha sido encontrado</th>
 <?php endif ?>
