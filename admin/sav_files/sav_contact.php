<?php
    session_start();
    include("../db_connection.php");

        // echo "<pre>";print_r($_POST);

        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $message = $_POST['message'];
        
        $query= "INSERT INTO `contacts` (`name`,`email`, `mobile`, `message`) VALUES ('$name','$email', '$mobile', '$message')";
// die;
    if ($conn->query($query) === TRUE) {
        echo '<script language="javascript">';
        echo 'window.location.href = "../../contact.php";';
        echo '</script>';
    } else {
        // die;
        echo '<script language="javascript">alert("Something Went Wrong");';
        echo 'window.location.href = "../../contact.php";';
        echo '</script>';
    }

?>