<?php
    include('../dbconfig.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST' AND !empty($_POST)){

        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = SHA1($_POST['password']);
        $comfirmpassword = SHA1($_POST['comfirmpassword']);

        if(empty($username)){
            $errors[] = "User Name Field is Required<br/>";
        }

        if(empty($email)){ 
            $errors[] = "Email Field is Required<br/>";
        }

        if(empty($phone)){
            $errors[] =  "Phone Field is Required<br/>";
        }

        if(empty($password)){ 
            $errors[] =  "Password Field is Required<br/>";
        }

        if(empty($comfirmpassword)){ 
            $errors[] =  "Comfirm Password Field is Required<br/>";
        }

        if($password !== $comfirmpassword){
            $errors[] =  "Password And Comfirm Password are not Macth<br/>";
        }

        $select_email = "SELECT * FROM users WHERE email='$email'";
        $select = mysqli_query($connection,$select_email );

        if($select->num_rows) {
            $errors[] = "This email address is already used!<br/>";
        }

        if(empty($errors)){
            $sql = "INSERT INTO users(`username`,`email`,`phone`,`password`, `comfirmpassword`)
                VALUES('$username', '$email','$phone', '$password','$comfirmpassword')";
        
                $result = $connection->query($sql);
        
                if(!$result){
                    echo $connection->error;
                }else{
                    header('location:index.php');
                }
            $messages[] = "Create Successful!!!";
        }
        $connection->close();
    }

	include('./header.php');

?>

<div class="container-fluid editsection">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-8">
            <form class="form_login" action="#" method="POST" enctype="multipart/form-data">
                <h1 class="fs-1 text-center text-dark mb-5">Add User</h1>
                <?php
                    if(!empty($errors)){
                        foreach($errors as $error){
                            echo "<p class='text-danger'>". $error ."</p>";
                        }
                    }

                    if(!empty($messages)){
                        foreach ($messages as $message) {
                            $success = "<p class='text-success fs-4'>". $message."</p>";
                        }
                        $_SESSION['success_add_message'] = $success;
                    }
                    ?>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">User Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" autocomplete="off">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" autocomplete="off">
                </div>
                <div class="input_phone mb-3">
                    <label for="exampleInputEmail1" class="form-label">Phone</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="phone" autocomplete="off">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" autocomplete="off">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Comfirm Password</label>
                    <input type="password" class="form-control" name="comfirmpassword" id="exampleInputPassword1" autocomplete="off">
                </div>
                <button type="submit" class="btn login_btn mb-3">Submit</button>
            </form>
        </div>
    </div>
</div>
<?php include_once('./footer.php'); ?>
