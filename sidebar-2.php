
<?php
  global $wpdb;
  $table='wp_madapi_apkinfo'; 
  $user_table ='wp_users';
$new_upload_sql="select a.apk_label,a.upload_time, a.user_id ,b.display_name 
FROM $table a, $user_table b  WHERE a.user_id=b.id order by upload_time desc limit 10;";

$new_res = $wpdb->get_results($new_upload_sql);
  ?>
                <!-- new upload -->
                 <div class="side-widgets2 overflow">  
                    <div class="s-widget m-b-25" >
                        <h2 class="tile-title" >
                            Most Recent Commits
                        </h2>
                        
                        <div class="s-widget-body">
                    <?php                       
                        foreach ($new_res as $new_row){                          
                          echo '<div class="side-border"><div style="float:left;margin-right: 3px;">';
                          echo get_avatar($new_row->user_id, 30);
                          echo '</div><small>'.$new_row->display_name.' On '.$new_row->upload_time.'</small>';
                          echo '<p style="font-size:0.8em;margin-bottom:8px;">commit '.$new_row->apk_label;                          
                          echo '</p></div>';
                        }
                        ?> 
                        </div>
                    </div>
                </div>
               