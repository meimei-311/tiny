<?php
/*
Template Name:upload_file
*/
get_header(2);

?>


<?php
$save_dir="./MAD-API/upload/";


function upload_file($file, $save_dir){	
	if ($file["file"]["error"] > 0){		
		echo "文件上传错误！";
	}
	// 判断当期目录下的 upload 目录是否存在该文件
	if (file_exists($save_dir . $file["file"]["name"]))
	{
		// echo $file["file"]["name"] . " 文件已经存在。 ";		
		return $file["file"]["name"];		
	}
	// 如果没有 upload 目录，你需要创建它，upload 目录权限为 777
	if (!is_dir($save_dir))
	{
		mkdir($save_dir);		
	}
	// 如果 upload 目录存在,则将文件上传到 upload 目录下
	if (!move_uploaded_file($file["file"]["tmp_name"], $save_dir . $file["file"]["name"])){		
		return null; 
	}	
	return $file["file"]["name"];
}


function deal_mad_api($file_dir, $filename){	
	global $wpdb; 
	$file_path = $file_dir.$filename;	
	$md5_apk =  md5_file($file_path);
	$size_apk = sprintf("%.2f",filesize($file_path)/(1024*1024));	
	$filename1=substr($filename,0,-4);

	$output = exec("MAD-API/getMinTargetLevel.sh $filename $filename1 2>&1");//只有失败的时候返回NULL

	$number_location="./MAD-API/result/".$filename1."/number.txt";
	$handle = fopen($number_location, 'r');
	 while(!feof($handle)){
		 $eachline=fgets($handle, 1024);
		 $list=split(' ',$eachline);
		 if ($list[0]=="removed")
		 	$number_removed=$list[1];
		 elseif ($list[0]=="deprecated") 
		     	$number_deprecated=$list[1];
		 elseif ($list[0]=="hide") 
		     	$number_hide=$list[1];
		 elseif ($list[0]=="package_name") 
		     	$package_name=$list[1];
		 elseif ($list[0]=="version") 
		     	$version=$list[1];
		 elseif ($list[0]=="icon_location")
		 	$icon_location=$list[1];
		 elseif ($list[0]=="application_name")
		 	$application_name=$list[1];
		 $sum_number=$number_deprecated+$number_hide+$number_removed;
	 }
	 fclose($handle);
	 #echo $number_deprecated."***".$number_hide."***".$number_removed."***".$package_name."***".$version;

	 $deprecated_location="./MAD-API/result/".$filename1."/uniq-deprecated.txt";
	 $deprecated_text=file_get_contents($deprecated_location);

	 $hide_location="./MAD-API/result/".$filename1."/uniq-hide.txt";
	 $hide_text=file_get_contents($hide_location);

	 $removed_location="./MAD-API/result/".$filename1."/uniq-removed.txt";
	 $removed_text=file_get_contents($removed_location);

	 /*添加新的字段*/
	 $time = date('y-m-d h:i:s',time());
	 // echo "------------time---".$time;
	 global $current_user;
	 get_currentuserinfo();
	 // echo "-----------userid----".$current_user->ID;


	$table = "wp_madapi_apkinfo";
	$data_array = array(
	'md5' => $md5_apk,
	'apk_name' => $filename,
	'package_name' => $package_name,
	'size' =>$size_apk,
	'version' => $version,
	'icon_location' => $icon_location,
	'apk_label' => $application_name,
	'sum_number' => $sum_number,
	'number_deprecated' => $number_deprecated,
	'number_hide' => $number_hide,
	'number_removed' => $number_removed,
	'deprecated_info' => $deprecated_text,
	'hide_info' => $hide_text,
	'removed_info' => $removed_text,
	'upload_time'=>$time,
	'user_id'=>$current_user->ID
	);
	$wpdb->insert($table,$data_array);
		
	$arr= array("\n", "\r", "\r\n");
	$icon_location=str_replace($arr,"",$icon_location);	
	$iconname="./MAD-API/smali/".$filename1."/".$icon_location;
	$iconpath="./MAD-API/icon/".$md5_apk.".png";	
	$state=copy($iconname, $iconpath);
	if(!$state){
		  echo '移动并重命名目录失败！';
	}

	$apkpath="./MAD-API/upload/".$filename;
	unlink($apkpath);
}


$md5;
if ($_FILES["file"]["type"] != "application/vnd.android.package-archive"){
	echo "<script language=javascript>alert('".$_FILES["file"]["type"]." is wrong type mei!');history.back();</script>";	
}else{
	$filename = upload_file($_FILES, $save_dir);
		
	if (file_exists($save_dir.$filename)){
		$md5 =  md5_file($save_dir.$filename);
		global $wpdb;
		$table='wp_madapi_apkinfo';			
		$md5_num = $wpdb->get_var($wpdb->prepare("SELECT COUNT(*) FROM $table WHERE md5='$md5';",""));		
		if ($md5_num == 0){
			$res = deal_mad_api($save_dir, $filename);
		}						
	}

	require_once("search_md5_page.php");
	search_md5($md5);
} 


require_once("sidebar.php");
require_once("sidebar-2.php");

// get_footer();
?>
