<?php
$servername = "localhost";
$database = "nainasilks";
$username = "root";
$password = "";

// $servername = "localhost";
// $database = "conveygen";
// $username = "root";
// $password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else
{
//echo "Connected successfully";
}
//exit();
?>
