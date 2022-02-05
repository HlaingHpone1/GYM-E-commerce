<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Index page</title>

	<link rel="shortcut icon" href="../img/svg/logo.svg" type="image/x-icon">
	<link rel="stylesheet" href="../libs/fontawesomepro/css/all.min.css">
	<link rel="stylesheet" href="../css/bootstrap.css" />

	<link rel="stylesheet" href="../css/header_footer_loader.css" />
	<link rel="stylesheet" href="../css/dataTables.bootstrap5.min.css">
	<link rel="stylesheet" href="../css/admin.css">



</head>

<body>
    <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="../img/img-01.png" alt="IMG">
				</div>

				<form method="POST" class="login100-form validate-form" action="./checkinfo.php"  enctype="multipart/form-data" >
					<span class="login100-form-title">
						Admin Login
					</span>

					<div class="wrap-input100">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12 ">
						<span class="fs-6 text-white">
							Forgot
						</span>
						<a class="fs-6 text-decoration-none text-white" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="fs-6 text-decoration-none text-white" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	


    <!-- Footer End -->
        <script src="../js/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="../js/datatables.min.js"></script>
        <script src="../js/main.js"></script>
        <script src="../js/select2.min.js"></script>
        <script src="../js/tilt.jquery.min.js"></script>


        <script type="text/javascript">
            var loader = document.getElementById("loader");
            window.addEventListener("load", function () {
                loader.style.display = "none";
            });
            let date = new Date();
            let utcyear = date.getUTCFullYear();
            document.getElementById("year").textContent = utcyear;

            $('.js-tilt').tilt({
			scale: 1.1
		})
        </script>
</body>

</html>