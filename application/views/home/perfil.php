

<section class="ds model-page section_padding_70 section_padding_bottom_60 columns_padding_25">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-md-push-7">

				<div class="vertical-item with_background models_square">
					<div id="gallery-owl-carousel" class="owl-carousel" data-dots="false" data-items="1" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1" data-responsive-xs="1">

						<?php foreach($fotos as $foto){ ?>

							<div class="item-media">
								<img src="<?php echo base_url();?>tool/fotos/<?php echo $foto->RUTA?>" alt="">
							</div>

						<?php } ?>

					</div>

					<div class="model-parameters" align="center">

						<!-- BANDERA
						<div>
							<img src="http://myhotplace.com/mhp/tool/img/flag_icons/png/cl.png" align="left">
						</div>
						-->
						<div>
							<h2><?php echo $escort->NOMBRE; ?> | <?php echo $escort->EDAD; ?> Años<h2>
						</div>
														
						<br>

					</div>


					<div class="widget widget_text">
						<div class="text-center">
							<a href="#" class="social-icon big-icon color-bg-icon soc-rosa">
								<i class="rt-icon2-location2"></i>
								<span class="counter" data-from="0" data-to="12" data-speed="1500">0</span>
								<span>Kms</span>
							</a>
							<a href="#" class="social-icon big-icon color-bg-icon soc-rosa">
								<i class="rt-icon2-eye3"></i>
								<span class="counter" data-from="0" data-to="120" data-speed="1500">0</span>
								<span>Visitas</span>
							</a>
							<a href="#" class="social-icon big-icon color-bg-icon soc-rosa">
								<i class="rt-icon2-star"></i>
								<span class="counter" data-from="0" data-to="5" data-speed="1500">0</span>
								<span>Calificación</span>
							</a>

						</div>
					</div>
					<hr>
					<div class="teaser table_section">
						<a href="https://api.whatsapp.com/send?phone=<?php echo $escort->TELEFONO; ?>&text=Hola%2C%20te%20contacto%20desde%20MyHotPlace.com">
						<div class="row">
							<div class="col-sm-2"></div>
							<div class="col-sm-1 text-center">
									<h1><i class="rt-icon2-whatsapp highlight"></i><h1>
							</div>
							
							<div class="col-sm-6 text-md-left">
								<h4 class="text-md-left">Whatsapp</h4>
								<p> Enviar Whatsapp</p>
							</div>
						</div>
						</a>
					</div>

					<hr>
					<div class="teaser table_section">
						<div class="row">
							<div class="col-sm-2"></div>
							<div class="col-sm-1 text-center">
									<h1><i class="rt-icon2-location2 highlight"></i><h1>
							</div>
							<div class="col-sm-6 text-md-left">
								<h4 class="text-md-left">Iquique</h4>
								<p> a 12 Km de ti</p>
							</div>
						</div>
					</div>
					<hr>

					<div class="teaser table_section">
						<div class="row">
							<div class="col-sm-2"></div>
							<div class="col-sm-1 text-center">
									<h1><i class="rt-icon2-banknote highlight"></i><h1>
							</div>
							<div class="col-sm-6 text-md-left">
								<h4 class="text-md-left">$100.000</h4>
								<p class="text-md-left"> por 1 Hora</p>
							</div>
						</div>
					</div>
					<br>

			

				</div>

			</div>



			<div class="col-md-7 col-md-pull-5">
				<h2 class="topmargin_0 bottommargin_30">SOBRE MI:</h2>
				<p>
					<?php echo $escort->RESENA; ?>
				</p>




				<div class="columns_padding_5">
					<h2 class="widget-title">GALERIA DE FOTOS:</h2>
					<div class="isotope_container isotope row masonry-layout" data-filters=".isotope_filters">


						<?php foreach($fotos as $foto){ ?>


							<div class="isotope-item bottommargin_10 col-md-3 col-sm-4 col-xs-6 tests">
								<div class="vertical-item gallery-item content-absolute text-center cs">
									<div class="item-media">
										<img src="<?php echo base_url();?>tool/fotos/<?php echo $foto->RUTA?>" alt="">
										<div class="media-links">
											<a class="prettyPhoto abs-link" title="" data-gal="prettyPhoto[gal]" href="<?php echo base_url();?>tool/fotos/<?php echo $foto->RUTA?>"></a>
										</div>
									</div>
								</div>
							</div>
						

						<?php } ?>





					</div>
					<!-- eof .isotope_container.row -->
				</div>




				<div class="row">
					<div class="col-sm-12">
						<h2>DATOS:</h2>
						<br>
						<div class="panel-group" id="accordion1">


							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion1" href="#collapse0" style="font-size: 15px" >
											<i class="rt-icon2-heart3 highlight" style="font-size: 25px"></i>
											<b>CARACTERISTICAS</b>
										</a>
									</h4>
								</div>
								<div id="collapse0" class="panel-collapse collapse">
									<div class="panel-body">
										<div class="widget widget_tag_cloud">
											<div class="tagcloud">
												<a href="#" title=""><?php echo $escort->NACIONALIDAD; ?></a>
												<a href="#" title=""><?php echo $escort->RAZA; ?></a>
												<a href="#" title=""><?php echo $escort->ESTATURA; ?> cm</a>
												<a href="#" title=""><?php echo $escort->MEDIDAS; ?></a>
												<a href="#" title=""><?php echo $escort->PESO; ?> kg</a>
												<a href="#" title=""><?php echo $escort->EDAD; ?> AÑOS</a>
											</div>
										</div>
									</div>
								</div>
							</div>






							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion1" href="#collapse1" class="collapsed">
											<i class="rt-icon2-suitcase highlight" style="font-size: 20px"></i>
											<b>SERVICIOS</b>
										</a>
									</h4>
								</div>
								<div id="collapse1" class="panel-collapse collapse">
									<div class="panel-body">
										<div class="widget widget_tag_cloud">
											<div class="tagcloud">
												<a href="#" title="">Parejas hetero</a>
												<a href="#" title="">Bailes eróticos</a>
												<a href="#" title="">Besos</a>
												<a href="#" title="">Disfraces</a>
												<a href="#" title="">Dos hombres</a>
												<a href="#" title="">Juguetes</a>
												<a href="#" title="">Masaje tántrico</a>
												<a href="#" title="">Eventos y cenas</a>
											</div>
										</div>
									</div>
								</div>
							</div>


							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion1" href="#collapse2" class="collapsed">
											<i class="rt-icon2-tags highlight" style="font-size: 20px"></i>
											<b>TAGS</b>
										</a>
									</h4>
								</div>
								<div id="collapse2" class="panel-collapse collapse">
									<div class="panel-body">
										<div class="widget widget_tag_cloud">
											<div class="tagcloud">
												<a href="#" title="">Contextura Mediana</a>
												<a href="#" title="">Cabello Negro</a>
												<a href="#" title="">Ojos Castaños</a>
												<a href="#" title="">Busto Grande</a>
												<a href="#" title="">Cola Grande</a>
												<a href="#" title="">Depilación Full</a>
												<a href="#" title="">Tatuada</a>
												<a href="#" title="">Depto Propio</a>
												<a href="#" title="">Hoteles</a>
												<a href="#" title="">Departamento Propio</a>
											</div>
										</div>
									</div>
								</div>
							</div>



							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion1" href="#collapse3" class="collapsed">
											<i class="rt-icon2-calendar3 highlight" style="font-size: 20px"></i>
											<b>HORARIOS</b>
										</a>
									</h4>
								</div>
								<div id="collapse3" class="panel-collapse collapse">
									<div class="panel-body" >
										<p align="center">La disponibilidad es relativa, recuerda siempre confirmar.</p>
										<table class="table_template">
											<tr>
												<td align="right">Lunes</td>
												<td><i class="rt-icon2-time highlight"></i> 
													<?php echo date('H:s', strtotime($escort->HORA_I));?>  a 
													<?php echo date('H:s', strtotime($escort->HORA_F));?>
												</td>
											</tr>
											<tr>
												<td align="right">Martes</td>
												<td><i class="rt-icon2-time highlight"></i> 
													<?php echo date('H:s', strtotime($escort->HORA_I));?> a 
													<?php echo date('H:s', strtotime($escort->HORA_F));?>
												</td>
											</tr>
											<tr>
												<td align="right">Miercoles</td>
												<td><i class="rt-icon2-time highlight"></i> 
													<?php echo date('H:s', strtotime($escort->HORA_I));?> a 
													<?php echo date('H:s', strtotime($escort->HORA_F));?>
												</td>
											</tr>
											<tr>
												<td align="right">Jueves</td>
												<td><i class="rt-icon2-time highlight"></i> 
													<?php echo date('H:s', strtotime($escort->HORA_I));?> a 
													<?php echo date('H:s', strtotime($escort->HORA_F));?>
												</td>
											</tr>
											<tr>
												<td align="right">Vierenes</td>
												<td><i class="rt-icon2-time highlight"></i> 
													<?php echo date('H:s', strtotime($escort->HORA_I));?> a 
													<?php echo date('H:s', strtotime($escort->HORA_F));?>
												</td>
											</tr>
											<tr>
												<td align="right">Sabado</td>
												<td><i class="rt-icon2-time highlight"></i> 
													<?php echo date('H:s', strtotime($escort->HORA_I));?> a 
													<?php echo date('H:s', strtotime($escort->HORA_F));?>
												</td>
											</tr>
											<tr>
												<td align="right">Domingo</td>
												<td><i class="rt-icon2-time highlight"></i> 
													<?php echo date('H:s', strtotime($escort->HORA_I));?> a 
													<?php echo date('H:s', strtotime($escort->HORA_F));?>
												</td>
											</tr>
										</table>
									</div>
								</div>
							</div>
						

						</div>
					</div>
				</div>



			</div>

		</div>
	</div>
</section>

