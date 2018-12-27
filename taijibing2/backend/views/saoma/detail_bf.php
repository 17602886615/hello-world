<?php
use yii\widgets\LinkPager;
?>
<link rel="stylesheet" href="/static/js/datepicker/dateRange.css"/>
<script type="text/javascript" src="/static/js/jquery.min.js"></script>
    <script type="text/javascript" src="/static/js/datepicker/dateRange.js"></script>
    <link rel="stylesheet" type="text/css" href="./static/css/conmones.css">
<div class="wrapper wrapper-content">
    <div style="margin-bottom:10px;">
        <form method="post" action="/index.php?r=saoma/detail&DevNo=<?=$DevNo?>">
            <input type="hidden" name="DevNo" value="<?=$DevNo?>">
            <span style="padding-left:10px;"><label>搜索内容:</label><input type="text" placeholder="请输入水厂条码" id="content" name="content" value="<?=$content?>"/></span>
            <span style="padding-left:10px;"><label>时间段:</label><input type="text" placeholder="" name="selecttime" id="selecttime" /></span>
<!--            <span style="padding-left:5px;display:inline-block">-->
<!--                    <label>地区:</label>-->
<!--                     <select class="control-label" name="province"  id="province">-->
<!--                         <option value="" selected>请选择</option>-->
<!--                     </select>-->
<!--                    <select class="control-label" name="city" id="city">-->
<!--                        <option value="">请选择</option>-->
<!--                    </select>-->
<!--                    <select class="control-label" name="area" id="area">-->
<!--                        <option value="">请选择</option>-->
<!--                    </select>-->
<!--            </span>-->


            <input style="padding-left:10px;" type="submit" value="查询" id="btn"/>
        </form>
    </div>
    <div style="text-align: right;margin-bottom: 10px"> <?= \yii\bootstrap\Html::a('返回',['saoma/list'],['class'=>'btn btn-primary'])?></div>
        <table class="table table-hover" style="background:white;">
            <thead>
            <th style="width: 45px">序号</th>
            <th style="width: 110px">水厂条码</th>
            <th style="width: 80px">设备编号</th>
<!--            <th>设备厂家</th>  <td>".$val["DevFactory"]."</td>-->
<!--            <th>县区运营中心</th><td>".$val["agentpname"]."</td> <td>".$val["agentname"]."</td>-->

<!--            <th>社区服务中心</th>-->
            <th style="width: 160px">所在区域</th>
            <th>位置信息</th>
            <th style="width: 80px">用户姓名</th>
            <th style="width: 60px">手机号</th>
<!--            <th>水厂</th>  <td>".$val["factoryName"]."</td>-->
            <th style="width: 100px"><a id="sort" href="">扫码时间</a></th>
            </thead>
            <tbody>
            <?php
            $str='';
            $no=1;
            foreach($model as $key=>$val)
            {
                $str.= "<tr>
                            <td>".$no."</td>
                            <td>".$val["BarCode"]."</td>
                            <td>".$val["DevNo"]."</td>
                            <td>".$val["Province"]."-".$val["City"]."-".$val["Area"]."</td>
                            <td>".$val["Address"]."</td>
                            <td>".$val["Name"]."</td>
                            <td>".$val["Tel"]."</td>
                            <td>".$val["RowTime"]."</td>
                        </tr>";
                $no++;
            }
            echo $str;
            ?>
            </tbody>
        </table>
        <table>

        </table>

    <script>
        var content='<?=$content?>';
        var selecttime='<?=json_encode($selecttime)?>';
        var DevNo=<?=$DevNo?>;
        var sort=<?=$sort?>;
    </script>
<script type="text/javascript">


    //排序
    $('#sort').click(function(){
        sort++;

        var content=$('#content').val();
        var selecttime=$('#selecttime').val();

        $(this).attr('href','./?r=saoma/detail&sort='+sort+'&content='+content+'&selecttime='+selecttime+'&DevNo='+DevNo);

    });


    $(function(){
        $('.pagination a').click(function(){

            var content=$('#content').val();
            var selecttime=$('#selecttime').val();
            var province=$('#province option:selected').val();
            var city=$('#city option:selected').val();
            var area=$('#area option:selected').val();
            var page_size=$('#page_size option:selected').val();

            var href=$(this).attr('href');

            $(this).attr('href',href+'&content='+content+'&sort='+sort+'&selecttime='+selecttime+'&DevNo='+DevNo+'&per-page='+page_size);
//                var href2=$(this).attr('href');
//                alert(href2)
        });
    });



    $(function(){

        var dateRange = new pickerDateRange('selecttime', {
            aRecent7Days : '', //最近7天
            isTodayValid : true,
            //startDate : '2013-04-14',
            //endDate : '2013-04-21',
            //needCompare : true,
            //isSingleDay : true,
            //shortOpr : true,
            defaultText : '至',
            inputTrigger : 'selecttime',
            theme : 'ta',
            success : function(obj) {
//                startTimeStr = obj.startDate;
//                endTimeStr = obj.endDate;
            }
        });
        $("#selecttime").val('<?=$selecttime?>');
    });





</script>

</div>

<?php
echo "<span style='margin-left: 20px'>".LinkPager::widget(['pagination' => $pages, 'maxButtonCount' => 10 ])."</span>";
echo "<dev style='float:left;margin-top: 22px;margin-left: 50px'>每页显示：<select type='text' name='page_size' id='page_size' style='width:50px;'>
<option value='10'>10</option>
<option value='20'>20</option>
<option value='50'>50</option>
</select>条
&nbsp;&nbsp;&nbsp;&nbsp;共：$pages->totalCount 条
&nbsp;&nbsp;&nbsp;&nbsp;<span style='margin-left: auto'>第：<input style='width: 50px' type='text' id='pages' name='pages' value='$page'>页
&nbsp;&nbsp;&nbsp;&nbsp;<a href='./?r=saoma/detail' id='butn'>确定</a></span>
</dev>"

?>
<script>
    //分页
    $('#page_size').val(<?=$page_size?>);
    $('#butn').click(function () {
        var content=$('#content').val();
        var selecttime=$('#selecttime').val();
        var province=$('#province option:selected').val();
        var city=$('#city option:selected').val();
        var area=$('#area option:selected').val();

        var page_size=$('#page_size option:selected').val();
        var pages=$('#pages').val();
//            alert(page_size);
        var href=$(this).attr('href');
        $(this).attr('href',href+'&page='+pages+'&per-page='+page_size+'&content='+content+'&selecttime='+selecttime+'&sort='+sort+'&DevNo='+DevNo);
        var href2=$(this).attr('href');
//            alert(href2);

    });
</script>