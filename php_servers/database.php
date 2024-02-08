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

if (isset($_POST['regbtn']) != '') {
    $username = mysqli_real_escape_string($conn, $_POST['regusername']);
    $email = mysqli_real_escape_string($conn, $_POST['regemail']);
    $password = mysqli_real_escape_string($conn, $_POST['regpassword']);

    $checkEmailQuery = "SELECT * FROM bisita_users WHERE email = '$email'";
    $checkEmailResult = mysqli_query($conn, $checkEmailQuery);

    if (mysqli_num_rows($checkEmailResult) != 0) {
        echo "<script>
                alert('This email is used, Try another one please!');
                window.history.back();
              </script>";
    } else {
        $sql = "INSERT INTO bisita_users (`username`, `email`, `user_password`) VALUES ('$username', '$email', '$password')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
			//home.html 
            echo "<script>
                    alert('Registered Complete!');
                    window.location.href = '.html';
                  </script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}

$conn->close();
?>
