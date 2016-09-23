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

/*remove top admin bar */
if (!current_user_can('manage_options')) {
add_filter('show_admin_bar', '__return_false');
}
 
// add_action( 'wp_enqueue_scripts', 'wpn_enqueue' );

/* 插件simple-local-avatars*/
//require get_template_directory() . '/inc/simple-local-avatars.php';
?>
