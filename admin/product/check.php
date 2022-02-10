<?php
    require('../dbconfig.php');

    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $review = $_POST['review'];
    $f_img = $_FILES['f_img']['name'];
    $tmp = $_FILES['f_img'] [ 'tmp_name'];//for store image
    $s_img = $_FILES['s_img']['name'];
    $tmp1 = $_FILES['s_img'] [ 'tmp_name'];//for store image
    
    if($f_img) {
        move_uploaded_file($tmp, "f_img/$f_img");
    }
    if($s_img){
        move_uploaded_file($tmp1, "s_img/$s_img");
    }

    $sql = "INSERT INTO `products`(`name`, `price`, `description`, `review`, `f_img`, `s_img`, `created_at`, `updated_at`) VALUES ('$name','$price','$description', '$review','$f_img','$s_img', now(),now())";
    // echo $sql;
    // exit();
    
    mysqli_query($connection, $sql);

    header("location: index.php");
?>