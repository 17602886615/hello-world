<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="">
  <!-- <link rel="stylesheet" type="text/css" href="./static/css/dcalendar.css"> -->
<!-- <link rel="stylesheet" type="text/css" href="./static/css/sales-api/sales-api.css"> -->

  <link rel="stylesheet" type="text/css" href="/static/css/dateRange.css"/>
  <!-- <link rel="stylesheet" type="text/css" href="/static/css/monthPicker.css"/> -->
<!-- <link href="./static/css/sales-api/bootstrap.min.css" rel="stylesheet"> -->
</head>
<body>
          <!-- 时间容器 -->
         <div class="selection pull-left" style='margin-left: 30px;'>
          <span  class="selection-text  pull-left">时间段选择：</span>
               <div class="ta_date" id="div_date_demo">
                    <span class="date_title" id="date_demo">请选择时间段</span>
                    <a class="opt_sel" id="input_trigger_demo" href="#">
                        <i> <img src="static/images3/regb.png" alt="" style='    margin-top: -7px;'></i>
                    </a>
                 </div>
       
            <div id="datePicker"></div>
          </div>
</body>
<script type="text/javascript" src="/static/js/jquery.min.js"></script>

<script src="/static/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./static/js/layer/layer.js"></script>

<script type="text/javascript" src="/static/js/dateRange.js"></script>  
<script>

   // 时间选择
    var dateRange = new pickerDateRange('date_demo', {
      //aRecent7Days : 'aRecent7DaysDemo3', //最近7天
      isTodayValid: true,
      startDate: '',
      endDate:'',
      //needCompare : true,
      //isSingleDay : true,
      //shortOpr : true,
      //autoSubmit : true,
      defaultText: ' 至 ',
        // format : 'YYYY-MM-DD HH:mm:ss', //控件中from和to 显示的日期格式
      inputTrigger: 'input_trigger_demo',
      theme: 'ta',
      success: function(obj) {
        // $("#dCon_demo").html('开始时间 : ' + obj.startDate + '<br/>结束时间 : ' + obj.endDate);
        $("#time1sub").val(obj.startDate)
        $("#time2sub").val(obj.endDate)
       $('.dataUlLI .activer').removeClass('activer');  

      }
    });

</script>

</html>