<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="styles/global.css" />
    <link rel="stylesheet" href="styles/destinations.css" />
  </head>
  <body>
    <header>
      <a href=""
        ><img class="website-logo" src="media/logos/BisitaLogo.png" alt="logo"
      /></a>
      <nav>
        <ul>
          <li><a href="home.php">Home</a></li>
          <li>
            <a class="current-page" href="destinations.php">Destinations</a>
          </li>
          <li><a href="offers.php">Offers</a></li>
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
      <video autoplay loop class="background-video" plays-inline>
        <source
          src="media/destinations/videos/Vista Aplaya.mp4"
          type="video/mp4"
        />
      </video>
      <section class="content">
        <div class="content-1">
          <h1>VISTA APLAYA</h1>
          <p>
            Vista Aplaya is a family-owned beachfront resort in Anilao, Batangas
            that offers relaxation and recreational. Its infinity pool that
            seems to stretch to the seas and its prime dive spot location are
            not to miss!
          </p>
          <div class="container-button">
            <a href="book-now.php" class="btn-mark">BOOK NOW</a>
            <i class="fas fa-bookmark"></i>
          </div>
        </div>
        <div class="content-2">
          <div class="oblong-box">
            <input type="text" class="search-input" placeholder="Search" />
            <button class="search-button">
              <i class="fas fa-search search-icon"></i>
            </button>
          </div>
          <div class="gallery-container">
            <div id="Filipiniana" class="gallery-item">
              <a href="media/destinations/videos/Filipiniana Calapan.mp4">
                <img
                  src="media/destinations/images/Filipiniana Hotel.jpeg"
                  alt="Filipiniana"
                />
                <p>Filipiniana Hotel</p>
              </a>
            </div>
            <div id="Marco" class="gallery-item">
              <a href="media/destinations/videos/Marco Polo.mp4">
                <img
                  src="media/destinations/images/Image_MarcoPolo.jpeg"
                  alt="Marco"
                />
                <p>Marco Polo</p>
              </a>
            </div>
            <div id="Pola" class="gallery-item">
              <a href="media/destinations/videos/Pola Heritage.mp4">
                <img
                  src="media/destinations/images/Image_PolaHeritage.jpeg"
                  alt="Pola"
                />
                <p>Pola Heritage</p>
              </a>
            </div>
            <div id="Puerto" class="gallery-item">
              <a href="media/destinations/videos/Puerto Galera.mp4">
                <img
                  src="media/destinations/images/Image_PuertoGalera.jpeg"
                  alt="Puerto"
                />
                <p>Puerto Galera</p>
              </a>
            </div>
            <div id="Infinity" class="gallery-item" style="display: none">
              <a href="media/destinations/videos/Infinity Resort.mp4">
                <img
                  src="media/destinations/images/Infinity Pool.jpeg"
                  alt="Infinity"
                />
                <p>Infinity Resort</p>
              </a>
            </div>
            <div id="Lasersita" class="gallery-item" style="display: none">
              <a href="media/destinations/videos/Lasersita Casitas.mp4">
                <img
                  src="media/destinations/images/LasersitaCasitas.jpeg"
                  alt="Lasersita"
                />
                <p>Lasersita Resort</p>
              </a>
            </div>
            <div id="Vista" class="gallery-item" style="display: none">
              <a href="media/destinations/videos/Vista Aplaya.mp4">
                <img
                  src="media/destinations/images/Image_Vista Apalaya.jpeg"
                  alt="Vista"
                />
                <p>Vista Aplaya</p>
              </a>
            </div>
            <div id="Filipiniana2" class="gallery-item" style="display: none">
              <a href="media/destinations/videos/Filipiniana Calapan.mp4">
                <img
                  src="media/destinations/images/Filipiniana Hotel.jpeg"
                  alt="Filipiniana"
                />
                <p>Filipiniana Hotel</p>
              </a>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer>
      <a href=""
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
    <script src="scripts/destinations.js"></script>
  </body>
</html>
