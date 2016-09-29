<!DOCTYPE HTML>
<html>
<head>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
	wp_head(); 
?>

<link href="<?php bloginfo('template_url'); ?>/header-css/header.css" rel='stylesheet' type='text/css' />	
 
<!-- search -->
<link href="<?php bloginfo('template_url'); ?>/search-res/bootstrap.min.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/search-res/style.css" rel="stylesheet">
<!-- end search -->
 	
<script type="text/javascript">
  function EnterPress(e){ //传入 event
        var e = e || window.event;
        if(e.keyCode == 13){ 
            var a = document.getElementById("header_hash").value;
            b = a.replace(/(^\s*)|(\s*$)/g, "");            
            regex = /^[a-z0-9]{32}$/;
            if (!regex.test(b)){
                alert("输入的MD5格式不正确！");
            }else if (b==""){
                alert("输入不能为空");
            }else{
                window.location.href="<?php echo home_url();?>"+"/index.php/search/?md5="+b;
            }           
        }
    } 
</script>


</head>

<?php	
	global $current_user, $display_name , $user_email;
	get_currentuserinfo();
?>

<body class="demo2">

	<!-- banner -->
	<div class="banner">
		<!-- container -->
		<div class="container">
			<div class="header">
				<div class="logo">
					<a href="<?php echo home_url();?>"> 
						<img src="<?php bloginfo('template_url'); ?>/background/147512128760080.png"  height="140" width="800">
					</a>
				</div>
				<div class="icons">
					<ul>
						<li><div class="search_content">
				                                <input type="text" name="md5" id="header_hash" value="请输入MD5搜索已有报告" 
				                                onfocus="if(this.value == '')this.value='请输入MD5搜索已有报告';" 
				                                onclick="if(this.value == '请输入MD5搜索已有报告')this.value='';" 
				                                onblur="if (value=='') {value='请输入MD5搜索已有报告'}" 
				                                onkeypress="EnterPress(event)" onkeydown="EnterPress()" /></div>
						</li>
						<li>
						<?php 
						if($current_user->ID != 0){  
							$homeurl = home_url();
							echo '<li class="nav-item">';
							echo '<div class="search_tab"> </div> ';
							echo '<a href="'.$homeurl.'/index.php/user-info">'.$current_user->display_name."</a></li>";   //mei可链接到该用户曾经检测过的文件列表。
			                                                    // echo get_avatar($current_user->ID); 
							
							echo '<li><a href="'.$homeurl.'/wp-admin/profile.php" class="facebook dribbble">Edit</a></li>';							
							
							echo '<li><a href="'.wp_logout_url( home_url() ).'" title="Logout">Logout</a></li>';		

						}else{
							echo '<li class="nav-item"><div id="user_login">'.wp_loginout().'</div></li>';
						}                       
						?>	
						</li>					
						
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div> <!--header -->
			<!-- <div class="top-nav">
				<ul class="nav1">
					<li><a href="<?php echo home_url();?>" class="active">Home</a></li>					
					<li><a href="gallery.html">Gallery</a></li>						
				</ul>
				
			</div>  -->
		</div> <!--container -->
	</div><!-- banner -->
