<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>横向（纵向）时间轴tab标签切换和水平（垂直）切换幻灯片效果 demo1# 横向滚动</title>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/timeline/lrzj_x.css" type="text/css" media="screen" />
	<script src="http://www.lanrenzhijia.com/ajaxjs/1.6.2/jquery-1.6.2.min.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_url'); ?>/timeline/jquery.timelinr-0.9.3.js" type="text/javascript"></script>
	<script type="text/javascript"> 
		$(function(){
			$().timelinr()
		});
	</script>
</head>
<body>
<p style="font-size:18px; text-align:center; padding-top:50px;"><b><a href="<?php bloginfo('template_url'); ?>/timeline.php">横向效果一</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></p>
<div id="lrzj_x">
		<ul id="dates">
			<li><a href="#">1900</a></li>
			<li><a href="#">1930</a></li>
			<li><a href="#">1944</a></li>
			<li><a href="#">1950</a></li>
			<li><a href="#">1971</a></li>
			<li><a href="#">1977</a></li>
			<li><a href="#">1989</a></li>
			<li><a href="#">1999</a></li>
			<li><a href="#">2001</a></li>
			<li><a href="#">2011</a></li>
		</ul>
		<ul id="lrzj_line">
			<li id="#1900">
				<img src="<?php bloginfo('template_url'); ?>/timeline/1.png" width="256" height="256" />
				<h1>1900</h1>
				<p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum malesuada non vel leo. Sed fringilla porta ligula.</p>
			</li>
			<li id="#1930">
				<img src="<?php bloginfo('template_url'); ?>/timeline/2.png" width="256" height="256" />
				<h1>1930</h1>
				<p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum malesuada non vel leo. Sed fringilla porta ligula.</p>
			</li>
			<li id="#1944">
				<img src="<?php bloginfo('template_url'); ?>/timeline/3.png" width="256" height="256" />
				<h1>1944</h1>
				<p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum malesuada non vel leo. Sed fringilla porta ligula.</p>
			</li>
			<li id="#1950">
				<img src="<?php bloginfo('template_url'); ?>/timeline/4.png" width="256" height="256" />
				<h1>1950</h1>
				<p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum malesuada non vel leo. Sed fringilla porta ligula.</p>
			</li>
			<li id="#1971">
				<img src="<?php bloginfo('template_url'); ?>/timeline/5.png" width="256" height="256" />
				<h1>1971</h1>
				<p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum malesuada non vel leo. Sed fringilla porta ligula.</p>
			</li>
			<li id="#1977">
				<img src="<?php bloginfo('template_url'); ?>/timeline/6.png" width="256" height="256" />
				<h1>1977</h1>
				<p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum malesuada non vel leo. Sed fringilla porta ligula.</p>
			</li>
			<li id="#1989">
				<img src="<?php bloginfo('template_url'); ?>/timeline/7.png" width="256" height="256" />
				<h1>1989</h1>
				<p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum malesuada non vel leo. Sed fringilla porta ligula.</p>
			</li>
			<li id="#1999">
				<img src="<?php bloginfo('template_url'); ?>/timeline/8.png" width="256" height="256" />
				<h1>1999</h1>
				<p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum malesuada non vel leo. Sed fringilla porta ligula.</p>
			</li>
			<li id="#2001">
				<img src="<?php bloginfo('template_url'); ?>/timeline/9.png" width="256" height="256" />
				<h1>2001</h1>
				<p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum malesuada non vel leo. Sed fringilla porta ligula.</p>
			</li>
			<li id="#2011">
				<img src="<?php bloginfo('template_url'); ?>/timeline/10.png" width="256" height="256" />
				<h1>2011</h1>
				<p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum malesuada non vel leo. Sed fringilla porta ligula.</p>
			</li>
		</ul>
		<div id="grad_left"></div>
		<div id="grad_right"></div>
		<a href="#" id="next">+</a>
		<a href="#" id="prev">-</a>
	</div>
	
</body>
</html>
