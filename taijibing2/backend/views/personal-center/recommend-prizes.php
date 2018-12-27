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
      <link rel="stylesheet" href="/static/css/bootstrap.min.css"> 
    <link href="/assets/da04fe47/plugins/jstree/themes/default/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./static/js/page/jquery.pagination.css"/>
       <link rel="stylesheet" href="./static/css/chosen.css"/>
      <link rel="stylesheet" href="./static/css/Common.css"/>
    <style>

</style>
</head>
<body>
<div class="content_middle">
 <div style="text-align: right;margin-bottom: 10px">
         <a class="btn btn-primary" href="index.php?r=customer/list">返回</a>     
        </div> 
    <div class="main-title">
        <img src="/static/images3/sidebar.png" alt="">
        <span class="font-size-S">赏金详情</span>
    </div>
    <div  style="" class='serve page-head '>
          <table style="width:100%">
            <thead>
              <tr>
                <th>序号</th>
                <th>姓名</th>
                <th>手机号</th>
                <th>营销活动</th>
                <th>赏金记录</th>
                <th>获得赏金</th>
                <th>时间</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>

      <div style='clear:both'></div>
    </div>
</div>
<div style="  position: relative;margin: auto; width: 100%;text-align: center; height: 100px;padding-bottom: 150px;">

  <div id="page" class="page_div"></div>
</div>


<script type="text/javascript" src="./static/js/jquery.min.js"></script>
<script src="/static/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./static/js/chosen.jquery.min.js"></script> 
<script type="text/javascript" src="./static/js/layer/layer.js"></script>
<script type="text/javascript" src="./static/js/Common2.js?v=1"></script>

<script type="text/javascript" src="./static/js/jedate/jedate.js?v=1.4"></script>
<script src="/assets/da04fe47/plugins/jstree/jstree.min.js"></script>
<script type="text/javascript" src="/static/js/paging3.js"></script>
<script type="text/javascript">

   var UserId =<?=json_encode($UserId)?>;
   console.log(UserId)



// 分页
var total = 150;
  $("#page").paging({
    pageNo: 1,
    totalPage: Math.ceil(total / 10),
    totalLimit: 10,
    totalSize: total,
    callback: function(num, nbsp) {
      // var searchParameters = {
      //   agentf_id: where_datas.agentf_id,
      //   agenty_id: where_datas.agenty_id,
      //   area: where_datas.area,
      //   city: where_datas.city,
      //   customertype: where_datas.customertype,
      //   devbrand_id: where_datas.devbrand_id,
      //   devfactory_id: where_datas.devfactory_id,
      //   devname_id: where_datas.devname_id,
      //   investor_id: where_datas.investor_id,
      //   province: where_datas.province,
      //   search: where_datas.search,
      //   time1: where_datas.time1,
      //   time2: where_datas.time2,
      //   usetype: where_datas.usetype,
      //   waterfactory_precode:where_datas.waterfactory_precode,
      //   waterbrand_id:where_datas.waterbrand_id,
      //   watername_id:where_datas.watername_id,
      //   watervolume:where_datas.watervolume,
      //   offset: num * nbsp - nbsp,
      //   limit: nbsp
      // }
      // Get_datas(searchParameters,num)
       // console.log(searchParameters)
    }
  })

var data=[{
  Name:'wang' ,
  Tel:11111,
  RowTime:'时间',
  State:1,//2.3
  FirstMoney:'FirstMoney',
  DrinkMoney:'喝水赏金（喝一袋多少钱）',
  Amount:'数量',
}]
list_html(data) 
  function list_html(data) {
    // body...
$.each(data, function(index, item){ 
  var State=''
    switch(Number(item.State))
        {
          case 0:
          State='即将获得'
          break;
        case 1:
           State='装机获得'
          break;
        case 2:
          State='喝水获得'
          break;
       case 3:
          State='提现审核中'
          break;
        case 4:
          State='提现失败'
          break;
        case 5:
          State='提现成功'
          break;
        case 6:
          State='退款成功'
          break;
        default:
          State=''
        }
    var html = '<td>'+index+'</td>';
    html+='<td>'+item.Name+'</td>';
    html+='<td>'+item.Tel+'</td>';
    html+='<td>'+item.Name+'</td>';
    html+='<td>'+State+'</td>';
    html+='<td>'+item.Name+'</td>';
    html+='<td>'+item.Name+'</td>';
    html+='<td>'+item.Name+'</td>';
    html+='<td>'+item.Name+'</td>';
    })
    
  }

</script>
</body>
</html>

