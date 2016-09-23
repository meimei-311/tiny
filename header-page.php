
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/background/default.css" />
		
	<!-- Edit Below -->
	<!--<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>-->
	    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.9.1.js"></script>
	    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/background/jquery.onepage-scroll.js"></script>
	    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/background/style.css" />
	    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/background/onepage-scroll.css" />
	    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/background/elusive-webfont.css" />

                <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
                <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" type="text/css" media="screen" />
                <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/templatemo-style.css" type="text/css" media="screen" />


    <script type="text/javascript">
    function fileSelect(){
        document.getElementById("file-upload").click(); 
    }
    function fileSelected(){
        document.getElementById('upload-form').submit();        
    }
    </script>


         <!--    <div class="tm-header">
              <div class="container-fluid">
                <div class="tm-header-inner">
                    <a href="<?php echo get_option('home'); ?>" class="navbar-brand tm-site-name"><?php bloginfo('name'); ?></a> -->
                    
                    <!-- navbar -->
                    <!-- <nav class="navbar tm-main-nav">
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


	</div>
  
	<div class="menu">
	</div> -->

<div class="main">

	  <section class="page1">
        
	                   
                <div class="page_container">
                <img class="normalFace" src="<?php bloginfo('template_url'); ?>/img/upload.png" onclick="fileSelect();">
                <form method="post" action="<?php echo home_url();?>/index.php/upload_file/" id="upload-form" enctype="multipart/form-data">   
                    <input type="file" name="file" id="file-upload" onchange="fileSelected();" style="display:none;">
                </form>               
                <div class="total" >
                <p class="total-txt">总共有<span id="total-num" >0</span>个报告</p>
                </div> </div>
                <script type="text/javascript">
                //2秒内增长到data-to，数值除以12，间隔为160ms
                var o = document.getElementById('total-num');
                var total = parseInt(<?php
                    global $wpdb;
                    $table='wp_madapi_apkinfo';         
                    $total_num = $wpdb->get_var($wpdb->prepare("SELECT COUNT(*) FROM $table;",""));
                    echo $total_num;
                ?>);    
                var step = (parseInt(total/12)==0?1:parseInt(total/12));    
                var sh = window.setInterval(function (){    
                    if (parseInt(o.innerHTML)+step > total){
                        o.innerHTML = total;
                        clearInterval(sh);
                    }else{
                        o.innerHTML=parseInt(o.innerHTML)+step;
                    }   
                },160);
                </script> 
               	

    	</section>

    <section class="page2">
      <div class="page_container">
        <h1>iPhone 5S</h1>
        <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
      </div>
    </section>

    <section class="page3">
      <div class="page_container">
        <h1>Pretty cool eh?</h1>
        <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
      </div>
    </section>

</div> 
	<script type="text/javascript">
	    $(".main").onepage_scroll({
	      sectionContainer: "section",
	      easing: "cubic-bezier(0.175, 0.885, 0.420, 1.310)"
	    });
  	</script>
		
