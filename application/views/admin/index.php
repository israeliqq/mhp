

<section class="ds ms section_padding_50">
	<div class="col-sm-12" align="center">
		<button type="button" class="theme_button inverse" data-toggle="modal" data-target="#myModal">Agregar Cliente</button>
		
	</div>
</section>



<?php echo form_open(null, array('name'=>'form'));?>
<!-- Modal Agregar -->

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
					<input type="text"  size="30" value="" name="nombre" class="form-control"  placeholder="Nombre"></p>

					<p><label>NACIONALIDAD<span class="required"> *</span></label>
					  <select type="text" name="nacionalidad" required class="form-control">
					  	<option value="Argentina">Argentina</option>
					  	<option value="Boliviana">Boliviana</option>
					    <option value="Chilena">Chilena</option>
					    <option value="Colombiana">Colombiana</option>
					    <option value="Cubana">Cubana</option>
					    <option value="Ecuatoriana">Ecuatoriana</option>
					    <option value="Peruana">Peruana</option>
					    <option value="Paraguaya">Paraguaya</option>
					    <option value="Venezolana">Venezolana</option>
					  </select>

					<p><label>RAZA<span class="required"> *</span></label>
					  <select type="text"  name="raza" required class="form-control">
					    <option>CAUCÁSICA</option>
					    <option>TRIGUEÑA</option>
					    <option>MORENA</option>
					  </select>										
					<p><label>EDAD<span class="required"> *</span></label>
					<input type="number" min="18" max="55" value="" name="edad"  class="form-control" placeholder="Edad"></p>
        		</div>

        		<div class="col-sm-3">
					<p><label>ESTATURAS<span class="required"> *</span></label>
					<input type="text" size="30" value="" name="estatura"  class="form-control" placeholder="Estatura"></p>

					<p><label>MEDIDAS<span class="required"> *</span></label>
					<input type="text" size="30" value="" name="medidas"  class="form-control" placeholder="Medidas"></p>

					<p><label>PESO<span class="required"> *</span></label>
					<input type="number" min="30" max="100" value="" name="peso"  class="form-control" placeholder="Peso"></p>

					<p><label>TELEFONO<span class="required"> *</span></label>
					<input type="text" size="30" value="" name="telefono"  class="form-control" placeholder="Teléfono"></p>
        		</div>

        		<div class="col-sm-3">
        			<p><label>DIRECCION<span class="required"> *</span></label>
					<input type="text" size="30" value="" name="direccion"  class="form-control" placeholder="Dirección"></p>

					<p><label>CIUDAD<span class="required"> *</span></label>
					<select type="text" name="ciudad"  class="form-control">
					    <option value="Arica">Arica</option>
					    <option value="Antofagasta">Antofagasta</option>
					    <option value="Calama">Calama</option>
					    <option value="Iquique">Iquique</option>
					 </select>

					<p><label>RESEÑA<span class="required"> *</span></label>
					<input type="text" size="30" value="" name="resena"  class="form-control" placeholder="Reseña"></p>

					<p><label>VALOR<span class="required"> *</span></label>
					<input type="number" size="30" value="" name="valor"  class="form-control" placeholder="Valor"></p>	
        		</div>

        		<div class="col-sm-3">
        			<p><label>HORA ENTRADAS<span class="required"> *</span></label>
					<input type="time" value="" name="entrada"  class="form-control" placeholder="Hora de Entrada"></p>

					<p><label>HORA SALIDA<span class="required"> *</span></label>
					<input type="time" value="" name="salida"  class="form-control" placeholder="Hora de Salida"></p>

					<p><label>CLASIFICACION<span class="required"> *</span></label>
					<select type="text" name="clasificacion"  class="form-control">
					    <option>VIP</option>
					    <option>GOLDEN</option>
					    <option>PLATINUM</option>
					    <option>SILVER</option>
					 </select>

					<p><label>% RETOQUE FOTOS<span class="required"> *</span></label>
					<input type="number" min="0" max="50" value="" name="retoque"  class="form-control" placeholder="Retoque"></p>
        		</div>
        	</div>

				<div class="topmargin_30"></div>
        </div>


        <div class="modal-footer">
          <button type="button" class="theme_button inverse" data-dismiss="modal">Cerrar</button>
          <input type="submit" name="agregar" value="agregar" class="theme_button color1">
        </div>
      </div>
    </div>
  </div>

<!-- / Modal Agregar -->
<?php echo form_close();?>	


<!-- Tabla Clientes -->		
<section class="ds ms section_padding_50">
<div class="col-sm-12">
	<div class="table-responsive">
		<table class="table_template">
			<thead class="light">
				<tr>
					<th>NOMBRE</th>
					<th>NACIONALIDAD</th>
					<th>ALTURA PESO</th>
					<th>MEDIDAS</th>
					<th>TELEFONO</th>
					<th>DIRECCION</th>
					<th>VALOR</th>
					<th>ACCIONES</th>
				</tr>
			</thead>
			<tbody class="grey">
			<?php foreach($ninas as $datos){ ?>
				<tr>
					<td><?php echo $datos->NOMBRE;?> <br> <?php echo $datos->EDAD;?> AÑOS</td>
					<td><?php echo $datos->NACIONALIDAD;?>, <?php echo $datos->RAZA;?></td>
					<td><?php echo $datos->ESTATURA;?> m <br><?php echo $datos->PESO;?> Kg</td>
					<td><?php echo $datos->MEDIDAS;?></td>
					<td><?php echo $datos->TELEFONO;?></td>
					<td><?php echo $datos->DIRECCION;?>, <?php echo $datos->CIUDAD;?></td>
					<td>$<?php echo $datos->VALOR;?> <br> <?php echo $datos->CLASIFICACION;?></td>
					<td align="center">
						<h3>
						<a href="<?php echo base_url();?>admin/delete?id=<?php echo $datos->ID; ?>"><i class="rt-icon2-trash highlight"></i></a>&nbsp;
						<a data-toggle="modal" href="#myModal<?php echo $datos->ID;?>"><i class="rt-icon2-pen highlight"></i></a>
						</h3>
					</td>
				</tr>


<?php echo form_open(null, array('name'=>'form'));?>
<!-- Modal Agregar -->

  <div class="modal fade" id="myModal<?php echo $datos->ID;?>" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content ds">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" style="color:white;">x</button>
          <h4 class="modal-title"><b><i class="rt-icon2-head highlight"></i> AGREGAR CLIENTE</b></h4>
        </div>

        <div class="modal-body">
        	<div class="row">
        		<div class="col-sm-3">
        			<input type="text" value="<?php echo $datos->ID;?>" hidden name="id">
        			<p><label>NOMBRE<span class="required"> *</span></label>
					<input type="text" size="30" value="<?php echo $datos->NOMBRE;?>" name="nombre" required class="form-control" placeholder="Nombre"></p>

					<p><label>NACIONALIDAD<span class="required"> *</span></label>
					  <select type="text" name="nacionalidad" required class="form-control">
					  	<option value="<?php echo $datos->NACIONALIDAD;?>" selected><?php echo $datos->NACIONALIDAD;?></option>
					  	<option value="Argentina">Argentina</option>
					  	<option value="Boliviana">Boliviana</option>
					    <option value="Chilena">Chilena</option>
					    <option value="Colombiana">Colombiana</option>
					    <option value="Cubana">Cubana</option>
					    <option value="Ecuatoriana">Ecuatoriana</option>
					    <option value="Peruana">Peruana</option>
					    <option value="Paraguaya">Paraguaya</option>
					    <option value="Venezolana">Venezolana</option>
					  </select>

					<p><label>RAZA<span class="required"> *</span></label>
					  <select type="text" name="raza" required class="form-control">
					  	<option value="<?php echo $datos->RAZA;?>" selected><?php echo $datos->RAZA;?></option>
					    <option>CAUCÁSICA</option>
					    <option>TRIGUEÑA</option>
					    <option>MORENA</option>
					  </select>										
					<p><label>EDAD<span class="required"> *</span></label>
					<input type="number" min="18" max="55" value="<?php echo $datos->EDAD;?>" name="edad" required class="form-control" placeholder="Edad"></p>
        		</div>

        		<div class="col-sm-3">
					<p><label>ESTATURA<span class="required"> *</span></label>
					<input type="text" size="30" value="<?php echo $datos->ESTATURA;?>" name="estatura" required class="form-control" placeholder="Estatura"></p>

					<p><label>MEDIDAS<span class="required"> *</span></label>
					<input type="text" size="30" value="<?php echo $datos->MEDIDAS;?>" name="medidas" required class="form-control" placeholder="Medidas"></p>

					<p><label>PESO<span class="required"> *</span></label>
					<input type="number" min="30" max="100" value="<?php echo $datos->PESO;?>" name="peso" required class="form-control" placeholder="Peso"></p>

					<p><label>TELEFONO<span class="required"> *</span></label>
					<input type="text" size="30" value="<?php echo $datos->TELEFONO;?>" name="telefono" required class="form-control" placeholder="Teléfono"></p>
        		</div>

        		<div class="col-sm-3">
        			<p><label>DIRECCION<span class="required"> *</span></label>
					<input type="text"  size="30" value="<?php echo $datos->DIRECCION;?>" name="direccion" required class="form-control" placeholder="Dirección"></p>

					<p><label>CIUDAD<span class="required"> *</span></label>
					<select type="text"  name="ciudad" required class="form-control">
						<option value="<?php echo $datos->CIUDAD;?>" selected><?php echo $datos->CIUDAD;?></option>
					    <option value="Arica">Arica</option>
					    <option value="Antofagasta">Antofagasta</option>
					    <option value="Calama">Calama</option>
					    <option value="Iquique">Iquique</option>
					 </select>

					<p><label>RESEÑA<span class="required"> *</span></label>
					<input type="text" size="30" value="<?php echo $datos->RESENA;?>" name="resena" required class="form-control" placeholder="Reseña"></p>

					<p><label>VALOR<span class="required"> *</span></label>
					<input type="number"  size="30" value="<?php echo $datos->VALOR;?>" name="valor" required class="form-control" placeholder="Valor"></p>	
        		</div>

        		<div class="col-sm-3">
        			<p><label>HORA ENTRADAS<span class="required"> *</span></label>
					<input type="time"   value="<?php echo $datos->HORA_I;?>" name="entrada" required class="form-control" placeholder="Hora de Entrada"></p>

					<p><label>HORA SALIDA<span class="required"> *</span></label>
					<input type="time" value="<?php echo $datos->HORA_F;?>" name="salida" required class="form-control" placeholder="Hora de Salida"></p>

					<p><label>CLASIFICACION<span class="required"> *</span></label>
					<select type="text" name="clasificacion" required class="form-control">
						<option value="<?php echo $datos->CLASIFICACION;?>" selected><?php echo $datos->CLASIFICACION;?></option>
					    <option>VIP</option>
					    <option>GOLDEN</option>
					    <option>PLATINUM</option>
					    <option>SILVER</option>
					 </select>

					<p><label>% RETOQUE FOTOS<span class="required"> *</span></label>
					<input type="number"  min="0" max="50" value="<?php echo $datos->RETOQUE;?>" name="retoque" required class="form-control" placeholder="Retoque"></p>
        		</div>
        	</div>

				<div class="topmargin_30"></div>
        </div>


        <div class="modal-footer">
          <button type="button" class="theme_button inverse" data-dismiss="modal">Cerrar</button>
          <input type="submit" name="actualizar" value="actualizar" class="theme_button color1">
        </div>
      </div>
    </div>
  </div>

<!-- / Modal Agregar -->
<?php echo form_close();?>	





			<?php } ?>
			</tbody>
		</table>
	</div>	


</div>

</section>
<!-- / Tabla Clientes -->	

