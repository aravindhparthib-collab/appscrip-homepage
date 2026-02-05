document.addEventListener('DOMContentLoaded', function () {
  const items = document.querySelectorAll('.faq-item');

  items.forEach(item => {
    const btn = item.querySelector('.faq-q');
    const panel = item.querySelector('.faq-a');
    // initialize
    panel.style.maxHeight = '0px';
    panel.style.overflow = 'hidden';
    btn.setAttribute('aria-expanded', 'false');

    btn.addEventListener('click', () => {
      const open = item.classList.toggle('open');
      if (open) {
        // expand to content height
        panel.style.maxHeight = panel.scrollHeight + 'px';
        btn.setAttribute('aria-expanded', 'true');
      } else {
        // collapse
        panel.style.maxHeight = '0px';
        btn.setAttribute('aria-expanded', 'false');
      }
    });

    btn.addEventListener('keydown', (e) => {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        btn.click();
      }
    });
  });
});
