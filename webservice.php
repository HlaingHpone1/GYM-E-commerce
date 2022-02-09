<?php
    include('./admin/dbconfig.php');

    $sql = "SELECT * FROM products";
    $result = $connection->query($sql);
    while($r = mysqli_fetch_assoc ($result)){
    $msg [] = array ("name" => $r['name'], "price" => $r['price'], "description" => $r
    ['description'],"f_img"=>$r['f_img']);
    }
    $json = $msg;
    header('content-type: application/json');
    echo json_encode($json);
    $connection->close();

?>