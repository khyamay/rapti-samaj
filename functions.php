<?php 
update_option('siteurl','http://raptisamajuk.iamkhem.com');
update_option('home','http://raptisamajuk.iamkhem.com');
//Enabling Custom Menu

add_theme_support('menus');

//Linking CSS
function theme_styles(){
	wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css');
	wp_enqueue_style('960', get_template_directory_uri() . '/css/960.css');
	wp_enqueue_style('googlefont', 'http://fonts.googleapis.com/css?family=Nunito');
	wp_enqueue_style('main', get_template_directory_uri() . '/style.css');
}
    add_action('wp_enqueue_scripts', 'theme_styles');


?>