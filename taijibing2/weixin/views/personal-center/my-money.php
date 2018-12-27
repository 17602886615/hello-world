<!DOCTYPE html>
<html>
<head lang="en">
    <meta http-equiv="Content-Type" content="textml; charset=UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta HTTP-EQUIV="pragma" CONTENT="no-cache">
    <meta HTTP-EQUIV="Cache-Control" CONTENT="no-cache, must-revalidate">
    <meta HTTP-EQUIV="expires" CONTENT="0">
    <meta charset="utf-8" />
    <link rel="stylesheet" href="/static/css/common.css" />
    <link rel="stylesheet" href="/static/css/coderlu.css"/>
    <title>我的赏金</title>
    <style>
            .table_header {
          display: inline-table;
          width: 23%;
          text-align: center;

          line-height: 20px;
          border-left: 1px solid #f3f3f3;
          box-sizing: border-box;
          font-size: 12px;
          vertical-align: middle;
        }
        .table-hr{
         position: fixed;
         width: 100%;
        top: 0px;    padding: 5px;
        height: 41px;
        border-bottom: 1px solid #f3f3f3;    font-weight: bold;
        }
      .searchInit{
        padding: 0 10px;
        float: right;
      }
    </style>
</head>
<body style="">
  <div class="form">
    <div class="table-hr">
        <p style="float: left">我的赏金<span id="money">0.00</span></p>
          <button type="btn" class="mui-btn mui-btn-danger mui-btn-outlined searchInit" data="1">提现</button>
    <div class="table_bd" style="margin-top:50px;">
        <!-- <p class="red_line"><span class="table_header">小黄</span><span class="table_header">1366126875</span><span class="table_header">2017-15-15  12:20:34</span><span class="table_header">已登记</span></p> -->
           
    </div>
</div>

</div>
 </body>
<script type="text/javascript" src="/static/js/zepto.min.js"></script>
<script type="text/javascript" src="/static/js/coderlu.js"></script>
<script type="text/javascript" src="/static/js/common.js?v=1" ></script>
<script>

  // var csrfToken = csrfToken
   var csrfToken=<?=json_encode($csrfToken)?>;
  // $.$.post('', {param1: 'value1'}, function(data, textStatus, xhr) {
      $.post('get-my-money-log', {_csrf: csrfToken}, function(data) {
        /*optional stuff to do after success */

             if(typeof(data)=='string'){
                    data= eval('(' + data + ')');
            }
            if(data.state!=0){
              $.alert(data.msg)
              return;
            }
            if(data.money){
              $("#money").text(data.money)
            }

            
            


        console.log(data)
      });

</script>
 
</html>