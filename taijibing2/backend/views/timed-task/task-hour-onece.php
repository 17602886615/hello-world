<h1> 预警（重复条码、不正常烧水），不要关闭网页！</h1>
<script type="text/javascript" src="/static/js/jquery.min.js"></script>
<script>
$(function(){
    //获取当前的时间戳（毫秒）
    var timestamp=new Date().getTime();
    //获取今天凌晨2点的时间戳
    var timestamp2 = new Date(new Date().setHours(6,0,0,0));//早上6点
    var timestamp3 = new Date(new Date().setHours(23,59,59,0));//晚上23：59:59

  //早上6点到晚上23：59:59 每小时请求一次
    if(timestamp2<timestamp<timestamp3){
        setInterval('refreshOnTime()',60*60*1000);
    }

    });



    function refreshOnTime(){
    window.location.href="http://test.manage.taijibing.cn/index.php?r=dev-warning/warning-hour-onece";
        console.log(666);
    };




</script>




