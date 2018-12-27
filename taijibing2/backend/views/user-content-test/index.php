<!DOCTYPE html>
<html>
<head>
  <title>用户挥度测试</title>
  <link rel="stylesheet" href="/static/css/bootstrap.min.css"> 
  <link rel="stylesheet" type="text/css" href="/static/css/dateRange.css"/>
  <link rel="stylesheet" type="text/css" href="/static/css/monthPicker.css"/>
  	<link rel="stylesheet" href="/static/css/chosen.css"/>
  <!-- <link rel="stylesheet" type="text/css" href="/static/css/conmones.css"/> -->
      <link rel="stylesheet" href="/static/css/Common.css?v=1.1"/>
  <!-- <link rel="stylesheet" type="text/css" href="/static/css/version-manage/index.css"/> -->
</head>
<style type="text/css">
	.condition {
    background-color: #393E45;
    margin-top: 20px;
    padding: 15px;
    border-radius: 4px 4px 0 0;
}
.chosen-container-active, .chosen-container {
    width: inherit !important;
     min-width: 100px; 
}
.btnbatch p {
    padding: 0px 20px;
    border-radius: 5px;
    background-color: #424952;
    border: none;
    cursor: pointer;    
    display: -webkit-inline-box;
    float: left;
}
#upload{
background-color: rgb(66, 73, 82); color: rgb(255, 255, 255);padding:5px 10px;	
}
#upload:hover{
	background-color: rgb(201, 48, 44)
}

.popupa {
    width: 100%;
    height: 100%;
    background-color: #393E45;
    border-top: 3px solid #E46045;
    text-align: center;
    padding-top: 100px;
}
.popupa .butt {
    padding: 10px;
}
.popupa button, .popupa .submitBtn button {
    width: inherit;
    font-size: 18px;
    color: rgb(233,233,233);
    border-radius: 5px;
    margin-top: 65px;
    background-color: #4ADCDD;
    border: none;
        padding: 5px 15px;
}
</style>
<body style="padding:15px">
  <div id='home'>
  	<div class='condition'>


		<div class="selection btnbatch" style="min-width:230px;margin-top: 20px;height: 30px">
			<a href="./index.php?r=user-content-test/add-new-content">
		      <p id="upload" style="">
		      	<!-- <img src="/static/images3/batchPromoteImg.png" alt="">  -->
		      上传版本文件</p></a>
		</div>  
  </div>
    <table class="table" style="width: 100%;">
    	<thead>
    		<tr>
    			<th>序号</th>
    			<th>版本号</th>
    			<th>版本地址</th>
    			<!-- <th>设备</th> -->
    			<!-- <th>更新类型</th> -->
    			<th>更新文案</th>
    			 <th><span class="sort" style="color:#E46045;    cursor: pointer;  ">更新时间</span></th>
    			
    			<th data="">修改</th>
    			<th>是否默认</th>
    		 
    		</tr>
    	</thead>
    	<tbody id="tableData">
    	
    	</tbody>
    </table>

  </div>
  <div style="  position: relative;margin: auto; width: 100%;text-align: center; height: 100px;">
    <div id="page" class="page_div"></div>
</div>
</body>
<script type="text/javascript" src="/static/js/jquery.min.js"></script>
<script type="text/javascript" src="./static/js/layer/layer.js"></script> 
<script src="/static/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/static/js/chosen.jquery.min.js"></script>
<script type="text/javascript" src="/static/js/dateRange.js"></script>
<script type="text/javascript" src="/static/js/monthPicker.js"></script>
<script type="text/javascript" src="/static/js/paging3.js"></script> 
<script type="text/javascript" src="/static/js/Common2.js?v=4"></script>

<script type="text/javascript">

$.get('./index.php?r=user-content-test/get-index-data', function(data) {
	/*optional stuff to do after success */
	// console.log(data);
 if(typeof(data)=='string'){
		  data= eval('(' + data + ')');
	}
		console.log(data);
  for(var i=0;i<data.length;i++){
  	var item=data[i];
   var html = '<tr>';
		html+='<td>'+(i+1)+'</td>';
		html+='<td>'+item.version_number+'</td>';
		html+='<td>'+item.content_address+'</td>';
		html+='<td>'+item.describe+'</td>';
		html+='<td>'+item.update_time+'</td>';
  if(item.state==2){
      html+='<td data="'+item.id+'">修改</td>';
      html+='<td  data="'+item.id+'">默认</td>';
  }else{
    html+='<td class="edit" data="'+item.id+'"><a>修改</a></td>';
        html+='<td class="state" data="'+item.id+'"><a>设置默认</a></td>';
  }
		$("#tableData").append(html)
  }
		$(".edit").click(function(event) {
			/* Act on the event */
			var Id=$(this).attr('data');
		  location.href='./index.php?r=user-content-test/edit&id='+Id;
		});		
		$(".state").click(function(event) {
			/* Act on the event */
			var Id=$(this).attr('data');
			console.log(Id)
		$.get('./index.php?r=user-content-test/edit-state', {id:Id},function(data) {
				/*optional stuff to do after success */
				 if(typeof(data)=='string'){
				  data= eval('(' + data + ')');
		     	}
		     	console.log(data);
				    if(data.state==-1){
				      	layer.msg(data.msg)
				    }else{
			         layer.confirm('操作成功', {
							 btn: ['确定'] //按钮
					  }, function(){
							  location.href='./index.php?r=user-content-test/index'
					     });
				    }
			});
		});
});
</script>
</html>