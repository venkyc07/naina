<?php
	session_start();
	include("../db_connection.php");	
	
	$email = $_POST['email'];
	$password = $_POST['password'];

	$query= "SELECT * FROM users where email = '".$email."' and password = '".$password."' limit 1";	
	// echo "<pre>";print_r($query);die;
	$result = $conn->query($query);
	
	if ($result == TRUE) {
		if ($result->num_rows > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				$_SESSION["loggedin_id"] = $row["admin_id"];
				$_SESSION["email"] = $row["email"];
			}

	    	header("location: ../dashboard.php"); 
		} else {
			echo '<script language="javascript">alert("Invalid Email or Password");';
			echo 'window.location.href = "../index.php";';
			echo '</script>';
		}
	} else {
		echo '<script language="javascript">alert("Invalid");';
		echo 'window.location.href = "../index.php";';
		echo '</script>';
	}
	
?>