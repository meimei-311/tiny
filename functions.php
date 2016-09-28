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


function select_deprecated(){
	if( isset($_POST['action']) && ($_POST['action'] == 'select_deprecated') ){
global $wpdb; 

// $apk_label_arr=array();
// $number_deprecated_arr=array();
// $number_hide_arr=array();
// $number_removed_arr=array();
$data="";
$array=array( );
class App{
	// global $wpdb; 
	public $app_label;
	public $deprecated;
	public $hide;
	public $removed;
	public $icon;
	public $total;
}

$table_name = 'wp_madapi_apkinfo';
$a = $wpdb->get_results ( " SELECT sum_number,md5,apk_label, number_deprecated, number_hide, number_removed FROM  $table_name ORDER BY sum_number DESC LIMIT 20" );
foreach ( $a as $topten ){
	// global $wpdb; 

	$app=new App();
	$app->app_label = $topten->apk_label;
	$app->deprecated = $topten->number_deprecated;
	$app->hide = $topten->number_hide;
	$app->removed = $topten->number_removed;
	$app->icon = $topten->md5;
	$app->total=$topten->sum_number;
	$array[]=$app;

	// array_push($apk_label_arr, $topten->apk_label);
	// array_push($number_deprecated_arr, $topten->number_deprecated);
	// array_push($number_hide_arr, $topten->number_hide);
	// array_push($number_removed_arr, $topten->number_removed);
// echo $apk_label."<br>".$number_deprecated."<br>".$number_hide."<br>".$number_removed."<br>";
}
// $app=new App();
// $app->categories = $apk_label_arr;
// $app->data = $number_deprecated_arr;
$data=json_encode($array);
echo $data;
// $path="wp-content/themes/tiny/test.json";
// file_put_contents($path, $data);


	// $io = 5;
	// // $data = array();
	// $ret = "";
	// for($i=0;$i<=$io;$i++)
	// {
	// 	// $d['value'] = rand(1,10);
	// 	$d['value'] = $number_deprecated_arr[$i];
	// 	//$d['label'] = 'ok'.rand(1,9);
	// 	$ret .= " ".$d['value'];
	// }
	// echo $ret;
// $data = split(' ',$ret);
// echo $data[0]."@".$data[1]."@".$data[2]."@".$data[3]."@".$data[4]."@".$data[5]."@";
// $number_deprecated_arr=json_encode($number_deprecated_arr);
// echo $number_deprecated_arr;
}
die(0);
}
// selectDB_deprecated();
add_action("wp_ajax_select_deprecated", "select_deprecated"); 
add_action("wp_ajax_nopriv_select_deprecated", "select_deprecated"); 

/*remove top admin bar */
if (!current_user_can('manage_options')) {
add_filter('show_admin_bar', '__return_false');
}
 
// add_action( 'wp_enqueue_scripts', 'wpn_enqueue' );

/* 插件simple-local-avatars user img*/
require get_template_directory() . '/inc/simple-local-avatars.php';


/*set timezone*/
date_default_timezone_set('Asia/Shanghai');


/*set login logo */
function custom_loginlogo() {
	echo'<style type="text/css"> h1 a {background-image: url('.get_bloginfo('template_directory').'/img/logo_login.png) !important; } </style>';
}
add_action('login_head', 'custom_loginlogo');

/* set login link url*/
function custom_loginlogo_url($url) {
	return home_url(); //在此输入你需要链接到的URL地址
}
add_filter( 'login_headerurl', 'custom_loginlogo_url');

?>
