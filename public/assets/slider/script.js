document.addEventListener("DOMContentLoaded", function () {
  const slider = document.querySelector(".slider");
  const slides = document.querySelectorAll(".slider img");
  const dots = document.querySelectorAll(".dot");
  const slideCount = slides.length;
  let currentIndex = 0;

  const updateCarousel = (index) => {
    slider.style.transform = `translateX(-${index * 100}%)`;
    dots.forEach((dot, idx) => {
      dot.classList.toggle("active", idx === index);
    });
    currentIndex = index;
  };

  // Add click events to dots
  dots.forEach((dot, index) => {
    dot.addEventListener("click", () => {
      updateCarousel(index);
    });
  });

  // Auto-slide functionality
  setInterval(() => {
    const nextIndex = (currentIndex + 1) % slideCount;
    updateCarousel(nextIndex);
  }, 3000); // Adjust the interval time as needed
});
