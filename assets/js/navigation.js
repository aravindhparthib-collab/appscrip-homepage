/* navigation.js - simple mobile menu toggle
   Adds/removes .open on .primary-menu and toggles aria-expanded on the button */

document.addEventListener('DOMContentLoaded', function(){
  const toggle = document.querySelector('.menu-toggle');
  const menu = document.querySelector('.primary-menu');
  const mobileDrawer = document.querySelector('.mobile-drawer');
  const mobileClose = document.querySelector('.mobile-drawer__close');
  const mobileBackdrop = document.querySelector('.mobile-drawer__backdrop');
  const header = document.querySelector('.site-header');
  const topbar = document.querySelector('.site-topbar');

  if(!toggle || !menu) return;

  function openMobileDrawer(){
    if(!mobileDrawer) return;
    mobileDrawer.classList.add('is-open');
    mobileDrawer.setAttribute('aria-hidden','false');
    toggle.setAttribute('aria-expanded','true');
    document.body.classList.add('menu-open');
  }

  function closeMobileDrawer(){
    if(!mobileDrawer) return;
    mobileDrawer.classList.remove('is-open');
    mobileDrawer.setAttribute('aria-hidden','true');
    toggle.setAttribute('aria-expanded','false');
    document.body.classList.remove('menu-open');
  }

  toggle.addEventListener('click', function(e){
    const isOpen = mobileDrawer && mobileDrawer.classList.contains('is-open');
    if(isOpen){
      closeMobileDrawer();
    } else {
      openMobileDrawer();
    }
  });

  // Close menu when clicking outside (mobile)
  if(mobileClose){
    mobileClose.addEventListener('click', closeMobileDrawer);
  }
  if(mobileBackdrop){
    mobileBackdrop.addEventListener('click', closeMobileDrawer);
  }

  // Subscription modal
  const subscribeModal = document.querySelector('#subscribe-modal');
  if(subscribeModal){
    const openModal = () => {
      subscribeModal.classList.add('is-open');
      subscribeModal.setAttribute('aria-hidden', 'false');
    };
    const closeModal = () => {
      subscribeModal.classList.remove('is-open');
      subscribeModal.setAttribute('aria-hidden', 'true');
    };

    setTimeout(openModal, 1200);

    subscribeModal.addEventListener('click', function(e){
      if(e.target.matches('[data-subscribe-close]')){
        closeModal();
      }
    });
  }


  // Mega menu (Products) hover/focus handling for desktop
  const megaMenu = document.querySelector('.mega-menu');
  const megaTrigger = document.querySelector('.primary-menu .mega-menu-trigger');
  const megaLink = megaTrigger ? megaTrigger.querySelector('a') : null;
  let megaCloseTimer = null;

  function isDesktop(){
    return window.matchMedia('(min-width: 901px)').matches;
  }

  function openMega(){
    if(!megaMenu || !isDesktop()) return;
    megaMenu.classList.add('is-open');
    megaMenu.setAttribute('aria-hidden', 'false');
    if(megaLink) megaLink.setAttribute('aria-expanded', 'true');
  }

  function closeMega(){
    if(!megaMenu) return;
    megaMenu.classList.remove('is-open');
    megaMenu.setAttribute('aria-hidden', 'true');
    if(megaLink) megaLink.setAttribute('aria-expanded', 'false');
  }

  function scheduleClose(){
    clearTimeout(megaCloseTimer);
    megaCloseTimer = setTimeout(closeMega, 120);
  }

  function cancelClose(){
    clearTimeout(megaCloseTimer);
  }

  if(megaMenu && megaTrigger && megaLink){
    megaLink.setAttribute('aria-haspopup', 'true');
    megaLink.setAttribute('aria-expanded', 'false');

    megaTrigger.addEventListener('mouseenter', function(){
      cancelClose();
      openMega();
    });
    megaTrigger.addEventListener('mouseleave', scheduleClose);

    megaMenu.addEventListener('mouseenter', function(){
      cancelClose();
      openMega();
    });
    megaMenu.addEventListener('mouseleave', scheduleClose);

    megaTrigger.addEventListener('focusin', function(){
      cancelClose();
      openMega();
    });
    megaTrigger.addEventListener('focusout', function(e){
      if(!megaMenu.contains(e.relatedTarget)){
        scheduleClose();
      }
    });

    megaMenu.addEventListener('focusout', function(e){
      if(!megaTrigger.contains(e.relatedTarget)){
        scheduleClose();
      }
    });

    document.addEventListener('click', function(e){
      if(megaMenu.classList.contains('is-open') && !megaMenu.contains(e.target) && !megaTrigger.contains(e.target)){
        closeMega();
      }
    });
  }

  // Sticky header with smooth animation
  if(header){
    const setSticky = () => {
      const threshold = topbar ? topbar.offsetHeight : 0;
      const shouldStick = window.scrollY > threshold;
      header.classList.toggle('is-sticky', shouldStick);
      document.body.classList.toggle('has-sticky-header', shouldStick);
      document.documentElement.style.setProperty('--sticky-header-height', `${header.offsetHeight}px`);
    };

    setSticky();
    window.addEventListener('scroll', setSticky, { passive: true });
    window.addEventListener('resize', setSticky);
  }
});
