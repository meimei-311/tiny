<?php

global $wpdb; 

// $apk_label_arr=array();
// $number_deprecated_arr=array();
// $number_hide_arr=array();
// $number_removed_arr=array();
$data="";
$array=array( );
class App{
	// global $wpdb; 
	public $label;
	public $value;
	public $icon;
	// public $number_hide;
	// public $number_removed;
}

$table_name = 'wp_madapi_apkinfo';
$a = $wpdb->get_results ( " SELECT md5,apk_label, number_deprecated, number_hide, number_removed FROM  $table_name ORDER BY sum_number DESC LIMIT 10" );
foreach ( $a as $topten ){
	// global $wpdb; 

	$app=new App();
	$app->label = $topten->apk_label;
	$app->value = $topten->number_deprecated;
	$app->icon = "xAxis:0, y: 580, name:'Line', symbolSize:20, symbol: 'image://MAD-API/icon/".$topten->md5.".png";
	// $app->number_hide = $topten->number_hide;
	// $app->number_removed = $topten->number_removed;
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
$array_json=json_encode($array);
echo $array_json;
// $path="wp-content/themes/tiny/test.json";
// file_put_contents($path, $array_json);


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

?>

