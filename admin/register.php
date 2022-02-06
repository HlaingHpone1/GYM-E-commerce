<?php require("./header.php"); ?>
        <div class="container-fluid h-custom py-5 mybg-dark vh-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form class="form_login px-5">
                        <h1 class="fs-1 text-center text-dark mb-5">Register</h1>

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
                            <a class="text-decoration-none mb-3 singup_link" href="./login.php">Already Acc?</a>                      
                        </div>
                    </form>
                </div>
            </div>
        </div>
<?php require("./footer.php"); ?>