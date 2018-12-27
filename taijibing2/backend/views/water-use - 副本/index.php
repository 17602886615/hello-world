<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="/static/css/bootstrap.min.css"> 
 		<link rel="stylesheet" type="text/css" href="/static/css/dateRange.css"/>
		<link rel="stylesheet" type="text/css" href="/static/css/monthPicker.css"/>
		<link rel="stylesheet" href="/static/css/sales-volume/style.css">
</head> 
<style type="text/css" media="screen">

.row{
    border-radius: 4px;
	-moz-box-shadow:0px 0px  10px 1px #000;          /* For Firefox3.6+ */
	-webkit-box-shadow:0px 0px  10px 1px #000;          /* For Chrome5+, Safari5+ */              /* For Latest Opera */
    box-shadow:0px 0px  10px 1px #000;
}
#submit,#removerSub{
		border:none;
		background-color:#E46045;
		height:35px;
		padding: 0 50px;
		color:rgb(233,233,233);
		border-radius:4px;

	}

    .baifenbiA {
    position: absolute;
    width: 100%;
    right: -20%;
       bottom: -50px;
    text-align: center;
    color: #B2B4B7;
    margin: inherit;
}
.baifenbiA li {
    border-bottom: 1px solid #4C5156;
    font-size: 15px;
    float: left;
    margin-right: 41px;
    position: relative;
}
.screening-conditions .inscreen button{
	    background: none;
}
.Hovertitle {
    display: -webkit-inline-box;
    position: absolute;
    /* left: 50px; */
}
</style>
  <body>
 

  	<div class="container-fluid  screening-conditions">
	  <div class="row" style=" background-color:#393E45 ;  ">
		<div class="inscreen pull-left">
				<div>
					<img src="/static/images3/sidebar.png" alt="搜索" >
					<span class="font-size-S" >&nbsp;筛选条件</span>
				</div>
				<!-- 天数选择 -->
				<div  style="padding-top:20px;min-height: 70px">
					<div class="selection  pull-left">
						<span style=" line-height: 30px;">选择时间：</span>
						<ul class="selection-time" id='selectionTime'>
							<li value = "1"><button type="text">今日</button></li>
							<li  value = "2"><button type="text">昨日</button></li>
							<li class="activer"  value = "3"><button type="text">最近7天</button></li>
							<li  value = "4"><button type="text">最近30天</button></li>
							<li  value = "5"><button type="text">最近90天</button></li>
						</ul>	
					</div>
					<!-- 时间选择器 -->
					<div class="selection pull-left" style="padding:0px;margin-top:10px;margin-left: 20px;">
											<span style=" line-height: 30px;">时间段选择：</span>
						 <div	class='timeData' style='    display: inline-block;'>
						    	<div class="ta_date" id="div_date_demo3">
					                    <span class="date_title" id="date_demo3"></span>
					                    <a class="opt_sel" id="input_trigger_demo3" href="#">
					                        <i class="i_orderd"></i>
					                    </a>
					              </div>
					             <div id="datePicker"></div>
								<br/>
						    </div>
					</div> 
				</div>
				<div style="clear:both;"></div>
		<form action="./index.php?r=water-use/index" method="post" accept-charset="utf-8">
          <div style="display: none">
          	    <input type="text" name="time1" id="time1sub"  value="3">
                <input type="text" name="time2" id="time2sub" value="">
                <input type="text" name="offset" id="offsetsub" value="0">
                <input type="text" name="limit" id="limitsub" value="10">
          </div>
          <!-- 条件选择 -->
			<table  style=" background: #2d3136;position:relative;display: inline-block">
				<tbody>
					<!-- 地区选择 -->
					<tr>
						<td>地区选择：</td>
						<td>
							<div class="selection htLeft">
								<div class="wrap_line">
									<select id="province" name="province">
										<option value="" selected = "selected" >请选择</option>
									</select>
									<select id="city" name="city">
										<option value="" selected = "selected" >请选择</option>
									</select>
									<select id="area" name="area">
										<option value="" selected = "selected" >请选择</option>
									</select>
								</div>
							</div>

						</td>
					</tr>
					<!-- 角色选择 -->

					<tr>
						<td>角色选择：</td>
						<td>
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
						</td>
					</tr>
					<!-- 商品选择： -->
					<tr>
						<td>商品选择：</td>
						<td>
							<div class="selection htLeft">
								<div class="wrap_line">
									<select id="devbrand"  name="devbrand_id">
										<option value="" selected>选择设备品牌</option>
									</select>

									<select id="devname"  name="devname_id" datei ='' >
										<option value="">选择设备商品型号</option>
									</select>

						
								</div>
							</div>

						</td>
					</tr>
					
					<!-- 时间选择 -->
					<tr>
						<td>选择时间：</td>
						<td>
							<div class="selection  pull-left">
								<div class="wrap_line">
									<select id="usetype"  name="usetype">
										<option value="" selected="selected">入网属性</option>
										<option value="1" >自购</option>
										<option value="2" >押金</option>
										<option value="3" >买水送机</option>
										<option value="4" >买机送水</option>
										<option value="5" >免费</option>
										<option value="99" >其他</option>
									</select>
									<select id="customertype"  name="customertype">
										<option value="" selected="selected">用户类型</option>
										<option value="1" >家庭</option>
										<option value="2" >公司</option>
										<option value="3" >集团</option>
										<option value="99" >其他</option>
									</select>
								</div>
							</div>
						
							<div class="selection pull-right">
								<div class="search">
								<label> 用户搜索：</label>
								<input  id="search"  type="text" name="search" value="" style=" padding-left:15px;width: 300px;height: 35px;background: #393e45; border: none;" placeholder="请输入用户.名称.手机号 或者设备编号">
								<span class="searchImg">
									 <!-- <img src="/static/images3/searchImg.png" alt="搜索" style="width: 30px;padding: 7px;">  -->
								</span>
								</div>
							</div> 
						</td>
					</tr>
				</tbody>
			</table>

 
				<div class="submitBtn" class="" style="    display: inline-block; position: absolute; bottom: 36px;width:500px;">
					&nbsp;
					&nbsp;
					&nbsp;
					&nbsp;
				<button type="submit" class="btn btn-danger" id="submit" >查看</button>
				<button type="text"  class="btn btn-danger" id="removerSub">清空条件</button>
				
		          </div>
	
		</form>

	  </div>
	</div>


<!-- 销量情况同期 -->
		<div class="container-fluid" style="padding:20px 0;">
			<div class="row">
				<div class="sales-statistics" style="background-color: #393E45; border-radius: 4px;">
					<header  class="header" style="position: relative;">

						<img src="/static/images3/sidebar.png" alt="搜索" >
						<span class="font-size-S">&nbsp;用水量概况&nbsp;</span>
						<div class='Hovertitle'>
							<div  class="volumeHover">	</div>

							<div class="volumeHover-text">
								<p>	用户用水量概况统计：是用户通过设备抽水的水量，和实际用水量有延迟，可能出现微小误差，一般在1%范围内。</p>
							</div>
						</div>
							
					

						<div class="pull-right">
							<span>	
								<img src="/static/images3/rectangle.png" alt="">
							持平
							</span>	
							<span>	
								<img src="/static/images3/arrowA.png" alt="">
							上涨
							</span>	
							<span>	
								<img src="/static/images3/Arrowb.png" alt="">
							下降
							</span>	
						</div>
					</header><!-- /header -->
					<div class="table-text">
					<table style="    width: 80%;margin: auto;height: 100px">
						<thead>
							<tr>
								<th>用户用水量： &nbsp;<span style="color:#E46045">(L)</span>&nbsp;</th>
								<th>同期	&nbsp;
									 
									<div class='Hovertitle'>
										<div  class="compareHover">	</div>

										<div class="compareHover-text">
										<p>	同期表示：该销量和上一日、7天、30天、90天或者选择的时间段的百分比的情况显示</p>
										</div>
									</div>

								</th>
								<th>用户总数（人）</th>
								<th>客户均用水量  &nbsp;<span style="color:#E46045">(L)</span>&nbsp;
									<div class='Hovertitle'>
										<div  class="AverageHover">	</div>
										<div class="AverageHover-text">
											<p>	客户均用水量：为所有用户的销量除以用户总数量的结果数据，数据实时动态变化</p>
										</div>
									</div>


								</th>
								<th>今年累计用水量  &nbsp;<span style="color:#E46045">(L)</span>
									 
									<div class='Hovertitle'>
										<div  class="pageHover">	</div>

										<div class="pageHover-text">
										<p>今年累计用水量：为所有用户从1月1日开始的累计用量 </p>
										</div>
									</div>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td id="sales1">1</td>
								<td  id="sales2">1</td>
								<td id="user_num">1</td>
								<td id="sales_of">1</td>
								<td  id="sales_of_year">1</td>
							</tr>
						</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>


		<!-- 折线图 -->
		<div class="container-fluid" style="padding:0;">
			<div class="row" style="padding:0px;background-color: #393E45">
				<div class="sales-statistics" style="">
					<header  class="header">
						<img src="/static/images3/sidebar.png" alt="搜索" >
						<span class="font-size-S">&nbsp;用水情况 :&nbsp;<span style="color:#E46045;font-weight:400;font-size:12px">单位 ：L	</span></span>
					</header>
				   	<div id="main" style="height:300px"></div>
				</div>

			</div>
		</div>


<!-- 地图 -->
		<div class="container-fluid" style="padding:20px 0">
			<div class="row" style="background-color: #393E45;padding: 15px 0px;position: relative;">
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" >
					<div class="sales-statistics" style="background-color: #393E45">
						<header  class="header" style='padding:0'>
							<img src="/static/images3/sidebar.png" alt="搜索" >
							<span class="font-size-S">&nbsp;全国用水量分布情况:<span style="color:#E46045">单位 ：(L)	</span></span>
						</header><!-- /header -->
					    <div id="echarts2" style="height:450px"></div>
					</div>
				</div>


				<div class="col-lg-4  col-md-4 col-sm-6 col-xs-12">
					<div class="Provincial  pull-left ProvincialActiove"  id="Provincial">
						<p>全国地图</p>
					</div >
					<div class="CityMap pull-right" id="CityMap">
						<p>省级地图</p>
					</div>

					<div class="block" style="height: 300px;">

						<div class="centered" id="percentum">
						<div class="progress">
								<span class="name">广东</span>
								<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
									<span class="">60% </span>
								</div>
							</div> 
							
						</div>

					</div>
				</div>
			
				<div class="col-lg-4  col-md-4 col-sm-6 col-xs-12" >
					<header  class="header" style="width:90%;    padding: 5px;">
						<div class='pull-left'>
							<img src="/static/images3/sidebar.png" alt="搜索" >
						<span class="font-size-S">&nbsp;用户类型用水量占比:<span style="color:#E46045">单位 ：(L)	</span></span>
						</div>
						<div class='pull-right' style=''>
							<span class='data-view'><img src="/static/images3/chankan.png"  ></span>

							<span class='data-refresh'><img src="/static/images3/shuaxin.png"  ></span>

							<div id='dataView'>
								 <table   class="table" style=' width: 200px;' >
							
								 	<thead>
								 		<tr>
								 			<th  colspan="2" style="position: relative;">用户类型净增占比
								 				<div	class="triangle"></div>
								 			</th>

								 		</tr>
								 	</thead>
								 	<tbody>
								 		<tr>
								 			<td>用户类型</td>
								 			<td>增长数量</td>
								 		</tr>
								 			<tr>
								 			<td>家庭</td>
								 			<td>0</td>
								 		</tr>
								 		<tr>
								 			<td>公司</td>
								 			<td>0</td>
								 		</tr>
								 		<tr>
								 			<td>集团</td>
								 			<td>0</td>
								 		</tr>
								 		<tr>
								 			<td>其他</td>
								 			<td>0</td>
								 		</tr>
								 		 <tr>
								 			<td id="Refresh">刷新</td>
								 			<td id='Close'>关闭</td>
								 		</tr>
								 	</tbody>

								 </table>
							</div>
						</div>
					</header>
					<div id="echarts3" style="height:300px;margin-top:90px" ></div>
				<div class = 'baifenbiA'>
						<ul	>
							<li><span class="hor" style="background-color: #E46045;"></span><span class="baifenbi">0</span>%<br/>家庭</li>
							<li><span class="hor" style="background-color: #C248DC;"></span><span class="baifenbi">0</span>%<br/>公司</li>
							<li><span class="hor" style="background-color: #4ADCDD;"></span><span class="baifenbi">0</span>%<br/>集团</li>
							<li><span class="hor" style="background-color: #FEC751;"></span><span class="baifenbi">0</span>%<br/>其他</li>
						</ul>
					</div> 
				</div>
			</div>
		</div>



		<div class="container-fluid" style=" padding:0px 0px;">
			<div class="row" style="background-color: #393E45;color: #fff;padding:5px">
				<div class=" col-xs-12" >
					<div class="methodTab ">
						<theader>
							<div class="pull-left method">
								<img src="/static/images3/sidebar.png" alt="搜索" >
								<span class="  ">&nbsp;实时数据表</span>
							</div>
							<div class="pull-right method"  id="method" style="cursor:pointer">
								<a href=""  id="methodBox" >
								<img src="/static/images3/biao.png" alt="" style='    display: inline-block; padding: 5px;background: #1C1D21; border-radius: 5px;' >
								<span class="font-size-S">&nbsp;导出表格</span>
								</a>
							</div>

						</theader>
					</div>
				</div>
				<div class="">
				<table class="tableBox" id="tableBox" style="width:100%" >	
					<thead>
						<tr id='tabhrader'>
							<th>序号</th>
							<th>用户姓名</th>
							<th>联系电话</th>
							<th>设备编号</th>
							<th>设备商品型号</th>
							<th>设备品牌</th>
							<th>设备厂家</th>
							<th>设备投资商</th>
							<th>服务中心</th>
							<th>运营中心</th>
							<th>地区</th>
							<th>入网属性</th>
							<th>用户类型</th>
							<th>用水量<span style="    color: #E46045;">L</span></th>
						</tr>
					</thead>
					<tbody id="tableData">
					</tbody>
					</table>
				</div>
			</div>
		</div>





<div style="  position: relative;margin: auto; width: 100%;text-align: center; height: 50px;">
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

<script	> 
   var datas2=<?=json_encode($datas)?>;  
 
   var areas=<?=json_encode($areas)?>;
    var province=<?=json_encode($province)?>;

    var city=<?=json_encode($city)?>;
    var area=<?=json_encode($area)?>;
    var where_datas=<?=json_encode($where_datas)?>;

   // console.log(where_datas)

    var agenty=<?=json_encode($agenty)?>;	


    var agentf=<?=json_encode($agentf)?>;		
    var devfactory=<?=json_encode($devfactory)?>;		
    var investor=<?=json_encode($investor)?>;	

    var devbrand=<?=json_encode($devbrand)?>;		
    var devname=<?=json_encode($devname)?>;		

	 var datasNum  =  datas2[0].total;
	var time1= where_datas.time1;
	var time2= where_datas.time2;
   
</script>
<script type="text/javascript" src="/static/js/jquery.min.js"></script>

<script type="text/javascript" src="./static/js/layer/layer.js"></script>	

<script type="text/javascript" src="/static/js/dateRange.js"></script>
<script type="text/javascript" src="/static/js/monthPicker.js"></script>
<script src="/static/js/echarts/echarts.js"></script>

<script type="text/javascript" src="/static/js/paging.js"></script>

<script type="text/javascript" src="/static/js/sales-volume/lineChart.js"  charset="utf-8"></script> 

<script src="/static/js/echarts/dist/echarts.js"></script>



<script type="text/javascript" src="/static/js/sales-volume/map2.js"  charset="utf-8"></script> 
<script type="text/javascript" src="/static/js/water-use/index.js"  charset="utf-8"></script> 


<script> 

$(function(){

	var ii=layer.msg("加载中……");

	initProvince() ;//渲染地址
	initListener(); //内容改变时
    var $Agenty =  $('#Agenty'),$Agentf =  $('#Agentf'),$devfactory =  $('#devfactory'),$investor =  $('#investor');
    RenderingAgent(agenty,$Agenty);
    RenderingAgent(agentf,$Agentf);
    RenderingAgent(devfactory,$devfactory);
    RenderingAgent(investor,$investor); //渲染角色

 $('#Agenty').change(function(){
 		initAgent($Agenty,$Agentf,agentf)//关联运营中心
 })

 $('#Agentf').change(function(){
 		 initAgent($Agentf,$Agenty,agenty)//关联服务中心
 })
	// initAgent($Agentf,$Agenty,agenty)//关联服务中心

    var $devbrand = $("#devbrand"),$devname=$("#devname");
    Renderingdev(devbrand, $devbrand)
    RenderingName(devname,$devname)


    $("#devbrand").change(function(){
    	initDevbrand($devbrand,$devname,devname)
    })
    $("#devname").change(function(){
    	initDevbrand($devname,$devbrand,devbrand)
    })





  	initAddress() ;//记录状态

  	 titmeChoice()//时间段选择



     salesVolume()//同期渲染

     FoldLineDiagramCalculation()
     mapRendering()
     PieChartRendering()

     setInterval(function(){
            window.location.reload(); 
    }, 1000*60*60)
})
// 表格渲染
var sales_detail = datas2[0].sales_detail;
 
      var j = 0;
      for (var i = 0; i < sales_detail.length; i++) {
        var item = sales_detail[i]
        for (var z in item) {
          if (item[z] == null) {
             item[z] = '--'
           }
         }
        j++
        var  UseType = usetype(item.UseType )
        var  CustomerType = customertype(item.CustomerType )
        var WaterUse=0;
        if(item.WaterUse =='--'){
            WaterUse==0
        }else{
             WaterUse= Math.round(item.WaterUse*100)/100
        }
      var html = '<tr><td>' + j + '</td><td>' + item.UserName + '</td><td>' + item.Tel + '</td><td>' + item.DevNo + '</td>' + '<td>' +item.DevBrand + '</td><td>' + item.DevName + '</td><td>' + item.DevFactoryName + '</td><td>' + item.investor + '</td><td>' + item.AgentName + '</td>' + '<td>' + item.AgentPname + '</td><td>' + item.Province + '-' + item.City + '-' + item.Area + '</td><td>' + UseType + '</td><td>' + CustomerType + '</td><td>' + WaterUse + '</td></tr>'
        $("#tableData").append(html);
      }


      
       $('#methodBox').click(function(){
 	       var searc={
 	                      time1:$("#time1sub").val()||where_datas.time1||'',
                          time2: $("#time2sub").val()||where_datas.time2||'',
                          province:$('#province option:selected').val(),
                          city:$('#city option:selected').val(),
                          area:$('#area option:selected').val(),
                          agenty_id:$('#Agenty option:selected').val(),
                          agentf_id:$('#Agentf option:selected').val(),
                          devfactory_id:$('#devfactory option:selected').val(),
                          investor_id:$('#investor option:selected').val(),
                          devbrand_id:$('#devbrand option:selected').val(),
                          devname_id:$('#devname option:selected').val(),
                          usetype:$('#usetype option:selected').val(),
                          customertype:$('#customertype option:selected').val(),
                          search:$('#search').val(),
                          search:$('#search').val(),
                           offset:0,
                          limit:datasNum
                 }
   // console.log(searc.time1)
   $(this).attr('href','./index.php?r=water-use/get-datas& excel=xDME7Ea6BS5KFyYAw27rRi78HiNFGgpz&time1='+searc.time1+'&time2='+searc.time2+'&province='+searc.province+'&city='+searc.city+'&area='+searc.area+'&agenty_id='+searc.agenty_id+'&agentf_id='+searc.agentf_id+'&devfactory_id='+searc.devfactory_id+'&investor_id='+searc.investor_id+'&devbrand_id='+searc.devbrand_id+'&devname_id='+searc.devname_id+'&usetype='+searc.usetype+'&customertype='+searc.customertype+'&search='+searc.search+'&offset='+searc.offset+'&limit='+searc.limit)
		layer.close(ii);
 })





    $("#page").paging({
    pageNo:1,
    totalPage: Math.ceil(datasNum/$('#Jumpdisplay option:selected').val()),
    totalSize:datasNum,
    callback: function(num) {
                      var searchParameters={
                          time1:$("#time1sub").val()||where_datas.time1||'',
                          time2: $("#time2sub").val()||where_datas.time2||'',

                          province:$('#province option:selected').val(),
                          city:$('#city option:selected').val(),
                          area:$('#area option:selected').val(),


                          agenty_id:$('#Agenty option:selected').val(),
                          agentf_id:$('#Agentf option:selected').val(),
                          devfactory_id:$('#devfactory option:selected').val(),
                          investor_id:$('#investor option:selected').val(),
                          // waterfactory_precode:$('#factory option:selected').val(),

                          devbrand_id:$('#devbrand option:selected').val(),
                          devname_id:$('#devname option:selected').val(),
                          // waterbrand_id:$('#waterbrand option:selected').val(),
                          // watername_id:$('#watername option:selected').val(),
                          // watervolume:$('#watervolume option:selected').val(),

                          usetype:$('#usetype option:selected').val(),
                          customertype:$('#customertype option:selected').val(),

                          search:$('#search').val(),
                           offset:num*$('#Jumpdisplay option:selected').val()-$('#Jumpdisplay option:selected').val(),
                          limit:$('#Jumpdisplay option:selected').val()
                 }
        Get_datas(searchParameters)
    }
})



</script>

  </body>
</html>