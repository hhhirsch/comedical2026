(() => {
  const sliders = document.querySelectorAll('[data-cm-slider]');
  if (!sliders.length) return;

  const setupSlider = (slider) => {
    const viewport = slider.querySelector('[data-cm-slider-viewport]');
    const prevButton = slider.querySelector('[data-cm-slider-prev], .cm-slider__arrow--prev');
    const nextButton = slider.querySelector('[data-cm-slider-next], .cm-slider__arrow--next');

    if (!viewport || !prevButton || !nextButton) return;

    const updateButtonState = () => {
      const maxScrollLeft = Math.max(0, viewport.scrollWidth - viewport.clientWidth);
      prevButton.disabled = viewport.scrollLeft <= 1;
      nextButton.disabled = viewport.scrollLeft >= maxScrollLeft - 1;
    };

    const getScrollStep = () => {
      const firstSlide = viewport.querySelector('.cm-slider__track > li, .cm-slider__track > *');
      const slideWidth = firstSlide ? firstSlide.getBoundingClientRect().width : viewport.clientWidth;
      const track = viewport.querySelector('.cm-slider__track');
      const style = track ? getComputedStyle(track) : null;
      const gap = style ? parseFloat(style.columnGap || style.gap || '0') : 0;
      return slideWidth + gap;
    };

    const scrollByStep = (direction) => {
      viewport.scrollBy({ left: direction * getScrollStep(), behavior: 'smooth' });
    };

    prevButton.addEventListener('click', () => scrollByStep(-1));
    nextButton.addEventListener('click', () => scrollByStep(1));
    viewport.addEventListener('scroll', updateButtonState, { passive: true });
    window.addEventListener('resize', updateButtonState);

    updateButtonState();
  };

  sliders.forEach(setupSlider);
})();
