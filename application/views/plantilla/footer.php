

<footer class="page_footer ds ms bg_image section_padding_10">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<div class="widget widget_text">
					<a href="./" class="logo logo_image bottommargin_10">
						<h1>My
							<span class="muellerhoff">HotPlace</span>
						</h1>
						<img src="<?php echo base_url();?>tool/images/logo.png" alt="">
					</a>
					<p>
						El Portal MyHotPlace solo puede ser visualizado por mayores de 18 años y no se responsabiliza por los servicios publicados.<br>
						Todas las fotografias expuestas, son verificadas, reservandose el derecho de publicación.
					</p>
				</div>
			</div>

			<div class="col-md-3 col-sm-6 dark_bg_color">
				<div class="widget_text">
					<h3 class="widget-title">Publica Aquí !</h3>
					<h1 class="text-md-center">
						<i class="rt-icon2-megaphone highlight"></i>
					</h1>
					<p class="text-md-center">Publica aqui tus avisos de escort, sexshop, moteles y delivery's. <br><br><a href="<?php echo base_url();?>home/contacto" class="theme_button inverse"><i class="rt-icon2-cloud-storage highlight"></i> Publicar !</a></p>
					
				</div>
			</div>

			<div class="col-md-3 col-sm-6">
				<div class="widget_text">
					<h3 class="widget-title">Contáctanos</h3>
					<div class="border-paragraphs">
						<p style="font-size: 15px">
							<i class="rt-icon2-whatsapp highlight" style="font-size: 20px"></i>
							<a href="#">+56 9 12345678</a>
						</p>
						<p style="font-size: 15px">
							<i class="rt-icon2-IE highlight" style="font-size: 18px"></i>
							<a href="http://www.myhotplace.com">www.MyHotPlace.com</a>
						</p>
						<p style="font-size: 15px">
							<i class="rt-icon2-megaphone highlight" style="font-size: 15px"></i>
							<a href="mailto:contacto@myhotplace.com">Denuncias</a>
						</p>
						<p style="font-size: 15px">
							<i class="rt-icon2-info-large-outline highlight" style="font-size: 20px"></i>
							<a href="<?php echo base_url();?>home/contacto">Soporte Técnico</a>
						</p>


					</div>

				</div>
			</div>

			<div class="col-md-3 col-sm-6">
				<div class="widget_text">
					<h3 class="widget-title">Búscanos en:</h3>
					<div class="media">
						<div class="media-left media-middle">
							<a class="social-icon color-bg-icon soc-facebook" href="http://facebook.com" title="Facebook"></a>
						</div>
						<div class="media-body media-middle">
							Facebook
						</div>
					</div>
					<div class="media">
						<div class="media-left media-middle">
							<a class="social-icon color-bg-icon soc-instagram" href="http://instagram.com" title="Instagram"></a>
						</div>
						<div class="media-body media-middle">
							Instagram
						</div>
					</div>
					<div class="media">
						<div class="media-left media-middle">
							<a class="social-icon color-bg-icon soc-twitter" href="http://twitter.com" title="Twitter"></a>
						</div>
						<div class="media-body media-middle">
							Twitter
						</div>
					</div>
				

				</div>

			</div>
		</div>
		<h5 align="center">© MyHotPlace | Nos reservamos el derecho de publicación | Chile, 2017</h5>
	</div>
</footer>


	</div>
	<!-- eof #box_wrapper -->
</div>
<!-- eof #canvas -->

<script src="<?php echo base_url();?>tool/js/compressed.js"></script>
<script src="<?php echo base_url();?>tool/js/main.js"></script>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTwYSMRGuTsmfl2z_zZDStYqMlKtrybxo"></script>

<script type="text/javascript">
	
jQuery(window).on('load', function(){
	windowLoadInit();

	//Google Map script
	var $googleMaps = jQuery('#map, .page_map');
	if ( $googleMaps.length ) {
		$googleMaps.each(function() {
			var $map = jQuery(this);

			var lat;
			var lng;
			var map;

			//map styles. You can grab different styles on https://snazzymaps.com/
			var styles = [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}];
			
			//map settings
			var address = $map.data('address') ? $map.data('address') : 'Bolivar 1074, iquique';
			var markerDescription = $map.find('.map_marker_description').prop('outerHTML');

			//if you do not provide map title inside #map (.page_map) section inside H3 tag - default titile (Map Title) goes here:
			var markerTitle = $map.find('h3').first().text() ? $map.find('h3').first().text() : 'Map Title';
			var markerIconSrc = $map.find('.map_marker_icon').first().attr('src');

			//type your address after "address="
			jQuery.getJSON('http://maps.googleapis.com/maps/api/geocode/json?address=' + address, function(data) {
				
				lat = data.results[0].geometry.location.lat;
				lng = data.results[0].geometry.location.lng;

			}).complete(function(){
				
				var center = new google.maps.LatLng(lat, lng);
				var settings = {
					mapTypeId: google.maps.MapTypeId.ROADMAP,
					zoom: 16,
					draggable: true,
					scrollwheel: false,
					center: center,
					styles: styles 
				};
				map = new google.maps.Map($map[0], settings);

				var marker = new google.maps.Marker({
					position: center,
					title: markerTitle,
					map: map,
					icon: markerIconSrc,
				});

				var infowindow = new google.maps.InfoWindow({ 
					content: markerDescription
				});
				
				google.maps.event.addListener(marker, 'click', function() {
					infowindow.open(map,marker);
				});
			});
		}); //each
	}//google map length

}); //end of "window load" event

</script>

</body>

</html>