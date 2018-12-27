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
        .container{
            position: relative;
            width:320px;
            height:100%;
            background:white;
            /*padding-left:10px;*/
            /*padding-right:10px;*/
            margin:0 auto;
            margin-bottom:100px;
                padding: 1px 10px 20px 10px;
        }
        .has_drink{
            width:240px;
            height:240px;
            background-image:url("/static/images/drink_warn.png");
            background-position: center;
            background-repeat: no-repeat;
            background-size:240px 240px;
            margin:0 auto;
            padding-top:100px;
            margin-top:40px;
        }
        .has_drink p{
            text-align:center;
        }
        .warn-color{
            color:#ffa04a;
        }
        .drink_detail p{
            font-size:14px;
            text-align:center;
            height:20px;
            line-height:20px;
        }
        .blue-color{
            color:#2da0f8;
        }
        .drink_content{
            background:#f4fafe;
            position:relative;
            padding-top:20px;
            padding-bottom:20px;
            margin-top:40px;
            border:1px solid #f3f3f3;
            border-radius: 2px;
        }
        .drink_detail{
            position:relative;
        }

        .footer{
            position:fixed;
            width:100%;
            bottom:20px;
            height:60px;
            padding-left:10px;
            padding-right:10px;
        }
        @media screen and (max-width:321px){
                .has_drink{
                    width:240px;
                    height:240px;
                    background-size:240px 240px;
                    padding-top:80px;
                }
                .container{
                    width:300px;
                }
            }
         #header{
            height: 65px;
            width: 100%;
            background-color: #f3f3f3;
         }  
         #header p{
            font-size: 12px;
            text-align: center;color:#666;
            line-height: 24px;
         } 
         .pullLeft{
            width:75px;padding: 5px;
             text-align: center;
             box-sizing: border-box;
             float: left;    height: 100%;

         }
          .pullLeft img{
            width:25px; margin-top:5px;
          }

        
         a{-webkit-tap-highlight-color:rgba(0,0,0,0.3);}
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
    <div id="header" class="">
          <a href="https://g.eqxiu.com/s/bEYsklAp">
               <div class="pullLeft">
                   <img src="/static/images/kaidian.png" alt="" >
                   <p>我要开店</p>
               </div>
          </a>
          <a href="https://c.eqxiu.com/s/h5erpgVL">
               <div class="pullLeft" style='float: right'>

                   <img src="/static/images/songli.png" alt="" >
                   <p>免费赠机</p>
               </div>
          </a>
    </div><!-- /header -->
<div class="container">   <div class="has_drink">
            <p class="warn-color" style="font-size:14px;">今日已喝水</p>
            <p class="warn-color" style="font-size:40px;"><?=$today_info->total ?></p>
            <p style="color:#aecde8;">目标:<?=$user->waterplan?>毫升</p>
        </div>
        <div class="drink_detail">
            <div style="text-align: center;position:absolute;top:-30px;z-index:10;width:100%;"><img src="/static/images/shuidi.png" style="height:50px;"/></div>
            <div class="drink_content">
                <p class="blue-color">实时水质:优</p>
                
                <?php
                    if($today_info->tds>0){
                        echo '<p class="blue-color">tds:'.$today_info->tds.'</p>';
                    }
                    if($today_info->lastinterval>0){
                        echo ' <p>离上次补水已过'.$today_info->lastinterval.',赶紧喝个水吧</p>';
                    }
                ?>
                <p>18:00~20:00需补水<span class="warn-color">300毫升</span></p>
            </div>
        </div>
</div>
<div class="footer">
    <div style=" position:relative; width:100%;margin:0 auto;height:100%;line-height:60px;">
		<a href="/index.php/personal-center/setting"><img src="/static/images/person.png" /></a>
		<a href="/index.php/personal-center/drink-monitor"><img src="/static/images/drink.png" style="width:47px"/></a>
		<a href="/index.php/personal-center/drink-chart"><img src="/static/images/chart.png"/></a>
		<a href="/index.php/personal-center/my-water-ticket"><img src="/static/images/ticket.png"  style="width:47px"/></a>
    </div>
</div>
<script type="text/javascript" src="/static/js/vue.min.js"></script>
<script type="text/javascript" src="/static/js/zepto.min.js"></script>
<script type="text/javascript" src="/static/js/coderlu.js"></script>
<script type="text/javascript" src="/static/js/common.js" ></script>
<script>



  $.get('/index.php/personal-center/get-new-address', function(data) {
    /*optional stuff to do after success */
        if(typeof(data)=='string'){
        data= eval('(' + data + ')');
    }
    var num = $(".footer a").length;
    console.log(data)
    var displayNUM=0;
    var data =data.data
    for(var i=0;i<num;i++){
          var Url =$(".footer a").eq(i).attr('href');
          displayNUM++
                console.log(Url)

                if(data.content_address.length){
                   for(var y=0;y<data.content_address.length;y++){
                    console.log()
                      var itemUrl =data.content_address[y].content_address;
                      console.log(itemUrl)
                      if(Url==itemUrl){
                        console.log(99999)
                        if(data.IsUse*1==0){
                             console.log(i)
                             displayNUM--
                             $(".footer a").eq(i).css('display','none')
                              break
                         }else{
                             $(".footer a").eq(i).css('display','inline-block')
                              break
                         }
                        
                      }else{
                        console.log(888888)
                         $(".footer a").eq(i).css('display','inline-block')
                        continue
                      }

                   }                  
                 }else{
                   $(".footer a").eq(i).css('display','inline-block')
                        continue
                 }

     }
     console.log(displayNUM);
     $(".footer a").css('width',parseInt(100/displayNUM-2)+'%')
  });

    // var  displayNUM = $(".footer a[display=block]").length;
    // console.log(displayNUM)



</script>
</body>
</html>