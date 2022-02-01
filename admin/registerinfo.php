<?php 
    include('./dbconfig.php');

    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $comfirmpassword = $_POST['comfirmpassword'];


    $sql = "INSERT INTO users(`username`,`email`,`phone`,`password`, `comfirm password`)
    VALUES('".$username."','".$email."','".$phone."','".$password."','".$comfirmpassword."')";


    if($connection->query($sql) == TRUE){
        header('location:login.php');
    }else{
        echo $connection->error;
    }
    $connection->close();
?>
