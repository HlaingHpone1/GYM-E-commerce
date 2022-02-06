<?php

    require("../dbconfig.php");

    $id = $_GET['id'];

    $sql = "DELETE FROM faq WHERE id =".$id;
    $result = $connection->query($sql);

    if(!$result){
        echo $connection->error;
    }else{
        header('location:index.php');
    }

?>