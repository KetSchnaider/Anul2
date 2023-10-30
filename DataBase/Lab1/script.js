const lottieAnimation = lottie.loadAnimation({
  container: document.getElementById("lottie-animation"),
  renderer: "svg",
  loop: true, // Set loop to true to play the animation repeatedly
  autoplay: true,
  path: "animation_lnmuaxr9.json", // Replace with your animation file path
});

document.addEventListener("DOMContentLoaded", function () {
  const btnTransfer = document.getElementById("btntransfer");
  const containerbun = document.getElementById("containerbun");
  btnTransfer.addEventListener("click", function () {
    if (
      containerbun.style.display === "none" ||
      containerbun.style.display === ""
    ) {
      containerbun.style.display = "block";
      btnTransfer.style.display = "none";
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {
  // Get references to the button, div, and the pages
  const btnTransfer = document.getElementById("btntransfer");
  const containerDiv = document.getElementById("containerbun");
  const pages = document.querySelectorAll(".story-text p");

  let currentPage = 0;

  // Function to display the current page and update navigation
  function displayPage() {
    pages.forEach((page, index) => {
      if (index === currentPage) {
        page.style.display = "block";
      } else {
        page.style.display = "none";
      }
    });
  }

  // Initial display
  displayPage();

  // Add a click event listener to the button
  btnTransfer.addEventListener("click", function () {
    containerDiv.style.display = "block";
    btnTransfer.style.display = "none";
  });

  // Add a click event listener to the prevBtn
  document.getElementById("prevBtn").addEventListener("click", function () {
    if (currentPage > 0) {
      currentPage--;
      displayPage();
    }
  });

  // Add a click event listener to the nextBtn
  document.getElementById("nextBtn").addEventListener("click", function () {
    if (currentPage < pages.length - 1) {
      currentPage++;
      displayPage();
    }
  });
});
document.addEventListener("DOMContentLoaded", function () {
  const btnTransfer = document.getElementById("btntransfer");
  const btnTransfer2 = document.getElementById("btntransfer2");
  const containerbun = document.getElementById("containerbun");
  const containerbun2 = document.getElementById("containerbun2");

  function hideButtons() {
    btnTransfer.style.display = "none";
    btnTransfer2.style.display = "none";
  }

  btnTransfer.addEventListener("click", function () {
    containerbun.style.display = "block";
    hideButtons();
  });

  btnTransfer2.addEventListener("click", function () {
    containerbun2.style.display = "block";
    hideButtons();
  });
});










