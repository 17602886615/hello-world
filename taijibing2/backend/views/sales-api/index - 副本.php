<!DOCTYPE html>
<html>
<head>
  <title>销量统计</title>
  
  <link rel="stylesheet" href="/static/css/bootstrap.min.css"> 
  <link rel="stylesheet" type="text/css" href="/static/css/dateRange.css"/>
  <!-- <link rel="stylesheet" type="text/css" href="/static/css/monthPicker.css"/> -->
  <link rel="stylesheet" href="./static/css/chosen.css"/>

  <!-- <link rel="stylesheet" href="./static/css/Common.css?v=1.1"/> -->
  <!-- <link rel="stylesheet" href="./static/css/sales-volume/index.css?v=1.1"/> -->
  <link rel="stylesheet" type="text/css" href="./static/css/sales-api/sales-api.css">
</head>
<style type="text/css" media="screen">


.chosen-container{
      width: 74px;
    float: right;
    right: 25px;
    min-width: 100px;
}
.chosen-container .chosen-results li.highlighted {
    background-color: #3875d7;
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(20%, #E46045), color-stop(90%, #E46045));
    background-image: linear-gradient(#E46045 20%, #E46045 90%);
    border-radius: 0px;
    color: #fff;  
}

</style>
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


<div style="clear:both;padding:15px"></div>
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
                               <!--  <select  id=goods>
                                   <option value="4">全部商品</option>
                                </select> -->
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
   <!--      <div class="input-group">
      <input id="adddate" class="form-control" placeholder="选择时间" / style="width:300px;color:#DEDDDF"> 
 
        </div> -->

                 <div class="selection pull-left" style='margin-left: 30px;'>
          <!-- <span  class="selection-text  pull-left">时间段选择：</span> -->
               <div class="ta_date" id="div_date_demo">
                    <span class="date_title" id="date_demo">请选择时间段</span>
                    <a class="opt_sel" id="input_trigger_demo" href="#">
                        <i> <img src="static/images3/regb.png" alt="" style='    margin-top: -7px;'></i>
                    </a>
                 </div>
       
            <div id="datePicker"></div>
          </div>
   <div class="soue" style="position: absolute; left:100%;top:0;height: 35px;    display: inline-flex;">
           <input type="text" name="" id="search"  value="" placeholder="搜索内容" >
            <input onclick="begin_linlst_time_clea()"  type="button" value="搜索"/>   
        <input onclick="begin_end_time_clear()" type="button" value="清除"/ >  

           
   </div>
         
  </div>
</div>



<div style="clear:both;padding:80px 0 ">
</div>

</div>



</body>
<script type="text/javascript" src="/static/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/js/dateRange.js"></script>  
<script type="text/javascript" src="./static/js/layer/layer.js"></script>
  <script type="text/javascript">
       var ii=layer.msg("加载中……");
  </script>
<script src="/static/js/bootstrap.min.js"></script>
<script src="/static/js/echarts/echarts.js"></script>
<script src="/static/js/echarts/dist/echarts.js"></script>
<script type="text/javascript" src="./static/js/chosen.jquery.min.js"></script>
<script type="text/javascript" src="./static/js/sales-api/communal.js"></script>
<script type="text/javascript" src="./static/js/sales-api/map.js"></script> 
<script>

      var role_id='<?=$role_id  ?>';
      var LoginName='<?=$LoginName ?>';


   // // 时间选择
   //  var dateRange = new pickerDateRange('date_demo', {
   //    //aRecent7Days : 'aRecent7DaysDemo3', //最近7天
   //    isTodayValid: true,
   //    // startDate: time1nbs,
   //    // endDate:time2nbs,
   //    //needCompare : true,
   //    //isSingleDay : true,
   //    //shortOpr : true,
   //    //autoSubmit : true,
   //    defaultText: ' 至 ',
   //      // format : 'YYYY-MM-DD HH:mm:ss', //控件中from和to 显示的日期格式
   //    inputTrigger: 'input_trigger_demo',
   //    theme: 'ta',
   //    success: function(obj) {
   //      // $("#dCon_demo").html('开始时间 : ' + obj.startDate + '<br/>结束时间 : ' + obj.endDate);
   //      // $("#time1sub").val(obj.startDate)
   //      // $("#time2sub").val(obj.endDate)
   //     // $('.dataUlLI .activer').removeClass('activer');  

   //    }
   //  });












  $("#IsTurnOut").chosen();

var xin = 7;


function NumberDays(xin) {
  var _date = []
  for (var i = 0; i >= -xin + 1; i--) {
    _date.push(GetDateStr(i, 1))
      // console.log(GetDateStr(i,1))
  }
  _date.reverse();

return _date;
}
var _date = NumberDays(xin)
javaData(_date)
var time_id = {
  'time': 3
}
$("#IsTurnOut").change(function() {
  var ss = $(this).children('option:selected').val();
   var ii=layer.msg("加载中……");
  // alert(ss)
  if (ss == "1") {
    time_id = {
      'time': '1'
    }
    xin = 1;
    // _date=['0:00','6:00','12:00','16:00','22:00'];
     _date =_date =NumberDays(xin)
    
    javaData(_date, time_id)
  } else if (ss == "2") {
    time_id = {
      'time': '2'
    }
    
    xin = 2;
    _date =_date =NumberDays(xin)
    // date=['0:00','6:00','12:00','16:00','22:00'];
    // NumberDays(xin)
    javaData(_date, time_id)

  } else if (ss == "3") {
    time_id = {
      'time': '3'
    }


    xin = 7;
        _date =NumberDays(xin)
    // NumberDays(xin)

    javaData(_date, time_id)
  } else if (ss == "4") {
    time_id = {
      'time': '4'
    }
    xin = 30;

      // console.log(_date)
    _date = NumberDays(xin)
   


    javaData(_date, time_id)
  } else if (ss == "5") {
    time_id = {
      'time': '5'
    }
    xin = 90;
    // _date = []
    // NumberDays(xin)
      _date =NumberDays(xin)
    javaData(_date, time_id)
  } else if (ss == "6") {
    time_id = {
      'time': '6'
    }
    xin = 360;
    _date =NumberDays(xin)
    // console.log(_date)
    javaData(_date, time_id)
  } else {

    xin = 7;
    _date =NumberDays(xin)
    javaData(_date, time_id)
  }
});





function javaData(_date, time_id) {
  $.post('./?r=sales-api/sales-detail-line', time_id, function(json) {

    var json = JSON.parse(json);
    var sales_to = [];
    var user_1 = 0; //家庭
    var user_2 = 0; //办公
    var user_3 = 0; //集团
    var user_4 = 0; //其他
    var map = 0;
    var _dateY = []
    if (json.length) {
      for (var i = 0; i < json.length; i++) {
        // for (var i in json) {
        //    // //销量时间 （天）
        var strjson = json[i].RowTime.split(" ");
        // 截取年月日
        var strjsondata = parseInt(Date.parse(strjson[0]));
        // var   _dateYData=strjson[1].replace(":","");
        var _dateYData = strjson[1].split(":");


        // 添加注册时间
        _dateY.push(_dateYData);


        // 循环需要的x轴天数
        for (var j = 0; j < _date.length; j++) {
          sales_to.push('0');
          var _datel_ratio = parseInt(Date.parse(_date[j]));
          // console.log(_datel_ratio);
          if (_datel_ratio == strjsondata) {
            sales_to[j]++
          }
        };
        // console.log(strjsondata)
        if (json[i].CustomerType == 'undefined') {
          json[i].CustomerType == [];
        }
        if (json[i].CustomerType == 1) {
          user_1++
        }

        if (json[i].CustomerType == 2) {
          user_2++
        }
        if (json[i].CustomerType == 3) {
          user_3++
        }
        if (json[i].CustomerType == 99) {
          user_4++
        }
      }
    } else {
      for (var j = 0; j < _date.length; j++) {
        sales_to.push('0');
      }
    }
    if (_date.length < 3) {
      _date = [];
      var _dateX = [];
      var _dateXdata = [];
      var _dataData = [];
      for (var i = 0; i < 24; i++) {
        var date = (i) + ":00"
        _date.push(date)
        _dataData.push("0")
        for (var y = 0; y < _dateY.length; y++) {
          if (_dateY[y][0] == i) {
            _dataData[i]++
          }
        }
      }
      sales_to = _dataData

    }
    var myChart = echarts.init(document.getElementById('charts2'));
    var option2;
    brokenLine(myChart, _date, sales_to)


    var myChart5 = echarts.init(document.getElementById('charts5'));
    var option5;
    var pieChartName = ['家庭', '公司', '集团', '其他'];
    var pieChartVue = [user_3, user_2, user_1, user_4];
    pieChart(myChart5, pieChartName, pieChartVue)
  })
}






</script>
</html>