<?php

/**
 * Include Theme Customizer.
 *
 * @since v1.0
 */
$theme_customizer = get_template_directory() . '/inc/customizer.php';
if ( is_readable( $theme_customizer ) ) {
	require_once $theme_customizer;
}


/**
 * Include Support for wordpress.com-specific functions.
 *
 * @since v1.0
 */
$theme_wordpresscom = get_template_directory() . '/inc/wordpresscom.php';
if ( is_readable( $theme_wordpresscom ) ) {
	require_once $theme_wordpresscom;
}


/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since v1.0
 */
if ( ! isset( $content_width ) ) {
	$content_width = 800;
}


/**
 * General Theme Settings.
 *
 * @since v1.0
 */
if ( ! function_exists( 'starter_pack_setup_theme' ) ) :
	function starter_pack_setup_theme() {
		// Make theme available for translation: Translations can be filed in the /languages/ directory.
		load_theme_textdomain( 'starter_pack', get_template_directory() . '/languages' );

		// Theme Support.
		add_theme_support( 'title-tag' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
				'navigation-widgets',
			)
		);


		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );
		// Add support for full and wide alignment.
		add_theme_support( 'align-wide' );
		// Add support for editor styles.
		add_theme_support( 'editor-styles' );
		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );

		// Default Attachment Display Settings.
		update_option( 'image_default_align', 'none' );
		update_option( 'image_default_link_type', 'none' );
		update_option( 'image_default_size', 'large' );

		// Custom CSS-Styles of Wordpress Gallery.
		add_filter( 'use_default_gallery_style', '__return_false' );
	}
	add_action( 'after_setup_theme', 'starter_pack_setup_theme' );

	// Disable Block Directory: https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/filters/editor-filters.md#block-directory
	remove_action( 'enqueue_block_editor_assets', 'wp_enqueue_editor_block_directory_assets' );
	remove_action( 'enqueue_block_editor_assets', 'gutenberg_enqueue_block_editor_assets_block_directory' );
endif;

function themename_custom_logo_setup() {
    $defaults = array(
//        'height'               => 100,
//        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true,
    );

    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );



/**
 * Fire the wp_body_open action.
 *
 * Added for backwards compatibility to support pre 5.2.0 WordPress versions.
 *
 * @since v2.2
 */
if ( ! function_exists( 'wp_body_open' ) ) :
	function wp_body_open() {
		/**
		 * Triggered after the opening <body> tag.
		 *
		 * @since v2.2
		 */
		do_action( 'wp_body_open' );
	}
endif;

/**
 * Nav menus.
 *
 * @since v1.0
 */
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
			'header-menu'   => 'Header Menu',
			'footer-menu' => 'Footer Menu',
            'languages-menu' => 'Languages Menu',
		)
	);
}

/**
 * Loading All CSS Stylesheets and Javascript Files.
 *
 * @since v1.0
 */
function starter_pack_scripts_loader() {
	$theme_version = wp_get_theme()->get( 'Version' ) + 1;

	// 1. Styles.
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), $theme_version, 'all' );
	//wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', array(), $theme_version, 'all' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', array(), $theme_version, 'all' );
	// main.scss: Compiled Framework source + custom styles.

	if ( is_rtl() ) {
		wp_enqueue_style( 'rtl', get_template_directory_uri() . '/assets/css/rtl.css', array(), $theme_version, 'all' );
	}

	// 2. Scripts.
	wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/assets/js/main.js', array(), $theme_version, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'starter_pack_scripts_loader' );



function webp_upload_mimes( $existing_mimes ) {
    // add webp to the list of mime types
    $existing_mimes['webp'] = 'image/webp';
    $existing_mimes['webm'] = 'video/webm';
    $existing_mimes['mp4'] = 'video/mp4';
    $existing_mimes['svg'] = 'image/svg+xml';
    // return the array back to the function with our added mime type
    return $existing_mimes;
}
add_filter( 'mime_types', 'webp_upload_mimes' );
add_action('wp_head', 'href_head');

function href_head(){
	echo '<script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<script src="/wp-content/themes/starter/wow.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>';
}


// turn off Emoji в WordPress
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );	
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );	
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
  }
  add_action( 'init', 'disable_emojis' );
  
  // turn off Emoji в редакторі Gutenberg
  function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
	  return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
	  return array();
	}
  }


//   remove fonts default
  function remove_default_fonts() {
    wp_dequeue_style( 'open-sans' );
    wp_dequeue_style( 'dashicons' );
}
add_action( 'wp_enqueue_scripts', 'remove_default_fonts' );


function wp_custom_contact_form_script() {
    wp_enqueue_script( 'custom-contact-form-script', get_template_directory_uri() . '/src/js/contact-form-script.js', array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'wp_custom_contact_form_script' );

function wp_process_contact_form() {
    if ( isset( $_POST['name'] ) && isset( $_POST['phone'] ) && isset( $_POST['email'] ) ) {
        $name    = sanitize_text_field( $_POST['name'] );
        $phone   = sanitize_text_field( $_POST['phone'] );
        $email   = sanitize_email( $_POST['email'] );
        $message = sanitize_text_field( $_POST['message'] );

        // Далее можете добавить свою логику обработки формы, например, отправку данных по электронной почте или сохранение в базу данных.

        // Пример отправки письма с данными формы
        $to      = 'support@barko-capital.com'; // Укажите свой адрес электронной почты
        $subject = 'New Contact Form Submission';
        $body    = "Name: $name\nPhone: $phone\nEmail: $email\nMessage: $message";
        $headers = array( 'Content-Type: text/html; charset=UTF-8' );

        wp_mail( $to, $subject, $body, $headers );

        // Дополнительный код, который вы хотите выполнить после успешной обработки формы

       // wp_redirect( get_permalink() ); // Редирект обратно на текущую страницу после обработки формы
        exit;
    }
}
add_action( 'init', 'wp_process_contact_form' );






function custom_theme_settings() {
    add_settings_section(
        'custom_theme_settings_section',
        'Custom theme settings section',
        'custom_theme_settings_callback',
        'general'
    );

    // Поле для русского номера телефона
    add_settings_field(
        'russian_phone',
        'Номер телефона (Русский)',
        'russian_phone_callback',
        'general',
        'custom_theme_settings_section'
    );

    // Поле для UK номера телефона
    add_settings_field(
        'uk_phone',
        'Номер телефона (UK)',
        'uk_phone_callback',
        'general',
        'custom_theme_settings_section'
    );

    // Поле для кипрского номера телефона
    add_settings_field(
        'cyprus_phone',
        'Номер телефона (Кипр)',
        'cyprus_phone_callback',
        'general',
        'custom_theme_settings_section'
    );

    // Поле для Email
    add_settings_field(
        'email',
        'Email',
        'email_callback',
        'general',
        'custom_theme_settings_section'
    );

    // Поле для location
    add_settings_field(
        'location',
        'Местоположение',
        'location_callback',
        'general',
        'custom_theme_settings_section'
    );

    add_settings_field(
        'company_name',
        'Наименование компании',
        'company_name_callback',
        'general',
        'custom_theme_settings_section'
    );

    // Регистрация настроек
    register_setting('general', 'russian_phone');
    register_setting('general', 'uk_phone');
    register_setting('general', 'cyprus_phone');
    register_setting('general', 'email');
    register_setting('general', 'location');
    register_setting('general', 'company_name');
}

function custom_theme_settings_callback() {
    echo '<p>Управляйте настройками темы здесь.</p>';
}

function russian_phone_callback() {
    $russian_phone = get_option('russian_phone');
    echo '<input type="text" name="russian_phone" value="' . esc_attr($russian_phone) . '" />';
}

function uk_phone_callback() {
    $uk_phone = get_option('uk_phone');
    echo '<input type="text" name="uk_phone" value="' . esc_attr($uk_phone) . '" />';
}

function cyprus_phone_callback() {
    $cyprus_phone = get_option('cyprus_phone');
    echo '<input type="text" name="cyprus_phone" value="' . esc_attr($cyprus_phone) . '" />';
}

function email_callback() {
    $email = get_option('email');
    echo '<input type="email" name="email" value="' . esc_attr($email) . '" />';
}

function location_callback() {
    $location = get_option('location');
    echo '<input type="text" name="location" value="' . esc_attr($location) . '" />';
}

function company_name_callback() {
    $company_name = get_option('company_name');
    echo '<input type="text" name="company_name" value="' . esc_attr($company_name) . '" />';
}


add_action('admin_init', 'custom_theme_settings');