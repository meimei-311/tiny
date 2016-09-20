<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php 
	wp_head(); 
	?>
    <title>
	<?php if ( is_home() ) {
        bloginfo('name'); echo " - "; bloginfo('description');
    } elseif ( is_category() ) {
        single_cat_title(); echo " - "; bloginfo('name');
    } elseif (is_single() || is_page() ) {
        single_post_title();
    } elseif (is_search() ) {
        echo "搜索结果"; echo " - "; bloginfo('name');
    } elseif (is_404() ) {
        echo '页面未找到!';
    } else {
        wp_title('find-non-title',true);
    } ?>	

	<?php	
		global $current_user, $display_name , $user_email;
		get_currentuserinfo();
	?>
	</title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/templatemo-style.css" type="text/css" media="screen" />

    <script type="text/javascript">
    function EnterPress(e){ //传入 event
        var e = e || window.event;
        if(e.keyCode == 13){
            var a = document.getElementById("header_hash").value;
            window.location.href="<?php echo home_url();?>"+"/index.php/search/?md5="+a;
        }
    } 
    </script>

</head>

    <body>
       
        <div class="tm-header">
            <div class="container-fluid">
                <div class="tm-header-inner">
                    <a href="<?php echo get_option('home'); ?>" class="navbar-brand tm-site-name"><?php bloginfo('name'); ?></a>
                    
                    <!-- navbar -->
                    <nav class="navbar tm-main-nav">

                        <div class="collapse navbar-toggleable-sm" id="tmNavbar">
                            <ul class="nav navbar-nav">
                                <li class="nav-item">
                                    <a href="<?php echo get_option('home'); ?>" class="nav-link">首页</a>
                                </li>
                                <li class="nav-item">
                                    <a href="about.html" class="nav-link">热点报告</a>
                                </li>
                                <li class="nav-item">                  
                                <div class="search_tab"> </div>                
                                <div class="search_content">
                                <input type="text" name="md5" id="header_hash" value="请输入MD5搜索已有报告" 
                                onfocus="if(this.value == '')this.value='请输入MD5搜索已有报告';" 
                                onclick="if(this.value == '请输入MD5搜索已有报告')this.value='';" 
                                onblur="if (value=='') {value='请输入MD5搜索已有报告'}" 
                                onkeypress="EnterPress(event)" onkeydown="EnterPress()" /></div>
                                </li>
                                
                            <?php 
			if($current_user->ID != 0){  
				echo '<li class="nav-item">';
				echo '<div class="search_tab"> </div> ';
				echo '<a>'.$current_user->display_name."</a>";   //mei可链接到该用户曾经检测过的文件列表。
				echo '</li>';
			}else{
				echo '<li class="nav-item"><div id="user_login">';
				wp_loginout();
			 	echo '</div></li>';
			}                       
		?>							

                            </ul>                        
                        </div>                        
                    </nav>  
                </div>                                  
            </div>            
        </div>



        <div class="tm-contact-img-container" style="background-image: url('<?php bloginfo('template_url'); ?>/img/tm-contact-img.jpg');">
            <!--aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa-->
            <div class="wp-upload-file">   
         
            <form method="POST" id ="submit" action="index.php/upload_file/" enctype="multipart/form-data">       

           <!-- <input type="image" value="请选择文件" src="img/upload.png" size="30" onclick="f.click()" />      
            <input type="file" id="f" onchange="this.form.submit()"  style="position:absolute; filter:alpha(opacity=0); opacity:0; width:30px; " size="1" /> -->

	<input type="file" name="file" id="file-upload"  /> <br />
	<input type="submit" name="submit" value="Submit" /> 

             </form>
            </div>




            <!--aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa-->
        </div>




