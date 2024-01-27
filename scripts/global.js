const darkOverlayItems = document.querySelectorAll(".dark-overlay-hover");

for (let i = 0; i < darkOverlayItems.length; i++) {
  let darkOverlayItem = darkOverlayItems[i];
  let darkOverlayItemText = darkOverlayItem.querySelector("p");

  darkOverlayItem.addEventListener("mouseenter", function () {
    darkOverlayItemText.style.opacity = "1";
  });

  darkOverlayItem.addEventListener("mouseleave", function () {
    darkOverlayItemText.style.opacity = "0";
  });
}
