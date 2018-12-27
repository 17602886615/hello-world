<?php
/**
 * Created by PhpStorm.
 * User: lf
 * Date: 16/4/11
 * Time: 22:02
 */
?>
<link rel="stylesheet" type="text/css" href="./static/css/conmones.css">
        <div class="col-sm-12" style="height:400px">
            <div class="ibox">
                <div class="ibox-title">
                    <div class="ibox-tools">
                        <a class="btn btn-primary btn-xs" href="/index.php?r=address%2Findex">返回</a></div>
                </div>
                <div class="ibox-content">
                    <form id="w0" class="form-horizontal" action="/index.php?r=address/create" method="post">
                        <div class="form-group field-user-username required ">
                            <label class="col-sm-2 control-label" for="user-username">选择地区</label>
                            <div class="col-sm-10"> <select class="form-control" name="Address[Id]" id="addresses" >
                                 <option value="0">请选择</option>
                            </select>

<!--                                <label class="col-sm-2 control-label" for="user-username">选择地区</label>-->
<!--                                <div class="col-sm-3"> <select class="form-control" name="Address[province]" id="province" >-->
<!--                                        <option value="0">请选择</option>-->
<!--                                    </select>-->
<!---->
<!--<!--                            <label class="col-sm-2 control-label" for="user-username">上级地区</label>-->
<!--                            <div class="col-sm-3"> <select class="form-control" name="Address[city]" id="city" >-->
<!--                                    <option value="0">请选择</option>-->
<!--                            </select>-->
<!---->
<!--<!--                            <label class="col-sm-2 control-label" for="user-username">上级地区</label>-->
<!--                            <div class="col-sm-3"> <select class="form-control" name="Address[area]" id="area" >-->
<!--                                    <option value="0">请选择</option>-->
<!--                            </select>-->
                            </div>
                        </div>
<!--                        <div class="form-group field-user-username required ">-->
<!--                            <label class="col-sm-2 control-label" for="user-username">名称</label>-->
<!--                            <div class="col-sm-10">-->
<!--                                <input name="Address[Name]" type="text" class="form-control"/>-->
<!---->
<!--                            </div>-->
<!--                        </div>-->


<!--                        <div class="form-group field-user-username required ">-->
<!--                            <label class="col-sm-2 control-label" for="user-username">名称</label>-->
<!--                            <div class="col-sm-10">-->
<!--                                <select id="address" name="Address[Name]" class="form-control">-->
<!---->
<!--                                </select>-->
<!--                                <input name="Address[Name]" type="text" class="form-control"/>-->

<!--                            </div>-->
<!--                        </div>-->

                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-primary" type="submit">保存</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
<script type="text/javascript" src="./static/js/jquery.min.js"></script>

<!--<script type="text/javascript" src="./static/js/address.js"></script>-->

<script>
    var data=<?=$data?>;
</script>
<script>
//var addresses=$('#addresses').val();

//    if(addresses==0&&address!=''){
//        //填充省市的数据
////        var html='<option value="全国">全国</option>';
//        var html='';
//        $(address).each(function(){
//
//            html += '<option value="'+this.name+'">'+this.name+'</option>';
//
//        });
//        $(html).appendTo('#address');
//
//    }
//
//$('#addresses').change(function(){
//    var addresses2=$('#addresses').val();
//    if(addresses2==0&&address!=''){
//        $('#address').html('');
//        //填充省市的数据
////        var html='<option value="全国">全国</option>';
//        $(address).each(function(){
//
//            html += '<option value="'+this.name+'">'+this.name+'</option>';
//
//        });
//        $(html).appendTo('#address');
//
//    }else{
//
//        $('#address').html('');
//        //判断选择的是省还是市
//        var addresses3=$('#addresses').val();
//        var addresses3_text=$('#addresses option:selected').text();
//            addresses3_text=addresses3_text.replace('省','');
//            addresses3_text=addresses3_text.replace('市','');
//        $.get('./index.php?r=address/check',{'addresses_id':addresses3},function(data){
//
//            if(data==0){//选择的省
//                //获取当前省对应的市 数据
//                $(address).each(function(){
//
//                    if(this.name == addresses3_text){
//
////                        var option = '<option value="全部">全部</option>';
//                        var option = '';
//                        $(this.city).each(function(){
//                            option += '<option value="'+this.name+'">'+this.name+'</option>';
//                        });
//
//                        $("#address").html(option);
//                    }
//                });
//            }else{//选择的市
//                $('#address').html('');
//
//                var cname=data.cname.replace('市','');
//                var pname=data.pname.replace('省','');
//
//                $(address).each(function(){
//
//                    if(this.name == pname){
//
//                        $(this.city).each(function(){
//
//                            if(this.name == cname) {
//
//                                var option='';
//                                $(this.area).each(function() {
//                                    option += '<option value="' + this + '">' + this + '</option>';
//                                });
//                                $("#address").html(option);
//                            }
//
//                        });
//
//
//                    }
//                });
//            }
//
//        });
//
//
//
//    }
//});





//    $(function(){
//        initAddressSelect();
//    });
//    function initAddressSelect(){
//
//            for(var index=0;index<data.length;index++){
//                var item=data[index];
//                if(item.PId==0){
//                    $("#addresses").append("<option value='"+item.Id+"'>"+item.Name+"</option>");
//                    var childAddress=getListByPid(item.Id);
//                    for(var cindex=0;cindex<childAddress.length;cindex++){
//                        var citem=childAddress[cindex];
//                        $("#addresses").append("<option value='"+citem.Id+"'>----"+citem.Name+"</option>");
//                    }
//                }
//            }
//    }
//    function getListByPid(pid){
//            var temp=[];
//            for(var index=0;index<data.length;index++){
//                var item=data[index];
//                if(item.PId!=0&&item.PId==pid){
//                    temp.push(item);
//                }
//            }
//        return temp;
//    }

$(function(){
    initAddressSelect();
});
function initAddressSelect(){
    for(var index=0;index<data.length;index++){
        var item=data[index];
        if(item.PId==0){
            $("#addresses").append("<option value='"+item.Id+"'>"+item.Name+"</option>");
            initSec(item.Id);
        }
    }
}
function initSec(pid){
    for(var index=0;index<data.length;index++){
        var item=data[index];
        if(item.PId!=0&&item.PId==pid){
            $("#addresses").append("<option value='"+item.Id+"'>------"+item.Name+"</option>");
            initThree(item.Id)
        }
    }
}
function initThree(pid){
    for(var index=0;index<data.length;index++){
        var item=data[index];
        if(item.PId!=0&&item.PId==pid){
            $("#addresses").append("<option value='"+item.Id+"'>-----------"+item.Name+"</option>");
        }
    }
}





</script>
