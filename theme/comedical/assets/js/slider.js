(function () {
  function initSlider(slider) {
    var track = slider.querySelector('.cm-slider__query .wp-block-post-template, .cm-slider__track');
    var prev = slider.querySelector('[data-cm-slider-prev]');
    var next = slider.querySelector('[data-cm-slider-next]');

    if (!track || !prev || !next) {
      return;
    }

    var getStep = function () {
      var firstItem = track.querySelector(':scope > li');
      if (!firstItem) {
        return track.clientWidth * 0.9;
      }

      var itemStyles = window.getComputedStyle(firstItem);
      var marginRight = parseFloat(itemStyles.marginRight) || 0;
      return firstItem.getBoundingClientRect().width + marginRight;
    };

    var updateState = function () {
      var maxLeft = track.scrollWidth - track.clientWidth;
      prev.disabled = track.scrollLeft <= 1;
      next.disabled = track.scrollLeft >= maxLeft - 1;
    };

    prev.addEventListener('click', function () {
      track.scrollBy({ left: -getStep(), behavior: 'smooth' });
    });

    next.addEventListener('click', function () {
      track.scrollBy({ left: getStep(), behavior: 'smooth' });
    });

    track.addEventListener('scroll', updateState, { passive: true });
    window.addEventListener('resize', updateState);

    updateState();
  }

  document.querySelectorAll('[data-cm-slider]').forEach(initSlider);
})();
