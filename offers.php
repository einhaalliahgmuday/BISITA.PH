<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="styles/global.css" />
    <link rel="stylesheet" href="styles/offers.css" />
  </head>
  <body>
    <header>
      <a href=""
        ><img class="website-logo" src="media/logos/BisitaLogo.png" alt="logo"
      /></a>
      <nav>
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="destinations.php">Destinations</a></li>
          <li><a class="current-page" href="offers.php">Offers</a></li>
          <li><a href="about-us.php">About us</a></li>
          <li><a class="book-now" href="book-now.php">BOOK NOW</a></li>
          <?php if (isset($_SESSION["username"])) { ?>
          <li><a href="logout.php">Logout</a></li>
          <?php } else { ?>
          <li><a href="sign-up.html">Login</a></li>
          <?php } ?>
        </ul>
      </nav>
    </header>
    <main>
      <section class="offers-container">
        <img
          class="offers-bg"
          src="media/offers/Background_FirstPage.jpg"
          alt=""
        />
        <div class="offers-content">
          <div class="discount-container">
            <div class="dark-overlay-hover discount-item discount-student">
              <p class="dark-overlay-hover-text">
                50% OFF FOR FRESH GRADUATE STUDENT
              </p>
            </div>
            <div class="dark-overlay-hover discount-item discount-pwd">
              <p class="dark-overlay-hover-text">
                20% OFF FOR PERSONS WITH DISABILITIES (PWDs)
              </p>
            </div>
            <div class="dark-overlay-hover discount-item discount-seniors">
              <p class="dark-overlay-hover-text">
                20% OFF FOR <span class="block">SENIOR CITIZENS</span>
              </p>
            </div>
          </div>
          <section>
            <div class="accreditations-gradient-top"></div>
            <div class="accreditations-container">
              <a class="cebu-pacific-logo" href=""
                ><img src="media/logos/cebu-pacific-logo.png" alt=""
              /></a>
              <a class="phil-airlines-logo" href=""
                ><img src="media/logos/phil-airlines-logo.png" alt=""
              /></a>
              <a class="twogo-logo" href=""
                ><img src="media/logos/2go-logo.png" alt=""
              /></a>
              <a class="love-the-phil-logo" class="twogo-logo" href=""
                ><img src="media/logos/love-the-phil-logo.png" alt=""
              /></a>
              <a class="bdo-logo" class="twogo-logo" href=""
                ><img src="media/logos/bdo-logo.png" alt=""
              /></a>
              <a class="kku-travel-logo" href=""
                ><img src="media/logos/kku-travel-logo.png" alt=""
              /></a>
            </div>
            <div class="accreditations-gradient-bottom"></div>
          </section>
        </div>
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
    <script src="scripts/global.js"></script>
  </body>
</html>
