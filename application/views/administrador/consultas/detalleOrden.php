    <section id="encabezado">
      <div id="giipfecha">
        <div id="giip">Giip N° <?php echo $respuesta->giip ?></div>
        <div id='fecha'><?php echo $respuesta->fecha_inicial ?></div>
      </div>
      <div id="bodega">
        <div id='bodegaN'><?php echo $respuesta->nombre_bodega ?></div>
        <div id='bodegaF'>Bodega</div>
      </div>
      <div id='estado'>
      <div ><?php echo $respuesta->estado_nombre ?></div>
      </div>
    </section >
        <section id="datos1">
      <div id="subdatos1">
        <article id="circuitoN"><?php echo $respuesta->nombre_circuito ?></article>
        <article class="datosnegros" id="circuitoId" >CIRCUITO <?php echo $respuesta->id_circuito ?></article>
      </div>
      <div id="subdatos2">
        <article id="nodo"> <?php echo $respuesta->nodo ?></article>
        <article  class="datosnegros"id="nodon">2727272</article>
      </div>
      <div id="subdatos3">
        <article id="sgo"> <?php echo $respuesta->sgo ?></article>
        <article class="datosnegros"id="sgon">2727272</article>
      </div>
      <div id="subdatos4">
        <article id="ow">ow</article>
        <article class="datosnegros" id="own"><?php echo $respuesta->Ow ?></article>
      </div>
      <div id="subdatos5">
        <article id="pe">p/e</article>
        <article  class="datosnegros"id="pen"><?php echo $respuesta->pe ?></article>
      </div>
    </section>
    <section id="dejecutores">
      <div class="materiales">
        <article>

          <div id="titulos_materiales" style="color:white;">


            <li class="numero">id</li>
            <li class="mimaterial">materiales</li>
            <li class="cantidad">cantidad</li>
            <li class="ndevuelto">devuelto</li>
          </div>

          <?php foreach ($materiales as $m): ?>
            <div>
               <li class="numero"><?php echo $m->codigo_material ?></li>
              <li class="mimaterial"><?php echo $m->descripcion1 ?></li>
            <li class="cantidad"><?php echo $m->cantidad ?>--</li>
            <li class="ndevuelto">--<?php echo $m->devuelto ?></li> 
             </div> 
          <?php endforeach ?>
          
<!--             <li class="numero">id</li>
            <li class="mimaterial">Cableado estructurado para servicio</li>
            <li class="cantidad">cantidad</li>
            <li class="ndevuelto">devuelto</li> -->
         
        </article>
      </div>
      <div class="ejecutor">
        <article>
          <div>
            <li class="nombre" >nombre del ejecutor</li>
          </div>
        <?php foreach ($ejecutores as $e): ?>
          <div>
            <li class="nombre" ><?php echo $e->nombre_ejecutor ?></li>
          </div>
        <?php endforeach ?>
        </article>
      </div>
    </section>
        <section id="descripciones">
      <div id="cajondescripcion">
        <div class="cajones">
          <div id="descripcionn">Descripcion del Trabajo</div>
          <div id="descripcion"><?php echo $respuesta->descripcion_trabajo ?></div>
        </div>
        <div class="cajones">
          <div id="corregimienton">Corregimiento de la orden</div>
          <div id="corregimiento"><?php echo $respuesta->municipio_corregimiento ?></div>
        </div>
      </div>
    

      <div id="mishoras">
        <div id="encabezadohoras">horas</div>
        <div class="hora">
          <div id="hora1">
            <div class="dhora">Hd</div>
            <div class="hhora"><?php echo $respuesta->hora_hd ?></div>
          </div>
          <div id="hora2">
            <div class="dhora">hi</div>
            <div class="hhora"><?php echo $respuesta->hora_hi ?></div>
          </div>
          <div id="hora3">
            <div class="dhora">hf</div>
            <div class="hhora"><?php echo $respuesta->hora_hf ?></div>
          </div>
          <div id="hora4">
            <div class="dhora">mi</div>
            <div class="hhora"><?php echo $respuesta->hora_mi ?></div>
          </div>
          <div id="hora5">
            <div class="dhora">mf</div>
            <div class="hhora"><?php echo $respuesta->hora_mf ?></div>
          </div>
        </div>
      </div>
    </section>
    <section id="misdatos3">
      <div id="obsFinaln">Observacion</div>
      <div id="obsFinal"><?php echo $respuesta->observaciones ?></div>
    </section>