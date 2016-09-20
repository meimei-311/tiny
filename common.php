<?php


function search_md5($md5){
	global $wpdb;
	$table='wp_madapi_apkinfo';	
	$query="select * from $table where md5='$md5';";
	//$res = $wpdb->get_results($query);
	$res = $wpdb->get_row($query);
	
	//如果有数据
	if (count($res) > 0){
		echo '<div class="sub-content">
		        <ul> <li class="set" >
		        <a class="set" href="#baseinfo">基本信息</a><p class="tree"></p>
		      </li>
		      <li class="set" >
		        <a class="set" href="#hide">hide</a>
		      </li>
		      <li class="set" >
		        <a class="set" href="#deprecated">deprecated</a>
		      </li>
		      <li class="set" >
		        <a class="set" href="#removed">removed</a>
		      </li></ul></div>';

		/*-----------------------------*/

		echo '<div id="baseinfo"> ';
		echo '<h3 class="step"><a name="baseinfo">基本信息</a></h3>';
		echo '<table border="0" cellpadding="0" cellspacing="0" width="100%"';
		echo '<tbody>';

		echo '<tr>';
		echo '<td class="ev_row" style="width:20%">文件名称:</td>';
		echo "<td style='width:80%'><p>".$res->apk_name;
		$home_url = home_url();
		echo '<img src="'.$home_url.'/MAD-API/icon/'.$res->md5.'.png" width="60px" height="60px" style="position:absolute;right:50%;"></img>';
		echo "</p></td>";
		echo '</tr>';
		
		echo '<tr>';
		echo '<td class="ev_row" style="width:20%">md5</td>';
		echo "<td style='width:80%'><p>".$res->md5."</p></td>";
		echo '</tr>';
		

		echo '<tr>';
		echo '<td class="ev_row" style="width:20%">package_name</td>';
		echo "<td style='width:80%'><p>".$res->package_name."</p></td>";
		echo '</tr>';

		echo '<tr>';
		echo '<td class="ev_row" style="width:20%">version:</td>';
		echo "<td style='width:80%'><p>".$res->version."</p></td>";
		echo '</tr>';	

		echo '<tr>';
		echo '<td class="ev_row" style="width:20%">size:</td>';
		echo "<td style='width:80%'><p>".$res->size."M</p></td>";
		echo '</tr>';

		echo '<tr>';
		echo '<td class="ev_row" style="width:20%">upload_time:</td>';
		echo "<td style='width:80%'><p>".$res->upload_time."</p></td>";
		echo '</tr>';

		echo '</tbody></table>';
		echo '<h3 class="step"><a name="deprecated">deprecated</a></h3>';
		echo '<table border="0" cellpadding="0" cellspacing="0" width="100%"';
		echo '<tbody>';

		echo '<tr>';
		echo '<td class="ev_row" style="width:20%">number_deprecated:</td>';
		echo "<td style='width:80%'><p>".$res->number_deprecated."</p></td>";
		echo '</tr>';

		echo '<tr>';
		echo '<td class="ev_row" style="width:20%">deprecated_info:</td>';		
		echo "<td style='width:80%'>";		
		$one_info = explode(" ", $res->deprecated_info);
		for($index=0;$index<count($one_info);$index+=2)
		{
			echo "<p>".$one_info[$index+1]."    ".$one_info[$index]."</p>";			
		} 
		echo '</td></tr>';

		echo '</tbody></table>';
		echo '<h3 class="step"><a name="hide">hide</a></h3>';
		echo '<table border="0" cellpadding="0" cellspacing="0" width="100%"';
		echo '<tbody>';

		echo '<tr>';
		echo '<td class="ev_row" style="width:20%">number_hide:</td>';
		echo "<td style='width:80%'><p>".$res->number_hide."</p></td>";
		echo '</tr>';


		echo '<tr>';
		echo '<td class="ev_row" style="width:20%">deprecated_info:</td>';		
		echo "<td style='width:80%'>";	
		$one_info = explode(' ',$res->hide_info);
		for($index=0;$index<count($one_info);$index+=2)
		{
			echo "<p>".$one_info[$index+1]."    ".$one_info[$index]."</p>";			
		} 
		echo '</td></tr>';

		echo '</tbody></table>';
		echo '<h3 class="step"><a name="removed">removed</a></h3>';
		echo '<table border="0" cellpadding="0" cellspacing="0" width="100%"';
		echo '<tbody>';

		echo '<tr>';
		echo '<td class="ev_row" style="width:20%">number_removed:</td>';
		echo "<td style='width:80%'><p>".$res->number_removed."</p></td>";
		echo '</tr>';

		echo '<tr>';
		echo '<td class="ev_row" style="width:20%">deprecated_info:</td>';		
		echo "<td style='width:80%'>";	
		$one_info = explode(' ',$res->removed_info);
		for($index=0;$index<count($one_info);$index+=2)
		{
			echo "<p>".$one_info[$index+1]."    ".$one_info[$index]."</p>";			
		} 
		echo '</td></tr>';
		
		echo '</tbody></table></div>';
		return count($res);
	}else{
		
		return 0;
	}
}


?>