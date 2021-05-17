<!-- footer -->
	<footer>
		<div class="padding-w3ls-footer pt-sm-5">
			<div class="d-flex footer-ones">
				<!-- logo -->
				<div class="col-lg-3 col-sm-4 logo2 text-sm-left text-center mb-sm-0 mb-3">
					<h2>
						<a href="index.php">Greens Gardens</a>
					</h2>
				</div>
				<!-- //logo -->
				<!-- navigation -->
				<div class="col-lg-4 col-sm-8 ftr-menu py-xl-4 py-3 text-center">
					<ul>
						<li>
							<a href="index.php">Home</a>
						</li>
						<li class="mx-xl-3 mx-lg-2 mx-3">
							<a href="about.php">About Us</a>
						</li>
						<li>
							<a href="gallery.php">Gallery</a>
						</li>
						<li class="ml-xl-3 ml-lg-2 ml-3">
							<a href="contact.php">Contact Us</a>
						</li>
					</ul>
				</div>
				<!-- //navigation -->
			</div>
			<!-- footer end -->
			<div class="d-flex footer-end">
				<!-- footer social icons -->
				<div class="col-lg-3 footer-social">
					<ul class="list-unstyled text-center">
						<li class="text-white mr-3">Share</li>
						<li>
							<a href="#" class="rounded-circle active">
								<i class="fab fa-facebook-f"></i>
							</a>
						</li>
						<li class="mx-3">
							<a href="#" class="rounded-circle">
								<i class="fab fa-google-plus-g"></i>
							</a>
						</li>
						<li>
							<a href="#" class="rounded-circle">
								<i class="fab fa-twitter"></i>
							</a>
						</li>
					</ul>
				</div>
				<!-- //footer social icons -->
				<!-- newsletter -->
				<div class="col-lg-4 subscribe wthree-sub py-4">
					<form action="#" method="post">
						<input type="email" name="email" placeholder="Enter your Email..." required="">
						<input type="submit" value="Subscribe">
					</form>
				</div>
				<!-- //newsletter -->
				<!-- copyright -->
				<div class="col-lg-5 copy-right text-center">
					<p> &copy; 2019 </a>
					</p>
				</div>
				<!-- //copyright -->
			</div>
			<!-- //footer end -->
		</div>
	</footer>
	<!-- //footer -->


	<!-- Js files -->
	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->

	<!-- carousel (for new section) -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$('.owl-carousel').owlCarousel({
				loop: true,
				margin: 10,
				responsiveClass: true,
				responsive: {
					0: {
						items: 1,
						nav: true
					},
					480: {
						items: 2,
						nav: true,
						loop: false
					},
					736: {
						items: 4,
						nav: true,
						loop: false
					},
					991: {
						items: 3,
						nav: true,
						loop: false,
						margin: 0
					}
				}
			})
		})
	</script>
	<!-- //carousel (for new section) -->

	<!-- flexSlider (for testimonials) -->
	<script defer src="js/jquery.flexslider.js"></script>
	<script>
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<!-- //flexSlider (for testimonials) -->
	<!-- //gallery -->
	<script src="js/lightbox-plus-jquery.min.js"></script>
	<!-- //gallery -->

	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- move-top -->
	<script src="js/move-top.js"></script>
	<!-- easing -->
	<script src="js/easing.js"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="js/Agro Crop.js"></script>

	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- //Js files -->

</body>

</html>