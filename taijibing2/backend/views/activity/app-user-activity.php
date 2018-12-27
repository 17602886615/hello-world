    

	<link rel="stylesheet" href="/static/css/bootstrap.min.css"> 
 	<link rel="stylesheet" type="text/css" href="/static/css/dateRange.css"/>
	<link rel="stylesheet" type="text/css" href="/static/css/monthPicker.css"/>
	<link rel="stylesheet" href="./static/css/chosen.css"/>
  <link rel="stylesheet" href="./static/css/Common.css?v=1.1"/>
  <link rel="stylesheet" href="./static/css/sales-volume/index.css?v=1.1"/>

    <link href="/static/plugins/jstree/themes/default/style.min.css" rel="stylesheet">
    <style>
    .ibox{
    	padding:20px;
    }
    	.jstree-themeicon{
    		display: none !important
    	}.jstree-default .jstree-anchor{
    		text-indent: -25px;
    		height: inherit;padding-left: 25px;
    	}.hr-line-dashed{
    		display: none
    	}
    	#ringht_center li{
			padding-right: 50px;
			white-space: nowrap;
			overflow: hidden;
			text-overflow: ellipsis;
    	}
    	hr{
    		margin: 10px 0;
    	}
    	.jstree-default .jstree-clicked{
    		background:none;
    		box-shadow:none;
    	}
     .search{
          text-align: center;padding:10px;height: 50px;
        }
        .search input {
          height: 30px;
           border-top-left-radius: 10px;
           border-radius: 2px;text-indent: 10px;
           /*border: none;*/
        }
        .ibox-content{
        	background-color: #1d1f23;
        }
    </style>
<div class="ibox">
	<div style="text-align: right;margin-bottom: 10px">
		<a class="btn btn-primary" href="/index.php?r=activity/create-activity&activity_id=<?=$activity_id?>">
			返回
	    </a>
	</div>
	<div class="ibox-content" style="color: #fff">
		<div class="row text-left">
			<div style="font-weight: bold;float: left;width:40%;padding-left: 15px;    padding-bottom: 40px;">
				选择用户

  				  <div class='search'style="text-align: center">
					 <label><input type="text" name="" value=""  placeholder="请输入用户名/电话" style=""><button id="nubSub" class="btn" style="    background: #e46045;color:#fff;line-height:17px;">
						确定
					</button></label>
					</div>


			</div>
			<p style="font-weight: bold;;float: right;width:40%">
				已选用户
			</p>
		</div>
	    <div id="jstree_demo_div" style="height: 600px;width:40%;float: left;overflow: auto;">暂无</div>
	    <div id="ringht_center"  style="height: 600px;width:40%;overflow: auto;float: right;    border-top: 1px solid #999;border-top: 1px solid #999;padding: 10px;">	    	 
	    </div>
		<div class="hr-line-dashed">
		</div>
		<div  class="form-horizontal">
			<div class="form-group">
				<div class="col-sm-10 col-sm-offset-4" style="padding: 20px;">
					<button class="btn btn-primary" type="submit" style="    background: #e46045;color:#fff">
						保存
					</button>
					<!-- <button class="btn btn-white" type="reset" style="    margin-left: 10%;">
						 重置
					</button> -->
				</div>
			</div>
		</div>
	 </div>
</div>
<script type="text/javascript" src="./static/js/jquery.min.js"></script>
<script type="text/javascript" src="./static/js/Common2.js"></script>
<script type="text/javascript" src="./static/js/layer/layer.js"></script>
<script src="/static/plugins/jstree/jstree.min.js"></script>
<script>	
var  $activity_id=  <?=json_encode($activity_id)?>;
console.log($activity_id);
var Url = 'index.php?r=activity/get-user';
var UrlObj={};
if($activity_id!='null'){
	console.log(4)
  Url = 'index.php?r=activity/get-activity-and-user-data';
  UrlObj={activity_id:$activity_id}

}












var dataList =   urlDatas('index.php?r=activity/get-user','post');
console.log(dataList)
// activity/get-activity-and-user-data
var app_userObj =sessionStorage.getItem('app_user') 
  if(app_userObj){
  	app_userObj=jQuery.parseJSON(app_userObj)
  }

var Aqqqq = [];
console.log(dataList);
console.log(app_userObj);
var objson =init(app_userObj.user_id_str);

$('#jstree_demo_div').jstree({
        'core' : {
               'data' :  objson       
              },
        "plugins" : ["checkbox"]
 });



var  dataObject= [];

$("#nubSub").click(function(event) {
	/* Act on the event */
	var search_val = $(".search input").val();
	var tree = $('#jstree_demo_div');
	if(search_val){
		console.log(search_val);
     var html  =[];
      $.each(dataList, function(index, item){  
        $.each(item, function(i, v){  

              if(v.UserName.indexOf(search_val) != -1) {
            // console.log(item) 

                   var stringTwo ={
							"id": v.UserId,
							"text":'姓名：'+v.UserName+'<br/>电话：'+v.Tel,
							"children": [],
							"state": {
								"selected": []
							}
						}
                 html.push(stringTwo)

	          }else if(v.Tel.indexOf(search_val) != -1) {
	            // console.log(item) 
	                 var stringTwo ={
							"id": v.UserId,
							"text":'姓名：'+v.UserName+'<br/>电话：'+v.Tel,
							"children": [],
							"state": {
								"selected": []
							}
						}
						 html.push(stringTwo)
	          }

        })
  });

  // console.log(JSON.stringify(html));
	  
		tree.jstree(true).settings.core.data = html; // 新数据
		tree.jstree(true).refresh(); //刷新树
	}else{
		tree.jstree(true).settings.core.data = objson; // 新数据
		tree.jstree(true).refresh(); //刷新树
	}
});



$('#jstree_demo_div').on("changed.jstree", function (e, data) {
	 dataObject=data.selected;
	// console.log(data);
	console.log(dataObject);
  	 $("#ringht_center").empty();
      uesrListRightDataAdd(dataList,data.selected)
});










function init(stribg){
 console.log(stribg);
	 var objson=[]
	  $.each(dataList, function(index, item){   
      	// console.log(index)
       var stringArr=[]; 
	 	$.each(item, function(i, v){  
	 		 var _booleanif=false;
                $.each(stribg, function(y, it){  
					if(it==v.UserId){
						 _booleanif=true;
						 return false;
					}
                 });
                 var stringTwo ={
						"id": v.UserId,
						"text":'姓名：'+v.UserName+'<br/>电话：'+v.Tel,
						"children": [],
						"state": {
							"selected": _booleanif
						}
					}
				stringArr.push(stringTwo)
           })
        //console.log(stringArr)
      	var string = {
				"id": 'Two_'+index,
				"text": index,
				"children": stringArr,
				"state": {
				"selected": false
				}
			};
		objson.push(string)
    }); 
     var objsonArrStit =[
               {
					"id": "user",
					"text": "用户列表",
					"children": objson,
					"state": {
						"selected": false
					}
				}
			]  ;

	  return objsonArrStit;

}


$(document).on('click','.btn-primary',function() {
    var objArr = dataObject;

  // $('#jstree').jstree(true).select_node('child_node_1');
  // $('#jstree').jstree('select_node', 'child_node_1');
  // $.jstree.reference('#jstree').select_node('child_node_1');

 // console.log(objArr)

   app_userObj.user_id_str=app_userObj.user_id_str.concat(objArr);

   

var user_id_str_string = unique(app_userObj.user_id_str);

 console.log(user_id_str_string)

    var  app_userSring =  JSON.stringify(app_userObj);
    sessionStorage.setItem('app_user',app_userSring);



if( $activity_id!='null'){
    // dataList=dataList.data.users;
    location.href='/index.php?r=activity/create-activity&type=1&activity_id='+$activity_id
}else{
	location.href='/index.php?r=activity/create-activity&type=1'
}

	
    // var dataList =   urlDatas('index.php?r=activity/save-activity-user','post',dataObject);
    	// console.log(dataList)
}).on('click','.btn-white',function() {



	 // location.reload()
})

function curtail(arr) {
var m = arr.slice(0);
    m.splice(0,1);
    return m;
}

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
function uesrListRightDataAdd(data,string){
       // var listData = []
       // console.log(string)
         $.each(string, function(y, it){  
				   // console.log(it)
			    $.each(data, function(index, item){  
		             $.each(item, function(i, v){  
		                var id = v.UserId;
		                // $.each(string, function(y, it){  
		                   var id = v.UserId;
		                   var html = '<li class="jstree-node  jstree-leaf" aentId = "'+v.UserId+'">姓名：'+v.UserName+'<br/>电话：'+v.Tel+'</a><hr/></li>';
		                       if(it==id){
          	                    $("#ringht_center").append(html)
						     	return false
						     }
		                // })
		             })
		       }); 	    
		});

       // return listData;
}

</script>