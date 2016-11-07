        <script type="text/javascript"> 

         var percent= 0;  
        function start(){

                    function SetProgress(progress) { 
                    if (progress) { 
                    $("#bar").css("width", (String(progress)).replace(/\s/g, "") + "%"); //控制#bar宽度 
                    $("#bar").html((String(progress)).replace(/\s/g, "") + "%"); //显示百分比 
                    } 
                    } 

                    var query_progress_config= {
                                    type:"POST",
                                    url:"http://127.0.0.1/wordpress/wp-admin/admin-ajax.php",
                                    dataType: "text",
                                    data: 'action=progressbar',
                                    success:function(i){
                                                    if (i <= 100) { 
                                                    setTimeout(function(){$.ajax(query_progress_config)}, 1000); 
                                                    SetProgress(percent); 
                                                    // // i++;
                                                    percent++;
                                    } 
                                }
                         $.ajax(query_progress_config);
             }   

$(document).ready(function() { 
start();
}); 
</script> 

        <style type="text/css"> 
                #center{ 
                margin:50px auto; 
                width:400px; 
                } 
                #loading{ 
                width:397px; 
                height:49px; 
                background:url('../progressbar/bak.png') no-repeat; 
                } 
                #bar{ 
                width:0px; 
                height:48px; 
                background:url('../progressbar/pro.png') no-repeat; 
                color:#fff; 
                text-align:center; 
                font-family:Tahoma; 
                font-size:18px; 
                line-height:48px; 
                } 
                #message{ 
                width:200px; 
                height:35px; 
                font-family:Tahoma; 
                font-size:12px; 
                background-color:#d8e7f0; 
                border:1px solid #187CBE; 
                display:none; 
                line-height:35px; 
                text-align:center; 
                margin-bottom:10px; 
                margin-left:50px; 
               }
        </style> 