
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

                <!-- <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/progressbar/progressbar_style.css" type="text/css" /> -->
                <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/progressbar/reset.css" />
                <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/progressbar/progressbar.css" />
                <script src="<?php bloginfo('template_url'); ?>/progressbar/prefixfree.min.js"></script>

            <!--upload -->
           <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/animated-header/component.css" />
            <!--endupload-->
            
 	<!--timeline-->
            <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/timeline/lrzj_x.css" type="text/css" />
            <!--timeline-->

            <!-- chart -->
            <script src="<?php bloginfo('template_url'); ?>/chart/echarts-all.js"></script>
            <script src="<?php bloginfo('template_url'); ?>/chart/chart-esy.js"></script>
            <script src="<?php bloginfo('template_url'); ?>/chart/timerank.js"></script>
            <!--end chart -->


    <script type="text/javascript">
    function fileSelect(){
        document.getElementById("file-upload").click(); 
    }
    function fileSelected(){
        document.getElementById('upload-form').submit();        
        
        var loading = document.getElementById('loading');
        var popLayer = document.getElementById('popLayer');

        popLayer.style.width = document.body.scrollWidth + "px";
        popLayer.style.height = document.body.scrollHeight + "px";

        // loading.show();
        // popLayer.show();
        $("#loading").show(); 
        popLayer.style.display = "block";
        // loading.style.display = "block";
    }
    </script>




<div class="main">

	  <section class="page1" style="top:0%;">
                <div class="page_container">
                    <!--upload-->
                    <div class="demo-3" style="position: relative;bottom: 50px">               
                <div id="large-header" class="large-header">
                 <canvas id="demo-canvas"></canvas>
                <h1 class="main-title" onclick="fileSelect();">APP检测</span></h1>
                 <form method="post" action="<?php echo home_url();?>/index.php/upload_file/" id="upload-form" enctype="multipart/form-data">   
                    <input type="file" name="file" id="file-upload" onchange="fileSelected();" style="display:none;">
                </form> 
                </div>             
                </div>
                    <script src="<?php bloginfo('template_url'); ?>/animated-header/TweenLite.min.js"></script>
                   <script src="<?php bloginfo('template_url'); ?>/animated-header/EasePack.min.js"></script>
                  <script src="<?php bloginfo('template_url'); ?>/animated-header/demo-3.js"></script>

                    <!--end upload-->

                <!-- <img class="normalFace" src="<?php bloginfo('template_url'); ?>/img/upload.png" onclick="fileSelect();"> 
                <form method="post" action="<?php echo home_url();?>/index.php/upload_file/" id="upload-form" enctype="multipart/form-data">   
                    <input type="file" name="file" id="file-upload" onchange="fileSelected();" style="display:none;">
                </form>      
                <div class="total" >
                <p class="total-txt">总共有<span id="total-num" >0</span>个报告</p>
                </div> </div>
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
                -->
            </div>
<div id="popLayer"></div>
 <div id="loading" >
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <p>detecting</p>
</div>
<script type="text/javascript"> 
$("#loading").hide(); 
</script>

    	</section>


    <section class="page2" style="top:100%;">
              <div class="page_container">
           <div id="main_chart" style="height:500px;width:1400px;position: relative;left:10px;bottom: 100px"></div>
        </div> 
        <script type="text/javascript">
              load_chart();
        </script>

    </section>


    <section class="page3" style="top:200%;">
      <div class="page_container">

        <div id="main_chart_timerank" style="height:300px;width:1400px;position: relative;left:-260px;bottom: 100px"></div>
        <script type="text/javascript">
              load_chart_timerank();
        </script>

      <div class="time_line">
      <?php include_once("timeline.php");?>
      </div>

    </div>
    </section>

</div> 
	<script type="text/javascript">
	    $(".main").onepage_scroll({
	      sectionContainer: "section",
	      easing: "cubic-bezier(0.175, 0.885, 0.420, 1.310)"
	    });
  	</script>
		
