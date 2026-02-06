<?php
/**
 * Theme setup and enqueue styles
 */

// Theme support and menu registration
function appscrip_clone_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'appscrip-clone' ),
    ) );
}
add_action( 'after_setup_theme', 'appscrip_clone_setup' );

function appscrip_clone_enqueue_styles() {
    // Google Fonts (Poppins for headings)
    wp_enqueue_style( 'appscrip-google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap', array(), null );

    // Main theme stylesheet (style.css)
    wp_enqueue_style( 'appscrip-style', get_stylesheet_uri(), array('appscrip-google-fonts') );

    // Global CSS
    wp_enqueue_style( 'appscrip-main', get_template_directory_uri() . '/assets/css/main.css', array('appscrip-style'), '1.0' );

    // Front page specific styles (only load on front page)
    if ( is_front_page() ) {
        $front_css_path = get_template_directory() . '/assets/css/front-page.css';
        $front_css_ver = file_exists( $front_css_path ) ? filemtime( $front_css_path ) : '1.0';
        wp_enqueue_style( 'appscrip-front', get_template_directory_uri() . '/assets/css/front-page.css', array('appscrip-main'), $front_css_ver );

        // Client logos stylesheet (front-page additions)
        $logos_css_path = get_template_directory() . '/assets/css/_append_client_logos.css';
        $logos_css_ver = file_exists( $logos_css_path ) ? filemtime( $logos_css_path ) : '1.0';
        wp_enqueue_style( 'appscrip-client-logos', get_template_directory_uri() . '/assets/css/_append_client_logos.css', array('appscrip-front'), $logos_css_ver );
    }

    // Navigation script (mobile menu toggle)
    wp_enqueue_script( 'appscrip-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '1.0', true );
    if ( is_front_page() ) {
        // Testimonials carousel script
        wp_enqueue_script( 'appscrip-carousel', get_template_directory_uri() . '/assets/js/carousel.js', array('appscrip-navigation'), '1.0', true );
        // FAQ script
        wp_enqueue_script('appscrip-faq', get_template_directory_uri() . '/assets/js/faq.js', array(), '1.0', true );
        // Contact form script
        $contact_js_path = get_template_directory() . '/assets/js/contact-form.js';
        $contact_js_ver = file_exists( $contact_js_path ) ? filemtime( $contact_js_path ) : '1.0';
        wp_enqueue_script('appscrip-contact', get_template_directory_uri() . '/assets/js/contact-form.js', array(), $contact_js_ver, true );
    }
}
add_action( 'wp_enqueue_scripts', 'appscrip_clone_enqueue_styles' );

// Add mega menu trigger class to the Products menu item
function appscrip_clone_add_mega_menu_class( $items, $args ) {
    if ( empty( $args->theme_location ) || 'primary' !== $args->theme_location ) {
        return $items;
    }

    foreach ( $items as $item ) {
        if ( isset( $item->title ) && strtolower( $item->title ) === 'products' ) {
            $item->classes[] = 'mega-menu-trigger';
            $item->classes[] = 'menu-item-has-children';
        }
        if ( isset( $item->title ) && strtolower( $item->title ) === 'about' ) {
            $item->classes[] = 'about-menu-trigger';
        }
        if ( isset( $item->title ) && strtolower( $item->title ) === 'resources' ) {
            $item->classes[] = 'resources-menu-trigger';
        }
    }

    return $items;
}
add_filter( 'wp_nav_menu_objects', 'appscrip_clone_add_mega_menu_class', 10, 2 );
