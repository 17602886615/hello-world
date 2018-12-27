<?php
///**
// * Created by PhpStorm.
// * User: Administrator
// * Date: 2016/3/23
// * Time: 15:47
// */
//
//=$this->render('_form', [
//    'model' => $model,
//]);?>
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/25
 * Time: 11:15
 */
use feehi\widgets\ActiveForm;
$this->title = '商品';
?>
<!DOCTYPE html>
<html style="overflow-x:hidden;overflow-y:hidden;">
<head lang="en">
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible"content="IE=9; IE=8; IE=7; IE=EDGE">
    <link rel="stylesheet" href="./static/js/zui/css/zui.css"/>
    <link rel="stylesheet" href="./static/js/zui/css/style.css"/>
    <link rel="stylesheet" href="./static/css/addgood.css"/>
    <link rel="stylesheet" href="./static/js/jedate/skin/jedate.css"/>
    <link rel="stylesheet" href="./static/js/datepicker/dateRange.css"/>
    <link rel="stylesheet" href="./static/js/page/jquery.pagination.css"/>
        <link rel="stylesheet" href="./static/css/chosen.css"/>

    <link rel="stylesheet" href="./static/css/Common.css?v=1.1"/>
    <link rel="stylesheet" type="text/css" href="./static/css/conmones.css">


    <style>
        body{
            height:100%;
            width:100%;
            overflow:auto;
        }

        .goodpic .item{
               width: initial;   

             display: inline-block;
            height: 40px;
            line-height: 20px;
            margin-left: 20px;
        }

       .goodpic .item button, html input[type=button], input[type=reset], input[type=submit]{
        width:80px;
       }
  #dvCBs{
 
      width: 100%;
      margin:0 auto;
      padding-left:5px; 
         display: inline;
  }
  
   #dvCBs .radio_btn{
     background: #2D3136;
     display: inline-block;
     width: 30px;
     height: 30px;
     border-radius: 30px;
     position: relative;
     vertical-align: middle;
     margin-top: -20px;
  }
    #dvCBs input{
     width: 100%;
     height: 100%;
     position: absolute;
     top: 0;
     left: 0;
     z-index: 100;
     opacity: 0;
  }
    #dvCBs span{
     background: #EE5030;
     width: 10px;
     height: 10px;
    display: inline-block;
     position: absolute;
     z-index: 1;
     top: 10px;
     left: 10px;
     border-radius: 10px;
  }
   #dvCBs input[type="radio"] + span{
     opacity: 0;
  }
  #dvCBs input[type="radio"]:checked + span{
     opacity: 1;
  }
  #dvCBs label {
    position: relative;
    margin-left: 15px;
}
select, .chosen-container{
	width: 100% !important;
}


    </style>
</head>
<body>
<div class="col-sm-12">
    <div class="ibox">

        <div style="text-align: right;margin-bottom: 10px;"> <?= \yii\bootstrap\Html::a('返回',['goods/goods-list'],['class'=>'btn btn-info','style'=>'    background-color: #E46045;'])?></div>
        <div class="ibox-content">
            <h3>创建商品</h3>
                <form action="<?=$goods->id?'./index.php?r=goods/edit-goods':'./index.php?r=goods/add-goods'?>" method="post" accept-charset="utf-8" class="form-horizontal">
                    <input type="hidden" name="id" value="<?=$goods->id?$goods->id:''?>">
                    <div class='row'>
                            <div class='col-xs-1'><p style="line-height: 30px;">商品分类:</p> </div>
                            <div class='col-xs-3'> 
                                <select name="Goods[category_id]" data=" <?=$goods->category_id?$goods->category_id:''?>"  id="type1" class="type1">
                                     <option value="">商品分类</option>                                
                                </select>
                            </div>
                            <div class='col-xs-1 col-md-offset-1'><p style="line-height: 30px;width:90px">商品二级分类:</p> </div>
                            <div class='col-xs-3'> 
                                <select name="Goods[category2_id]"  data=" <?=$goods->category2_id?$goods->category2_id:''?>"   id="type2" class="type2">
                                    <option value="">商品二级分类</option>
                                </select>
                            </div>
                    </div>
                    <div class='row'>
                            <div class='col-xs-1'><p style="line-height: 30px;">商品名称:</p> </div>
                            <div class='col-xs-3'> 

                            <input type="text" name="Goods[name]" value="<?=$goods->name?$goods->name:''?> "  id="GoodsName" class='GoodsName' / >
                                
                            </div>
                          
                    </div>
                    <div class='row'>
                            <div class='col-xs-1'><p style="line-height: 30px;">商品品牌:</p> </div>
                            <div class='col-xs-3'> 
                                <select name="Goods[brand_id]"  data="<?= $goods->brand_id?$goods->brand_id:''?>" id="GoodsBrand_id" class="GoodsBrand_id">
                                    <option value="">请选择商品品牌</option>
                                </select>
                            </div>
                            <div class='col-xs-3'> <p class="addpGoods" style="line-height: 30px;cursor: pointer;    width: inherit;">添加品牌</p></div>
                          
                    </div>
                   <div class='row' id='volumeGoods' style="display: none"> 
                      <div class='col-xs-1'><p style="line-height: 30px;">  商品容量：</p> </div>
                      <div class='col-xs-10'> 
                            <div class='volumeGoods'  data="<?= $goods->volume?$goods->volume:''?>"   style="padding-left:5px;  margin-top: 5px;">
                                <div id="dvCBs"  style='      width: inherit;  display: inline-block;'>


                                   <!--   <input type="checkbox" name="Goods[volume]"  id="state1" class='state' / >
                                     <label for="state1" style='    margin-left: 0px;'></label>
                                     <span>7.5 </span> -->



                                      <span class='radio_btn'> 
                                            <input name="Goods[volume]" type="radio" value="7.5"  id="state1"  class='state'/>
                                            <span></span>
                                     </span>  
                                     <label for="state1" style="">7.5L</label>

                                      <span class='radio_btn'> 
                                            <input name="Goods[volume]" type="radio" value="10"  id="state2"  class='state'/>
                                            <span></span>
                                     </span>  
                                     <label for="state2" >10L</label>

                                      <span class='radio_btn'> 
                                            <input name="Goods[volume]" type="radio" value="15"  id="state3"  class='state'/>
                                            <span></span>
                                     </span>  
                                     <label for="state3" >15L</label>
                                    &nbsp;
                                    &nbsp;
                                    &nbsp;
                                     <!-- <span>其他</span> -->

                                </div>


                            其他 <input  id="state5" type="text" value="" style=" width:50px;   display: inline-block;" />  L
                        
                             


                        </div>
                      </div>
                   </div>
              
                    <div class='row'  id='tonghua' style="display: none">
                            <div class='col-xs-1'><p style="line-height: 30px;width:90px">使用卡片厂家:</p> </div>
                            <div class='col-xs-3'> 
                             <select name="Goods[cardfactory]" style="width:100%;" class="cardfactory" data='<?=$goods->cardfactory?$goods->cardfactory:''?>'>
                                    <option value="中国联通总公司">中国联通总公司</option>
                                    <option value="中国移动总公司">中国移动总公司</option>
                                </select>
                            </div>

<!--                            <div class='col-xs-1 col-md-offset-1'><p style="line-height: 30px;">设备升级类型：</p> </div>-->
<!--                            <div class='col-xs-3'> -->
<!--                                 <input type="text" name="Goods[type]" value="--><?php //echo $goods->type?$goods->type:''?><!--" style="width:100%;" />-->
<!--                            </div>-->
                          
                    </div>

            <div class="content_middle" style="margin-bottom: 80px">
                <div class="detail1">
                    <div class="split"></div>
                    <div class="item" style="height: 240px;line-height: 240px;position: relative;">
                        <div class="ftitle"><span class="tip">*</span><span class="title"> 商品图片：</span></div>
                        <div class="fcontent">
                            <div class="goodpic" style="float: left;background: none;border: none;width:100%;height: 240px">

                                <div style="display: none">
                                    <div class="form-group field-image1">
                                        <label class="col-sm-2 control-label" for="image1">Goods Image1</label>
                                        <div class="col-sm-10"><input type="text" id="image1" class="form-control" name="GoodsImage[goods_image1]"  value="<?=$goods_image->goods_image1?$goods_image->goods_image1:''?>">
                                            <div class="help-block m-b-none"></div></div>

                                    </div>

                                    <div class="form-group field-image2">
                                        <label class="col-sm-2 control-label" for="image2">Goods Image2</label>
                                        <div class="col-sm-10"><input type="text" id="image2" class="form-control" name="GoodsImage[goods_image2]" value="<?=$goods_image->goods_image2?$goods_image->goods_image2:''?>">
                                            <div class="help-block m-b-none"></div></div>

                                    </div>

                                    <div class="form-group field-image3">
                                        <label class="col-sm-2 control-label" for="image3">Goods Image3</label>
                                        <div class="col-sm-10"><input type="text" id="image3" class="form-control" name="GoodsImage[goods_image3]" value="<?=$goods_image->goods_image3?$goods_image->goods_image3:''?>">
                                            <div class="help-block m-b-none"></div></div>

                                    </div>

                                    <div class="form-group field-image4">
                                        <label class="col-sm-2 control-label" for="image4">goods_image Image4</label>
                                        <div class="col-sm-10"><input type="text" id="image4" class="form-control" name="GoodsImage[goods_image4]" value="<?=$goods_image->goods_image4?$goods_image->goods_image4:''?>">
                                            <div class="help-block m-b-none"></div></div>

                                    </div>

                                    <div class="form-group field-image5">
                                        <label class="col-sm-2 control-label" for="image5">goods_image Image5</label>
                                        <div class="col-sm-10"><input type="text" id="image5" class="form-control" name="GoodsImage[goods_image5]" value="<?=$goods_image->goods_image5?$goods_image->goods_image5:''?>">
                                            <div class="help-block m-b-none"></div></div>

                                    </div>

                                    <div class="form-group field-image6">
                                        <label class="col-sm-2 control-label" for="image6">goods_image Image6</label>
                                        <div class="col-sm-10"><input type="text" id="image6" class="form-control" name="GoodsImage[goods_image6]" value="<?=$goods_image->goods_image6?$goods_image->goods_image6:''?>">
                                            <div class="help-block m-b-none"></div></div>

                                    </div>

                                </div>


                                <div class="item" style="height: 100px;line-height: 100px">
                                    <div class="c3" style="height: 100px">
                                        <div class="img_add_c">
                                            <span id="image1span" style="position:absolute;top:0px;left:0px;width:100%;height:100%;z-index: -1">+图1</span>
                                            <input type="button" class="btn_blue"  value="" style="background:transparent;width:100%; height:100%;border: none" ng-click="upload()" id="image1btn"/>
                                            <img class="image1" style="position:absolute;top:0px;left:0px;width:100%;height:100%;" src="<?=$goods_image->goods_image1?$goods_image->goods_image1:''?>" alt="+添加">
                                        </div>
                                    </div>
                                       <br/>
                                    <!-- <input type="button"  class="btn select_btn" style="margin-left: 10px;" value="预览" onclick="showimg('商品详情','image1')"/> -->
                                    <input type="button"  class="btn select_btn" style="margin-left: 3px" value="删除" onclick="delimg('image1')"/>

                                </div>
                                <div class="item" style="height: 100px;margin-top: 10px;line-height: 100px">
                                    <div class="c3" style="height: 100px">
                                        <div class="img_add_c">
                                            <span id="image2span" style="position:absolute;top:0px;left:0px;width:100%;height:100%;z-index: -1">+图2</span>
                                            <input type="button" class="btn_blue"  value="" style="background:transparent;width:100%; height:100%;border: none" ng-click="upload()" id="image2btn"/>
                                            <img class="image2" style="position:absolute;top:0px;left:0px;width:100%;height:100%;" src="<?=$goods_image->goods_image2?$goods_image->goods_image2:''?>" alt="+添加">
                                        </div>
                                    </div>
                                       <br/>
                                    <!-- <input type="button"  class="btn select_btn" style="margin-left: 10px;" value="预览" onclick="showimg('商品详情','image2')"/> -->
                                    <input type="button"  class="btn select_btn" style="margin-left: 3px" value="删除" onclick="delimg('image2')"/>

                                </div>
                                <div class="item" style="height: 100px;margin-top: 10px;line-height: 100px">
                                    <div class="c3" style="height: 100px">
                                        <div class="img_add_c">
                                            <span id="image3span" style="position:absolute;top:0px;left:0px;width:100%;height:100%;z-index: -1">+图3</span>
                                            <input type="button" class="btn_blue"  value="" style="background:transparent;width:100%; height:100%;border: none" ng-click="upload()" id="image3btn"/>
                                            <img class="image3" style="position:absolute;top:0px;left:0px;width:100%;height:100%;" src="<?=$goods_image->goods_image3?$goods_image->goods_image3:''?>" alt="+添加">
                                        </div>
                                    </div>
                                    <br/>
                                    <!-- <input type="button"  class="btn select_btn" style="margin-left: 10px;" value="预览" onclick="showimg('商品详情','image3')"/> -->
                                    <input type="button"  class="btn select_btn" style="margin-left: 3px" value="删除" onclick="delimg('image3')"/>

                                </div>
                                <div class="item" style="height: 100px;margin-top: 10px;line-height: 100px">
                                    <div class="c3" style="height: 100px">
                                        <div class="img_add_c">
                                            <span id="image4span" style="position:absolute;top:0px;left:0px;width:100%;height:100%;z-index: -1">+图4</span>
                                            <input type="button" class="btn_blue"  value="" style="background:transparent;width:100%; height:100%;border: none" ng-click="upload()" id="image4btn"/>
                                            <img class="image4" style="position:absolute;top:0px;left:0px;width:100%;height:100%;" src="<?=$goods_image->goods_image4?$goods_image->goods_image4:''?>" alt="+添加">
                                        </div>
                                    </div>
                                       <br/>
                                    <!-- <input type="button"  class="btn select_btn" style="margin-left: 10px;" value="预览" onclick="showimg('商品详情','image4')"/> -->
                                    <input type="button"  class="btn select_btn" style="margin-left: 3px" value="删除" onclick="delimg('image4')"/>

                                </div>
                                <div class="item" style="height: 100px;margin-top: 10px;line-height: 100px">
                                    <div class="c3" style="height: 100px">
                                        <div class="img_add_c">
                                            <span id="image5span" style="position:absolute;top:0px;left:0px;width:100%;height:100%;z-index: -1">+图5</span>
                                            <input type="button" class="btn_blue"  value="" style="background:transparent;width:100%; height:100%;border: none" ng-click="upload()" id="image5btn"/>
                                            <img class="image5" style="position:absolute;top:0px;left:0px;width:100%;height:100%;" src="<?=$goods_image->goods_image5?$goods_image->goods_image5:''?>" alt="+添加">
                                        </div>
                                    </div>
                                       <br/>
                                    <!-- <input type="button"  class="btn select_btn" style="margin-left: 10px;" value="预览" onclick="showimg('商品详情','image5')"/> -->
                                    <input type="button"  class="btn select_btn" style="margin-left: 3px" value="删除" onclick="delimg('image5')"/>

                                </div>


                                <div class="item" style="height: 100px;margin-top: 10px;line-height: 100px">
                                    <div class="c3" style="height: 100px">
                                        <div class="img_add_c">
                                            <span id="image6span" style="position:absolute;top:0px;left:0px;width:100%;height:100%;z-index: -1">+图6</span>
                                            <input type="button" class="btn_blue"  value="" style="background:transparent;width:100%; height:100%;border: none" ng-click="upload()" id="image6btn"/>
                                            <img class="image6" style="position:absolute;top:0px;left:0px;width:100%;height:100%;" src="<?=$goods_image->goods_image6?$goods_image->goods_image6:''?>" alt="+添加">
                                        </div>
                                    </div>
                                       <br/>
                                    <!-- <input type="button"  class="btn select_btn" style="margin-left: 10px;" value="预览" onclick="showimg('商品详情','image6')"/> -->
                                    <input type="button"  class="btn select_btn" style="margin-left: 3px" value="删除" onclick="delimg('image6')"/>

                                </div>






                            </div>

<div id="previewCommoditys"  style="position:absolute;bottom:10px;clear:both;padding:5px 15px;text-align: center;cursor: pointer;   width: 200px;background-color: #292834;    width: 120px; bottom: 0;border-radius: 5px">
    预览商品
</div>        
  
                        </div>
                    </div>


                                  <div class="item" style="height: 240px;line-height: 240px">
                        <div class="ftitle"><span class="tip">*</span><span class="title"> 商品详情页：</span></div>
                        <div class="fcontent">
                            <div class="goodpic" style="float: left;background: none;border: none;width:100%;height: 240px">

                                <div style="display: none">
                                    <div class="form-group field-image7">
                                        <label class="col-sm-2 control-label" for="image7">goods_image Image1</label>
                                        <div class="col-sm-10"><input type="text" id="image7" class="form-control" name="GoodsImage[goods_image7]"  value="<?=$goods_image->goods_image7?$goods_image->goods_image7:''?>">
                                            <div class="help-block m-b-none"></div></div>

                                    </div>

                                    <div class="form-group field-image8">
                                        <label class="col-sm-2 control-label" for="image8">goods_image Image2</label>
                                        <div class="col-sm-10"><input type="text" id="image8" class="form-control" name="GoodsImage[goods_image8]" value="<?=$goods_image->goods_image8?$goods_image->goods_image8:''?>">
                                            <div class="help-block m-b-none"></div></div>

                                    </div>

                                    <div class="form-group field-image9">
                                        <label class="col-sm-2 control-label" for="image9">goods_image Image3</label>
                                        <div class="col-sm-10"><input type="text" id="image9" class="form-control" name="GoodsImage[goods_image9]" value="<?=$goods_image->goods_image9?$goods_image->goods_image9:''?>">
                                            <div class="help-block m-b-none"></div></div>

                                    </div>

                                    <div class="form-group field-image10">
                                        <label class="col-sm-2 control-label" for="image10">goods_image Image4</label>
                                        <div class="col-sm-10"><input type="text" id="image10" class="form-control" name="GoodsImage[goods_image10]" value="<?=$goods_image->goods_image10?$goods_image->goods_image10:''?>">
                                            <div class="help-block m-b-none"></div></div>

                                    </div>

                                    <div class="form-group field-image11">
                                        <label class="col-sm-2 control-label" for="image11">goods_image Image5</label>
                                        <div class="col-sm-10"><input type="text" id="image11" class="form-control" name="GoodsImage[goods_image11]" value="<?=$goods_image->goods_image11?$goods_image->goods_image11:''?>">
                                            <div class="help-block m-b-none"></div></div>

                                    </div>

                                    <div class="form-group field-image12">
                                        <label class="col-sm-2 control-label" for="image12">goods_image Image6</label>
                                        <div class="col-sm-10"><input type="text" id="image12" class="form-control" name="GoodsImage[goods_image12]" value="<?=$goods_image->goods_image12?$goods_image->goods_image12:''?>">
                                            <div class="help-block m-b-none"></div></div>

                                    </div>

                                   
                                </div>


                                <div class="item" style="height: 100px;line-height: 100px">
                                    <div class="c3" style="height: 100px">
                                        <div class="img_add_c">
                                            <span id="image7span" style="position:absolute;top:0px;left:0px;width:100%;height:100%;z-index: -1">+图1</span>
                                            <input type="button" class="btn_blue"  value="" style="background:transparent;width:100%; height:100%;border: none" ng-click="upload()" id="image7btn"/>
                                            <img class="image7" style="position:absolute;top:0px;left:0px;width:100%;height:100%;" src="<?=$goods_image->goods_image7?$goods_image->goods_image7:''?>" alt="+添加">
                                        </div>
                                    </div>
                                       <br/>
                                    <!-- <input type="button"  class="btn select_btn" style="margin-left: 10px;" value="预览" onclick="showimg('商品详情','image1')"/> -->
                                    <input type="button"  class="btn select_btn" style="margin-left: 3px" value="删除" onclick="delimg('image7')"/>

                                </div>
                                <div class="item" style="height: 100px;margin-top: 10px;line-height: 100px">
                                    <div class="c3" style="height: 100px">
                                        <div class="img_add_c">
                                            <span id="image8span" style="position:absolute;top:0px;left:0px;width:100%;height:100%;z-index: -1">+图2</span>
                                            <input type="button" class="btn_blue"  value="" style="background:transparent;width:100%; height:100%;border: none" ng-click="upload()" id="image8btn"/>
                                            <img class="image8" style="position:absolute;top:0px;left:0px;width:100%;height:100%;" src="<?=$goods_image->goods_image8?$goods_image->goods_image8:''?>" alt="+添加">
                                        </div>
                                    </div>
                                       <br/>
                                    <!-- <input type="button"  class="btn select_btn" style="margin-left: 10px;" value="预览" onclick="showimg('商品详情','image2')"/> -->
                                    <input type="button"  class="btn select_btn" style="margin-left: 3px" value="删除" onclick="delimg('image8')"/>

                                </div>
                                <div class="item" style="height: 100px;margin-top: 10px;line-height: 100px">
                                    <div class="c3" style="height: 100px">
                                        <div class="img_add_c">
                                            <span id="image9span" style="position:absolute;top:0px;left:0px;width:100%;height:100%;z-index: -1">+图3</span>
                                            <input type="button" class="btn_blue"  value="" style="background:transparent;width:100%; height:100%;border: none" ng-click="upload()" id="image9btn"/>
                                            <img class="image9" style="position:absolute;top:0px;left:0px;width:100%;height:100%;" src="<?=$goods_image->goods_image9?$goods_image->goods_image9:''?>" alt="+添加">
                                        </div>
                                    </div>
                                    <br/>
                                    <!-- <input type="button"  class="btn select_btn" style="margin-left: 10px;" value="预览" onclick="showimg('商品详情','image3')"/> -->
                                    <input type="button"  class="btn select_btn" style="margin-left: 3px" value="删除" onclick="delimg('image9')"/>

                                </div>
                                <div class="item" style="height: 100px;margin-top: 10px;line-height: 100px">
                                    <div class="c3" style="height: 100px">
                                        <div class="img_add_c">
                                            <span id="image10span" style="position:absolute;top:0px;left:0px;width:100%;height:100%;z-index: -1">+图4</span>
                                            <input type="button" class="btn_blue"  value="" style="background:transparent;width:100%; height:100%;border: none" ng-click="upload()" id="image10btn"/>
                                            <img class="image10" style="position:absolute;top:0px;left:0px;width:100%;height:100%;" src="<?=$goods_image->goods_image10?$goods_image->goods_image10:''?>" alt="+添加">
                                        </div>
                                    </div>
                                       <br/>
                                    <!-- <input type="button"  class="btn select_btn" style="margin-left: 10px;" value="预览" onclick="showimg('商品详情','image4')"/> -->
                                    <input type="button"  class="btn select_btn" style="margin-left: 3px" value="删除" onclick="delimg('image10')"/>

                                </div>
                                <div class="item" style="height: 100px;margin-top: 10px;line-height: 100px">
                                    <div class="c3" style="height: 100px">
                                        <div class="img_add_c">
                                            <span id="image11span" style="position:absolute;top:0px;left:0px;width:100%;height:100%;z-index: -1">+图5</span>
                                            <input type="button" class="btn_blue"  value="" style="background:transparent;width:100%; height:100%;border: none" ng-click="upload()" id="image11btn"/>
                                            <img class="image11" style="position:absolute;top:0px;left:0px;width:100%;height:100%;" src="<?=$goods_image->goods_image11?$goods_image->goods_image11:''?>" alt="+添加">
                                        </div>
                                    </div>
                                       <br/>
                                    <!-- <input type="button"  class="btn select_btn" style="margin-left: 10px;" value="预览" onclick="showimg('商品详情','image5')"/> -->
                                    <input type="button"  class="btn select_btn" style="margin-left: 3px" value="删除" onclick="delimg('image11')"/>

                                </div>


                                <div class="item" style="height: 100px;margin-top: 10px;line-height: 100px">
                                    <div class="c3" style="height: 100px">
                                        <div class="img_add_c">
                                            <span id="image12span" style="position:absolute;top:0px;left:0px;width:100%;height:100%;z-index: -1">+图6</span>
                                            <input type="button" class="btn_blue"  value="" style="background:transparent;width:100%; height:100%;border: none" ng-click="upload()" id="image12btn"/>
                                            <img class="image12" style="position:absolute;top:0px;left:0px;width:100%;height:100%;" src="<?=$goods_image->goods_image12?$goods_image->goods_image12:''?>" alt="+添加">
                                        </div>
                                    </div>
                                       <br/>
                                    <!-- <input type="button"  class="btn select_btn" style="margin-left: 10px;" value="预览" onclick="showimg('商品详情','image6')"/> -->
                                    <input type="button"  class="btn select_btn" style="margin-left: 3px" value="删除" onclick="delimg('image12')"/>

                                </div>



                            </div>

                             <br/>
                        <div id="previewDetails"  style="clear:both;padding:5px 15px;text-align: center;    cursor: pointer;width: 200px;background-color: #292834;width: 120px; bottom: 0;border-radius: 5px">
                            预览详情页
                        </div>
                            <div class="goodpic" style="float: left;height: 240px">
                                <div class="item">提示：</div>
                                <div class="item" style="clear:both">1. 最多上传6张相关图片。</div>
                                <div class="item">2. 显示尺寸大小：缩略图(220*220)，详情图（720×1080）</div>
                                <!-- <div  class="item" style="float: left;width: 18px;"> </div> -->
                                <div class="item" style="float: left;width: 260px;word-wrap: break-word; ">3.手机详情总体大小：图片+文字+音频应小于等于1.5M，图片仅支持JPG、GIF、PNG格式；</div>
                            </div>






                        </div>
                    </div>
                </div>

                <div class="split" style="margin-top: 260px" ></div>
                <div>
                    选择销售地区：
                    <select style="width: 100px">
                        <option value="国内">国内</option>
                        <option value="国际">国际</option>
                    </select>
                    <select style="width: 100px">
                        <option value="">请选择省市</option>
                    </select>
                    <select style="width: 100px">
                        <option value="">全部</option>
                    </select>
                </div>

            </div>

<input type="submit" name="" value="保存" placeholder="">


 </form>
        </div>
    </div>
</div>

<div id="fade" class="black_overlay">  </div>

<div id="MyDiv" class="white_content">
    <div style="text-align: right; cursor: default; height: 40px;    position: fixed;
    background: #2d2d35;
    padding: 5px 15px;
    right: 11%;">
        <span style="font-size: 16px;" onclick="CloseDiv('MyDiv','fade')">关闭</span>
    </div>
    <img src="" alt="" width=100%>
</div>

<script type="text/javascript">
    //弹出隐藏层
    function ShowDiv(show_div,bg_div){
        document.getElementById(show_div).style.display='block';
        document.getElementById(bg_div).style.display='block' ;
        var bgdiv = document.getElementById(bg_div);
        bgdiv.style.width = document.body.scrollWidth;
        // bgdiv.style.height = $(document).height();
        $("#"+bg_div).height($(document).height());
    };
    //关闭弹出层
    function CloseDiv(show_div,bg_div)
    {
        document.getElementById(show_div).style.display='none';
        document.getElementById(bg_div).style.display='none';
    };



    var type1 =<?=json_encode($type1)?>;
    var type2 =<?=json_encode($type2)?>;


  console.log(type1)
  console.log(type2)



</script>

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
<script type="text/javascript" src="./static/js/good/addgood3.js"></script>
<script>
 // console.log(type1)
 //   console.log(type2)







$('.addpGoods').click(function(){
    var type1Val = $("#type1").val();
    if(type1Val){
        window.location.href="index.php?r=goods/create-brands&category1_id="+type1Val;
    }else{
        alert('分类不能为空')
    }
})
var addressType= function (obj) {
	    var addressInfo = this;
        this.type1Info = $("#" + obj.type1);//服务中心 select对象
        this.type2Info = $("#" + obj.type2);//运营中心select对象
        this.GoodsBrandInfo = $("#" + obj.GoodsBrand_id);//运营中心select对象
        this.type1=function(){
              if (obj.type1Data.length) {
                   addressInfo.type1Info.empty().append("<option value=>请选择商品分类</option>");
                   addressInfo.type2Info.empty().append("<option value=>请选择商品二级分类</option>");
                   addressInfo.GoodsBrandInfo.empty().append("<option value=>请选择商品品牌</option>");
                  var Opts = "";
                    $.each(obj.type1Data, function (index, item) {
                        if (item) {
                            Opts += "<option value='" + item.Id + "'>" + item.Name + "</option>";
                        }
                    });
                    addressInfo.type1Info.append(Opts)
                    addressInfo.type1Info.chosen({no_results_text: "没有找到",disable_search_threshold: 10}); //初始化chosen
                    addressInfo.type2Info.chosen({no_results_text: "没有找到",disable_search_threshold: 10}); //初始化chosen
                    addressInfo.GoodsBrandInfo.chosen({no_results_text: "没有找到",disable_search_threshold: 10}); //初始化chosen
                }
        };

        this.type2=function(){
        	  var _thisVal =  addressInfo.type1Info.val();

              if (obj.type2Data.length) {
                   addressInfo.type2Info.empty().append("<option value=>请选择商品二级分类</option>");
                   addressInfo.GoodsBrandInfo.empty().append("<option value=>请选择商品品牌</option>");
                 

                   var Opts = "";
                    $.each(obj.type2Data, function (index, item) {
                        if (item) {
                        	 if(_thisVal){
                        	 	 if(_thisVal==item.ParentId){
                        	 	 	Opts += "<option value='" + item.Id + "'>" + item.Name + "</option>";
                        	 	 }
                        	 	
                        	 }
                            
                        }
                    });
                    addressInfo.type2Info.append(Opts)
                    addressInfo.type2Info.trigger("chosen:updated");
                }
      
			if(_thisVal==1){
			$("#volumeGoods").show()
			$("#tonghua").hide()
			}else    if(_thisVal==2){
			$("#volumeGoods").hide()
			$("#tonghua").show()
			}else{
			$("#volumeGoods").hide()
			$("#tonghua").hide()
			}

         $.get('./index.php?r=goods/get-brands&category1_id='+_thisVal, function(data) {
	          /*optional stuff to do after success */
	            var obj = eval('(' + data + ')');
	            console.log(obj)
	            if(obj.brands){
	               addressInfo.GoodsBrandInfo.empty().append("<option value>请选择商品品牌</option>");
	               var Opts = "";

	              for(var i=0;i<obj.brands.length;i++){
	                var item = obj.brands[i];
	     
	                   Opts+='<option value="'+item.BrandNo+'">'+item.BrandName+'</option>'; 
	                         // $("#type2").trigger("chosen:updated");  
	               }
	                addressInfo.GoodsBrandInfo.append(Opts).trigger("chosen:updated")
	          }
	      });

         
        };
    this.init = function () {
    	 addressInfo.type1();
         var _thisVal =  addressInfo.type1Info.val();

    	 // addressInfo.type2();
        addressInfo.type1Info.bind("change", addressInfo.type2);
    }
        this.init()
}


addressType({
	 type1:'type1',
	 type2:'type2',
	 GoodsBrand_id:'GoodsBrand_id',
	 type1Data:type1,
	 type2Data:type2
})


$(".cardfactory").chosen({no_results_text: "没有找到",disable_search_threshold: 10}); //初始化chosen


$("#state5").focus(function(){
    $("#dvCBs input").attr("checked",false);  
    $("#dvCBs input").attr("name",false);  
    $(this).attr("name",'Goods[volume]');
})
$(".state").change(function(){
     $("#state5").attr('name',false);  
     $("#state5").val('');  
})


 var type1_id_a   = $("#type1").attr('data')*1;
  $("#type1").val(type1_id_a).trigger("chosen:updated");
      get_brands(type1_id_a);
 var type2_id_a   = $("#type2").attr('data')*1;
 $("#type2").val(type2_id_a).trigger("chosen:updated");

 var cardfactory   = $(".cardfactory").attr('data');
 $(".cardfactory").val(cardfactory);


 var volumeGoods = $(".volumeGoods").attr('data');

var volumeGoodsindex = $(".volumeGoods input").length;

var inputValnum = []
for(var i=0;i<volumeGoodsindex-1;i++){
    var inputVal=$(".volumeGoods input").eq(i).val();
    inputValnum.push(inputVal);
   //console.log(inputVal)
    if(volumeGoods == inputVal){
        $(".volumeGoods input").eq(i).attr('checked','checked');
        $("#state5").val('');
    }
}


//console.log(volumeGoods)
//console.log(inputValnum)
 var indexNUm = $.inArray(volumeGoods, inputValnum);
 if (indexNUm < 0) {
    $("#state5").val(volumeGoods);
 }


            




function get_brands(Pid){
      if(type2.length){
    
        $("#type2").empty()
       $("#type2").append("<option value>请选择商品二级分类</option>").trigger("chosen:updated");


        for(var i=0;i<type2.length;i++){
            var item = type2[i];
         //   console.log(item)
             if(Pid==item.ParentId){
               $("#type2").append('<option value="'+item.Id+'">'+item.Name+'</option>').trigger("chosen:updated"); 
                     // $("#type2").trigger("chosen:updated");  
                }
           }
      }

      $.get('./index.php?r=goods/get-brands&category1_id='+Pid, function(data) {
          /*optional stuff to do after success */
            var obj = eval('(' + data + ')');
          //  console.log(obj)

            if(obj.brands){

          $("#GoodsBrand_id").empty()
           $("#GoodsBrand_id").append("<option value>请选择啊所倡导的</option>");
              for(var i=0;i<obj.brands.length;i++){
                var item = obj.brands[i];
     
                   $("#GoodsBrand_id").append('<option value="'+item.BrandNo+'">'+item.BrandName+'</option>').trigger("chosen:updated"); 
                         // $("#type2").trigger("chosen:updated");  
               }

              var GoodsBrand_id  = $("#GoodsBrand_id").attr('data');
               $("#GoodsBrand_id").val(GoodsBrand_id).trigger("chosen:updated")

          }
      });
}
$("#previewCommoditys").click(function(){
        var image1Src = $(".image1").attr('src');
        var image2Src = $(".image2").attr('src');
        var image3Src = $(".image3").attr('src');
        var image4Src = $(".image4").attr('src');
        var image5Src = $(".image5").attr('src');
        var image6Src = $(".image6").attr('src');
        var html ='<img src="'+image1Src+'" alt="">';
            html +='<img src="'+image2Src+'" alt="">';
            html +='<img src="'+image3Src+'" alt="">';
            html +='<img src="'+image4Src+'" alt="">';
            html +='<img src="'+image5Src+'" alt="">';
            html +='<img src="'+image6Src+'" alt="">';

        //页面层-自定义
        layer.open({
          type: 1,
          title: false,
          closeBtn: 0,
          shadeClose: true,
          skin: 'yourclass',
          content: html
        });
})




$("#previewDetails").click(function(){
        var image7Src = $(".image7").attr('src');
        var image8Src = $(".image8").attr('src');
        var image9Src = $(".image9").attr('src');
        var image10Src = $(".image10").attr('src');
        var image11Src = $(".image11").attr('src');
        var image12Src = $(".image12").attr('src');
        var html ='<img src="'+image7Src+'" alt="">';
            html +='<img src="'+image8Src+'" alt="">';
            html +='<img src="'+image9Src+'" alt="">';
            html +='<img src="'+image10Src+'" alt="">';
            html +='<img src="'+image11Src+'" alt="">';
            html +='<img src="'+image12Src+'" alt="">';

        //页面层-自定义
        layer.open({
          type: 1,
          title: false,
          closeBtn: 0,
          shadeClose: true,
          skin: 'yourclass',
          content: html
        });
})




    $('.btn-primary').click(function(){
        var image1=$('#image1').val();
        if(!image1){
            alert('第一张图片必须添加');
            return false;
        }
    });







  // 获取id比较
  function getAddressIdByName(_name,data) {
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
    return;
  }



    $('#volume').blur(function(){
        var volume= $.trim($(this).val());
        if(volume!=''){
            if(isNaN(volume)){
                alert('容量只能是整数或小数');
                $('#volume').val('');
                $('#other').attr('checked',false);
                return false;
            }

            if(volume<=0){
                alert('容量必须大于0');
                $('#volume').val('');
                $('#other').attr('checked',false);
                return false;
            }

            if(volume>=100){
                alert('容量不能大于100');
                $('#volume').val('');
                $('#other').attr('checked',false);
                return false;
            }
            if(volume<100 && !Number.isInteger(volume)){
                var volume2=parseInt(volume*10)/10;//保留一位小数

                $('#other').attr('value',volume2);
                $('#volume').val(volume2);
                $('#other').attr('checked',true);

            }else{
                $('#other').attr('value',volume);
                alert(volume);
                $('#other').attr('checked',true);
            }

        }else{
            $('#other').attr('checked',false);

        }
//                    alert(volume);
    })




$(function(){
       var Pid =  $(".type1").val();

   if(Pid==1){
        $("#volumeGoods").show()
        $("#tonghua").hide()
   }else    if(Pid==2){
        $("#volumeGoods").hide()
        $("#tonghua").show()
   }else{
    $("#volumeGoods").hide()
        $("#tonghua").hide()
   }




    })

</script>

</body>
</html>











