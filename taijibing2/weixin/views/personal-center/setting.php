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
    <title>个人中心</title>
    <style>
        body{
            background:#f3f3f3;
        }
        .item{
            height:40px;
            line-height:40px;
            border-bottom: 1px solid #f3f3f3;
            position:relative;
        }
        .container{
            background:white;
            padding-left:20px;
            padding-right: 20px;
            margin-top:20px;
        }
        .line-val{
            display:inline-block;
            font-size:16px;
            color:#cccccc;
            height:40px;
            line-height: 40px;
            right:14px;
            position:absolute;
        }
        .line-title{
            display:inline-block;
        }
        .arrow-gray_right{
            display:inline-block;
            width:8px;
            height:16px;
            background-size:8px 16px;
            background-repeat:no-repeat;
            background-position: center;
            background-image: url("/static/images/arrow_right.png");
            position: absolute;
            right:0px;
            top:11px;
        }
            .footer{
            position:fixed;
            width:100%;
            bottom:20px;
            height:60px;
            padding-left:10px;
            padding-right:10px;
        }
             .footer a  {
                  width: 32%;
                   display:none;
                  box-sizing: border-box;
                  text-align: center;    position: relative;
             }
          .footer a img{
          height:44px;
         }
    </style>
</head>
<body>
<div class="container">
    <div class="item">
        <span class="line-title">名字</span>
        <span class="line-val"><?=$info->name?></span>
    </div>
    <div class="item">
        <span class="line-title">手机号码</span>
        <span class="line-val"><?=$info->mobile?></span>
    </div>
    <div class="item">
        <span class="line-title">地址</span>
        <span class="line-val"><?=$info->addr?></span>

    </div>
    <div class="item" id="drink_c">
        <span class="line-title">我的饮水计划</span>
        <span class="line-val"><span id="plan_vl"><?=$info->waterplan?></span>ml</span>
        <i class="arrow-gray_right"></i>
    </div>
    <div class="item"  id="drink_P">
        <span class="line-title" >推荐有奖</span>
        <i class="arrow-gray_right"></i>

    </div>
    <div class="item"  id="drink_L">
        <span class="line-title">我的赏金 </span>
        <span class="line-val" id="money">0</span>
         <i class="arrow-gray_right"></i>
    </div>


</div>
<div class="footer">
    <div style=" position:relative; width:100%;margin:0 auto;height:100%;line-height:60px;">
		<a href="/index.php/personal-center/setting"><img src="/static/images/person.png" /></a>
		<a href="/index.php/personal-center/drink-monitor"><img src="/static/images/drink.png" style="width:47px"/></a>
		<a href="/index.php/personal-center/drink-chart"><img src="/static/images/chart.png"/></a>
		<a href="/index.php/personal-center/my-water-ticket"><img src="/static/images/ticket.png"  style="width:47px" /></a>
    </div>
</div>

<script type="text/javascript" src="/static/js/vue.min.js"></script>
<script type="text/javascript" src="/static/js/zepto.min.js"></script>
<script type="text/javascript" src="/static/js/coderlu.js"></script>
<script type="text/javascript" src="/static/js/common.js" ></script>
<script>
    var volArr=["2100","1800","1500","1300","1100","900"];
    $(function(){
        $("#drink_c").on("click",function(){
            $.showActionSheet(volArr,function(index){
                $("#plan_vl").text(volArr[index]);
                $.showIndicator();
                $.getJSON("/index.php/personal-center/savewaterplan?ml="+volArr[index],function(data){
                    $.hideIndicator();
                    if(data.state!=0){
                        $.toast(data.desc);
                        return;
                    }
                });
            })
        });
        $("#drink_P").on("click",function(){
            location.href='/index.php/personal-center/recommend-prizes';
        });
         $("#drink_L").on("click",function(){
            location.href='/index.php/personal-center/my-money';
        });

  $.get('/index.php/personal-center/get-money', function(data) {
     if(typeof(data)=='string'){
        data= eval('(' + data + ')');
    }
    console.log(data)
    if(data.state!=0){
      $.alert(data.msg)

      return false;
    }
    if(data.money){
        $("#money").text(data.money)
    }else{
       $("#money").text(0)
    }

  })



  $.get('/index.php/personal-center/get-new-address', function(data) {
    /*optional stuff to do after success */
        if(typeof(data)=='string'){
        data= eval('(' + data + ')');
    }
    var num = $(".footer a").length;
    // console.log(data)
    var displayNUM=0;
    var data =data.data
    for(var i=0;i<num;i++){
          var Url =$(".footer a").eq(i).attr('href');
          displayNUM++
                // console.log(Url)

                if(data.content_address.length){
                   for(var y=0;y<data.content_address.length;y++){
                    // console.log()
                      var itemUrl =data.content_address[y].content_address;
                      // console.log(itemUrl)
                      if(Url==itemUrl){
                        // console.log(99999)
                        if(data.IsUse*1==0){
                             // console.log(i)
                             displayNUM--
                             $(".footer a").eq(i).css('display','none')
                              break
                         }else{
                             $(".footer a").eq(i).css('display','inline-block')
                              break
                         }
                        
                      }else{
                        // console.log(888888)
                         $(".footer a").eq(i).css('display','inline-block')
                        continue
                      }

                   }                  
                 }else{
                   $(".footer a").eq(i).css('display','inline-block')
                        continue
                 }

     }
     // console.log(displayNUM);
     $(".footer a").css('width',parseInt(100/displayNUM-2)+'%')
  });



    });

</script>
</body>
</html>