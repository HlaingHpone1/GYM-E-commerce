<?php session_start();
if(empty($_SESSION ['email']))
{
    header('location:../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Index page</title>

	<link rel="shortcut icon" href="../../img/svg/logo.svg" type="image/x-icon">

	<link rel="stylesheet" type="text/css" href="../../libs/fontawesomepro/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/datatable/dataTables.bootstrap5.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/datatable/jquery.dataTables.min.css">

	<link rel="stylesheet" type="text/css" href="../css/admin.css">
	
</head>

<body>

	<!-- top navigation bar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top ">
		<div class="container-fluid">
			<button
			class="navbar-toggler"
			type="button"
			data-bs-toggle="offcanvas"
			data-bs-target="#sidebar"
			aria-controls="offcanvasExample"
			>
			<span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
			</button>
			<a
			class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fs-1 fw-bold"
			href="../user/index.php"
			>Admin Dashboard</a
			>
			<button
			class="navbar-toggler"
			type="button"
			data-bs-toggle="collapse"
			data-bs-target="#topNavBar"
			aria-controls="topNavBar"
			aria-expanded="false"
			aria-label="Toggle navigation"
			>
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="topNavBar">
			<!-- <form class="d-flex ms-auto my-3 my-lg-0">
				<div class="input-group">
				<input
					class="form-control"
					type="search"
					placeholder="Search"
					aria-label="Search"
				/>
				<button class="btn btn-primary" type="submit">
					<i class="fas fa-search"></i>
				</button>
				</div>
			</form> -->
			<ul class="navbar-nav d-flex ms-auto my-3 my-lg-0">
				<li class="nav-item dropdown">
				<a
					class="nav-link dropdown-toggle ms-2"
					href="#"
					role="button"
					data-bs-toggle="dropdown"
					aria-expanded="false"
				>
					<i class="fas fa-user-circle me-2"></i><?php echo $_SESSION['username']; ?>
				</a>
				<ul class="dropdown-menu dropdown-menu-end">
					<li>
					<a class="dropdown-item" href="../logout.php">Log Out</a>
					</li>
				</ul>
				</li>
			</ul>
			</div>
		</div>
	</nav>	
    <!-- top navigation bar -->
    <!-- offcanvas -->
	<div
		class="offcanvas offcanvas-start sidebar-nav bg-dark"
		tabindex="-1"
		id="sidebar"
		>
		<div class="offcanvas-body p-0">
			<nav class="navbar-dark">
			<ul class="navbar-nav">
				<li>
				<div class="text-muted small fw-bold text-uppercase px-3">
					Admin
				</div>
				</li>
				<li>
				<a href="./index.php" class="nav-link px-3 active">
					<span class="me-2"><i class="fas fa-tachometer-alt-slow"></i></span>
					<s class="text-decoration-none">Dashboard</s>
				</a>
				</li>
				<li class="my-4"><hr class="dropdown-divider bg-light" /></li>
				<li>
					<div class="text-muted small fw-bold text-uppercase px-3 mb-3">
						Interface
					</div>
				</li>
				<li>
					<a 
						<?php if ($_SERVER['SCRIPT_NAME'] == "/hlainghpone_dw5/admin/user/index.php") { ?> 
							class="nav-link px-3 active" 
						<?php   } else {  ?>
							class="nav-link px-3"
						<?php } ?>
						href="../user/index.php">
					<span class="me-2">
						<i class="fas fa-users"></i></span>
						<span>Users</span>
						</a>
					</li>
					<li>
						<a 
						<?php if ($_SERVER['SCRIPT_NAME'] == "/hlainghpone_dw5/admin/product/index.php") { ?> 
							class="nav-link px-3 active" 
						<?php   } else {  ?>
							class="nav-link px-3"
						<?php } ?>
						
						href="../product/index.php">
						<span class="me-2"
							><i class="fab fa-product-hunt"></i></span>
						<span>Product</span>
						</a>
					</li>
				<li>
					<a 
					<?php if ($_SERVER['SCRIPT_NAME'] == "/hlainghpone_dw5/admin/faq/index.php") { ?> 
							class="nav-link px-3 active" 
						<?php   } else {  ?>
							class="nav-link px-3"
						<?php } ?>
					href="../faq/index.php">
						<span class="me-2"><i class="fas fa-question-circle"></i></span>
						<span>FAQs</span>
					</a>
				</li>
				<li class="my-4"><hr class="dropdown-divider bg-light" /></li>
				

			</ul>
			</nav>
		</div>
	</div>
    <!-- offcanvas -->
	<main class="mt-5">