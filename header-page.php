
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

            <!-- chart -->
            <script src="<?php bloginfo('template_url'); ?>/chart/echarts-all.js"></script>
            <script src="<?php bloginfo('template_url'); ?>/chart/chart-esy.js"></script>
            <!--end chart -->

            <!-- timeline -->
              <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/timeline/lrzj_x.css" type="text/css" media="screen" />
              <script src="<?php bloginfo('template_url'); ?>/timeline/jquery.timelinr-0.9.3.js" type="text/javascript"></script>
               <!-- end timeline -->

               <!-- pour_out-->
                       <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/animated-header/normalize.css" />
                   <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/animated-header/component.css" />

                     <script src="<?php bloginfo('template_url'); ?>/animated-header/TweenLite.min.js"></script>
                       <script src="<?php bloginfo('template_url'); ?>/animated-header/EasePack.min.js"></script>
                    <script src="<?php bloginfo('template_url'); ?>/animated-header/rAF.js"></script>
                 <script src="<?php bloginfo('template_url'); ?>/animated-header/demo-3.js"></script>
             <!-- end pour_out-->

    <script type="text/javascript">
    function fileSelect(){
        document.getElementById("file-upload").click(); 
    }
    function fileSelected(){
        document.getElementById('upload-form').submit();        
    }

   document.onscroll=function()
  {
      var scrollTop=document.documentElement.scrollTop||document.body.scrollTop;
      var cHeight=window.innerHeight||document.documentElement.clientHeight||document.body.clientHeight;
       var oDiv=document.getElementById('main_chart');
      if(scrollTop>(oDiv.offsetTop-cHeight))
       load_chart();
  }
    </script>




<div class="main">

	  <section class="page1" style="top:13.5%;">
        
	                   
                <div class="page_container">
                <img class="normalFace" src="<?php bloginfo('template_url'); ?>/img/upload.png" onclick="fileSelect();">
                <form method="post" action="<?php echo home_url();?>/index.php/upload_file/" id="upload-form" enctype="multipart/form-data">   
                    <input type="file" name="file" id="file-upload" onchange="fileSelected();" style="display:none;">
                </form>               
                <div class="total" >
                <p class="total-txt">总共有<span id="total-num" >0</span>个报告</p>
                </div> </div>

              
                <!-- /pour_out-->
                    <div class="container demo-3">
                          <div class="content">
                                <div id="large-header" class="large-header">
                                               <canvas id="demo-canvas"></canvas>
                                              <h1 class="main-title">Collab</span></h1>
                                </div>
                          </div>
                     </div>


                <script type="text/javascript">
                //2秒内增长到data-to，数值除以12，间隔为160ms
                var o = document.getElementById('total-num');
                var total_n = parseInt(<?php
                    global $wpdb;
                    $table='wp_madapi_apkinfo';         
                    $total_num = $wpdb->get_var($wpdb->prepare("SELECT COUNT(*) FROM $table;",""));
                    echo $total_num;
                ?>);    
                var step = (parseInt(total_n/12)==0?1:parseInt(total_n/12));
                var sh = window.setInterval(function (){    
                    if (parseInt(o.innerHTML)+step > total_n){
                        o.innerHTML = total_n;
                        clearInterval(sh);
                    }else{
                        o.innerHTML=parseInt(o.innerHTML)+step;
                    }   
                },160);
                </script> 
    	</section>

    <section class="page2" style="top:113.5%;">
      <div class="page_container">
 <!--      <script src="<?php bloginfo('template_url'); ?>/chart/echarts-all.js"></script> -->
           <div id="main_chart" style="height:500px;width:1400px;"></div>
        </div> 
        <script type="text/javascript">
              load_chart();
        </script>

    </section>


    <section class="page3" style="top:213.5%;">
      <div class="page_container">
       <?php include_once("timeline.php"); ?>
<!-- <p style="font-size:18px; text-align:center; padding-top:50px;"></p> -->
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
        <p> 版本: <?php echo $array[0]->version;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;包名: <?php echo $array[0]->package_name;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 大小: <?php echo $array[0]->size;?>KB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; md5值:  <?php echo $array[0]->md5;?></p>
        <p> API误用总数: <?php echo $array[0]->sum;?>个&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其中:&nbsp;&nbsp;@deprecated: <?php echo $array[0]->deprecated;?>个&nbsp;&nbsp;&nbsp;@hide: <?php echo $array[0]->hide;?>个&nbsp;&nbsp;&nbsp;@removed: <?php echo $array[0]->removed;?>个</p>
      </li>
      <li id="#<?php echo $array[1]->time;?>">
        <img src=<?php echo $array[1]->icon;?> width="80" height="80" />
        <h1><?php echo $array[1]->label;?></h1>
        <p> 版本: <?php echo $array[1]->version;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;包名: <?php echo $array[1]->package_name;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 大小: <?php echo $array[1]->size;?>KB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; md5值:  <?php echo $array[1]->md5;?></p>
        <p> API误用总数: <?php echo $array[1]->sum;?>个&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其中:&nbsp;&nbsp;@deprecated: <?php echo $array[1]->deprecated;?>个&nbsp;&nbsp;&nbsp;@hide: <?php echo $array[1]->hide;?>个&nbsp;&nbsp;&nbsp;@removed: <?php echo $array[1]->removed;?>个</p>
      </li>
      <li id="#<?php echo $array[2]->time;?>">
        <img src=<?php echo $array[2]->icon;?> width="80" height="80" />
        <h1><?php echo $array[2]->label;?></h1>
        <p> 版本: <?php echo $array[2]->version;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;包名: <?php echo $array[2]->package_name;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 大小: <?php echo $array[2]->size;?>KB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; md5值:  <?php echo $array[2]->md5;?></p>
        <p> API误用总数: <?php echo $array[2]->sum;?>个&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其中:&nbsp;&nbsp;@deprecated: <?php echo $array[2]->deprecated;?>个&nbsp;&nbsp;&nbsp;@hide: <?php echo $array[2]->hide;?>个&nbsp;&nbsp;&nbsp;@removed: <?php echo $array[2]->removed;?>个</p>
      </li>
      <li id="#<?php echo $array[3]->time;?>">
        <img src=<?php echo $array[3]->icon;?> width="80" height="80" />
        <h1><?php echo $array[3]->label;?></h1>
        <p> 版本: <?php echo $array[0]->version;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;包名: <?php echo $array[3]->package_name;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 大小: <?php echo $array[3]->size;?>KB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; md5值:  <?php echo $array[3]->md5;?></p>
        <p> API误用总数: <?php echo $array[3]->sum;?>个&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其中:&nbsp;&nbsp;@deprecated: <?php echo $array[3]->deprecated;?>个&nbsp;&nbsp;&nbsp;@hide: <?php echo $array[3]->hide;?>个&nbsp;&nbsp;&nbsp;@removed: <?php echo $array[3]->removed;?>个</p>
      </li>
      <li id="#<?php echo $array[4]->time;?>">
        <img src=<?php echo $array[4]->icon;?> width="80" height="80" />
        <h1><?php echo $array[4]->label;?></h1>
        <p> 版本: <?php echo $array[4]->version;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;包名: <?php echo $array[4]->package_name;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 大小: <?php echo $array[4]->size;?>KB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; md5值:  <?php echo $array[4]->md5;?></p>
        <p> API误用总数: <?php echo $array[4]->sum;?>个&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其中:&nbsp;&nbsp;@deprecated: <?php echo $array[4]->deprecated;?>个&nbsp;&nbsp;&nbsp;@hide: <?php echo $array[4]->hide;?>个&nbsp;&nbsp;&nbsp;@removed: <?php echo $array[4]->removed;?>个</p>
      </li>
      <li id="#<?php echo $array[5]->time;?>">
        <img src=<?php echo $array[5]->icon;?> width="80" height="80" />
        <h1><?php echo $array[5]->label;?></h1>
        <p> 版本: <?php echo $array[5]->version;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;包名: <?php echo $array[5]->package_name;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 大小: <?php echo $array[5]->size;?>KB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; md5值:  <?php echo $array[5]->md5;?></p>
        <p> API误用总数: <?php echo $array[5]->sum;?>个&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其中:&nbsp;&nbsp;@deprecated: <?php echo $array[5]->deprecated;?>个&nbsp;&nbsp;&nbsp;@hide: <?php echo $array[5]->hide;?>个&nbsp;&nbsp;&nbsp;@removed: <?php echo $array[5]->removed;?>个</p>
      </li>
      <li id="#<?php echo $array[6]->time;?>">
        <img src=<?php echo $array[6]->icon;?> width="80" height="80" />
        <h1><?php echo $array[6]->label;?></h1>
        <p> 版本: <?php echo $array[6]->version;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;包名: <?php echo $array[6]->package_name;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 大小: <?php echo $array[6]->size;?>KB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; md5值:  <?php echo $array[6]->md5;?></p>
        <p> API误用总数: <?php echo $array[6]->sum;?>个&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其中:&nbsp;&nbsp;@deprecated: <?php echo $array[6]->deprecated;?>个&nbsp;&nbsp;&nbsp;@hide: <?php echo $array[6]->hide;?>个&nbsp;&nbsp;&nbsp;@removed: <?php echo $array[6]->removed;?>个</p>
      </li>
      <li id="#<?php echo $array[7]->time;?>">
        <img src=<?php echo $array[7]->icon;?> width="80" height="80" />
        <h1><?php echo $array[7]->label;?></h1>
        <p> 版本: <?php echo $array[7]->version;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;包名: <?php echo $array[7]->package_name;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 大小: <?php echo $array[7]->size;?>KB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; md5值:  <?php echo $array[7]->md5;?></p>
        <p> API误用总数: <?php echo $array[7]->sum;?>个&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其中:&nbsp;&nbsp;@deprecated: <?php echo $array[7]->deprecated;?>个&nbsp;&nbsp;&nbsp;@hide: <?php echo $array[7]->hide;?>个&nbsp;&nbsp;&nbsp;@removed: <?php echo $array[7]->removed;?>个</p>
      </li>
      <li id="#<?php echo $array[8]->time;?>">
        <img src=<?php echo $array[8]->icon;?> width="80" height="80" />
        <h1><?php echo $array[8]->label;?></h1>
        <p> 版本: <?php echo $array[8]->version;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;包名: <?php echo $array[8]->package_name;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 大小: <?php echo $array[8]->size;?>KB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; md5值:  <?php echo $array[8]->md5;?></p>
        <p> API误用总数: <?php echo $array[8]->sum;?>个&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其中:&nbsp;&nbsp;@deprecated: <?php echo $array[8]->deprecated;?>个&nbsp;&nbsp;&nbsp;@hide: <?php echo $array[8]->hide;?>个&nbsp;&nbsp;&nbsp;@removed: <?php echo $array[8]->removed;?>个</p>
      </li>
      <li id="#<?php echo $array[9]->time;?>">
        <img src=<?php echo $array[9]->icon;?> width="80" height="80" />
        <h1><?php echo $array[9]->label;?></h1>
        <p> 版本: <?php echo $array[9]->version;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;包名: <?php echo $array[9]->package_name;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 大小: <?php echo $array[9]->size;?>KB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; md5值:  <?php echo $array[9]->md5;?></p>
        <p> API误用总数: <?php echo $array[9]->sum;?>个&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其中:&nbsp;&nbsp;@deprecated: <?php echo $array[9]->deprecated;?>个&nbsp;&nbsp;&nbsp;@hide: <?php echo $array[9]->hide;?>个&nbsp;&nbsp;&nbsp;@removed: <?php echo $array[9]->removed;?>个</p>
      </li>
      <li id="#<?php echo $array[10]->time;?>">
        <img src=<?php echo $array[10]->icon;?> width="80" height="80" />
        <h1><?php echo $array[10]->label;?></h1>
        <p> 版本: <?php echo $array[10]->version;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;包名: <?php echo $array[10]->package_name;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 大小: <?php echo $array[10]->size;?>KB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; md5值:  <?php echo $array[10]->md5;?></p>
        <p> API误用总数: <?php echo $array[10]->sum;?>个&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其中:&nbsp;&nbsp;@deprecated: <?php echo $array[10]->deprecated;?>个&nbsp;&nbsp;&nbsp;@hide: <?php echo $array[10]->hide;?>个&nbsp;&nbsp;&nbsp;@removed: <?php echo $array[10]->removed;?>个</p>
      </li>
      <li id="#<?php echo $array[11]->time;?>">
        <img src=<?php echo $array[11]->icon;?> width="80" height="80" />
        <h1><?php echo $array[11]->label;?></h1>
        <p> 版本: <?php echo $array[11]->version;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;包名: <?php echo $array[11]->package_name;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 大小: <?php echo $array[11]->size;?>KB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; md5值:  <?php echo $array[11]->md5;?></p>
        <p> API误用总数: <?php echo $array[11]->sum;?>个&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其中:&nbsp;&nbsp;@deprecated: <?php echo $array[11]->deprecated;?>个&nbsp;&nbsp;&nbsp;@hide: <?php echo $array[11]->hide;?>个&nbsp;&nbsp;&nbsp;@removed: <?php echo $array[11]->removed;?>个</p>
      </li>
      <li id="#<?php echo $array[12]->time;?>">
        <img src=<?php echo $array[12]->icon;?> width="80" height="80" />
        <h1><?php echo $array[12]->label;?></h1>
        <p> 版本: <?php echo $array[12]->version;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;包名: <?php echo $array[12]->package_name;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 大小: <?php echo $array[12]->size;?>KB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; md5值:  <?php echo $array[12]->md5;?></p>
        <p> API误用总数: <?php echo $array[12]->sum;?>个&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其中:&nbsp;&nbsp;@deprecated: <?php echo $array[12]->deprecated;?>个&nbsp;&nbsp;&nbsp;@hide: <?php echo $array[12]->hide;?>个&nbsp;&nbsp;&nbsp;@removed: <?php echo $array[12]->removed;?>个</p>
      </li>
      <li id="#<?php echo $array[13]->time;?>">
        <img src=<?php echo $array[13]->icon;?> width="80" height="80" />
        <h1><?php echo $array[13]->label;?></h1>
        <p> 版本: <?php echo $array[13]->version;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;包名: <?php echo $array[13]->package_name;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 大小: <?php echo $array[13]->size;?>KB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; md5值:  <?php echo $array[13]->md5;?></p>
        <p> API误用总数: <?php echo $array[13]->sum;?>个&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其中:&nbsp;&nbsp;@deprecated: <?php echo $array[13]->deprecated;?>个&nbsp;&nbsp;&nbsp;@hide: <?php echo $array[13]->hide;?>个&nbsp;&nbsp;&nbsp;@removed: <?php echo $array[13]->removed;?>个</p>
      </li>
      <li id="#<?php echo $array[14]->time;?>">
        <img src=<?php echo $array[14]->icon;?> width="80" height="80" />
        <h1><?php echo $array[14]->label;?></h1>
        <p> 版本: <?php echo $array[14]->version;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;包名: <?php echo $array[14]->package_name;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 大小: <?php echo $array[14]->size;?>KB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; md5值:  <?php echo $array[14]->md5;?></p>
        <p> API误用总数: <?php echo $array[14]->sum;?>个&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其中:&nbsp;&nbsp;@deprecated: <?php echo $array[14]->deprecated;?>个&nbsp;&nbsp;&nbsp;@hide: <?php echo $array[14]->hide;?>个&nbsp;&nbsp;&nbsp;@removed: <?php echo $array[14]->removed;?>个</p>
      </li>
      <li id="#<?php echo $array[15]->time;?>">
        <img src=<?php echo $array[15]->icon;?> width="80" height="80" />
        <h1><?php echo $array[0]->label;?></h1>
        <p> 版本: <?php echo $array[15]->version;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;包名: <?php echo $array[15]->package_name;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 大小: <?php echo $array[15]->size;?>KB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; md5值:  <?php echo $array[15]->md5;?></p>
        <p> API误用总数: <?php echo $array[15]->sum;?>个&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其中:&nbsp;&nbsp;@deprecated: <?php echo $array[15]->deprecated;?>个&nbsp;&nbsp;&nbsp;@hide: <?php echo $array[15]->hide;?>个&nbsp;&nbsp;&nbsp;@removed: <?php echo $array[15]->removed;?>个</p>
      </li>
      <li id="#<?php echo $array[16]->time;?>">
        <img src=<?php echo $array[16]->icon;?> width="80" height="80" />
        <h1><?php echo $array[0]->label;?></h1>
        <p> 版本: <?php echo $array[16]->version;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;包名: <?php echo $array[16]->package_name;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 大小: <?php echo $array[16]->size;?>KB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; md5值:  <?php echo $array[16]->md5;?></p>
        <p> API误用总数: <?php echo $array[16]->sum;?>个&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其中:&nbsp;&nbsp;@deprecated: <?php echo $array[16]->deprecated;?>个&nbsp;&nbsp;&nbsp;@hide: <?php echo $array[16]->hide;?>个&nbsp;&nbsp;&nbsp;@removed: <?php echo $array[16]->removed;?>个</p>
      </li>
      <li id="#<?php echo $array[17]->time;?>">
        <img src=<?php echo $array[17]->icon;?> width="80" height="80" />
        <h1><?php echo $array[17]->label;?></h1>
        <p> 版本: <?php echo $array[17]->version;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;包名: <?php echo $array[17]->package_name;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 大小: <?php echo $array[17]->size;?>KB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; md5值:  <?php echo $array[17]->md5;?></p>
        <p> API误用总数: <?php echo $array[17]->sum;?>个&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其中:&nbsp;&nbsp;@deprecated: <?php echo $array[17]->deprecated;?>个&nbsp;&nbsp;&nbsp;@hide: <?php echo $array[17]->hide;?>个&nbsp;&nbsp;&nbsp;@removed: <?php echo $array[17]->removed;?>个</p>
      </li>
      <li id="#<?php echo $array[18]->time;?>">
        <img src=<?php echo $array[18]->icon;?> width="80" height="80" />
        <h1><?php echo $array[18]->label;?></h1>
        <p> 版本: <?php echo $array[18]->version;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;包名: <?php echo $array[18]->package_name;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 大小: <?php echo $array[18]->size;?>KB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; md5值:  <?php echo $array[18]->md5;?></p>
        <p> API误用总数: <?php echo $array[18]->sum;?>个&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其中:&nbsp;&nbsp;@deprecated: <?php echo $array[18]->deprecated;?>个&nbsp;&nbsp;&nbsp;@hide: <?php echo $array[18]->hide;?>个&nbsp;&nbsp;&nbsp;@removed: <?php echo $array[18]->removed;?>个</p>
      </li>
      <li id="#<?php echo $array[19]->time;?>">
        <img src=<?php echo $array[19]->icon;?> width="80" height="80" />
        <h1><?php echo $array[19]->label;?></h1>
        <p> 版本: <?php echo $array[19]->version;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;包名: <?php echo $array[19]->package_name;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 大小: <?php echo $array[19]->size;?>KB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; md5值:  <?php echo $array[19]->md5;?></p>
        <p> API误用总数: <?php echo $array[19]->sum;?>个&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其中:&nbsp;&nbsp;@deprecated: <?php echo $array[19]->deprecated;?>个&nbsp;&nbsp;&nbsp;@hide: <?php echo $array[19]->hide;?>个&nbsp;&nbsp;&nbsp;@removed: <?php echo $array[19]->removed;?>个</p>
      </li>
      
    </ul>
    <div id="grad_left"></div>
    <div id="grad_right"></div>
    <a href="#" id="next">+</a>
    <a href="#" id="prev">-</a>
  </div>
        <!-- <h1>Pretty cool eh?</h1> -->
        <!-- <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p> -->
      </div>
      <script type="text/javascript"> 
    $(function(){
      $().timelinr()
    });
  </script>
    </section>

</div> 
<!--           <script src="<?php bloginfo('template_url'); ?>/chart/chart-esy.js"></script>  -->
	<script type="text/javascript">
	    $(".main").onepage_scroll({
	      sectionContainer: "section",
	      easing: "cubic-bezier(0.175, 0.885, 0.420, 1.310)"
	    });
  	</script>
		
