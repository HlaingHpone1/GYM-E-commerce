<?php require('./header.php'); ?>
    <section class=" ">
        <div class="container-fluid h-custom py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <form>
                        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start mt-md-5">
                            <p class="lead fw-normal mb-0 me-3 signinheader">Sign in with</p>
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
                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0">Or</p>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">User Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off">
                        </div>
                        <div class="input_phone mb-3">
                            <label for="exampleInputEmail1" class="form-label">Phone</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Comfirm Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" autocomplete="off">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                        </div>
                        <button type="submit" class="btn login_btn mb-3">Submit</button>

                        <div class="mb-3 d-flex justify-content-between">
                            <a class="text-decoration-none mb-3 singup_link" href="./login.php">Already Account?</a>
                        </div>
                    </form>
                </div>
                <div class="col-md-9 col-lg-6 col-xl-5 offset-xl-1">
                    <img src="./img/svg/signup.svg" class="img-fluid"
                    alt="Sign Up SVG image">
                </div>
            </div>
        </div>
    </section>
<?php require('./footer.php'); ?>