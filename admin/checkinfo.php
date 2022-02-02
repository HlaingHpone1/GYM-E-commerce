<?php 
    session_start();
    require_once('./dbconfig.php');
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password' AND `comfirmpassword` = '$password'";
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);

    if($row['email'] == $email AND $row['password'] == $password AND $row['comfirmpassword'])
    {
        header('location:index.php');
    }else{
        header('location:login.php');
    }
?>