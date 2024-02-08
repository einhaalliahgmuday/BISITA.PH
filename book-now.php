<?php
  session_start();

  if (!isset($_SESSION["username"])) {
    header("Location: sign-up.html");
  }

  $message = null;

  if (isset($_SESSION["messages"])) {
    $message = array_pop($_SESSION["messages"]);
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
      <a href="home.html"
        ><img class="website-logo" src="media/logos/BisitaLogo.png" alt="logo"
      /></a>
      <nav>
        <ul>
          <li><a  href="home.html">Home</a></li>
          <li><a href="destinations.html">Destinations</a></li>
          <li><a href="offers.html">Offers</a></li>
          <li><a href="about-us.html">About us</a></li>
          <li>
            <a class="book-now" href="book-now.php">BOOK NOW</a>
          </li>
        </ul>
      </nav>
    </header>
    <main>
      <section class="container">
        <img class="logo" src="media/logos/BisitaLogo.png" alt="BisitaLogo" />
        <form action="php_servers/book_now_server.php" method="POST" class="form">
          <div class="input-box">
            <label for="email">Email: </label>
            <input
              class="input-100"
              type="email"
              name="email"
              id="email"
              required
            />
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
              <input type="promo" name="promo-code" id="promo"/>
            </div>
          </div>

          <div class="button">
            <button type="submit">BOOK NOW</button>
          </div>
        </form>
      </section>
    </main>
    <footer>
      <a href="home.html"
        ><img class="website-logo" src="media/logos/BisitaLogo2.png" alt="logo"
      /></a>
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
