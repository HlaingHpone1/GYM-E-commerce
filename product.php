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

                $result = $connection->query($sql);
            ?>
            <?php
                if($result->num_rows > 0){
            ?>
				<?php
                    while($row = $result->fetch_assoc()){
                ?>
			<div class="productcard stacked">
			<img class="w-100 product_img card__img" src="admin/product/f_img/<?php echo $row['f_img']; ?>" alt="this is product_image">
				<div class="card__content text-center">
					<h2 class="card__title mb-1"><?php echo $row['name']; ?></h2>
					<p class="card__price"><?php echo "$ ".$row['price']; ?></p>
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
					<p class="card__description text-muted">
						<?php echo substr($row['description'],0, 150)."...."; ?>
					</p>
					<a href="./productdetail.php?id=<?php echo $row['id']; ?>" role="button" class="btn product_btn">Shop Now</a>
				</div>
			</div>
				<?php
					}
				?>
			<?php
				}else{
					echo"There is No Record";
				}
			?>
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