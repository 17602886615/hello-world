<?php
namespace backend\controllers;
error_reporting(E_ALL & ~ E_NOTICE);
//设备预警
use backend\models\AdminRoleUser;
use backend\models\DevRegist;
use backend\models\DevWarning;
use yii\data\Pagination;
use yii\db\ActiveRecord;
use backend\models\Address;
use yii\db\Exception;

class ConsoleController extends BaseController
{

    public function actionIndex()
    {

//        $redis=new \Redis();
//        $redis->connect('127.0.0.1');
//        $no=$redis->get('no');
//        var_dump($no);
//        if($no!=1){


        //获取所有设备编号(去掉已初始化的和测试设备)//设备编号为0、1 的为测试设备，不用预警
        $DevNos = ActiveRecord::findBySql("select DevNo
from dev_regist
where DevNo not in (select DevNo from dev_cmd where CmdType=4 and State=1 GROUP BY DevNo)
AND DevNo <> 0 and DevNo <> 1
")->asArray()->all();


        $date = date('Y-m-d', strtotime('-15 day'));//倒退15天的日期

        //类型一.无数据上传 （没插电，信号连接问题，设备损坏），与最近上传时间，间隔超过半个月报警。
        //类型二.长期未操作 （连接正常，功能正常，但是没进行任何操作）。与最近上传时间，间隔超过半个月报警。
        //类型三.长时间未抽水 设备情况正常，能开关机，只是长时间未抽水，有抽水，未扫码视为正常，仅当长时间未抽水报警），与最近上传时间，超过半个月报警。
        //类型五.位置变更 （位置变更超过十公里预警），规则为：用户注册填写的位置信息对比当天设备上传的位置。
        //类型六.重复条码 （不同机器扫了同一条码）。

        foreach ($DevNos as $devno) {

            //半个月有没有扫码记录
            $dev_water_scan_log = ActiveRecord::findBySql("select * from dev_water_scan_log where DevNo={$devno['DevNo']} and `Date` > '$date' order by RowTime desc limit 1")->asArray()->all();
            //半个月有没有定位信息
            $location = ActiveRecord::findBySql("select * from dev_location where DevNo={$devno['DevNo']} and RowTime > '$date' ")->asArray()->all();
            //半个月有没有链接设备
            $dev_connect = ActiveRecord::findBySql("select * from dev_status where DevNo={$devno['DevNo']} and LastConnectDate > '$date' ")->asArray()->all();
            //半个月有没有操作记录
            $dev_act = ActiveRecord::findBySql("select * from dev_action_log where DevNo={$devno['DevNo']} and ActDate > '$date' order by RowTime desc limit 1 ")->asArray()->all();
            //半个月有没有抽水记录
            $dev_pump = ActiveRecord::findBySql("select * from dev_action_log where DevNo={$devno['DevNo']} and ActDate > '$date' and ActType=16  order by RowTime desc limit 1")->asArray()->all();

            //无数据上传
            //没有扫码记录、没有定位信息、没有链接设备、没有操作记录
            if (!$dev_water_scan_log && !$location && !$dev_connect && !$dev_act) {

                //判断是否该预警已经存在
                $data = ActiveRecord::findBySql("select * from dev_warning where DevNo={$devno['DevNo']} and Type='无数据上传' and (State=0 or State=1)")->asArray()->all();;

                if (!$data) {
                    $dev_warning = new DevWarning();

                    $dev_warning->DevNo = $devno['DevNo'];
                    $dev_warning->Type = '无数据上传';
                    $dev_warning->Level = 3;
                    $dev_warning->State = 0;
                    $dev_warning->UpTime = time();
                    $last_time = ActiveRecord::findBySql("select LastConnectDate,LastConnectTime from dev_status where DevNo={$devno['DevNo']} ")->asArray()->all();
//                        var_dump($last_time);exit;
                    if (!$last_time) {
                        $dev_warning->RowTime = '';
                    } else {
                        $dev_warning->RowTime = $last_time[0]['LastConnectDate'] . ' ' . $last_time[0]['LastConnectTime'];
                    }


                    $re = $dev_warning->save(false);
                    if (!$re) {
                        throw new Exception('失败1');
                    }

                }


            }


            //长期未操作
            //没有扫码记录、有定位信息、有链接设备、没有操作记录
            if (!$dev_water_scan_log && $location && $dev_connect && !$dev_act) {
                //长期未操作
//                    $data['no_action'][]=$devno['DevNo'];

                //判断是否该预警已经存在
                $data = ActiveRecord::findBySql("select * from dev_warning where DevNo={$devno['DevNo']} and Type='长期未操作' and (State=0 or State=1)")->asArray()->all();;

                if (!$data) {
                    $dev_warning = new DevWarning();
                    $dev_warning->DevNo = $devno['DevNo'];
                    $dev_warning->Type = '长期未操作';
                    $dev_warning->Level = 3;
                    $dev_warning->State = 0;
                    $dev_warning->UpTime = time();
                    $last_act_time = ActiveRecord::findBySql("select RowTime from dev_action_log where DevNo={$devno['DevNo']} order by RowTime desc limit 1 ")->asArray()->all();
                    if (!$last_act_time) {
                        $dev_warning->RowTime = '';
                    } else {
                        $dev_warning->RowTime = $last_act_time[0]['RowTime'];
                    }

                    $re = $dev_warning->save(false);
                    if (!$re) {
                        throw new Exception('失败2');
                    }
                }

            }


            //长时间未抽水
            //有定位信息、有链接设备、没有抽水记录
            if ($location && $dev_connect && !$dev_pump) {
                //长时间未抽水
//                    $data['no_water'][]=$devno['DevNo'];
                //判断是否该预警已经存在
                $data = ActiveRecord::findBySql("select * from dev_warning where DevNo={$devno['DevNo']} and Type='长期未抽水' and (State=0 or State=1)")->asArray()->all();;

                if (!$data) {
                    $dev_warning = new DevWarning();
                    $dev_warning->DevNo = $devno['DevNo'];
                    $dev_warning->Type = '长期未抽水';
                    $dev_warning->Level = 2;
                    $dev_warning->State = 0;
                    $dev_warning->UpTime = time();
                    $last_pump_time = ActiveRecord::findBySql("select RowTime from dev_action_log where DevNo={$devno['DevNo']} and ActType=16  order by RowTime desc limit 1")->asArray()->all();
                    if (!$last_pump_time) {
                        $dev_warning->RowTime = '';
                    } else {
                        $dev_warning->RowTime = $last_pump_time[0]['RowTime'];
                    }

                    $re = $dev_warning->save(false);
                    if (!$re) {
                        throw new Exception('失败3');
                    }
                }

            }


            //位置变更
            //有定位信息、有链接设备
//            var_dump($location,$dev_connect);exit;
            if ($location && $dev_connect) {
                //设备定位的经纬度
                $BaiDuLat = $location[0]['BaiDuLat'];
                $BaiDuLng = $location[0]['BaiDuLng'];

                //获取用户注册的地址
                $address = DevRegist::findOne(['DevNo' => $devno['DevNo']])->Address;
                if ($address) {
                    //获取用户用户注册时填写地址的经纬度
                    $data = $this->GetLatLng($address);
                    if ($data) {
                        $lat = $data['lat'];
                        $lng = $data['lng'];

                        //计算两个地址的距离
                        $distance = $this->getDistance($BaiDuLat, $BaiDuLng, $lat, $lng);
                        //距离超过10公里
                        if ($distance > 10) {
                            //位置变更
//                                $data['dev_address'][]=$devno['DevNo'];

                            //判断是否该预警已经存在
                            $data = ActiveRecord::findBySql("select * from dev_warning where DevNo={$devno['DevNo']} and Type='位置变更" . $distance . "公里' and (State=0 or State=1)")->asArray()->all();;
                            if (!$data) {
                                $dev_warning = new DevWarning();
                                $dev_warning->DevNo = $devno['DevNo'];
                                $dev_warning->Type = "位置变更" . $distance . "公里";
                                $dev_warning->Level = 3;
                                $dev_warning->State = 0;
                                $dev_warning->UpTime = time();
                                $time = ActiveRecord::findBySql("select RowTime from dev_location where DevNo={$devno['DevNo']}")->asArray()->all();
                                $dev_warning->RowTime = $time[0]['RowTime'];
                                $re = $dev_warning->save(false);
                                if (!$re) {
                                    throw new Exception('失败4');
                                }
                            }

                        }
                    }
                }
            }
        }

        //从扫码记录里面查询所有扫过的条码
        $datas1 = ActiveRecord::findBySql("select BarCode
from dev_water_scan_log
GROUP BY BarCode ORDER BY RowTime desc ")->asArray()->all();

        $reBarCodes = [];

        //获取同一个条码被多台设备扫过的记录（没有被注销的设备）
        if ($datas1 && is_array($datas1)) {
            foreach ($datas1 as $data1) {
                $datas2 = ActiveRecord::findBySql("select DevNo,BarCode,RowTime
from dev_water_scan_log
where BarCode='{$data1['BarCode']}'
and DevNo <> 0 and DevNo <> 1
and DevNo not in (select DevNo from dev_cmd where CmdType=4 and State=1 GROUP BY DevNo)
 GROUP BY DevNo")->asArray()->all();
                if (count($datas2) > 1) {
                    foreach ($datas2 as $v) {
                        $reBarCodes[] = $v;
                    }

                }
            }

        }


        $transaction = \Yii::$app->db->beginTransaction();
        try {
            foreach ($reBarCodes as $reBarCode) {


                //判断是否该预警已经存在
                $data = ActiveRecord::findBySql("select * from dev_warning
                    where DevNo={$reBarCode['DevNo']}
                    and Type='重复条码'
                    and (State=0 or State=1 or State=2)
                    and BarCode='{$reBarCode['BarCode']}'
                    and RowTime='{$reBarCode['RowTime']}'")->asArray()->all();

                if (!$data) {
                    $dev_warning = new DevWarning();
                    $dev_warning->DevNo = $reBarCode['DevNo'];
                    $dev_warning->BarCode = $reBarCode['BarCode'];
                    $dev_warning->Type = "重复条码";
                    $dev_warning->Level = 2;//级别2：中
                    $dev_warning->State = 0;
                    $dev_warning->UpTime = time();
                    $dev_warning->RowTime = $reBarCode['RowTime'];
                    $re = $dev_warning->save(false);
                    if (!$re) {
                        throw new Exception('失败');
                    }
                }

            }


            $transaction->commit();
//            return $this->redirect(['dev-warning/index']);
        } catch (Exception $e) {
            $transaction->rollBack();
//            var_dump('失败');
        }


        //设置redis缓存和有效时间
//            $no=1;
//            $dateStr = date('Y-m-d', time());
//            $timestamp24 = strtotime($dateStr) + 86400;
//            $redis->set('no', $no,$timestamp24-time());//设置今天有效
//
//        }


    }

    //根据地址获取经纬度
    function GetLatLng($address){
        if(!$address){
            return false;
        }
        $Url="http://api.map.baidu.com/geocoder?address=".$address."&output=json&key=96980ac7cf166499cbbcc946687fb414";
//        $Url="http://api.map.baidu.com/api?v=2.0&address=".$address."&output=json&ak=FCBpETlN4Snp2SfEl92y89WF";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $Url);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //如果把这行注释掉的话，就会直接输出
        $result=curl_exec($ch);
        curl_close($ch);
        $infolist=json_decode($result);
        $array=array();
        if(isset($infolist->result->location) && !empty($infolist->result->location)){
            $array=array(
                'lng'=>$infolist->result->location->lng,
                'lat'=>$infolist->result->location->lat,
            );
//            var_dump($array);
            return $array;
        }
        else
        {
//            var_dump('失败');
            return false;
        }

    }


    //计算距离
    public function getDistance($lat1, $lng1, $lat2, $lng2)
    {

        $earthRadius = 6367000; //approximate radius of earth in meters

        /*
        Convert these degrees to radians
        to work with the formula
        */

        $lat1 = ($lat1 * pi() ) / 180;
        $lng1 = ($lng1 * pi() ) / 180;

        $lat2 = ($lat2 * pi() ) / 180;
        $lng2 = ($lng2 * pi() ) / 180;

        /*
        Using the
        Haversine formula

        http://en.wikipedia.org/wiki/Haversine_formula

        calculate the distance
        */

        $calcLongitude = $lng2 - $lng1;
        $calcLatitude = $lat2 - $lat1;
        $stepOne = pow(sin($calcLatitude / 2), 2) + cos($lat1) * cos($lat2) * pow(sin($calcLongitude / 2), 2);
        $stepTwo = 2 * asin(min(1, sqrt($stepOne)));
        $calculatedDistance = $earthRadius * $stepTwo;

        return round($calculatedDistance/1000,2);//公里数，两位小数
    }



}
header('Location: /index.php?r=console/index');
