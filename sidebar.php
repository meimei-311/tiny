
        <!-- CSS -->
        <link href="<?php bloginfo('template_url'); ?>/widgets/widgets.css" rel="stylesheet">
        <link href="<?php bloginfo('template_url'); ?>/widgets/calendar.css" rel="stylesheet">

<?php

  global $wpdb;
  $table='wp_madapi_apkinfo'; 
  $user_table ='wp_users';
  $query="select b.id, b.display_name,zz from $user_table b left join(select a.md5,a.user_id,count(*) zz 
    from $table a,$user_table b where b.id=a.user_id group by a.user_id)c on b.id=c.user_id order by zz desc limit 10;";
  $res = $wpdb->get_results($query);
  // $res = $wpdb->get_row($query);
?>
                <div class="side-widgets overflow">  
                    <div class="block-side">  </div>
                    <!-- Projects -->
                    <div class="s-widget m-b-25">
                        <h2 class="tile-title">
                            Most Active Contributors
                        </h2>
                        
                        <div class="s-widget-body">
                    <?php
                        $base_num =0;
                        foreach ($res as $row){ 
                         
                          echo '<div class="side-border"><div style="float:left;margin-right: 3px;">';
                           echo get_avatar($row->id, 40);
                          echo '</div><small>';
                          echo $row->display_name;
                          echo '</small>';

                          echo '<div class="progress progress-small"><a href="#" data-toggle="tooltip" title="" class="progress-bar tooltips progress-bar-danger" style="width: ';
                          if ($base_num == 0){
                            $base_num = $row->zz;
                            echo 60;
                            }else{
                            echo $row->zz*60/$base_num;
                            }
                          echo '%;" data-original-title="60%"></a><p style="font-size:0.8em; ">';
                          echo $row->zz;
                          echo 'commits</p></div></div>';
                        }
                        ?> 
                            <!-- <div class="side-border">
                                <small><?php  echo $res->display_name;?></small>
                                <div class="progress progress-small">
                                     <a href="#" data-toggle="tooltip" title="" class="progress-bar tooltips progress-bar-danger" style="width: 70%;" data-original-title="20%">
                                       </a><p style="font-size:0.8em; "> 255 commits</p>
                                     
                                </div>
                            </div>

                            <div class="side-border">
                                <small>Opencart E-Commerce Website</small>
                                <div class="progress progress-small">
                                     <a href="#" data-toggle="tooltip" title="" class="tooltips progress-bar progress-bar-info" style="width: 43%;" data-original-title="43%">
                                          <span class="sr-only">43% Complete</span>
                                     </a>
                                </div>
                            </div>
                            <div class="side-border">
                                <small>Social Media API</small>
                                <div class="progress progress-small">
                                     <a href="#" data-toggle="tooltip" title="" class="tooltips progress-bar progress-bar-warning" style="width: 81%;" data-original-title="81%">
                                          <span class="sr-only">81% Complete</span>
                                     </a>
                                </div>
                            </div>
                            <div class="side-border">
                                <small>VB.Net Software Package</small>
                                <div class="progress progress-small">
                                     <a href="#" data-toggle="tooltip" title="" class="tooltips progress-bar progress-bar-success" style="width: 10%;" data-original-title="10%">
                                          <span class="sr-only">10% Complete</span>
                                     </a>
                                </div>
                            </div>
                            <div class="side-border">
                                <small>Chrome Extension</small>
                                <div class="progress progress-small">
                                     <a href="#" data-toggle="tooltip" title="" class="tooltips progress-bar progress-bar-success" style="width: 95%;" data-original-title="95%">
                                          <span class="sr-only">95% Complete</span>
                                     </a>
                                </div>
                            </div> -->

                        </div>
                    </div>
                </div>
                
               
        <script src="<?php bloginfo('template_url'); ?>/widgets/jquery.min.js"></script> <!-- jQuery Library -->      
        <script src="<?php bloginfo('template_url'); ?>/widgets/scroll.min.js"></script> <!-- Custom Scrollbar -->
        <script src="<?php bloginfo('template_url'); ?>/widgets/calendar.min.js"></script> <!-- Calendar -->
        <script src="<?php bloginfo('template_url'); ?>/widgets/functions.js"></script> <!-- All JS functions -->
