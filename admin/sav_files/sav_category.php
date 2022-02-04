<?php
    session_start();
    include("../db_connection.php");
    
        // echo "<pre>";print_r($_POST);die;
    if(!empty($_POST['cat_id']))
    {

        // echo "<pre>";print_r($_POST);die;
        $cat_name = $_POST['category_name'];
        $status = $_POST['status'];

        $query= "update `category` set `cat_name` = '$cat_name', `status` = '$status' where category_id = ".$_POST['cat_id'];
        
    } else {

        // echo "<pre>";print_r($_POST);die;
        $category_name = $_POST['category_name'];
        $status = $_POST['status'];

        $query= "INSERT INTO `category` (`cat_name`,`status`) VALUES ('$category_name','$status')";
    }

    if ($conn->query($query) === TRUE) {
        echo '<script language="javascript">';
        echo 'window.location.href = "../total_categories.php";';
        echo '</script>';
    } else {
        // die;
        echo '<script language="javascript">alert("Something Went Wrong");';
        echo 'window.location.href = "../add_category.php";';
        echo '</script>';
    }

?>