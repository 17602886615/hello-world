<?php
use yii\widgets\LinkPager;
?>
<link rel="stylesheet" type="text/css" href="./static/css/conmones.css">
<style type="text/css" media="screen">
        .table {

    margin-top: 20px;
}
</style>
    <div class="wrapper wrapper-content">
        <div style="margin-bottom:10px;" class="condition ">
            <form action="/index.php?r=logic-user/<?php echo $level==5?"agentslist":"agentxlist" ?>" method="post">
                <span><label>关键字:</label><input type="text" placeholder="请输入名称或运营中心" id="username" name="username" value="<?=$username?>"/></span>
                <span style="padding-left:10px;"><label>手机号:</label><input type="text" placeholder="请输入手机号" id="mobile" value="<?=$mobile?>" name="mobile"/></span>
                <label style="padding-left:10px;">地区:</label>
                <select class="control-label" name="province"  id="province">
                    <option value="" selected>请选择</option>
                </select>
                <select class="control-label" name="city" id="city">
                    <option value="">请选择</option>
                </select>
                <select class="control-label" name="area" id="area">
                    <option value="">请选择</option>
                </select>
             <input type="submit" class="btn" value="查询"  style="background: #e46045; color: white;height: 26px;line-height: 14px;padding-left: 10px;margin-top: -5px;    border: none;"/>
            </form>
        </div>
        <table class="table table-hover" >
            <thead>
            <th style="width: 5%">序号</th>
            <?= $role_id==1?'<th style="width: 8%">登录账号</th>':''?>
            <th style="width: 10%">名称</th>
            <th  style="width: 9%">所在地区</th>
            <th  style="width: 18%">地址</th>
            <th style="width: 8%">联系人</th>
            <th style="width: 6%">联系电话</th>
            <th style="width: 10%">所属运营中心</th>
            <th style="width: 10%">所属片区中心</th>
            <?= $role_id==1?"<th style='width: 10%'><a id='sort' href=''>最近操作时间</a></th>":''?>
            <?php
            //echo $role_id==1?'<th style="width: 8%">操作详情</th>':'';
            ?>
            <?= $role_id==1?'<th style="width: 8%">登记设置</th>':''?>
            </thead>
            <tbody>
            <?php
            $str='';
            $no=1;
            if($role_id==1){
                foreach($model as $key=>$val)
                   {
                    $str.= "<tr>
                        <td>".$no."</td>
                        <td>".$val["LoginName"]."</td>
                        <td>".$val["Name"]."</td>
                        <td>".($val["Province"]."-".$val["City"]."-".$val["Area"])."</td>
                        <td>".$val["Address"]."</td>
                        <td>".$val["ContractUser"]."</td>
                        <td>".$val["ContractTel"]."</td>
                        <td>".$val["ParentName"]."</td>
                        <td>".($val["AreaCenterName"]==''?'无':$val["AreaCenterName"])."</td>
                        <td>".$val["RowTime"]."</td>

                        <td><a href='./?r=logic-user/select-dev&agent_id=".$val["Id"]."&name=".$val["Name"]."&province=".$val["Province"]."&city=".$val["City"]."&area=".$val["Area"]."'>查看/编辑</a></td>
                        </tr>";//<td><a href='./?r=log/index&user_id=".$val["Id"]."'>详情</a></td>
                    $no++;
                }
            }else{
                foreach($model as $key=>$val)
                {
                    $str.= "<tr>
                        <td>".$no."</td>
                        <td>".$val["Name"]."</td>
                        <td>".($val["Province"]."-".$val["City"]."-".$val["Area"])."</td>
                        <td>".$val["Address"]."</td>
                        <td>".$val["ContractUser"]."</td>
                        <td>".$val["ContractTel"]."</td>
                        <td>".$val["ParentName"]."</td>
                        <td>".($val["AreaCenterName"]==''?'无':$val["AreaCenterName"])."</td>

                        </tr>";
                    $no++;
                }
            }

            echo $str;
            ?>
            </tbody>
        </table>



    </div>
    <script type="text/javascript" src="/static/js/jquery.min.js"></script>
    <script>
        var data =<?=json_encode($address)?>;
        var province='<?=$province?>';
        var city='<?=$city?>';
        var area='<?=$area?>';
        var sort=<?=$sort?>;

        // console.log(data)
    </script>
    <script>

        //排序
        $('#sort').click(function(){
            sort++;
            var username=$('#username').val();
            var mobile=$('#mobile').val();
            var province=$('#province option:selected').val();
            var city=$('#city option:selected').val();
            var area=$('#area option:selected').val();
            $(this).attr('href','./?r=logic-user/agentslist&sort='+sort+'&username='+username+'&mobile='+mobile+'&province='+province+'&city='+city+'&area='+area);
//            alert($(this).attr('href'));

        });


        $(function(){
            $('.pagination a').click(function(){

                var username=$('#username').val();
                var mobile=$('#mobile').val();
                var province=$('#province option:selected').val();
                var city=$('#city option:selected').val();
                var area=$('#area option:selected').val();

                var page_size=$('#page_size option:selected').val();
                var href=$(this).attr('href');

                $(this).attr('href',href+'&username='+username+'&mobile='+mobile+'&province='+province+'&city='+city+'&area='+area+'&sort='+sort+'&per-page='+page_size);
//                var href2=$(this).attr('href');
//                alert(href2)
            });
        });



        $(function(){
            initProvince();
            initListener();
            initAddress();
        });
        function initAddress() {
            $("#province").val(province);
            initCityOnProvinceChange();
            $("#city").val(city);
            initThree();
            $("#area").val(area);
        }
        function getAddressIdByName(_name) {
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
            return 0;
        }
        function initListener() {
            $("#province").on("change", function () {
                initCityOnProvinceChange();
            });
            $("#city").on("change", function () {
                initThree();
            });
            $("#queryBtn").on("click",function(){
                query();
            });
        }
        function initCityOnProvinceChange() {
            var pid = getAddressIdByName($("#province").val());
            $("#city").empty();
            $("#area").empty();
            $("#area").append("<option value='' selected>请选择</option>");
            $("#city").append("<option value='' selected>请选择</option>");
            if (pid == 0) {
                return;
            }
            for (var index = 0; index < data.length; index++) {
                var item = data[index];
                if (item.PId != 0 && item.PId == pid) {
                    $("#city").append("<option value='" + item.Name + "'>" + item.Name + "</option>");
                    initThree()
                }
            }
        }
        function initThree() {
            var pid = getAddressIdByName($("#city").val());
            $("#area").empty();
            $("#area").append("<option value='' selected>请选择</option>");
            if (pid == 0) {
                return;
            }
            for (var index = 0; index < data.length; index++) {
                var item = data[index];
                if (item.PId != 0 && item.PId == pid) {
                    $("#area").append("<option value='" + item.Name + "'>" + item.Name + "</option>");
                }
            }
        }
        function initProvince() {
            for (var index = 0; index < data.length; index++) {
                var item = data[index];
                if (item.PId == 0) {
                    $("#province").append("<option value='" + item.Name + "'>" + item.Name + "</option>");
                }
            }

        }
    </script>


<?php
echo "";
echo "<dev style='float:left;margin-top: 22px;margin-left: 50px;height:100px'>每页显示：<select type='text' name='page_size' id='page_size' style='width:50px;'>
<option value='10'>10</option>
<option value='20'>20</option>
<option value='50'>50</option>
</select>条
<span style='margin-left: 20px'>".LinkPager::widget(['pagination' => $pages, 'maxButtonCount' => 10 ])."</span>
&nbsp;&nbsp;&nbsp;&nbsp;共：$pages->totalCount 条
&nbsp;&nbsp;&nbsp;&nbsp;<span style='margin-left: auto'>第：<input style='width: 50px' type='text' id='pages' name='pages' value='$page'>页
&nbsp;&nbsp;&nbsp;&nbsp;<a href='./?r=logic-user/agentslist' id='butn'>确定</a></span>
</dev>"

?>
<script>

    $('#page_size').val(<?=$page_size?>);
    $('#butn').click(function () {
        var username=$('#username').val();
        var mobile=$('#mobile').val();
        var province=$('#province option:selected').val();
        var city=$('#city option:selected').val();
        var area=$('#area option:selected').val();

        var page_size=$('#page_size option:selected').val();
        var pages=$('#pages').val();
//            alert(page_size);
        var href=$(this).attr('href');
        $(this).attr('href',href+'&page='+pages+'&per-page='+page_size+'&username='+username+'&mobile='+mobile+'&province='+province+'&city='+city+'&area='+area+'&sort='+sort);
        var href2=$(this).attr('href');
//            alert(href2);

    });

</script>
