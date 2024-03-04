<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles/global.css" />
    <link rel="stylesheet" href="styles/about-us.css" />
    <title>Our Team</title>
  </head>

  <body>
    <header>
      <a href="home.html"
        ><img class="website-logo" src="media/logos/BisitaLogo.png" alt="logo"
      /></a>
      <nav>
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="destinations.php">Destinations</a></li>
          <li><a href="offers.php">Offers</a></li>
          <li><a class="current-page" href="about-us.php">About us</a></li>
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
      <div class="heading">
        <h1>Let's keep in touch <span class="block">ABOUT US</span></h1>
      </div>

      <div class="filter">
        <div class="container">
          <h3>SAMSAN TECH 2024</h3>
          <p>
            At Bisita.ph, we believe everyone deserves to have a website that
            can make their gala easier. With new innovation and simplicity makes
            us happy. We're excited to help you on your journey. Have a safe
            flight!
          </p>
        </div>
        <div class="team-card">
          <div class="card">
            <div class="img-sect">
              <img src="media/about_us/ampoloquio.jpg" alt="nico" />
            </div>
            <div class="content">
              <h4>Nico S. Ampoloquio</h4>
              <p>Junior Developer</p>
            </div>
          </div>
          <div class="card">
            <div class="img-sect">
              <img src="media/about_us/lumaoang.jpg" alt="salma" />
            </div>
            <div class="content">
              <h4>Salma A. Lumaoang</h4>
              <p>Web Designer</p>
            </div>
          </div>
          <div class="card">
            <div class="img-sect">
              <img src="media/about_us/legaspino.jpg" alt="michi" />
            </div>
            <div class="content">
              <h4>Michi Legaspino</h4>
              <p>Project Manager</p>
            </div>
          </div>
          <div class="card">
            <div class="img-sect">
              <img src="media/about_us/aguila.jpg" alt="meka" />
            </div>
            <div class="content">
              <h4>Mekaila Aguila</h4>
              <p>Business Analyst</p>
            </div>
          </div>
          <div class="card">
            <div class="img-sect">
              <img src="media/about_us/muday.jpg" alt="einha" />
            </div>
            <div class="content">
              <h4>Einha Alliah G. Muday</h4>
              <p>Senior Developer</p>
            </div>
          </div>
        </div>
      </div>
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
  </body>
</html>
