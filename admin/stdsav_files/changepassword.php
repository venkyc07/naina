<?php
    session_start();
    include("../db_connection.php");

        $student_id = $_POST['student_id'];
        $old_password = $_POST['old_password'];
        $new_password = $_POST['new_password'];
        // echo "<pre>";print_r($_POST);die;
    $stdGetquery = "SELECT * FROM students where student_id = '".$student_id."' limit 1";	
	// echo "<pre>";print_r($query);die;
	$getResult = $conn->query($stdGetquery);
	
	if ($getResult == TRUE) {
		if ($getResult->num_rows > 0) {
            $getRowStd = mysqli_fetch_assoc($getResult);
            // echo "<pre>";print_r($getRowStd);die;
            if($getRowStd['password'] == $old_password) {
                if(!empty($_POST['student_id']))
                {
                    $query= "update `students` set `password` = '$new_password' where student_id = ".$_POST['student_id'];
                }

                if ($conn->query($query) === TRUE) {
                    // $_SESSION['reg_success'] = "Registered Successfully, Please Login!";
                    echo '<script language="javascript">alert("Password changed successfully.!")';
                    echo 'window.location.href = "../../changepassword.php";';
                    echo '</script>';
                    
                } else {
                    // echo ("<script language='javascript'>
                    //     $( document ).ready(function() {
                    //         $('#notupdatePass').modal('show');
                    //         // window.location.href = '../../changepassword.php';
                    //     });
                    //     </script>");
                    echo '<script language="javascript">alert("Password not");';
                    echo 'window.location.href = "../../changepassword.php";';
                    echo '</script>';
                }

            } else {
                echo '<script language="javascript">alert("Incorrect old password.!")';
                echo 'window.location.href = "../../changepassword.php";';
                echo '</script>';
                // echo ("<script language='javascript'>
                //         $( document ).ready(function() {
                //             $('#notupdatePass').modal('show');
                //             // window.location.href = '../../changepassword.php';
                //         });
                //         </script>");
            }

	    	header("location: ../../changepassword.php"); 
		} else {
			echo '<script language="javascript">$("#incorrectPass").modal("show); ';
			echo 'window.location.href = "../../changepassword.php";';
			echo '</script>';
		}
	} else {
		echo '<script language="javascript">alert("Invalid");';
		echo 'window.location.href = "../../login.php";';
		echo '</script>';
	}

    

?>