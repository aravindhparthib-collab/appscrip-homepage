document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('consultForm');
  if (!form) return;

  const responseBox = form.querySelector('.form-response');

  form.addEventListener('submit', function (e) {
    e.preventDefault();

    const name = form.querySelector('#cf-name').value.trim();
    const email = form.querySelector('#cf-email').value.trim();
    const phone = form.querySelector('#cf-phone').value.trim();
    const ideas = form.querySelector('#cf-ideas').value.trim();

    if (!name || !email) {
      showResponse('Please enter your name and email.', true);
      return;
    }

    // Fake submit: show loading state and success response
    const submitBtn = form.querySelector('button[type="submit"]');
    const origText = submitBtn.textContent;
    submitBtn.textContent = 'Sending...';
    submitBtn.disabled = true;

    setTimeout(() => {
      submitBtn.disabled = false;
      submitBtn.textContent = origText;
      form.reset();
      showResponse('Thanks! Your request has been sent. We will contact you shortly.');
    }, 900);

    function showResponse(msg, isError) {
      responseBox.hidden = false;
      responseBox.textContent = msg;
      responseBox.style.color = isError ? '#D9534F' : '#0b9d7f';
      setTimeout(() => { responseBox.hidden = true; }, 6000);
    }
  });
});
