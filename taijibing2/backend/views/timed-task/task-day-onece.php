<h1> 预警（无数据上传、长期未操作、长期未抽水、位置变更），不要关闭网页！</h1>
<script type="text/javascript" src="/static/js/jquery.min.js"></script>
<script>
$(function(){
    //获取当前的时间戳（毫秒）
    var timestamp=new Date().getTime();
    //获取今天凌晨2点的时间戳
    var timestamp2 = new Date(new Date().setHours(2,0,0,0));//早上2点
    var timestamp3 = new Date(new Date().setHours(3,30,0,0));//早上3：30点

  //早上2点到早上3：30 每小时请求一次
    if(timestamp2<timestamp<timestamp3){
        setInterval('refreshOnTime()',60*60*1000);
    }

    });



    function refreshOnTime(){
    window.location.href="http://test.manage.taijibing.cn/index.php?r=dev-warning/warning-day-onece";
        console.log(666);
    };




</script>




