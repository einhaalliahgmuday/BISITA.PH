<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: sign-up.html");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles/global.css" />
    <link rel="stylesheet" href="styles/book-now.css" />
    <title>Our Team</title>
  </head>

  <body>
    <header>
      <a href=""><img class="website-logo" src="media/logos/BisitaLogo.png" alt="logo" /></a>
      <nav>
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="destinations.php">Destinations</a></li>
          <li><a href="offers.php">Offers</a></li>
          <li><a href="about-us.php">About us</a></li>
          <li>
            <a class="book-now" href="book-now.php">BOOK NOW</a>
          </li>
          <?php if (isset($_SESSION["username"])) { ?>
            <li><a href="logout.php">Logout</a></li>
          <?php } else { ?>
            <li><a href="sign-up.html">Login</a></li>
          <?php } ?>
        </ul>
      </nav>
    </header>

    <main>
      <section class="container">
        <img class="logo" src="media/logos/BisitaLogo.png" alt="BisitaLogo" />
        <form class="form" id="book-now-form">
          <div class="input-box">
            <label for="email">Email: </label>
            <input class="input-100" type="email" name="email" id="email" required />
          </div>

          <div class="input-box">
            <label for="destination">To:</label>
            <select class="input-100" id="destination" name="destination" required>
              <option value=""></option>
              <option value="Vista Aplaya">Vista Aplaya</option>
              <option value="Puerto Galera">Puerto Galera</option>
              <option value="Pola Heritage">Pola Heritage</option>
              <option value="Marco Polo">Marco Polo</option>
              <option value="Lasersitas Casitas">Lasersitas Casitas</option>
              <option value="Filipiniana">Filipiniana</option>
              <option value="Infinity Resort">Infinity Resort</option>
            </select>
          </div>

          <div class="column">
            <div class="input-box">
              <label>Check In: </label>
              <input type="date" name="check-in" id="check-in" required />
            </div>

            <div class="input-box">
              <label>Check Out: </label>
              <input type="date" name="check-out" id="check-out" required />
            </div>
          </div>

          <div class="column">
            <div class="input-box">
              <label> Quantity: </label>
              <input type="quantity" name="quantity" id="quantity" required />
            </div>
            <div class="input-box">
              <label>Promo Code: </label>
              <input type="promo" name="promo-code" id="promo-code"/>
            </div>
          </div>

         
			<div class="button">
				<button type="button" onclick="sendMail()">BOOK NOW</button>
			</div>

			
			<script src="https://cdn.emailjs.com/dist/email.min.js"></script>
			<script>
				function sendMail(){
					(function(){
						emailjs.init("CBVnaLxalV_N6xYlQ"); 
					})();
				
					let email = document.getElementById("email").value;
					let destination = document.getElementById("destination").value;
					let checkIn = document.getElementById("check-in").value;
					let checkOut = document.getElementById("check-out").value;
					let quantity = document.getElementById("quantity").value;
					let promoCode = document.getElementById("promo-code").value;
					
					console.log("Email:", email);
					console.log("Destination:", destination);
					console.log("Check-in:", checkIn);
					console.log("Check-out:", checkOut);
					console.log("Quantity:", quantity);
					console.log("Promo Code:", promoCode);

					let params = {
						to_Email: email,
						destination: destination,
						checkIn: checkIn,
						checkOut: checkOut,
						quantity: quantity,
						promoCode: promoCode
					};
					
					console.log(params);

					emailjs.send("service_ka4wnay", "template_9ibz8vd", params)
					.then( res => {
						alert("An email has been sent");
            window.location.reload();
					})
					.catch(function (error){
						console.error('Failed to send email:', error); 
						alert("Failed to register. Please try again later."); 
					});
				}
			</script>


        </form>
      </section>
    </main>

    <footer>
      <a href=""><img class="website-logo" src="media/logos/BisitaLogo2.png" alt="logo" /></a>
      <p class="copyright">© Copyright 2024, SamSan Tech.</p>
      <nav class="soc-meds">
        <ul>
          <li><a href="">FACEBOOK</a></li>
          <li><a href="">TWITTER</a></li>
          <li><a href="">INSTAGRAM</a></li>
        </ul>
      </nav>
    </footer>

    <script src="scripts/book-now.js"></script>

  </body>
</html>
