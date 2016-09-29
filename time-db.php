<?php
global $wpdb; 

// $apk_label_arr=array();
// $number_deprecated_arr=array();
// $number_hide_arr=array();
// $number_removed_arr=array();
// $data="";
// $sum_array=array( );
$array = array();
class Time{
	public $sum;
	public $date;

}

$table_name = 'wp_madapi_apkinfo';

$mylink = $wpdb->get_row("SELECT * FROM $table_name ORDER BY upload_time DESC LIMIT 1");
echo $mylink->upload_time;
$d   =   $mylink->upload_time;
for ($i = 0; $i<20 ; $i++ ) {
	$time_result = date("Y-m-d",strtotime("$d   -$i   day"));   //日期天数相加函数
	// echo $time_result;
	$time_result1 = $time_result.'%';
	$sum = 0;
	$a = $wpdb->get_results ( " SELECT upload_time, md5,apk_label FROM  $table_name WHERE upload_time LIKE '$time_result1' " );
	foreach ( $a as $topten ){
		$sum = $sum +1;
	}
	$time =new Time();
	$time->sum = $sum;
	$time->date = $time_result;
	array_push($array, $time);
	// $data=json_encode($array);
	// echo $data;
	}
print_r($array);

?>