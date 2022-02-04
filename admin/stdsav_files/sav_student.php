<?php
    session_start();
    include("../db_connection.php");
    
        // echo "<pre>";print_r($_POST);die;
    if(!empty($_POST['student_id']))
    {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $specialization = $_POST['specialization'];
        $specialization1 = $_POST['specialization1'];
        $description = $_POST['description'];
        $type = $_POST['type'];
        $Get_image_name = $_FILES['image']['name'];
        // $image_Path = "doctors/".basename($Get_image_name);

        $procedure1 = $_POST['procedure1'];
        $procedure2 = $_POST['procedure2'];
        $procedure3 = $_POST['procedure3'];
        $procedure4 = $_POST['procedure4'];
        $procedure5 = $_POST['procedure5'];
        $imagePath = $_POST['imagePath'];
        
        // echo "<pre>";print_r($Get_image_name);die;
        if($imagePath == '') {
            if($Get_image_name != '') {
                $image_Path = "doctors/".basename($Get_image_name);
            } else {
                $image_Path = '';
            }
        } else {
            $image_Path = $imagePath;
        }
        $query= "update `students` set `first_name` = '$first_name', `last_name` = '$last_name', `type` = '$type', `specialization` = '$specialization',`specialization1` = '$specialization1', `Description` = '$description', `procedure1` = '$procedure1', `procedure2` = '$procedure2', `procedure3` = '$procedure3', `procedure4` = '$procedure4', `procedure5` = '$procedure5',`images` = '$image_Path' where doctor_id = ".$_POST['doctor_id'];
        
    } else {

        // echo "<pre>";print_r($_POST);die; 
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $mobile = $_POST['mobile'];
        
        $query= "INSERT INTO `students` (`first_name`,`last_name`,`email`,`password`,`mobile`) VALUES ('$first_name','$last_name','$email','$password', '$mobile')";
        
    }

    if ($conn->query($query) === TRUE) {
        // $_SESSION['reg_success'] = "Registered Successfully, Please Login!";
        echo '<script language="javascript">alert("Registered Successfully, Please Login!");';
        echo 'window.location.href = "../../login.php";';
        echo '</script>';
           
    } else {
        echo '<script language="javascript">alert("Something Went Wrong");';
        echo 'window.location.href = "../../register.php";';
        echo '</script>';
    }

?>