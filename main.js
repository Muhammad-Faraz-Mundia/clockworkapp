document.addEventListener('DOMContentLoaded', () => {
  const swiper = new Swiper(".mySwiper", {
    slidesPerView: 2,
    spaceBetween: 30,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      }
    }
  });
});



document.addEventListener("DOMContentLoaded", () => {
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
          // Optional: Unobserve after first reveal
          observer.unobserve(entry.target);
        }
      });
    },
    {
      threshold: 0.1 // Adjust how much of the section should be visible before triggering
    }
  );

  document.querySelectorAll(".fade-in").forEach(section => {
    observer.observe(section);
  });
});


// mobile menu

jQuery(document).ready(function() {
  jQuery('button.menu-toggle').on('click', function () {
    const nav = jQuery('nav');

    if (nav.hasClass('open')) {
      nav.removeClass('open');
    } else {
      nav.addClass('open');
    }
  });

})
