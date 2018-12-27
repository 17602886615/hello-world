<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

	<link rel="stylesheet" href="/static/css/bootstrap.min.css"> 
 		<link rel="stylesheet" type="text/css" href="/static/css/dateRange.css"/>
		<link rel="stylesheet" type="text/css" href="/static/css/monthPicker.css"/>

		<link rel="stylesheet" href="/static/css/sales-volume/style.css">
				<link rel="stylesheet" href="/static/css/conmones.css">
<style type="text/css" media="screen">

     select::-ms-expand { display: none; }          
     .info-select{
        width: 12%;
        margin-left: 64%;
        border: none;
        outline: none;
        /*将默认的select选择框样式清除*/
        appearance:none;
        -moz-appearance:none;
        -webkit-appearance:none;
        -ms-appearance:none;
       /*在选择框的最右侧中间显示小箭头图片*/
       /*background: url(../img/arrow.png) no-repeat scroll right center transparent;           */
     }

	.selection{
	color: rgb(233,233,233)
	}
.wrapperpos{
	background-color: #32323e;
    color: rgb(233,233,233);
    border-radius: 4px;
    -moz-box-shadow: 0px 0px 10px 1px #000;
    -webkit-box-shadow: 0px 0px 10px 1px #000;
    box-shadow: 0px 0px 10px 1px #000;
        padding: 20px 50px;
}		
.wrap_line{
	padding: 0;
}		
.wrap_line select{
		padding: 0 20px;
		border:none;
}
.wrap_line select option{
padding: 0
}
 .table,th,.table td{
 	margin-top: 5px;
 	text-align: center;
 
 }



.table>thead>tr,.table>thead>tr>th{
	margin-top: 10px;
	border:none;

}


.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{
		vertical-align: middle;
}
.table>tbody>tr>td:first-child, .table>thead>tr>th:first-child{
	border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
}
.table>tbody>tr>td:last-of-type, .table>thead>tr>th:last-of-type{
	border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
}
.table >tr {
 	border-radius: 4px;
  border:1px solid #000;
  /*  -moz-box-shadow: 0px 0px 10px 1px #000;
    -webkit-box-shadow: 0px 0px 10px 1px #000;*/
    box-shadow: 0px 0px 10px 1px #000;
    overflow: hidden;
 }



.wrapper>button{
   padding:5px 20px;
   border-radius: 5px;
   background-color: #424952;
   border:none;
}
.submitBtn button{
	padding:5px 20px;
	background-color: #E46045
}

.promote:hover{
	background-color: #2D3136;
}
.opdate-details{
    height: 100%;
    overflow: hidden;
    padding: 50px;
    background-color: #393E45;
  /*  border-top: 3px solid #E46045;*/
}
  .opdate-list{
  	    width: 80%;
    /*background: #00f;*/
    margin: auto;
    height: 200px;

  }
.container button{
        padding: 5px 50px;
    font-size: 18px;
    color: #fff;
    border-radius: 5px;
    margin-left: 60px;
    margin-top: 30px;
    background-color: #4ADCDD;
    border: none;
}
   

.layui-layer layui-anim,.layui-layer-page,.yourclass{
	  background-color: #393E45;
}

    .opdate-list p{
    	margin-top:20px;
    }
.layui-layer-title,.layui-layer-setwin{
	display: none
}
.layui-layer-btn{
	width:50%;
	margin:auto;
	color: rgb(233,233,233)
}

.layui-layer-btn a {
	  background-color: #4ADCDD;

    border: none;
    color: rgb(233,233,233);
    border-radius: 5px;
}
.layui-layer-btn1{
	
  float: left;
}
.layui-layer-btn .layui-layer-btn0{
	  
		background-color: #E46045;
}

#file_name{
  width: 200px;
  height: 30px;
  border-radius: 4px;
}
a.input {
  width: 70px;
    height: 30px;
    line-height: 30px;
    background: #E46045;
    text-align: center;
    display: inline-block;
    overflow: hidden;
    position: relative;
    top: 10px;
    margin-left: 20px;
    border-radius: 4px;
}
a.input:hover {
  background:#31b0d5;
  color: #ffffff;
}
a{
  text-decoration:none;
  color:#FFF;
}
#file {
  opacity:0;/*设置此控件透明度为零，即完全透明*/
  filter:alpha(opacity=0);/*设置此控件透明度为零，即完全透明针对IE*/
  font-size:100px;
  position:absolute;/*绝对定位，相对于 .input */
  top:0;
  right:0;
}
.laydate_body .laydate_ym {
    border: 1px solid #292834;
    background-color: #292834;
}
.laydate_body .laydate_top {
    background-color:#292834;
    border-top: 1px solid #292834;
}
.laydate_body .laydate_box,.laydate_body .laydate_table td,.laydate_body .laydate_bottom #laydate_hms,.laydate_body .laydate_bottom .laydate_sj,.laydate_btn{
    background-color: #292834;
    color: #fff;
}
.laydate_body .laydate_bottom .laydate_btn a{
	background-color: #292834;
	color: #fff;
	border: none
}
.container{
	    border-top: 3px solid #E46045
}
input, option, select,button,label,.wrapperpos span {
   color: #BABABF

}
#file::hover{
    background: #E46045;
}
.laydate_body .laydate_bottom {
    border: 1px solid #ccc;
}
.opdate-list span{
	    font-weight: bold;
    color: #D74E33;
}
.wrapperpos button:hover{
    background-color: #E46045;
}
.selection-text{
	 line-height: 30px;

}
#date_demo3{
	width: 200px;
    height: 30px;
   line-height: 30px;
    display: inline-block;
}
.htLeft{
	display: inline-block
}

</style>
<body style='background-color: #1d1f23' >
<div class="wrapper  wrapperpos" style=''>
	<form action="./index.php?r=version-manage/index" method="post" accept-charset="utf-8">
					<div class="selection pull-left" style="padding-right: 50px;">
						 <span style="" class="selection-text">时间段选择：</span>
						 <div	class='timeData' style='    display: inline-block;'>
						    	<div class="ta_date" id="div_date_demo3" style='  '>
					                    <span class="date_title" id="date_demo3" style="line-height: 15px;">
					                    	请选择时间段
					                    </span>
					                    <input type="text" name="selecttime" id='selecttime1' value="" style="display: none">
					                    <a class="opt_sel" id="input_trigger_demo3" href="#" style='    float: right;'>
					                        <i class=""   > <img src="static/images3/regb.png" alt=""></i>
					                    </a>
					             </div>
					             <div id="datePicker"></div>
								<br/>
								<br/>
						  </div>
					</div>
         <div  style='padding:10px;margin-left: 20px;' >
        <label> 地区选择：</label>
 					  <div class="wrap_line" >
						<select id="province" name="province">
							<option value="" selected="selected">请选择</option>
						</select>
						<select id="city" name="city"><option value="" selected="">请选择</option></select>
						<select id="area" name="area"><option value="" selected="">请选择</option></select>
					</div>	

<!-- 
<div class="wrap_line" >
            <select id="province" name="province">
              <option value="" selected="selected">请选择</option>
              <option value="四川省">四川省</option>
              </select>
            <select id="city" name="city">
              <option value="" selected="selected">请选择</option>
              <option value="成都市">成都市</option>
            </select>
            <select id="area" name="area">
              <option value="" selected="selected">请选择</option>
              <option value="高新区">高新区</option>
            </select>
          </div> -->






  						<div class="wrap_line">
					 <select id="Upgrades" name="state">
						    <option value="" selected="selected">全部升级状态</option>
							<option value="1">等待升级</option>
							<option value="2">升级中</option>
							<option value="3">升级完成</option>
					 </select>
					   </div>	
                    </div>
    			<div style="clear:both;"></div>
                <div>
                   <span> 设&nbsp;&nbsp;&nbsp;备：</span>
                    	<div class="selection htLeft">
 							  <div class="wrap_line" >
								<select  name="devbrand_id" id='devbrand'>
									<option value="" selected="selected">请选择设备品牌</option>
									</select>
								<select  id='devname' name="devname_id">
									<option value="" selected="devbrand">请选择设备型号</option>
								</select>
							</div>	
		                </div>
                </div>
                <div style="clear:both;"></div>
                <div>
                    <label> 角&nbsp;&nbsp;&nbsp;色：</label>
						<div class="selection htLeft">
							<div class="wrap_line">
								<select id="Agenty" name="agenty_id">
									<option value=""  >选择运营中心</option>
								</select>
								<select  id="Agentf" name="agentf_id" >
									<option value="">选择服务中心</option>
								</select>
								<select id="devfactory"  name="devfactory_id">
									<option value="">选择设备厂家</option>
								</select>
								<select  id="investor" name="investor_id" >
									<option value="">选择设备投资商</option>
								 </select>
							</div>
						</div>
				 
                </div>
                  <div style="    display: -webkit-inline-box;">
                    <label> 用&nbsp;&nbsp;&nbsp;户：</label>
						<div class="selection htLeft">
							<div class="wrap_line">
								 <select id="customertype"  name="customertype">
										<option value="" selected="selected">用户类型</option>
										<option value="1" >家庭</option>
										<option value="2" >公司</option>
										<option value="3" >集团</option>
										<option value="99" >其他</option>
								  </select>
							</div>
						</div>
						    <div class="selection"  style='display: inline-block;'>
								<div class="search">
								<label> 用户搜索：</label>
								<input  id="search"  type="text" name="search" value="" style=" padding-left:15px;width: 300px;height: 35px;background: #393e45; border: none;" placeholder="请输入用户.名称.手机号 或者设备编号">
								<span class="searchImg">
									 <!-- <img src="/static/images3/searchImg.png" alt="搜索" style="width: 30px;padding: 7px;">  -->
								</span>
								</div>
							</div>
				 <div class="submitBtn" s style='display: inline-block;' >
					&nbsp;
					&nbsp;
					<button type="submit" class="btn btn-danger" id="submit" >   查看</button>
					<button type="text"  class="btn btn-danger" id="removerSub">清空条件</button>
				
		          </div>
			 
                </div>
				
  </form>
<br/>
       <div style="clear:both;"></div>
       <button type="btn"  id='batchPromote'><img src="/static/images3/batchPromoteImg.png" alt=""> 批量升级</button>
       <button type="btn"  id="AllEquipment"><img src="/static/images3/AllEquipmentImg.png" alt="">  升级所有设备</button>
         &nbsp;
           &nbsp;
  &nbsp;
        <span type="btn"  id="Refresh"   style='padding:10px;    cursor: pointer;'><img src="/static/images3/RefreshImg.png" alt="">  刷新</span>
         
           &nbsp;
                  <span style="font-weight: bold;">（注释：
                    <span style="width: 50px;height:1px;text-decoration:line-through;color:#EE5030">&nbsp;&nbsp;&nbsp;</span>&nbsp; 等待升级 &nbsp; 
                    <span style="width: 50px;height:1px;text-decoration:line-through;color:#3EDADB">&nbsp;&nbsp;&nbsp;</span>&nbsp; 升级中 &nbsp; 
                  	 <span style="width: 50px;height:1px;text-decoration:line-through;color:#BC49CF">&nbsp;&nbsp;&nbsp;</span>&nbsp;升级完成 ）
                  </span>
</div>
<table width="100%" class="table">
	<thead>
		<tr>
			 <th><input type="checkbox" name="state" value="1"  id="state" class='state'  onclick="swapCheck()" / >
    	    <label for="state"></label></th>
			<th>
                
    		<!-- 	 <span>	</span> -->
				序号
			</th>
			<th>设备编号</th>
			<th>ICCID</th>
			<th>用户姓名</th>
			<th>手机号</th>
			<th>用户类型</th>
			<th>服务中心</th>
			<th>运营中心</th>
			<th>设备商品型号</th>

			<th>设备品牌</th>
			<th>设备厂家</th>
			<th>设备投资商</th>
			<th>所在区域</th>
			<th>位置信息</th>
			<th>升级时间</th>
			<th>设备版本号</th>
			<th>升级状态</th>
			<th>版本升级</th>
		</tr>
	</thead>
	<tbody   id='dev_list_body'>
	 
	</tbody>
</table>

<div style="  position: relative;margin: auto; width: 100%;text-align: center; height: 100px;">
	<span style="position: relative;margin:auto;text-align: center;    display: -webkit-inline-box;">
		        <br/>
			 	<div class="shoPpage">
					<span class='Jumpdisplay'> 本页显示<span>&nbsp;
						<select  id= 'Jumpdisplay'>
							<option value='10'>10</option>
							<option value='20'>20</option>
							<option value='50'>50</option>
						</select>&nbsp;
					</span>条 </span>
				</div>
				 <div id="page" class="page_div" style='    text-align: left; margin-left: 150px;'></div>	
			 </span>
	</div>
</body>
</html>
<script type="text/javascript" src="/static/js/jquery.min.js"></script>
<script type="text/javascript" src="./static/js/layer/layer.js"></script>	
<script src="/static/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/static/js/dateRange.js"></script>
<script type="text/javascript" src="/static/js/monthPicker.js"></script>
<script type="text/javascript" src="/static/js/paging2.js"></script>
<script>
   var where_datas =<?=json_encode($where_datas)?>;
   var datas =<?=json_encode($datas)?>;
	var where_datas  = eval('(' + where_datas + ')'); 
	var datas  = eval('(' + datas + ')'); 
var datasNum =datas.total;
 console.log(datas)

$(function(){
		var dateRange = new pickerDateRange('date_demo3', {
					//aRecent7Days : 'aRecent7DaysDemo3', //最近7天
					isTodayValid : true,
					startDate :'',
					endDate :'',
					//needCompare : true,
					//isSingleDay : true,
					//shortOpr : true,
					//autoSubmit : true,
					defaultText : ' 至 ',
					inputTrigger : 'input_trigger_demo3',
					theme : 'ta',
					success : function(obj) {
						// $("#dCon_demo3").html('开始时间 : ' + obj.startDate + '<br/>结束时间 : ' + obj.endDate);
						$("#selecttime1").val( $("#date_demo3").val())
					}
				});

		$("#selecttime1").val( $("#date_demo3").val())

// alert($("#date_demo3").text())

 Refreshdata()
$("#Refresh").click(function(){
	window.location.reload(); 	

})

})

function Refreshdata(){
    initProvince();
    initListener();
    Renderingdev(where_datas.devbrand, $('#devbrand'))
    RenderingName(where_datas.devname,$('#devname'))
    $("#devbrand").change(function(){
    initDevbrand( $('#devbrand'), $('#devname'),where_datas.devname)
    })
    $("#devname").change(function(){
    	   initDevbrand( $('#devname'), $('#devbrand'),where_datas.devbrand)
    })
 	RenderingAgent(where_datas.agenty,$('#Agenty'));
    RenderingAgent(where_datas.agentf,$('#Agentf'));
    RenderingAgent(where_datas.devfactory,$("#devfactory"));
    RenderingAgent(where_datas.investor,$("#investor")); //渲染角色
 $('#Agenty').change(function(){
 		initAgent($('#Agenty'), $('#Agentf'),where_datas.agentf)//关联运营中心
 })
 $('#Agentf').change(function(){
 		 initAgent($('#Agentf'),$('#Agenty'),where_datas.agenty)//关联服务中心
 })

dev_listdata(datas.dev_list)
  initAddress();
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


function  dev_listdata(datas){
	console.log(datas)
	   if(datas.length){
	   	  $("#dev_list_body").empty();
	   	     for(var i=0;i<datas.length;i++){
	   	     	 var item = datas[i];
	   	     	 	var CustomerType;
          	if(item.CustomerType==1){
				CustomerType='家庭'
          	}else if(item.CustomerType==2){
          		CustomerType='公司'
          	}else if(item.CustomerType==3){
          		CustomerType='集团'
          	}else {
          		CustomerType='其他'
          	}

          	for(var z in item){
                    if(item[z] == null){
                        item[z] = '-'
                    }
            }
            var IsUpgrade;
            if(IsUpgrade){
            	IsUpgrade='允许'
            }else{
            	IsUpgrade='不允许'
            }
            var State;
            if(State){
            	State='完成'
            }else{
            	State='未完成'
            }
 	var html = '	<tr>'+
			'<td > <input type="checkbox"  name="state" value="1"  id="state_'+i+'" class="state" / ><label for="state_'+i+'"></label></td>	<td><span>&nbsp;'+(i+1)+'</span></td>'+
			'<td class="DevNo"><div>'+item.DevNo+'</div></td><td>'+item.HwNo+'</td><td>'+item.username+'</td><td>'+item.Tel+'</td><td class="oiuy">'+CustomerType+'</td><td>'+item.agentname+'</td><td>'+item.agentpname+'</td><td class="devname" dataId="'+item.goods_id+'">'+item.devname +'</td><td class="devbrand"  dataId="'+item.brand_id+'">'+item.devbrand  +'</td>'+
			'<td class="devfactory">'+item.devfactory+'</td><td>'+item.investor +'</td><td>'+item.Province+'-'+item.City+'-'+item.Area + '</td><td>'+item.Address  + '</td><td>'+item.UpgradeTime  + '</td><td>'+item.Version+ '</td><td >'+StateInit(item.IsUpgrade,item.State)+ '</td><td><div class="promote" style="padding:5px;">'+
				'<img src="/static/images3/Edition.png" alt=""></div></td>'+
			'</tr>'
           $("#dev_list_body").append(html)
	   	     }
	       }
     }
		var isCheckAll = false;
		function swapCheck() {
			if (isCheckAll) {
				$("input[type='checkbox']").each(function() {
					this.checked = false;
				});
				isCheckAll = false;
			} else {
				$("input[type='checkbox']").each(function() {
					this.checked = true;
				});
				isCheckAll = true;
			}
		}
function Get_datas(searchParameters){
        $.post('./index.php?r=version-manage/dev-list',searchParameters,function(data){
			 var data  = eval('(' + data + ')'); 
        	dev_listdata(data)
        })
};
function  StateInit(IsUpgrade,State){
	var res;
   if(IsUpgrade==0&&State==0){

      res='<span style="color:#E34F32">等待升级</span>'
   }
   if(IsUpgrade==1&&State==0){
      res='<span style="color:#3DCCCD">升级中</span>'
   }
   if(IsUpgrade==1&&State==1){
      res='<span style="color:#AB47BD">升级完成</span>'
   }
    return res;
  }
$(document).on('click','#removerSub',function(){
	 $('.wrapper select,.wrapper input').val('');
  //   $(".selection-time .activer").removeClass('activer');
  //   $(".selection-time li").eq(2).addClass('activer');
    return false;
}).on('click','.promote',function(){
     	var par=$(this).parent().siblings(".oiuy").text()
		//页面层-自定义
		var parDevdevname = $(this).parent().siblings(".devname").attr('dataId');
		var parDevbrand  = $(this).parent().siblings(".devbrand ").attr('dataId')
		var spCodesTemp  = $(this).parent().siblings(".DevNo ").text()
    var searchParameters={
         selecttime:datas.where.selecttime,
         province:datas.where.province,
         city:datas.where.city,
         area:datas.where.area,
         state:datas.where.state,
         devbrand_id:parDevbrand,
         devname_id:parDevdevname,
         agenty_id:datas.where.agenty_id,
         agentf_id:datas.where.agentf_id,
         devfactory_id:datas.where.devfactory_id,
         investor_id:datas.where.investor_id,
         customertype :datas.where.customertype,
         search :datas.where.search,
        }
      $.get('index.php?r=version-manage/get-version&devbrand_id='+parDevbrand+'&devname_id='+parDevdevname,function(data){
      			var data  = eval('(' + data + ')'); 
      				console.log(data)
      				var version='';
      		   if(data.state==-1){
                 	      layer.msg(data.mas);
                     // return   //     alert("上传的格式不正确，请重新选择")
                 }else if(data.state==0) {
                version = data.version;
               }
                 		var html ='<div class="container "   style="height:100%;width: 100%;"><form action="/index.php?r=version-manage/upload-upgrade" method="post" enctype="multipart/form-data"  style="height:100%">'+
						    '<div class="opdate-details"><div class="opdate-list"> '+
							'<p style="font-weight: bold;color: #D74E33;font-size: 15px;">当前最高版本:<span>'+version+'</span></p>'+
						    '<p>选择上传文件: '+
							'<input type="text" id="file_name" readonly="readonly" value=""  placeholder="选择版本文件"  /> '+
					  	   '<a href="javascript:void(0);" class="input">选择文件  <input type="file" id="file"  name="file[]" value=""  multiple ></a>'+
							'</p><p>选择开始时间：<input type="text"  value=""  unselectable="on" readonly  placeholder="选择时间" name="StartTime"id="J-xl"> </p>'+
							'<p style="display:none">'+
							'<input type="hidden" id="devbrand_dataN" name="devbrand_id" value="'+parDevbrand+'" />'+
							'<input type="hidden"  name="devno" value="'+spCodesTemp+'" />'+
							'<input type="hidden" id="devname_dataN"  name="devname_id" value="'+parDevdevname+'" />'+
							'<input type="hidden"  name="selecttime" value="'+searchParameters.selecttime+'" />'+
							'<input type="hidden"  name="province" value="'+searchParameters.province+'" />'+
							'<input type="hidden"  name="city" value="'+searchParameters.city+'" />'+
							'<input type="hidden"  name="area" value="'+searchParameters.area+'" />'+
							'<input type="hidden"  name="state" value="'+searchParameters.state+'" />'+
							'<input type="hidden"  name="agenty_id" value="'+searchParameters.agenty_id+'" />'+
							'<input type="hidden"  name="agentf_id" value="'+searchParameters.agentf_id+'" />'+
							'<input type="hidden"  name="devfactory_id" value="'+searchParameters.devfactory_id+'" />'+
							'<input type="hidden"  name="investor_id" value="'+searchParameters.investor_id+'" />'+
							'<input type="hidden"  name="customertype" value="'+searchParameters.customertype+'" />'+

							'<input type="hidden"  name="customertype" value="'+searchParameters.customertype+'" />'+
							'<input type="hidden"  name="customertype" value="'+searchParameters.customertype+'" />'+
							'<input type="hidden"  name="customertype" value="'+searchParameters.customertype+'" />'+
							'</p>'+
						  

							'<p><span>注</span>：点击提交后,设备将在选择是时间内自动升级，若当前最高版本是最新版本，则无需上传文件</p>  '+
							' <button type="button"  class="Close" >取消</button>'+
							' <button type="submit" class="submit" style="background-color: #E46045" >提交</button>'+
							'</div><div></form><div>';
		layerdatefun(html)
      });
})
.on('click',"#AllEquipment",function(){

   
	  // var searchParameters={
   //      province:$('#province option:selected').val(),
   //      city:$('#city option:selected').val(),
   //      area:$('#area option:selected').val(),
   //      state: $("#Upgrades option:selected").val(),

   //      devbrand_id:$("#devbrand option:selected").val(),
   //      devname_id:$("#devname option:selected").val(),

   //      agenty_id:$("#Agenty option:selected").val(),
   //      agentf_id:$("#Agentf option:selected").val(),


   //      devfactory_id:$("#devfactory option:selected").val(),
   //      investor_id:$("#investor option:selected").val(),
   //      customertype :$("#customertype option:selected").val(),
   //      search :$("#search").val(),
   //      }


   var searchParameters={
         selecttime:datas.where.selecttime,

         province:datas.where.province,
         city:datas.where.city,
         area:datas.where.area,

         state:datas.where.state,
      // 
        devbrand_id:datas.where.devbrand_id,
        devname_id:datas.where.devname_id,

         agenty_id:datas.where.agenty_id,
         agentf_id:datas.where.agentf_id,

         devfactory_id:datas.where.devfactory_id,
         investor_id:datas.where.investor_id,
         customertype :datas.where.customertype,
         search :datas.where.search,
   
        }
console.log(datas.where)





if(!searchParameters.devbrand_id&&searchParameters.devbrand_id==''&&!searchParameters.devname_id&&searchParameters.devname_id==''){
	// alert('请经过筛选条件在进行操作');
	          layer.msg('请选择设备品牌和设备型号后再进行此操作');
	return;
}
	// $(this).css({'backgroundColor':'#E46045',"color":'#fff'})



        // for(i in searchParameters){
        //     if(searchParameters[i]==''){
        //     		          layer.msg('请经过筛选条件在进行操作');

        //     }
        // }


      $.get('index.php?r=version-manage/get-version&devbrand_id='+ searchParameters.devbrand_id +'&devname_id='+searchParameters.devname_id,function(data){
      			var data  = eval('(' + data + ')'); 
      
      				console.log(data)
      				var version='';
      		   if(data.state==-1){
                 	      layer.msg(data.mas);
                     // return   //     alert("上传的格式不正确，请重新选择")
                 }else if(data.state==0) {

                version = data.version;

               }
var html ='<div class="container"  style="height:100%;width: 100%;"><form action="/index.php?r=version-manage/upload-upgrade" method="post" enctype="multipart/form-data"  style="height:100%">'+
	    '<div class="opdate-details"><div class="opdate-list"> '+
		'<p style="font-weight: bold;color: #D74E33;font-size: 15px;">当前最高版本:<span>'+version+'</span></p>'+

	   '<p>选择上传文件: '+
		   '<input type="text" id="file_name" readonly="readonly" value=""  placeholder="选择版本文件" /> '+
  			'<a href="javascript:void(0);" class="input">选择文件  <input type="file" id="file"  name="file[]" value=""  multiple ></a>'+

		'</p><p>选择开始时间：<input type="text"  value=""  unselectable="on" readonly  placeholder="选择时间" name="StartTime"id="J-xl"> </p>'+

		// '<p style="display:none"><input type="hidden" id="province " name="province" value="'+searchParameters.province+'" /></p>'+

		// '<p style="display:none"><input type="hidden" id="city"  name="city" value="'+ searchParameters.city+'" /></p>'+
		// '<p style="display:none"><input type="hidden" id="area"  name="area" value="'+ searchParameters.area+'" /></p>'+
		'<p style="display:none">'+
 

							'<input type="hidden"  name="selecttime" value="'+searchParameters.selecttime+'" />'+

							'<input type="hidden"  name="province" value="'+searchParameters.province+'" />'+
							'<input type="hidden"  name="city" value="'+searchParameters.city+'" />'+
							'<input type="hidden"  name="area" value="'+searchParameters.area+'" />'+
							'<input type="hidden"  name="state" value="'+searchParameters.state+'" />'+


							'<input type="hidden"  name="devbrand_id" value="'+searchParameters.devbrand_id+'" />'+
							'<input type="hidden"  name="devname_id" value="'+searchParameters.devname_id+'" />'+

							'<input type="hidden"  name="agentf_id" value="'+searchParameters.agentf_id+'" />'+
							'<input type="hidden"  name="agentf_id" value="'+searchParameters.agentf_id+'" />'+



							'<input type="hidden"  name="devfactory_id" value="'+searchParameters.devfactory_id+'" />'+
							'<input type="hidden"  name="investor_id" value="'+searchParameters.investor_id+'" />'+
							'<input type="hidden"  name="customertype" value="'+searchParameters.customertype+'" />'+

							'<input type="hidden"  name="customertype" value="'+searchParameters.customertype+'" />'+
							'<input type="hidden"  name="customertype" value="'+searchParameters.customertype+'" />'+
							'<input type="hidden"  name="customertype" value="'+searchParameters.customertype+'" />'+
	
		'</p>'+
		'<p><span>注</span>：点击提交后,设备将在选择是时间内自动升级，若当前最高版本是最新版本，则无需上传文件</p>  '+
		' <button type="button"  class="Close" >取消</button>'+
		' <button type="submit" class="submit" style="background-color: #E46045" >提交</button>'+
		'</div><div></form><div>';
        layerdatefun(html)
        // console.log(html)

                 	  
      });
	
        // $.post('/index.php?r=version-manage/upload-upgrade',searchParameters, function(data) {
        // 	console.log(data)
        // });
})


.on('click',"#batchPromote",function(){

	 var spCodesTemp =[];
      $('#dev_list_body input:checkbox[name=state]:checked').each(function(i){
      		// var 
       if(0==i){
        spCodesTemp.push($(this).parent().siblings(".DevNo").text())
       }else{
        spCodesTemp.push($(this).parent().siblings(".DevNo").text());
       }
      });
 

console.log(spCodesTemp)

	    var parDevdevname = $("#devbrand option:selected").val();
		var parDevbrand  =$("#devname option:selected").val();
      var searchParameters={
         selecttime:datas.where.selecttime,

         province:datas.where.province,
         city:datas.where.city,
         area:datas.where.area,

         state:datas.where.state,
         devbrand_id:parDevbrand,
         devname_id:parDevdevname,

         agenty_id:datas.where.agenty_id,
         agentf_id:datas.where.agentf_id,

         devfactory_id:datas.where.devfactory_id,
         investor_id:datas.where.investor_id,
         customertype :datas.where.customertype,
         search :datas.where.search,
         // // 每页多少条
         // Jumpdisplay:$('#Jumpdisplay option:selected').val(),
         // //
         // pageNo: localStorage.getItem("pageNo"),

        }

if(!parDevdevname&&parDevdevname==''&&!parDevbrand&&parDevbrand==''){
	// alert('请经过筛选条件在进行操作');
	          layer.msg('请选择设备品牌和设备型号后再进行此操作');
	return;
}


	// $(this).css('backgroundColor','#E46045')

	 
 
    $.get('index.php?r=version-manage/get-version&devbrand_id='+ parDevdevname +'&devname_id='+parDevbrand,function(data){
      			var data  = eval('(' + data + ')'); 
   
      				console.log(data)
      				var version='';
      		   if(data.state==-1){
                 	      layer.msg(data.mas);
                     // return   //     alert("上传的格式不正确，请重新选择")
                 }else if(data.state==0) {

                version = data.version;

               }
var html ='<div class="container"   style="height:100%;width: 100%;"><form action="/index.php?r=version-manage/upload-upgrade" method="post" enctype="multipart/form-data"  style="height:100%">'+
	    '<div class="opdate-details"><div class="opdate-list"> '+
		'<p style="font-weight: bold;color: #D74E33;font-size: 15px;">当前最高版本:<span>'+version+'</span></p>'+

	   '<p>选择上传文件: '+
		   '<input type="text" id="file_name" readonly="readonly" value="" placeholder="选择版本文件" /> '+
  			'<a href="javascript:void(0);" class="input">选择文件  <input type="file" id="file"  name="file[]" value=""  multiple ></a>'+

		'</p><p>选择开始时间：<input type="text"  value="" placeholder="选择时间" unselectable="on" readonly  name="StartTime"id="J-xl"> </p>'+

		'<p style="display:none"><input type="hidden" id="devbrand_dataN" name="devbrand_id" value="'+parDevdevname+'" /></p>'+

		'<p style="display:none"><input type="hidden" id="devname_dataN"  name="devname_id" value="'+parDevbrand +'" /></p>'+
		'<p style="display:none"><input type="hidden"  name="devno" value="'+spCodesTemp+'" /></p>'+


			'<p style="display:none">'+
 

							'<input type="hidden"  name="selecttime" value="'+searchParameters.selecttime+'" />'+

							'<input type="hidden"  name="province" value="'+searchParameters.province+'" />'+
							'<input type="hidden"  name="city" value="'+searchParameters.city+'" />'+
							'<input type="hidden"  name="area" value="'+searchParameters.area+'" />'+
							'<input type="hidden"  name="state" value="'+searchParameters.state+'" />'+
							'<input type="hidden"  name="agenty_id" value="'+searchParameters.agenty_id+'" />'+
							'<input type="hidden"  name="agentf_id" value="'+searchParameters.agentf_id+'" />'+


							'<input type="hidden"  name="devfactory_id" value="'+searchParameters.devfactory_id+'" />'+
							'<input type="hidden"  name="investor_id" value="'+searchParameters.investor_id+'" />'+
							'<input type="hidden"  name="customertype" value="'+searchParameters.customertype+'" />'+

							'<input type="hidden"  name="customertype" value="'+searchParameters.customertype+'" />'+
							'<input type="hidden"  name="customertype" value="'+searchParameters.customertype+'" />'+
							'<input type="hidden"  name="customertype" value="'+searchParameters.customertype+'" />'+
	
		'</p>'+
		'<p><span>注</span>：点击提交后,设备将在选择是时间内自动升级，若当前最高版本是最新版本，则无需上传文件</p>  '+
		' <button type="button"  class="Close" >取消</button>'+
		' <button type="submit" class="submit" style="background-color: #E46045" >提交</button>'+
		'</div><div></form><div>';
	    layerdatefun(html)
     
  })
})

function layerdatefun(html){
	     var ppp = layer.open({
		  type: 1,
		  title: false,
		   area: ['730px', '500px'],
		  closeBtn: 0,
		  shadeClose: true,
		  skin: 'yourclass',
		  content:html
		});

   $("#J-xl").val(GetDateStr(0,1))

       $("#J-xl").click(function(){
       	laydate({
            elem: '#J-xl'
        });
       })
    $('.Close').click(function(){
	      layer.close(ppp)
	})
    $('.submit').click(function(){
    	if( $("#J-xl").val()==''){

    		 layer.msg('请上传时间');
		 return false;
    	}   
	})
	   var input = document.getElementById("file"); 
   var result,div;
   if(typeof FileReader==='undefined'){ 
           result.innerHTML = "抱歉，你的浏览器不支持 FileReader";
          input.setAttribute('disabled','disabled'); 
     }else{  
       input.addEventListener('change',readFile,false); 
   }

   function readFile(){
        var filesLength = this.files.length
          if(filesLength>3){
            // alert("上传数量超限")
           layer.msg('上传数量超限');
           return false;
        }
        for(var i=0;i<filesLength;i++){
             if (!input['value'].match(/.bin|.ini/i)){　　//判断上传文件格式
             layer.msg('上传的格式不正确，请重新选择');
            return   //     alert("上传的格式不正确，请重新选择")
           }
           var reader = new FileReader();
           reader.readAsDataURL(this.files[i]);
        }
      $("#file_name").val('已选择'+this.files.length+'个文件');  //将 #file 的值赋给 #file_name
       }
  }
// 角色选择渲染
function RenderingAgent($data, $id) {
     $('option:not(:first-child)',$id).remove();
    for (var index = 0; index < $data.length; index++) {
        var item = $data[index];
        if (item.ParentId) {
            $id.append("<option value='" + item.Id + "' datal ='" + item.ParentId + "' >" + item.Name + "</option>");
        } else {
            $id.append("<option value='" + item.Id + "'>" + item.Name + "</option>");
        }
    }
}
     // 设备品牌先选
   function initDevbrand($Id1, $Id2, $data) {
           if($Id2.selector=='#devbrand'){
            if ($Id1.val() == '') {
              $('option:not(:first-child)',$Id2).remove();
                   Renderingdev($data,$Id2);
                  return;
              }
                var _thisId = $('option:selected', $Id1).attr("datal");
              for (var i = 0; i < $data.length; i++) {
                var item = $data[i];
                  if (item.BrandNo== _thisId) {
                    $Id2.val(_thisId);
                }
              }
            }else{
              if ($Id1.val() == '') {
              $('option:not(:first-child)',$Id2).remove();
                   RenderingName($data,$Id2);
                   return;
              }
              var _thisId = $Id1.val();    
             $('option:not(:first-child)',$Id2).remove()
                  for (var i = 0; i < $data.length; i++) {
                var item = $data[i];
                  if (item.brand_id==_thisId) {
                      $Id2.append("<option value='" + item.id + "' datal ='" + item.brand_id + "' >" + item.name + "</option>");
                  }
                 }
            }
      // })
    }
// 运营中心先选
function initAgent($Id1, $Id2, $data) {
    // $Id1.change(function() {
        if ($Id1.val() == '') {
            $('option:not(:first-child)', $Id2).remove();
             RenderingAgent($data, $Id2);
            return;
        }
        if ($Id2.selector == '#Agenty') {
            var _thisId = $('option:selected', $Id1).attr("datal");
        
            for (var i = 0; i < $data.length; i++) {
                var item = $data[i];
                if (item.Id == _thisId) {
                    $Id2.val(_thisId);
                }
            }
        } else {
            var _thisId = $Id1.val();
            $('option:not(:first-child)', $Id2).remove()
            for (var i = 0; i < $data.length; i++) {
                var item = $data[i];
                if (item.ParentId == _thisId) {
                    $Id2.append("<option value='" + item.Id + "' datal ='" + item.ParentId + "' >" + item.Name + "</option>");
                }
            }
        }
    // })
}
// 设备品牌
function Renderingdev($data, $id) {
    for (var index = 0; index < $data.length; index++) {
        var item = $data[index];
        var BrandNo = item.BrandNo;
        var Name = item.BrandName;
        $id.append("<option value='" + BrandNo + "'>" + Name + "</option>");
    }
}
// 设备商品型号
function RenderingName($data, $id) {
    for (var index = 0; index < $data.length; index++) {
        var item = $data[index];
        var Id = item.id;
        var Name = item.name;
        $id.append("<option value='" + Id + "' datal ='" + item.brand_id + "' >" + Name + "</option>");
     }
 }
    function initAddress() {
   if(datas.where.selecttime!=null&&datas.where.selecttime!=''){
     	$("#date_demo3").text(datas.where.selecttime);
     	$("#selecttime1").val(datas.where.selecttime)
   }
        $("#province").val(datas.where.province);
        initCityOnProvinceChange();
        $("#city").val(datas.where.city);
        initThree();
        $("#area").val(datas.where.area);
        $("#Upgrades").val(datas.where.state);
        $("#devbrand").val(datas.where.devbrand_id);
        $("#devname").val(datas.where.devname_id);
        $("#Agenty").val(datas.where.agenty_id);
        $("#agentf_id").val(datas.where.agentf_id);
        $("#devfactory").val(datas.where.devfactory_id);
        $("#investor").val(datas.where.investor_id);
        $("#batchPromote").val(datas.where.customertype);
        $("#search").val(datas.where.search);
        $("#customertype").val(datas.where.customertype);
    }
    function getAddressIdByName(_name) {
        _name = $.trim(_name);
        if (_name == "") {
            return 0;
        }
        for (var index = 0; index < where_datas.areas.length; index++) {
            var item = where_datas.areas[index];
            var name = $.trim(item.Name);
            if (name != "" && name == _name) {
              return item.Id;
            }
        }
        return 0;
    }
    function initListener() {
        $("#province").on("change", function () {
            initCityOnProvinceChange();
        });
        $("#city").on("change", function () {
            initThree();
        });
//    $("#queryBtn").on("click",function(){
//        query();
//    });
    }
    function initCityOnProvinceChange() {
        var pid = getAddressIdByName($("#province").val());
        $('#city option').not(":first").remove(); 
        $('#area option').not(":first").remove(); 
        if (pid == 0) {
            return;
        }
        for (var index = 0; index < where_datas.areas.length; index++) {
            var item = where_datas.areas[index];
            if (item.PId != 0 && item.PId == pid) {
                $("#city").append("<option value='" + item.Name + "'>" + item.Name + "</option>");
                initThree()
            }
        }
    }
    function initThree() {
        var pid = getAddressIdByName($("#city").val());
        $('#area option').not(":first").remove(); 
        if (pid == 0) {
            return;
        }
        for (var index = 0; index < where_datas.areas.length; index++) {
            var item = where_datas.areas[index];
            if (item.PId != 0 && item.PId == pid) {
                $("#area").append("<option value='" + item.Name + "'>" + item.Name + "</option>");
            }
        }
    }
    function initProvince() {
    	   // $('#province option').not(":first").remove(); 
        for (var index = 0; index < where_datas.areas.length; index++) {
            var item = where_datas.areas[index];
            if (item.PId == 0) {
                $("#province").append("<option value='" + item.Name + "'>" + item.Name + "</option>");
            }
        }

    }
 
	$("#page").paging({
			pageNo:1,
			totalPage:  Math.ceil(datasNum/$('#Jumpdisplay option:selected').val()),
			totalSize: datasNum,
			callback: function(num) {
    var searchParameters={
        selecttime:$("#selecttime1 option:selected").val(),
        province:$('#province option:selected').val(),
        city:$('#city option:selected').val(),
        area:$('#area option:selected').val(),
        state:$("#Upgrades option:selected").val(),
        devbrand_id:$("#devbrand option:selected").val(),
        devname_id:$("#devname option:selected").val(),
        agenty_id:$("#Agenty option:selected").val(),
        agentf_id:$("#Agentf option:selected").val(),
        devfactory_id:$("#devfactory option:selected").val(),
        investor_id:$("#investor option:selected").val(),
        customertype :$("#customertype option:selected").val(),
        search :$("#search").val(),
        offset:num*$('#Jumpdisplay option:selected').val()-$('#Jumpdisplay option:selected').val(),
        limit:$('#Jumpdisplay option:selected').val()
        }

        console.log(searchParameters)
       Get_datas(searchParameters) 





			}
		})
		// 模拟ajax数据用以下方法，方便用户更好的掌握用法
		//参数为当前页

	







</script>

