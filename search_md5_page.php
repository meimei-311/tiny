

<?php 

function search_md5($md5){
    global $wpdb;
    $table='wp_madapi_apkinfo'; 
    $query="select * from $table where md5='$md5';";
    $query1="SELECT COUNT( * ) FROM  $table;";
    //$res = $wpdb->get_results($query);
    $res = $wpdb->get_row($query);
    $count_all = $wpdb->get_var($query1);
    $res1 = $res->sum_number;
    $query2="SELECT COUNT( sum_number ) FROM $table WHERE sum_number >$res1;";
    $count_single = $wpdb->get_var($query2);
    $rank = 100*($count_single+1)/$count_all;
    //如果有数据
    if (count($res) > 0){
         include_once('search_res.php');
    }
}

 

?>