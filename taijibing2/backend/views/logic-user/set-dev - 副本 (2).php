<!DOCTYPE html>
<html style="overflow-x:hidden;overflow-y:hidden">
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <meta http-equiv="X-UA-Compatible"content="IE=9; IE=8; IE=7; IE=EDGE">
    <link rel="stylesheet" href="./static/js/zui/css/zui.css"/>
    <link rel="stylesheet" href="./static/js/zui/css/style.css"/>
    <link rel="stylesheet" href="./static/css/addgood.css"/>
    <link rel="stylesheet" href="./static/js/jedate/skin/jedate.css"/>

    <link rel="stylesheet" href="./static/js/datepicker/dateRange.css"/>

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
        .layui-layer-btn .layui-layer-btn0,.layui-layer-molv .layui-layer-btn a{
                background-color: #DD5C1A;    border-color: #DD5C1A;
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
        .listBs{
            float:left;
            position: relative;
            width: 33%;
        }
        .Bgclose{
            width: 20px;
            height: 25px;
            line-height: 20px;
            position: absolute;
            right: 30px;
            text-align: center;
            top: 0;
            color: #fff;
            padding: 0;    z-index: 1000;
        }
        #dvCBs label{
            margin:0;
        }
            .btn {
           border-radius: 3px;
           background-color: #E46045;
           width: 60px;
          color: #fff;border: none
        }

        .btn:hover{
        background-color:#e44b2b;
        color: #fff
        }  

        .chosen-container {
            margin-left: 15px;
        }
    </style>
</head>
<body>
<div class="content_middle">
    <!--    <div class="f1">-->
    <!--        <input type="button" class="btn select_btn" value="+添加新频道" onclick="openUrl()"/>-->
    <!--    </div>-->

    <div style="text-align: right;margin-bottom: 10px">
    <!--  <?= \yii\bootstrap\Html::a('返回',[json_encode($data)],['class'=>'btn btn-primary'])?> -->

    <a href = '/index.php?r=<?=$page_url?>' class='btn btn-primary'>返回</a>
         
     </div>
    <div class="main-title">
         <h2>登记用户设置</h2>
    </div>
    <div  style="">
        <div class="item" style="margin-bottom: 20px">
            <div class="ftitle"><span class="tip"></span><span class="title">服务中心：</span></div>
            <input id="agent_id" type="hidden" class="baseinput" value="<?=$agent_id?>"/>
            <div class="fcontent"><input readonly="readonly"  id="investor" type="text" class="baseinput" value="<?=$name?>"/></div>
        </div>
        <div>
        </div>
        <div class="item" style="height:auto;">
            <div class="ftitle"><span class="tip">*</span><span class="title">入网属性：</span></div>
            <div class="fcontent" style="height:auto;width: 500px; ">
                
                <div id="dvCBs" >
                  <div class="listBs">
                    <input type="checkbox" name="use_type" value="1"  id="state1" class='state' / >
                     <label for="state1"></label>
                       <span> 0元押金</span>
                  </div>
                <div class="listBs">

                     <input type="checkbox" name="use_type" value="2"   id="state2" class='state'/>
                     <label  for="state2"></label>
                     <span> 99元押金</span>
                 </div>
                 <div class="listBs">

                     <input type="checkbox" name="use_type" value="3"  id="state3" class='state'/>
                     <label  for="state3"></label>
                     <span>880元自购</span>
                  </div>
               </div>
                <div style='clear:both'>
                </div>
                <p style='line-height: 55px;'><a href="javascript:addGoodType2();">继续添加</a></p>
            </div>
        </div>
        <div class="item" style="height:auto;">
            <div class="ftitle"><span class="tip">*</span><span class="title">选择设备：</span></div>
            <div class="fcontent" style="height:auto;width: 500px;   margin-top: -10px">
                <div id="good_sub_type_c">
                </div>
                <p style='line-height: 55px;'><a href="javascript:addGoodType();">继续添加</a></p>
            </div>
        </div>
    </div>
    <div class="detail5" style="margin-top: 20px;margin-left: 50px">
        <input type="button" class="btn select_btn" value="保存" onclick="savegood()"/>
    </div>
</div>
<script type="text/javascript" src="./static/js/jquery.min.js"></script>
    <script type="text/javascript" src="./static/js/chosen.jquery.min.js"></script> 
<script type="text/javascript" src="./static/js/zui/js/zui.js"></script>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.4"></script>
<script type="text/javascript" src="./static/js/qiniu/moxie.js"></script>
<script type="text/javascript" src="./static/js/qiniu/Plupload.js"></script>
<script type="text/javascript" src="./static/js/qiniu/qiniu.min.js"></script>
<script type="text/javascript" src="./static/js/jedate/jedate.js"></script>
<script type="text/javascript" src="./static/js/layer/layer.js"></script>
<script type="text/javascript" src="./static/js/pinyin.js"></script>
<script type="text/javascript" src="./static/js/lib.js"></script>
<script type="text/javascript" src="./static/js/good/set-dev.js"></script>
<!--<script type="text/javascript" src="./static/js/address.js"></script>-->

<script type="text/javascript">
    var category='';
    var merchant='';
    var baseGood=<?=json_encode($data)?>;
    var id=<?=json_encode($agent_id)?>;//服务中心id
    var name=<?=json_encode($name)?>;//服务中心name
    var province=<?=json_encode($province)?>;
    var city=<?=json_encode($city)?>;
    var area=<?=json_encode($area)?>;
    var use_types_add=<?=json_encode($use_types_add)?>;//已添加的入网属性及代号
    var use_types_select=<?=json_encode($use_types_select)?>;//已勾选的入网属性代号
    var sms='';

   var iy =  layer.open({
    type: 1,
    skin: 'layui-layer-demo', //样式类名
    closeBtn: 0, //不显示关闭按钮
    anim: 2,
    shade: [0.8, '#000'],
    content: '<div style="background-color: #25282d;opacity: 0.8;text-align: center;color: #fff;padding:10px;">加载中.....</div>'
  });
</script>
<script type="text/javascript">
// console.log(use_types_add);
// console.log(use_types_select);
var num=baseGood.length;
// //$("#dvCBs").empty()
for(var i=3;i<use_types_add.length;i++){
    var html = '<div class="listBs"><input type="checkbox" name="use_type" value='+use_types_add[i].code+'  id="state'+use_types_add[i].code+'" class="state" / >'
    html+='<label for="state'+use_types_add[i].code+'"></label>'     
    html+='<span> '+use_types_add[i].use_type+'</span> <div class="Bgclose"><i class="fa fa-times" aria-hidden="true"></i> </div></div>'
    $("#dvCBs").append(html)
}



if(use_types_select&&use_types_select.code){

   var use_types_se = use_types_select.code.split(',')

   // console.log(use_types_se)
    for(var i=0 ;i<use_types_add.length;i++){


 // console.log(use_types_add[i])

           for(var y=0;y<use_types_se.length;y++){
                
                 if(use_types_se[y]== use_types_add[i].code ){
                     // console.log(use_types_se[y])

                     // console.log(use_types_add[i].code)
                     var pp =  $(".listBs").eq(i).find("input").attr('checked',"checked")
                     
                 }
           }
    }
}





$(document).on('click', '.Bgclose', function() {
    var _this = $(this);
    var  code = _this.parent().find("input").val();



layer.msg('<div style="padding:50px;    font-size: 25px;">你确认要删除吗？</div>', {
  time: 0 //不自动关闭
   ,btn: ['确定', '取消']
  ,yes: function(index){
   var ii=layer.msg("操作中……");
    $.get('./?r=logic-user/del-use-type',{'code':code,'agent_id':id},function(data){
              var obj = eval('(' + data + ')');
                 layer.close(ii);
        
             if(data.state<0){
                var obj = eval('(' + data + ')');
                // console.log(obj)
                return;
            }
              // console.log(data)
            _this.parent().remove();

      
            layer.alert('删除成功', {
              skin: 'layui-layer-molv' //样式类名
              ,closeBtn: 0
            });
    })


    layer.close(index);
  }
});
})

//console.log(baseGood)

    if(baseGood.length){
        for(var index= 0;index < baseGood.length;index++){
            addGoodTypeWithData(index);
            
        }
    }else{
        layer.closeAll()
    }

    function addGoodTypeWithData(index){

        var itemAmount=$("#good_sub_type_c").find(".item").length;
        if(isNaN(itemAmount)){
            return;
        }
        var _this = this;
        var currentIndex=itemAmount+1;
        var itemStr=' <div class="item" id="item'+currentIndex+'" itemid="100" num="'+currentIndex+'">'+
            '<div class="good_sub_type">'+
            '<select onchange="change1('+currentIndex+')" id="devinvestor'+currentIndex+'" type="text" class="realPrice baseinput fl" style="width:100px;margin-left:15px"><option value="">设备投资商</option></select>'+
            '<select onchange="change2('+currentIndex+')" id="devbrand'+currentIndex+'" type="text" class="realPrice baseinput fl" style="width:100px;margin-left:15px"><option value="">设备名称</option></select>'+
            '<select id="devname'+currentIndex+'" type="text" class="realPrice baseinput fl" style="width:100px;margin-left:15px"><option value="">设备厂家</option></select>'+
            '<a href="javascript:void(0);"  class="delGoodType" style="margin-left:5px;height:25px;line-height: 25px;">删除</a>'+
            '</div>'+
            '<div style="clear:both;"></div>'+
            '</div>';
        //添加设备投资商数据

        
         $("#good_sub_type_c").append($(itemStr));
    
        $('#devinvestor'+currentIndex).chosen({no_results_text: "没有找到",disable_search_threshold: 10}); //初始化chosen
        $('#devbrand'+currentIndex).chosen({no_results_text: "没有找到",disable_search_threshold: 10}); //初始化chosen
        $('#devname'+currentIndex).chosen({no_results_text: "没有找到",disable_search_threshold: 10}); //初始化chosen
        
        $.get('./?r=logic-user/get-devinvestor',{'province':province,'city':city,'area':area},function(data){
            var html="";
              console.log(data)
            $(data).each(function(i,v){
                if(v){
                    if(v.agent_id==baseGood[index].investor_id){
                        html+="<option selected='selected' value='"+v.agent_id+"'>"+ v.investor+"</option>"
                    }else {
                        html += "<option value='" + v.agent_id + "'>" + v.investor + "</option>"
                    }
                }
            });
            $('#devinvestor'+currentIndex).chosen({no_results_text: "没有找到",disable_search_threshold: 10}); //初始化chosen
             $('#devinvestor'+currentIndex).append(html);

              $('#devinvestor'+currentIndex).trigger("chosen:updated");
        });



        //选中品牌
        var investor_id=baseGood[index].investor_id;
        if(investor_id){
            //添加对应投资商品牌数据
            $.get('./?r=logic-user/get-devbrand',{'province':province,'city':city,'area':area,'agent_id': investor_id},function(data){
                //console.log(data);
                if(data!=''){
                    var html = "<option value=''>设备品牌</option>";
                    $(data).each(function(i,v){
                        if(v){
                            if(v.BrandNo==baseGood[index].brand_id){
                                html+="<option selected='selected' value='"+v.BrandNo+"'>"+ v.BrandName+"</option>"
                            }else{
                                html+="<option value='"+v.BrandNo+"'>"+ v.BrandName+"</option>"
                            }

                        }

                    });
                    //console.log(html);
                    $('#devbrand'+currentIndex).html('');
                    $(html).appendTo('#devbrand'+currentIndex);
                    $('#devbrand'+currentIndex).trigger("chosen:updated");
                }else{
                    var html = "<option value=''>设备品牌</option>";
                    $('#devbrand'+currentIndex).html('');
                    $(html).appendTo('#devbrand'+currentIndex);
                    $('#devbrand'+currentIndex).trigger("chosen:updated");
                }

            });
        }else{
            var html = "<option value=''>设备品牌</option>";
            $('#devbrand'+currentIndex).html('');
            $(html).appendTo('#devbrand'+currentIndex);
            $('#devbrand'+currentIndex).trigger("chosen:updated");
        }

        //选中设备
        var brand_id=baseGood[index].brand_id;
        if(brand_id&&investor_id){
            //添加对应投资商对应品牌的对应设备数据
            $.get('./?r=logic-user/get-dev',{'province':province,'city':city,'area':area,'brand_id': brand_id,'agent_id': investor_id},function(data){
                //console.log(data);
                if(data!=''){
                    var html = "<option value=''>设备名称</option>";
                    $(data).each(function(i,v){
                        if(v){
                            if(v.id==baseGood[index].goods_id){
                                html+="<option selected='selected' value='"+v.id+"'>"+ v.goodsname+"</option>"
                            }else{
                                html+="<option value='"+v.id+"'>"+ v.goodsname+"</option>"
                            }

                        }

                    });
                    //console.log(html);
                    $('#devname'+currentIndex).html('');
                    $(html).appendTo('#devname'+currentIndex);
                    $('#devname'+currentIndex).trigger("chosen:updated");
                }else{
                    var html = "<option value=''>设备名称</option>";
                    $('#devname'+currentIndex).html('');
                    $(html).appendTo('#devname'+currentIndex);
                    $('#devname'+currentIndex).trigger("chosen:updated");
                }

            });
        }else{
            var html = "<option value=''>设备名称</option>";
            $('#devname'+currentIndex).html('');
            $(html).appendTo('#devname'+currentIndex);
            $('#devname'+currentIndex).trigger("chosen:updated");
        }

        $("#realPrice"+currentIndex).val(baseGood[index].number);//投资设备台数
        $("#originalPrice"+currentIndex).val(baseGood[index].time);//时间
        $(".delGoodType").unbind();
        $(".delGoodType").on("click",function(){
            $(this).parents(".item").eq(0).remove();
        });
        layer.closeAll()

    }

</script>




</body>
</html>

