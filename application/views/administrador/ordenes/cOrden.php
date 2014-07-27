<div class="grid ui">
	<div class="column wide one"></div>
	<div class="column wide twelve">
    <div class="ui red center aligned inverted segment">
  <div class="ui right  corner label">
    <i class="user icon"></i>
  </div>
  <div class="ui left corner label">
    <div class="text">C</div>
  </div>			

<!--   <p>Date: <input type="text" id="datepicker"></p>  
  <p>Date: <input type="text" id="datepicker"></p>   -->
  	<label> Estado de orden </label>
<div id="btn-estado" class="ui selection dropdown">
  <input type="hidden" name="gender">
  <div class="default text">Estado de ordenes</div>
  <i class="dropdown icon"></i>
  <div class="menu">
    <div class="item" data-value="1">Ordenes Ejecutadas</div>
    <div class="item" data-value="2">Ordenes Canceladas</div>
    <div class="item" data-value="3">Cualquier Estado</div>
  </div>
</div>

    <label >Numero de orden</label>
   <div class="ui icon mini input">
  <input id="btn-oBuscar"  type="text" placeholder="consultar...">
</div>
 <label >Fecha Inicio</label>
   <div class="ui icon mini input">
<input type="text" id="btn-fInicio">

</div> 
<label >Fecha Fin</label>
   <div class="ui icon mini input">
  <input id="btn-fFin" type="text" placeholder="calendario...">

</div>
<div id="btn-boBuscar" class="ui small button">
  <i class="search icon"></i>
  Buscar
</div>

</div>
    <table id="res-ClienteBuscado" class="ui table segment">

</table>
	<div id="mimodal" class="ui modal">
		



  </div>
</div>





	</div>
 
	<div class="column wide two"></div>
</div>

