

<?php 

function search_md5($md5){
    global $wpdb;
    $table='wp_madapi_apkinfo'; 
    $query="select * from $table where md5='$md5';";
    //$res = $wpdb->get_results($query);
    $res = $wpdb->get_row($query);
    
    //如果有数据
    if (count($res) > 0){
         include_once('search_res.php');
    }
}

 

?>