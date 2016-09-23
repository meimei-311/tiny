
 
            <section id="content" class="container">                
                    <div class="row">
                        <div class="col-md-8">  

                            <!--  Recent Postings -->
                            <div class="row">
                                <div class="col-md-6 col-info">
                                    <!--info-->

                                    <!-- Deafult Table -->
                                        <div class="block-area" id="defaultStyle">
                                            <table class="table tile search-tab">
                                                <thead>
                                                    <tr>
                                                        <th style='width:10%; font-size:1.2em;font-weight:bold; font-family:"微软雅黑","黑体";'>基本信息</th>
                                                        <th style='width:40%'></th> 
                                                        <th style='width:10%'></th>
                                                        <th style='width:40%'></th>                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td >文件名称：</td>
                                                        <td ><?php  echo $res->apk_name;?></td>
                                                        <td>上传时间：</td>
                                                        <td><?php  echo $res->upload_time;?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>MD5：</td>
                                                        <td><?php  echo $res->md5;?></td>
                                                        <td>版本：</td>
                                                        <td><?php  echo $res->version;?></td>
                                                    </tr>                                              
                                                    <tr>
                                                        <td>包名：</td>
                                                        <td><?php  echo $res->package_name;?></td>
                                                        <td>文件大小：</td>
                                                        <td><?php  echo $res->size;?></td>
                                                    </tr>                                                   
                                                    <tr>
                                                        <td>图标：</td>
                                                        <td><img  width="50" src="<?php echo home_url();?>/MAD-API/icon/<?php echo $res->md5;?>.png" alt=""></td>
                                                    </tr>
                                                   
                                                </tbody>
                                            </table>
                                        </div>

                                    <!--info-->
                                </div>
                            </div>

                            

                            <!-- Pies -->
                             <div class="row">
                                <div class="col-md-6">
                                    <div class="tile">
                                        <h2 class="tile-title">文件检测评级：</h2>
                                        <div class="listview narrow">
                                            <div class="security">
                                                <p>
                                                    <canvas id="myCanvas" width="500" height="100" percent="
                                                    <?php 
                                                        if ($res->number_deprecated+$res->number_hide+$res->number_removed > 0){
                                                            echo 75;
                                                        }else{
                                                            echo 0;
                                                        }
                                                    ?>
                                                    "></canvas>
                                                </p>
                                              </div>
                                              <script src="<?php bloginfo('template_url'); ?>/search-res/res_process.js"></script> 
                                              </div>
                                          </div>
                                      </div>    
                                    </div>
                            <!---end of Pies -->

                            <!--  Recent Postings -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="tile">
                                        <h2 class="tile-title">Deprecated</h2>
                                        <div class="listview narrow">
                                        <?php 
                                            $one_info = explode(' ',$res->deprecated_info);
                                            for($index=0;$index<count($one_info);$index+=2)
                                            {
                                                echo  '<div class="media p-l-5">';
                                                echo  '<div class="pull-left"><p style="margin: 0px 8px 0px;">'.$one_info[$index].'</p></div><div class="media-body"><a class="t-overflow" href="">';
                                                echo $one_info[$index+1]."</a></div></div>";         
                                            } 

                                        ?>                                           
                                           <!--  <div class="media p-l-5">
                                                <div class="pull-left">
                                                    <img width="40" src="img/profile-pics/5.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <small class="text-muted">On 13/12/2013 by Mitch bradberry</small><br/>
                                                    <a class="t-overflow" href="">Integer a eros dapibus, vehicula quam accumsan, tincidunt purus</a>
                                                    
                                                </div>
                                            </div> -->

                                        </div>
                                    </div>
                                </div>
                                
                                <!--new tile mei -->

                                 <!-- Tasks to do -->
                                <div class="col-md-6">
                                    <div class="tile">
                                        <h2 class="tile-title">Hide</h2>
                                        <div class="listview narrow">

                                        <?php 
                                            $one_info = explode(' ',$res->hide_info);
                                            for($index=0;$index<count($one_info);$index+=2)
                                            {
                                                echo  '<div class="media p-l-5">';
                                                echo  '<div class="pull-left"><p style="margin: 0px 8px 0px;">'.$one_info[$index].'</p></div><div class="media-body"><a class="t-overflow" href="">';
                                                echo $one_info[$index+1]."</a></div></div>";         
                                            } 
                                        ?>                                             
                                        </div>
                                    </div> <!-- Tile -->
                                </div> <!-- Tasks to do -->


                                <!-- Tasks to do -->
                                <div class="col-md-6">
                                    <div class="tile">
                                        <h2 class="tile-title">Removed</h2>                                    
                                        <div class="listview narrow">                                        
                                         <?php 
                                            $one_info = explode(' ',$res->removed_info);
                                            for($index=0;$index<count($one_info);$index+=2)
                                            {
                                                echo  '<div class="media p-l-5">';
                                                echo  '<div class="pull-left"><p style="margin: 0px 8px 0px;">'.$one_info[$index].'</p></div><div class="media-body"><a class="t-overflow" href="">';
                                                echo $one_info[$index+1]."</a></div></div>";         
                                            } 
                                        ?>                                                   
                                        </div>
                                    </div> <!-- Tile -->
                                </div> <!-- Tasks to do -->


                            </div> <!--  end Recent Postings -->
                        </div>
                    </div>              
            </section>
 
        <!-- Javascript Libraries -->
        <!-- jQuery -->
        <script src="<?php bloginfo('template_url'); ?>/search-res/jquery.min.js"></script> <!-- jQuery Library -->
        <script src="<?php bloginfo('template_url'); ?>/search-res/jquery-ui.min.js"></script> <!-- jQuery UI -->
        <script src="<?php bloginfo('template_url'); ?>/search-res/jquery.easing.1.3.js"></script> <!-- jQuery Easing - Requirred for Lightbox + Pie Charts-->

        <script src="<?php bloginfo('template_url'); ?>/search-res/sparkline.min.js"></script>  
        <script src="<?php bloginfo('template_url'); ?>/search-res/easypiechart.js"></script><!-- EasyPieChart - Animated Pie Charts -->
        <script src="<?php bloginfo('template_url'); ?>/search-res/charts.js"></script> <!-- All the above chart related functions -->
    
    </body>
</html>