<?php 
    include_once 'models.php';

    $servername = "localhost";
	$dbuser = "root";
	$dbpassword = "";
	$dbname = "bisitaph";

    // database connection
	$conn = new mysqli($servername, $dbuser, $dbpassword, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
    }   
?> 