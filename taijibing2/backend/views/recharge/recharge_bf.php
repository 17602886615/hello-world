<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/25
 * Time: 11:15
 */

use feehi\widgets\ActiveForm;
$this->title = "";
?>
<link rel="stylesheet" type="text/css" href="./static/css/conmones.css">
<div class="row">
    <div class="col-sm-12">
        <div class="ibox">
            <div style="text-align: right;margin-bottom: 10px"> <?php
//                if($state==1){
//                   echo \yii\bootstrap\Html::a('返回',['recharge/see','fid'=>$fid],['class'=>'btn btn-primary']);
//                }else{
                    echo \yii\bootstrap\Html::a('返回',['logic-user/factory-list'],['class'=>'btn btn-primary']);
//                }
                ?></div>

            <div class="ibox-content">
                <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data','class'=>'form-horizontal']]); ?>
                <?= $form->field($model, 'WaterBrand')->dropDownList(\yii\helpers\ArrayHelper::map($water_brands,'BrandNo','BrandName'),['prompt'=>'请选择品牌']) ?>

                <div class="col-sm-12" style="margin-top: 20px;margin-bottom: 20px">
                    <span style="margin-left: 80px;font-size: 14px">商品：</span>
                    <select id="add_goods" name='OrderSuccess[GoodsId]'>
                        <option value="">请选择商品</option>
                     </select>
                    <div class="help-block m-b-none"></div>
                </div>

                <?= $form->field($model, 'TotalMoney')->textInput(['id'=>'TotalMoney','maxlength' => 10]) ?>
                <input type="hidden" name="OrderSuccess[Fid]" value="<?=$fid ?>"/>
                <div class="hr-line-dashed"></div>
                <?= $form->field($model, 'OrderMoney')->textInput(['id'=>'OrderMoney','maxlength' => 10]) ?>
                <div class="hr-line-dashed"></div>
                <?= $form->field($model, 'CouponMoney')->textInput(['id'=>'CouponMoney','maxlength' => 10]) ?>

                <div class="col-sm-12" style="margin-top: 20px;margin-bottom: 20px">
                    <span style="margin-left: 80px;font-size: 14px">容量：</span>
                    <span id="add_volume">
                     </span>
                    <div class="help-block m-b-none"></div>
                </div>

<!--                <div class="hr-line-dashed"></div>-->


                <div class="hr-line-dashed"></div>
                <?= $form->field($model, 'Amount')->textInput(['maxlength' => 10]) ?>
                <div class="hr-line-dashed"></div>
                <?= $form->defaultButtons() ?>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="/static/js/jquery.min.js"></script>
<script>

    var BrandName='<?=$BrandName?>';
    var goodsname='<?=$goodsname?>';
    var Volume='<?=$Volume?>';

</script>
<script>

        //当品牌改变时获取对应的商品
        $('#ordersuccess-waterbrand').change(function(){
            var BrandNo=$(this).val();
            $("#add_volume").html('');
            $.get('./index.php?r=recharge/get-goods',{'BrandNo':BrandNo},function(data){

                if(data){
                    $("#add_goods").html('');
                    var html="<option value='' selected='selected'>请选择商品</option>";
                    $(data).each(function(i,v){
                        html+="<option value='"+ v.id+"'>"+ v.name+"</option>"
                    });

                    $('#add_goods').append(html);
                }else{
                    $("#add_goods").html("<option value='' selected='selected'>请选择商品</option>");
                }

            });
        });

        //选择商品改变时，对应选择容量改变
        $('#add_goods').change(function(){
            var name=$('#add_goods option:selected').text();
            var BrandNo=$('#ordersuccess-waterbrand  option:selected').val();
            $.get('./index.php?r=recharge/get-volume',{'BrandNo':BrandNo,'name':name},function(data){
                if(data){
                    $("#add_volume").html('');
                    var html='';
                    $(data).each(function(i,v){
                        if(v.volume){
                            html+="<label style='margin-left: 40px'><input type='radio' name='OrderSuccess[Volume]' value='"+ v.volume+"'>"+ v.volume+"L</label>"
                        }

                    });

                    $('#add_volume').append(html);
                }else{
                    $("#add_volume").html('');
                }

            });
        });

//    }







    $('#CouponMoney').attr("readOnly","true");
    //自动计算优惠金额
    $('#TotalMoney').blur(function(){
        free()
    });
    $('#OrderMoney').blur(function(){
        free()
    });

    function free(){
        var t=$('#TotalMoney');
        var o=$('#OrderMoney');
        var TotalMoney=t.val();//应付
        var OrderMoney=o.val();//实付金额
        checknum(TotalMoney,t);
        checknum(OrderMoney,o);
        var CouponMoney=TotalMoney-OrderMoney;//优惠金额
        $('#CouponMoney').val(CouponMoney);//优惠金额

    }

    function checknum(num,obj) {
        if (isNaN(num)) {
            alert("请输入数字");
            obj.val('');
            obj.focus();
            return false;
        }
    }



</script>
