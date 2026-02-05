<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Top promo bar -->
<div class="site-topbar">
  <div class="wrap">Now You Can Launch Your App With Easy Monthly Payment Options! <a href="#" class="topbar-cta">LEARN MORE</a></div>
</div>

<header class="site-header">
  <div class="wrap header-inner">
    <div class="site-branding">
      <?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
        the_custom_logo();
      } else { ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo">
          <img src="https://appscrip-website.s3.us-east-2.amazonaws.com/wp-content/uploads/2021/02/28160319/Appscrip-Logo.svg" alt="<?php bloginfo( 'name' ); ?>" />
        </a>
      <?php } ?>
    </div>

    <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="Primary Menu">
      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'primary-menu', 'menu_id' => 'primary-menu', 'fallback_cb' => false ) ); ?>
    </nav>

    <!-- Mobile slide-in drawer -->
    <div class="mobile-drawer" id="mobile-drawer" aria-hidden="true">
      <div class="mobile-drawer__panel" role="dialog" aria-modal="true" aria-label="Mobile Menu">
        <div class="mobile-drawer__header">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo">
            <img src="https://appscrip-website.s3.us-east-2.amazonaws.com/wp-content/uploads/2021/02/28160319/Appscrip-Logo.svg" alt="<?php bloginfo( 'name' ); ?>" />
          </a>
          <button class="mobile-drawer__close" aria-label="Close menu">×</button>
        </div>
        <nav class="mobile-drawer__nav" aria-label="Mobile Menu">
          <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'mobile-menu', 'menu_id' => 'mobile-menu', 'fallback_cb' => false ) ); ?>
        </nav>
      </div>
      <button class="mobile-drawer__backdrop" aria-label="Close menu"></button>
    </div>

    <!-- Mega menu (Products) -->
    <div class="mega-menu" id="mega-products" aria-hidden="true">
      <div class="wrap mega-menu__inner">
        <div class="mega-menu__left">
          <div class="mega-grid">
            <a class="mega-item" href="#">
              <span class="mega-icon">◎</span>
              <span class="mega-text">
                <strong>Super App</strong>
                <span>Launch your own All-in-One Super App like Grab and Gojek</span>
              </span>
            </a>
            <a class="mega-item" href="#">
              <span class="mega-icon">◎</span>
              <span class="mega-text">
                <strong>Delivery Marketplace</strong>
                <span>Kickstart your on-demand delivery business</span>
              </span>
            </a>
            <a class="mega-item" href="#">
              <span class="mega-icon">◎</span>
              <span class="mega-text">
                <strong>Taxi Booking</strong>
                <span>Launch your own Taxi Booking App like Uber and Lyft</span>
              </span>
            </a>

            <a class="mega-item" href="#">
              <span class="mega-icon">◎</span>
              <span class="mega-text">
                <strong>Chat &amp; Audio/Video Call</strong>
                <span>Streamline your call and chat infrastructure</span>
              </span>
            </a>
            <a class="mega-item" href="#">
              <span class="mega-icon">◎</span>
              <span class="mega-text">
                <strong>Healthcare Platforms</strong>
                <span>Launch your own doctor appointment booking app</span>
              </span>
            </a>
            <a class="mega-item" href="#">
              <span class="mega-icon">◎</span>
              <span class="mega-text">
                <strong>Social Media</strong>
                <span>Launch your own social media app with our pre-built solutions</span>
              </span>
            </a>

            <a class="mega-item" href="#">
              <span class="mega-icon">◎</span>
              <span class="mega-text">
                <strong>Professional Service Marketplace</strong>
                <span>Launch your own professional services marketplace</span>
              </span>
            </a>
            <a class="mega-item" href="#">
              <span class="mega-icon">◎</span>
              <span class="mega-text">
                <strong>E-Commerce Marketplace</strong>
                <span>Launch your own e-commerce platform like amazon &amp; etsy</span>
              </span>
            </a>
            <a class="mega-item" href="#">
              <span class="mega-icon">◎</span>
              <span class="mega-text">
                <strong>Transportation Management System</strong>
                <span>Digitally transform your logistics / truck business</span>
              </span>
            </a>

            <a class="mega-item" href="#">
              <span class="mega-icon">◎</span>
              <span class="mega-text">
                <strong>Gen-AI</strong>
                <span>Build your own custom AI chatbot</span>
              </span>
            </a>
            <a class="mega-item" href="#">
              <span class="mega-icon">◎</span>
              <span class="mega-text">
                <strong>IoT Platform</strong>
                <span>Optimize IoT operations with the best SaaS IoT Platform</span>
              </span>
            </a>
          </div>

          <a href="#" class="mega-cta">SEE ALL PRODUCTS →</a>
        </div>

        <div class="mega-menu__right">
          <div class="mega-card">
            <h4>Creator Marketplace</h4>
            <p>Launch your own Content creator marketplace like onlyfans</p>
          </div>
          <div class="mega-card">
            <h4>Online Dating</h4>
            <p>Launch your own dating app like Tinder and Bumble</p>
          </div>
        </div>
      </div>
    </div>

    <div class="header-actions">
      <a href="tel:+1234567890" class="phone-btn" aria-label="Call us">📞</a>
      <a href="#contact" class="btn btn-outline contact-btn">Contact Us</a>
    </div>

    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">☰</button>
  </div>
</header>
