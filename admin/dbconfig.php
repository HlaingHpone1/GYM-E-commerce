<?php
    $servername ="localhost";
    $username = "root";
    $password = "";
    $dbname = "hhdw5";

    $connection = new mysqli($servername,$username,$password,$dbname);
    // var_dump($connection);

    if(!$connection){
        die('<h1 style="text-align:center; font-weight:900; font-family:Arial; color:#f00;">You can\'t connect this time try again later </h1>'.$connection->connect_error);
    }
?>  