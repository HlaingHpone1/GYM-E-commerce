<?php
    require_once("../dbconfig.php");

    $id = $_GET['id'];
	$sql = "SELECT * FROM users
            WHERE id =". $id;

    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$username = $_POST['username'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$password = $_POST['password'];
        $comfirmpassword = $_POST['comfirmpassword'];

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

        if(empty($errors)){
            $updatesql = "UPDATE users 
                SET `username` = '$username', `email` = '$email', `phone` = '$phone'
                WHERE id=".$_GET['id'];
		
            mysqli_query($connection, $updatesql);

            if($password ===  $row['password'] AND $comfirmpassword === $row['comfirmpassword']){
                
            }else{
                $sqlpass = "UPDATE users 
                    SET `password` = SHA1('$password'), `comfirmpassword` = SHA1('$comfirmpassword')
                    WHERE id=".$_GET['id'];

                mysqli_query($connection, $sqlpass);
            }

            $messages[] = "Update Successful!!!!!";

            
            header('location:index.php');
        }

	}

	include('./header.php');

	
?>

<div class="container-fluid editsection">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-8">
            <form class="form_login" action="?id=<?php echo $_GET['id']; ?>" method="POST" enctype="multipart/form-data">
                <h1 class="fs-1 text-center text-dark mb-5">Edit User</h1>
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
                        $_SESSION['success_update'] = $success;
                    }
                    ?>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">User Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username"  value="<?php echo $row['username']; ?> " autocomplete="off" required>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?php echo $row['email']; ?>" autocomplete="off" required>
                </div>
                <div class="input_phone mb-3">
                    <label for="exampleInputEmail1" class="form-label">Phone</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="phone" value="<?php echo $row['phone']; ?>" autocomplete="off" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" value="<?php echo $row['password']; ?>"id="exampleInputPassword1" autocomplete="off" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Comfirm Password</label>
                    <input type="password" class="form-control" name="comfirmpassword" value="<?php echo $row['comfirmpassword']; ?>" id="exampleInputPassword1" autocomplete="off" required>
                </div>
                <button type="submit" class="btn login_btn mb-3">Submit</button>
            </form>
        </div>
    </div>
</div>
<?php include_once('./footer.php'); ?>
