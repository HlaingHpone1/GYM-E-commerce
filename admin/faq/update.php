<?php

    include("../dbconfig.php");

    $id = $_GET['id']; 

    $user_id = $_POST['user_id'];
    $question = $_POST['question'];
    $answer = $_POST['answer'];

    $sql = "UPDATE `faq` SET `user_id` = '$user_id', `question` = '$question', `answer` = '$answer'
    WHERE `faq`.`id` = ".$id;

    $result = mysqli_query($connection, $sql);

    if(!$result){
        echo $connection->error;
    }else{
        header('location:index.php');
    }

    $connection->close();
    
    
?>