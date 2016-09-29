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


<script src="<?php bloginfo('template_url'); ?>/timeline/jquery.timelinr-0.9.3.js" type="text/javascript"></script> 
<script type="text/javascript"> 
	$(function(){
		$().timelinr()
	});
</script>

<div id="lrzj_x">
<ul id="dates">
	<li><a href="#"><?php echo $array[0]->time;?></a></li>
	<li><a href="#"><?php echo $array[1]->time;?></a></li>
	<li><a href="#"><?php echo $array[2]->time;?></a></li>
	<li><a href="#"><?php echo $array[3]->time;?></a></li>
	<li><a href="#"><?php echo $array[4]->time;?></a></li>
	<li><a href="#"><?php echo $array[5]->time;?></a></li>
	<li><a href="#"><?php echo $array[6]->time;?></a></li>
	<li><a href="#"><?php echo $array[7]->time;?></a></li>
	<li><a href="#"><?php echo $array[8]->time;?></a></li>
	<li><a href="#"><?php echo $array[9]->time;?></a></li>
	<li><a href="#"><?php echo $array[10]->time;?></a></li>
	<li><a href="#"><?php echo $array[11]->time;?></a></li>
	<li><a href="#"><?php echo $array[12]->time;?></a></li>
	<li><a href="#"><?php echo $array[13]->time;?></a></li>
	<li><a href="#"><?php echo $array[14]->time;?></a></li>
	<li><a href="#"><?php echo $array[15]->time;?></a></li>
	<li><a href="#"><?php echo $array[16]->time;?></a></li>
	<li><a href="#"><?php echo $array[17]->time;?></a></li>
	<li><a href="#"><?php echo $array[18]->time;?></a></li>
	<li><a href="#"><?php echo $array[19]->time;?></a></li>
</ul>
<ul id="lrzj_line">
	<li id="#<?php echo $array[0]->time;?>">
		<img src=<?php echo $array[0]->icon;?> width="80" height="80" />
		<h1><?php echo $array[0]->label;?></h1>
		<p> 版本: <?php echo $array[0]->version;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;包名: <?php echo $array[0]->package_name;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 大小: <?php echo $array[0]->size;?>KB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; md5值:  <?php echo $array[0]->md5;?></p><br/>
		<p> API误用总数: <?php echo $array[0]->sum;?>个&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其中:&nbsp;&nbsp;@deprecated: <?php echo $array[0]->deprecated;?>个&nbsp;&nbsp;&nbsp;@hide: <?php echo $array[0]->hide;?>个&nbsp;&nbsp;&nbsp;@removed: <?php echo $array[0]->removed;?>个</p>
	</li>
	<li id="#<?php echo $array[1]->time;?>">
		<img src=<?php echo $array[1]->icon;?> width="80" height="80" />
		<h1><?php echo $array[1]->label;?></h1>
		<p> 版本: <?php echo $array[1]->version;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;包名: <?php echo $array[1]->package_name;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 大小: <?php echo $array[1]->size;?>KB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; md5值:  <?php echo $array[1]->md5;?></p><br/>
		<p> API误用总数: <?php echo $array[1]->sum;?>个&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其中:&nbsp;&nbsp;@deprecated: <?php echo $array[1]->deprecated;?>个&nbsp;&nbsp;&nbsp;@hide: <?php echo $array[1]->hide;?>个&nbsp;&nbsp;&nbsp;@removed: <?php echo $array[1]->removed;?>个</p>
	</li>
	<li id="#<?php echo $array[2]->time;?>">
		<img src=<?php echo $array[2]->icon;?> width="80" height="80" />
		<h1><?php echo $array[2]->label;?></h1>
		<p> 版本: <?php echo $array[2]->version;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;包名: <?php echo $array[2]->package_name;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 大小: <?php echo $array[2]->size;?>KB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; md5值:  <?php echo $array[2]->md5;?></p><br/>
		<p> API误用总数: <?php echo $array[2]->sum;?>个&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其中:&nbsp;&nbsp;@deprecated: <?php echo $array[2]->deprecated;?>个&nbsp;&nbsp;&nbsp;@hide: <?php echo $array[2]->hide;?>个&nbsp;&nbsp;&nbsp;@removed: <?php echo $array[2]->removed;?>个</p>
	</li>
	<li id="#<?php echo $array[3]->time;?>">
		<img src=<?php echo $array[3]->icon;?> width="80" height="80" />
		<h1><?php echo $array[3]->label;?></h1>
		<p> 版本: <?php echo $array[0]->version;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;包名: <?php echo $array[3]->package_name;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 大小: <?php echo $array[3]->size;?>KB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; md5值:  <?php echo $array[3]->md5;?></p><br/>
		<p> API误用总数: <?php echo $array[3]->sum;?>个&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其中:&nbsp;&nbsp;@deprecated: <?php echo $array[3]->deprecated;?>个&nbsp;&nbsp;&nbsp;@hide: <?php echo $array[3]->hide;?>个&nbsp;&nbsp;&nbsp;@removed: <?php echo $array[3]->removed;?>个</p>
	</li>
	<li id="#<?php echo $array[4]->time;?>">
		<img src=<?php echo $array[4]->icon;?> width="80" height="80" />
		<h1><?php echo $array[4]->label;?></h1>
		<p> 版本: <?php echo $array[4]->version;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;包名: <?php echo $array[4]->package_name;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 大小: <?php echo $array[4]->size;?>KB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; md5值:  <?php echo $array[4]->md5;?></p><br/>
		<p> API误用总数: <?php echo $array[4]->sum;?>个&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其中:&nbsp;&nbsp;@deprecated: <?php echo $array[4]->deprecated;?>个&nbsp;&nbsp;&nbsp;@hide: <?php echo $array[4]->hide;?>个&nbsp;&nbsp;&nbsp;@removed: <?php echo $array[4]->removed;?>个</p>
	</li>
	<li id="#<?php echo $array[5]->time;?>">
		<img src=<?php echo $array[5]->icon;?> width="80" height="80" />
		<h1><?php echo $array[5]->label;?></h1>
		<p> 版本: <?php echo $array[5]->version;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;包名: <?php echo $array[5]->package_name;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 大小: <?php echo $array[5]->size;?>KB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; md5值:  <?php echo $array[5]->md5;?></p><br/>
		<p> API误用总数: <?php echo $array[5]->sum;?>个&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其中:&nbsp;&nbsp;@deprecated: <?php echo $array[5]->deprecated;?>个&nbsp;&nbsp;&nbsp;@hide: <?php echo $array[5]->hide;?>个&nbsp;&nbsp;&nbsp;@removed: <?php echo $array[5]->removed;?>个</p>
	</li>
	<li id="#<?php echo $array[6]->time;?>">
		<img src=<?php echo $array[6]->icon;?> width="80" height="80" />
		<h1><?php echo $array[6]->label;?></h1>
		<p> 版本: <?php echo $array[6]->version;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;包名: <?php echo $array[6]->package_name;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 大小: <?php echo $array[6]->size;?>KB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; md5值:  <?php echo $array[6]->md5;?></p><br/>
		<p> API误用总数: <?php echo $array[6]->sum;?>个&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其中:&nbsp;&nbsp;@deprecated: <?php echo $array[6]->deprecated;?>个&nbsp;&nbsp;&nbsp;@hide: <?php echo $array[6]->hide;?>个&nbsp;&nbsp;&nbsp;@removed: <?php echo $array[6]->removed;?>个</p>
	</li>
	<li id="#<?php echo $array[7]->time;?>">
		<img src=<?php echo $array[7]->icon;?> width="80" height="80" />
		<h1><?php echo $array[7]->label;?></h1>
		<p> 版本: <?php echo $array[7]->version;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;包名: <?php echo $array[7]->package_name;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 大小: <?php echo $array[7]->size;?>KB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; md5值:  <?php echo $array[7]->md5;?></p><br/>
		<p> API误用总数: <?php echo $array[7]->sum;?>个&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其中:&nbsp;&nbsp;@deprecated: <?php echo $array[7]->deprecated;?>个&nbsp;&nbsp;&nbsp;@hide: <?php echo $array[7]->hide;?>个&nbsp;&nbsp;&nbsp;@removed: <?php echo $array[7]->removed;?>个</p>
	</li>
	<li id="#<?php echo $array[8]->time;?>">
		<img src=<?php echo $array[8]->icon;?> width="80" height="80" />
		<h1><?php echo $array[8]->label;?></h1>
		<p> 版本: <?php echo $array[8]->version;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;包名: <?php echo $array[8]->package_name;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 大小: <?php echo $array[8]->size;?>KB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; md5值:  <?php echo $array[8]->md5;?></p><br/>
		<p> API误用总数: <?php echo $array[8]->sum;?>个&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其中:&nbsp;&nbsp;@deprecated: <?php echo $array[8]->deprecated;?>个&nbsp;&nbsp;&nbsp;@hide: <?php echo $array[8]->hide;?>个&nbsp;&nbsp;&nbsp;@removed: <?php echo $array[8]->removed;?>个</p>
	</li>
	<li id="#<?php echo $array[9]->time;?>">
		<img src=<?php echo $array[9]->icon;?> width="80" height="80" />
		<h1><?php echo $array[9]->label;?></h1>
		<p> 版本: <?php echo $array[9]->version;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;包名: <?php echo $array[9]->package_name;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 大小: <?php echo $array[9]->size;?>KB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; md5值:  <?php echo $array[9]->md5;?></p><br/>
		<p> API误用总数: <?php echo $array[9]->sum;?>个&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其中:&nbsp;&nbsp;@deprecated: <?php echo $array[9]->deprecated;?>个&nbsp;&nbsp;&nbsp;@hide: <?php echo $array[9]->hide;?>个&nbsp;&nbsp;&nbsp;@removed: <?php echo $array[9]->removed;?>个</p>
	</li>
	<li id="#<?php echo $array[10]->time;?>">
		<img src=<?php echo $array[10]->icon;?> width="80" height="80" />
		<h1><?php echo $array[10]->label;?></h1>
		<p> 版本: <?php echo $array[10]->version;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;包名: <?php echo $array[10]->package_name;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 大小: <?php echo $array[10]->size;?>KB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; md5值:  <?php echo $array[10]->md5;?></p><br/>
		<p> API误用总数: <?php echo $array[10]->sum;?>个&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其中:&nbsp;&nbsp;@deprecated: <?php echo $array[10]->deprecated;?>个&nbsp;&nbsp;&nbsp;@hide: <?php echo $array[10]->hide;?>个&nbsp;&nbsp;&nbsp;@removed: <?php echo $array[10]->removed;?>个</p>
	</li>
	<li id="#<?php echo $array[11]->time;?>">
		<img src=<?php echo $array[11]->icon;?> width="80" height="80" />
		<h1><?php echo $array[11]->label;?></h1>
		<p> 版本: <?php echo $array[11]->version;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;包名: <?php echo $array[11]->package_name;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 大小: <?php echo $array[11]->size;?>KB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; md5值:  <?php echo $array[11]->md5;?></p><br/>
		<p> API误用总数: <?php echo $array[11]->sum;?>个&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其中:&nbsp;&nbsp;@deprecated: <?php echo $array[11]->deprecated;?>个&nbsp;&nbsp;&nbsp;@hide: <?php echo $array[11]->hide;?>个&nbsp;&nbsp;&nbsp;@removed: <?php echo $array[11]->removed;?>个</p>
	</li>
	<li id="#<?php echo $array[12]->time;?>">
		<img src=<?php echo $array[12]->icon;?> width="80" height="80" />
		<h1><?php echo $array[12]->label;?></h1>
		<p> 版本: <?php echo $array[12]->version;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;包名: <?php echo $array[12]->package_name;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 大小: <?php echo $array[12]->size;?>KB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; md5值:  <?php echo $array[12]->md5;?></p><br/>
		<p> API误用总数: <?php echo $array[12]->sum;?>个&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其中:&nbsp;&nbsp;@deprecated: <?php echo $array[12]->deprecated;?>个&nbsp;&nbsp;&nbsp;@hide: <?php echo $array[12]->hide;?>个&nbsp;&nbsp;&nbsp;@removed: <?php echo $array[12]->removed;?>个</p>
	</li>
	<li id="#<?php echo $array[13]->time;?>">
		<img src=<?php echo $array[13]->icon;?> width="80" height="80" />
		<h1><?php echo $array[13]->label;?></h1>
		<p> 版本: <?php echo $array[13]->version;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;包名: <?php echo $array[13]->package_name;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 大小: <?php echo $array[13]->size;?>KB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; md5值:  <?php echo $array[13]->md5;?></p><br/>
		<p> API误用总数: <?php echo $array[13]->sum;?>个&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其中:&nbsp;&nbsp;@deprecated: <?php echo $array[13]->deprecated;?>个&nbsp;&nbsp;&nbsp;@hide: <?php echo $array[13]->hide;?>个&nbsp;&nbsp;&nbsp;@removed: <?php echo $array[13]->removed;?>个</p>
	</li>
	<li id="#<?php echo $array[14]->time;?>">
		<img src=<?php echo $array[14]->icon;?> width="80" height="80" />
		<h1><?php echo $array[14]->label;?></h1>
		<p> 版本: <?php echo $array[14]->version;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;包名: <?php echo $array[14]->package_name;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 大小: <?php echo $array[14]->size;?>KB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; md5值:  <?php echo $array[14]->md5;?></p><br/>
		<p> API误用总数: <?php echo $array[14]->sum;?>个&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其中:&nbsp;&nbsp;@deprecated: <?php echo $array[14]->deprecated;?>个&nbsp;&nbsp;&nbsp;@hide: <?php echo $array[14]->hide;?>个&nbsp;&nbsp;&nbsp;@removed: <?php echo $array[14]->removed;?>个</p>
	</li>
	<li id="#<?php echo $array[15]->time;?>">
		<img src=<?php echo $array[15]->icon;?> width="80" height="80" />
		<h1><?php echo $array[0]->label;?></h1>
		<p> 版本: <?php echo $array[15]->version;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;包名: <?php echo $array[15]->package_name;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 大小: <?php echo $array[15]->size;?>KB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; md5值:  <?php echo $array[15]->md5;?></p><br/>
		<p> API误用总数: <?php echo $array[15]->sum;?>个&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其中:&nbsp;&nbsp;@deprecated: <?php echo $array[15]->deprecated;?>个&nbsp;&nbsp;&nbsp;@hide: <?php echo $array[15]->hide;?>个&nbsp;&nbsp;&nbsp;@removed: <?php echo $array[15]->removed;?>个</p>
	</li>
	<li id="#<?php echo $array[16]->time;?>">
		<img src=<?php echo $array[16]->icon;?> width="80" height="80" />
		<h1><?php echo $array[0]->label;?></h1>
		<p> 版本: <?php echo $array[16]->version;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;包名: <?php echo $array[16]->package_name;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 大小: <?php echo $array[16]->size;?>KB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; md5值:  <?php echo $array[16]->md5;?></p><br/>
		<p> API误用总数: <?php echo $array[16]->sum;?>个&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其中:&nbsp;&nbsp;@deprecated: <?php echo $array[16]->deprecated;?>个&nbsp;&nbsp;&nbsp;@hide: <?php echo $array[16]->hide;?>个&nbsp;&nbsp;&nbsp;@removed: <?php echo $array[16]->removed;?>个</p>
	</li>
	<li id="#<?php echo $array[17]->time;?>">
		<img src=<?php echo $array[17]->icon;?> width="80" height="80" />
		<h1><?php echo $array[17]->label;?></h1>
		<p> 版本: <?php echo $array[17]->version;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;包名: <?php echo $array[17]->package_name;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 大小: <?php echo $array[17]->size;?>KB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; md5值:  <?php echo $array[17]->md5;?></p><br/>
		<p> API误用总数: <?php echo $array[17]->sum;?>个&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其中:&nbsp;&nbsp;@deprecated: <?php echo $array[17]->deprecated;?>个&nbsp;&nbsp;&nbsp;@hide: <?php echo $array[17]->hide;?>个&nbsp;&nbsp;&nbsp;@removed: <?php echo $array[17]->removed;?>个</p>
	</li>
	<li id="#<?php echo $array[18]->time;?>">
		<img src=<?php echo $array[18]->icon;?> width="80" height="80" />
		<h1><?php echo $array[18]->label;?></h1>
		<p> 版本: <?php echo $array[18]->version;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;包名: <?php echo $array[18]->package_name;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 大小: <?php echo $array[18]->size;?>KB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; md5值:  <?php echo $array[18]->md5;?></p><br/>
		<p> API误用总数: <?php echo $array[18]->sum;?>个&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其中:&nbsp;&nbsp;@deprecated: <?php echo $array[18]->deprecated;?>个&nbsp;&nbsp;&nbsp;@hide: <?php echo $array[18]->hide;?>个&nbsp;&nbsp;&nbsp;@removed: <?php echo $array[18]->removed;?>个</p>
	</li>
	<li id="#<?php echo $array[19]->time;?>">
		<img src=<?php echo $array[19]->icon;?> width="80" height="80" />
		<h1><?php echo $array[19]->label;?></h1>
		<p> 版本: <?php echo $array[19]->version;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;包名: <?php echo $array[19]->package_name;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 大小: <?php echo $array[19]->size;?>KB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; md5值:  <?php echo $array[19]->md5;?></p><br/>
		<p> API误用总数: <?php echo $array[19]->sum;?>个&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其中:&nbsp;&nbsp;@deprecated: <?php echo $array[19]->deprecated;?>个&nbsp;&nbsp;&nbsp;@hide: <?php echo $array[19]->hide;?>个&nbsp;&nbsp;&nbsp;@removed: <?php echo $array[19]->removed;?>个</p>
	</li>
	
</ul>
	<div id="grad_left"></div>
	<div id="grad_right"></div>
	<a href="#" id="next">+</a>
	<a href="#" id="prev">-</a>
</div>
	
