const slider = document.getElementById('slider');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');

let currentIndex = 0;

const slideItems = document.querySelectorAll('.slider-item');
const totalSlides = slideItems.length;

function updateSlider() {
  const offset = -currentIndex * 100; // Geser slider berdasarkan indeks
  slider.style.transform = `translateX(${offset}%)`;
}

prevBtn.addEventListener('click', () => {
  currentIndex = (currentIndex - 1 + totalSlides) % totalSlides; // Geser ke kiri
  updateSlider();
});

nextBtn.addEventListener('click', () => {
  currentIndex = (currentIndex + 1) % totalSlides; // Geser ke kanan
  updateSlider();
});
