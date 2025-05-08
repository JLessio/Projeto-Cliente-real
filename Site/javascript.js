// Ativa o Swiper
new Swiper('.swiper', {
    slidesPerView: 1,
    spaceBetween: 20,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      }
    }
  });
  
  // Menu hamburguer toggle com animação
  document.addEventListener("DOMContentLoaded", () => {
    const toggle = document.querySelector(".menu-toggle");
    const nav = document.querySelector(".nav-menu");
  
    toggle.addEventListener("click", () => {
      nav.classList.toggle("active");
    });
  });
  