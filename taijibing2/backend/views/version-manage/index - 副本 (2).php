<!DOCTYPE html>
<html>
<head>
  <title>版本升级</title>

  <link rel="stylesheet" href="/static/css/bootstrap.min.css"> 
  <link rel="stylesheet" type="text/css" href="/static/css/dateRange.css"/>
  <link rel="stylesheet" type="text/css" href="/static/css/monthPicker.css"/>
  <link rel="stylesheet" type="text/css" href="/static/css/conmones2.css"/>
  <link rel="stylesheet" type="text/css" href="/static/css/version-manage/index.css"/>
</head>
   <style type="text/css" media="screen">
   
   .dropdown-menu{
    max-height: 250px;
    overflow: auto;
  }

   </style>
<body>
  <div id='home'>
        <!--内容主题-->
      <form action="./index.php?r=version-manage/index" method="post" accept-charset="utf-8">
   <div class='page-head'>


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
       <div class="selection pull-left" style='margin-left: 30px;'>
         <span  class="selection-text  pull-left">地区选择：</span>
         <div class="region pull-left address" >
             <div class="wrap_line">
                <!-- 省级 -->
                 <div class="dropdown" >
                  <button class="btn btn-default dropdown-toggle"  style=" background-color: #2D3136;color:#f0f0f0;"  type="button" id="province" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="true">
                      请选择
                      <span class="caret"></span>
                  
                </button>
                   <input  class="toggle-input" type="text" name="province" value="" >

                    <ul class="dropdown-menu" aria-labelledby="province">
                      <li   class='downLi' value>请选择</li>
                   </ul>
                </div>
              <!-- 市级 -->
              <div class="dropdown" >
                  <button class="btn btn-default dropdown-toggle"  style=" background-color: #2D3136;color:#f0f0f0;"  type="button" id="city" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      请选择
                      <span class="caret"></span>
                </button>
                 <input  class="toggle-input" type="text" name="city" value="">
                    <ul class="dropdown-menu" aria-labelledby="city">
                      <li   class='downLi' value>请选择</li>
                   </ul>
                </div>
                <!-- 区级 -->
              <div class="dropdown" >
                  <button class="btn btn-default dropdown-toggle"  style=" background-color: #2D3136;color:#f0f0f0;"  type="button" id="area" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      请选择
                      <span class="caret"></span>
                </button>

                     <input  class="toggle-input" type="text" name="area" value="">

                    <ul class="dropdown-menu" aria-labelledby="area">
                      <li   class='downLi' value>请选择</li>
                    </ul>
              </div>  
                
              </div> 
              
         </div> 
         <!-- 状态 -->
                 <div class="dropdown" style='margin-left:20px;'>
                  <button class="btn btn-default dropdown-toggle"  style=" background-color: #2D3136;color:#f0f0f0;"  type="button" id="Equipment" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      全部升级状态
                      <span class="caret"></span>
                </button>
                 <input  class="toggle-input" type="text" name="state" value="">
                    <ul class="dropdown-menu" aria-labelledby="Equipment">
                      <li   class='downLi' value>全部升级状态</li>
                      <li   class='downLi' value="1">等待升级</li>
                      <li    class='downLi' value="2">升级中</li>
                      <li   class='downLi' value="3">升级完成</li>
                   </ul>
                </div> 
       </div>
    </div>
  <div class='head-txt'>
      <!-- 设备 -->
      <div class="selection pull-left">
        <span  class="selection-text  pull-left">设&nbsp;&nbsp;&nbsp;备：</span>
          <div class="region pull-left condition"  >
             <div class="wrap_line" style='min-width:230px;'>

                <!-- 设备 -->
                 <div class="dropdown" >
                  <button class="btn btn-default dropdown-toggle"  style=" background-color: #2D3136;color:#f0f0f0;"  type="button" id="devbrand" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      设备品牌
                      <span class="caret"></span>
                </button>
                 <input  class="toggle-input" type="text" name="devbrand_id" value="">
                    <ul class="dropdown-menu" aria-labelledby="devbrand">
                       <li   class='downLi' value>请选择设备品牌</li>
                   </ul>
                </div>
              <!-- 用户 -->
              <div class="dropdown" >
                  <button class="btn btn-default dropdown-toggle"  style=" background-color: #2D3136;color:#f0f0f0;"  type="button" id="devname" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      请选择设备型号
                      <span class="caret"></span>
                </button>
                 <input  class="toggle-input" type="text" name="devname_id" value="">
                    <ul class="dropdown-menu" aria-labelledby="devname"  style='    min-width: 201px;'>
                      <li   class='downLi' value>请选择设备型号</li>
                    
                     
                 
                   </ul>
                </div>
              </div>  
         </div>
       </div>
     
       </div>

<div class='head-txt'>
      <!-- 角色：-->
      <div class="selection pull-left">
        <span  class="selection-text  pull-left">角&nbsp;&nbsp;&nbsp;色：</span>
          <div class="region pull-left condition"  >
             <div class="wrap_line" style='min-width:230px;'>
                  <!-- 设备厂家 -->
                 <div class="dropdown" >
                  <button class="btn btn-default dropdown-toggle"  style=" background-color: #2D3136;color:#f0f0f0;"  type="button" id="devfactory" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      请选择设备厂家
                      <span class="caret"></span>
                </button>
                 <input  class="toggle-input" type="text" name="devfactory_id" value="">
                    <ul class="dropdown-menu" aria-labelledby="devfactory">
                       <li   class='downLi' value>请选择设备厂家</li>
                   </ul>
                </div>

                <!-- 设备 -->
                 <div class="dropdown" >
                  <button class="btn btn-default dropdown-toggle"  style=" background-color: #2D3136;color:#f0f0f0;"  type="button" id="investor" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      请择设备投资商
                      <span class="caret"></span>
                </button>
                 <input  class="toggle-input" type="text" name="investor_id" value="">
                    <ul class="dropdown-menu" aria-labelledby="investor">
                       <li   class='downLi' value>请择设备投资商</li>
                   </ul>
                </div>
                <!-- 设备 -->
                 <div class="dropdown" >
                  <button class="btn btn-default dropdown-toggle"  style=" background-color: #2D3136;color:#f0f0f0;"  type="button" id="Agenty" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      选择运营中心
                      <span class="caret"></span>
                </button>
                 <input  class="toggle-input" type="text" name="agenty_id" value="">
                    <ul class="dropdown-menu" aria-labelledby="Agenty">
                       <li   class='downLi' value>请选择运营中心</li>
                   </ul>
                </div>
              <!-- 用户 -->
              <div class="dropdown" >
                  <button class="btn btn-default dropdown-toggle"  style=" background-color: #2D3136;color:#f0f0f0;"  type="button" id="Agentf" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      请选择服务中心
                      <span class="caret"></span>
                </button>
                 <input  class="toggle-input" type="text" name="agentf_id" value="">
                    <ul class="dropdown-menu" aria-labelledby="Agentf">
                      <li   class='downLi' value>请选择服务中心</li>
                   </ul>
                </div>
              </div>  
         </div>
       </div>
     
       </div>


      <div class='head-txt'>
      <!-- 状态 -->
      <div class="selection pull-left" style='min-width:230px;'>
        <span  class="selection-text  pull-left">状&nbsp;&nbsp;&nbsp;态：</span>
          <div class="region pull-left condition"  >
             <div class="wrap_line">

              
              <!-- 用户 -->
              <div class="dropdown" >
                  <button class="btn btn-default dropdown-toggle"  style=" background-color: #2D3136;color:#f0f0f0;"  type="button" id="customertype" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      用户类型
                      <span class="caret"></span>
                </button>
                 <input  class="toggle-input" type="text" name="customertype" value="">
                    <ul class="dropdown-menu" aria-labelledby="customertype" style='min-width: 130px;'>
                  
                      <li   class='downLi' value>全部用户类型</li>
                      <li   class='downLi' value="1">家庭</li>
                      <li   class='downLi' value="2">公司</li>
                      <li   class='downLi' value="3">集团</li>
                      <li   class='downLi' value="99">其他</li>
                   </ul>
                </div>
              
                
              </div>  
         </div>
       </div>
       <!-- 搜索容器 -->
       <div class="selection pull-left" style='margin-left: 30px;'>
         <span  class="selection-text  pull-left">搜&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;索：</span>
                  <div class="wrap_line">
                     <input type="text" name="search"  id="searchp" value="" placeholder="请输入关键字">
                  </div>
       </div>
           <!-- 条件按钮 -->
         <div class="submitBtn" s style='display: inline-block;' >
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="submit" class="btn btn-danger" id="submit" >   查看</button>
        &nbsp;&nbsp;
        <button type="text"  class="btn btn-danger" id="removerSub">清空条件</button>
           </div>
       </div>


      <div class='head-txt'>
      <!-- 状态 -->
        <div class="selection pull-left btnbatch" style='min-width:230px;'>
              <p  id='batchPromote'><img src="/static/images3/batchPromoteImg.png" alt=""> 批量升级</p>
              <p   id="AllEquipment" style='margin-left: 20px;'><img src="/static/images3/AllEquipmentImg.png" alt="" >  升级所有设备</p>  


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
      </div>
  </div>
</form>
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
 
		<div id="page" class="page_div"></div>
		
	</div>
</body>
<script type="text/javascript" src="/static/js/jquery.min.js"></script>
<script type="text/javascript" src="./static/js/layer/layer.js"></script> 
<script src="/static/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/static/js/dateRange.js"></script>
<script type="text/javascript" src="/static/js/monthPicker.js"></script>
<script type="text/javascript" src="/static/js/paging3.js"></script> 



<script type="text/javascript">
 

    var where_datas =<?=json_encode($where_datas)?>;
    var datas =<?=json_encode($datas)?>;
    var where_datas  = eval('(' + where_datas + ')'); 
   var datas  = eval('(' + datas + ')'); 
   var datasNum =datas.total;

   // console.log(datas)
console.log(where_datas)

</script>

<script type="text/javascript" src="/static/js/style3.js"></script>
<script type="text/javascript">
 
</script>


</html>