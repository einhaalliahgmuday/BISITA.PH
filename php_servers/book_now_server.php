<?php
    include_once "db_server.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $destination = $_POST["destination"];
        $checkIn = $_POST["check-in"];
        $checkOut = $_POST["check-out"];
        $quantity = $_POST["quantity"];
        $promoCode = $_POST["promo-code"];

        global $conn;
        
        $sql = "INSERT INTO bookings (`email`, `destination`, `checkIn`, `checkOut`, `quantity`, `promoCode`) VALUES ('" . $email . "', '" . $destination . "', '" . $checkIn . "', '" . $checkOut . "', '" . $quantity . "', '" . $promoCode . "')";
	    $result = $conn->query($sql);

        echo mysqli_error($conn);

        session_start();
        $_SESSION["messages"][] = "Thank you for booking with us. Please wait for our email.";

        header("Location: ../book-now.php");
    }
?>