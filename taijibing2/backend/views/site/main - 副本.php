<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/31
 * Time: 14:17
 */
?>
<style>
    .wdc_item {
        float: left;
        width: 270px;
        height: 100px;
    }

    .wdc_left {
        width: 130px;
        height: 100%;

        float: left;
    }

    .wdc_right {
        width: 140px;
        height: 100%;
        border: 1px solid #f3f3f3;
        float: left;
    }
    .wdc_right p{
        text-align:center;
        height:20px;
        line-height:20px;
        margin:0px;
        padding:0px;

    }
    .icon_rise{
        background-image: url("./static/img/rise.png");
        background-size: 10px 10px;
        width:10px;
        height:10px;
        display:inline-block;
        background-repeat: no-repeat;
        background-position: center;;
    }
    .icon_drop{
        background-image: url("./static/img/drop.png");
        background-size: 10px 10px;
        width:10px;
        height:10px;
        display:inline-block;
        background-repeat: no-repeat;
        background-position: center;;
    }

    .wdc_right p{
        color:#fff
    }

</style>
 <a href="/index.php?r=dev-manager/map"  class="normal-mode"><span style="float:right;font-size:13px;color:black;color: #B0B0BA">地图模式</span></a>
<p style="color:#fff">今日数据发布<span id="now">2017-05-13 17:08:05</span></p>
<div class="w_data_container">
        <div class="wdc_item">
            <div class="wdc_left" style=" background: #ff5e3a;">
                <p style="text-align:center;margin-top:16px;"><img src="./static/img/today_1.png" style="height:40px;"/></p>
                <p style="color:white;text-align:center;">县区经销商数量</p>
            </div>
            <div class="wdc_right">
                <p style="font-size:18px;height:30px;line-height:30px;"><?=$xagentTotal?></p>
                <p id="xagent_day">日 <i class="icon"></i><span></span></p>
                <p id="xagent_week">周 <i class="icon"></i><span></span></p>
                <p id="xagent_month">月 <i class="icon"></i><span></span></p>
            </div>
        </div>
        <div class="wdc_item" style="margin-left:40px;">
            <div class="wdc_left" style=" background: #ff9500;">
                <p style="text-align:center;margin-top:16px;"><img src="./static/img/today_2.png" style="height:40px;"/></p>
                <p style="color:white;text-align:center;">社区经销商数量</p>
            </div>
            <div class="wdc_right">
                <p style="font-size:18px;height:30px;line-height:30px;"><?=$sagentTotal?></p>
                <p  id="sagent_day">日 <i class="icon"></i><span></span></p>
                <p id="sagent_week">周 <i class="icon"></i><span></span></p>
                <p id="sagent_month">月 <i class="icon"></i><span></span></p>
            </div>
        </div>
    <div style="clear:both;"></div>
        <div class="wdc_item" style="margin-top:40px;">
            <div class="wdc_left" style=" background: #76c80e;">
                <p style="text-align:center;margin-top:16px;"><img src="./static/img/today_3.png" style="height:40px;"/></p>
                <p style="color:white;text-align:center;">用户数量</p>
            </div>
            <div class="wdc_right">
                <p style="font-size:18px;height:30px;line-height:30px;"><?=$userinfoTotal?></p>
                <p id="user_day">日 <i class="icon"></i><span></span></p>
                <p id="user_week">周 <i class="icon"></i><span></span></p>
                <p id="user_month">月 <i class="icon"></i><span></span></p>
            </div>
        </div>
        <div class="wdc_item" style="margin-top:40px;margin-left:40px;">
            <div class="wdc_left" style="background: #1fbba6;">
                <p style="text-align:center;margin-top:16px;"><img src="./static/img/today_4.png" style="height:40px;"/></p>
                <p style="color:white;text-align:center;">异常硬件数量</p>
            </div>
            <div class="wdc_right">
                <p style="font-size:18px;height:30px;line-height:30px;"><?=$devError?></p>
                <p id="dev_day">日 <i class="icon"></i><span></span></p>
                <p id="dev_week">周 <i class="icon"></i><span></span></p>
                <p id="dev_month">月 <i class="icon"></i><span></span></p>
            </div>
        </div>
</div>
<div style="clear:both;"></div>
<p style="background:#292834;height:40px;line-height:40px;margin-top:20px; color:#fff">&nbsp;&nbsp;饮用水量</p>
<div id="charts"   style="width: 100%;height:400px;"></div>
<div style="clear:both;"></div>
<p style="background:#292834;height:40px;line-height:40px;margin-top:20px;color:#fff">&nbsp;&nbsp;销售量</p>
<div id="charts1"   style="width: 100%;height:400px;"></div>



<<div id="main" style="height:500px;border:1px solid #ccc;padding:10px;display:none"></div>



<script type="text/javascript" src="./static/js/jquery.min.js"></script>
<script type="text/javascript" src="./static/js/lib.js"></script>
<script type="text/javascript" src="./static/js/echarts/echarts.min.js"></script>
<script src="/static/js/echarts/dist/echarts.js"></script>
<script>

      var FullScreenFalse = false;
      $('#FullScreen', window.parent.document).click(function(){
         if(!FullScreenFalse){
              
                FullScreenFalse = true;
             // $('.normal-mode').css('marginRight','65px')
             $('.normal-mode').css('display','none')
         }else{
 
         $('.normal-mode').css('display','block')
             FullScreenFalse = false;
         }
     })
    
    var data=<?= json_encode($data) ?>;
    var dynamicAgentData=<?=json_encode($dynamicAgentData)?>;
    var dynamicUserData=<?=json_encode($dynamicUserData)?>;
    var dynamicDevErrData=<?=json_encode($dynamicDevErrData)?>;
    var selloutPackage=<?=json_encode($selloutPackage)?>;
    $(function () {
        $("#xagent_day").find(".icon").addClass(getIcon(dynamicAgentData.date));
        $("#xagent_week").find(".icon").addClass(getIcon(dynamicAgentData.week));
        $("#xagent_month").find(".icon").addClass(getIcon(dynamicAgentData.month));
        $("#xagent_day").find("span").text(Math.abs(dynamicAgentData.date));
        $("#xagent_week").find("span").text(Math.abs(dynamicAgentData.week));
        $("#xagent_month").find("span").text(Math.abs(dynamicAgentData.month));


        $("#sagent_day").find(".icon").addClass(getIcon(dynamicAgentData.dates));
        $("#sagent_week").find(".icon").addClass(getIcon(dynamicAgentData.weeks));
        $("#sagent_month").find(".icon").addClass(getIcon(dynamicAgentData.months));

        $("#sagent_day").find("span").text(Math.abs(dynamicAgentData.dates));
        $("#sagent_week").find("span").text(Math.abs(dynamicAgentData.weeks));
        $("#sagent_month").find("span").text(Math.abs(dynamicAgentData.months));

        $("#user_day").find(".icon").addClass(getIcon(dynamicUserData.date));
        $("#user_week").find(".icon").addClass(getIcon(dynamicUserData.week));
        $("#user_month").find(".icon").addClass(getIcon(dynamicUserData.month));

        $("#user_day").find("span").text(Math.abs(dynamicUserData.date));
        $("#user_week").find("span").text(Math.abs(dynamicUserData.week));
        $("#user_month").find("span").text(Math.abs(dynamicUserData.month));


        $("#dev_day").find(".icon").addClass(getIcon(dynamicDevErrData.date));
        $("#dev_week").find(".icon").addClass(getIcon(dynamicDevErrData.week));
        $("#dev_month").find(".icon").addClass(getIcon(dynamicDevErrData.month));

        $("#dev_day").find("span").text(Math.abs(dynamicDevErrData.date));
        $("#dev_week").find("span").text(Math.abs(dynamicDevErrData.week));
        $("#dev_month").find("span").text(Math.abs(dynamicDevErrData.month));

        function getIcon(_val){
            return _val>=0?"icon_rise":"icon_drop";
        }
        $("#now").text("("+(new Date()).Format("yyyy-MM-dd")+")");
        var myChart = echarts.init(document.getElementById('charts'));
        var myChart1 = echarts.init(document.getElementById('charts1'));
        // 指定图表的配置项和数据
        var option = {

            title : {
                //text: '未来一周气温变化',
                //subtext: '纯属虚构'
            },
            tooltip : {
                trigger: 'axis',
                formatter: function(data) 
                  {
                      return data[0].name + '<br/>'+ data[0].seriesName + ' :' +data[0].value + '   （L）'; 
                   }
                },
            legend: {
               // data:['饮用量'],
                data:['饮用水量'],
                textStyle:{
                     color:'#fff'
                 }
            },
            toolbox: {
                show : true,
                feature : {
                    mark : {show: true},
                    dataView : {show: true, readOnly: false},
                    magicType : {show: true, type: ['line', 'bar']},
                    restore : {show: true},
                    saveAsImage : {show: true}
                }
            },
            calculable : true,
            xAxis : [
                {
                    type : 'category',
                    boundaryGap : false,
                    data : data.x,
                    axisLabel:{
                        //X轴刻度配置
                        interval:2 //0：表示全部显示不间隔；auto:表示自动根据刻度个数和宽度自动设置间隔个数
                    },
                     axisLabel: {
                            show: true,
                            textStyle: {
                                color: '#fff'
                            }
                        }

                }

            ],
            yAxis : [
                {

                    type : 'value',
                     axisLabel: {
                         show: true,
                         formatter: '{value} ( L )',
                         textStyle: {
                           color: '#fff'
                         }
                       }
                }
            ],
            series : [
                  {
                    name:'饮用水量',
                    type:'line',
                    data:data.y,
                     axisLabel: {
                            show: true,
                            textStyle: {
                                color: '#fff'
                            }
                        },
                    markPoint : {
                        data : [
                            {name : '周最低', value : -2, xAxis: 1, yAxis: -1.5}
                        ]
                    },
                    markLine : {
                        data : [
                            {type : 'average', name : '平均值'}
                        ]
                    }
                }
            ],
            color:["#62c87f","#f15755"]
        };



        var option1 = {

            title : {
                //text: '未来一周气温变化',
                //subtext: '纯属虚构'
            },
            tooltip : {
                trigger: 'axis',
                formatter: function(data) 
                  {
                      return data[0].name + '<br/>'+ data[0].seriesName + ' :' +data[0].value + '  （袋）'; 
                   }
         

            },
            legend: {
                data:['销售量'],
                 textStyle:{
                  color:'#fff'
              },
            },
            toolbox: {
                show : true,
                feature : {
                    mark : {show: true},
                    dataView : {show: true, readOnly: false},
                    magicType : {show: true, type: ['line', 'bar']},
                    restore : {show: true},
                    saveAsImage : {show: true}
                }
            },
            calculable : true,
            xAxis : [
                {
                    type : 'category',
                    boundaryGap : false,
                    data : selloutPackage.x,
                
                    axisLabel:{
                        //X轴刻度配置
                        interval:2//0：表示全部显示不间隔；auto:表示自动根据刻度个数和宽度自动设置间隔个数
                    },
                     axisLabel: {
                            show: true,
                            textStyle: {
                                color: '#fff'
                            }
                        }
                 }

            ],
            yAxis : [
                {
                    type : 'value',
                    axisLabel : {
                        //formatter: '{value} °C'
                        formatter: '{value} '
                    },
                    //name:'袋',
                     axisLabel: {
                            show: true,
                            formatter: '{value} ( 袋 )',
                            textStyle: {
                                color: '#fff'
                            }
                        }
                }
            ],
            series : [
                {
                    name:'销售量',
                    type:'line',
                    data:selloutPackage.y,
                    markPoint : {
                        data : [
                            {name : '周最低', value : -2, xAxis: 1, yAxis: -1.5}
                        ]
                    },
                    markLine : {
                        data : [
                    {type : 'average', name : '平均值'}
                        ]
                    }
                }
            ],
             color:["#62c87f","#f15755"]
          };
        myChart.setOption(option);
       myChart1.setOption(option1);
    });





// 今日数据接口
// $.get('index.php?r=site/today-datas',function(data){
//     var obj  = eval('(' + data + ')'); 
//       console.log(obj)
// })


// 用户增长及用户类型接口

$.get('index.php?r=site/user-increase',function(data){
      var obj  = eval('(' + data + ')'); 
      // console.log(obj)
     var darax=[];
     var daray = [];
        NumberDays(15, darax)
       // console.log(darax)
    
      
      for(var i=0;i<darax.length;i++){
            daray.push(0)
         var  nowDate = Date.parse(darax[i]);
          for(var j=0;j<obj.length;j++){
                TwoDate =  Date.parse(obj[j].Date);
                if(nowDate == TwoDate){
                    daray[i]++
                }
          }
      }
    var PieName=['家庭','公司','集团','其他']
    var PieNamenum = [0,0,0,0]

        for(var j=0;j<obj.length;j++){
             if(obj[j].CustomerType==1){
                PieNamenum[0]++
             } 
             else if(obj[j].CustomerType==2){
                PieNamenum[1]++
             } 
             else if(obj[j].CustomerType==3){
                PieNamenum[2]++
             } 
             else if(obj[j].CustomerType==99){
                PieNamenum[3]++
             } 

        }
//  //用户类型占比
// console.log(PieName)
// console.log(PieNamenum)
// // 用户增长
// console.log(darax)
// console.log(daray)


})







function NumberDays(xin, _date) {
      for (var i = 0; i >=-xin+1 ; i--) {
         _date.push(GetDateStr(i, 1))
      }
      _date.reverse();
      return _date;
    }



function GetDateStr(AddDayCount, AddMonthCount) {
       var dd = new Date();
       dd.setDate(dd.getDate() + AddDayCount); //获取AddDayCount天后的日期
       var y = dd.getFullYear();
       var m = dd.getMonth() + AddMonthCount; //获取当前月份的日期
       var d = dd.getDate();
       if (String(d).length < 2) {
         d = "0" + d;
       }
       if (String(m).length < 2) {
         m = "0" + m;
       }
       return y + "-" + m + "-" + d;
     };


function    unique($data) {
      var res = [];
      var json = {};

      for (var p = 0; p < $data.length; p++) {
        if (!json[$data[p]]) {
          res.push($data[p]);
          json[$data[p]] = 1;
        } else {}
      }
      return res;
    }

    function Percentage3(number1, number2) {
     if(number2<=0){
        number2=1
      }
      if(number1<=0){
        number1=0
      }
      return (Math.round((number1 / number2) * 10000) / 100); // 小数点后两位百分比
    }




// $.get('index.php?r=site/sales',function(data){
//     var obj  = eval('(' + data + ')'); 
//       console.log(obj)
// })

// 用水量
$.get('index.php?r=site/water-use',function(data){
    var obj  = eval('(' + data + ')'); 
      // console.log(obj)

     var darax=[];
     var daray = [];
        NumberDays(15, darax)
       // console.log(darax)
    
      
      for(var i=0;i<darax.length;i++){
            daray.push(0)
         var  nowDate = Date.parse(darax[i]);
          for(var j=0;j<obj.length;j++){
                TwoDate =  Date.parse(obj[j].ActDate);
                if(nowDate == TwoDate){
                     daray[i]=daray[i]+obj[j].WaterUse
                }
          }
      }
// console.log(darax)
// console.log(daray)

})

// $.get('index.php?r=site/dev-distribution',function(data){
//     var obj  = eval('(' + data + ')'); 
//       console.log(obj)
// })


// $.get('index.php?r=site/ranking',function(data){
//     var obj  = eval('(' + data + ')'); 
//       console.log(obj)
// })

// $.get('index.php?r=site/real-time-datas',function(data){
//     var obj  = eval('(' + data + ')'); 
//       console.log(obj)
// })
  








</script>

 



<script type="text/javascript">
    
$.get('index.php?r=site/dev-distribution',function(data){
    var obj  = eval('(' + data + ')'); 
 
      var ProvinceNum =[];
      for(var i=0;i<obj.datas.length;i++){
            ProvinceNum.push(obj.datas[i].Province);
      }



var Province = unique(ProvinceNum) 
var ProvinceTxt=[];
var ProvinceP = []
     for(var i=0;i<Province.length;i++){
             ProvinceTxt.push(0);
             for(var y=0;y<obj.datas.length;y++){
                  if(Province[i]=== obj.datas[y].Province){
                    ProvinceTxt[i]++
                  }
             }
             var num = Percentage3(ProvinceTxt[i],obj.datas.length)
             ProvinceP.push(num)
      }

var placeList = [
    // {geoCoord:[121.15, 31.89]}


]

        console.log(obj.dev_location)
    for(var i=0;i<obj.dev_location.length;i++){
             console.log(1)
             placeList.push({geoCoord:[obj.dev_location[i].BaiDuLng, obj.dev_location[i].BaiDuLat]})
            // ProvinceNum.push(obj.datas[i].Province);

      }

         console.log(placeList)

// console.log(Province)
// console.log(ProvinceTxt)


// var  Provincebfb = Percentage3()
map(placeList,Province,ProvinceTxt,ProvinceP)
})

function map(placeList,Province,ProvinceTxt,ProvinceP){
    require.config({
        paths: {
           echarts: '/static/js/echarts/dist'
        }
    });
       require(
        [
            'echarts',
            'echarts/chart/map',
            'echarts/config'
        ],
function (ec) {
     var myChart = ec.init(document.getElementById('main'));

var option = {
    backgroundColor: '#1b1b1b',
    color: [
        
        'rgba(37, 140, 249, 0.8)'
    ],
    title : {
        text: '特效地图',
        subtext: '',
        x:'center',
        textStyle : {
            color: '#fff'
        }
    },
    tooltip : {
        trigger: 'item',
         formatter: function(data) {
            // return '本地区还没有开放';
            if (Province) {
              for (var i = 0; i < Province.length; i++) {
                 while (Province[i] == data[1] + '省'||Province[i] == data[1] + '市'||Province[i] == data[1]) {
                  return '销量情况：<br/>' + data[1] + '销量' + ProvinceTxt[i] + '台 <br/>全国占比' + ProvinceP[i] + '%'
                 }
              }
              return  data[1]+'：地区还没有设备';
            }
          }
    },
    legend: {
        orient: 'vertical',
        x:'left',
        data:['设备'],
        textStyle : {
            color: '#fff'
        }
    },
    toolbox: {
        show : true ,
        orient : 'vertical',
        x: 'right',
        y: 'center',
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: false},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
    series : [
        {
            name: '设备',
            type: 'map',
            mapType: 'china',
            hoverable: false,
            roam:false,
            itemStyle:{
                normal:{
                    borderColor:'rgba(100,149,237,1)',
                    borderWidth:1.8,
                    areaStyle:{
                        color: '#1b1b1b'
                    }
                }
            },
            data : [],
            markPoint : {
                symbolSize: 6,
                large: true,
                effect : {
                    show: true
                },
            data : (function(){
                    var data = [];
                    var len = placeList.length;
                    var geoCoord
                    while(len--) {
                        geoCoord = placeList[len % placeList.length].geoCoord;
                        data.push({
                            // name : placeList[len % placeList.length].name + len,
                            value : 10,
                            geoCoord : [
                                geoCoord[0] ,
                                geoCoord[1]
                            ]
                        })
                    }
                   // console.log(data)  
                    return data;
                })()
            }
        }


    ]
};


      //  myChart.setOption(option,true); 



}
        )



}



</script>



