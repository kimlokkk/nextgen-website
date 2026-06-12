const navToggle = document.querySelector('[data-nav-toggle]');
const mainNav = document.querySelector('[data-main-nav]');

if (navToggle && mainNav) {
  navToggle.addEventListener('click', () => {
    const isOpen = mainNav.classList.toggle('is-open');
    navToggle.setAttribute('aria-expanded', String(isOpen));
  });
}

document.querySelectorAll('[data-nav-dropdown]').forEach((dropdown) => {
  const toggle = dropdown.querySelector('[data-nav-dropdown-toggle]');

  if (!toggle) {
    return;
  }

  toggle.addEventListener('click', () => {
    if (!window.matchMedia('(max-width: 1080px)').matches) {
      dropdown.classList.remove('is-open');
      toggle.setAttribute('aria-expanded', 'false');
      return;
    }

    const isOpen = dropdown.classList.toggle('is-open');
    toggle.setAttribute('aria-expanded', String(isOpen));
  });
});

document.querySelectorAll('[data-gallery-slider]').forEach((slider) => {
  const slides = Array.from(slider.querySelectorAll('[data-gallery-slide]'));
  const dots = Array.from(slider.querySelectorAll('[data-gallery-dot]'));
  const prevButton = slider.querySelector('[data-gallery-prev]');
  const nextButton = slider.querySelector('[data-gallery-next]');

  if (!slides.length) {
    return;
  }

  let currentSlide = 0;

  const showSlide = (index) => {
    currentSlide = (index + slides.length) % slides.length;

    slides.forEach((slide, slideIndex) => {
      slide.classList.toggle('is-active', slideIndex === currentSlide);
    });

    dots.forEach((dot, dotIndex) => {
      dot.classList.toggle('is-active', dotIndex === currentSlide);
    });
  };

  if (prevButton) {
    prevButton.addEventListener('click', () => showSlide(currentSlide - 1));
  }

  if (nextButton) {
    nextButton.addEventListener('click', () => showSlide(currentSlide + 1));
  }

  dots.forEach((dot, dotIndex) => {
    dot.addEventListener('click', () => showSlide(dotIndex));
  });
});
