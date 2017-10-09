<section class="ds ms section_padding_top_80 section_padding_bottom_100">

	<div class="row">
		<div class="col-md-4 col-md-push-4 col-sm-6 col-sm-push-3 text-center">
			<div class="widget widget_search">
				<h3 class="widget-title">ENCUENTRA TU FANTASIA</h3>
				<form method="get" class="searchform form-inline" action="/">
					<div class="form-group">
						<label class="sr-only" for="widget-search">Buscar Por:</label>
						<input id="widget-search" type="text" value="" name="search" class="form-control" placeholder="Escribe lo que desees buscar.">
					</div>
					<button type="submit" class="theme_button input_button">Search</button>
				</form>
			</div>


		</div>
	</div>
	<br><br>

</section>


<section class="ds ms intro_section page_mainslider">

<div class="row">
<?php for ($i=0; $i < 24 ; $i++) { ?>


<div class="col-md-2">
	<div class="thumbnail">
		<img src="<?php echo base_url();?>tool/images/team/02.jpg" alt="">
		<div class="caption">
			<h3>
				<a href="<?php echo base_url();?>home/perfil">Mohamed Rahum</a>
			</h3>
			<p>SEO</p>
			<p class="text-center social-icons">
				<a class="social-icon soc-facebook" href="#" title="Facebook" data-toggle="tooltip"></a>
				<a class="social-icon soc-twitter" href="#" title="Twitter" data-toggle="tooltip"></a>
				<a class="social-icon soc-google" href="#" title="Google" data-toggle="tooltip"></a>
			</p>
		</div>
	</div>
</div>

<?php };?>
</div>


</section>

