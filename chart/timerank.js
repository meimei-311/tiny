 function load_chart_timerank(){

    var  myChart = echarts.init(document.getElementById('main_chart_timerank'));
              var arr1=[],arr2=[];

              function arrTest(){
                $.ajax({
                  type:"post",
                  async:false,
                  url:"http://127.0.0.1/wordpress/wp-admin/admin-ajax.php",
                  data:'action=timerank',
                  dataType:"json",
                  success:function(result){
                    if (result) {
                      for (var i = 0; i < result.length; i++) {
                          arr1.push(result[i].date);
                          arr2.push(result[i].sum);
                      }
                    }
                  }
                })
                return arr1,arr2;
              }
              arrTest();

              var  option = {
                    tooltip: {
                      trigger:'axis',
                      // borderColor:'#FFFFFF',
                      // backgroundColor:'#FFFFFF',
                      axisPointer:{
                        lineStyle:{
                          color:'#FFFFFF',
                        }
                      },
                    },
               toolbox: {
                      show :false,
                      feature : {
                          mark : {show: false},
                          dataView : {show: false, readOnly: false},
                          magicType : {show: false, type: ['line', 'bar', 'stack', 'tiled']},
                          restore : {show: false},
                          saveAsImage : {show:false}
                      }
                  },
                   // calculable: true,
                    grid: {                                       //图表边框线
                        borderWidth: 0,
                        y: 70,
                        y2: 50
                    },
                    // legend: {
                    //     orient:'vertical',
                    //     x:'88%',
                    //    data:['sum']
                    // },
                    xAxis : [
                        {
                            type : 'category',
                            axisLabel:{
                              textStyle:{
                                color:'#FFFFFF',
                                fontSize: 15,
                              }
                            },
                             axisLine:{
                              lineStyle:{
                                color:'#FFFFFF',
                              }
                            },
                            data : arr1,
                            boundaryGap:false,
                            splitLine:{
                              show:false,
                            }
                        }
                    ],
                    yAxis : [
                        {
                            type : 'value',
                            axisLabel:{
                              textStyle:{
                                color:'#FFFFFF',
                                // fontSize: 18,
                              }
                            },
                             axisLine:{
                              lineStyle:{
                                color:'#FFFFFF',
                                 // width:8,
                              }
                            },
                            splitLine:{
                              show:false,
                            }
                        }
                    ],
                    series : [
                    {
                      name:'Commit Number',
                      type:'line',
                      smooth:true,
                      itemStyle:{
                        normal:{
                          color:'#ffccff',//点
                          lineStyle:{
                            color:'#ffccff',//折线
                             width:4,
                          }
                        }
                      },
                      data:arr2,
                       markPoint : {
                        itemStyle:{
                          normal:{
                            color:'#9999ff',
                          }
                        },
                              data : [
                                  {type : 'max', name: '最大值'},
                                  {type : 'min', name: '最小值'},
                              ]
                      },
                      markLine:{
                        symbolSize : 1,
                        itemStyle:{
                          normal:{
                            color:'#99ccff', //虚线
                            lineStyle:{
                              color:'#99ccff',//箭头
                               width:4,
                            }
                          }
                        },
                        data:[
                        {type:'average',name:'平均值'}
                        ]
                      }
                    },
                    ]
                };
                myChart.setOption(option);


}