<?php

    include("../dbconfig.php");

    $user_id = $_POST['user_id'];
    $question = $_POST['question'];
    $answer = $_POST['answer'];

    $sql = "INSERT INTO `faq` (`user_id`, `question`, `answer`)
    VALUES ('$user_id', '$question', '$answer');
    ";

    $result = mysqli_query($connection, $sql);

    if(!$result){
        echo $connection->error;
    }else{
        header('location:index.php');
    }

    $connection->close();
    
    
?>