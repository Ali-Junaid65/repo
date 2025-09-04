document.addEventListener("DOMContentLoaded", function () {
  const accordionButtons = document.querySelectorAll(".accordion-button");

  accordionButtons.forEach((button) => {
    button.addEventListener("click", function () {
      // Toggle the icon between + and -
      const icon = this.querySelector(".icon");
      if (this.classList.contains("collapsed")) {
        icon.textContent = "+";
      } else {
        icon.textContent = "-";
      }
    });
  });
});















// Cards JS




const list = document.querySelector(".list");

function handleClick(direction) {
  const itemWidth = list.querySelector(".item").offsetWidth;
  const scrollAmount = direction === "next" ? itemWidth : -itemWidth;
  list.scrollBy({ left: scrollAmount, behavior: "smooth" });
}

function autoClickNext() {
  setInterval(() => {
    const itemWidth = list.querySelector(".item").offsetWidth;
    const totalScrollWidth = list.scrollWidth - list.clientWidth;
    const currentScrollLeft = list.scrollLeft;

    if (currentScrollLeft >= totalScrollWidth - itemWidth) {
      // If we've reached the end, scroll back to the beginning
      list.scrollTo({ left: 0, behavior: "smooth" });
    } else {
      // Otherwise, move to the next item
      handleClick("next");
    }
  }, 5000);
}

function scaleItems() {
  const items = document.querySelectorAll(".item");
  const listRect = list.getBoundingClientRect();

  items.forEach((item) => {
    const itemRect = item.getBoundingClientRect();
    const isCentered = Math.abs(itemRect.left + itemRect.width / 2 - listRect.left - listRect.width / 2) < itemRect.width / 2;

    if (isCentered) {
      item.style.transform = "scale(1.05)";
      item.style.transition = "transform 0.4s ease";
    } else {
      item.style.transform = "scale(0.9)";
    }
  });
}

// Initialize scaling and auto-scroll on load
window.addEventListener("load", () => {
  const itemWidth = list.querySelector(".item").offsetWidth;
  list.scrollLeft = itemWidth; // Start from the second item
  scaleItems();
  autoClickNext();
});

// Scale items on scroll
list.addEventListener("scroll", scaleItems);

// Enable swipe functionality for mobile devices
let startX = 0;

list.addEventListener("touchstart", (e) => {
  startX = e.touches[0].clientX;
});

list.addEventListener("touchmove", (e) => {
  const touchX = e.touches[0].clientX;
  const deltaX = startX - touchX;
  list.scrollBy({ left: deltaX, behavior: "smooth" });
  startX = touchX; // Update the starting position for smooth swipe
});



// Cards Ender 















window.onscroll = function () {
  var floatingButton = document.getElementById("floatingButton");

  if (window.pageYOffset > window.innerHeight) {
    floatingButton.classList.add("visible");
  } else {
    floatingButton.classList.remove("visible");
  }
};

window.onload = function () {
  if (window.pageYOffset <= window.innerHeight) {
    document.getElementById("floatingButton").classList.remove("visible");
  }
};

document
  .getElementById("floatingButton")
  .addEventListener("click", function () {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  });


  
// Get all buttons and studio content
const buttons = document.querySelectorAll(".studio_btn");
const studios = document.querySelectorAll(".studio_content");

// Function to remove active class from all buttons and studios
const deactivateAll = () => {
  buttons.forEach((btn) => {
    btn.classList.remove("active_studio");
    btn.classList.remove("active_cus");
  });
  studios.forEach((studio) => studio.classList.remove("active_studio"));
};

// Function to activate the clicked button and its respective studio
const activateStudio = (btn) => {
  deactivateAll();
  btn.classList.add("active_studio", "active_cus"); // Add both active classes
  const studioNumber = btn.getAttribute("data-studio");
  document
    .getElementById(`studio${studioNumber}`)
    .classList.add("active_studio");
};

// Set up event listeners for all buttons
buttons.forEach((btn) => {
  btn.addEventListener("click", () => activateStudio(btn));
});

// Set the first button and its studio as active by default
buttons[0].classList.add("active_studio", "active_cus");
document.getElementById("studio1").classList.add("active_studio");


