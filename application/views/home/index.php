
<section class="ds ms intro_section page_mainslider">

	<div class="owl-carousel page_maincarousel" data-margin="0" data-nav="true" data-loop="true" data-items="4">

		<?php foreach($escort as $dato){ ?>


		<div>
			<div class="vertical-item maincarousel-item content-absolute cs">
				<div class="item-media">
					<img src="<?php echo base_url();?>tool/fotos/<?php echo $dato->RUTA;?>" alt="<?php echo $dato->NOMBRE; ?> ">
					<div class="media-links">
						<a class="abs-link" title="" href="<?php echo base_url();?>home/perfil/<?php echo $dato->ID;?>"></a>
					</div>
				</div>
				<div class="item-content text-center grey gradient_bg_goriz">
					<div class="bg_overlay"></div>
					<div class="model-parameters">					
						<div style="font-size: 25px;"><br>
								<a href="<?php echo base_url();?>home/perfil"><?php echo $dato->NOMBRE; ?> | <b>
									<?php echo $dato->EDAD; ?> </b></a>
							
						</div>	<br>					
						<div class="col-md-3">							
							<a href="#"><i class="rt-icon2-eye3" style="font-size: 35px;"></i></a>
							<br>
							<span class="bold">120</span>
						</div>
						<div class="col-md-3">	
							<a href="#"><i class="rt-icon2-star-outline" style="font-size: 35px;"></i></a>
							<br>
							<span class="bold">5,0</span>
						</div>
						<div class="col-md-3">	
							<a href="https://api.whatsapp.com/send?phone=<?php echo $dato->TELEFONO;?>&text=Hola%20<?php echo $dato->NOMBRE;?>%2C%20te%20contacto%20desde%20MyHotPlace.com%20estas%20disponible?">
								<i class="rt-icon2-whatsapp" style="font-size: 35px;"></i>
							</a>
							<br>
							<span class="bold">WSP</span>
						</div>

						<div class="col-md-3">	
							<a href="#"><i class="rt-icon2-pin-alt" style="font-size: 35px;"></i></a>
							<br>
							<span class="bold">5 Km</span>
						</div><br>
						<div style="font-size: 15px;">
							<span class="bold"><i class="fa fa-usd"></i> <?php echo number_format($dato->VALOR);?>  </span>por Hora | <b><?php echo $dato->CLASIFICACION;?></b><br>
							<span class="bold">Ciudad: </span><?php echo $dato->CIUDAD;?> 
						</div>		
					
					</div>
				</div>
			</div>
		</div>




		<?php } ?>





	</div>
</section>


<section class="ds ms intro_section page_mainslider">

	<div class="col-lg-12" align="center">
		<div class="filters isotope_filters margin_0">
			<a href="#">IQUIQUE</a>
		</div>
	</div>


		<?php foreach($escort as $dato){ ?>

		<div class="col-lg-3 col-md-4 col-sm-6">
			<div class="vertical-item content-absolute">
				<div class="item-media">
					<img src="<?php echo base_url();?>tool/fotos/<?php echo $dato->RUTA;?>" alt="<?php echo $dato->NOMBRE;?>">
					<a title="Cielo | VIP" href="<?php echo base_url();?>home/perfil/<?php echo $dato->ID;?>">
						<div class="media-links"></div>
					</a>
				</div>
			</div>
			<div class="item-title text-center">
				<h4>
					<a class="p-view prettyPhoto" title="Cielo | VIP" href="<?php echo base_url();?>home/perfil/<?php echo $dato->ID;?>"><?php echo $dato->NOMBRE;?> | <?php echo $dato->EDAD;?></a>
				</h4>
			</div>
		</div>
		<?php };?>


		<!--PAGINACION 

		<div class="row">
			<div class="col-sm-12 text-center margin_0">
				<ul class="pagination ">
					<li>
						<a href="#">
							<span class="sr-only">Prev</span>
							<i class="rt-icon2-chevron-thin-left"></i>
						</a>
					</li>
					<li class="active">
						<a href="#">1</a>
					</li>
					<li>
						<a href="#">2</a>
					</li>
					<li>
						<a href="#">3</a>
					</li>
					<li>
						<a href="#">4</a>
					</li>
					<li>
						<a href="#">5</a>
					</li>
					<li>
						<a href="#">
							<span class="sr-only">Next</span>
							<i class="rt-icon2-chevron-thin-right"></i>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<!--END PAGINACION -->
</section>


<section class="ds ms intro_section page_mainslider">
	<div class="container-fluid">

			<div class="col-sm-12">
				<div class="owl-carousel blog-carousel theme-owl-carousel" data-margin="30" data-nav="false" data-dots="true" data-center="true" data-loop="true" data-items="5" data-autoplay="false" data-responsive-xs="1" data-responsive-sm="2" data-responsive-md="2"
				    data-responsive-lg="3" data-responsive-xlg="5">



					<article class="vertical-item post format-slider with_background">

						<div class="entry-thumbnail">

							<div id="carousel-generic" class="carousel slide">
								<!-- Wrapper for slides -->
								<div class="carousel-inner">
									<div class="item active">
										<img src="<?php echo base_url();?>tool/images/gallery/08.jpg" alt="image">
									</div>
									<div class="item">
										<img src="<?php echo base_url();?>tool/images/gallery/03.jpg" alt="image">
									</div>
									<div class="item">
										<img src="<?php echo base_url();?>tool/images/gallery/04.jpg" alt="image">
									</div>
								</div>

								<!-- Controls -->
								<a class="left carousel-control" href="#carousel-generic" data-slide="prev">
									<span class="icon-prev"></span>
								</a>
								<a class="right carousel-control" href="#carousel-generic" data-slide="next">
									<span class="icon-next"></span>
								</a>
							</div>
						</div>

						<div class="item-content entry-content">
							<h2 class="topmargin_0">
								<a href="blog-single-right.html">Post (blog) 1170 × 780</a>
							</h2>
							<p>
								<b><a href="#">42 Frases de las Escort</a></b>
								<br>
								He aqui las mejores frases escuchas por mas una escort.<br> Fuente : LaEstokada<br><br>
							</p>

						</div>
						<!-- .item-content.entry-content -->
					</article>



					<article class="vertical-item post format-standard with_background">

						<div class="item-media entry-thumbnail">
							<img src="<?php echo base_url();?>tool/images/gallery/16.jpg" alt="">
							<div class="media-links">
								<a class="abs-link" title="" href="blog-single-right.html"></a>
							</div>
						</div>

						<div class="item-content entry-content">
							<h2 class="topmargin_0">
								<a href="blog-single-right.html">Masajista (Servicios)</a>
							</h2>
							<p>
								Realizo masajes de relajación y descontracturante a domicilio o en mi box, atiendo de lunes a domingo de 8:00 a 21:00 horas, soy masoterapeuta (las horas deben ser agendadas anticipadamente).
							</p>

						</div>
						<!-- .item-content.entry-content -->
					</article>


					<article class="vertical-item post format-video with_background">

						<div class="entry-thumbnail">
							<div class="embed-responsive embed-responsive-3by2">
								<a href="https://www.youtube.com/embed/mcixldqDIEQ" class="embed-placeholder">

									<img src="<?php echo base_url();?>tool/images/gallery/16.jpg" alt="">
									<div class="media-links"></div>
								</a>
							</div>
						</div>

						<div class="item-content entry-content">
							<h2 class="topmargin_0">
								<a href="blog-single-right.html">Delivery (Tienda)</a>
							</h2>
							<p>
								Delivery (reparto o entrega) es una actividad parte de la función logística que tiene por finalidad colocar bienes, servicios, fondos o información directo en el lugar de consumo o uso (Al cliente final).<br><br>
							</p>
						</div>
						<!-- .item-content.entry-content -->
					</article>

					<article class="vertical-item post format-standard with_background">

						<div class="item-media entry-thumbnail">
							<img src="<?php echo base_url();?>tool/images/gallery/14.jpg" alt="">
							<div class="media-links">
								<a class="abs-link" title="" href="blog-single-right.html"></a>
							</div>
						</div>

						<div class="item-content entry-content">
							<h2 class="topmargin_0">
								<a href="blog-single-right.html">Motel (Locales)</a>
							</h2>
							<p>
								Ambientes privados, Baño privado, Agua caliente, Cama matrimonial, Led 32",  Canales de Adulto, Wifi,  Estacionamiento privado, Música ambiental, Discreción y privacidad, Bebestibles y Snack.<br><br>
							</p>
						</div>
						<!-- .item-content.entry-content -->
					</article>

					<article class="vertical-item post format-standard with_background">

						<div class="item-media entry-thumbnail">
							<img src="<?php echo base_url();?>tool/images/gallery/01.jpg" alt="">
							<div class="media-links">
								<a class="abs-link" title="" href="blog-single-right.html"></a>
							</div>
						</div>

						<div class="item-content entry-content">
							<h2 class="topmargin_0">
								<a href="blog-single-right.html">Blog (post)</a>
							</h2>
							<p>
								<b><a href="#">20 cosas que una escort no soporta de un cliente</a></b>
								Muy buen material, conocer esta lista los puede salvar por más de una mala cara o peor aún, de una mala atención.<br><br><br>
							</p>
						</div>
						<!-- .item-content.entry-content -->
					</article>

					<article class="vertical-item post format-standard with_background">

						<div class="item-media entry-thumbnail">
							<img src="<?php echo base_url();?>tool/images/gallery/06.jpg" alt="">
							<div class="media-links">
								<a class="abs-link" title="" href="blog-single-right.html"></a>
							</div>
						</div>

						<div class="item-content entry-content">
							<h2 class="topmargin_0">
								<a href="blog-single-right.html">SexShop (Tienda)</a>
							</h2>
							<p>
								En nuestro Sex Shop queremos siempre tener los mejores productos para ti, lo cual en este caso tambien significa tener los mejores precios y promociones.<br><br><br>
							</p>
						</div>
						<!-- .item-content.entry-content -->
					</article>
				</div>

			</div>

	</div>
</section>
