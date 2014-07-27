<div class="ui form">
  <div class="fields">
    <div id="datosNO" class="sixteen wide field">
    
	<div class="ui form segment">
		<h2 class="ui dividing aligned medium teal inverted center header">
		  <i class="home icon"></i>
		  Ingreso de Orden
		</h2>

		  <div class="fields">

		    <div class="field four wide ">
		         <div class="ui  selection dropdown">
		      <div class="text">Estado De la OrdeN</div>
		      <i class="dropdown icon"></i>
		      <input name="gender" type="hidden">
		      <div class="menu">
		        <div class="item" data-value="male">Ejecutada</div>
		        <div class="item" data-value="female">Cancelada</div>
		      </div>
		    </div>
		  </div>


		</div>
	</div>
	<div class="ui form segment">
		<h2 class="ui dividing aligned medium teal inverted center header">
		  <i class="time icon"></i>
		  Tiempos de Orden
		</h2>

		  <div class="fields">
		    <div class="field four wide ">
		    	Fecha
				<div class="ui mini input">
					  <input id="btn-fIorden"  type="text">
				</div>
		 	 </div>	
		 	<div class="field one wide ">

		 	 </div>
		    <div class="field two wide ">
		    	HD
				<div class="ui mini input">
					  <input  type="text">
				</div>
		 	 </div>
		    <div class="field two wide ">
		    	HI
				<div class="ui mini input">
					  <input  type="text">
				</div>
		 	 </div>
		    <div class="field two wide ">
		    	HF
				<div class="ui mini input">
					  <input  type="text">
				</div>
		 	 </div>
		    <div class="field two wide ">
		    	MI
				<div class="ui mini input">
					  <input  type="text">
				</div>
		 	 </div>
		    <div class="field two wide ">
		    	MF
				<div class="ui mini input">
					  <input  type="text">
				</div>
		 	 </div>





		  </div>
	</div>
	<div class="ui form segment">
		<h2 class="ui dividing aligned medium teal inverted center header">
		  <i class="hard down  icon"></i>
		  Datos de Orden
		</h2>
		<div class="fields  ">

		    <div class="one wide field ">
		    	GIIP
				<div class="ui  mini input">
					  <input  type="text">
				</div>
		 	 </div>
		    <div class="field two wide ">
		    	SGO
				<div class="ui mini input">
					  <input  type="text">
				</div>
		 	 </div>
		    <div class="field two wide ">
		    	OW
				<div class="ui mini input">
					  <input  type="text">
				</div>
		 	 </div>
		    <div class="field one wide ">
		    	pqt
				<div class="ui  mini input">
					  <input  type="text">
				</div>
		 	 </div>
		    <div class="field two wide ">
		    P/E
					<div class="ui selection fluid dropdown">
					  <input name="gender" type="hidden">
					  <div class="default text">P/E</div>
					  <i class="dropdown icon"></i>
					  <div class="menu">
					    <div class="item" data-value="1">P</div>
					    <div class="item" data-value="0">E</div>
					  </div>
					</div>
		 	 </div>
		    <div class="field two wide">
		    	ID_CIRCUITO
					<div class="ui mini icon input">
					  <input id="cam-conCir"placeholder="" type="text">
					  <i id="btn-conCir" class="add icon"></i>
					</div>
		 	 </div>
		    <div class="field five wide">
		    	CIRCUITO
				<div id="res-conCir"class="ui mini fluid mini input">
					  <input  type="text">
				</div>
		 	 </div>
		 	    <div class="field one wide">
		    	<div class="ui icon button">
				  <i class="search icon"></i>
				</div>
		 	 </div>



		</div>
		<div class="fields">	
		    <div class="nine	 wide field ">
		    	Municipio/corregimiento
				<div class="ui  mini input">
					  <input  type="text">
				</div>
		 	 </div>
		    <div class="field seven wide ">
		    	Bodega
					<div class="ui selection fluid dropdown">
					  <input name="gender" type="hidden">
					  <div class="default text">Seleccionar</div>
					  <i class="dropdown icon"></i>
					  <div class="menu">
				<?php foreach ($bodegas as $b): ?>
					    <div class="item" data-value="<?php echo $b->id_bodega ?>"><?php echo $b->nombre_bodega ?></div>
				<?php endforeach ?>
	
					  </div>
					</div>
		 	 </div>

		</div>		
		<div class="fields">	
		    <div class="nine	 wide field ">
		    	
					 <div class="field">
					    <label>obervaciones</label>
					    <textarea></textarea>
					  </div>
		 	 </div>
		    <div class="field seven wide ">
		    	Ejecutores
					<table class="ui table segment">
						  <thead>
						    <tr>
						    <th>NOMBRE</th>
						    <th>REMOVER</th>
						  </tr></thead>
						  <tbody id="datos-ejecutor">
						  </tbody>
						  <tfoot>
							    <tr>
								    <th colspan="1">
											<div id="miejecutor" class="ui selection fluid dropdown">
											  <input name="gender" type="hidden">
											  <div class="default text">Ejecutores</div>
											  <i class="dropdown icon"></i>
											  <div class="menu">
										<?php foreach ($ejecutor as $e): ?>
												    <div class="item" data-value="<?php echo $e->id_ejecutor ?>"><?php echo $e->nombre_ejecutor ?></div>					
										<?php endforeach ?>
					
											  </div>
												    <th   colspan="1">
												      <div id="bt-eje" class="ui blue labeled icon button"><i  class="user icon"></i>Añadir</div>
												    </th>
											</div>			
								    </th>

							  	</tr>
						  	</tfoot>
					</table>
		 	 </div>

		</div>		

	</div>
	<div class="ui form segment">
		<h2 class="ui dividing aligned medium teal inverted center header">
		  <i class="time icon"></i>
		  Materiales Y Nodos
		</h2>

		  <div class="fields">
		    <div class="field sixteen wide ">
					<table class="ui table center alignement segment">
						  <thead>
						    <tr>
						    <th>ID</th>
						    <th colspan="2">NOMBRE</th>
						    <th colspan="5">Detalle</th>
						    <th>CANTIDAD</th>
						    <th >NODO</th>
						    <th >REMOVER</th>
						  </tr></thead>
						  <tbody>
						    <tr>
						      <td contenteditable="true">10118</td>
						      <td colspan="2" contenteditable="true">destornillador destornillador destornillador destornillador destornillador destornillador</td>
						      <td colspan="5" contenteditable="true">Detallllllllllllll</td>
						      <td contenteditable="true">Cantidad</td>
						      <td contenteditable="true">192982</td>
						      <td contenteditable="true">  <i class="icon red large remove"></i>
</td>
						    </tr>
						    <!-- <tr>
						      <td>Jamie</td>
						      <td>Approved</td>
						      <td>Requires call</td>
						    </tr>
						    <tr>
						      <td>Jill</td>
						      <td>Denied</td>
						      <td>None</td>
						    </tr> -->
						  </tbody>
						  <tfoot>
							    <tr>
								    <th colspan="1">
								    Codigo
								    <div class="ui icon mini input">
										  <input placeholder="Search..." type="text">
										  <i class="inverted search icon"></i>
									</div>
							
									</th>
												    <th colspan="2">
												    	Buscar
														<div class="ui icon mini input">
															  <input placeholder="Search..." type="text">
															  <i class="inverted search icon"></i>
														</div>
												    </th>	
			<th colspan="5">	
												    	Descripcion
														jfdlakjsdlfajsdlkjaflskdjfalsdjalksdf
												    </th>
												    <th >
												    Cantidad
														<div class="input mini ui">
															<input type="number">
														</div>
												    </th>
												    <th colspan="1">
												    Nodo
														<div class="input mini ui">
															<input type="text">
														</div>
												    </th>						
												    <th colspan="1">
												      <div class="ui blue labeled icon button"><i class="book icon"></i>Ingresar</div>
												    </th>
								    
							  	</tr>
						  	</tfoot>
					</table>
		 	 </div>	
		  </div>
	</div>
	<div class="ui form segment">
	<div class="fields">
		<div class=" wide twelve field">
			
		</div>
	<div class=" wide four field">
		<div class=" positive right attached ui button">Registrar</div>
		<div class="  negative right attached ui button">Cancelar</div>	
		</div>
	</div>


	</div>	
</div>








<!-- 
    <div class="one wide field">
    </div> -->
  </div>
</div>