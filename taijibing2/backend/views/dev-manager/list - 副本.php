<?php
use yii\widgets\LinkPager;
?>
<link rel="stylesheet" href="./static/js/jedate/skin/jedate.css"/>
   <link rel="stylesheet" type="text/css" href="./static/css/conmones.css">
<style>
    *{
        margin:0px;
        padding:0px;
    }
    .dialog_container{
        background:rgba(0,0,0,0.6)!important;background:#000;filter:Alpha(opacity=98);height: 100%;left: 0;
        position: fixed;
        top: 0;
        width: 100%;
        z-index:999;
        display:none;
    }
    #formContainer{
        width:60%;
        margin-left:20%;
        margin-top:60px;
        background:white;
    }
    #orderlistc ul li{
        float:left;
        margin-left:20px;
        list-style-type: none;
    }
    #water_fac_list  ul li{
        float:left;
        margin-left:20px;
        list-style-type: none;
    }
.btn1 {
    display: inline-block;
    background: #4ADCDD;
    color: white;
    width: 50px;
    height: 24px;
    border-radius: 4px;
    line-height: 17px;
    font-size: 14px;
    border: 0px;
}
#submitBtn{
    background-color: #E46045
}
    td {
        color: inherit;
    }

#formContainer{
    border-top:#E46045 1px solid;
 background: #393E45;
}
#jedatebox *{
    background-color:#17191B;
}
#formContainer input{
    width: inherit;
}
#formContainer<div{
    margin-top:20px;
}


#dvCBs  input{
	display:none;
}
.state + label{
    background-color: #2d3136;
    border-radius: 5px;
 
    width:20px;
    height:20px;
    display: inline-block;
    text-align: center;
    vertical-align: middle;
    line-height: 20px;
    border-radius:2px;
}


.state:checked + label{
    background-color: #e46045;
    border-radius:2px;
}
.state:checked + label:after{
    content:"\2714";
    font-weight:400;
}
.boootn{
   width:10px;
   display: inline-block;
   height:10px;
   border-radius:50px;
   background-color:#fff;
}
.table>tbody>tr>td:last-child a{
    color:#CF4EE4;
    font-weight:bold;
}

#formContainer{
	height:500px;
	padding: 70px 20px;
}
#formContainer  #closeBtn,#formContainer  #submitBtn{
	 width: 100px;
     height: 30px;
    background-color: #4ADCDD;
    color: #fff;
    border-radius:2px;
    border:none;
    margin-top:20px;
 
}
#formContainer  #submitBtn{
	 margin-left: 20%;
	 background-color:#E46045;
	 background:#E46045;
}
.table>tbody>tr:hover{
    color: #BABABF
}
</style>

<div class="wrapper wrapper-content">
    <form action="/index.php?r=dev-manager/list" method="post">
<!--       <input type="hidden" name="State" value="--><?//=$State?><!--">-->
        <div style="margin-bottom:10px;" class="condition">
            <span style="padding-left:5px;display:inline-block"><label>搜索内容:</label><input placeholder="请输入关键词" id="search" type="text" name="search" value="<?=$search?>"/></span>
            <span style="padding-left:10%;display:inline-block">
                <label>地区:</label>
                 <select class="control-label" name="province"  id="province">
                     <option value="" selected>请选择</option>
                 </select>
                <select class="control-label" name="city" id="city">
                    <option value="">请选择</option>
                </select>
                <select class="control-label" name="area" id="area">
                    <option value="">请选择</option>
                </select>
            </span>

              <input type="submit" class="btn" value="查询" id="btn" style="height:26px;line-height:14px;"/>
         <br/>
             <div id="dvCBs"  style="padding-left:5px;  margin-top: 25px;">
                
                 <input type="checkbox" name="state1" value="1"  id="state1" class='state' / >
    			 <label for="state1"></label>
    			 <span>	正常设备</span>
				 <!--<input type="checkbox" name="state2" value="1"  id="state2" class='state'/>
                 <label  for="state2"></label>
                  未激活设备-->
                 <input type="checkbox" name="state3" value="1"  id="state3" class='state'/>
                 <label  for="state3"></label>
                  已初始化设备
           &nbsp;
           &nbsp;
           &nbsp;
           &nbsp;
                  <span style="font-weight: bold;">（此选项为复选项 ,  同时满足多个条件筛选  注释：
                    	<span class='boootn'></span>正常设备 &nbsp; 
                    	 <!--<span class='boootn' style='background-color: red;'></span>未激活设备 &nbsp; -->
                  	 <span style="width: 50px;height:1px;text-decoration:line-through;color:#49CECF">&nbsp;&nbsp;&nbsp;</span>
                  	&nbsp;已初始化设备 ）
                  </span>
            </div>
        </div>
    </form>

    <table class="table table-hover" >
        
        <thead>
        <th style="width: 1%"><input type="checkbox" id="selectAll"/></th>
        <th style="width: 3%">序号</th>
        <th style="width: 4%">设备编号</th>
        <th style="">ICCID</th>
        <th style="width: 8%">设备商品型号</th>
        <th style="width: 8%">设备品牌</th>
        <th style="width: 8%">设备厂家</th>
        <th style="width: 8%">设备投资商</th>
        <th style="width: 8%">用户姓名</th>
        <th style="width: 4%">手机号</th>
        <th style="width: 8%"><a id="sort" href="">激活时间</a></th>
        <th style="width: 8%">所在区域</th>
        <th style="width: 8%">位置信息</th>
        <th style="width: 8%">服务中心</th>
        <th style="width: 8%">运营中心</th>
        <!--        <th>最近命令日志</th>  <td>".$val["Cmd"]."</td>-->
        <!--        <th>最近命令时间</th>  <td>".$val["RowTime"]."</td>-->
        <?php
        if($role_id==1){
                echo '<th style="width: 6%">操作</th>';
        }
        ?>
        </thead>
        <tbody>
        <?php
        $str='';
        $no=1;
        if($role_id==1){
                foreach($model as $key=>$val)
                {
                    $str.= "<tr ".(in_array($val['DevNo'],$users_of_init)?"date = '1'":'')."".(($val['IsActive']==0&&!in_array($val['DevNo'],$users_of_init))?"style='color: red;position: relative;'":'')." >
                        <td><p><input type='checkbox' devno='".$val["DevNo"]."' class='devitem'/></td>
                        <td><p>".$no."</p></td>
                        <td><p>".$val["DevNo"]."</p></td>
                        <td><p>".$val["Iccid"]."</p></td>
                        <td><p>".$val["goodsname"]."</p></td>
                        <td><p>".$val["BrandName"]."</p></td>
                        <td><p>".$val["DevFactory"]."</p></td>
                        <td><p>".$val["investor"]."</p></td>
                        <td><p>".$val["UserName"]."</p></td>
                        <td><p>".$val["Tel"]."</p></td>
                        <td><p>".$val["RowTime"]."</p></td>
                        <td><p>".$val["Province"].'-'.$val["City"].'-'.$val["Area"]."</p></td>
                        <td><p>".$val["Address"].")</p></td>
                        <td><p>".$val["agentname"]."</p></td>
                        <td><p>".$val["agentpname"]."</p></td>
                        <td><p>".((in_array($val['DevNo'],$users_of_init)||$val['IsActive']==0)?"&lt;/&gt;":"<a href='javascript:void(0);' class='openDialogClass' devno='".$val["DevNo"]."'>&lt;/&gt;</a>")."</p></td>          
                        </tr>";
                    $no++;
                }
                echo $str;
        }else{

                foreach($model as $key=>$val)
                {
                    $str.= "<tr ".(in_array($val['DevNo'],$users_of_init)?"date = '1'":'')."".(($val['IsActive']==0&&!in_array($val['DevNo'],$users_of_init))?"style='color: red;position: relative;'":'').">
                        <td><p><input type='checkbox' devno='".$val["DevNo"]."'  class='devitem'/></p></td>
                        <td><p>".$no."</p></td>
                        <td><p>".$val["DevNo"]."</p></td>
                        <td><p>".$val["HwNo"]."</p></td>
                        <td><p>".$val["goodsname"]."</p></td>
                        <td><p>".$val["BrandName"]."</p></td>
                        <td><p>".$val["DevFactory"]."</p></td>
                        <td><p>".$val["investor"]."</p></td>
                        <td><p>".$val["UserName"]."</p></td>
                        <td><p>".$val["Tel"]."</p></td>
                        <td><p>".$val["RowTime"]."</p></td>
                        <td><p>".$val["Province"].'-'.$val["City"].'-'.$val["Area"]."</p></td>
                        <td><p>".$val["Address"].")</p></td>
                        <td><p>".$val["agentname"]."</p></td>
                        <td><p>".$val["agentpname"]."</p></td>
                        </tr>";
                    $no++;
                }
                echo $str;
        }


        ?>
        </tbody>
    </table>
</div>
<div class="dialog_container">
    <div id="dialogcontent">
        <div id="formContainer">
           <div style="margin-left:20px;padding-top:10px;height:30px;">
               <label>控制类型</label>
               <select id="controlType" >
                   <option value="1">控制命令</option>
                   <option value="2">水量余额</option>
                   <option value="3">水厂白名单</option>
                   <option value="4">出厂初始化</option>
               </select>
               <span>	注：选择提交后，该设备将不能使用所勾选的功能</span>
           </div>
            <div id="orderlistc"  style='margin-top:50px;'>
           
         
                <ul style=' display: inline-block;'>
                	   	<span style=' display: inline-block;float:left'>&nbsp;&nbsp;&nbsp;&nbsp;选择功能：</span>
                    <li><input type="checkbox" id="order_open"/><label for="order_open">开机</label></li>
                    <li><input type="checkbox" id="order_tem"/><label for="order_tem">调温</label></li>
                    <li><input type="checkbox" id="order_tea"/><label for="order_tea">泡茶</label></li>
                    <li><input type="checkbox" id="order_pick"/><label for="order_pick">抽水</label></li>
                    <li><input type="checkbox" id="order_clear"/><label for="order_clear">消毒</label></li>
                </ul>
            </div>
            <div style="clear:both;"></div>
            <div id="vol" style="font-size:14px;padding-left:20px;padding-top:10px;display:none;margin-top:50px;">
                <label>水量余额：</label><input type="text" placeholder="请输入余额" id="volinput"/>
            </div>
            <div id="water_fac_list" style="display:none;">
                <h2 style="font-size:14px;color:#676a6c;font-weight: bold;padding-left:20px;">水厂列表</h2>
                <ul>

                    <?php
                        foreach($waterFs as $val){
                            if(!empty(trim($val["Name"]))){
                                echo '<li><input id="'.$val["PreCode"].'" type="checkbox" class="fac" precode="'.$val["PreCode"].'"/><label for="'.$val["PreCode"].'">'.$val["Name"].'</label></li>';
                            }
                        }
                    ?>

                </ul>
            </div>
            <div style="clear:both;"></div>
            <div style="padding-left:20px;margin-top:10px;margin-top:50px;"><lable for="starttime">开始时间:</lable><input type="text" id="starttime"  readonly  unselectable="on"  />&nbsp;&nbsp;<lable for="endtime">结束时间:</lable><input type="text" id="endtime"  readonly  unselectable="on"  /></div>
            <div></div>
            <div style="text-align:center;margin-top:20px;">
				<input class="btn1" type="button" value="关闭" id="closeBtn"/>
            	<input type="button"  class="btn1" value="提交"  id="submitBtn"/>&nbsp;&nbsp;
            	
            </div>
            <div style="height:10px;"></div>
            <div style="clear:both;"></div>
        </div>
    </div>
</div>
<?php
echo "";
echo "<dev style='float:left;margin-top: 22px;margin-left: 50px;padding-bottom: 50px;'>每页显示：<select type='text' name='page_size' id='page_size' style='width:50px;'>
<option value='10'>10</option>
<option value='20'>20</option>
<option value='50'>50</option>
</select>条
<span style='margin-left: 20px'>".LinkPager::widget(['pagination' => $pages, 'maxButtonCount' => 10 ])."</span>
&nbsp;&nbsp;&nbsp;&nbsp;共：$pages->totalCount 条
&nbsp;&nbsp;&nbsp;&nbsp;<span style='margin-left: auto'>第：<input style='width: 50px' type='text' id='pages' name='pages' value='$page'>页
&nbsp;&nbsp;&nbsp;&nbsp;<a href='./?r=dev-manager/list' id='butn'>确定</a></span>
</dev>"
?>
<script type="text/javascript" src="/static/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/js/layer/layer.js"></script>
<script type="text/javascript" src="./static/js/jedate/jedate.js"></script>
<script type="text/javascript" src="/static/js/jquery.min.js"></script>
<script>
    var data =<?=json_encode($address)?>;
    var province='<?=$province?>';
    var city='<?=$city?>';
    var area='<?=$area?>';
    var sort=<?=$sort?>;



</script>
<script>
$(function(){
    $(".table tbody").children("tr").each(function(index){
        if( $(this).attr("date")==1){
            // $(this).parent().parent().line();
             $(this).children().attr("disabled", "disabled").children().attr("disabled", "disabled");
                    var t = $(this).offset().top + $(this).height()/2;//1、获得对应行，第一列相对于浏览器顶部的位移
                    var l = $(this).offset().left;//2、获得对应行，第一列相对于浏览器左侧的位移
                    var w = $(this).width();//3、获得对应行的宽度 
                   
                    // $(this).after("<div style='outline:#BABABF solid 1px; position:absolute; left:" + l + "px;top:" + t + "px;width:" + w + "px;'></div>");//4

                $( 'p',  this).css({'borderBottom':'1px solid #49CECF','display':'inlineBlock',' paddingBottom':'10px','color':'#49CECF',"textAlign":'center'})

                $( 'td:first-child',  this).css('borderLeft', '3px solid #49CECF')
                $( 'td:first-child p:first-child',  this).css('borderBottom', 'none')

        }
    })

        // $.get("/index.php?r=dev-manager/detail",function(data){
        //     console.log(data)
        // });



})
//分页
    $('#page_size').val(<?=$page_size?>);
    $('#butn').click(function () {
        var search=$('#search').val();
        var province=$('#province option:selected').val();
        var city=$('#city option:selected').val();
        var area=$('#area option:selected').val();

        var page_size=$('#page_size option:selected').val();
        var pages=$('#pages').val();
//            alert(page_size);
        var href=$(this).attr('href');
        $(this).attr('href',href+'&page='+pages+'&per-page='+page_size+'&search='+search+'&province='+province+'&city='+city+'&area='+area+'&sort='+sort+'&state1='+state1+'&state2='+state2+'&state3='+state3);
        var href2=$(this).attr('href');
       

    });

    //排序
    $('#sort').click(function(){
        sort++;

        var search=$('#search').val();
        var province=$('#province option:selected').val();
        var city=$('#city option:selected').val();
        var area=$('#area option:selected').val();



        $(this).attr('href','./?r=dev-manager/list&sort='+sort+'&search='+search+'&province='+province+'&city='+city+'&area='+area+'&state1='+state1+'&state2='+state2+'&state3='+state3);
//            alert($(this).attr('href'));

    });
    $(function(){
        $('.pagination a').click(function(){
            var search=$('#search').val();
            var province=$('#province option:selected').val();
            var city=$('#city option:selected').val();
            var area=$('#area option:selected').val();
            var page_size=$('#page_size option:selected').val();

            var href=$(this).attr('href');

            $(this).attr('href',href+'&search='+search+'&province='+province+'&city='+city+'&area='+area+'&sort='+sort+'&per-page='+page_size+'&state1='+state1+'&state2='+state2+'&state3='+state3);
//                var href2=$(this).attr('href');
//                alert(href2)
        });
    });
    var devList=new Array();
    $(function(){
    var dv = document.getElementById('dvCBs'), cbs = dv.getElementsByTagName('input');
$("input",dv ).on('change', function() {
        var  checked=$(this).is(":checked");
        
        $(this).attr("checked",checked)
        // selectAll(checked);
    
});
        $("#selectAll").on("change",function(){
            var  checked=$(this).is(":checked");
            selectAll(checked);
        });
        $("#closeBtn").on("click",function(){
            $(".dialog_container").hide();
        });
        $("#submitBtn").on("click",function(){
            ordersSubmit();
        });
        $("#controlType").on("change",function(){
                var val=Number($(this).val());
                    switch(val){
                        case 1:showOrderList();
                        $("#formContainer>div>span").text('注：选择提交后，该设备将不能使用所勾选的功能')
                      
                        break;
                        case 2:showVol();
                          $("#formContainer>div>span").text('注：选择提交后，该设备单次所抽水量将变为输入水量')
                     
                        break;
                        case 3:showWaterFList();
                              $("#formContainer>div>span").text('注：选择提交后，该设备将只能使用所勾选水厂生产的水')
                       
                        break;
                        case 4:hideAl();
                              $("#formContainer>div>span").text('注：选择提交后，该设备将回到初始未注册时的功能状态')
                          
                        break;
                    }
        });
  var controlTypeVal=Number($("#controlType").val());
   switch(controlTypeVal){
                        case 1:showOrderList();
                        $("#formContainer>div>span").text('注：选择提交后，该设备将不能使用所勾选的功能')
                
                        break;
                        case 2:showVol();
                          $("#formContainer>div>span").text('注：选择提交后，该设备单次所抽水量将变为输入水量')
                     
                        break;
                        case 3:showWaterFList();
                  
                        break;
                        case 4:hideAl();
                              $("#formContainer>div>span").text('注：选择提交后，该设备将回到初始未注册时的功能状态')
                          
                        break;
                    }



        $(".openDialogClass").on("click",function(){
            var devno=$(this).attr("devno");
            openDialog(devno);
        });
        jeDate({
            dateCell:"#endtime",
            isinitVal:true,
            isTime: true
        });
        jeDate({
            dateCell:"#starttime",
            isinitVal:true,
            isTime: true
        });
        initProvince();
        initListener();
        initAddress();
    });
    function initAddress() {
        $("#province").val(province);
        initCityOnProvinceChange();
        $("#city").val(city);
        initThree();
        $("#area").val(area);
      
    if(state1){
        $("#state1").attr("checked",state1)
    }else{
        $("#state1").attr("checked",false)
    }
    if(state2){
         $("#state2").attr("checked",state2);
    }else{
        $("#state2").attr("checked",false)
    }
    if(state3){
         $("#state3").attr("checked",state3);
    }else{
        $("#state3").attr("checked",false)
    }
    }
    function getAddressIdByName(_name) {
        _name = $.trim(_name);
        if (_name == "") {
            return 0;
        }
        for (var index = 0; index < data.length; index++) {
            var item = data[index];
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
        $("#queryBtn").on("click",function(){
            query();
        });
    }
    function initCityOnProvinceChange() {
        var pid = getAddressIdByName($("#province").val());
        $("#city").empty();
        $("#area").empty();
        $("#area").append("<option value='' selected>请选择</option>");
        $("#city").append("<option value='' selected>请选择</option>");
        if (pid == 0) {
            return;
        }
        for (var index = 0; index < data.length; index++) {
            var item = data[index];
            if (item.PId != 0 && item.PId == pid) {
                $("#city").append("<option value='" + item.Name + "'>" + item.Name + "</option>");
                initThree()
            }
        }
    }
    function initThree() {
        var pid = getAddressIdByName($("#city").val());
        $("#area").empty();
        $("#area").append("<option value='' selected>请选择</option>");
        if (pid == 0) {
            return;
        }
        for (var index = 0; index < data.length; index++) {
            var item = data[index];
            if (item.PId != 0 && item.PId == pid) {
                $("#area").append("<option value='" + item.Name + "'>" + item.Name + "</option>");
            }
        }
    }
    function initProvince() {
        for (var index = 0; index < data.length; index++) {
            var item = data[index];
            if (item.PId == 0) {
                $("#province").append("<option value='" + item.Name + "'>" + item.Name + "</option>");
            }
        }

    }
    function ordersSubmit(){
        var val=Number($("#controlType").val());
        switch(val){
            case 1:orderSubmit();break;
            case 2:volSubmit();break;
            case 3:waterFSubmit();break;
            case 4:resetSubmit();break;
        }
    }
    function resetSubmit(){
        submit('');
    }
    function orderSubmit(){
        var orderArr=new Array();
        var order_open=$("#order_open").is(":checked");
        var order_tem=$("#order_tem").is(":checked");
        var order_tea=$("#order_tea").is(":checked");
        var order_pick=$("#order_pick").is(":checked");
        var order_clear=$("#order_clear").is(":checked");
        orderArr.push(order_open?1:0)
        orderArr.push(order_tem?1:0)
        orderArr.push(order_tea?1:0)
        orderArr.push(order_pick?1:0)
        orderArr.push(order_clear?1:0)
        orderStr=orderArr.join("");
        submit(orderStr);
    }
    function getStausByChecked(checked){
        return checked?1:0;
    }
    function volSubmit(){
            var vol=$("#volinput").val();
            if(isNaN(Number(vol))){
                layer.alert("水量余额填写错误");
                return;
            }
        submit(vol);
    }
    function waterFSubmit(){


        var listObj= $("input.fac:checked");
        var length=listObj.length;
        if(length>32){
            layer.alert("最多下发32个水厂白名单");
            return;
        }
        var precodeArr=new Array();
        for(var index=0;index<length;index++){
            var item=listObj[index];
            precodeArr.push($(item).attr("precode"));
        }
        var precodeListStr=precodeArr.join(",");
        submit(precodeListStr);

    }
    function submit(type){
        var data={
            CmdType:$("#controlType").val(),
            Cmd:type,
            StartTime:$("#starttime").val(),
            ExpiredTime:$("#endtime").val(),
            DevNo:devList.join(","),
        };
       var ii= layer.msg("处理中……");
        $.getJSON("/index.php?r=dev-manager/send-order&"+ $.param(data),function(data){
           layer.close(ii);
            closeDialog();
            layer.msg("操作成功");
        });
    }
    function showOrderList(){
        hideAl();
        $("#orderlistc").show();
    }
    function showVol(){
        hideAl();
        $("#vol").show();
    }
    function showWaterFList(){
        hideAl();
        $("#water_fac_list").show();
    }
    function hideAl(){
        $("#orderlistc").hide();
        $("#vol").hide();
        $("#water_fac_list").hide();
    }
    function selectAll(checked){
        var checkedList=$(".devitem");
        for(var index=0;index<checkedList.length;index++){
            var item=checkedList[index];
            if(checked){
                $(item).prop("checked",true);
            }else{
                $(item).prop("checked",false);
            }
        }
    }

    function openDialog(devno){
        devList=new Array();
        devList.push(devno)
        open(devList);
    }
    function batchOpenDialog(){
        var devnoArr=new Array();
       var devArr= $("input.devitem:checked");
        if(devArr.length==0){
            return;
        }
        for(var index=0;index<devArr.length;index++){
            var item=devArr[index];
            var devno=$(item).attr("devno");
            devnoArr.push(devno);
        }
        open(devnoArr);
    }
    function open(devnos){
        devList=devnos;
        $(".dialog_container").show();
    }
    function closeDialog(){
        $(".dialog_container").hide();
    }
</script>
