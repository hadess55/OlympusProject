import Swiper from "swiper/bundle";
import "./bootstrap";
import "flowbite";
import "preline";
import Alpine from 'alpinejs';

// Carousel
const carousel = document.getElementById("carouselSlides");
const nextButton = document.getElementById("nextButton");
const prevButton = document.getElementById("prevButton");

let currentIndex = 0;
const totalSlides = carousel.children.length;

function updateCarousel() {
    const offset = -currentIndex * 100;
    carousel.style.transform = `translateX(${offset}%)`;
}

function nextSlide() {
    currentIndex = (currentIndex + 1) % totalSlides;
    updateCarousel();
}
function prevSlide() {
    currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
    updateCarousel();
}
let slideInterval = setInterval(nextSlide, 3000);

nextButton.addEventListener("click", () => {
    clearInterval(slideInterval);
    nextSlide();
    slideInterval = setInterval(nextSlide, 3000);
});

prevButton.addEventListener("click", () => {
    clearInterval(slideInterval);
    prevSlide();
    slideInterval = setInterval(nextSlide, 3000);
});

var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 32,
    loop: true,
    centeredSlides: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 32,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 32,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 32,
        },
    },
});

// alpine js
window.Alpine = Alpine;
Alpine.start();
