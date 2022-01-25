<?php require("header.php"); ?>
	<div class="container-fluid text-white  d-flex cookie_bar" id="cookieinfo">
		<p class="text-wrap">The site uses its own technical cookies, anonymous third party analytic cookies and
			third-party cookies that could be used in profiling: in accessing any element/area of the site outside of
			this banner, you consent to receiving cookies. If you want to know more or refuse consent to cookies, <a href="./cookie.php" class="text-decoration-none">click here.</a>
		</p>
		<button type="button" class="btn accept_btn" id="hide-cookie">Accept</button>
	</div>



	<!-- Img slider start -->

	<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

		<div class="carousel-inner index_slider">
			<div class="carousel-item active">
				<img src="./img/product1.jpg" class="d-block w-100" alt="this is slider">
				<div class="carousel-caption d-none d-md-block position-absolute top-50 start-50 translate-middle">
					<h1>Keep Your Body &#38; <span>Shape Your Body</span></h1>
					<h3>Fit & Refresh & Strong</h3>
					<p class="mb-5">
						it represents a common area where people, from all ranges of experience, exercise and work out
						their muscles. You can also usually find people doing cardio exercises or pilates.

					</p>
					<a class="getstartbtn"  role="button" href="login.php">Get started</a>
				</div>
			</div>

			<div class="carousel-item">
				<img src="./img/product2.jpg" class="d-block w-100" alt="this is slider">
				<div class="carousel-caption d-none d-md-block position-absolute top-50 start-50 translate-middle">
					<h1><span>improves</span> mood</h1>
					<p class="mb-5">
						Need an emotional lift? Or need to destress after a stressful day? A gym session or brisk walk
						can help. Physical activity stimulates various brain chemicals that may leave you feeling
						happier, more relaxed and less anxious.

						You may also feel better about your appearance and yourself when you exercise regularly, which
						can boost your confidence and improve your self-esteem.
					</p>
					<a class="getstartbtn" href="login.php">Get started</a>

				</div>
			</div>

			<div class="carousel-item">
				<img src="./img/product3.jpg" class="d-block w-100" alt="this is slider">
				<div class="carousel-caption d-none d-md-block position-absolute top-50 start-50 translate-middle">
					<h1>boosts <span>energy</span></h1>
					<p class="mb-5">
						Winded by grocery shopping or household chores? Regular physical activity can improve your
						muscle strength and boost your endurance.

						Exercise delivers oxygen and nutrients to your tissues and helps your cardiovascular system work
						more efficiently. And when your heart and lung health improve, you have more energy to tackle
						daily chores.
					</p>
					<a class="getstartbtn" href="login.php">Get started</a>

				</div>
			</div>

			<div class="carousel-item">
				<img src="./img/product4.jpg" class="d-block w-100" alt="this is slider">
				<div class="carousel-caption d-none d-md-block position-absolute top-50 start-50 translate-middle">
					<h1>promotes better <span>sleep</span></h1>
					<p class="mb-5">
						Struggling to snooze? Regular physical activity can help you fall asleep faster, get better
						sleep and deepen your sleep. Just don't exercise too close to bedtime, or you may be too
						energized to go to sleep.
					</p>
					<a class="getstartbtn" href="login.php">Get started</a>
				</div>
			</div>

			<div class="carousel-item">
				<img src="./img/product5.jpg" class="d-block w-100" alt="this is slider">
				<div class="carousel-caption d-none d-md-block position-absolute top-50 start-50 translate-middle">
					<h1>can be <span>fun</span> … and <span>social!</span></h1>
					<p class="mb-5">
						Exercise and physical activity can be enjoyable. They give you a chance to unwind, enjoy the
						outdoors or simply engage in activities that make you happy. Physical activity can also help you
						connect with family or friends in a fun social setting.
					</p>
					<a class="getstartbtn" href="login.php">Get started</a>

				</div>
			</div>
		</div>

		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
				aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
				aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
				aria-label="Slide 3"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
				aria-label="Slide 4"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
				aria-label="Slide 5"></button>
		</div>

		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
			data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
			data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>

	<!-- Img slider End -->


	<div class="container-fluid">

		<!-- Search bar start -->
		<div class="row">
			<div class="col-md-12 search_section py-5">
				<form>
					<fieldset>
						<legend class="">Discover Your Products</legend>
					</fieldset>
					<div class="search_box rounded-3">
						<div class="input-field first-wrap">
							<input class="rounded-3" id="search" type="text" placeholder="What are you looking for?" />
						</div>
						<div class="input-field second-wrap">
							<input class="rounded-3" id="location" type="text" placeholder="Category" />
						</div>
						<div class="input-field third-wrap">
							<button class="btn-search rounded-3" type="button">Search</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- Search bar End -->

		<!-- Marquee start -->
		<div class="row">
			<div class="col-lg-12 text-white bg-dark">
				<marquee class="slide_text" direction="" scrollamount="15">Create Your Own Modern Private Gym</marquee>

			</div>
		</div>
		<!-- marquee End -->


		<!-- Products start -->
		<div class="row pb-5 mybg-dark">
			<h1 class="fs-1 text-center text-white product_header mb-5">Best Selling <span>Products</span></h1>
			<div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
				<!-- Card-->
				<div class="card rounded-3 h-100 shadow-sm border-0 card_background">
					<div class="card-body p-4">
						<img
							src="./img/product6.png"
							alt=""
							class=" d-block mx-auto mb-3"
						/>
						<h5>
							<a href="#" class="text-dark text-decoration-none"
								>Advanced Home Gym Equipment</a
							>
						</h5>
						<p class="small text-muted font-italic">
							Brand <span>2XU</span>
						</p>
						<p class="small text-muted">44lbs 66lbs Coated Free Adjusted Weight Dumbbell Variable & Interchangeable Changeable Non-Slip Hand Heavy Workout for Beginners Home Gym Exercise. 66lbs weight set very suitable for body exercise and achieve any fitness goal at home without going to the gym
						</p>
						<ul class="list-inline small">
							<li class="list-inline-item m-0 text-muted">
								(4.12)
							</li>
							<li class="list-inline-item m-0">
								<i class="fa fa-star mypricolor"></i>
							</li>
							<li class="list-inline-item m-0">
								<i class="fa fa-star mypricolor"></i>
							</li>
							<li class="list-inline-item m-0">
								<i class="fa fa-star mypricolor"></i>
							</li>
							<li class="list-inline-item m-0">
								<i class="fa fa-star mypricolor"></i>
							</li>
							<li class="list-inline-item m-0">
								<i class="far fa-star mypricolor"></i>
							</li>
						</ul>

						<a class="btn btn-primary w-100" href="" role="button">Buy now</a>
					</div>
				</div>
			</div>

			<div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
				<!-- Card-->
				<div class="card rounded h-100  shadow-sm border-0 card_background">
					<div class="card-body p-4">
						<img
							src="./img/product7.jpg"
							alt=""
							class=" d-block mx-auto mb-3"
						/>
						<h5>
							<a href="#" class="text-dark text-decoration-none"
								>Matrix Fitness S-Force</a
							>
						</h5>
						<p class="small text-muted font-italic">
							Brand <span>Reebok</span>
						</p>
						<p class="small text-muted">
							Our conveniently compact elliptical design fits your home with minimal disruption, while thoughtful engineering provides smooth performance, natural movement and unmatched ergonomic comfort. Our E30 Elliptical features our exclusive Suspension Elliptical Technology.
						</p>
						<ul class="list-inline small">
							<li class="list-inline-item m-0 text-muted">
								(4.45)
							</li>
							<li class="list-inline-item m-0">
								<i class="fa fa-star mypricolor"></i>
							</li>
							<li class="list-inline-item m-0">
								<i class="fa fa-star mypricolor"></i>
							</li>
							<li class="list-inline-item m-0">
								<i class="fa fa-star mypricolor"></i>
							</li>
							<li class="list-inline-item m-0">
								<i class="fa fa-star mypricolor"></i>
							</li>
							<li class="list-inline-item m-0">
								<i class="fas fa-star-half-alt mypricolor"></i>
							</li>
						</ul>
						<a class="btn btn-primary w-100" href="" role="button">Buy now</a>
					</div>
				</div>
			</div>

			<div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
				<!-- Card-->
				<div class="card rounded h-100 shadow-sm border-0 card_background">
					<div class="card-body p-4">
						<img
							src="./img/product8.jpg"
							alt=""
							class=" d-block mx-auto mb-3"
						/>
						<h5>
							<a href="#" class="text-dark text-decoration-none"
								>Elliptical machine </a
							>
						</h5>
						<p class="small text-muted font-italic">
							Brand <span>Puma</span>
						</p>
						<p class="small text-muted">
						pooboo Elliptical Trainer Magnetic Elliptical Machines for Home Use Portable Elliptical Trainer with Pulse Rate and LCD Monitor (vitelline)
						</p>
						<ul class="list-inline small">
							<li class="list-inline-item m-0 text-muted">
								(4.85)
							</li>
							<li class="list-inline-item m-0">
								<i class="fa fa-star mypricolor"></i>
							</li>
							<li class="list-inline-item m-0">
								<i class="fa fa-star mypricolor"></i>
							</li>
							<li class="list-inline-item m-0">
								<i class="fa fa-star mypricolor"></i>
							</li>
							<li class="list-inline-item m-0">
								<i class="fa fa-star mypricolor"></i>
							</li>
							<li class="list-inline-item m-0">
								<i class="fa fa-star mypricolor"></i>
							</li>
						</ul>
						<a class="btn btn-primary w-100" href="" role="button">Buy now</a>
					</div>
				</div>
			</div>

			<div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
				<!-- Card-->
				<div class="card rounded h-100 shadow-sm border-0 card_background">
					<div class="card-body p-4">
						<img
							src="./img/product9.png"
							alt=""
							class=" d-block mx-auto mb-3"
						/>
						<h5>
							<a href="#" class="text-dark text-decoration-none"
								>Sunny Health & Fitness P8700 Pink</a
							>
						</h5>
						<p class="small text-muted font-italic">
							Brand <span>Nike</span>
						</p>
						<p class="small text-muted">
							FYC Folding Treadmill for Home - Slim Compact Running Machine Portable Electric Treadmill Foldable Treadmill Workout Exercise for Small Apartment Home Gym Fitness Jogging Walking, No Installation. Designed for the home environment, considering your performance
						</p>
						
						<ul class="list-inline small">
							<li class="list-inline-item m-0 text-muted">
								(4.3)
							</li>
							<li class="list-inline-item m-0">
								<i class="fa fa-star mypricolor"></i>
							</li>
							<li class="list-inline-item m-0">
								<i class="fa fa-star mypricolor"></i>
							</li>
							<li class="list-inline-item m-0">
								<i class="fa fa-star mypricolor"></i>
							</li>
							<li class="list-inline-item m-0">
								<i class="fa fa-star mypricolor"></i>
							</li>
							<li class="list-inline-item m-0">
								<i class="far fa-star mypricolor"></i>
							</li>
						</ul>
						<a class="btn btn-primary w-100" href="" role="button">Buy now</a>
					</div>
				</div>
			</div>
		</div>
		<!-- Products End -->

		<!-- Brand Start -->
		<div class="row">
			<div class="container-fluid brand_section">
				<div class="row">
					<div class="col-lg-3 brand_card col-md-6 text-center mt-5">
						<i class="fas fa-arrow-alt-circle-down "></i>
						<div class="brand_content">
							<h1 class="fs-1">Weight Loss</h1>
							<p>Lose It. Keep it off.</p>
							<p class="my-4">
								Scientifically formulated nutritional products and dietary supplements design to help
								you lose
								weight and reduce body fat.
							</p>
							<a class="rounded-pill" role="button" href="./product.php">Buy Now</a>
						</div>
					</div>

					<div class="col-lg-3 brand_card col-md-6 text-center mt-5">
						<i class="fas fa-tachometer-alt"></i>
						<div class="brand_content">
							<h1 class="fs-1">Performance</h1>
							<p>maximize your results.</p>
							<p class="my-4">
								Bump up your intensity and support strength, performance, and muscle gain.
								Scientifically formulated, and NSF Certified for Sport.
							</p>
							<a class="rounded-pill"  role="button"  href="./product.php">Buy Now</a>
						</div>
					</div>

					<div class="col-lg-3 brand_card col-md-6 text-center mt-5">
						<i class="fas fa-plus-circle"></i>
						<div class="brand_content">
							<h1 class="fs-1">Health</h1>
							<p>live life better.</p>
							<p class="my-4">
								Improve your health and support your active PlaySpan. Scientifically formulated,
								third-party tested, and NSF Certified for Sport.
							</p>
							<a class="rounded-pill"  role="button"  href="./product.php">Buy Now</a>
						</div>
					</div>

					<div class="col-lg-3 brand_card col-md-6 text-center mt-5">
						<i class="fab fa-nutritionix"></i>
						<div class="brand_content">
							<h1 class="fs-1">Nutrition</h1>
							<p>fuel your passion.</p>
							<p class="my-4">
								Delicious and healthy meal replacements, bars, and cookies. Packed with whey or vegan
								protein to support your healthy lifestyle.
							</p>
							<a class="rounded-pill"  role="button"  href="./product.php">Buy Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Brand End -->

		<!-- Video Start -->
		<div class="row">
			<div class="container-fluid video_section">
				<h1 class="col-lg-12 fs-1 text-center text-white "><span>Who</span> we are</h1>
				<div class="col-lg-12 video_container">
					<img src="./img/bg1.jpg" class="img-fluid col-md-10 offset-md-1 video_img "
						alt="this is video image">
					<div class="play">
						<a href="https://youtu.be/kXptPzKNMq4" target="_blank"><i class="fas fa-play"></i></a>
					</div>
				</div>
			</div>
		</div>
		<!-- Video End -->

		<!-- Vision Start -->
		<div class="row">
			<div class="container-fluid vision_section">
				<div class="row">
					<div class="col-lg-12">
						<h1 class=" fs-1 text-center text-white my-3">Our <span>Vision</span></h1>
					</div>

					<div class="col-lg-6 text-white">
						<p class="my-5 vision_text">
						To help you achieve your objectives, we developed this gym shpp just outside your door. Through our fitness philosophy, facilities, programmes, and products, we aim to improve the quality of life in the communities in which we operate and to inculcate the importance of health and fitness in the lives of people worldwide."
						<br />
						<span class="text-center d-block  mt-2 mx-0">Your vision, our vision, and the gym's vision.</span>
						</p>
						<a class="readmorebtn offset-md-4 offset-sm-5 my-5"  role="button" href="./information.php">Read More</a>


					</div>

					<div class="col-lg-6 text-white ">
						<iframe class="w-100" src="https://www.youtube.com/embed/8jdJU7L7MMg"
							title="YouTube video player" frameborder="0"
							allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
							allowfullscreen>
						</iframe>
					</div>
				</div>

				<div class="row ">
					<div class="col-lg-12">
						<h1 class=" fs-1 text-center text-white my-3">Our <span>Mission</span></h1>
					</div>
					<div class="col-lg-6  ">
						<iframe class="w-100" src="https://www.youtube.com/embed/yHDoK930Hr4"
							title="YouTube video player" frameborder="0"
							allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
							allowfullscreen></iframe>
					</div>
					<div class="col-lg-6 text-white  ">
						<p class="my-5 vision_text">
							We are distinguished by our unsurpassed motivating atmosphere, knowledgeable staff and
							premier exercise equipment, which supports our members in meeting their individual fitness
							goals. We provide these with dedication to the highest quality of customer satisfaction
							delivered with a sense of friendliness, individual pride and company spirit. The strength of
							our heart-felt identity is utilized to inspire every person that steps foot into our gyms to
							better themselves.
						</p>
						<a class="readmorebtn read2 offset-md-4  offset-sm-5"  role="button" href="./information.php">Read More</a>

					</div>
				</div>

			</div>
		</div>
		<!-- Vision End -->


		<!-- Contact Start -->
		<div class="row">
			<div class="content_contact">
				<div class="container-fluid p-0">
					<div class="row align-items-stretch no-gutters contact-wrap">
						<div class="col-lg-12 fs-1  text-center mb-5 contact_header">Get in Touch with us</div>
						<div class="col-lg-6 col-md-12">
							<div class="form h-100">
								<h2>Send us a message</h2>
								<form class="mb-5" method="post" id="contactForm" name="contactForm">
									<div class="row">
										<div class="col-md-6 form-group mb-5">
											<label for="" class="col-form-label">Name *</label>
											<input type="text" class="form-control" name="name" id="name"
												placeholder="Your name" autocomplete="off">
										</div>
										<div class="col-md-6 form-group mb-5">
											<label for="" class="col-form-label">Email *</label>
											<input type="text" class="form-control" name="email" id="email"
												placeholder="Your email" autocomplete="off">
										</div>
									</div>

									<div class="row">
										<div class="col-md-6 form-group mb-5">
											<label for="" class="col-form-label">Phone</label>
											<input type="text" class="form-control" name="phone" id="phone"
												placeholder="Phone #" autocomplete="off">
										</div>
									</div>

									<div class="row">
										<div class="col-md-12 form-group mb-5">
											<label for="message" class="col-form-label">Message *</label>
											<textarea class="form-control" name="message" id="message" cols="30"
												rows="4" placeholder="Write your message" autocomplete="off"></textarea>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 form-group">
											<input type="submit" value="Send Message"
												class="btn rounded-0 py-2 px-4 contact_btn">
											<span class="submitting"></span>
										</div>
									</div>
								</form>

								<div id="form-message-warning mt-4"></div>
								<div id="form-message-success">
									Your message was sent, thank you!
								</div>

							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.7751607159335!2d96.15543307660556!3d16.837506620189238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1935921531903%3A0x80e39d53ce1c6ee3!2s9%20Kabar%20Aye%20Pagoda%20Rd%2C%20Yangon!5e0!3m2!1sen!2smm!4v1642820652854!5m2!1sen!2smm" class="w-100 h-100 contact-info" allowfullscreen="" loading="lazy"></iframe>
						</div>
					</div>
				</div>

			</div>
		</div>
		<!-- Contact End -->

	</div>

<?php require_once("footer.php"); ?>
