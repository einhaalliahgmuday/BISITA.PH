<?php
session_start();

$DBHost = "localhost"; //hostname
$DBUser = "root";      //username
$DBPass = "";          //password
$DBName = "bisitaph";    //database

$conn = mysqli_connect($DBHost, $DBUser, $DBPass, $DBName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$response = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $loginUsername = $_POST["logusername"];
    $loginPassword = $_POST["logpassword"]; 

    $sql = "SELECT username, email, password FROM user WHERE username='$loginUsername' AND password='$loginPassword'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['user_password'] = $row['password'];
       
    
        echo '<pre>';
        var_dump($_SESSION);
        echo '</pre>';
    
        header("Location: ../home.php");
        exit();
    } else {        
        echo "
        <script>
			alert('Incorrect Username or Password. Please try again!');
			window.history.back();
		</script>
		";
    }
 }
 $conn->close();
 ?>