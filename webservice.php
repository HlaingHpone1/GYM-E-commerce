<?php
    include('./admin/dbconfig.php');

    $sql = "SELECT * FROM faq";
    $result = $connection->query($sql);
    while($row = $result->fetch_assoc()){
    $msg[] = array ("no" => $row['id'], "user_id" => $row['user_id'], "question" => $row
    ['question'],"answer"=>$row['answer']);
    }
    $json = $msg;
    header('content-type: application/json');
    echo json_encode($json);
    $connection->close();

?>