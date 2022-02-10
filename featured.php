<?php 
	require('./admin/dbconfig.php');

	$id = $_GET['id'];
	$sql = "SELECT * FROM products WHERE id=".$id;

	$result = mysqli_query($connection, $sql);

require("./header.php");
?>

    <div class="banner" id="featurebanner">
		<h1 class="fs-1">Featured</h1>
		<p>Home / Pages / Featured</p>
	</div>

	<div class="container-fluid mybg-dark">
            
		<div class="row d-flex justify-content-center">
			<div class="col-lg-8">
				<div class="container-fluid">
					<div class="row">
					<?php
						if($result->num_rows > 0){
					?>
						<?php
							while($row = mysqli_fetch_assoc($result)){
						?>
						<div class="card p-0">
							<div class="row w-100 m-0">
								<div class="col-xl-6 col-lg-12">
									<div class="images p-3">
										<div class="text-center p-4">
											<img id="main-image" src="admin/product/f_img/<?php echo $row['f_img'] ?>" alt="this is product_image">
										</div>
										<div class="thumbnail text-center d-flex justify-content-center">
											<img onclick="change_image(this)" class="w-25" src="admin/product/f_img/<?php echo $row['f_img'] ?>" alt="this is product_image">
											<img onclick="change_image(this)" class="w-25" src="admin/product/s_img/<?php echo $row['s_img'] ?>" alt="this is product_image">
										</div>
									</div>
								</div>
								<div class="col-xl-6 col-lg-12 product">
									<div class="p-4">
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center"> <i class="fa fa-long-arrow-left"></i> 
											<a href="./product.php" class="text-decoration-none text-dark"><span class="ms-2">Back</span> </div> <i class="fa fa-shopping-cart text-muted"></i></a>
										</div>
										<div class="mt-4 mb-3">
											<h5 class="text-uppercase"><?php echo $row['name']; ?></h5>
											<div class="price d-flex flex-row align-items-center"> 		<span class="act-price"><?php echo $row['price']; ?></span>
											</div>
										</div>
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
										<p class="about"><?php echo $row['description']; ?></p>
										
										<div class="cart mt-4 align-items-center">
											<a class="btn btn-danger text-uppercase me-3 px-4 " href="./payment.php">Buy Now</a> 
											<i class="fa fa-heart text-muted"></i>
											<i class="fa fa-share-alt text-muted"></i> 
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php
							}
						?>
					<?php
						}
					?>
					</div>
					<div class="row text-white bg-danger rounded-3 mt-5 p-2">
						<div class="col-md-12">
							<h1 class="fs-1 text-center">Review</h1>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, quam earum. Incidunt voluptates pariatur perspiciatis ut! Similique, voluptas modi eveniet ipsum corrupti, accusamus culpa impedit ab debitis voluptatum veritatis unde. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium quidem excepturi error hic, fugit aperiam iste maxime in, quibusdam quod enim, temporibus voluptate eos ipsa nihil. Deleniti asperiores atque non!</p>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-4 d-none d-lg-block">
				<div class="row mb-5">
					<div class="card p-0">
						<div class="row w-100 m-0">
							<div class="col-xl-6 col-lg-12">
								<div class="images p-1">
									<div class="text-center">
										<img id="main-image w-100" src="https://i.imgur.com/Dhebu4F.jpg"/>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-12 product">
								<div class=" p-2 h-100">
									<div class="mt-3 mb-1">
										<h5 class="text-uppercase">Men's slim fit t-shirt</h5>
										<div class="price d-flex flex-row align-items-center"> <span class="act-price">$20</span>
											<div class="ms-2"> <small class="dis-price">$59</small> <span>40% OFF</span> </div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row mb-5">
					<div class="card p-0">
						<div class="row w-100 m-0">
							<div class="col-xl-6 col-lg-12">
								<div class="images p-1">
									<div class="text-center">
										<img id="main-image w-100" src="https://i.imgur.com/Dhebu4F.jpg"/>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-12 product">
								<div class=" p-2 h-100">
									<div class="mt-3 mb-1">
										<h5 class="text-uppercase">Men's slim fit t-shirt</h5>
										<div class="price d-flex flex-row align-items-center"> <span class="act-price">$20</span>
											<div class="ms-2"> <small class="dis-price">$59</small> <span>40% OFF</span> </div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row mb-5">
					<div class="card p-0">
						<div class="row w-100 m-0">
							<div class="col-xl-6 col-lg-12">
								<div class="images p-1">
									<div class="text-center">
										<img id="main-image w-100" src="https://i.imgur.com/Dhebu4F.jpg"/>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-12 product">
								<div class=" p-2 h-100">
									<div class="mt-3 mb-1">
										<h5 class="text-uppercase">Men's slim fit t-shirt</h5>
										<div class="price d-flex flex-row align-items-center"> <span class="act-price">$20</span>
											<div class="ms-2"> <small class="dis-price">$59</small> <span>40% OFF</span> </div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<script type="text/javascript">
		function change_image(image){
		var container = document.getElementById("main-image");
		container.src = image.src;
		}
		document.addEventListener("DOMContentLoaded", function(event) {
		});
</script>

<?php require_once("./footer.php"); ?>