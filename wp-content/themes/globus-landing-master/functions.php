<?php
/**
 * globus-landing-master functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package globus-landing-master
 */

if ( ! function_exists( 'globus_landing_master_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function globus_landing_master_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on globus-landing-master, use a find and replace
		 * to change 'globus-landing-master' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'globus-landing-master', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'globus-landing-master' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'globus_landing_master_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'globus_landing_master_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function globus_landing_master_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'globus_landing_master_content_width', 640 );
}
add_action( 'after_setup_theme', 'globus_landing_master_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function globus_landing_master_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'globus-landing-master' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'globus-landing-master' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'globus_landing_master_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function globus_landing_master_scripts() {
	
	/*
   * Подключаем стили:
   * Аргументы:
   * 1) название стиля (может быть любым)
   * 2) путь к файлу
   */
	// для локальных стилей
	wp_enqueue_style( 'globus-landing-master-jquery-ui-style', 'https://code.jquery.com/ui/1.10.4/themes/flick/jquery-ui.css' );
	wp_enqueue_style( 'globus-landing-master-jq-ui-slider', get_template_directory_uri() . '/css/jquery-ui-slider-pips.css' );
	wp_enqueue_style( 'globus-landing-master-libs', get_template_directory_uri() . '/css/libs.min.css' );
	wp_enqueue_style( 'globus-landing-master-styles', get_template_directory_uri() . '/css/styles.min.css' );
	wp_enqueue_style( 'globus-landing-master-fancybox', get_template_directory_uri() . '/css/jquery.fancybox.css' );
	wp_enqueue_style( 'globus-landing-master-style', get_template_directory_uri() . '/css/slick.css' );
	wp_enqueue_style( 'globus-landing-master-fonts', 'https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i&amp;subset=cyrillic' );
	
	wp_enqueue_style( 'globus-landing-master-style', get_stylesheet_uri() );
	
	// для внешних стилей
	//wp_enqueue_style( 'artcraft-style', 'http://domain.com/style.css' );
	/*
	 * Подключаем скрипты:
	 * Аргументы:
	 * 1) название скрипта (может быть любым)
	 * 2) путь к файлу
	 * 3) после каких скриптов подгружать (лучше указать пустой массив
	 * 4) версия (оставляем пустые кавычки)
	 * 5) подключение в футере (true = да, false = нет)
	 */
	wp_enqueue_script( 'globus-landing-master-js-jq', get_template_directory_uri() . '/js/jquery-3.2.1.js', [], '', true );
	wp_enqueue_script( 'globus-landing-master-js-fb', get_template_directory_uri() . '/js/jquery.fancybox.js', [], '', true );
	wp_enqueue_script( 'globus-landing-master-js-ji', get_template_directory_uri() . '/js/jquery.inputmask.bundle.js', [], '', true );
	wp_enqueue_script( 'globus-landing-master-js-ph', get_template_directory_uri() . '/js/phone.js', [], '', true );
	wp_enqueue_script( 'globus-landing-master-js-ph-ru', get_template_directory_uri() . '/js/phone-ru.js', [], '', true );
	wp_enqueue_script( 'globus-landing-master-jq-ui-js', 'https://code.jquery.com/ui/1.11.1/jquery-ui.js', [], '', true );
	wp_enqueue_script( 'globus-landing-master-js-jq-tp', get_template_directory_uri() . '/js/jquery.ui.touch-punch.min.js', [], '', true );
	wp_enqueue_script( 'globus-landing-master-js-jq-slider', get_template_directory_uri() . '/js/jquery-ui-slider-pips.js', [], '', true );
	wp_enqueue_script( 'globus-landing-master-js-owl-car', get_template_directory_uri() . '/js/owl.carousel.min.js', [], '', true );
	wp_enqueue_script( 'globus-landing-master-js-all', 'https://use.fontawesome.com/releases/v5.0.6/js/all.js', [], '', true );
	wp_enqueue_script( 'globus-landing-master-js-jsmin', get_template_directory_uri() . '/js/script.min.js', [], '', true );
	wp_enqueue_script( 'globus-landing-master-script_form', get_template_directory_uri() . '/js/script_form.js', [], '', true );
	wp_enqueue_script( 'globus-landing-master-ACMap', get_template_directory_uri() . '/js/ACMap.js', [], '', true );
	wp_enqueue_script( 'globus-landing-master-map', get_template_directory_uri() . '/js/map-init.js', [], '', true );
	wp_enqueue_script( 'globus-landing-table', get_template_directory_uri() . '/js/jquery.tablesorter.js', [], '', true );
	/*wp_enqueue_script( 'globus-landing-master-js-jq', get_template_directory_uri() . '/js/jquery-3.2.1.js', [], '', true );*/
	
	/*
    * Добавляем возможность отправлять AJAX-запросы к скриптам
    * Аргументы:
    * 1) название скрипта, в котором будем писать ajax
    * 2) название объекта, к которому будем обращаться в файле скрипта
    * 3) элементы объекта, которые нам нужны (путь к обработчику аякса, путь к папке темы)
    */
	wp_localize_script( 'globus-landing-master-script_form', 'myajax',
		[
			'url' => admin_url( 'admin-ajax.php' ),
			'template' => get_template_directory_uri()
		]
	);
	
	wp_localize_script( 'globus-landing-master-map', 'myajax',
		[
			'url' => admin_url( 'admin-ajax.php' ),
			'template' => get_template_directory_uri()
		]
	);

	wp_enqueue_script( 'globus-landing-master-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'globus-landing-master-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	
	
	
	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'globus_landing_master_scripts' );

/**
 * Load custom functions
 */
require get_template_directory() . '/includes/custom-functions.php';


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load custom functions
 */
//require get_template_directory() . '/includes/custom-functions.php';
//count posts
function get_posts_count_per_cat($cat = 0) {
	global $wpdb;
	return $wpdb->get_var("select count from $wpdb->term_taxonomy where term_id = $cat");
}

//post option
function _action_theme_wp_print_styles() {
	if (!defined('FW')) return; // prevent fatal error when the framework is not active
	
	global $post;
	
	if (!$post || $post->post_type != 'post') {
		return;
	}
	
	$option_value = fw_get_db_post_option($post->ID, 'body-color');
	
	echo '<style type="text/css">'
	     . 'body { '
	     . 'border: 30px solid '. esc_html($option_value) .'; '
	     . '}'
	     . '</style>';
}
add_action('wp_print_styles', '_action_theme_wp_print_styles');

/**
 * Customizer taxonomy.
 */
register_nav_menus(array(
	'menu 1'    => 'Городская недвижимость',    //Название месторасположения меню в шаблоне
	'menu 2' => 'Загородная недвижимость',      //Название другого месторасположения меню в шаблоне
	'menu 3' => 'Футер',      //Название другого месторасположения меню в шаблоне,
	'menu 4' => 'Футер2',      //Название другого месторасположения меню в шаблоне
	'menu 5' => 'Футер3'      //Название другого месторасположения меню в шаблоне
));


function add_menuclass($ulclass) {
	return preg_replace('/<a /', '<a class="header__nav-link header__nav-link_list"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');

function _filter_my_custom_breadcrumbs_items( $items ) {
	// do some changes ...
	return $items;
}
add_filter( 'fw_ext_breadcrumbs_build', '_filter_my_custom_breadcrumbs_items' );

/*Добавляем алмин страницу*/
add_action('admin_menu', function(){
	add_menu_page( 'Страница импорта EXCELL', 'Импорт EXCEL', 'manage_options', 'site-options', 'add_my_setting', '', 75 );
} );

// функция отвечает за вывод страницы настроек
// подробнее смотрите API Настроек: http://wp-kama.ru/id_3773/api-optsiy-nastroek.html
function add_my_setting(){
	?>
	<div class="wrap">
		<h2><?php echo get_admin_page_title() ?></h2>
		
		<?php
		// settings_errors() не срабатывает автоматом на страницах отличных от опций
		if( get_current_screen()->parent_base !== 'options-general' )
			settings_errors('название_опции');
		?>
		
<!--		<form action="options.php" method="POST">-->
<!--			--><?php
//			settings_fields("opt_group");     // скрытые защитные поля
//			do_settings_sections("opt_page"); // секции с настройками (опциями).
//			submit_button();
//			?>
<!--		</form>-->
		<?php require get_template_directory() . '/includes/loadfile.php';?>
	</div>
	<?php
	
}