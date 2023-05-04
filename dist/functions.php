<?php
add_action('after_setup_theme', function(){

    add_theme_support('custom-logo',array(

        'height' =>60,
        'width '=>100,
        'flex-height'=>false,
        'flex-width'=>true
    ));

    add_theme_support('custom-header');
    add_theme_support('title-tag');




    add_theme_support('post-thumbnails');
    add_theme_support('html5',array(
        'search-form',
        'gallery',
        'caption',
        'style',
        'script',
        'comment-list',
        'comment-form'


    ));
    add_theme_support('responsive-embeds');
    add_theme_support('wp-black-styles');
    add_theme_support('align-wide');
   


});


add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans&family=Oswald:wght@200;400&display=swap');
    wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/7c1106c071.js');
    wp_enqueue_style('dev-style', get_template_directory_uri() . './style.css');
    wp_enqueue_script('main-js', get_template_directory_uri() . './js/main.js');
});

$header_info=array(
    'width'=>980,
    'height'=>60,
    'default-image'=> get_template_directory_uri().'/images/headers/default.jpg'
);
add_theme_support('custom-header', $header_info);
add_action('after_setup_theme', function(){
    register_nav_menus(array(
        'primary' =>__('Haupt Navigation'),
        'footer'  =>__('Footer Navigation')
    ));
});


add_filter('the_content', 'trim_content');
function trim_content($content){
    if(is_archive() || is_home()){
        $content= (strlen($content) <= 500 ) ? $content : wp_html_excerpt($content, 500);
        
    }
    return $content; 
}

add_action('widgets_init', 'sidebar_registrieren');
function sidebar_registrieren(){
    register_sidebar(array(
        'name' => 'Haupt-Sidebar', 
        'id' => 'sidebar-widgets',
        'description' =>'Widgets werden nur auf den Beitragsdetailseiten angezeigt.',
        'before_title' => '<h3 class="widget-title"><span>',
        'after_title'=> '</span></h3>',
        'before_widget' => '<div class="widget %2$s>',
        'after_widget'=> '</div>'
    ));
} 

if(function_exists('acf_add_options_page')){

    acf_add_options_page(array(
        'page_title' => 'Theme Einstellungen',
        'menu_title' => 'Theme Einstellungen',
        'menu_slug' => 'theme-settings',
        'capabilbity' => 'edit_pages',
        'position' => 100,
        'redirect' => false,
        'post_id' => 'options', 
        'icon_url' => 'dashicons-hammer',
        'update_button' => 'Änderungen speichern',
        'updated_message' => 'Einstellungen wurde gespeichert',
        
    ));
    require_once(get_template_directory().'/template_parts/acffields.php');
} else{
    add_action('admin_notice', function(){
        ?>
        <div class="errore notice">
            <p> <?phpecho '<b>ACHTUNG: </b> Das Plugin "ACF Pro" muss installiert werden!'; ?> </p>
        </div>
   <?php });
}

