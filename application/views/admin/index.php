

<section class="ds ms section_padding_50">
	<div class="col-sm-12" align="center">
		<button type="button" class="theme_button inverse" data-toggle="modal" data-target="#myModal">Agregar Cliente</button>
		
	</div>
</section>




<!-- Modal Agregar -->
<?php echo form_open(null, array('name'=>'form'));?>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content ds">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" style="color:white;">x</button>
          <h4 class="modal-title"><b><i class="rt-icon2-head highlight"></i> AGREGAR CLIENTE</b></h4>
        </div>

        <div class="modal-body">
        	<div class="row">
        		<div class="col-sm-3">
        			<p><label>NOMBRE<span class="required"> *</span></label>
					<input type="text" id="nombre" aria-required="true" size="30" value="" name="nombre" class="form-control" placeholder="Nombre"></p>

					<p><label>NACIONALIDAD<span class="required"> *</span></label>
					<input type="text" id="nacionalidad" aria-required="true" size="30" value="" name="nacionalidad" class="form-control" placeholder="Nacionalidad"></p>

					<p><label>RAZA<span class="required"> *</span></label>
					<input type="text" id="raza" aria-required="true" size="30" value="" name="raza" class="form-control" placeholder="Raza"></p>											
					<p><label>EDAD<span class="required"> *</span></label>
					<input type="text" id="edad" aria-required="true" size="30" value="" name="edad" class="form-control" placeholder="Edad"></p>
        		</div>

        		<div class="col-sm-3">
					<p><label>ESTATURAS<span class="required"> *</span></label>
					<input type="text" id="estatura" aria-required="true" size="30" value="" name="estatura" class="form-control" placeholder="Estatura"></p>

					<p><label>MEDIDAS<span class="required"> *</span></label>
					<input type="text" id="medidas" aria-required="true" size="30" value="" name="medidas" class="form-control" placeholder="Medidas"></p>

					<p><label>PESO<span class="required"> *</span></label>
					<input type="text" id="peso" aria-required="true" size="30" value="" name="peso" class="form-control" placeholder="Peso"></p>

					<p><label>TELEFONO<span class="required"> *</span></label>
					<input type="text" id="telefono" aria-required="true" size="30" value="" name="telefono" class="form-control" placeholder="Teléfono"></p>
        		</div>

        		<div class="col-sm-3">
        			<p><label>DIRECCION<span class="required"> *</span></label>
					<input type="text" id="direccion" aria-required="true" size="30" value="" name="direccion" class="form-control" placeholder="Dirección"></p>

					<p><label>CIUDAD<span class="required"> *</span></label>
					<input type="text" id="ciudad" aria-required="true" size="30" value="" name="ciudad" class="form-control" placeholder="Ciudad"></p>	

					<p><label>DEPARTAMENTO<span class="required"> *</span></label>
					<input type="text" id="depto" aria-required="true" size="30" value="" name="depto" class="form-control" placeholder="Departamento"></p>

					<p><label>VALOR<span class="required"> *</span></label>
					<input type="text" id="valor" aria-required="true" size="30" value="" name="valor" class="form-control" placeholder="Valor"></p>	
        		</div>

        		<div class="col-sm-3">
        			<p><label>HORA ENTRADAS<span class="required"> *</span></label>
					<input type="text" id="entrada" aria-required="true" size="30" value="" name="entrada" class="form-control" placeholder="Hora de Entrada"></p>

					<p><label>HORA SALIDA<span class="required"> *</span></label>
					<input type="text" id="salida" aria-required="true" size="30" value="" name="salida" class="form-control" placeholder="Hora de Salida"></p>

					<p><label>CLASIFICACION<span class="required"> *</span></label>
					<input type="text" id="clasificacion" aria-required="true" size="30" value="" name="clasificacion" class="form-control" placeholder="Clasificación"></p>

					<p><label>% RETOQUE FOTOS<span class="required"> *</span></label>
					<input type="text" id="retoque" aria-required="true" size="30" value="" name="retoque" class="form-control" placeholder="Retoque"></p>
        		</div>
        	</div>

				<div class="topmargin_30"></div>
        </div>


        <div class="modal-footer">
          <button type="button" class="theme_button inverse" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="theme_button color1">Agregar</button>
        </div>
      </div>
    </div>
  </div>
<?php echo form_close();?>
<!-- / Modal Agregar -->



<!-- Tabla Clientes -->		
<section class="ds ms section_padding_50">
<div class="col-sm-12">
	<div class="table-responsive">
		<table class="table_template">
			<thead class="light">
				<tr>
					<th>NOMBRE</th>
					<th>NACIONALIDAD</th>
					<th>EDAD</th>
					<th>ESTATURA</th>
					<th>MEDIDAS</th>
					<th>PESO</th>
					<th>TELEFONO</th>
					<th>DERECCION</th>
					<th>VALOR</th>
					<th>ACCIONES</th>
				</tr>
			</thead>
			<tbody class="grey">
			<?php foreach($ninas as $datos){ ?>
				<tr>
					<td><?php echo $datos->NOMBRE; ?></td>
					<td><?php echo $datos->NACIONALIDAD;?>, <?php echo $datos->RAZA;?></td>
					<td><?php echo $datos->EDAD;?></td>
					<td><?php echo $datos->ESTATURA;?></td>
					<td><?php echo $datos->MEDIDAS;?></td>
					<td><?php echo $datos->PESO;?></td>
					<td><?php echo $datos->TELEFONO;?></td>
					<td><?php echo $datos->DIRECCION;?>, <?php echo $datos->CIUDAD;?></td>
					<td>$<?php echo $datos->VALOR;?></td>
					<td align="center">
						<i class="rt-icon2-trash highlight"></i>&nbsp;
						<i class="rt-icon2-pen highlight"></i>
					</td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>	


</div>

</section>
<!-- / Tabla Clientes -->		
