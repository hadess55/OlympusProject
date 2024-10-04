import Swiper from "swiper/bundle";
import "./bootstrap";
import "flowbite";
import "preline";

const carousel = document.getElementById("carouselSlides");
const nextButton = document.getElementById("nextButton");
const prevButton = document.getElementById("prevButton");

let currentIndex = 0;
const totalSlides = carousel.children.length;

// Fungsi untuk memperbarui posisi carousel
function updateCarousel() {
    const offset = -currentIndex * 100; // Menghitung posisi slide dalam persen
    carousel.style.transform = `translateX(${offset}%)`;
}

// Fungsi untuk slide berikutnya
function nextSlide() {
    currentIndex = (currentIndex + 1) % totalSlides;
    updateCarousel();
}

// Fungsi untuk slide sebelumnya
function prevSlide() {
    currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
    updateCarousel();
}

// Interval otomatis
let slideInterval = setInterval(nextSlide, 3000); // Ganti slide setiap 3 detik

// Menambah event listener untuk tombol navigasi
nextButton.addEventListener("click", () => {
    clearInterval(slideInterval); // Hentikan otomatisasi saat pengguna mengklik
    nextSlide();
    slideInterval = setInterval(nextSlide, 3000); // Mulai kembali otomatisasi
});

prevButton.addEventListener("click", () => {
    clearInterval(slideInterval); // Hentikan otomatisasi saat pengguna mengklik
    prevSlide();
    slideInterval = setInterval(nextSlide, 3000); // Mulai kembali otomatisasi
});
