<?php
global $wpdb;
$array=array( );
class App{
	// global $wpdb; 
	public $md5;
	public $label;
	public $version;
	public $time;
	public $icon;
	public $package_name;
	public $size;
	public $sum;
	public $deprecated;
	public $hide;
	public $removed;
}

$table_name = 'wp_madapi_apkinfo';
$a = $wpdb->get_results ( " SELECT md5, apk_label, version, upload_time, package_name, size, sum_number, number_deprecated, number_hide, number_removed FROM  $table_name ORDER BY upload_time DESC LIMIT 20" );
foreach ( $a as $topten ){
	$app=new App();
	$app->md5 = $topten->md5;
	$app->label = $topten->apk_label;
	$app->version = $topten->version;
	$app->time = $topten->upload_time;
	$app->icon = "./MAD-API/icon/".$topten->md5.".png";
	$app->package_name = $topten->package_name;
	$app->size = $topten->size;
	$app->sum = $topten->sum_number;
	$app->deprecated = $topten->number_deprecated;
	$app->hide = $topten->number_hide;
	$app->removed = $topten->number_removed;

	$array[]=$app;
	}
	// print_r($array);
	// echo $array[0]->version;
	// echo $array[0]->icon;

?>
