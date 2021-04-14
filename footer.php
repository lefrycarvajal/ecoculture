<div class="section_footer">
		<div class="container">
			<div class="mail_section">
				<div class="row">
					<div class="col-sm-6 col-lg-2">
						<div><a href="#"><img src="images/logo.png"></a></div>
					</div>
					
					<div class="col-sm-2"></div>
				</div>
			</div>
			<div class="footer_section_2">
				<div class="row">
					<div class="col-sm-5 col-lg-3">
						<p class="dummy_text">Somos eco al 100 % y todos compartimos la misma visión, desde nuestros colaboradores y trabajadores en las fábricas, hasta nuestros distribuidores. </p>
					</div>
					<div class="col-sm-4 col-lg-3">
						<h2 class="shop_text">DIRECCIÓN</h2>
						<div class="image-icon"><img src="images/map-icon.png"><span class="pet_text">Calle David Masalles Lafulla #19B, Santo Domingo</span></div>
					</div>
					<div class="col-sm-4 col-md-6 col-lg-3">
						<h2 class="shop_text">NUESTRA EMPRESA</h2>
						<div class="delivery_text">
							<ul>
								<li href="index.html">Home</li>
								<li href="about.html">Sobre Nosotros</li>
								<li href="contact.html">Contacto</li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6 col-lg-3">
						<h2 class="adderess_text">PRODUCTOS</h2>
						<div class="delivery_text">
							<ul>
								<li href="new.html">Nuevos Productos</li>
								<li href="cata.html">Catálogo</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/jquery-3.0.0.min.js"></script>
	<script src="js/plugin.js"></script>

	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="js/custom.js"></script>

	<script src="js/owl.carousel.js"></script>
	<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
	<script>
		$(document).ready(function () {
			$(".fancybox").fancybox({
				openEffect: "none",
				closeEffect: "none"
			});


			$('#myCarousel').carousel({
				interval: false
			});

			$("#myCarousel").on("touchstart", function (event) {

				var yClick = event.originalEvent.touches[0].pageY;
				$(this).one("touchmove", function (event) {

					var yMove = event.originalEvent.touches[0].pageY;
					if (Math.floor(yClick - yMove) > 1) {
						$(".carousel").carousel('next');
					}
					else if (Math.floor(yClick - yMove) < -1) {
						$(".carousel").carousel('prev');
					}
				});
				$(".carousel").on("touchend", function () {
					$(this).off("touchmove");
				});
			});
	</script>

</body>

</html>