<?php
/**
 * Bootstrap Basic theme
 * 
 * @package bootstrap-basic
 */


/**
 * Required WordPress variable.
 */

function true_breadcrumbs(){

  // получаем номер текущей страницы
  $page_num = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

  $separator = '<span>/</span>'; //  разделяем обычным слэшем, но можете чем угодно другим

  // если главная страница сайта
  if( is_front_page() ){

    if( $page_num > 1 ) {
      echo '<a href="' . site_url() . '">Главная</a>' . $separator . $page_num . '-я страница';
    } else {
      echo 'Вы находитесь на главной странице';
    }

  } else { // не главная

    echo '<a href="' . site_url() . '">Главная</a>' . $separator;


    if( is_single() ){ // записи

      the_category( ', ' ); echo $separator; the_title();

    } elseif ( is_page() ){ // страницы WordPress

      the_title();

    } elseif ( is_category() ) {

      single_cat_title();

    } elseif( is_tag() ) {

      single_tag_title();

    } elseif ( is_day() ) { // архивы (по дням)

      echo '<a href="' . get_year_link( get_the_time( 'Y' ) ) . '">' . get_the_time( 'Y' ) . '</a>' . $separator;
      echo '<a href="' . get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) ) . '">' . get_the_time( 'F' ) . '</a>' . $separator;
      echo get_the_time('d');

    } elseif ( is_month() ) { // архивы (по месяцам)

      echo '<a href="' . get_year_link( get_the_time( 'Y' ) ) . '">' . get_the_time( 'Y' ) . '</a>' . $separator;
      echo get_the_time('F');

    } elseif ( is_year() ) { // архивы (по годам)

      echo get_the_time( 'Y' );

    } elseif ( is_author() ) { // архивы по авторам

      global $author;
      $userdata = get_userdata( $author );
      echo 'Опубликовал(а) ' . $userdata->display_name;

    } elseif ( is_404() ) { // если страницы не существует

      echo 'Ошибка 404';

    }
    if ( $page_num > 1 ) { // номер текущей страницы
      echo ' (' . $page_num . '-я страница)';
    }


  }

}



add_theme_support('title-tag'); 
function getImgUrl($imgName)
{
    return get_theme_file_uri() . '/img/' . $imgName;
}

// add_image_size( 'workGallery', 555, 495, array( 'center', 'center' ), true );
// add_image_size( 'aboutSlider', 555, 685, array( 'center', 'center' ), true );

// if (!isset($content_width)) {
//     $content_width = 1170;
// }

function load_style(){
    
    // wp_enqueue_style('fontawesome-css', get_template_directory_uri() . '/css/font-awesome/fontawesome.min.css');
    //    wp_enqueue_style('slick-css', get_template_directory_uri() . '/css/slider/slick-theme.css');
    wp_enqueue_style('swiper-css', get_template_directory_uri() . '/css/slider/swiper.min.css');
    wp_enqueue_style('slick-css', get_template_directory_uri() . '/css/slider/slick.css');
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap/bootstrap.min.css');
    wp_enqueue_style('fancy-css', get_template_directory_uri() . '/css/jquery.fancybox.min.css');
    wp_enqueue_style('style-css', get_template_directory_uri().'/css/style.css');
    wp_enqueue_style('fonts-css', get_template_directory_uri().'/fonts/fonts.css');
}
add_action('wp_enqueue_scripts', 'load_style');


function load_scripts(){
    wp_enqueue_script('swiper-js', get_template_directory_uri().'/js/slider/swiper.min.js');
    wp_enqueue_script('slick-js', get_template_directory_uri().'/js/slider/slick.min.js');
    wp_enqueue_script('input-mask', get_template_directory_uri() . '/js/jquery.inputmask.js');
    wp_enqueue_script('fancy-js', get_template_directory_uri() . '/js/jquery.fancybox.min.js');
    wp_enqueue_script('cf7-addon-js', get_template_directory_uri() . '/js/cf7-addon.js');
//    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap/bootstrap.min.js');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js');
    // wp_enqueue_script('popper-js', get_template_directory_uri() . '/js/popper.min.js');
    //Одинаковая высота у блоков
    //wp_enqueue_script('match-height', get_template_directory_uri() . '/js/jquery.matchHeight-min.js');
}

add_action('wp_enqueue_scripts', 'load_scripts');




 add_action('after_setup_theme', 'theme_register_nav_menu');
 function theme_register_nav_menu()
 {
     register_nav_menus(array(
         'main-menu'    => 'Главное меню',    //Название месторасположения меню в шаблоне
         'footer-menu-left' => 'Футер меню левое',      //Название другого месторасположения меню в шаблоне
         'footer-menu-right' => 'Футер меню правое'      //Название другого месторасположения меню в шаблоне
     ));
 }

// // IMG SIZE
// if (function_exists('add_image_size')) {
//     add_image_size('full_hd', 1920, auto);
// }


if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Общие настройки',
        'menu_title' => 'Общие натройки',
        'menu_slug' => 'general_fields',
        'capability' => 'edit_posts'
    ));
}


// ########################### ДОБАВЛЕНИЕ POST_TYPE ###########

 function post_type_services()
 {
     $labels = array(
         'name' => 'Услуги',
         'singular_name' => 'Услуги',
         'all_items' => 'Услуги',
         'menu_name' => 'Услуги' // ссылка в меню в админке
     );
     $args = array(
         'labels' => $labels,
         'public' => true,
         'menu_position' => 5,
         'has_archive' => true,
         'query_var' => "services",
         'supports' => array(
             'title',
             'thumbnail'
         )
     );
     register_post_type('services', $args);
 }
 add_action('init', 'post_type_services');

function post_type_study()
{
  $labels = array(
    'name' => 'Обучение',
    'singular_name' => 'Обучение',
    'all_items' => 'Обучение',
    'menu_name' => 'Обучение' // ссылка в меню в админке
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'menu_position' => 6,
    'has_archive' => true,
    'query_var' => "study",
    'supports' => array(
      'title',
      'thumbnail'
    )
  );
  register_post_type('study', $args);
}
add_action('init', 'post_type_study');

function post_gallery()
{
  $labels = array(
    'name' => 'Галерея',
    'singular_name' => 'Галерея',
    'all_items' => 'Галерея',
    'menu_name' => 'Галерея' // ссылка в меню в админке
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'menu_position' => 6,
    'has_archive' => true,
    'query_var' => "gallery",
    'supports' => array(
      'title',
      'thumbnail'
    )
  );
  register_post_type('gallery', $args);
}
add_action('init', 'post_gallery');
// function post_type_promotions()
// {
//     $labels = array(
//         'name' => 'Акции',
//         'singular_name' => 'Акции',
//         'all_items' => 'Акции',
//         'menu_name' => 'Акции' // ссылка в меню в админке
//     );
//     $args = array(
//         'labels' => $labels,
//         'public' => true,
//         'menu_position' => 5,
//         'has_archive' => true,
//         'query_var' => "promotions",
//         'supports' => array(
//             'title',
//             'thumbnail'
//         )
//     );
//     register_post_type('promotions', $args);
// }
// add_action('init', 'post_type_promotions');

// function post_type_reviews()
// {
//     $labels = array(
//         'name' => 'Отзывы',
//         'singular_name' => 'Отзывы',
//         'all_items' => 'Отзывы',
//         'menu_name' => 'Отзывы' // ссылка в меню в админке
//     );
//     $args = array(
//         'labels' => $labels,
//         'public' => true,
//         'menu_position' => 5,
//         'has_archive' => true,
//         'query_var' => "reviews",
//         'supports' => array(
//             'title',
//             'thumbnail'
//         )
//     );
//     register_post_type('reviews', $args);
// }
// add_action('init', 'post_type_reviews');

// function calculation($data) {

//     $proposial = get_posts(array(
//     'posts_per_page' => -1,
//     'orderby' => 'date',
//     'order' => 'ASC',
//     'post_type' => 'post',
//     'tax_query' => array(
//         array(
//             'taxonomy' => 'category',
//             'field' => 'term_id',
//             'terms' => 5,
//         )
//     )
// ));