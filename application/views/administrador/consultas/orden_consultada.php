  	<thead>
		    <tr>
          <th>Giip</th>
          <th>Sgo</th>
          <th>Ow</th>
		    	<th>pqt</th>
          <th>P/E</th>
          <th>Fecha </th>
          <th>Hora-hd</th>
          <th>Hora-hi</th>
          <th>Hora_hf</th>
          <th>Circuito</th>
          <th>Nodo</th>
			    <th>Estado</th>


			    

	  		</tr>
	  	</thead>
  <tbody  class="fila-contenido">
  
    <?php foreach ($respuesta as $r): ?>
	<?php
	 echo "<tr>
<td class='ver'>".$r->giip."</td> 
<td>".$r->sgo."</td> 
<td>".$r->Ow."</td> 
<td>".$r->pqt."</td>
<td>".$r->pe."</td> 
<td>".$r->fecha_inicial."</td> 
<td>".$r->hora_hd."</td>
<td>".$r->hora_hi."</td>
<td>".$r->hora_hf."</td>
<td>".$r->id_circuito."</td>
<td>".$r->nodo."</td>
<td>".$r->estado_nombre."</td>



 </tr>" ?>
<?php endforeach ?>


  </tbody>
  <tfoot>
    <tr><th colspan="9" style="text-align:center">
      <div class="ui borderless  pagination menu">
  <a class="item">
    <i class="left arrow icon"></i> Previous
  </a>
  <a class="  item">1</a>
  <a class="item">2</a>
  <a class="item">3</a>
  <a class="active item">4</a>
  <a class="item">5</a>
  <a class="item">6</a>
  <a class="item">
    Next <i class="icon right arrow"></i>
  </a>
</div>
  </tr>

 </tfoot>
 <?php 
   $this->db->last_query()
 ?>