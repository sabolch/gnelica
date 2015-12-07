<?php
/**
 * gnelitsa functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gnelitsa
 */

if ( ! function_exists( 'gnelitsa_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function gnelitsa_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on gnelitsa, use a find and replace
	 * to change 'gnelitsa' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'gnelitsa', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'gnelitsa' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'gnelitsa_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // gnelitsa_setup
add_action( 'after_setup_theme', 'gnelitsa_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gnelitsa_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'gnelitsa_content_width', 640 );
}
add_action( 'after_setup_theme', 'gnelitsa_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gnelitsa_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'gnelitsa' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'gnelitsa_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function gnelitsa_scripts() {
	wp_enqueue_style( 'gnelitsa-style', get_stylesheet_uri() );

	wp_enqueue_script( 'gnelitsa-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'gnelitsa-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gnelitsa_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


add_action('init', 'slider_register');
function slider_register() {
    $args = array(
        'label'               => __('Слайдер'),
        'labels'              => array(
            'name'               => __('Слайдер'),
            'singular_name'      => __('Слайдер'),
            'menu_name'          => __('Слайдер'),
            'all_items'          => __('Все Слайдеры'),
            'add_new'            => _x('Добавить Слайдер', 'slider'),
            'add_new_item'       => __('Новый Слайдер'),
            'edit_item'          => __('Редактировать Слайдер'),
            'new_item'           => __('Новый Слайдер'),
            'view_item'          => __('Слайдеры'),
            'not_found'          => __('Слайдер не найден'),
            'not_found_in_trash' => __('Удаленных Слайдеров нет'),
            'search_items'       => __('Найти Слайдер')
        ),
        'description'         => __('Слайдер'),
        'public'              => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_nav_menus'   => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'supports'            => array(
            'title',
            'editor',
            'thumbnail',
   'excerpt',
   'custom-fields',
   
        ),
        'has_archive'         => false,
        'rewrite'             => array(
            'slug'       => '',
            'with_front' => false
        )
    );
    register_post_type('slider', $args);
}

add_action('init', 'review_register');
function review_register() {
    $args = array(
        'label'               => __('Отзывы'),
        'labels'              => array(
            'name'               => __('Отзывы'),
            'singular_name'      => __('Отзывы'),
            'menu_name'          => __('Отзывы'),
            'all_items'          => __('Все отзывы'),
            'add_new'            => _x('Добавить отзыв', 'review'),
            'add_new_item'       => __('Новый отзыв'),
            'edit_item'          => __('Редактировать отзыв'),
            'new_item'           => __('Новый отзыв'),
            'view_item'          => __('Отзыв'),
            'not_found'          => __('отзыв не найден'),
            'not_found_in_trash' => __('Удаленных отзывов нет'),
            'search_items'       => __('Найти отзыв')
        ),
        'description'         => __('Отзывы'),
        'public'              => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_nav_menus'   => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'supports'            => array(
            'title',
            'editor',
            'thumbnail',
   'excerpt',
   'custom-fields',
   
        ),
        'has_archive'         => false,
        'rewrite'             => array(
            'slug'       => 'review',
            'with_front' => false
        )
    );
    register_post_type('review', $args);
}

add_action('init', 'video_review_register');
function video_review_register() {
    $args = array(
        'label'               => __('Видео Отзывы'),
        'labels'              => array(
            'name'               => __('Видео Отзывы'),
            'singular_name'      => __('Видео Отзывы'),
            'menu_name'          => __('Видео Отзывы'),
            'all_items'          => __('Все Видео отзывы'),
            'add_new'            => _x('Добавить Видео отзыв', 'video_review'),
            'add_new_item'       => __('Новый Видео отзыв'),
            'edit_item'          => __('Редактировать Видео отзыв'),
            'new_item'           => __('Новый Видео отзыв'),
            'view_item'          => __('Видео Отзыв'),
            'not_found'          => __('Видео отзыв не найден'),
            'not_found_in_trash' => __('Удаленных Видео отзывов нет'),
            'search_items'       => __('Найти Видео отзыв')
        ),
        'description'         => __('Видео Отзывы'),
        'public'              => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_nav_menus'   => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'supports'            => array(
            'title',
            'editor',
            'thumbnail',
   'excerpt',
   'custom-fields',
   
        ),
        'has_archive'         => false,
        'rewrite'             => array(
            'slug'       => 'video_review',
            'with_front' => false
        )
    );
    register_post_type('video_review', $args);
}

add_action('init', 'partner_register');
function partner_register() {
    $args = array(
        'label'               => __('Партнеры'),
        'labels'              => array(
            'name'               => __('Партнеры'),
            'singular_name'      => __('Партнеры'),
            'menu_name'          => __('Партнеры'),
            'all_items'          => __('Все Партнеры'),
            'add_new'            => _x('Добавить Партнера', 'partner'),
            'add_new_item'       => __('Новый Партнер'),
            'edit_item'          => __('Редактировать Партнера'),
            'new_item'           => __('Новый Партнер'),
            'view_item'          => __('Партнер'),
            'not_found'          => __('Партнер не найден'),
            'not_found_in_trash' => __('Удаленных Партнеров нет'),
            'search_items'       => __('Найти Партнера')
        ),
        'description'         => __('Партнеры'),
        'public'              => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_nav_menus'   => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'supports'            => array(
            'title',
            'editor',
            'thumbnail',
   'excerpt',
   'custom-fields',
   
        ),
        'has_archive'         => false,
        'rewrite'             => array(
            'slug'       => 'partner',
            'with_front' => false
        )
    );
    register_post_type('partner', $args);
}

add_action('init', 'about_register');
function about_register() {
    $args = array(
        'label'               => __('О докторе'),
        'labels'              => array(
            'name'               => __('О докторе'),
            'singular_name'      => __('О докторе'),
            'menu_name'          => __('О докторе'),
            'all_items'          => __('Все записи о докторе'),
            'add_new'            => _x('Добавить запись о докторе', 'about'),
            'add_new_item'       => __('Новая запись о докторе'),
            'edit_item'          => __('Редактировать запись о докторе'),
            'new_item'           => __('Новая запись о докторе'),
            'view_item'          => __('О докторе'),
            'not_found'          => __('Запись о докторе не найдена'),
            'not_found_in_trash' => __('Удаленных записей о докторе нет'),
            'search_items'       => __('Найти запись о докторе')
        ),
        'description'         => __('О докторе'),
        'public'              => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_nav_menus'   => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'supports'            => array(
            'title',
            'editor',
            'thumbnail',
   'excerpt',
   'custom-fields',
   
        ),
        'has_archive'         => false,
        'rewrite'             => array(
            'slug'       => 'about',
            'with_front' => false
        )
    );
    register_post_type('about', $args);
}

add_action('init', 'sert_register');
function sert_register() {
    $args = array(
        'label'               => __('Сертификаты'),
        'labels'              => array(
            'name'               => __('Сертификаты'),
            'singular_name'      => __('Сертификаты'),
            'menu_name'          => __('Сертификаты'),
            'all_items'          => __('Все сертификаты'),
            'add_new'            => _x('Добавить сертификат', 'product'),
            'add_new_item'       => __('Новый сертификат'),
            'edit_item'          => __('Редактировать сертификат'),
            'new_item'           => __('Новый сертификат'),
            'view_item'          => __('Сертификат'),
            'not_found'          => __('Сертификат не найден'),
            'not_found_in_trash' => __('Удаленных сертификатов нет'),
            'search_items'       => __('Найти сертификат')
        ),
        'description'         => __('Сертификаты'),
        'public'              => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_nav_menus'   => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'supports'            => array(
            'title',
            'editor',
            'thumbnail',
   'excerpt',
   'custom-fields',
   
        ),
        'has_archive'         => false,
        'rewrite'             => array(
            'slug'       => 'sert',
            'with_front' => false
        )
    );
    register_post_type('sert', $args);
}

add_action('init', 'video_register');
function video_register() {
    $args = array(
        'label'               => __('Видео'),
        'labels'              => array(
            'name'               => __('Видео'),
            'singular_name'      => __('Видео'),
            'menu_name'          => __('Видео'),
            'all_items'          => __('Все видео'),
            'add_new'            => _x('Добавить видео', 'video'),
            'add_new_item'       => __('Новое видео'),
            'edit_item'          => __('Редактировать видео'),
            'new_item'           => __('Новое видео'),
            'view_item'          => __('Видео'),
            'not_found'          => __('Видео не найдено'),
            'not_found_in_trash' => __('Удаленных видео нет'),
            'search_items'       => __('Найти видео')
        ),
        'description'         => __('Видео'),
        'public'              => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_nav_menus'   => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'supports'            => array(
            'title',
            'editor',
            'thumbnail',
   'excerpt',
   'custom-fields',
   
        ),
        'has_archive'         => false,
        'rewrite'             => array(
            'slug'       => 'video',
            'with_front' => false
        )
    );
    register_post_type('video', $args);
}

add_action('init', 'contacts_register');
function contacts_register() {
    $args = array(
        'label'               => __('Контакты'),
        'labels'              => array(
            'name'               => __('Контакты'),
            'singular_name'      => __('Контакты'),
            'menu_name'          => __('Контакты'),
            'all_items'          => __('Все контакты'),
            'add_new'            => _x('Добавить контакты', 'contacts'),
            'add_new_item'       => __('Новый контакты'),
            'edit_item'          => __('Редактировать контакты'),
            'new_item'           => __('Новые контакты'),
            'view_item'          => __('Контакты'),
            'not_found'          => __('Контакты не найдены'),
            'not_found_in_trash' => __('Удаленных контактов нет'),
            'search_items'       => __('Найти контакты')
        ),
        'description'         => __('Контакты'),
        'public'              => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_nav_menus'   => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'supports'            => array(
            'title',
            'editor',
            'thumbnail',
   'excerpt',
   'custom-fields',
   
        ),
        'has_archive'         => false,
        'rewrite'             => array(
            'slug'       => '',
            'with_front' => false
        )
    );
    register_post_type('contacts', $args);
}

add_action('init', 'contact_block_register');
function contact_block_register() {
    $args = array(
        'label'               => __('Контакт блок'),
        'labels'              => array(
            'name'               => __('Контакт блок'),
            'singular_name'      => __('Контакт блок'),
            'menu_name'          => __('Контакт блок'),
            'all_items'          => __('Все контакт блоки'),
            'add_new'            => _x('Добавить контакт блок', 'contact_block'),
            'add_new_item'       => __('Новый контакт блок'),
            'edit_item'          => __('Редактировать контакт блок'),
            'new_item'           => __('Новый контакт блок'),
            'view_item'          => __('Контакт блок'),
            'not_found'          => __('Контакт блоки не найдены'),
            'not_found_in_trash' => __('Удаленных блоков нет'),
            'search_items'       => __('Найти блоки')
        ),
        'description'         => __('Контакт блок'),
        'public'              => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_nav_menus'   => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'supports'            => array(
            'title',
            'editor',
            'thumbnail',
   'excerpt',
   'custom-fields',
   
        ),
        'has_archive'         => false,
        'rewrite'             => array(
            'slug'       => '',
            'with_front' => false
        )
    );
    register_post_type('contact_block', $args);
}

add_action('init', 'result_register');
function result_register() {
    $args = array(
        'label'               => __('Результат лечения'),
        'labels'              => array(
            'name'               => __('Результат лечения'),
            'singular_name'      => __('Результат лечения'),
            'menu_name'          => __('Результат лечения'),
            'all_items'          => __('Все результаты лечения'),
            'add_new'            => _x('Добавить результат лечения', 'result'),
            'add_new_item'       => __('Новая запись Результат лечения'),
            'edit_item'          => __('Редактировать результат лечения'),
            'new_item'           => __('Новая запись Результат лечения'),
            'view_item'          => __('Результат лечения'),
            'not_found'          => __('Результаты лечения не найдены'),
            'not_found_in_trash' => __('Удаленных результатов лечения блоков нет'),
            'search_items'       => __('Найти результаты лечения')
        ),
        'description'         => __('Результат лечения'),
        'public'              => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_nav_menus'   => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'supports'            => array(
            'title',
            'editor',
            'thumbnail',
   'excerpt',
   'custom-fields',
   
        ),
        'has_archive'         => false,
        'rewrite'             => array(
            'slug'       => '',
            'with_front' => false
        )
    );
    register_post_type('result', $args);
}

add_action('init', 'pacientam_register');
function pacientam_register() {
    $args = array(
        'label'               => __('Пациентам'),
        'labels'              => array(
            'name'               => __('Пациентам'),
            'singular_name'      => __('Пациентам'),
            'menu_name'          => __('Пациентам'),
            'all_items'          => __('Все записи Пациентам'),
            'add_new'            => _x('Добавить запись Пациентам', 'pacientam'),
            'add_new_item'       => __('Новая запись Пациентам'),
            'edit_item'          => __('Редактировать запись Пациентам'),
            'new_item'           => __('Новая запись Пациентам'),
            'view_item'          => __('Пациентам'),
            'not_found'          => __('Запись Пациентам не найдено'),
            'not_found_in_trash' => __('Удаленных записей Пациентам нет'),
            'search_items'       => __('Найти записи Пациентам')
        ),
        'description'         => __('Пациентам'),
        'public'              => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_nav_menus'   => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'supports'            => array(
            'title',
            'editor',
            'thumbnail',
   'excerpt',
   'custom-fields',
   
        ),
        'has_archive'         => false,
        'rewrite'             => array(
            'slug'       => 'pacientam',
            'with_front' => false
        )
    );
    register_post_type('pacientam', $args);
}

add_action('init', 'disease_register');
function disease_register() {
    $args = array(
        'label'               => __('Заболевания'),
        'labels'              => array(
            'name'               => __('Заболевания'),
            'singular_name'      => __('Заболевания'),
            'menu_name'          => __('Заболевания'),
            'all_items'          => __('Заболевания'),
            'add_new'            => _x('Добавить заболевание', 'disease'),
            'add_new_item'       => __('Новое заболевание'),
            'edit_item'          => __('Редактировать заболевание'),
            'new_item'           => __('Новое заболевание'),
            'view_item'          => __('Заболевание'),
            'not_found'          => __('Заболевание не найдено'),
            'not_found_in_trash' => __('Удаленных заболеваний нет'),
            'search_items'       => __('Найти заболевание')
        ),
        'description'         => __('Заболевания'),
        'public'              => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_nav_menus'   => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'supports'            => array(
            'title',
            'editor',
            'thumbnail',
   
   
   
        ),
        'has_archive'         => false,
        'rewrite'             => array(
            'slug'       => 'disease',
            'with_front' => false
        )
    );
    register_post_type('disease', $args);
}

add_action('init', 'disease_category_taxonomy_register', 0);
function disease_category_taxonomy_register() {
    $args = array(
        'labels'            => array(
            'name'                       => _x('Категория', 'disease_category'),
            'singular_name'              => _x('Категория', 'disease_category'),
            'menu_name'                  => __('Категория'),
            'all_items'                  => __('Категория'),
            'new_item_name'              => __('Новая категория'),
            'add_new_item'               => __('Добавить категорию'),
            'edit_item'                  => __('Редактировать категорию'),
            'update_item'                => __('Обновить категорию'),
            'search_items'               => __('Искать категорию'),
            'add_or_remove_items'        => __('Добавить или удалить категорию'),
            'choose_from_most_used'      => __('Выбрать из часто используемых категорий'),
        ),
        'hierarchical'      => true,
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud'     => true,
        'query_var'         => 'disease_category',
        'rewrite'           => array(
            'slug'         => 'disease_category',
            'with_front'   => true,
            'hierarchical' => true,
        ),
    );

    register_taxonomy('disease_category', 'disease', $args);
}


/** 
 * Хлебные крошки для WordPress (breadcrumbs)
 *
 * $sep  - разделитель. По умолчанию ' » '
 * $l10n - массив. для локализации. См. переменную $default_l10n.
 * $args - массив. дополнительные аргументы.
 * version 0.8
*/
function kama_breadcrumbs( $sep = '', $l10n = array(), $args = array() ){
    global $post, $wp_query, $wp_post_types;

    // Локализация
    $default_l10n = array(
        'home'       => 'Главная',
        'paged'      => 'Страница %s',
        '_404'       => 'Ошибка 404',
        'search'     => 'Результаты поиска по запросу - <b>%s</b>',
        'author'     => 'Архив автора: <b>%s</b>',
        'year'       => 'Архив за <b>%s</b> год',
        'month'      => 'Архив за: <b>%s</b>',
        'day'        => '',
        'attachment' => 'Медиа: %s',
        'tag'        => 'Записи по метке: <b>%s</b>',
        'tax_tag'    => '%s из "%s" по тегу: <b>%s</b>',
    );

    // Параметры по умолчанию
    $default_args = array(
        'on_front_page'   => true,  // выводить крошки на главной странице
        'show_post_title' => true,  // показывать ли название записи в конце (последний элемент). Для записей, страниц, вложений
        'sep'             => ' » ', // разделитель
        'markup'          => 'schema.org', // микроразметка. Может быть: rdf.data-vocabulary.org или schema.org
        'priority_tax'    => array('category'), // приоритетные таксономии, если запись в нескольких таксах
    );

    // Фильтрует аргументы по умолчанию.
    $default_args = apply_filters('kama_breadcrumbs_default_args', $default_args );

    $loc  = (object) array_merge( $default_l10n, $l10n );
    $args = (object) array_merge( $default_args, $args );

    if( ! $sep ) $sep = $args->sep;

    // микроразметка ---
    // rdf.data-vocabulary.org
    if( $args->markup == 'rdf.data-vocabulary.org' ){
        $w1 = '<div class="kama_breadcrumbs" prefix="v: http://rdf.data-vocabulary.org/#">';
        $w2 = '</div>';
        $patt1 = '<span typeof="v:Breadcrumb"><a href="%s" rel="v:url" property="v:title">';
        $sep .= '</span>'; // закрываем span после разделителя!
        $linkpatt = $patt1.'%s</a>';
    }
    // schema.org
    elseif( $args->markup == 'schema.org' ){
        $w1 = '<div class="kama_breadcrumbs" vocab="http://schema.org/" typeof="BreadcrumbList">';
        $w2 = '</div>';
        $patt1 = '<span property="itemListElement" typeof="ListItem"><a href="%s" property="item" typeof="WebPage"><span property="name">';
        $sep .= '</span>'; // закрываем span после разделителя!
        $linkpatt = $patt1.'%s</span></a>';     
    }

    $ptype = & $wp_post_types[ $post->post_type ];

    // Вывод
    $pg_end = '';
    if( $paged = $wp_query->query_vars['paged'] ){
        $pg_patt = $patt1;
        $pg_end  = '</a>'. $sep . sprintf( $loc->paged, $paged );
    }

    $out = '';
    if( is_front_page() ){
        return $args->on_front_page ? ( print $w1 .( $paged ? sprintf( $pg_patt, get_bloginfo('url') ) : '' ) . $loc->home . $pg_end . $w2 ) : '';
    }
    elseif( is_404() ){
        $out = $loc->_404; 
    }
    elseif( is_search() ){
        $out = sprintf( $loc->search, strip_tags( $GLOBALS['s'] ) );
    }
    elseif( is_author() ){
        $q_obj = &$wp_query->queried_object;
        $out = ( $paged ? sprintf( $pg_patt, get_author_posts_url( $q_obj->ID, $q_obj->user_nicename ) ):'') . sprintf( $loc->author, $q_obj->display_name ) . $pg_end;
    }
    elseif( is_year() || is_month() || is_day() ){
        $y_url  = get_year_link( $year=get_the_time('Y') );
        $m_url  = get_month_link( $year, get_the_time('m') );
        $y_link = sprintf( $linkpatt, $y_url, $year);
        $m_link = sprintf( $linkpatt, $m_url, get_the_time('F'));
        if( is_year() )
            $out = ( $paged?sprintf( $pg_patt, $y_url):'') . sprintf( $loc->year, $year ) . $pg_end;
        elseif( is_month() )
            $out = $y_link . $sep . ( $paged ? sprintf( $pg_patt, $m_url ) : '') . sprintf( $loc->month, get_the_time('F') ) . $pg_end;
        elseif( is_day() )
            $out = $y_link . $sep . $m_link . $sep . get_the_time('l');
    }

    // Древовидные записи
    elseif( is_singular() && $ptype->hierarchical ){
        $parent = $post->post_parent;
        $crumbs = array();
        while( $parent ){
            $page = & get_post( $parent );
            $crumbs[] = sprintf( $linkpatt, get_permalink( $page->ID ), $page->post_title );
            $parent = $page->post_parent;
        }
        $crumbs = array_reverse( $crumbs );

        foreach( $crumbs as $crumb ) $out .= $crumb . $sep;

        $out = $out . ( $args->show_post_title ? $post->post_title : '');
    }
    // Таксономии, вложения и не древовидные типы записей
    else {
        // Определяем термины
        if( is_singular() ){
            $taxonomies   = get_object_taxonomies( $post->post_type );
            // оставим только древовидные и публичные, мало ли...
            $taxonomies   = array_intersect( $taxonomies, get_taxonomies( array('hierarchical' => true, 'public' => true) ) );
            $priority_tax = array_intersect( $taxonomies, $args->priority_tax ); // пробуем найти приоритетные
            // получаем название вожделенной таксы
            $taxonomy = $priority_tax ? array_shift( $priority_tax ) : array_shift( $taxonomies );

            $pid = ($post->post_parent ? $post->post_parent : $post->ID); // для вложений

            if( $term = get_the_terms( $pid, $taxonomy ) )
                $term = array_shift( $term );
        }
        else
            $term = $wp_query->get_queried_object();

        //if( ! $term && ! is_attachment() ) return print "Error: Taxonomy is not defined!"; 

        if( $term ){
            $term = apply_filters('kama_breadcrumbs_term', $term );

            $pg_term_start = ( $paged && $term->term_id ) ? sprintf( $pg_patt, get_term_link( (int) $term->term_id, $term->taxonomy ) ) : '';

            // attachment
            if( is_attachment() ){
                if( ! $post->post_parent )
                    $out = sprintf( $loc->attachment, $post->post_title );
                else
                    $out = __crumbs_tax( $term->term_id, $term->taxonomy, $sep, $linkpatt ) . sprintf( $linkpatt, get_permalink( $post->post_parent ), get_the_title( $post->post_parent ) ) . $sep . ( $args->show_post_title ? $post->post_title : '');
            }
            // single
            elseif( is_single() ){
                $out = __crumbs_tax( $term->parent, $term->taxonomy, $sep, $linkpatt ) . sprintf( $linkpatt, get_term_link( (int) $term->term_id, $term->taxonomy ), $term->name ). $sep . ( $args->show_post_title ? $post->post_title : '');
            // Метки, архивная страница типа записи, произвольные одноуровневые таксономии
            }
            // taxonomy не древовидная
            elseif( ! is_taxonomy_hierarchical( $term->taxonomy ) ){
                // метка
                if( is_tag() )
                    $out = $pg_term_start . sprintf( $loc->tag, $term->name ) . $pg_end;
                // таксономия
                elseif( is_tax() ){
                    $post_label = $ptype->labels->name;
                    $tax_label = $GLOBALS['wp_taxonomies'][ $term->taxonomy ]->labels->name;
                    $out = $pg_term_start . sprintf( $loc->tax_tag, $post_label, $tax_label, $term->name ) .  $pg_end;
                }
            }
            // Рубрики и таксономии
            else{
                //die( $term->taxonomy );
                $out = __crumbs_tax( $term->parent, $term->taxonomy, $sep, $linkpatt ) . $pg_term_start . $term->name . $pg_end;
            }
        }
    }

    $home_after = '';

    // замена ссылки на архивную страницу для типа записи 
    $home_after = apply_filters('kama_breadcrumbs_home_after', false, $linkpatt, $sep );

    // Cсылка на архивную страницу произвольно типа поста. Ссылку можно заменить с помощью хука 'kama_breadcrumbs_home_after'
    if( ! $home_after && $ptype->has_archive && (is_post_type_archive() || is_singular()) && ! in_array( $post->post_type, array('post','page','attachment') ) ){
        $pt_name = $ptype->labels->name;

        if( is_post_type_archive() && ! $paged )
            $home_after = $pt_name;
        else
            $home_after = sprintf( $linkpatt, get_post_type_archive_link( $post->post_type ), $pt_name ) . ($pg_end ? $pg_end : $sep);
    }

    $home = sprintf( $linkpatt, home_url(), $loc->home ). $sep . $home_after;

    $out = apply_filters('kama_breadcrumbs_pre_out', $out );

    $out = $w1. $home . $out .$w2;

    return print apply_filters('kama_breadcrumbs', $out, $sep );
}
function __crumbs_tax( $term_id, $tax, $sep, $linkpatt ){
    $termlink = array();
    while( (int) $term_id ){
        $term2      = get_term( $term_id, $tax );
        $termlink[] = sprintf( $linkpatt, get_term_link( (int) $term2->term_id, $term2->taxonomy ), $term2->name ). $sep;
        $term_id    = (int) $term2->parent;
    }

    $termlinks = array_reverse( $termlink );

    return implode('', $termlinks );
}

add_action('init', 'talk_register');
function talk_register() {
    $args = array(
        'label'               => __('Вопрос-ответ'),
        'labels'              => array(
            'name'               => __('Вопрос-ответ'),
            'singular_name'      => __('Вопрос-ответ'),
            'menu_name'          => __('Вопрос-ответ'),
            'all_items'          => __('Все вопрос-ответы'),
            'add_new'            => _x('Добавить вопрос-ответ', 'talk'),
            'add_new_item'       => __('Новая запись вопрос-ответ'),
            'edit_item'          => __('Редактировать вопрос-ответ'),
            'new_item'           => __('Новая запись вопрос-ответ'),
            'view_item'          => __('Вопрос-ответ'),
            'not_found'          => __('Вопрос-ответ не найден'),
            'not_found_in_trash' => __('Удаленных вопрос-ответов нет'),
            'search_items'       => __('Найти вопрос-ответ')
        ),
        'description'         => __('Вопрос-ответ'),
        'public'              => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_nav_menus'   => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'supports'            => array(
            'title',
            'editor',
            'thumbnail',
   'excerpt',
   'custom-fields',
   
        ),
        'has_archive'         => false,
        'rewrite'             => array(
            'slug'       => '',
            'with_front' => false
        )
    );
    register_post_type('talk', $args);
}