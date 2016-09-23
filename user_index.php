<?php
/*
Template Name:user_index
*/
get_header(1);


function user_upload_search($userid){
	global $wpdb;
	$table = "wp_madapi_apkinfo";
	$query="select * from $table where user_id='$userid' order by upload_time desc;";
	$res = $wpdb->get_results($query);

	//如果有数据
	if (count($res) > 0){
		echo     ' <section id="content" class="container"> <div class="row">
                        		<div class="col-md-8">  

                            	<!--  Recent Postings -->
                            	<div class="row">
                               	<div class="col-md-6 col-info">';
		echo '<div class="block-area" id="defaultStyle">';
		// echo '<div id="user_upload_info">';		
		echo '<table border="0" cellpadding="0" cellspacing="0" width="80%" class="table tile">';
		echo '<thead>';
		echo '<tr>';
		echo '<th class="ev_row" width="20%" >文件名称</th>';
		echo '<th class="ev_row" width="20%"  >文件MD5值</th>';
		echo '<th class="ev_row" width="20%" >上传时间</th>';
		echo '<th class="ev_row" width="20%" style="text-align: right;">分析报告</th>';
		echo '<tbody>';

		foreach ($res as $row){	
			echo '<tr>';
			echo "<td align='left' ><p>".$row->apk_name."</p></td>";
			echo "<td align='center' ><p>".$row->md5."</p></td>";
			echo "<td align='center' ><p>".$row->upload_time."</p></td>";
			echo "<td align='right' ><a href='index.php/search/?md5=".$row->md5."'>查看报告</a></td>";
			echo '</tr>';		
		}
		echo '</tbody></table></div></div></div></div></div></div>';
	}	
}

$current_user = wp_get_current_user();
if ( 0 == $current_user->ID ) {
	echo "user not login!";
} else{
	user_upload_search($current_user->ID);
}


//get_footer();
?>
