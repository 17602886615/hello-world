<?php
error_reporting(E_ALL & ~ E_NOTICE);
header('Content-Type:text/html;charset=utf-8');

$start=[1=>'个',2=>'十',3=>'百',4=>'千',5=>'万'];
$begin=$start[mt_rand(1,5)];

$ar=[];
function show(){
    static $arr=[];
    $rand=mt_rand(0,9);
    if(!in_array($rand,$arr)){
//        $rand=substr(strval($rand+100),1,2);
        $arr[]=$rand;
        global $ar; 
        array_push($ar[],$rand);
        var_dump($ar.'&nbsp;&nbsp);exit;
    }

    if(count($arr)<5){
        show();
    }


}

function bubble_sort($array){
    $count = count($array);
    if ($count <= 0) return false;

    for($i=0; $i<$count; $i++){
        for($j=$count-1; $j>$i; $j--){
            if ($array[$j] < $array[$j-1]){
                $tmp = $array[$j];
                $array[$j] = $array[$j-1];
                $array[$j-1] = $tmp;
            }
        }
    }
    return $array;
}
show();
$red=bubble_sort($ar);
var_dump($ar);exit;
//var_dump($red);exit;
//$blue1=substr(strval(mt_rand(1,16)+100),1,2);
//$blue2=substr(strval(mt_rand(1,16)+100),1,2);

//$blue=bubble_sort([$blue1,$blue2]);
//foreach($blue as $v){
//    array_push($red,$v);
//}

//var_dump($red);exit;

echo '<div id="no" style="width: 500px;height:100px;background-color: #e6e6e6;margin:100px auto">
    <div style="width: 500px;height:40px;background-color: #e6e6e6;margin-bottom: 0;">
        
    </div>
    <h1 style="text-align: center">';
		echo $begin.'</span>&nbsp;&nbsp;';
foreach($red as $k=>$v){
    if($k<5){
        echo '<span style="color: red">'.$v.'</span>&nbsp;&nbsp;';
    }else{
        echo '<span style="color: blue">'.$v.'</span>&nbsp;&nbsp;';
    }

}
echo '</h1>
    <div  style="width:80px;height:40px;margin: auto;background-color: blue;text-align: center;cursor:pointer;border:1px solid;border-radius:15px;" id="btn"><h3 style="font: 20px/8px 微软雅黑">重新获取</h3></div>
</div>';
?>

<script type="text/javascript" src="./jquery-1.11.0.js"></script>
<script>
    $('#btn').mouseover(function(){
        $(this).css('background-color','orange');
        //$(this).css('cursor ','pointer');
    });
    $('#btn').mouseout(function(){
        $(this).css('background-color','blue');
    });
    $('#btn').click(function(){
        location.reload();
    });

</script>