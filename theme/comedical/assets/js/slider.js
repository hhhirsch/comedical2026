(() => {
  const sliders = document.querySelectorAll('[data-cm-slider]');

  if (!sliders.length) {
    return;
  }

  const setupSlider = (slider) => {
    const viewport = slider.querySelector('[data-cm-slider-viewport]');
    const prevButton = slider.querySelector('.cm-slider__arrow--prev');
    const nextButton = slider.querySelector('.cm-slider__arrow--next');

    if (!viewport || !prevButton || !nextButton) {
      return;
    }

    const updateButtonState = () => {
      const maxScrollLeft = viewport.scrollWidth - viewport.clientWidth;
      prevButton.disabled = viewport.scrollLeft <= 1;
      nextButton.disabled = viewport.scrollLeft >= maxScrollLeft - 1;
    };

    const getScrollStep = () => {
      const firstSlide = viewport.querySelector('.cm-slider__track > li');
      const slideWidth = firstSlide ? firstSlide.getBoundingClientRect().width : viewport.clientWidth;
      const track = viewport.querySelector('.cm-slider__track');
      const gap = track ? parseFloat(window.getComputedStyle(track).columnGap || window.getComputedStyle(track).gap || '0') : 0;
      return slideWidth + gap;
    };

    prevButton.addEventListener('click', () => {
      viewport.scrollBy({ left: -getScrollStep(), behavior: 'smooth' });
    });

    nextButton.addEventListener('click', () => {
      viewport.scrollBy({ left: getScrollStep(), behavior: 'smooth' });
    });

    viewport.addEventListener('scroll', updateButtonState, { passive: true });
    window.addEventListener('resize', updateButtonState);

    updateButtonState();
  };

  sliders.forEach(setupSlider);
})();
