<!DOCTYPE html>
<html>
<head>
	<title>创建商品分类</title>
</head>

 <link rel="stylesheet" href="./static/css/chosen.css"/>
  <link rel="stylesheet" href="/static/css/bootstrap.min.css"> 
 <script type="text/javascript" src="./static/js/jquery.min.js"></script>
 <script type="text/javascript" src="./static/js/chosen.jquery.min.js"></script>
     <link rel="stylesheet" href="./static/css/Common.css?v=1.1"/>
<style type="text/css" media="screen">
	.Return{
		    display: inline-block;
    text-align: center;
    border: none;
    color: #fff;background-color: #E46045;
    padding: 5px 15px;
    border-radius:5px;
 position: absolute;top:50px;right:20px;
	}
	.row p{
        line-height: 30px
	}

	textarea {
    width: 200px;
    background-color: #2D3136;
    border: 1px solid #2D3136;
    padding: 5px;
    border-radius: 2px;
    color: #BABABF;
    outline: none;
}.tail{
width:100%;
		    display: inline-box;
		    display: -webkit-inline-box;
}
   input,textarea{
   	width: 100%

   }


.tail p{
		margin:0;
		margin-left:10px;
		padding:5px 10px;
		background:#2D3136;
		border-radius: 5px;
		color:#fff;
	}
	.tail *:hover{
		background:#42474e;
	}
	.layui-layer-setwin .layui-layer-close1{
			display: none !important;
	}
	.layui-layer-btn{
		text-align: center !important;
	}
</style>
<body style="padding:15px">
    <div class='condition'>
         <p>修改版本</p>
		<a href="./index.php?r=user-content-test/index"><p class="Return">返回</p></a>
  </div>
<div style="    background-color: #393E45;padding-bottom: 150px">

<div class="container">
	<div class="row">
		  <div class="col-xs-2">  <p>版本号：</p></div>
		  <div class="col-xs-10">
				 <input type="text" id="version_number">
		  </div>

	
		  	</div>
		  	  <div class="row">	
		  <div class="col-xs-2">  <p>版本地址：</p></div>
		  <div class="col-xs-10">
				 <input type="text"  id="content_address">
		  </div>

		  	</div>
		  		<!-- 	  <div class="row">
		  <div class="col-xs-2">  <p>平台：</p></div>
		  <div class="col-xs-10">
				 <input type="text">
		  </div>
		 

		  </div>  -->
	<!-- 	  <div class="row">
		  <div class="col-xs-2">  <p>更新类型：</p></div>
		  <div class="col-xs-10">
				 <input type="text">
		  </div>
		  
		  	</div> -->


		  	<div class="row">
		  <div class="col-xs-2">  <p>更新说明：</p></div>
		  <div class="col-xs-10">
				  <textarea   id="describe"></textarea>
		  </div>
		</div>


		    <div class='tail'>
    	<input class='inp submit' id="submit" type="submit" style='width:50px;' value="保存" >
    	<p class='Reset'  style="cursor: pointer;width:50px;display: inline-block;"> 重置</p>
    </div>

</div>


</div>

</body>
<script src="/static/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./static/js/layer/layer.js"></script>	
<script> 
  $(".Reset").click(function(event) {
          $('.row input,textarea').val('')
    
   });


     var Id=<?=json_encode($id)?>; 


      
          $.get('./index.php?r=user-content-test/get-edit-data',{id:Id}, function(data) {
  	 		  if(typeof(data)=='string'){
		           data= eval('(' + data + ')');
		      }
		      if(data.state==-1){
		      	layer.msg(data.msg)
		      }else{
		        for(var i in data.data){
		        	 console.log(i)
		        	 $("#"+i).val(data.data[i])
		        }
		      }

          });
  // user-content-test/get-edit-data
  $("#submit").click(function(event) {
  	var describeVal=$('#describe').val()
  	var version_numberVal=$('#version_number').val()
  	var content_addressVal=$('#content_address').val()
          var obj={
          	describe:describeVal,
          	version_number:version_numberVal,
          	content_address:content_addressVal,
          	id:Id
          };
          console.log(obj);

            
          $.get('./index.php?r=user-content-test/save-edit',obj, function(data) {
          	/*optional stuff to do after success */

          	 if(typeof(data)=='string'){
		           data= eval('(' + data + ')');
		      }

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

</script>
</html>