

      <link href="./static/css/sales-api/bootstrap.min.css" rel="stylesheet">


      <link rel="stylesheet" type="text/css" media="all" href="./static/css/sales-api/daterangepicker-bs3.css" />

      <script type="text/javascript" src="./static/css/sales-api/jquery-1.8.3.min.js"></script>

      <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

      <script type="text/javascript" src="./static/css/sales-api/moment.js"></script>

      <script type="text/javascript" src="./static/css/sales-api/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="./static/css/sales-api/sales-api.css">
<style type="text/css" media="screen">
	.oReturn{
  padding:10px;
  position:absolute;
  z-index: 100;
  right:10px;
  top:10px;

}
.oReturn button{
    background-color: #01B1D6;border-radius: 5px;
}
     .daterangepicker,.daterangepicker .calendar-date,.calendar tr:first-child th{
      background: #292834;

      color:#B0B0BA;
}
.input-group-addon:last-child {
    border-left: 0;
    background: #292834;
}
.daterangepicker .ranges .input-mini{
     background: #363643;
      color:#B0B0BA;
      border-color: #B0B0BA;
}
.daterangepicker .btn-default {
    color: #B0B0BA;
    background-color: #363643;
    border-color: #B0B0BA;
}
 .daterangepicker    .daterangepicker select{
    color: #B0B0BA;
    background-color: #363643;
    border-color: #B0B0BA;
}
 .daterangepicker .calendar{
  border:none;
 }
.daterangepicker select,.daterangepicker select:hover{
  background-color: #363643
}
.pagination-sm>li>span, .pagination-sm>li>span:hover {
    border: none;
    background: #292834;
}
.daterangepicker.opensright:after {
  border:none;
}
.soue input{
      margin-left: 20px;
    padding: 0 15px;
}
.pagination>li>a, .pagination>li>span{
      background-color: #363643;
         color: #B0B0BA;
}
.fa-arrow-right:before {
    content: "\f061";
}
.fa-arrow-left:before {
    content: "\f060";
}
.oReturn button {
    background-color: #2f4554;
    border-radius: 5px;
    padding: 9px;
  /*  top: 10px;
    right: 10px;*/
    color: #fff;
    /*z-index: 10000;*/
    /*position: absolute;*/
}
.dropdown-menu {
    max-height: 250px;
    overflow: auto;
}
</style>


 


         <div>
              <a href="./index.php?r=sales-api/index"  class="oReturn"><button type="text">返回</button></a>

         </div>
<div style="width:100%;">


	<table class="table" style="background-color: #292834;text-align: center;">
	 <thead>

	 	   <tr class="header" style="font-weight: bold">
		   <td class="name">销量概况  <i class="volumeHover glyphicon glyphicon-question-sign" style="color: #01B1D6">
		  	 <div class="volumeText" >
		  		销量概况统计的是用户通过设备扫过条码的数量，表示销量，和实际销量有延迟，可能出现微小误差，一般在5%范围内。日期是表示近7天，最近30天，最近90天的时间
		  	 </div>
		   </i>
     </td>
		  <td> 今日 </td>
		  <td>昨日</td>
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
			</i></td>
			<td></td>
	 		<td></td>
	 		<td></td>
	 		<td></td>
	 		<td></td>
		</tr>
	 </tbody>
</table>
</div>

<div style="clear:both;padding:20px"></div>
<div style="padding:0 20px"   id="detailLinehtml" >
    <div class="container-fluid"  >
        <div class="row" style="margin-left: -50px; margin-right: -50px;">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"   >
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
                                  <option value ="1">今日</option>  
                                  <option value ="2">昨日</option>  
                                  <option selected = "selected" value ="3">7天销量</option>  
                                  <option value ="4">30天销量</option>  
                                  <option value="5">90天销量</option>
                                  <option value="6">今年的销量</option>
                                </select>  
                            </div>
                       </div>
                     <div id="charts2"   style=" height:400px;"></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >
                <div style="background-color: #292834; ">
                 <div id="charts5"   style="width: 100%;height:400px;min-width: 500px"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="clear:both;padding:20px 0 "></div>
<div class="container-fluid" style="background-color: #292834;padding: 20px 0px; margin-left: 0px ;display: none">
    <div class="row" style="">
        <div class="col-lg-6 col-md-6col-sm-12 col-xs-12">
            <div id="charts"  style="width: 100%;height:360px;" ></div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 Percentage"  id="Percentage">
        </div>
    </div>
</div>
<div style="width:100%;border-top: 1px solid #292834;margin-top: 20px">
     <div class="timeData" style="padding:10px; color:#DEDDDF">
    <div style="    width: 300px;position: relative;">
          <div class="input-group">
        <input id="adddate" class="form-control" placeholder="选择时间" / style="width:300px;color:#DEDDDF"> 
   
          </div>
     <div class="soue" style="position: absolute; left:100%;top:0;height: 35px;    display: inline-flex; color:#DEDDDF">
            <input type="text" name="" id="search"  value="" placeholder="搜索内容" >
            <input onclick="begin_linlst_time_clea()"  type="button" value="搜索"/>   
            <input onclick="begin_end_time_clear()" type="button" value="清除"/ >  

             
     </div>
           
    </div>
</div>
  
     <div class="tableBox" style="position: relative;">
        <span  id="method">导出表格</span>
         <table id="table" style ="width:100%;text-align: center; position: relative;">
             <thead>  
                 <tr>
                     <th>序号</th>
                     <th>姓名</th>
                     <th>联系电话</th>
                     <th>设备编号</th>
                     <th>服务中心
                        <!--   <select id="_service_bo" name="cars" style=" border: none; background: #292834;"> 
                          <option value="volvo" style=" border: none; background: #292834;">服务中心</option> 
                          </select>  -->
                     </th>
                     <th>运营中心
                        <!-- <select name="cars" style=" border: none; background: #292834;"> 
                          <option value="volvo" style=" border: none; background: #292834;">运营中心</option> 
                          </select>  -->
                     </th>
                     <th>地区
                        <!--     <select name="cars" style=" border: none; background: #292834;"> 
                          <option value="volvo" style=" border: none; background: #292834;">地区</option> 
                          </select>  -->
                     </th>
                     <th>其他
                       <!--  <select name="cars" style=" border: none; background: #292834;"> 
                          <option value="volvo" style=" border: none; background: #292834;">其他</option> 
                          </select> 
 -->
                     </th>
                     <th>总销量
                <!--       <select name="cars" style=" border: none; background: #292834;"> 
                          <option value="volvo" style=" border: none; background: #292834;">总销量</option> 
                          </select> -->

                     </th>
                 </tr>
             </thead>
              <tbody id="tableBoxData">

             </tbody>
             </table>
             <table width="100%">
           <tfoot class="_tfoot">
              <tr>
               <td colspan="8" rowspan="" headers="">
                  <div class="tfbody" style="text-align: center; padding: 20px;width: 100%;margin:auto;">
                      <nav aria-label='Page navigation' style='     display: initial;  margin-top: -25px;padding-right: 20px;'>
                        <ul class='pagination pagination-sm' id='Circula' style=' margin: -8px;'>
                          <li  class="Previous">
                                 <span aria-hidden='true'>&laquo;</span>
                          </li>
                             <li   class='hort'><a href='#'>1</a></li>
                          <li class="Next">
                              <span aria-hidden='true'>&raquo;</span>
                          </li>
                        </ul>
                      </nav> 
                     <div class="tfData">
                      <span>跳转到：</span> 
                      <input type="number" id="sconter" value="1" max='' min="1"> 
                       <button type="btn" id="btn" value="确定"><a href="javascript:void(0)">确定</a></button>&nbsp;&nbsp;&nbsp;&nbsp;
                      <span>每页显示：
                            <select type='text' name='page_size' id='page_size' style='width:50px;background-color:#292834;border-radius:5px;border:none'>
                            <option value='10'>10</option>
                            <option value='20'>20</option>
                            <option value='50'>50</option>
                            </select>
                          </span>&nbsp;&nbsp;&nbsp;&nbsp;当前显示：第
                             <span id='numTotal' max="1"> 1</span>页
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <span id='Total'> 共：20 条</span>
                      </div> 
                    </div>
             </td>
             </tr>
           </tfoot>
         </table>
     </div>
 </div>
<table id ="tableData" style="color: #fff;display: none">
  <thead>
    <tr>
      <th></th>
    </tr>
   </thead>
   <tbody id="tablebody">
   </tbody>
</table>
 <script>
        var role_ide='<?=$role_id  ?>';
        var LoginNam='<?=$LoginName ?>';
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
 }


 var DateStr  = GetDateStr(0, 1);
                     $('#adddate').daterangepicker({
                      startDate: GetDateStr(-6, 1),  
                      endDate: moment(),  
                      minDate: '2012-01-01',    //最小时间  =====>>格式要跟格式化的样式一致
                      endDate :  GetDateStr(0, 1), //最大时间   
                      dateLimit : {days : 360}, //起止时间的最大间隔  
                      showDropdowns : true,
                      showWeekNumbers : false, //是否显示第几周  
                      timePicker : false, //是否显示小时和分钟  
                      timePickerIncrement : 60, //时间的增量，单位为分钟  
                      timePicker12Hour : false, //是否使用12小时制来显示时间  
            
                          opens : 'right', //日期选择框的弹出位置  
                          buttonClasses : [ 'btn btn-default' ],
                          applyClass : 'btn-small btn-primary blue',
                          cancelClass : 'btn-small',
                          format : 'YYYY-MM-DD', //控件中from和to 显示的日期格式  
                          separator : ' 到 ',
                          locale : {
                              applyLabel : '确定',
                              cancelLabel : '取消',
                              fromLabel : '起始时间',
                              toLabel : '结束时间',
                              customRangeLabel : '自定义时间',
                              daysOfWeek : [ '日', '一', '二', '三', '四', '五','六' ],
                              monthNames : [ '一月', '二月', '三月', '四月', '五月',
                                      '六月', '七月', '八月', '九月', '十月', '十一月',
                                      '十二月' ],
                              firstDay : 1
                          }
                      },
                      function(start, end, label) {//格式化日期显示框  
                          $('#adddate span').html(
                                  start.format('MM-DD-YYYY') + ' - '
                                          + end.format('YYYY-MM-DD'));
                      });




$("#adddate").attr('placeholder',GetDateStr(-6, 1) +'到'+ DateStr)
 $(".navdata li").click(function(){
  $(".navdata .active").removeClass('active');
  $(this).addClass('active')
 })       
 </script>
	 	<script type="text/javascript" src="./static/js/jquery.min.js"></script>
     <script type="text/javascript" src="./static/js/jquery.min.js"></script>
     <script type="text/javascript" src="./static/js/echarts/echarts.js"></script> 
     <script src="http://echarts.baidu.com/build/dist/echarts.js"></script>
		<script type="text/javascript" src="./static/js/sales-api/communal.js"></script>
    <!-- <script type="text/javascript" src="./static/js/sales-api/index.js"></script> -->
    <!-- <script type="text/javascript" src="./static/js/sales-api/brokenLineGraph.js"></script> -->
		<script type="text/javascript" src="./static/js/sales-api/detail2.js"></script>
<script>
   var time_id={
      'time':'3',
      'role_id':'<?=$role_id?>',
      'LoginName':'<?=$LoginName ?>'
       }
     var _date= []
     function  NumberDays(xin){
       for (var i = 0 ; i >= -xin+1; i--) {
       _date.push( GetDateStr(i,1))  
       }
       _date.reverse();
      }
   time_id = {'time': '3',
      'role_id':'<?=$role_id?>',
      'LoginName':'<?=$LoginName ?>'
    }
    xin = 7;
    _date = []
    NumberDays(xin)
    javaData(_date,time_id)

 var myChart = echarts.init(document.getElementById('charts2'));
 var option2;
  var myChart5 = echarts.init(document.getElementById('charts5'));
 var option5;
function javaData(_date,linet){

    $.post('./?r=sales-api/sales-detail-line', linet,function(json){
            var json =JSON.parse(json);
            var user_1=0;//家庭
            var user_2=0;//办公
            var user_3=0;//集团
            var user_4=0;//其他
            var map=0;
            var sales_to=[]; 
              var _dateY=[]
              if(json.length){
                sales_to=[]
                for (var i = 0; i<json.length; i++) {
             //    // //销量时间 （天）
                    var strjson= json[i].RowTime.split(" ");
                    var   _dateYData=strjson[1].split(":");
                      _dateY.push(_dateYData);
                    var strjsondata =parseInt(Date.parse(strjson[0]));
                   for (var j = 0 ; j <_date.length; j++) {
                       sales_to.push('0');
                      var _datel_ratio = parseInt(Date.parse(_date[j])) ;

                      // console.log(_datel_ratio);
                         if(_datel_ratio==strjsondata){
                              sales_to[j]++
                          }
                    };
                       if(json[i].CustomerType=='undefined'){
                            json[i].CustomerType==[];
                        }

                        else if(json[i].CustomerType==1){
                            user_1 ++
                           }

                        else  if(json[i].CustomerType==2){
                             user_2 ++
                          }
                        else   if(json[i].CustomerType==3){
                             user_3++
                           }
                       else   if(json[i].CustomerType==99){
                           user_4++
                         }
             };
              }else{
                      for (var j = 0 ; j <_date.length; j++) {
                           sales_to.push('0');
                      }
              }
        if (_date.length < 3) {
               _date = [];
              var   _dateX = [];
              var   _dateXdata = [];
              var _dataData=[];
                 for( var i=0; i<24;i++){
                   var date = (i)+":00"
                    _date.push(date)
                    _dataData.push("0")
                    for(var  y=0;y<_dateY.length;y++){
                          if(_dateY[y][0]==i){
                          _dataData[i]++
                      }
                      }
                   }
                sales_to=_dataData
               
            }

 brokenLine(myChart,_date,sales_to)

 var pieChartName = ['家庭','公司','集团','其他'];
 var pieChartVue = [user_3,user_2,user_1,user_4];

  pieChart(myChart5,pieChartName,pieChartVue)
            
   })
 }  

$("#IsTurnOut").change(function() {
  var ss = $(this).children('option:selected').val();
  if (ss == "1") {
    time_id = {
      'time': '1',
      'role_id':'<?=$role_id?>',
      'LoginName':'<?=$LoginName ?>'
    }
    xin = 1;
    _date = []
    NumberDays(xin)
    javaData(_date,time_id);

  } else if (ss == "2") {
    time_id = {'time': '2',
      'role_id':'<?=$role_id?>',
      'LoginName':'<?=$LoginName ?>'
    }
    _date = []
    xin = 2;
    NumberDays(xin)
    javaData(_date,time_id)

  } else if (ss == "3") {
     time_id = {'time': '3',
      'role_id':'<?=$role_id?>',
      'LoginName':'<?=$LoginName ?>'
    }
    xin = 7;
    _date = []
    NumberDays(xin)
    javaData(_date,time_id)
  } else if (ss == "4") {
time_id = {'time': '4',
      'role_id':'<?=$role_id?>',
      'LoginName':'<?=$LoginName ?>'
    }
    xin = 30;
    _date = []
    NumberDays(xin)
    javaData(_date,time_id)
  } else if (ss == "5") {
time_id = {'time': '5',
      'role_id':'<?=$role_id?>',
      'LoginName':'<?=$LoginName ?>'
    }
    xin = 90;
    _date = []
    NumberDays(xin)
    javaData(_date,time_id)
  } else if (ss == "6") {
time_id = {'time': '6',
      'role_id':'<?=$role_id?>',
      'LoginName':'<?=$LoginName ?>'
    }
    xin = 360;
    _date = []
    NumberDays(xin)
    javaData(_date,time_id)
  } 
});


</script>
 
