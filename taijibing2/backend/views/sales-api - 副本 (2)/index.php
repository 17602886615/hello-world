<!DOCTYPE html>
<html>
<head>
  <title>用水量统计</title>
  <link rel="stylesheet" type="text/css" href="./static/css/sales-api/sales-api.css">
  <link rel="stylesheet" href="/static/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="./static/css/sales-volume/index.css?v=1.1"/>
</head>
<body>
<table class="table" style="background-color: #292834;text-align: center;">
   <thead>
     <tr class="header" style="font-weight: bold">
      <td class="name">销量概况  <i class="volumeHover glyphicon glyphicon-question-sign" style="color: #01B1D6">
         <div class="volumeText" >
          销量概况统计的是用户通过设备扫过条码的数量，表示销量，和实际销量有延迟，可能出现微小误差，一般在5%范围内。日期是表示近7天，最近30天，最近90天的时间
         </div>
       </i>
    </td>
      <td> 今天</td>
      <td>昨天</td>
      <td>7天</td>
      <td>30天</td>
      <td>90天</td>
    </tr>
   </thead>
   <tbody>
    <tr class="consumer">
      <td class="name ">用户销量（袋）</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr  class="relatively" >
      <td class="name ">同期  <i class="compareHover glyphicon glyphicon-question-sign" style="color: #01B1D6" >
        <div class="compareText">
             同期表示：该销量和上一日、7天、30天、90天的百分比的对比显示
        </div>
      </td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr class="equally">
      <td class="name ">客户均销量 <i class="AverageHover glyphicon glyphicon-question-sign" style="color: #01B1D6" >
        <div class="AverageText">
          平均销量：为所有用户的销量除以用户总数量的结果数据，数据实时动态变化
        </div>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      
    </tr>
   </tbody>
</table>
<div style="clear:both;padding:20px"></div>

<div style="padding:0 20px">
    <div class="container-fluid"  >
        <div class="row" style="margin-left: -50px; margin-right: -50px;">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >
                <div style="background-color: #292834; color: #fff">
                       <div class="title">
                            <div >
                                <label >
                                   销量情况 
                                </label>
                                <select id='IsTurnOut' value='3'>  
                                  <option value ="1">今天</option>  
                                  <option value ="2">昨天</option>  
                                  <option selected = "selected" value ="3">7天销量</option>  
                                  <option value ="4">30天销量</option>  
                                  <option value="5">90天销量</option>
                                  <option value="6">今年销量</option>
                                </select>  
                            </div>
                       </div>
                     <div id="charts2"   style=" height:400px;"></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >
                <div style="background-color: #292834; ">
                 <div id="charts5"   style="width: 100%;height:400px;min-width: 500px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>


<div style="clear:both;padding:20px 0 "></div>
<div class="container-fluid" style="background-color: #292834;padding: 20px 0px; margin-left: 0px ;">
    <div class="row" style="">
        <div class="col-lg-6 col-md-6col-sm-12 col-xs-12">
            <div id="charts"  style="width: 100%;height:360px;" ></div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 Percentage"  id="Percentage">
        </div>
    </div>
</div>
<div style="width:100%;border-top: 1px solid #292834;margin-top: 20px">
<div class="timeData" style="padding:10px; color:#DEDDDF;">

   <div style="    width: 300px;position: relative;">
        <div class="input-group">
      <input id="adddate" class="form-control" placeholder="选择时间" / style="width:300px;color:#DEDDDF"> 
 
        </div>
   <div class="soue" style="position: absolute; left:100%;top:0;height: 35px;    display: inline-flex;">
           <input type="text" name="" id="search"  value="" placeholder="搜索内容" >
            <input onclick="begin_linlst_time_clea()"  type="button" value="搜索"/>   
        <input onclick="begin_end_time_clear()" type="button" value="清除"/ >  

           
   </div>
         
  </div>
</div>
</div>
     <div class="tableBox" style="position: relative;">
        <span  id="method" >导出表格</span>
        <caption>
                <div  class="navdata">
                    <p >角色选择</p>
                    <ul >
                        <li class="active" style="margin-left: -40px">用户</li>
                        <li>服务中心</li>
                        <li>运营中心</li>
                        <li>水厂</li>
                        <li>设备厂家</li>
                        <li>设备投资商</li>
                    </ul>
                </div>
            </caption>
         <table id="table" style ="width:100%;text-align: center; position: relative;">
             
             <thead>  
                 <tr>
                     <th>序号</th>
                     <th>姓名</th>
                     <th>联系电话</th>
                     <th>设备编号</th>
                     <th>
                           <select id="_service_bo" name="cars" style=" border: none; background: #292834;"> 
                           <option value="volvo" style=" border: none; background: #292834;">服务中心</option> 
                           </select> 
                     </th>
                     <th>
                        <select name="cars" style=" border: none; background: #292834;"> 
                          <option value="volvo" style=" border: none; background: #292834;">运营中心</option> 
                          </select> 
                     </th>
                     <th>
                            <select name="cars" style=" border: none; background: #292834;"> 
                          <option value="volvo" style=" border: none; background: #292834;">地区</option> 
                          </select> 
                     </th>
                     <th>
                        <select name="cars" style=" border: none; background: #292834;"> 
                          <option value="volvo" style=" border: none; background: #292834;">其他</option> 
                          </select> 
                     </th>
                     <th>
                      <select name="cars" style=" border: none; background: #292834;"> 
                          <option value="volvo" style=" border: none; background: #292834;">总销量</option> 
                          </select>
                     </th>
                 </tr>
             </thead>
             <tbody id="tableBoxData">

             </tbody>

         </table>






</body>

<script type="text/javascript" src="/static/js/jquery.min.js"></script>
     <script type="text/javascript" src="./static/js/sales-api/communal.js"></script>
<script type="text/javascript" src="./static/js/layer/layer.js"></script>
<script type="text/javascript">
 _hover($(".volumeHover"), $(".volumeText"))
_hover($(".compareHover"), $(".compareText"))
_hover($(".AverageHover"), $(".AverageText"))
  //伪类
function _hover(Class, ClassText) {
  Class.hover(function() {
    ClassText.css("display", "block");
  }, function() {
    ClassText.css("display", "none");
  });
}

// 访问--数据计算
$.post('./?r=sales-api/sales-detail', function(json) {
    if(!json){
     return;
    }
var json = JSON.parse(json);
  var salesVolume = [0, 0, 0, 0, 0, 0, 0, 0, 0];
    for (var i = 0; i < json.datas.length; i++) {
      // for (var i in json.datas) {
      // console.log(json.datas[i])
      //销量时间 （天）
      var strs = json.datas[i].RowTime.split(" ");
      // 判断是否和当前时间对比
      // 用户销量
      // 扫码时间戳
      var str = Date.parse(strs[0]);
      // 今天
  
    }
// 今天
      if (nowDate <= str) {
        salesVolume[0]++
      }
          // 昨天一天
      if (tomorrowDate <= str && str < nowDate) {
        var timestamp2 = new Date();
        timestamp2.setTime(tomorrowDate);
        // var tt = new Date(str).toLocaleString().replace(/\//g, "-");
        salesVolume[1]++
          // 前天到昨天
      } else if (FrontrowDate <= str && str < tomorrowDate) {
        salesVolume[2]++
      }
      // 一周到今天  七天前
      if (weekDate <= str) {
        salesVolume[3]++
      }
      // 两周
      else if (upperDate <= str && str < weekDate) {
        salesVolume[4]++
      }
      // 一月
      if (monthDate <= str) {
        salesVolume[5]++
      }
      // 两月
      else if (uppermonthDate <= str && str < monthDate) {
        salesVolume[6]++
      }
      // 一季度到今天
      if (quarterDate < str) {
        salesVolume[7]++
      }
      // 上个季度到这个季度
      else if (upperquarterDate <= str && str < quarterDate) {
        salesVolume[8]++
      }

    var sales_volume = {
      "volume": [
        salesVolume[0], //今天销量
        salesVolume[1], //两天的销量
        salesVolume[3], //一周的销量
        salesVolume[5], //一个月的销量
        salesVolume[7] //一个季度的销量
      ],
      "compare": [
        percenttage(salesVolume[0], (salesVolume[1])), //今日同期0
        percenttage(salesVolume[1], (salesVolume[2])), //昨日同期5
        percenttage(salesVolume[3], (salesVolume[4])), //一周同期5
        percenttage(salesVolume[5], (salesVolume[6])), //一月同期
        percenttage(salesVolume[7], (salesVolume[8])) //一季度同期
      ],
      //均销量
      "Average": [
        salesVolume[0] / json.user_number,
        salesVolume[1] / json.user_number,
        salesVolume[3] / json.user_number,
        salesVolume[5] / json.user_number,
        salesVolume[7] / json.user_number,
      ]
    };

          forDataTime(sales_volume.volume, $(".consumer td"))
    forDataTimeyop(sales_volume.Average, $(".equally td"))
    for (var i = 0; i < sales_volume.compare.length; i++) {
      if (isNaN(sales_volume.compare[i])) {
        sales_volume.compare[i] = 0;
      }
      var sales_volume_num = sales_volume.compare[i]
      if (sales_volume_num == "NaN") {
        sales_volume_num == 0;
      }

      if (!sales_volume_num) {

        if (sales_volume.compare[i] === "Infinity") {
          sales_volume.compare[i] == 0;
        }
        $(".relatively td").eq(i + 1).html('持平 &nbsp;<img src="/static/images3/rectangle.png">')

      } else if (sales_volume_num < 0) {
        if (sales_volume.compare[i] === "Infinity") {
          sales_volume.compare[i] == 0;
        }
        $(".relatively td").eq(i + 1).html(sales_volume_num + '%&nbsp;<img src="/static/images3/Arrowb.png">')

      } else if (sales_volume_num > 0) {
        if (sales_volume.compare[i] === "Infinity") {
          sales_volume.compare[i] == 0;
        }
        $(".relatively td").eq(i + 1).html(sales_volume_num + '%&nbsp;<img src="/static/images3/arrowA.png">')

      }
    }

})
</script>
</html>