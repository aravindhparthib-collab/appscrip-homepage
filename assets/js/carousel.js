document.addEventListener('DOMContentLoaded', function () {
  const slider = document.querySelector('.testimonials-slider');
  const btnPrev = document.querySelector('.testimonials-prev');
  const btnNext = document.querySelector('.testimonials-next');
  if (!slider) return;

  const cardWidth = () => {
    const card = slider.querySelector('.testimonial-card');
    if (!card) return 400;
    const style = window.getComputedStyle(card);
    const gap = parseFloat(getComputedStyle(slider).gap) || 28;
    return card.offsetWidth + gap;
  };

  btnPrev && btnPrev.addEventListener('click', function () {
    slider.scrollBy({ left: -cardWidth(), behavior: 'smooth' });
  });

  btnNext && btnNext.addEventListener('click', function () {
    slider.scrollBy({ left: cardWidth(), behavior: 'smooth' });
  });

  // Optional: swipe support for mobile is native; add keyboard support
  slider.addEventListener('keydown', function (e) {
    if (e.key === 'ArrowRight') slider.scrollBy({ left: cardWidth(), behavior: 'smooth' });
    if (e.key === 'ArrowLeft') slider.scrollBy({ left: -cardWidth(), behavior: 'smooth' });
  });

  // Make slider focusable for accessibility
  slider.setAttribute('tabindex', '0');

  // Autoplay with looping and pause-on-interaction
  let autoId = null;
  let restartId = null;
  const AUTO_DELAY = 3000;

  function startAuto() {
    stopAuto();
    autoId = setInterval(() => {
      const maxScroll = slider.scrollWidth - slider.clientWidth;
      if (Math.ceil(slider.scrollLeft) >= maxScroll - 2) {
        slider.scrollTo({ left: 0, behavior: 'smooth' });
      } else {
        slider.scrollBy({ left: cardWidth(), behavior: 'smooth' });
      }
    }, AUTO_DELAY);
  }

  function stopAuto() {
    if (autoId) clearInterval(autoId);
    autoId = null;
  }

  function scheduleRestart(delay = 2500) {
    if (restartId) clearTimeout(restartId);
    restartId = setTimeout(() => startAuto(), delay);
  }

  // Pause while user interacts, then restart
  slider.addEventListener('mouseenter', () => { stopAuto(); });
  slider.addEventListener('mouseleave', () => { scheduleRestart(); });
  slider.addEventListener('touchstart', () => { stopAuto(); });
  slider.addEventListener('touchend', () => { scheduleRestart(); });

  // kick off autoplay
  startAuto();
});