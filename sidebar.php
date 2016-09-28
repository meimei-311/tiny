
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
                <!-- widgets-->
                <div class="side-widgets overflow">  
                  <!-- Most Active Contributors-->
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

                          echo '<div class="progress progress-small"><a href="#" data-toggle="tooltip" title="" class="progress-bar tooltips progress-bar-success" style="width: ';
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
                           

                        </div>
                    </div>
              
                <!-- end -->


<?php
$new_upload_sql="select a.apk_label,a.upload_time, a.user_id ,b.display_name 
FROM $table a, $user_table b  WHERE a.user_id=b.id order by upload_time desc limit 10;";

$new_res = $wpdb->get_results($new_upload_sql);
  ?>
                <!-- new upload -->
                    <div class="s-widget m-b-25" style="padding-top:18px;">
                        <h2 class="tile-title" >
                            Most Recent Commits
                        </h2>
                        
                        <div class="s-widget-body">
                    <?php                       
                        foreach ($new_res as $new_row){                          
                          echo '<div class="side-border"><div style="float:left;margin-right: 3px;">';
                          echo get_avatar($new_row->user_id, 40);
                          echo '</div><small>'.$new_row->display_name.' On '.$new_row->upload_time.'</small>';
                          echo '<p style="font-size:0.8em;margin-bottom:8px;">commit '.$new_row->apk_label;                          
                          echo '</p></div>';
                        }
                        ?> 
                        </div>
                    </div>
                </div>
               
        <script src="<?php bloginfo('template_url'); ?>/widgets/jquery.min.js"></script> <!-- jQuery Library -->      
        <script src="<?php bloginfo('template_url'); ?>/widgets/scroll.min.js"></script> <!-- Custom Scrollbar -->
        <script src="<?php bloginfo('template_url'); ?>/widgets/calendar.min.js"></script> <!-- Calendar -->
        <script src="<?php bloginfo('template_url'); ?>/widgets/functions.js"></script> <!-- All JS functions -->
