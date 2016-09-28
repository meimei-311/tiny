
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
        <h1>Pretty cool eh?</h1>
        <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
      </div>
    </section>

</div> 
<!--           <script src="<?php bloginfo('template_url'); ?>/chart/chart-esy.js"></script>  -->
	<script type="text/javascript">
	    $(".main").onepage_scroll({
	      sectionContainer: "section",
	      easing: "cubic-bezier(0.175, 0.885, 0.420, 1.310)"
	    });
  	</script>
		
