<?php
    session_start();
    include("../db_connection.php");
    
    $table_name = $_POST['table_name'];
    $primaryKey = $_POST['primaryKey'];

    $id = $_POST['id'];
    $query= "update ".$table_name." set status = 0 WHERE ".$primaryKey."=".$id;
    // echo $query;die;
    if ($conn->query($query) === TRUE) {
        echo json_encode(array('status'=>1));exit;
    } else {
        echo json_encode(array('status'=>0));
    }

?>