<!DOCTYPE html>
<html>
<head>
	<title>电子水票</title>

	<link rel="stylesheet" href="/static/css/bootstrap.min.css"> 
 	<link rel="stylesheet" type="text/css" href="/static/css/dateRange.css"/>
	<link rel="stylesheet" type="text/css" href="/static/css/monthPicker.css"/>
		<link rel="stylesheet" href="./static/css/chosen.css"/>
	  <link rel="stylesheet" href="./static/css/Common.css?v=1.1"/>
  <link rel="stylesheet" href="./static/css/sales-volume/index.css?v=1.1"/>
	<!-- <link rel="stylesheet" type="text/css" href="/static/css/conmones2.css"/> -->
	<link rel="stylesheet" type="text/css" href="/static/css/send-water-log/index.css"/>
</head>
<style type="text/css" media="screen">
.wrap_line, .chosen-container-active.chosen-with-drop .chosen-single, .chosen-container-single .chosen-single{
	    background-color: #2D3136;
    border: none;
}
.ta_date, .date_title {
    background-color: #2D3136;
}
#date_demo {
    width: 200px;
    height: 30px;
    line-height: 30px;
    line-height: 15px;
    background-color: #2D3136;
    border: none;
    display: inline-block;
}
.selection{
	width: 330px;
}
.notes {
    position: relative;
    width: 15px;
    font-size: 12px;
    font-size: 1.2rem;
    margin-left: 50px;
}
.notes span {
    width: 15px;
    height: 4px;
    position: absolute;
    left: -25px;
    top: 6px;
    top: 0.6rem;
    background-color: #00f;
}
.popupa {
    width: 100%;
    height: 100%;
    background-color: #393E45;
    border-top: 3px solid #E46045;
    text-align: center;
    padding-top: 35px;
}
.popupa table td {
    font-size: 18px;
    color: #fff;
    text-align: left;
    padding-right: 15px;
}
.popupa table td span {
    font-size: 15px;
}
.popupa button, .popupa .submitBtn button {
    width: 140px;
    height: 50px;
    font-size: 18px;
    color: rgb(233,233,233);
    border-radius: 5px;
    margin-top: 65px;
    background-color: #4ADCDD;
    border: none;
}
</style>
<body>
<div id='electronicBill'>
	<!--内容主题-->
	  <form action="./index.php?r=send-water-log/index" method="post" accept-charset="utf-8">
	 <div class='page-head' style='    padding: 35px;padding-bottom: 0;'>

	 	<div class='head-txt'>
	 		<!-- 时间容器 -->
	 		<div class="selection pull-left">
				<span  class="selection-text  pull-left">时间段：</span>
				 <div class="ta_date" id="div_date_demo">
			        <span class="date_title" id="date_demo"></span>
			        <a class="opt_sel" id="input_trigger_demo" href="#">
			            <i> <img src="static/images3/regb.png" alt="" style='    margin-top: -7px;'></i>
			        </a>
			    </div>
			    <input type="text" name="selecttime" id='selecttime1' value="" style="display: none">
			    <div id="datePicker"></div>
		   </div>
 <!-- 地区容器 -->
			   <div class="selection pull-left" style="width:400px">
					 <span  class="selection-text  pull-left">地区选择：</span>
					 <div class="region pull-left address" >
					 	   <div class="wrap_line">
					 	        <select class="control-label" name="province"  id="province" class="province">
		                            <option value="" selected>请选择省</option>
				                </select>
				                <select class="control-label" name="city" id="city"  class="city">
				                     <option value="">请选择市</option>
				                </select>
				                <select class="control-label" name="area" id="area"  class="area">
				                  <option value="">请选择区</option>
				                </select>
					 	   </div>
					 </div>

			   </div>

	 	</div>
       <div class='head-txt'>
       	   <div class="selection pull-left">
       	   		<span  class="selection-text  pull-left">状&nbsp;&nbsp;&nbsp;态：</span>
       	   		<div class="region pull-left address" >
					 	   <div class="wrap_line">
					 	        <select class="control-label" name="state"  id="state" class="state">
		                            <option value="" selected>全部状态</option>
		                            <option value="1">已配送</option>
		                            <option value="2">需送水</option>
		                            <option value="3">已完成</option>
				                </select>
				                <select class="control-label" name="user_state" id="user_state"  class="user_state" style="width: 125px;">
				                     
				                     <option value="0">未激活用户</option>
				                     <option value="1">正常用户</option>
				                     <option value="2">已初始化用户</option>
				                     <option value="3" selected>全部用户</option>
				                </select>
				              
					 	   </div>
					 </div>
       	     </div>
		     <!-- 搜索容器 -->
             <div class="selection pull-left" id="searchbg">
               <span  class="selection-text  pull-left">搜&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;索：</span>
               <div class="region pull-left address" style='background-color: #2D3136;border-radius: 2px'>
                  <div class="wrap_line" style="    display: initial;">
                     <input style='border: none;' type="text" name="search"  id="searchp" value="" placeholder="请输入关键字">
                  </div>
              </div>
             </div>
     
             </div>
   <!-- 注释 -->
		<div class='head-txt'>
			<div class="selection pull-left" style='    width: inherit;'>
			  <p>注释： <span class='notes'><span style='background: #EE5030'></span> 此颜色表示三天及三天内的变化</span>
			   <span class='notes'><span style='background: #3EDADB'></span> 此颜色表示提前4-6天的变化</span></p>
			 </div>

			  <!-- 条件按钮 -->
               <div class="submitBtn"  style='display: inline-block; float: right;margin-right: 15%;' >
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="submit" class="btn " id="submit" >   查看</button>
                &nbsp;&nbsp;
                <button type="text"  class="btn " id="removerSub">清空条件</button>
                </div>
		</div>	
       </div>
	</div>
	</form>
		<div class='middle'  style="    margin-top: 20px;">
		   <table class="table" >
		   	<thead>
		   		<tr>
		   			<th>序号</th>
		   			<th>用户姓名</th>
		   			<th>手机号</th>
		   			<th>设备编号</th>
		   			<th>所在地区</th>
		   			<th>地址</th>
		   			<th>服务中心</th>
		   			<th>客户类型</th>
		   			<th>剩余水量（L）</th>
		   			<th>送水特别要求</th>
		   			<th>建议送水时间</th>
		   			<th>购水余额</th>
		   			<th id='sorttext' style='color:#E46045;cursor: pointer;'>操作时间</th>

		   			<th></th>
		   			<th>送水状态</th>
		   			<th>送水</th>
		   			<th>充值</th>
		   			<th>送水明细</th>
		   			<th>充值记录</th>

		   		</tr>
		   	</thead>
		   	<tbody id="dev_list_body">
		   		<tr>
<!-- 		   		  <td >1</td>
		   		  <td >小黄</td>
		   		  
		   		  <td >17602006610</td>
		   		  <td >03251544</td>
		   		  <td >四川省-成都市-高新区</td>
		   		  <td >XX街道XX号，协信中心502</td>
		   		  <td >协信服务中心</td>
		   		  <td >公司</td>
		   		  <td >10</td>
		   		  <td >无要求（提前联系）</td>
		   		  <td >2017-8-22</td>
		   		  <td >200</td>
		   		  <td >2017-8-22 ，16：30：30</td>
		   		  <td ></td>
		   		  <td class='ShareBtn'> <a href="/index.php?r=send-water-log/deliver-water"><div class="Ingp"><p>已完成</p></div></a> </td>
		   		  <td class=" ShareBtn give" > <div class="Ing">	<img src="/static/images3/give.png" ></div> </td>
		   		  <td class="ShareBtn Recharge" > <div class="Ing"><img src="/static/images3/Recharge.png" ></div></td>
		   		  <td class="ShareBtn giveRecord" > <div class="Ing">	<img src="/static/images3/giveRecord.png" ></div></td>
		   		  <td class="ShareBtn RechargeRecord" > <div class="Ing">	<img src="/static/images3/RechargeRecord.png" ></div></td> -->
		   		 </tr>
		   	</tbody>
		   </table>	
	</div>
	<div style="  position: relative;margin: auto; width: 100%;text-align: center; height: 100px;">
		 <div id="page" class="page_div"></div>
	</div>
</div>
<script type="text/javascript" src="/static/js/jquery.min.js"></script>
<script type="text/javascript" src="./static/js/layer/layer.js"></script>	
<script type="text/javascript" src="./static/js/chosen.jquery.min.js"></script>
<script type="text/javascript" src="/static/js/Common2.js?v=1.5"></script>
<script src="/static/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/static/js/dateRange.js"></script>
<script type="text/javascript" src="/static/js/monthPicker.js"></script>
<script type="text/javascript" src="/static/js/paging3.js"></script>
<script type="text/javascript">
   // 接收值
   var areas = <?=json_encode($areas)?>;
   var areas = eval('(' + areas + ')');
   var where_datas = <?=json_encode($where_datas)?>;
   var where_datas = eval('(' + where_datas + ')');
   var total = eval('(' + <?=json_encode($total)?> + ')');
   var init_devnos = eval('(' + <?=json_encode($init_devnos)?> + ')');
   var dev_list = eval('(' + <?=json_encode($dev_list)?> + ')');
    // console.log(total)
    // console.log(where_datas)




// 表格渲染
   if (dev_list) {
   	dev_listdata(dev_list)
   }
	var selecttime = where_datas.selecttime;
	 	var time1='';
	 	var time2='';
	 	if(selecttime){

	 	var timeData= selecttime.split("至");
	 	
	 		time1=timeData[0];
	 		time2=timeData[1];
	 		$("#selecttime1").val( where_datas.selecttime)
	 	}
	   // 时间选择
   var dateRange = new pickerDateRange('date_demo', {
   	//aRecent7Days : 'aRecent7DaysDemo3', //最近7天
   	isTodayValid: true,
   	startDate :time1,
   	endDate :time2,
   	//needCompare : true,
   	//isSingleDay : true,
   	//shortOpr : true,
   	//autoSubmit : true,
   	defaultText: ' 至 ',
   	inputTrigger: 'input_trigger_demo',
   	theme: 'ta',
   	success: function(obj) {
   		$("#dCon_demo3").html('开始时间 : ' + obj.startDate + '<br/>结束时间 : ' + obj.endDate);
   		$("#selecttime1").val($("#date_demo").val());
   	 }
   });
    // 地址
   addressResolve(areas,where_datas.province,where_datas.city,where_datas.area)
   //用户类型
	customertypea({
	  name:'state',
	  where:where_datas.state
	})
	dev_state({
	  name:'user_state',
	  where:where_datas.user_state
	})
	if(where_datas.search){
		$("#searchp").val(where_datas.search)
	}
	$("#removerSub").bind('click',function(){
			$("#date_demo").text('')
		    $("input").val('')
		    return false;
    })


   var sorttext = '0';
   // 下拉选择
   $(document).on('click', '#sorttext', function() {
       sorttext++
         if (sorttext >=3) {
            sorttext = 0;
         } 

   		$("#sortVal").val(sorttext);
         var _current =  $("#page .current").text();
         var nbsp =  $("#Jumpdisplay").text();
   		var searchParameters = {
   			province: where_datas.province,
   			city: where_datas.city,
   			area: where_datas.area,
   			selecttime: where_datas.selecttime,
   			state: where_datas.state,
   			user_state: where_datas.user_state,
   			search: where_datas.search,
   		

            offset: _current * nbsp - nbsp,
            limit: nbsp,
   			sort: sorttext
   		}
   	console.log(searchParameters)
   		Get_datas(searchParameters)
   	})



 //分页
   //分页
   $("#page").paging({
   	pageNo: 1,
   	totalPage: Math.ceil(total / 10),
   	totalLimit: 10,
   	totalSize: total,
   	callback: function(num, nbsp) {
   		var searchParameters = {
   			province: where_datas.province,
   			city: where_datas.city,
   			area: where_datas.area,

   			selecttime: where_datas.selecttime,
   			state: where_datas.state,
   			user_state: where_datas.user_state,
   			search: where_datas.search,
   			offset: num * nbsp - nbsp,
   			limit: nbsp,
   			sort: sorttext
   		}

         // alert(num)
   	  	Get_datas(searchParameters)


   	}
   })	







   function Get_datas(searchParameters) {
          console.log(searchParameters)
   	var ii = layer.open({
   		type: 1,
   		skin: 'layui-layer-demo', //样式类名
   		closeBtn: 0, //不显示关闭按钮
   		anim: 2,
   		shadeClose: false, //开启遮罩关闭
   		content: '<div style="background-color: #25282d;opacity: 0.8;text-align: center;color: #fff;padding:10px;">加载中.....</div>'
   	});
   	$.post('./index.php?r=send-water-log/dev-list', searchParameters, function(data) {
   		layer.close(ii);

   		var data = eval('(' + data + ')');
         console.log(data)
   		dev_listdata(data.dev_list)

         $("#sortVal").val(data.sort)

   	})
   };




   
   // console.log(poiuy)
   function dev_listdata(dev_list) {
   	$("#dev_list_body").empty();
console.log(dev_list)
   	var poiuy = GetDateStr(0, 1)

   	for (var i = 0; i < dev_list.length; i++) {
   		var item = dev_list[i];
        if ( item && item != null) {
        	 var UserId =item.UserId;
        	 var ploik = diy_time(poiuy, item.send_time);

           // console.log(item.send_time)
           // console.log(poiuy)
   			var colorTrSendTime = "";
   			if (ploik <= 3) {
   				colorTrSendTime = "#EE5030";
   			} else if (ploik > 3 && ploik <= 6) {
   				colorTrSendTime = "#3EDADB";
   			};
   			var Equipment = '——';
   			var EquipmentURL = ' '; //<a href="javascript:void(0)">
   			var EquipmentColor = '';
   			var EquipmentURLA = '' //</a>

   			var send_waterURL = '<a href="/index.php?r=send-water-log/send-water&UserId=' + item.UserId + '&CustomerType=' + item.CustomerType + '&AgentId=' + item.AgentId + '">'

   			var rechargeURL = '<a href="/index.php?r=send-water-log/recharge&UserId=' + item.UserId + '&CustomerType='  + item.CustomerType + '&AgentId=' + item.AgentId + '">'

   			var send_logURL = ' <a href="/index.php?r=send-water-log/send-log&UserId=' + item.UserId + '&CustomerType='  + item.CustomerType + '&AgentId=' + item.AgentId + '">'

   			var recharge_logURL = '<a href="/index.php?r=send-water-log/recharge-log&UserId=' + item.UserId + '&CustomerType='  + item.CustomerType + '&AgentId=' + item.AgentId + '">'


             // console.log(item.State)
             // console.log(ploik)
   			if (item.State == 1) {
   				Equipment = '已配送';
   				EquipmentColor = '#3EDADB'
   				EquipmentURL = ' <a href="/index.php?r=send-water-log/send-log&UserId=' + item.UserId + '&CustomerType=' + item.CustomerType + '&AgentId=' + item.AgentId + '">'

   			} else if (!item.State&& ploik < 3) {
   				Equipment = '需送水';
   				EquipmentColor = '#E46045'
   				EquipmentURL = ' <a href="/index.php?r=send-water-log/send-water&UserId=' + item.UserId + '&CustomerType=' + item.CustomerType + '&AgentId=' + item.AgentId + '">'
   			}  else if (item.State && ploik < 3) {
               Equipment = '需送水';
               EquipmentColor = '#E46045'
               EquipmentURL = ' <a href="/index.php?r=send-water-log/send-water&UserId=' + item.UserId + '&CustomerType='  + item.CustomerType + '&AgentId=' + item.AgentId + '">'

            } 
            else if (item.State != 1 && item.send_time == '没有送水记录') {
   				Equipment = '需送水';
   				EquipmentColor = '#E46045'
   				EquipmentURL = ' <a href="/index.php?r=send-water-log/send-water&UserId=' + item.UserId + '&CustomerType=' + item.CustomerType + '&AgentId=' + item.AgentId + '">'
   			}
            else if (item.State != 1 && item.send_time == '近期还没有用水') {
               Equipment = '需送水';
               EquipmentColor = '#E46045'
               EquipmentURL = ' <a href="/index.php?r=send-water-log/send-water&UserId=' + item.UserId + '&CustomerType=' + item.CustomerType + '&AgentId=' + item.AgentId + '">'
            }
             else if (item.State != 1 && ploik > 3) {
   				EquipmentURL = '';
   				Equipment = '已完成';
   				EquipmentColor = '#00f';

   				// send_waterURL = '';
   				// rechargeURL = '';
   				// send_logURL = '';
   				// recharge_logURL = '';

   			} else {
   				// Equipment ='——';
   				EquipmentURL = '';
   				Equipment = '已完成';
   				EquipmentColor = '#00f';

   			};

   			if(where_datas.user_state==2){
                EquipmentURL = '';
                send_waterURL = '';
                rechargeURL = '';
           }
   			for (var z in item) {
   				if (item[z] == null) {
   					item[z] = '——'
   				}
   			}
   			if (item.CustomerType == 1) {
   				CustomerType = '家庭'
   			} else if (item.CustomerType == 2) {
   				CustomerType = '公司'
   			} else if (item.CustomerType == 3) {
   				CustomerType = '集团'
   			} else {
   				CustomerType = '其他'
   			}
   			$.trim($("#title").val());
   			var html = '<tr style="color:' + colorTrSendTime + '"> <td >' + (i * 1 + 1) + '</td><td class="username">' + item.username + '</td>';
   			html += '<td >' + item.Tel + '</td>';
   			html += '<td style="cursor: pointer;"  class="userId'+i+'"   onclick=getDevno("'+item.UserId+','+item.CustomerType+','+i+','+ item.AgentId + ','+ item.username + ','+ item.Tel + ','+CustomerType + '")><p style="position:relative;color: #E46045; cursor: pointer;">   查看  </p></td>';
   			html += '  <td >' + item.Province + '-'+ item.City + '-' + item.Area + '</td>';
   			html += '  <td >' + item.Address + '</td>';
   			html += '  <td >' + item.agentname + '</td>';
   			html += '  <td >' + CustomerType + '</td>';
   			html += '  <td >' + item.rest_water + '</td>';
   			html += '  <td >' + item.SendTime + '</td>';
   			html += ' <td >' + item.send_time + '</td>';
   			html += ' <td >' + item.RestMoney + '</td>';
   			html += '  <td >' + item.LastActTime + '</td>';
   			html += '  <td ></td>';
   			html += '<td class="ShareBtn">' + EquipmentURL + '<div class="Ingp">' +
   				'<p>' + Equipment + '</p></div>' + EquipmentURLA + '</td>';
   			html += '	 <td class=" ShareBtn give" >' + send_waterURL +
   				' <div class="Ing" ><img src="/static/images3/give.png" ></div>' + EquipmentURLA + ' </td>';
   			html += ' <td class="ShareBtn Recharge" >  ' + rechargeURL + ' <div class="Ing"><img src="/static/images3/Recharge.png" ></div>' + EquipmentURLA + '</td>'
   			html += ' <td class="ShareBtn giveRecord" >' + send_logURL + '<div class="Ing">	<img src="/static/images3/giveRecord.png" ></div>' + EquipmentURLA + '</td>'
   			html += '<td class="ShareBtn RechargeRecord" > ' + recharge_logURL + ' <div class="Ing">	<img src="/static/images3/RechargeRecord.png" ></div>' + EquipmentURLA + '</td>'
   			html += ' </tr>'
   			$("#dev_list_body").append(html)
        }else {
   			return false;
   		};


   		   	   // 状态小提示

   $(".ShareBtn").hover(function() {

       $('.Ing', this).css('position', 'relative');
      if ($(this).hasClass('give')) {
         var html = '<div class="IngHover" style="position:absolute;top: -101%;width: 50px;height: 30px;line-height: 25px;color: #fff;background: url(/static/images3/IngHover1.png)  no-repeat;background-size:100% 100%;">送水</div>'
         $('.Ing', this).append(html)
      } else if ($(this).hasClass('Recharge')) {
         var html = '<div class="IngHover" style="position:absolute;top: -101%;width: 50px;height: 30px;line-height: 25px;color: #fff;background: url(/static/images3/IngHover2.png)  no-repeat;background-size:100% 100%;">充值</div>'
         $('.Ing', this).append(html)
      } else if ($(this).hasClass('giveRecord')) {
         var html = '<div class="IngHover" style="position:absolute;top: -101%;width: 60px;height: 30px;line-height: 25px;color: #fff;background: url(/static/images3/IngHover1.png)  no-repeat;background-size:100% 100%;">送水明细</div>'
         $('.Ing', this).append(html)
      }else if ($(this).hasClass('RechargeRecord')) {
         var html = '<div class="IngHover" style="position:absolute;top: -101%;left:-8px;width: 60px;height: 30px;line-height: 25px;color: #fff;background: url(/static/images3/IngHover2.png)  no-repeat;background-size:100% 100%;">充值记录</div>'
         $('.Ing', this).append(html)
      }
   }, function() {
      $('.IngHover').remove();
   })
      $('.ShareBtn p').text();
   	}};
  function  getDevno(obj){
      var objArr=obj.split(',');
// console.log(objArr)

      var objdata = {
         UserId:objArr[0],
         CustomerType:objArr[1],
         AgentId:objArr[3],
         state:where_datas.user_state
      }
      var _index = objArr[2];
        // console.log(objdata)
      var indexlayer = layer.load(2, {shade: false}); //0代表加载的风格，支持0-2
        $.get('index.php?r=send-water-log/get-devno',objdata, function(data){
            layer.close(indexlayer);
               var data = $.parseJSON(data);
             if(data.DevNos.length>0){
                        var htmll='';
                        for(var i=0;i<data.DevNos.length;i++){
                           var item = data.DevNos[i];
                           // console.log(item)
                           htmll +=  '<p>编号：'+ item.DevNo+'</p>';
                        }
      var html = '<div class="popupa">' +
          '<table style="    margin: auto;">' +
           '<tbody>' +
             '<tr>' +
               '<td>用户姓名：<span>'+objArr[4]+'</span></td>' +
               '<td>电话：<span>'+objArr[5]+'</td>' +
             '</tr>' +
             '<tr>' +
               '<td>设备数量：<span>'+data.DevNos.length+'</span></td>' +
               '<td>客户类型：<span>'+objArr[6]+'用户<span></td>' +
             '</tr>' +

           '</tbody>' +
            '</table>' +
         '<div class="popup-text" style="height: 165px;    padding-top: 20px; overflow: auto;"><span style="font-size:20px; color: rgb(233,233,233)">'+htmll+' </span></div>' +
         '<div class="butt pull-left" style="    margin-left: 60px;">' +
         // '<button type="button"  class="Close" >取消</button>' +
         '</div>' +
         '<div  class="butt" style="padding:0">' +
         '<button type="submit" class="confirm" style="background-color: #E46045;    margin-left: -20px;" >确认</button>' +
         '</div>' +
         '</div>'
      var ppp = layer.open({
         type: 1,
         title: false,
         area: ['500px', '400px'],
         closeBtn: 0,
            shade:  [0.5, '#393D49'],
         shadeClose: false,
         // shade: false,
         skin: 'yourclass',
         content: html

      });

         $(".confirm").click(function() {
         layer.close(ppp);
 
      })
      }


        });
   }



 var url='';
for(var i in where_datas){
  if(where_datas[i]==null){
     where_datas[i]=''
  }
  url= url +"&"+ i+'='+where_datas[i]
}



$("td a").click(function(){
    var _thisURl = $(this).attr('href');
      var Urlobj = encodeURIComponent(url);
    $(this).attr('href',_thisURl+"&Url="+Urlobj)
    // return false;
})


</script>
<!-- <script type="text/javascript"  src="/static/js/send-water-log/index.js"></script> -->
</body>
</html>