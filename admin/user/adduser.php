<?php
    include('../dbconfig.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = SHA1($_POST['password']);
        $comfirmpassword = SHA1($_POST['comfirmpassword']);

        $sql = "INSERT INTO users(`username`,`email`,`phone`,`password`, `comfirmpassword`)
        VALUES('$username', '$email','$phone', '$password','$comfirmpassword')";

        $result = mysqli_query($connection,$sql);

        if(!$result){
            echo $connection->error;
        }else{
            header('location:index.php');
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
