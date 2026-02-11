(() => {
  const sliders = document.querySelectorAll('[data-cm-slider]');

  if (!sliders.length) {
    return;
  }

  const setupSlider = (slider) => {
    const viewport = slider.querySelector('[data-cm-slider-viewport]');
    const prevButton = slider.querySelector('[data-cm-slider-prev], .cm-slider__arrow--prev, .cm-slider__nav--prev');
    const nextButton = slider.querySelector('[data-cm-slider-next], .cm-slider__arrow--next, .cm-slider__nav--next');

    if (!viewport || !prevButton || !nextButton) {
      return;
    }

    if (!viewport.hasAttribute('tabindex')) {
      viewport.setAttribute('tabindex', '0');
    }

    const updateButtonState = () => {
      const maxScrollLeft = Math.max(0, viewport.scrollWidth - viewport.clientWidth);
      const isAtStart = viewport.scrollLeft <= 1;
      const isAtEnd = viewport.scrollLeft >= maxScrollLeft - 1;

      prevButton.disabled = isAtStart;
      nextButton.disabled = isAtEnd;
      prevButton.setAttribute('aria-disabled', String(isAtStart));
      nextButton.setAttribute('aria-disabled', String(isAtEnd));
    };

    const getScrollStep = () => {
      const firstSlide = viewport.querySelector('.cm-slider__track > li, .cm-slider__track > *');
      const slideWidth = firstSlide ? firstSlide.getBoundingClientRect().width : viewport.clientWidth;
      const track = viewport.querySelector('.cm-slider__track');
      const trackStyle = track ? window.getComputedStyle(track) : null;
      const gap = trackStyle ? parseFloat(trackStyle.columnGap || trackStyle.gap || '0') : 0;
      return slideWidth + gap;
    };

    const scrollByStep = (direction) => {
      viewport.scrollBy({ left: direction * getScrollStep(), behavior: 'smooth' });
    };

    prevButton.addEventListener('click', () => {
      scrollByStep(-1);
    });

    nextButton.addEventListener('click', () => {
      scrollByStep(1);
    });

    viewport.addEventListener('keydown', (event) => {
      if (event.key === 'ArrowLeft') {
        event.preventDefault();
        scrollByStep(-1);
      }

      if (event.key === 'ArrowRight') {
        event.preventDefault();
        scrollByStep(1);
      }
    });

    viewport.addEventListener('scroll', updateButtonState, { passive: true });
    window.addEventListener('resize', updateButtonState);

    updateButtonState();
  };

  sliders.forEach(setupSlider);
})();
