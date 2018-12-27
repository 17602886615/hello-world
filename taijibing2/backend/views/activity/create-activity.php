<!DOCTYPE html>
<html style="overflow-x:hidden;overflow-y:hidden">
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <meta http-equiv="X-UA-Compatible"content="IE=9; IE=8; IE=7; IE=EDGE">
    <link rel="stylesheet" href="./static/js/zui/css/zui.css"/>
    <link rel="stylesheet" href="./static/js/zui/css/style.css"/>
    <link rel="stylesheet" href="./static/css/addgood.css"/>
    <link rel="stylesheet" href="/static/js/jedate/skin/jedate.css"/>
    <link href="/static/plugins/jstree/themes/default/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./static/js/page/jquery.pagination.css"/>
       <link rel="stylesheet" href="./static/css/chosen.css"/>
      <link rel="stylesheet" href="./static/css/Common.css"/>
    <style>
        body{
            height:100%;
            width:100%;
            overflow:auto;
        };
        .layui-layer-title {
            display:none;
        }
        .layui-layer-content,.layui-layer-btn{
        background-color: #2D3136;
        }
       
        #dvCBs  input,#good_sub_type_c input{
            display:none;
        }
        input{
            background-color: #1d1f23;
            border: none;color:#fff;
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
          #good_sub_type_c     .state + label {
                border: 1px solid #e46045;
          }

        .state:checked + label{
           border:1px solid #e46045;
            /*border-color: #e46045;*/
            border-radius:2px;
        }
        .state:checked + label:after{
            content:"\2714";
            font-weight:400;
            /*color: #e46045*/
        }
        .listBs{
            float:left;
            position: relative;
            width: 50%;
        }
         .listBs label,.itemBgclose{
          cursor: pointer;
         }
        .Bgclose{
            width: 20px;
            height: 25px;          cursor: pointer;
            line-height: 20px;
            /*position: absolute;*/
            right: 30px;
            text-align: center;
            top: 0;
            color: #fff;
            padding: 0;   
            /*    display: inline-block;*/

            display:none;
            background: url(/static/images3/guanbi.png) 100% 100% no-repeat;
        }
        #dvCBs label{
            margin:0;
            /*border-radius:50%;*/
        }
            .select_btn {
           border-radius: 3px;
           background-color: #E46045;
           width: 60px;
          color: #fff;border: none
        }

        .select_btn:hover{
        background-color:#e44b2b;
        color: #fff
        }  

        .chosen-container {
            margin-left: 15px;
        }
      select, .chosen-container{
          min-width: 130px !important;
      }
      .itemLi div select:last-child,  .itemLi  div  .chosen-container:last-child  {
         min-width: 190px !important;
      }
      #good_sub_type_c .itemLi span{
          min-width: inherit;
          display: inline-block;
          text-align: center;
          margin-left: 15px;
          position: relative;

      }

#good_sub_type_c .itemLi .chosen-container-single .chosen-single span{
  margin-left: 0px;
}

#good_sub_type_c .itemLi .itemNUm{
   /*position: absolute;*/
   width:20px;
   height: 20px;
     min-width: 20px;
     border-radius: 50px;
       background: #1D1F23;    line-height: 20px;    color: #E46045;
   /*left: -10%*/
    }

    .itemLi{
        /*margin-left: -40px;*/
        /*display: inline-block;*/
        min-width: 150px;
    }
    .main-title img {
        border: 0;
        margin-top: -5px;
        vertical-align: middle;
    }

    .page-head {
        padding: 10px 20px;
        padding: 1rem 2rem;
        border-radius: 2px;
        margin-top: 25px;
            padding-bottom: 80px;
        background-color: #393E45;
        min-height: 600px;
    }

    .layui-layer-dialog .layui-layer-content{
          border-top: 4px solid #e84332;    color: #000;
    }
    .layui-layer-content, .layui-layer-btn{
        background-color: #fff;
    }
    .layui-layer-btn{
          text-align: center !important;    padding:15px!important;
    }

    .layui-layer-btn a{
        color: #fff !important;

        background-color: #ea644a!important;
    }
    .layui-layer-btn .layui-layer-btn0{
         /*border-color: #1AA5F1;*/
        background-color: #1AA5F1!important;
    }
    .btn{
      min-width:100px;
       outline:none;
    }

    .btn:focus{
        outline: 0;
            /*background: #ddd;*/
    }
    .select_btn:focus{
        /*background: #ea644a;*/
    }
    .btn:active{
        background: #ddd;
        color: #fff
        border-top: 1px solid #9cc;
    /**/
        /*background: #fff;*/
        box-shadow: 0px 1px 1px #9cc inset, 1px 0px 1px #9cc inset;
    }
    .chosen-container-single .chosen-single span{
        text-align: center;
    }
    .layui-layer-btn a{
        width: 100px;
        border-radius:4px !important;
        height: 30px; 
    }
    .layui-layer-dialog {
        min-width: 311px;
    }
    .layui-layer-setwin .layui-layer-close1{
   		 display: none!important;
    }
    .layui-layer-dialog .layui-layer-content{
        text-align: center;
    }
    .layui-layer-dialog .layui-layer-content .main-title{
        text-align: left;
    }
    .ftitle{
        width:80px;
    }
    .Addto{
    	width:100px;
    	height: 50px;
    	/*background: red;*/
    	position: absolute;
    	bottom: -60px;
    left: -10px;
    }
.state{
  display:none;
}
a {
    color: #337ab7;
    text-decoration: none;
}
.state + label{
    background-color: #fff;
    border-radius: 5px;
     border:1px solid #000;
    width:20px;
    height:20px;
    display: inline-block;
    text-align: center;
    vertical-align: middle;
    line-height: 20px;
    border-radius:2px;
    position: absolute;
    left: -25px;
}
.state:checked + label{
    background-color: #e46045;
    border-radius:2px;
}
.state:checked + label:after{
    content:"\2714";
    font-weight:400;
}
#Addto{
    width: 100px;
    height: 30px;
    background-color: #E46045;
    line-height: 0px;
    text-align: center;
    color: #fff;
    font-weight: bold;
    margin-left: 10px;
    
    }

    #addUser .centerLeft p{
    	position: relative;
    }

    .usersan{
    	width: 13px;
    transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -webkit-transform: rotate(--90deg);
    -o-transform: rotate(-90deg);
    position: absolute;top: 5px;
    left: 0px;
    }
.jstree-node{
	line-height: 20px;position: relative;
}
hr{
	margin:10px 0;
}.removert{
	position: absolute;
    right: 0;
    height: 30px;
    width: 30px;
    top: 50%;
    margin-top: -25px;
}
.layui-layer-btn .layui-layer-btn0,.layui-layer-molv .layui-layer-btn a{
                background-color: #DD5C1A  !important;    border-color: #DD5C1A  !important;
        }
   .jedatebox .jedatetop,.jedatebox .jedaul li.action, .jedatebox .jedaul li.action:hover,.jedatebox .jedatebot .jedatebtn span,.jedatebox .jedatehmscon p.action{
        background-color: #E46045;
        background: #E46045;
   }    
   .jedatebox .jedaul li.prevdate, .jedatebox .jedaul li.nextdate{
   color: #E46045;
   }
   .jedatebox{
    border-color: #E46045
   }
</style>
</head>
<body>
<div class="content_middle">
 <div style="text-align: right;margin-bottom: 10px">
         <a class="btn btn-primary" href="index.php?r=activity/index">返回</a>     
        </div> 
    <div class="main-title">
        <img src="/static/images3/sidebar.png" alt="">
          <span class="font-size-S">创建/修改活动</span>
    </div>
    <div  style="" class='serve page-head '>
					<table style="width:100%">
						<tr>
							<td style="padding: 20px;">活动主题</td>
							<td><input type="text" id="Use_title"></td>
						</tr>
						<tr>
							<td style="padding: 20px;">活动时间</td>
							<td>
								<div >
									<!-- <lable for="starttime">开始时间:</lable> -->
									<input type="text" id="start_time"  readonly  unselectable="on"  />-
									<!-- <lable for="endtime">结束时间:</lable> -->
									<input type="text" id="end_time"  readonly  unselectable="on"/>
								</div>
							</td>
						</tr>
						<tr>
							<td style="padding: 20px;">首次赏金</td>
							<td><input type="text" id="first_money">元</td>
						</tr>
						<tr>
							<td style="padding: 20px;">长期赏金</td>
							<td><input type="text" style="width:100px"  id="drink_money">（推荐成功的用户，每次用水的单件水赏金）</td>
						</tr>
						<tr>
							<td style="padding: 20px;">参与用户</td>
							<td style="padding-bottom: 50px;">
								<div  style=" width: 500px;height:150px;   background-color: #1d1f23;position: relative;">
                                      
									<div    id="addcenter"  style="height:150px;  line-height: 30px;  background-color: #1d1f23;overflow: auto;padding:15px;">
										
									</div>
									<div class="Addto"><input type="button" value="添加指定用户"  id='Addto'  style="height:26px;line-height:14px;;color: #fff"></div>
								</div>
								
								

							</td>
						</tr>
						<tr>
						<td style="padding: 20px;">备注</td>
						<td><textarea   id="remark"  style="width:200px;height:30px;    background-color: #1d1f23;position: relative;border:none;resize:auto;color: #fff"></textarea></td>
						</tr>
					</table>



		 <div style="margin-top:20px;    padding-left: 40px;">
				<input class="btn1" type="button" value="提交" id="submitBtn" style="width:50px;background-color: #E46045;"/>
            	<input type="button"  class="btn1" value="重置"  id="closeBtn" style="width:50px;"/>&nbsp;&nbsp;
            	
            </div>
      <div style='clear:both'></div>
    </div>
</div>

<script type="text/javascript" src="./static/js/jquery.min.js"></script>
<script type="text/javascript" src="./static/js/chosen.jquery.min.js"></script> 
<script type="text/javascript" src="./static/js/layer/layer.js"></script>
<script type="text/javascript" src="./static/js/Common2.js"></script>
<script type="text/javascript" src="./static/js/jedate/jedate.js?v=1.4"></script>
<script src="/static/js/jedate/jedate.min.js"></script>
<script type="text/javascript">
var data = urlDatas('index.php?r=activity/get-user','post');
var dataList = urlDatas('index.php?r=activity/get-user','post');

var  $type=  '<?=($type)?>';
var  $activity_id=  '<?=($activity_id)?>';
console.log($activity_id);
var OneId=0;
var TwoId=[];
var ThreeId=[];
var str = getFormatDate();
var start_time = str;
var end_time = str;
var app_userObj =sessionStorage.getItem('app_user') ;
var user_id_str=[];
var removerArr ='';

 if(app_userObj){
     	app_userObj=jQuery.parseJSON(app_userObj)
  }
// console.log(app_userObj);//缓存
 if($activity_id){
    if($type){
	    if(app_userObj){
	    	user_data_html()
	    	app_userObj_html(app_userObj)
	    }
  	}else{
         user_data_html()
   }
}else{
	if($type){
	    if(app_userObj){
	    	app_userObj_html(app_userObj)
	    }
  	}
}


var end = {
     dateCell:"#end_time",
    isinitVal:true,
    isTime: true,
    minDate: str,
}
var start = {
    dateCell:"#start_time",
    key:"1900-01-01 00:00:00",
    isinitVal:true,
    isTime: true,
    // initVals:,
	clearRestore:false,  
	startMin:str, 
	initAddVal:str, 
    minDate: str,
     choosefun:function(val) {
     	 end.minDate = val; //开始日选好后，重置结束日的最小日期
     	 $("#end_time").val('')

     } 
}
jeDate(start);
jeDate(end);

$("#Addto").click(function(event) {
	 var app_user ={
         title:$("#Use_title").val(),
         start_time:$("#start_time").val(),
         end_time:$("#end_time").val(),
         first_money:$("#first_money").val(),
         drink_money:$("#drink_money").val(),
         remark:$("#remark").val(),
         user_id_str:[]
 	  }
 



  
 var user_id_strArrp = user_id_strArrp_html();







	app_user.user_id_str=user_id_strArrp;
	   var  app_userSring =  JSON.stringify(app_user);
		sessionStorage.setItem('app_user',app_userSring);
		location.href='/index.php?r=activity/app-user-activity&activity_id='+$activity_id;
	});

$(".removert").click(function(event) {
	/* Act on the event */
   var _this=  $(this);
        var aentid = _this.parent('li').attr('aentid');
	 	layer.msg('是否确定删除此用户', {
		  time: 0 //不自动关闭
		  ,btn: ['确定']
		  ,yes: function(index){
		  	if(aentid){
		  		removerArr=removerArr+aentid+','
		  	}
		  	 _this.parent('li').remove()
		     layer.close(index);
		  }
		});
	//
});
    function  urlDatas(url,type,obj){
     var csj_data;
    // console.log(url);
         if(!obj){
            obj=''
         }
          $.ajax
           ({
               cache: false,
               async: false,
               type: type,
               data: obj,
               url: url,
               success: function (data) {

               	// console.log(data);
                if(typeof(data)=='string'){
                    data= eval('(' + data + ')');
                 }
                   csj_data = data;
                 }
           });
           //
       return csj_data;
}
function getFormatDate(){
    var nowDate = new Date();
    var year = nowDate.getFullYear();
    var month = nowDate.getMonth() + 1 < 10 ? "0" + (nowDate.getMonth() + 1) : nowDate.getMonth() + 1;
    var date = nowDate.getDate() < 10 ? "0" + nowDate.getDate() : nowDate.getDate();
    var hour = nowDate.getHours()< 10 ? "0" + nowDate.getHours() : nowDate.getHours();
    var minute = nowDate.getMinutes()< 10 ? "0" + nowDate.getMinutes() : nowDate.getMinutes();
    var second = nowDate.getSeconds()< 10 ? "0" + nowDate.getSeconds() : nowDate.getSeconds();
    return year + "-" + month + "-" + date+" "+hour+":"+minute+":"+second;
}


function uesrListRightDataAdd(data,string){
       // var listData = []
       console.log(data)
       console.log(string)

        string = unique(string);
        // $("#addcenter").empty()
         $.each(string, function(y, it){  
				   // console.log(it)
			    $.each(data, function(index, item){  
		             $.each(item, function(i, v){  
		                var id = v.UserId;
		                // $.each(string, function(y, it){  
		                   var id = v.UserId;
		                   var html = '<li class="jstree-node"  UserId = "'+v.UserId+'">姓名：'+v.UserName+'<br/>电话：'+v.Tel+'</a><div class="removert"><img src="/static/images3/removert.png" alt="" style="width:100%;height:100%"></div> <hr/></li>';
		                       if(it==id){
          	                    $("#addcenter").prepend(html)
						     	return false
						     }
		                // })
		             })
		       }); 	    
		});
}
$("#submitBtn").click(function(event) {
	/* Act on the event */
   
   var app_user ={
        title:$("#Use_title").val(),
        start_time:$("#start_time").val(),
        end_time:$("#end_time").val(),
        first_money:$("#first_money").val(),
        drink_money:$("#drink_money").val(),
        remark:$("#remark").val(),
        user_id_str:[]
	}
	var user_id_str_Arr='';
		if(!user_id_str.length){
		 layer.msg('没有用户')
		 return false;
		}else{
 var user_id_strArrp = user_id_strArrp_html();
			 $.each(user_id_strArrp, function(index, item){ 
			 	  var itemsplit=item.split('_');
			 //     console.log(item)
			 	 if(itemsplit[0]!='Two'&&itemsplit[0]!='user'){
			 	   	// console.log(itemsplit[0])
			 	      	// user_id_str_Arr=user_id_str_Arr+itemsplit[0]+",";
			 	   	   if(index==user_id_str.length-1){
			 	   	   	user_id_str_Arr=user_id_str_Arr+itemsplit[0]+"";
			 	   	   }else{
			 	   	   user_id_str_Arr=user_id_str_Arr+itemsplit[0]+",";
			 	   	   }
			      }
			 });	 	  
		}

    app_user.user_id_str=user_id_str_Arr;
var  URL= 'index.php?r=activity/save-activity-user';

  if($activity_id){
     URL ="index.php?r=activity/save-edit";
     app_user.activity_id=$activity_id
   }else{
     	URL= 'index.php?r=activity/save-activity-user';
   }

console.log(app_user);
// app_user.user_id_str=[];
var data =   urlDatas(URL,'post',app_user);
console.log(data);
  if(data.state==-1){
  	 layer.msg(data.msg);
  	 var  app_userSring =  JSON.stringify(app_user);
    	sessionStorage.setItem('app_user',app_userSring);
  	 return;
  }else{
    
   	layer.msg('保持成功', {
		  time: 0 //不自动关闭
		  ,btn: ['确定']
		  ,yes: function(index){
		  	 location.href='/index.php?r=activity/index'
		    // layer.close(index);
		  }
		});
  }
});
$("#closeBtn").click(function(event) {
	$("table input,table textarea").val('')
	$("#Addto").val('添加指定用户')
	$("#addcenter").empty()
})




// h5缓存渲染
function app_userObj_html(app_userObj){


	$("#Use_title").val(app_userObj.title);
	$("#first_money").val(app_userObj.first_money);
	$("#drink_money").val(app_userObj.drink_money);
	$("#remark").val(app_userObj.remark);
	$("#start_time").val(app_userObj.start_time);
    $("#end_time").val(app_userObj.end_time);
	start_time=app_userObj.start_time;
	end_time=app_userObj.end_time;
	user_id_str =app_userObj.user_id_str;

// uesrListRightDataAdd(dataList,data.selected)
console.log(dataList)
	uesrListRightDataAdd(dataList,user_id_str)
}
function user_id_strArrp_html(){
var addcenterLingth=$("#addcenter li").length;
 var user_id_strArrp = [];
	for(var i=0;i<addcenterLingth;i++){
		if($("#addcenter li").eq(i).attr('userid')){
			user_id_strArrp.push($("#addcenter li").eq(i).attr('userid'))
		}
	}

	return user_id_strArrp;
}


// ajax 渲染已经掺加的用户
function user_data_html(){
       	   var activity_id = urlDatas('index.php?r=activity/get-activity-and-user-data','post',{'activity_id':$activity_id});
           console.log(activity_id);
		   var datatitle= activity_id.data.activity;
		    $("#Use_title").val(datatitle.Title);
			$("#first_money").val(datatitle.FirstMoney);
			$("#drink_money").val(datatitle.DrinkMoney);
			$("#remark").val(datatitle.Remark);
			$("#start_time").val(datatitle.StartTime);
		    $("#end_time").val(datatitle.EndTime);
		     user_id_str =[];
		    $("#Addto").val('修改指定用户')
		    $("#addcenter").empty();
		     $.each(activity_id.data.users, function(i, v){  
		           var UserId = v.UserId;
		           user_id_str.push(v.UserId);
		            var html = '<li class="jstree-node" aentId= "'+v.Id+'" UserId= "'+v.UserId+'" >姓名：'+v.UserName+'<br/>电话：'+v.Tel+'</a> <div class="removert"><img src="/static/images3/removert.png" alt="" style="width:100%;height:100%"></div> <hr/></li>';
		//              // if(it==id){
		            $("#addcenter").prepend(html);
		      })
}

Array.prototype.indexOf = function(val) { 
for (var i = 0; i < this.length; i++) { 
if (this[i] == val) return i; 
} 
return -1; 
};
Array.prototype.remove = function(val) { 
var index = this.indexOf(val); 
if (index > -1) { 
this.splice(index, 1); 
} 
};
Array.prototype.unique = function() {
    // n为hash表，r为临时数组
    var n = {}, r = [];
    for (var i = 0; i < this.length; i++) {
        // 如果hash表中没有当前项
        if (!n[this[i]]) {
            // 存入hash表
            n[this[i]] = true;
            // 把当前数组的当前项push到临时数组里面
            r.push(this[i]); 
        }
    }
    return r;
}
</script>
</body>
</html>

