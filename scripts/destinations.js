// Get reference to elements
const galleryItems = document.querySelectorAll(".gallery-item a");
const galleryContainer = document.querySelector(".gallery-container");
const content1H1 = document.querySelector(".content-1 h1");
const content1P = document.querySelector(".content-1 p");
const filipiniana = document.getElementById("Filipiniana");
const marco = document.getElementById("Marco");
const pola = document.getElementById("Pola");
const puerto = document.getElementById("Puerto");
const infinity = document.getElementById("Infinity");
const lasersita = document.getElementById("Lasersita");
const vista = document.getElementById("Vista");

// Add click event listeners to each gallery item
galleryItems.forEach((item) => {
  item.addEventListener("click", function (event) {
    event.preventDefault(); // Prevent default link behavior

    // Change background video
    const video = document.querySelector(".background-video");
    video.setAttribute("src", this.href); // Update the src attribute

    // Change content-1 h1 and paragraph based on the alt attribute of the clicked image
    const alt = this.querySelector("img").alt;
    switch (alt) {
      case "Filipiniana":
        content1H1.textContent = "FILIPINIANA CALAPAN";
        content1P.textContent =
          "A Taste of Urban Living. A 60-hectare prime residential commercial landmark in Calapan City, an integral part of the 100-hectare foremost property development.";
        this.parentElement.style.display = "none";
        lasersita.style.display = "none";
        vista.style.display = "none ";
        marco.style.display = "block";
        pola.style.display = "block";
        puerto.style.display = "block";
        infinity.style.display = "block";
        break;
      case "Marco":
        content1H1.textContent = "MARCO POLO";
        content1P.textContent =
          "Built in 1998 and last renovated in 2012, Marco Polo Davao Hotel boasts a timeless elegance that combines modern comforts with traditional Filipino hospitality.";
        this.parentElement.style.display = "none";
        vista.style.display = "none";
        filipiniana.style.display = "none ";
        pola.style.display = "block";
        puerto.style.display = "block";
        infinity.style.display = "block";
        lasersita.style.display = "block";
        break;
      case "Pola":
        content1H1.textContent = "POLA HERITAGE";
        content1P.textContent =
          "Awaiting the brave and adventure is a network of towering mountains, labyrinthine, unspoiled waterways and captivating shores.";
        this.parentElement.style.display = "none";
        filipiniana.style.display = "none";
        marco.style.display = "none ";
        puerto.style.display = "block";
        infinity.style.display = "block";
        lasersita.style.display = "block";
        vista.style.display = "block";
        break;
      case "Puerto":
        content1H1.textContent = "PUERTO GALERA";
        content1P.textContent =
          "Offer Complete Amenities for a Convenient Stay. Book You Hotel Room with Us Today! Enjoy Quality Hotel Accommodations while You Are Away from home.";
        this.parentElement.style.display = "none";
        marco.style.display = "none";
        pola.style.display = "none ";
        infinity.style.display = "block";
        lasersita.style.display = "block";
        vista.style.display = "block";
        filipiniana.style.display = "block";
        break;
      case "Infinity":
        content1H1.textContent = "INFINITY RESORT";
        content1P.textContent =
          "Infinity Resort and Spa is the finest and most recognized boutique resort in Puerto Galera, Orientad Mindoro. Situated in a 2-hectare property, this resort is the premier travel destination that offers great package deals resulting to an endless opportunity of the enchanting exploration.";
        this.parentElement.style.display = "none";
        pola.style.display = "none";
        puerto.style.display = "none ";
        lasersita.style.display = "block";
        vista.style.display = "block";
        filipiniana.style.display = "block";
        marco.style.display = "block";
        break;
      case "Lasersita":
        content1H1.textContent = "LASERSITA CASITAS";
        content1P.textContent =
          "The choice Water Spa Resort destination in Mansalay, Oriental Mindoro integrating the values of nature and people while showcasing the best features of our resort.";
        this.parentElement.style.display = "none";
        puerto.style.display = "none";
        infinity.style.display = "none ";
        vista.style.display = "block";
        filipiniana.style.display = "block";
        marco.style.display = "block";
        pola.style.display = "block";
        break;
      case "Vista":
        content1H1.textContent = "VISTA APALAYA";
        content1P.textContent =
          "Vista Aplaya is a family-owned beachfront resort in Anilao, Batangas that offers relaxation and recreational. Its infinity pool that seems to stretch to the seas and its prime dive spot location are not to miss!";
        this.parentElement.style.display = "none";
        infinity.style.display = "none";
        lasersita.style.display = "none ";
        filipiniana.style.display = "block";
        marco.style.display = "block";
        pola.style.display = "block";
        puerto.style.display = "block";
        break;
      // Add more cases for other gallery items if needed
    }

    // Replace the gallery images with the new set based on the alt attribute of the clicked image
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const suggestions = [
    "Filipiniana Hotel",
    "Marco Polo",
    "Puerto Galera",
    "Infinity Resort",
    "Lasersita Resort",
    "Vista Aplaya",
  ];
  const searchInput = document.querySelector(".search-input");
  const searchButton = document.querySelector(".search-button");

  // Add click event listener to the search button
  searchButton.addEventListener("click", function () {
    const searchTerm = searchInput.value.trim().toLowerCase();
    performSearch(searchTerm);
  });

  // Function to perform search and update content and background video
  function performSearch(searchTerm) {
    const content1H1 = document.querySelector(".content-1 h1");
    const content1P = document.querySelector(".content-1 p");
    const backgroundVideo = document.querySelector(".background-video");

    // Check if the search term matches any of the predefined suggestions
    const matchingSuggestion = suggestions.find(
      (suggestion) => suggestion.toLowerCase() === searchTerm
    );

    if (matchingSuggestion) {
      // Update the content based on the matching suggestion
      const content = searchTermsToContent[matchingSuggestion.toLowerCase()];
      content1H1.textContent = content.title;
      content1P.textContent = content.description;
      backgroundVideo.setAttribute("src", content.videoUrl);
    } else {
      // Handle case where no matching suggestion is found
      alert("No matching destination found.");
    }
  }

  // Map search terms to corresponding content and background video URLs
  const searchTermsToContent = {
    "filipiniana hotel": {
      title: "FILIPINIANA CALAPAN",
      description:
        "A Taste of Urban Living. A 60-hectare prime residential commercial landmark in Calapan City, an integral part of the 100-hectare foremost property development.",
      videoUrl: "../DESTINATIONS/Videos/Filipiniana Calapan.mp4",
    },
    "marco polo": {
      title: "MARCO POLO",
      description:
        "Built in 1998 and last renovated in 2012, Marco Polo Davao Hotel boasts a timeless elegance that combines modern comforts with traditional Filipino hospitality.",
      videoUrl: "../DESTINATIONS/Videos/Marco Polo.mp4",
    },
    "puerto galera": {
      title: "PUERTO GALERA",
      description:
        "Offer Complete Amenities for a Convenient Stay. Book You Hotel Room with Us Today! Enjoy Quality Hotel Accommodations while You Are Away from home.",
      videoUrl: "../DESTINATIONS/Videos/Puerto Galera.mp4",
    },
    "infinity resort": {
      title: "INFINITY RESORT",
      description:
        "Infinity Resort and Spa is the finest and most recognized boutique resort in Puerto Galera, Orientad Mindoro. Situated in a 2-hectare property, this resort is the premier travel destination that offers great package deals resulting to an endless opportunity of the enchanting exploration.",
      videoUrl: "../DESTINATIONS/Videos/Infinity Resort.mp4",
    },
    "lasersita resort": {
      title: "LASERSITA CASITAS",
      description:
        "The choice Water Spa Resort destination in Mansalay, Oriental Mindoro integrating the values of nature and people while showcasing the best features of our resort.",
      videoUrl: "../DESTINATIONS/Videos/Lasersita Casitas.mp4",
    },
    "vista aplaya": {
      title: "VISTA APALAYA",
      description:
        "Vista Aplaya is a family-owned beachfront resort in Anilao, Batangas that offers relaxation and recreational. Its infinity pool that seems to stretch to the seas and its prime dive spot location are not to miss!",
      videoUrl: "../DESTINATIONS/Videos/Vista Aplaya.mp4",
    },
  };
});
