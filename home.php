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
    <link rel="stylesheet" href="styles/home.css" />
  </head>
  <body>
    <header>
      <a href=""
        ><img class="website-logo" src="media/logos/BisitaLogo.png" alt="logo"
      /></a>
      <nav>
        <ul>
          <li><a class="current-page" href="home.php">Home</a></li>
          <li><a href="destinations.php">Destinations</a></li>
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
      <section class="primary-section">
        <video class="video-bg primary-section-video-bg" autoplay muted loop>
          <source src="media/home/home_vid1.mp4" type="video/mp4" />
        </video>
        <div class="primary-section-content">
          <div>
            <h1>
              <span class="h1-welcome-to">WELCOME TO</span>
              <span class="h1-mindoro"
                >MIN<span class="yellow-font">DORO</span></span
              >
            </h1>
            <p>
              Visit the stunning beaches, diverse marine life for snorkeling
              <span class="block">
                and diving, lush rice terraces, vibrant festivals, and delicious
                cuisine.
              </span>
            </p>
          </div>
          <a class="explore-now-link" href="destinations.php">Explore Now</a>
        </div>
      </section>
      <section class="section-features">
        <a class="feature featured-travels" href="#section-bisita-de-mindoro">
          <p>Featured Travels</p>
        </a>
        <a class="feature where-to-go" href="destinations.php">
          <p>Where To Go</p>
        </a>
        <a
          class="feature food-delicacies"
          href="https://travelorientalmindoro.ph/"
        >
          <p>Food Delicacies</p>
        </a>
      </section>
      <section class="section-video-2">
        <video class="video-bg video-bg-2" autoplay muted loop>
          <source src="media/home/home_vid2.mp4" type="video/mp4" />
        </video>
      </section>
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
      <section class="section-bisita-de-mindoro" id="section-bisita-de-mindoro">
        <div class="section-bisita-de-mindoro-content">
          <h2 class="bisita-de-mindoro-text">
            Bisita <span class="yellow-font">de</span> Mindoro
          </h2>
          <p>
            Visit the stunning beaches, diverse marine life for snorkeling
            <span class="block">
              and diving, lush rice terraces, vibrant festivals, and delicious
              cuisine.
            </span>
          </p>
          <div class="bisita-de-mindoro-gallery">
            <div
              class="dark-overlay-hover bisita-de-mindoro-gallery-item bisita-festival"
            >
              <p class="dark-overlay-hover-text">
                Watch colorful festivals such as the Bahaghari Festival and
                Sulyog Festival For something cheery, take the time to watch
                colorful festivals that Oriental Mindoro has to offer.
              </p>
            </div>
            <div
              class="dark-overlay-hover bisita-de-mindoro-gallery-item bisita-turtle"
            >
              <p class="dark-overlay-hover-text">
                One of the most diverse marine ecosystems in the world is found
                in the province — the Verde Island Passage. It stretches through
                the coasts of Batangas, Mindoro, Romblon and Marinduque in 10
                kilometers.The passage has been described by the Smithsonian
                Institute as “the center of the world’s marine biodiversity” due
                to its high concentration of marine species such as fish,
                corals, dolphins, sea turtles, humphead wrasses, giant groupers,
                giant clams, flying fish and luminous plankton.
              </p>
            </div>
            <div
              class="dark-overlay-hover bisita-de-mindoro-gallery-item bisita-boat"
            >
              <p class="dark-overlay-hover-text">
                Thousands of local fishers rely on Yellowfin tuna for their
                livelihood. In Occidental Mindoro, tuna fishing is a way of
                life. Over 1000 fishing vessels benefit from the abundant marine
                life.
              </p>
            </div>
            <div
              class="dark-overlay-hover bisita-de-mindoro-gallery-item bisita-church"
            >
              <p class="dark-overlay-hover-text">
                The common religions on the island fall under Christianity. The
                religion of the indigenous Mangyan population is animism. Though
                they are into animism as a religion, the Catholic Church in some
                of Mindoro's parts is also active.
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer>
      <a href="home.php"
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
