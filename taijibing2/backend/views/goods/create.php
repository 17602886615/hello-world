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
     <link rel="stylesheet" type="text/css" href="./static/css/conmones.css">
    <style>
        body{
            height:100%;
            width:100%;
            overflow:auto;
        }
    </style>
</head>
<body>

<div class="main-title">
    <h2 id="mytitle"></h2>
</div>
<div class="content_top">
    <div class="f1">
        <input type="button" class="btn select_btn" value="+添加商品分类" onclick="openUrl()"/>
    </div>
    <div class="f2">
        <div>
            <span>选择商品分类：</span>
            <select id="categoryid">
            </select>
        </div>
        <div>
            <span>选择商户：</span>
            <select id="merchantid">
            </select>
        </div>
        <div>
            <span>选择商品分类：</span>
            <select id="logictype">
                <option value="0" selected="selected">请选择</option>
                <option value="3001">袋装水</option>
                <option value="3002">茶吧机</option>
<!--                <option value="3003">车险</option>-->
<!--                <option value="3004">保养</option>-->
            </select>
        </div>
    </div>
    <div class="f3">
        <span>您当前选择的是：</span>
    </div>
    <div class="f4">
        <input id="nextstep" type="button" disabled="disabled" class="btn select_btn" value="下一步，填写详细信息" onclick="next()"/>
    </div>
</div>
<div class="content_middle">
    <div class="separator">
        1、基本信息
    </div>
    <div class="detail1">
        <div class="item">
            <div class="ftitle"><span class="tip">*</span><span class="title">商品名称：</span></div>
            <div class="fcontent"><input id="name" type="text" class="baseinput"/></div>
        </div>
        <div class="item">
            <div class="ftitle"><span class="tip">*</span><span class="title">商品标题：</span></div>
            <div class="fcontent">
                <input id="title" type="text" class="baseinput"/>
                <span class="mark">（用于前端显示）</span>
            </div>
        </div>
        <div class="item">
            <div class="ftitle"><span class="tip">*</span><span class="title">商品ID号：</span></div>
            <div class="fcontent">
                <input id="id" type="text" class="baseinput"/>
            </div>
        </div>
        <div class="item" style="height:auto;">
            <div class="ftitle"><span class="tip">*</span><span class="title">商品型号：</span></div>
            <div class="fcontent" style="height:auto;">
                <div id="good_sub_type_c">

                </div>

                <p><a href="javascript:addGoodType();">继续添加</a></p>
            </div>
        </div>

        <div style="clear:both;"></div>
        <div class="split"></div>
        <div class="item">
            <div class="ftitle"><span class="tip">*</span><span class="title">运费：</span></div>
            <div class="fcontent">
                <label style="padding-right:20px;">
                    <input value="0" type="radio" name="f1" checked="checked"/>
                    <span>免运费</span>
                </label>
                <label>
                    <input value="1" type="radio" name="f1"/>
                    <span>运费到付</span>
                </label>
            </div>
        </div>
        <div class="item">
            <div class="ftitle"><span class="tip">*</span><span class="title">初始已售数量：</span></div>
            <div class="fcontent">
                <input id="initamount" type="text" class="baseinput"/>
                <span class="mark">（用于商品详情页显示）</span>
            </div>
        </div>
        <div class="item">
            <div class="ftitle"><span class="title">商品原价：</span></div>
            <div class="fcontent">
                <input id="originalprice"  type="text" class="baseinput"/>
                <span class="mark">（用于商品详情页显示）</span>
            </div>
        </div>
        <div class="item" style="display: none;">
            <div class="ftitle"><span class="tip">*</span><span class="title"> 商品售价：</span></div>
            <div class="fcontent">
                <input id="saleprice"  type="text" class="baseinput"/>
                <span class="mark">（用于商品详情页显示）</span>
            </div>
        </div>
        <div class="item">
            <div class="ftitle"><span class="tip"></span><span class="title"> 会员优惠：</span></div>
            <div class="fcontent">
                <select id="memberdiscounttype" style="width: 126px;height: 25px">
                    <option value="0">不启用会员优惠</option>
                    <option value="1">打折</option>
                    <option value="2">直减</option>
                </select>
                <input id="memberdiscountval"  type="text" class="baseinput" style="width: 50px"/>
            </div>
        </div>
        <div class="item">
            <div class="ftitle"><span class="title"> 营业时间：</span></div>
            <div class="fcontent">
                <input id="shophours"  type="text" class="baseinput"/>
                <span class="mark">（用于部分商品前端显示）</span>
            </div>
        </div>
        <div class="item">
            <div class="ftitle"><span class="title"> 咨询电话：</span></div>
            <div class="fcontent">
                <input id="tel"  type="text" class="baseinput"/>
                <span class="mark">（用于前端显示）</span>
            </div>
        </div>
        <div class="item">
            <div class="ftitle"><span class="title"> 标记位置：</span></div>
            <div class="fcontent">
                <input id="address" type="text" class="baseinput"/>
                <input type="button"  class="btn select_btn" style="height: 26px;margin-bottom: 5px;line-height: 15px;margin-left: 15px" value="+标记位置" onclick="openMark()"/>
                <span>经度：</span>
                <input id="lng" type="text" class="baseinput" style="width: 80px"/>
                <span>纬度：</span>
                <input id="lat" type="text" class="baseinput" style="width: 80px"/>
                <span class="mark">（用于部分商品前端显示距离）</span>
            </div>
        </div>
        <div class="split"></div>
        <div class="item" style="height: 240px;line-height: 240px">
            <div class="ftitle"><span class="tip">*</span><span class="title"> 商品图片：</span></div>
            <div class="fcontent">
                <div class="goodpic" style="float: left;background: none;border: none;width:400px;height: 240px">
                    <div class="item" style="height: 100px;line-height: 100px">
                        <div class="c3" style="height: 100px">
                            <div class="img_add_c">
                                <span id="lbspan" style="position:absolute;top:0px;left:0px;width:100%;height:100%;z-index: -1">+列表图</span>
                                <input type="button" class="btn_blue"  value="" style="background:transparent;width:100%; height:100%;border: none" ng-click="upload()" id="lbbtn"/>
                                <img id="lb" style="position:absolute;top:0px;left:0px;width:100%;height:100%;" src="">
                            </div>
                        </div>
                        <input type="button"  class="btn select_btn" style="margin-left: 10px;" value="预览" onclick="showimg('商品详情','lb')"/>
                        <input type="button"  class="btn select_btn" style="margin-left: 3px" value="删除" onclick="delimg('lb')"/>

                    </div>
                    <div class="item" style="height: 100px;margin-top: 10px;line-height: 100px">
                        <div class="c3" style="height: 100px">
                            <div class="img_add_c">
                                <span id="xjspan" style="position:absolute;top:0px;left:0px;width:100%;height:100%;z-index: -1">+细节图</span>
                                <input type="button" class="btn_blue"  value="" style="background:transparent;width:100%; height:100%;border: none" ng-click="upload()" id="xjbtn"/>
                                <img id="xj" style="position:absolute;top:0px;left:0px;width:100%;height:100%;" src="">
                            </div>
                        </div>
                        <input type="button"  class="btn select_btn" style="margin-left: 10px;" value="预览" onclick="showimg('商品详情','xj')"/>
                        <input type="button"  class="btn select_btn" style="margin-left: 3px" value="删除" onclick="delimg('xj')"/>

                    </div>
                </div>
                <div class="goodpic" style="float: left;height: 240px">
                    <div class="item">提示：</div>
                    <div class="item">1、列表图：显示在大频道页；</div>
                    <div class="item">2、细节图：显示在商品详情页；</div>
                    <div  class="item" style="float: left;width: 18px;">3、</div>
                    <div class="item" style="float: left;width: 260px;word-wrap: break-word; ">具体尺寸大小 ：洗车列表图（220*220），洗车细节图（750*370）， 旅游列表图（*）， 旅游细节图（*）；</div>
                </div>
            </div>
        </div>
    </div>
<!--    <div class="separator">-->
<!--       2、商品描述-->
<!--    </div>-->
<!--    <div class="detail2">-->
<!--        <div class="item">-->
<!--            <div class="ftitle"><span class="title">小喇叭：</span></div>-->
<!--            <div class="fcontent"><input id="tips" type="text" class="baseinput"/></div>-->
<!--        </div>-->
<!--        <div class="upload">-->
<!--            <div class="c1"><span class="title">商品详情：</span></div>-->
<!--            <div class="c2">-->
<!--                <div class="c3">-->
<!--                    <div class="img_add_c">-->
<!--                        <span id="spxqspan" style="position:absolute;top:0px;left:0px;width:100%;height:100%;z-index: -1">+详情图</span>-->
<!--                        <input type="button" class="btn_blue"  value="" style="background:transparent;width:100%; height:100%;border: none" ng-click="upload()" id="spxqbtn"/>-->
<!--                        <img id="spxq" style="position:absolute;top:0px;left:0px;width:100%;height:100%;" src="">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <input type="button"  class="btn select_btn" style="margin-left: 10px;" value="预览" onclick="showimg('商品详情','spxq')"/>-->
<!--                <input type="button"  class="btn select_btn" style="margin-left: 3px" value="删除" onclick="delimg('spxq')"/>-->
<!--                <span class="mark">（商品详情和产品特色：包括费用信息、预订须知、温馨提示、退款说明）</span>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="upload">-->
<!--            <div class="c1"><span class="title">产品特色：</span></div>-->
<!--            <div class="c2">-->
<!--                <div class="c3">-->
<!--                    <div class="img_add_c">-->
<!--                        <span id="cptsspan" style="position:absolute;top:0px;left:0px;width:100%;height:100%;z-index: -1">+特色图</span>-->
<!--                        <input type="button" class="btn_blue"  value="" style="background:transparent;width:100%; height:100%;border: none" ng-click="upload()" id="cptsbtn"/>-->
<!--                        <img id="cpts" style="position:absolute;top:0px;left:0px;width:100%;height:100%;" src="">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <input type="button"  class="btn select_btn" style="margin-left: 10px;" value="预览" onclick="showimg('产品特色','cpts')"/>-->
<!--                <input type="button"  class="btn select_btn" style="margin-left: 3px" value="删除" onclick="delimg('cpts')"/>-->
<!--                <span class="mark"></span>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <div class="separator">
        5、上下架管理
    </div>
    <div class="detail5">
        <div class="item onlinetimec">
            <div class="ftitle"><span class="tip">*</span><span class="title">上架：</span></div>
            <div class="fcontent">
                <label style="padding-right:20px;">
                    <input value="0" type="radio" name="f2" />
                    <span>立即销售</span>
                </label>
                <label>
                    <input value="1" type="radio" name="f2"/>
                    <span>待销售</span>
                </label>
            </div>
        </div>
        <div class="item">
            <div class="ftitle"><span class="tip">*</span><span class="title">上架时间：</span></div>
            <div class="fcontent" style="height: 30px">
                <div style="float: left;width: 200px">
                    <input  id="starttime" type="text" class="baseinput" value="2099-1-1 00:00:00"/>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ftitle"><span class="tip">*</span><span class="title">下架时间：</span></div>
            <div class="fcontent" style="height: 30px">
                <div style="float: left;width: 200px">
                    <input  id="endtime" type="text" class="baseinput" value="2099-1-1 00:00:00"/>
                </div>
                <div style="float: left;width: 440px;line-height: 18px">
                    <span class="mark" style="height: 30px;line-height:18px">（勾选“立即销售”，设置下架时间后，点击“保存”，系统会在您设置的时间自动进行下架操作，下架时间为空时，默认该商品下架时间很长。）</span>
                </div>
            </div>
        </div>
    </div>
<!--    <div class="detail5">-->
<!--        <input type="button" class="btn select_btn" value="保存" onclick="updategood()"/>-->
<!--        <input type="button" class="btn select_btn" value="预览" onclick="previewgood()" style="margin-left:20px;"/>-->
<!--    </div>-->


    <div class="detail5">
        <input type="button" class="btn select_btn" value="保存" onclick="savegood()"/>
    </div>


</div>
</form>
<div id="selectParkContainer" style="display:none;">
    <div  class="selectParkContainer">
        <ul class="order_detail_field">
            <li><input class="cx" type="checkbox" id="outdate"/><label for="outdate">出行日期</label></li>
            <li><input class="cx" type="checkbox" id="special_price"/><label for="special_price">e泊特价</label></li>
            <li><input class="cx" type="checkbox" id="ticket_type"/><label for="ticket_type">取票方式</label></li>
            <li><input class="cx" type="checkbox" id="buy_amount"/><label for="buy_amount">购买数量</label></li>
            <li><input class="cx" type="checkbox" id="contact"/><label for="contact">联系人</label></li>
            <li><input class="cx" type="checkbox" id="telnum"/><label for="telnum">手机号</label></li>

        </ul>
        <p style="text-align:center;"> <input type="button" class="btn order_detail_btn" id="order_detail_btn" value="确定"/></p>
    </div>
</div>

<script type="text/javascript" src="./static/js/jquery.min.js"></script>
<script type="text/javascript" src="./static/js/zui/js/zui.js"></script>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.4"></script>
<script type="text/javascript" src="./static/js/qiniu/moxie.js"></script>
<script type="text/javascript" src="./static/js/qiniu/Plupload.js"></script>
<script type="text/javascript" src="./static/js/qiniu/qiniu.min.js"></script>
<script type="text/javascript" src="./static/js/jedate/jedate.js"></script>
<script type="text/javascript" src="./static/js/layer/layer.js"></script>
<script type="text/javascript" src="./static/js/pinyin.js"></script>
<script type="text/javascript" src="./static/js/lib.js"></script>
<script type="text/javascript" src="./static/js/good/addgood.js"></script>

<script type="text/javascript" src="./static/js/qrcode.js"></script>
<script type="text/javascript" src="./static/js/good/updategood.js"></script>


<script type="text/javascript">
    var category=<?=json_encode($category)?>;
    var merchant=<?=json_encode($merchant)?>;

    var sms=<?=json_encode($sms)?>;

</script>
<script type="text/javascript">

</script>
</body>
</html>

