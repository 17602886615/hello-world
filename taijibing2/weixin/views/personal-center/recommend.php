

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
    <title>立即推荐</title>
    <style>
    	.ativer {
    background: url(/static/images/brnW.png) 0% 0% / 100% 100% no-repeat;
    color: #fff;
}
tr{
    line-height: 20px

}  
  </style>
<body style=" background: #f3f3f3;">

<p  style="padding: 20px">
    <span class="--mb--rich-text" data-boldtype="0" style="font-family:SourceHanSansSC; font-weight:400; font-size:14px; color:rgb(16, 16, 16); font-style:normal; letter-spacing:0px; line-height:20px; text-decoration:none;">拒绝饮水机危害，拒绝桶装水危害，关注饮水健康！推荐亲戚朋友，免费获得赏金！</span>
</p>

<table style="width:100%;" cellspacing="20">
    <tr>
        <td style="    min-width: 50px;">姓名：</td>
        <td><input placeholder='必填' type="text" id="UserName"></td>
    </tr>
    <tr>
        <td>电话：</td>
        <td><input  placeholder='必填'  type="text"  id="Tel"></td>
    </tr>
    <tr>
        <td>地址：</td>
        <td><input  placeholder='选填'  type="text"  id="Address"></td>
    </tr>

</table>
  

<button class="btn submit ativer" style=" font-size:16px;display:inline-block;width:80%;margin-left:10%;height:45px;line-height:30px;text-align:center;    margin-top: 50px;">立即推荐</button>
</body>
</html>
<script type="text/javascript" src="/static/js/zepto.min.js"></script>
<script type="text/javascript" src="/static/js/coderlu.js"></script>
<script type="text/javascript" src="/static/js/common.js" ></script>
<script>
    
    $(".submit").click(function(event) {
       var UserName=$('#UserName').val()
       var Tel=$('#Tel').val()
       var Address=$('#Address').val();

       console.log(validateTel(Tel))
       if(!UserName){
             $.alert("姓名不能为空",function function_name(argument) {
                 // body...
                 // alert(8)
             })
        return false;
       } 

     if(!validateTel(Tel)){
             $.alert("请输入正确的电话号码",function function_name(argument) {
                 // body...
                 // alert(8)
             })
               return false;
        }
        var obj={
            Tel:Tel,
            Address:Address,
            UserName:UserName,
        }

        $.get('save-recommend', obj,function(data) {
            /*optional stuff to do after success */
             if(typeof(data)=='string'){
                    data= eval('(' + data + ')');
            }
            console.log(data)
            alert(4)
            if(data.state!=0){
                $.alert(data.msg);
                return;
            }

        location.href='/index.php/personal-center/my-money';
 
        });



    });
</script>