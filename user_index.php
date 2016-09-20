<?php
/*
Template Name:user_index
*/
get_header();

function user_upload_search($userid){
	global $wpdb;
	$table = "wp_check_result";
	$query="select * from $table where userid='$userid' order by uploadtime desc;";
	$res = $wpdb->get_results($query);

	//如果有数据
	if (count($res) > 0){
		echo '<div id="user_upload_info">';		
		echo '<table border="0" cellpadding="0" cellspacing="0" width="80%">';
		echo '<tbody>';
		echo '<tr>';
		echo '<th class="ev_row" width="20%" >文件名称</th>';
		echo '<th class="ev_row" width="40%" >文件MD5值</th>';
		echo '<th class="ev_row" width="20%" >上传时间</th>';
		echo '<th class="ev_row" width="10%" style="text-align: right;">分析报告</th>';

		foreach ($res as $row){	
			echo '<tr>';
			echo "<td align='left'><p>".$row->filename."</p></td>";
			echo "<td align='center'><p>".$row->md5."</p></td>";
			echo "<td align='center'><p>".$row->uploadtime."</p></td>";
			echo "<td align='right'><a href='index.php/search/?md5=".$row->md5."'>查看报告</a></td>";
			echo '</tr>';		
		}
		echo '</tbody></table></div>';
	}	
}

$current_user = wp_get_current_user();
if ( 0 == $current_user->ID ) {
	echo "user not login!";
} else{
	user_upload_search($current_user->ID);
}


get_footer();
?>
