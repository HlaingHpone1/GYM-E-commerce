<?php 
    include('./dbconfig.php');

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

    
?>
