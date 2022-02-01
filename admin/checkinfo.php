<?php 
    // session_start();
    require_once('./dbconfig.php');
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE `email`='".$email."' AND `password`='".$password."'";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();
    var_dump($result);
    var_dump($row);
    echo $sql;

    // if($result->num_rows > 0)
    // {
    //     $_SESSION['email'] = $row['email'];
    //     header('location:index.php');
    // }else{
    //     header('location:../index.php');
    // }
?>