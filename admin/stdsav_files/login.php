<?php
	session_start();
	include("../db_connection.php");	
	unset($_SESSION['reg_success']);
	
	$email = $_POST['email'];
	$password = $_POST['password'];

	$query= "SELECT * FROM students where email = '".$email."' and password = '".$password."' limit 1";	
	// echo "<pre>";print_r($query);die;
	$result = $conn->query($query);
	
	if ($result == TRUE) {
		if ($result->num_rows > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				$_SESSION["student_id"] = $row["student_id"];
				$_SESSION["mobile"] = $row["mobile"];
				$_SESSION["email"] = $row["email"];
			}

	    	header("location: ../../mydash.php"); 
		} else {
			echo '<script language="javascript">alert("Invalid Email or Password");';
			echo 'window.location.href = "../../login.php";';
			echo '</script>';
		}
	} else {
		echo '<script language="javascript">alert("Invalid");';
		echo 'window.location.href = "../../login.php";';
		echo '</script>';
	}
	
?>