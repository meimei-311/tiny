<?php
/*
Template Name:user_index
*/
get_header(1);

require_once('page.class.php'); //分页类
require_once("sidebar.php");
?>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/search-res/page.css" />

<?php
function user_upload_search($userid){
	global $wpdb;
	$table = "wp_madapi_apkinfo";

	/*fenye*/	
	$url_array = explode('/', $_SERVER['PHP_SELF']);	
	$curpage = empty($url_array[4])?1:$url_array[4];	//当前的页,还应该处理非数字的情况
	
	$showrow = 20;				 //一页显示的行数  
	$url = "?page={page}"; 			//分页地址，如果有检索条件 ="?page={page}&q=".$_GET['q']  		
	$total = $wpdb->get_var($wpdb->prepare("SELECT COUNT(*) FROM $table  where user_id='$userid';", "")); //记录总条数
	
	 if ($total != 0 && $curpage > ceil($total / $showrow))  
	        $curpage = ceil($total / $showrow); 	//当前页数大于最后页数，取最后一页  
	
	$user_query="select * from $table where user_id='$userid' order by upload_time desc"." LIMIT " . ($curpage - 1) * $showrow . ",$showrow;";
	$res = $wpdb->get_results($user_query);


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
		echo '<th class="ev_row" width="30%" >文件名称</th>';
		echo '<th class="ev_row" width="30%"  >文件MD5值</th>';
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
	echo '<div class="showPage">';
                       
            if ($total > $showrow) {//总记录数大于每页显示数，显示分页  
                $page = new page($total, $showrow, $curpage, $url, 2);  
                echo $page->myde_write();  
            }  
             echo  '</div> ';
}

$current_user = wp_get_current_user();
if ( 0 == $current_user->ID ) {
	echo "user not login!";
} else{
	user_upload_search($current_user->ID);
}


get_footer();
?>
