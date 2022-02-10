<?php include("./header.php"); ?>


	<div class="banner" id="productbanner">
		<h1 class="fs-1">Product</h1>
		<p>Home / Pages / Product</p>
	</div>

	<!-- product card container start -->
	<div class="gallery_container py-5">
		<div class="product-grid">
			<?php 
                require('./admin/dbconfig.php');
				$sql = "SELECT * FROM products";

                $result = mysqli_query($connection, $sql);
            ?>
            <?php
                if($result->num_rows > 0){
            ?>
				<?php
                    while($row = mysqli_fetch_assoc($result)){
                ?>
			<div class="productcard stacked">
				<img class="w-100 product_img" src="admin/product/f_img/<?php echo $row['f_img'] ?>" alt="this is product_image" class="card__img">
				<div class="card__content text-center">
					<h2 class="card__title mb-1"><?php echo $row['name']; ?></h2>
					<p class="card__price"><?php echo $row['price']; ?></p>
					<ul class="list-inline small">
							<li class="list-inline-item m-0 ">
								(4.55)
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
								<i class="fa fa-star-half-alt mypricolor"></i>
							</li>
						</ul>
						<?php echo substr($row['description'],0, 30); ?>
					<!-- <p class="card__description text-muted"></p> -->
					<a href="./featured.php?id=<?php echo $row['id']; ?>" role="button" class="btn product_btn">Shop Now</a>
				</div>
			</div>
				<?php
					}
				?>
			<?php
				}
			?>
			
			<!-- <img class="w-100 product_img" src="admin/product/f_img/" alt="this is product_image" class="card__img">
				<div class="card__content text-center">
					<h2 class="card__title mb-1">Sportsroyals Stair Stepper with Resistance Band and Vertical Climber</h2>
					<p class="card__price">$1550</p>
					<ul class="list-inline small">
							<li class="list-inline-item m-0 ">
								(4.55)
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
								<i class="fa fa-star-half-alt mypricolor"></i>
							</li>
						</ul>
					<p class="card__description text-muted">Our mini stair stepper - A great partner for indoor-exercises! Simple function combine with high-quality steel material, suitable for all family member's exercise.</p>
					<a href="./featured.php" role="button" class="btn product_btn">Shop Now</a>
				</div>
			</div> -->
			<!-- <div class="productcard stacked">
				<img src="img/product/product11.jpg" alt="this is product photo" class="card__img" />
				<div class="card__content text-center">
					<h2 class="card__title">Adjustable Dumbbells 40, 50, 52.5, 60, 105 to 200 lbs with Connector Options</h2>
					<p class="card__price">$1225</p>
						<ul class="list-inline small">
							<li class="list-inline-item m-0">
								(4.43)
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
					<p class="card__description text-muted">Durable cast iron material coated with Powder Coated finish to prevent rust and corrosion, our adjustable dumbbells will last a lifetime without losing performance.</p>
					<a href="./featured.php" role="button" class="btn product_btn">Shop Now</a>

				</div>
			</div>

			<div class="productcard stacked">
				<img src="img/product/product12.jpg" alt="this is product photo" class="card__img" />
				<div class="card__content text-center">
					<h2 class="card__title">550LBS Adjustable Folding Fitness</h2>
					<p class="card__price">$2000</p>
					<ul class="list-inline small">
							<li class="list-inline-item m-0">
								(4.0)
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
					<p class="card__description text-muted">550LBS Adjustable Folding Fitness Barbell Rack & Weight Bench-Squat Stand Dipping Station Weight Bench-Home Gym, Strength Training w/Incline & Decline Capability, Padded Faux Leather, Easy Storage</p>
					<a href="./featured.php" role="button" class="btn product_btn">Shop Now</a>

				</div>
			</div>

			<div class="productcard stacked">
				<img src="img/product/product13.jpg" alt="this is product photo" class="card__img" />
				<div class="card__content text-center">
					<h2 class="card__title">Pelpo Weight Bench for Full Body Exercise, Adjustable Workout Bench</h2>
					<p class="card__price">$1525</p>
					<ul class="list-inline small">
							<li class="list-inline-item m-0">
								(4.6)
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
								<i class="fa fa-star-half-alt mypricolor"></i>
							</li>
						</ul>
					<p class="card__description text-muted">Pelpo designed this multi-functional weight bench to cater to more types of workout at home. The weight bench is easy to fold and store.
					The weight bench is made from heavy-duty commercial quality steel</p>
					<a href="./featured.php" role="button" class="btn product_btn">Shop Now</a>

				</div>
			</div>

			<div class="productcard stacked">
				<img src="img/product/product15.jpg" alt="this is product photo" class="card__img" />
				<div class="card__content text-center">
					<h2 class="card__title text-center">Club Quality 4-Weight Deluxe Barbell Set, 35 lbs</h2>
					<p class="card__price">$725</p>
					<ul class="list-inline small">
							<li class="list-inline-item m-0">
								(4.05)
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
					<p class="card__description text-muted">Introducing the Step Deluxe Dumbbell Set. This high-quality dumbbell set totals 35 lbs. and includes two 16” dumbbell bars, eight collars, and eight weights (extra small–2.75 lbs. and small–5.5lbs.)..</p>
					<a href="./featured.php" role="button" class="btn product_btn">Shop Now</a>

				</div>
			</div>

			<div class="productcard stacked">
				<img src="img/product/product16.jpg" alt="this is product photo" class="card__img" />
				<div class="card__content text-center">
					<h2 class="card__title">VIVITORY Weights Dumbbells Set, Adjustable Dumbbell Set with Connector</h2>
					<p class="card__price">$650</p>
					<ul class="list-inline small">
							<li class="list-inline-item m-0">
								(4.2)
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
					<p class="card__description text-muted">Hexagon design dumbbells prevent scrolling and for easy storage, with no damage to the floor.</p>
					<a href="./featured.php" role="button" class="btn product_btn">Shop Now</a>

				</div>
			</div>

			<div class="productcard stacked">
				<img src="img/product/product17.jpg" alt="this is product photo" class="card__img" />
				<div class="card__content text-center">
					<h2 class="card__title">LINEAR LEG PRESS</h2>
					<p class="card__price">$4100</p>
					<ul class="list-inline small">
							<li class="list-inline-item m-0">
								(4.56)
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
								<i class="fa fa-star-half-alt mypricolor"></i>
							</li>
						</ul>
					<p class="card__description text-muted">Linear leg press with adjustable back pad
					Large foot plate for variety of positions
					Oversized nylon bushing.</p>
					<a href="./featured.php" role="button" class="btn product_btn">Shop Now</a>

				</div>
			</div>

			<div class="productcard stacked">
				<img src="img/product/product18.png" alt="this is product photo" class="card__img" />
				<div class="card__content text-center">
					<h2 class="card__title">RELIFE REBUILD YOUR LIFE Exercise Bike Indoor Cycling Bike</h2>
					<p class="card__price">$1850</p>
					<ul class="list-inline small">
							<li class="list-inline-item m-0">
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
					<p class="card__description text-muted">Rebuild your confidence and attitude towards life. Bring a healthy energetic lifestyle for you. The cushion three-dimensional groove design can accelerate air circulation and dissipate heat.</p>
					<a href="./featured.php" role="button" class="btn product_btn">Shop Now</a>

				</div>
			</div>

			<div class="productcard stacked">
				<img src="img/product/product19.jpg" alt="this is product photo" class="card__img" />
				<div class="card__content text-center">
					<h2 class="card__title">Stamina 55-1602 Inmotion Elliptical</h2>
					<p class="card__price">$850</p>
					<ul class="list-inline small">
							<li class="list-inline-item m-0">
								(4.65)
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
								<i class="fa fa-star-half-alt mypricolor"></i>
							</li>
						</ul>
					<p class="card__description text-muted">The Stamina InMotion Compact Strider can be used sitting, standing or by pedaling in reverse motion, making it easy to get a convenient and versatile workout.Whether you're watching television, reading a book, or working out at the office</p>
					<a href="./featured.php" role="button" class="btn product_btn">Shop Now</a>

				</div>
			</div>

			<div class="productcard stacked">
				<img src="img/product/product20.jpg" alt="this is product photo" class="card__img" />
				<div class="card__content text-center">
					<h2 class="card__title">Marcy 150lb. Stack Home Gym with Pulley, Arm</h2>
					<p class="card__price">$1200</p>
					<ul class="list-inline small">
							<li class="list-inline-item m-0">
								(3.95)
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
					<p class="card__description text-muted">Use the Dual action press arms, Lat Bar, ab attachment, and leg developer to work out your pecs, back muscles, leg muscles, abs, and more! The efficient and space saving design allow the user to quickly get in a full body workout in the convenience of your own home. </p>
					<a href="./featured.php" role="button" class="btn product_btn">Shop Now</a>

				</div>
			</div>

			<div class="productcard stacked">
				<img src="img/product/product21.jpg" alt="this is product photo" class="card__img" />
				<div class="card__content text-center">
					<h2 class="card__title">Body Power 3-in-1 Home Gym, Upright Compact Exercise Bike</h2>
					<p class="card__price">$1750</p>
					<ul class="list-inline small">
							<li class="list-inline-item m-0">
								(4.9)
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
					<p class="card__description text-muted">Save space and get a killer workout with the Body Power 3-in-1 Trio Trainer. This compact trainer can be used as an elliptical, an upright bike, and a recumbent bike. Each of the exercises possible with this unique machine is low-impact.</p>
					<a href="./featured.php" role="button" class="btn product_btn ">Shop Now</a>

				</div>
			</div> -->
		</div>
	</div>
	<!-- product card container end -->

	<!-- load f role="button"or more btn start -->
	<div class="container-fluid">
		<div class="row mybg-dark">
			<div class="col-md-12 text-center">
				<a class="product_load_more" href="#" role="button" role="button" cla role="button"ss="btn btn-primary">Load more</a>
			</div>
		</div>
	</div>

	<!-- load f role="button"or more btn start -->

<?php include("./footer.php"); ?>
	