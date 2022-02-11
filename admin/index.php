<?php  
    session_start();
    require('./dbconfig.php');

    error_reporting(0);

    if($_SERVER['REQUEST_METHOD'] == 'POST' AND !empty($_POST)){
        $email = $_POST['email'];
        $password = SHA1($_POST['password']);
    
        if(empty($email)){ 
            $errors[] = "Email Field is Required<br/>";
        }
        if(empty($password)){ 
            $errors[] =  "Password Field is Required<br/>";
        }
    
        if(empty($errors)){
            $sql = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password' AND `comfirmpassword` = '$password'";
        
            $result = mysqli_query($connection,$sql);
            $row = mysqli_fetch_assoc($result);
    
            $messages[] = "Welcome!!!!";
    
            if($row['email'] === $email AND $row['password'] === $password AND $row['comfirmpassword'] === $password )
            {   
                $_SESSION['email'] = $row['email'];
                $_SESSION['username'] = $row['username'];
        
                header('location:user/index.php');
            }else{
                $errors[] =  "Email or Password is Wrong<br/>";
            }
        }
        $connection->close();
	}

    require("./header.php");
?>
        <div class="container-fluid h-custom py-5 mybg-dark vh-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form class="form_login p-5" action="" method="POST" enctype="multipart/form-data">
                        <h1 class="fs-1 text-center text-dark mb-5">Log in</h1>
                        <?php
                            if(!empty($errors)){
                                foreach($errors as $error){
                                    echo "<p class='text-danger'>". $error ."</p>";
                                }
                            }

                            if(!empty($messages)){
                                foreach ($messages as $message) {
                                    $success = "<span class='text-success fs-4'>". $message."</span>";
                                }
                                $_SESSION['Welcome'] = $success;
                            }

                            if(!empty($_SESSION['success_create'])){
                                echo $_SESSION['success_create'];
                            }
                            unset($_SESSION['success_create']);
                            
                        ?>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" autocomplete="off">
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                        </div>

                        <button type="submit" class="btn login_btn mb-3">Submit</button>
                        
                        <div class="mb-3 d-flex justify-content-between">
                            <a class="text-decoration-none mb-3 singup_link" href="./register.php">Create Account?</a>                     
                        </div>
                    </form>
                </div>
            </div>
        </div>
<?php require("./footer.php"); ?>