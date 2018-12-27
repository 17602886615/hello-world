<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>运营活动</title>
       <!-- <link rel="stylesheet" href="/static/css/style.min862f.css"/> -->
	<link rel="stylesheet" href="/static/css/bootstrap.min.css"> 
       <link rel="stylesheet" href="/static/css/chosen.css"/>
      <link rel="stylesheet" href="/static/css/Common.css"/>
      <style type="text/css" media="screen">
		
		.search span label{
			width:60px;
			margin-top: 5px;
		}
		table{width:100%;   
			border-collapse: separate;    
			margin-top: -20px;
			border-spacing: 0 15px;}
		table td,table th{
			text-align: center;    
			line-height: 1.42857;
			padding: 8px;
		}
		thead {
			background-color: #292834
		}
		#version{
    position: absolute;
    height: 30px;
    padding: 5px;
    background: #e46045;
    z-index: 100;
    border-radius: 5px;
    margin-left: 15px;color: #fff;top:-25px;
} .removert{
	position: absolute;
    right: 0;
    height: 30px;
    width: 30px;
    top: 50%;
    margin-top: -25px;
}
 .jstree-node{
        	text-align: left;list-style-type: none;padding:15px;position: relative;
        }
.layui-layer-btn .layui-layer-btn0,.layui-layer-molv .layui-layer-btn a{
                background-color: #DD5C1A  !important;    border-color: #DD5C1A  !important;
        }
        .layui-layer-btn{
        	    text-align: center  !important;
        }
        .layui-layer-title{
        	display: block;    margin: auto;
    margin-left: 50px;
        }
     .layui-layer-title{
     	text-align: center;
     }   
</style>;
</head>;
<body>
	<div class="wrapper wrapper-content">
        <div class="search">
        	<div style="margin-bottom:70px;" class="condition">
	            <!-- <form action="/index.php?r=activity/create-activity" method="post" style="    padding-bottom: 15px;"> -->
	                
	                <span style="padding-left:10px;">
	                	<label>手机号:</label><input type="text" placeholder="请输入活动主题" id="create" value="" name="login_name"/>
	                </span>
	                
	                <div class="multiple-choice" style="border:none;background:none;    display: initial;    line-height: 60px;margin-left: 5%">
	                   
	                     <input type="submit" class="btn" id="search" value="查询"/ style="background: #e46045; color: white;height: 26px;line-height: 14px;padding-left: 10px;margin-top: -5px;    border: none;    margin-left: 15%;">
	                </div>
	            <!-- </form> -->
	        </div>
        </div>
        <div style="position: relative;">
        <table>
        	<thead>
        		<tr>
        			<div  id="version">创建活动</div>
        			<th>序号</th>
        			<th>活动主题</th>
        			<th>活动开始时间</th>
        			<th>活动结束时间</th>
        			<th>首次赏金</th>
        			<th>长期赏金</th>
        			<th>参与用户</th>
        			<th>备注</th>
        			<th>创建时间</th>
        			<th>活动状态</th>
        			<th>设置</th>
        			<th>修改</th>
        		</tr>
        	</thead>
        	<tbody id='datatBox'>
        		 <tr>
        		 	<td></td>
        		 	<td></td>
        		 	<td></td>
        		 	<td></td>
        		 	<td></td>
        		 	<td></td>
        		 	<td></td>
        		 	<td></td>
        		 	<td></td>
        		 	<td></td>
        		 	<td></td>
        		</tr>
        	</tbody>
        </table>
        </div>
    </div>
    <div style="  position: relative;margin: auto; width: 100%;text-align: center; height: 100px;">
    <div id="page" class="page_div"></div>
</div>


</body>

	<script type="text/html" id='user_html'>
		
		<div class="user_html " style="    width: 100%;
    height: 100%;
    text-align: center;
    padding: 20px;">
			<span style="padding-left:10px;"><input type="text" placeholder="请输入关键词" id="create_user" value="" name="login_name" style="    background-color: #fff;"><label style="line-height:30px;border-radius:0px 5px 5px 0px;background-color: #e46045;padding:0 7px;color:#fff" id="sub_usre">确定</label> </span>
			   <div id="user_html_box" style="width:300px;height:300px;    margin: auto;">
			   	
			   </div>
		</div>
	</script>
	<script type="text/javascript" src="/static/js/jquery.min.js"></script>
	<script type="text/javascript" src="./static/js/layer/layer.js"></script>
	<script src="/static/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="./static/js/chosen.jquery.min.js"></script> 
	<script type="text/javascript" src="/static/js/Common2.js?v=1"></script> 
	<script type="text/javascript" src="/static/js/paging3.js"></script>
<script>
	
$("#version").click(function(event) {
	/* Act on the event */
	// alert(444)
	location.href="/index.php?r=activity/create-activity"
});
var dataList = urlDatas('index.php?r=activity/get-index-data','post');



console.log(dataList)

var timestamp=new Date().getTime();
console.log(timestamp)


listData(dataList.data.datas)
function listData(data){
	if(data.length){
	$("#datatBox").empty();


	 $.each(data, function(index, item){ 
           // console.log(item)
            var StartTime = new Date(item.StartTime).valueOf();
            var EndTime = new Date(item.EndTime).valueOf();
            console.log(StartTime);


           var  _tapyof='还未开始';
              if(StartTime<=timestamp&&timestamp<=EndTime){
              	  _tapyof='进行中';
              }else if(timestamp>EndTime){
              		  _tapyof='活动结束';
              }
           var html = "";
				html +='<tr>';
				html +='<td>'+(index+1)+'</td>';
				html +='<td>'+item.Title+'</td>';
				html +='<td>'+item.StartTime+'</td>';
				html +='<td>'+item.EndTime+'</td>';
				html +='<td>'+item.FirstMoney+'</td>';
				html +='<td>'+item.DrinkMoney+'</td>';
				html +='<td><a class="UserNum"  date ="'+item.Id+'">'+item.UserNum+'</a></td>';
				html +='<td>'+item.Remark+'</td>';
				html +='<td>'+item.RowTime+'</td>';
				html +='<td>'+_tapyof+'</td>';
                if(item.State==1){
                	html +='<td>默认活动</td>';
                }else{
                	html +='<td><a class="default"   date ="'+item.Id+'">设为默认</a></td>';
                }
				



               if(StartTime<=timestamp&&timestamp<=EndTime){
              	 html +='<td>修改</td>';
              }else if(timestamp>EndTime){
				html +='<td>修改</td>';
              }else{
              	html +='<td><a href="/index.php?r=activity/create-activity&activity_id='+item.Id+'">修改</a></td>';
              }
				



				html +='</tr>';
				$("#datatBox").append(html)
	 })
}
}



$("#search").click(function(event) {
	/* Act on the event */
	var createVal = $("#create").val();

			var dataArr =[]
			$.each(dataList.data.datas, function(key, value){
			      console.log(value)
			         if(value.Title.indexOf(createVal) != -1 ){
			                  dataArr.push(value)
			         }
			     

			 
			});



if(createVal){
    
listData(dataArr)
}else{

listData(dataList.data.datas)
}

});


$(".UserNum").click(function(event) {
	/* Act on the event */
//页面层

var Id =  $(this).attr("date")
		layer.open({
		  type: 1,
		  title:'',
		  skin: 'layui-layer-rim', //加上边框
		  area: ['520px', '440px'], //宽高
		  btn: ['确定'] ,
		  content: $("#user_html").html(),
		  yes:function(index) {
		  	// body...
		  	location.reload()
		  }
		});


//询问框

 var user_data = urlDatas('index.php?r=activity/get-activity-and-user-data','post',{activity_id:Id});
 var data = user_data.data.users
       console.log(data)

user_data_htnl (data) 


$("#sub_usre").click(function(event) {
	  var _thisVal = $("#create_user").val();
	 
	  if(_thisVal){
	  	 var dataArr =[]
                  $.each(data, function(key, value){
				          
				             if(value.UserName.indexOf(_thisVal) != -1 ){
				                      dataArr.push(value)
				                 }else if(value.Tel.indexOf(_thisVal) != -1 ){
				                     dataArr.push(value)
				               }
				         

				     
				    });


           user_data_htnl (dataArr)      
           $(".removert").click(function(event) {
				/* Act on the event */
			     var _this=  $(this);
			     alert(4)
			        var aentid = _this.parent('li').attr('aentid');
				 	layer.msg('是否确定删除此用户', {
					  time: 0 //不自动关闭
					  ,btn: ['确定','取消']
					  ,yes: function(index){
					  	 _this.parent('li').remove()
					     layer.close(index);
					  }
					});
				//
			});  
	  }

})

$(".removert").click(function(event) {
	/* Act on the event */
     var _this=  $(this);
        var aentid = _this.parent('li').attr('aentid');
        var UserId = _this.parent('li').attr('UserId');
	 	layer.msg('是否确定删除此用户', {
		  time: 0 //不自动关闭
		  ,btn: ['确定','取消']
		  ,yes: function(index){
		  
             var dataList = urlDatas('index.php?r=activity/del-user','post',{UserId:UserId,id:aentid});
             console.log(aentid)
             console.log(UserId)
             console.log(typeof(aentid)+"-----"+typeof(UserId))
             console.log(dataList)
             if(dataList.state==-1){
             	   layer.msg(dataList.msg)
             }else{
 					layer.msg('删除成功')

             		 _this.parent('li').remove();
             		  layer.close(index);
             }
		    
		  }
		});
});
});

$(".default").click(function(event) {
	/* Act on the event */

var Id =  $(this).attr("date")

		layer.msg('是否确定设置为默认活动？', {
		  time: 0 //不自动关闭
		  ,btn: ['确定','取消']
		  ,yes: function(index){
		  
             var dataList = urlDatas('index.php?r=activity/set-default-activity','post',{activity_id:Id});
             // console.log(dataList)
             // console.log(UserId)
             // console.log(typeof(aentid)+"-----"+typeof(UserId))
             // console.log(dataList)
             if(dataList.state==-1){
             	   layer.msg(dataList.msg)
             }else{
 					layer.msg('成功')
 					location.reload()
             		 // _this.parent('li').remove();
             		layer.close(index);
             }
		    
		  }
		});
});



function user_data_htnl (data) {
	// body... 
	 $("#user_html_box").empty()
      $.each(data, function(i, v){  
          var id = v.UserId;
           var html = '<li class="jstree-node" aentid="'+v.Id+'" UserId = "'+v.UserId+'">姓名：'+v.UserName+'<br/>电话：'+v.Tel+'</a><div class="removert"><img src="/static/images3/removert.png" alt="" style="width:100%;height:100%"></div> <hr/></li>';
                    $("#user_html_box").prepend(html)

     })

}
</script>
</html>