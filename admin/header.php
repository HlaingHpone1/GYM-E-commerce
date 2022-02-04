<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Index page</title>

	<!-- <link rel="shortcut icon" href="../../img/svg/logo.svg" type="image/x-icon"> -->

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">
	
	<link href="https://fonts.googleapis.com/css2?family=Crete+Round&family=Roboto+Slab&display=swap" rel="stylesheet">



</head>

<style>
	body,
button {
	font-family: "Roboto Slab", serif;
}

:root {
	--offcanvas-width: 270px;
	--topNavbarHeight: 80px;
}

.sidebar-nav {
	width: var(--offcanvas-width);
}

.sidebar-link {
	display: flex;
	align-items: center;
}

.sidebar-link .right-icon {
	display: inline-flex;
}

.sidebar-link[aria-expanded="true"] .right-icon {
	transform: rotate(180deg);
}

@media (min-width: 992px) {
	body {
		overflow: auto !important;
	}

	main {
		margin-left: var(--offcanvas-width);
	}

	/* this is to remove the backdrop */
	.offcanvas-backdrop::before {
		display: none;
	}

	.sidebar-nav {
		-webkit-transform: none;
		transform: none;
		visibility: visible !important;
		height: calc(100% - var(--topNavbarHeight));
		top: var(--topNavbarHeight);
	}
}


</style>

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
			href="#"
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
			<form class="d-flex ms-auto my-3 my-lg-0">
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
			</form>
			<ul class="navbar-nav">
				<li class="nav-item dropdown">
				<a
					class="nav-link dropdown-toggle ms-2"
					href="#"
					role="button"
					data-bs-toggle="dropdown"
					aria-expanded="false"
				>
					<i class="fas fa-user-circle"></i>
				</a>
				<ul class="dropdown-menu dropdown-menu-end">
					<li><a class="dropdown-item" href="#">Action</a></li>
					<li><a class="dropdown-item" href="#">Another action</a></li>
					<li>
					<a class="dropdown-item" href="#">Something else here</a>
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
						class="nav-link px-3 sidebar-link"
						data-bs-toggle="collapse"
						href="#layouts"
					>
						
						<span>Module</span>
						<span class="ms-auto">
						<span class="right-icon">
							<i class="fas fa-chevron-down"></i>
						</span>
						</span>
					</a>
					<div class="collapse" id="layouts">
						<ul class="navbar-nav ps-3">
						<li>
							<a href="./user/index.php" class="nav-link px-3">
							<span class="me-2"
								><i class="fas fa-users"></i></span>
							<span>Users</span>
							</a>
						</li>
						<li>
							<a href="./product/index.php" class="nav-link px-3">
							<span class="me-2"
								><i class="fab fa-product-hunt"></i></span>
							<span>Product</span>
							</a>
						</li>
						</ul>
					</div>
				</li>
				<li>
					<a href="./faq/index.php" class="nav-link px-3">
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