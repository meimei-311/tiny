<?php
global $wpdb; 
// include_once('io1.php');
// selectDB_deprecated();

?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>ECharts</title>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
    <script src="http://echarts.baidu.com/build/dist/echarts-all.js"></script>
</head>

<body>
    <div id="main" style="height:500px"></div>

<script type="text/javascript">

              var  myChart = echarts.init(document.getElementById('main'));
              var arr1=[],arr2=[],arr3=[],arr4=[],arr5=[],icon=[],arr0=[];

              function arrTest(){
                $.ajax({
                  type:"post",
                  async:false,
                  url:"http://127.0.0.1/wordpress/wp-admin/admin-ajax.php",
                  data:'action=select_deprecated',
                  dataType:"json",
                  success:function(result){
                    if (result) {
                      for (var i = 0; i < result.length; i++) {
                          arr1.push(result[i].app_label);
                          arr2.push(result[i].deprecated);
                          arr3.push(result[i].hide);
                          arr4.push(result[i].removed);
                          arr5.push(result[i].icon);
                          icon.push('image://MAD-API/icon/'+arr5[i]+'.png');
                          arr0.push(result[i].total);
                      }
                    }
                  }
                })
                return arr1,arr2,arr3,arr4,arr5,icon,arr0;
              }
              arrTest();

              // var icon0='image://MAD-API/icon/'+arr5[0]+'.png';
               // alert(arr0[0]);
              var  option = {
                    tooltip: {
                      trigger:"axis",
                      axisPointer:{
                        type:'none'
                      }
                        // show: true
                    },
               toolbox: {
                      show : true,
                      feature : {
                          mark : {show: true},
                          dataView : {show: true, readOnly: false},
                          magicType : {show: true, type: ['line', 'bar', 'stack', 'tiled']},
                          restore : {show: true},
                          saveAsImage : {show: true}
                      }
                  },
                   calculable: true,
                    grid: {
                        borderWidth: 0,
                        y: 70,
                        y2: 50
                    },
                    legend: {
                       data:['deprecated',"hide","removed"]
                    },
                    xAxis : [
                        {
                            type : 'category',
                            data : arr1,
                            show:false,
                        }
                    ],
                    yAxis : [
                        {
                            type : 'value',
                            show:false
                        }
                    ],
                    series : [

                    {
                      name:'MisUseAPI',
                      type:'line',
                      // yAxisIndex:1,
                      data:arr0,
                       // markPoint : {
                       //        data : [
                       //            {type : 'max', name: '最大值'},
                       //            {type : 'min', name: '最小值'},
                       //             // {name : '周最低', value : 140, xAxis: 0}, 
                       //        ]
                      // }
                      itemStyle:
                      {
                        normal:{
                          lineStyle:{
                            color:'#FFFFFF',
                          },
                          label:{
                            show:true,
                            position:'top',
                            textStyle:{
                              // fontWeight:'bolder',
                              fontSize:20,
                              baseline:'bottom',
                            },
                          },
                        },
                      },
                      symbol:'heart',
                      symbolSize:0
                    },

                        {
                            name:"deprecated",
                            type:"bar",
                            stack:"total",
                            barWidth : 40,//柱图宽度
           itemStyle: {
                normal: {
                    barBorderRadius:7,
                    color: function(params) {
                        // build a color map as your need.
                        var colorList = [
                          '#fff143','#a4e2c6','#e4c6d0','#f9906f','#a1afc9',
                           '#7fecad','#9BCA63','#C6E579','#bacac6','#b0a4e3',
                           '#ffb3a7','#C6E579','#F4E001','#9BCA63','#edd1d8',
                           '#a4e2c6','#e4c6d0','#f9906f','#a1afc9', '#7fecad'
                        ];
                        return colorList[params.dataIndex]
                    },
                },
                 emphasis:{
                  barBorderRadius:7,
                }
            },
                            // barWidth: "60%",
                            data:arr2
                        },
                        {
                          name:"hide",
                            type:"bar",
                            stack:"total",
                            barWidth : 40,//柱图宽度
             itemStyle: {
                normal: {
                  barBorderRadius:7,
                    color: function(params) {
                        // build a color map as your need.
                        var colorList = [
                          '#ffb61e','#48c0a3','#cca4e3','#f47983','#1685a9',
                           '#7bcfa6','#00bc12','#827100','#88ada6','#8d4bbb',
                           '#D7504B','#827100','#e9bb1d','#00bc12','#f9906f',
                           '#48c0a3','#cca4e3','#f47983','#1685a9','#7bcfa6'
                        ];
                        return colorList[params.dataIndex]
                    },
                },
                 emphasis:{
                  barBorderRadius:7,
                }
            },
                            // barWidth: "60%",
                            data:arr3


                        },
                        {
                          name:"removed",
                            type:"bar",
                            stack:"total",
                            barWidth : 40,//柱图宽度
         itemStyle: {
                normal: {
                  barBorderRadius:7,
                    color: function(params) {
                        // build a color map as your need.
                        var colorList = [
                          '#ff7500','#549688','#b0a4e3','#c93756','#574266',
                           '#549688','#057748','#7c4b00','#808080','#815463',
                           '#f35336','#7c4b00','#a78e44','#057748','#ff4e20',
                           '#549688','#b0a4e3','#c93756','#574266', '#549688'
                        ];
                        return colorList[params.dataIndex]
                    },
                },
                emphasis:{
                  barBorderRadius:7,
                }
            },
                            // barWidth: "60%",
                            data:arr4,
             markPoint: {
                              clickable:false,                             
                              symbolSize:20,
                              effect:{
                                    show:true,
                                    type: 'bounce',
                                    bounceDistance: 10,
                              },
                         // itemStyle:{
                         //    normal:{
                         //        label:{
                         //          show: false,
                         //        },
                         //    },
                         //      emphasis:{
                         //        label:{
                         //          show: false,
                         //        },
                         //      },
                         //    },

              tooltip: {
                    trigger: 'item',
                    backgroundColor: 'rgba(0,0,0,0)',
                    formatter: function(params){
                        return null;
                    }
                },
                data: [
                    {xAxis:0, y: 480,symbol: icon[0]},
                    {xAxis:1, y: 480 , symbol: icon[1]},
                    {xAxis:2, y: 480, symbol: icon[2]},
                    {xAxis:3, y: 480, symbol: icon[3]},
                    {xAxis:4, y: 480, symbol: icon[4]},
                    {xAxis:5, y: 480, symbol: icon[5]},
                    {xAxis:6, y: 480, symbol: icon[6]},
                    {xAxis:7, y: 480, symbol: icon[7]},
                    {xAxis:8, y: 480, symbol: icon[8]},
                    {xAxis:9, y: 480, symbol: icon[9]},
                    {xAxis:10, y: 480, symbol: icon[10]},
                    {xAxis:11, y: 480, symbol: icon[11]},
                    {xAxis:12, y: 480, symbol: icon[12]},
                    {xAxis:13, y: 480, symbol: icon[13]},
                    {xAxis:14, y: 480, symbol: icon[14]},
                    {xAxis:15, y: 480, symbol: icon[15]},
                    {xAxis:16, y: 480, symbol: icon[16]},
                    {xAxis:17, y: 480, symbol: icon[17]},
                    {xAxis:18, y: 480, symbol: icon[18]},
                    {xAxis:19, y: 480, symbol: icon[19]},
                ]
            }

                        },

             
                    ]
                };
                myChart.setOption(option);
    </script>
                    </body>

  <!--  <body>
    <div id="main" style="height:400px"></div>
    <script type="text/javascript">
              var  myChart = echarts.init(document.getElementById('main'));
              var option = {
                    tooltip: {
                        show: true
                    },
                    legend: {
                       data:['value']
                    },
                    xAxis : [
                        {
                            type : 'category',
                            data : (function(){
                                    var arr=[];
                                        $.ajax({
                                        type : "post",
                                        async : false, //同步执行
                                        url : "<?php bloginfo('template_url'); ?>/io1.php",
                                        data : {},
                                        dataType : "json", //返回数据形式为json
                                        success : function(result) {
                                        if (result) {
                                              console.log(result);
                                               for(var i=0;i<result.length;i++){
                                                  console.log(result[i].label);
                                                  arr.push(result[i].label);
                                                }
                                        }

                                    },
                                    error : function(errorMsg) {
                                        alert("sorry，请求数据失败");
                                        myChart.hideLoading();
                                    }
                                   })
                                   return arr;
                                })()
                        }
                    ],
                    yAxis : [
                        {
                            type : 'value'
                        }
                    ],
                    series : [
                        {
                            "label":"value",
                            "type":"bar",
                            "data":(function(){
                                        var arr=[];
                                        $.ajax({
                                        type : "post",
                                        async : false, //同步执行
                                        url : "<?php bloginfo('template_url'); ?>/io1.php",
                                        data : {},
                                        dataType : "json", //返回数据形式为json
                                        success : function(result) {
                                        if (result) {
                                               for(var i=0;i<result.length;i++){
                                                  console.log(result[i].value);
                                                  arr.push(result[i].value);
                                                }
                                        }
                                    },
                                    error : function(errorMsg) {
                                        alert("sorry，请求数据失败");
                                        myChart.hideLoading();
                                    }
                                   })
                                  return arr;
                            })()

                        }
                    ]
                };
                myChart.setOption(option);
    </script>
</body>
 -->