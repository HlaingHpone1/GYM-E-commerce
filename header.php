<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Index page</title>

	<link rel="shortcut icon" href="./img/logo.svg" type="image/x-icon">
	<link rel="stylesheet" href="./libs/fontawesomepro/css/all.min.css">
	<link rel="stylesheet" href="./css/bootstrap.css" />
	<link rel="stylesheet" href="./css/swiper-bundle.min.css">

	<link rel="stylesheet" href="./css/header_footer_loader.css" />
	<link rel="stylesheet" href="./css/style.css" />
	<link rel="stylesheet" href="./css/mediaquery.css" />


	<script src="./js/bootstrap.js"></script>

</head>

<body>

	<!-- loader start -->
	<div class="loader_container" id="loader">
		<div class="loading" id="loader">
			<i class="fas fa-dumbbell"></i>
		</div>
	</div>
	<!-- loader end -->

	
	<!-- Nav bar start -->

	<nav class="navbar navbar-expand-lg py-2">
		<div class="container-fluid">
			<a class="navbar-brand fs-1" href="./index.php">
				<img src="./img/logo.svg" alt="" class="d-inline-block align-text-top">
				Dragon <span>World</span>
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
				aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="./index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="./product.php">Products</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="./review.php">Review</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="./customerservice.php">Customer Service</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="./about.php">About Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="./contact.php">Contact Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="./featured.php">Featured</a>
					</li>
				</ul>
			</div>

			<a href="./signup.php" class="btn joinbtn">Sign Up</a>
		</div>
	</nav>

	<!-- Nav bar End -->