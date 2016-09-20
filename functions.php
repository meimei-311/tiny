<?php

function my_login_redirect($redirect_to, $request){
	$currentUser = wp_get_current_user();
	if(!empty($currentUser->roles) && in_array('administrator', $currentUser->roles))
   		return admin_url();  // 是管理员
	else
	    return home_url("index.php/user-info/");  // 非管理员
}
add_filter("login_redirect", "my_login_redirect", 10, 3);


/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );



/* 加载进度条插件js */
function wpn_enqueue() {
 wp_enqueue_style( 'nprogresss', get_bloginfo('template_directory').'/css/nprogress.css' );
 wp_enqueue_script( 'nprogress', get_bloginfo('template_directory') . '/js/nprogress.js', array( 'jquery' ), '0.1.2', true );
 wp_enqueue_script( 'wp-nprogress',get_bloginfo('template_directory') . '/js/global.js', array( 'jquery', 'nprogress' ), '0.0.1', true );
}
 
add_action( 'wp_enqueue_scripts', 'wpn_enqueue' );
?>
