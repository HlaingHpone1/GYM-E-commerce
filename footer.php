
	<!-- Footer Start -->
	<footer class="footer_section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-4">
					<h6>Location</h6>
					<p class="text-justify footer_text">
						<i class="fal fa-map-marker-alt"></i>
						No.9 Kabar Aye Pagoda Rd, Yangon, Myanmar (Burma)
					</p>

					<p class="text-justify footer_text">
						<i class="fas fa-phone-alt"></i> +95-9-753159789, +95-9-456159789
					</p>

					<p class="text-justify footer_text">
						<i class="fas fa-envelope"></i> info@dragonworld.com.mm
					</p>

				</div>

				<div class="col-xs-6 col-lg-3">
					<h6>Quick Links</h6>
					<ul class="footer-links">
						<li><a href="./product.php">Product</a></li>
						<li><a href="./about.php">About</a></li>
						<li><a href="./contact.php">Contact Us</a></li>
						<li><a href="./service.php">Service</a></li>
					</ul>
				</div>

				<div class="col-xs-6 col-lg-5">
					<h6>Get Regular Update From us</h6>
					<form action="#" class="subscribe-form">
						<div class="form-group d-flex">
							<input type="text" class="form-control rounded-start" placeholder="Enter email address" />
							<button type="submit" class="form-control submit rounded-end">
								Subscribe
							</button>
						</div>
					</form>
				</div>
			</div>
			<hr />
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-6 col-xs-12">
					<p class="copyright-text">
						Copyright &copy; <span id="year"></span> All Rights Reserved | <a class="copyright_link" href="./privacy.php">privacy policy</a> | <a class="copyright_link" href="./cookie.php">cookie policy</a>
					</p>
				</div>

				<div class="col-md-4 col-sm-6 col-xs-12">
					<ul class="social-icons">
						<li>
							<a class="facebook" href="https://www.facebook.com/POWER-ZONE-GYM-392834680840562"><i class="fab fa-facebook-f"></i></a>
						</li>
						<li>
							<a class="instagram" href="https://www.instagram.com/?hl=en"><i class="fab fa-instagram"></i></a>
						</li>
						<li>
							<a class="youtube" href="https://www.youtube.com/channel/UCV9eGgzRnfek6fwues5lrsg"><i class="fab fa-youtube"></i></a>
						</li>
						<li>
							<a class="twitter" href="https://twitter.com/?lang=en"><i class="fab fa-twitter"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer End -->
	<script src="./js/bootstrap.js"></script>
	<script src="./js/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		var loader = document.getElementById("loader");
		window.addEventListener("load", function () {
			loader.style.display = "none";
		});
		let date = new Date();
		let utcyear = date.getUTCFullYear();
		document.getElementById("year").textContent = utcyear;
	
		
	</script>
</body>

</html>