

<section class="ds ms section_padding_50">
<div class="col-sm-12">
	<div class="table-responsive">
		<table class="table_template">
			<thead class="light">
				<tr>
					<th>Nombre</th>
					<th>Nacionalidad</th>
					<th>Raza</th>
					<th>Edad</th>
					<th>Estatura</th>
					<th>Medidas</th>
					<th>Peso</th>
					<th>Telefono</th>
					<th>Dirección</th>
					<th>Ciudad</th>
					<th>Valor</th>
				</tr>
			</thead>
			<tbody class="grey">
			<?php foreach($ninas as $datos){ ?>
				<tr>
					<td><?php echo $datos->nombre; ?></td>
					<td><?php echo $datos->nacionalidad;?></td>
					<td><?php echo $datos->raza;?></td>
					<td><?php echo $datos->edad;?></td>
					<td><?php echo $datos->estatura;?></td>
					<td><?php echo $datos->medidas;?></td>
					<td><?php echo $datos->peso;?></td>
					<td><?php echo $datos->telefono;?></td>
					<td><?php echo $datos->direccion;?></td>
					<td><?php echo $datos->ciudad;?></td>
					<td><?php echo $datos->valor;?></td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>	


</div>

</section>
