
<?php echo form_open(null, array('name'=>'form'));?>
<section class="ds ms section_padding_50">
	<div class="col-sm-12" align="center">
		<button type="button" class="theme_button inverse" data-toggle="modal" data-target="#myModal">Agregar Cliente</button>
		
	</div>
</section>




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
					<input type="text"  size="30" value="" name="nombre" class="form-control" required placeholder="Nombre"></p>

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
					<input type="number" min="18" max="55" value="" name="edad" required class="form-control" placeholder="Edad"></p>
        		</div>

        		<div class="col-sm-3">
					<p><label>ESTATURAS<span class="required"> *</span></label>
					<input type="text" size="30" value="" name="estatura" required class="form-control" placeholder="Estatura"></p>

					<p><label>MEDIDAS<span class="required"> *</span></label>
					<input type="text" size="30" value="" name="medidas" required class="form-control" placeholder="Medidas"></p>

					<p><label>PESO<span class="required"> *</span></label>
					<input type="number" min="30" max="100" value="" name="peso" required class="form-control" placeholder="Peso"></p>

					<p><label>TELEFONO<span class="required"> *</span></label>
					<input type="text" size="30" value="" name="telefono" required class="form-control" placeholder="Teléfono"></p>
        		</div>

        		<div class="col-sm-3">
        			<p><label>DIRECCION<span class="required"> *</span></label>
					<input type="text" size="30" value="" name="direccion" required class="form-control" placeholder="Dirección"></p>

					<p><label>CIUDAD<span class="required"> *</span></label>
					<select type="text" name="ciudad" required class="form-control">
					    <option value="Arica">Arica</option>
					    <option value="Antofagasta">Antofagasta</option>
					    <option value="Calama">Calama</option>
					    <option value="Iquique">Iquique</option>
					 </select>

					<p><label>DEPARTAMENTO<span class="required"> *</span></label>
					<input type="text" size="30" value="" name="depto" required class="form-control" placeholder="Departamento"></p>

					<p><label>VALOR<span class="required"> *</span></label>
					<input type="number" size="30" value="" name="valor" required class="form-control" placeholder="Valor"></p>	
        		</div>

        		<div class="col-sm-3">
        			<p><label>HORA ENTRADAS<span class="required"> *</span></label>
					<input type="time" value="" name="entrada" required class="form-control" placeholder="Hora de Entrada"></p>

					<p><label>HORA SALIDA<span class="required"> *</span></label>
					<input type="time" value="" name="salida" required class="form-control" placeholder="Hora de Salida"></p>

					<p><label>CLASIFICACION<span class="required"> *</span></label>
					<select type="text" name="clasificacion" required class="form-control">
					    <option>VIP</option>
					    <option>GOLDEN</option>
					    <option>PLATINUM</option>
					    <option>SILVER</option>
					 </select>

					<p><label>% RETOQUE FOTOS<span class="required"> *</span></label>
					<input type="number" min="0" max="50" value="" name="retoque" required class="form-control" placeholder="Retoque"></p>
        		</div>
        	</div>

				<div class="topmargin_30"></div>
        </div>


        <div class="modal-footer">
          <button type="button" class="theme_button inverse" data-dismiss="modal">Cerrar</button>
          <button type="submit" name="agregar" class="theme_button color1">Agregar</button>
        </div>
      </div>
    </div>
  </div>

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
					<td><?php echo $datos->NOMBRE;?></td>
					<td><?php echo $datos->NACIONALIDAD;?>, <?php echo $datos->RAZA;?></td>
					<td><?php echo $datos->EDAD;?></td>
					<td><?php echo $datos->ESTATURA;?> m</td>
					<td><?php echo $datos->MEDIDAS;?></td>
					<td><?php echo $datos->PESO;?> Kg</td>
					<td><?php echo $datos->TELEFONO;?></td>
					<td><?php echo $datos->DIRECCION;?>, <?php echo $datos->CIUDAD;?></td>
					<td>$<?php echo $datos->VALOR;?>, <?php echo $datos->CLASIFICACION;?></td>
					<td align="center">
						<h3>
						<a href="<?php echo base_url();?>admin/delete?id=<?php echo $datos->ID; ?>" target="_blank"><i class="rt-icon2-trash highlight"></i></a>&nbsp;
						<a data-toggle="modal" href="#myModal<?php echo $datos->ID;?>"><i class="rt-icon2-pen highlight"></i></a>
						</h3>
					</td>
				</tr>



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
        			<p><label>NOMBRE<span class="required"> *</span></label>
					<input type="text" size="30" value="<?php echo $datos->NOMBRE;?>" name="nombre2" required class="form-control" placeholder="Nombre"></p>

					<p><label>NACIONALIDAD<span class="required"> *</span></label>
					  <select type="text" name="nacionalidad2" required class="form-control">
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
					  <select type="text" name="raza2" required class="form-control">
					  	<option value="<?php echo $datos->RAZA;?>" selected><?php echo $datos->RAZA;?></option>
					    <option>CAUCÁSICA</option>
					    <option>TRIGUEÑA</option>
					    <option>MORENA</option>
					  </select>										
					<p><label>EDAD<span class="required"> *</span></label>
					<input type="number" min="18" max="55" value="<?php echo $datos->EDAD;?>" name="edad2" required class="form-control" placeholder="Edad"></p>
        		</div>

        		<div class="col-sm-3">
					<p><label>ESTATURA<span class="required"> *</span></label>
					<input type="text" size="30" value="<?php echo $datos->ESTATURA;?>" name="estatura2" required class="form-control" placeholder="Estatura"></p>

					<p><label>MEDIDAS<span class="required"> *</span></label>
					<input type="text" size="30" value="<?php echo $datos->MEDIDAS;?>" name="medidas2" required class="form-control" placeholder="Medidas"></p>

					<p><label>PESO<span class="required"> *</span></label>
					<input type="number" min="30" max="100" value="<?php echo $datos->PESO;?>" name="peso2" required class="form-control" placeholder="Peso"></p>

					<p><label>TELEFONO<span class="required"> *</span></label>
					<input type="text" size="30" value="<?php echo $datos->TELEFONO;?>" name="telefono2" required class="form-control" placeholder="Teléfono"></p>
        		</div>

        		<div class="col-sm-3">
        			<p><label>DIRECCION<span class="required"> *</span></label>
					<input type="text"  size="30" value="<?php echo $datos->DIRECCION;?>" name="direccion2" required class="form-control" placeholder="Dirección"></p>

					<p><label>CIUDAD<span class="required"> *</span></label>
					<select type="text"  name="ciudad2" required class="form-control">
						<option value="<?php echo $datos->CIUDAD;?>" selected><?php echo $datos->CIUDAD;?></option>
					    <option value="Arica">Arica</option>
					    <option value="Antofagasta">Antofagasta</option>
					    <option value="Calama">Calama</option>
					    <option value="Iquique">Iquique</option>
					 </select>

					<p><label>DEPARTAMENTO<span class="required"> *</span></label>
					<input type="text" size="30" value="<?php echo $datos->DEPTO;?>" name="depto2" required class="form-control" placeholder="Departamento"></p>

					<p><label>VALOR<span class="required"> *</span></label>
					<input type="number"  size="30" value="<?php echo $datos->VALOR;?>" name="valor2" required class="form-control" placeholder="Valor"></p>	
        		</div>

        		<div class="col-sm-3">
        			<p><label>HORA ENTRADAS<span class="required"> *</span></label>
					<input type="time"   value="<?php echo $datos->HORA_I;?>" name="entrada2" required class="form-control" placeholder="Hora de Entrada"></p>

					<p><label>HORA SALIDA<span class="required"> *</span></label>
					<input type="time" value="<?php echo $datos->HORA_F;?>" name="salida2" required class="form-control" placeholder="Hora de Salida"></p>

					<p><label>CLASIFICACION<span class="required"> *</span></label>
					<select type="text" name="clasificacion2" required class="form-control">
						<option value="<?php echo $datos->CLASIFICACION;?>" selected><?php echo $datos->CLASIFICACION;?></option>
					    <option>VIP</option>
					    <option>GOLDEN</option>
					    <option>PLATINUM</option>
					    <option>SILVER</option>
					 </select>

					<p><label>% RETOQUE FOTOS<span class="required"> *</span></label>
					<input type="number"  min="0" max="50" value="<?php echo $datos->RETOQUE;?>" name="retoque2" required class="form-control" placeholder="Retoque"></p>
        		</div>
        	</div>

				<div class="topmargin_30"></div>
        </div>


        <div class="modal-footer">
          <button type="button" class="theme_button inverse" data-dismiss="modal">Cerrar</button>
          <button type="submit" name="actualizar" class="theme_button color1">Actualizar</button>
        </div>
      </div>
    </div>
  </div>

<!-- / Modal Agregar -->






			<?php } ?>
			</tbody>
		</table>
	</div>	


</div>

</section>
<!-- / Tabla Clientes -->	
<?php echo form_close();?>	
