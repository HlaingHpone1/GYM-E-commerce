<?php 
    // session_start();
    require_once('./dbconfig.php');
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users";
    $result = $connection->query($sql);
    // var_dump($result);


    // if($result->num_rows > 0)
    // {
    //     $row = $result->fetch_assoc();
    //     $_SESSION['email'] = $row['email'];
    //     header('location:index.php');
    // }else{
    //     header('location:../index.php');
    // }
?>