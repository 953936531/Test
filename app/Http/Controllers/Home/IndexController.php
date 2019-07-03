<?php

namespace App\Http\Controllers\Home;

use App\Model\Users;
use App\Model\Orders;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Exception\GuzzleException;

class IndexController extends Controller
{

    public function Index(Request $request){

        $url = 'https://mp.jsmdiamond.com/api/v1/testSuDo?endpoint=http://e.lixiaocrm.com&user_token=d4e91470ca4c9aea0b293528cf592a39&version_code=3.13.0&device=wxwork&id=35403639';
        $data = '';
        try{
            $data = $this->get($url);
        }catch (GuzzleException $e){
            return '异常';
        }
        $orders = json_decode($data,true);

        if ($orders['code'] != '200'){
            $outPutReult = array(
                'code'=>'401',
                'message'=>'服务器繁忙请稍后再试'
            );
            return view('list',['dakey'=>$outPutReult]);
        }
        $newData = json_decode($data,true);
       $orderAll = $newData['data'];
        $delIdArr = array(); /* 存放需要删除的合同ID */
        $uniq = null;        /* delIdArr数组去重后的赋值 */
        if (!empty($orderAll)) {  /* 判断合同不为空执行否则返回失败 */
            if (count($orderAll) == 1) {   /* 判断合同数据只有一条直接执行success返回 */
                $pric = 0;
                foreach ($orderAll as $f => $p){
                    $pric += $p['total_amount'];
                }

                $outPutReult = array(
                    'code'=>'200',
                    'amount'=>$pric,
                    'data'=>$orderAll
                );
                return view('list',['dakey'=>$outPutReult]);
            } else {
                foreach ($orderAll as $key => $value) {  /* 遍历所有合同 */
                    $validation = false; /* 需要验证当前合同ID是否在删除ID数组 */
                    $total_amount = 0;   /* 合同总价变量 */

                    if (empty($value)){
                        continue;
                    }

                    if (!empty($uniq)) {
                        foreach ($uniq as $g => $h) {
                            if ($value['id'] == $h) {
                                $validation = true;
                                continue;
                            }
                        }
                        if ($validation == true) {
                            continue;
                        }
                    }

                    $test = false;  /* 为true会执行将两个合同总价加在一起，并对delIdArr数组进行去重 */
                    $product = $value['product_assets_for_new_record'];  /* 合同下产品赋值 */
                    foreach ($product as $c => $n) {
                        $productAmount = 0;
                        if ($n['product']['product_category']['name'] == 'KDC产品'){
                            unset($orderAll[$key]);
                            continue;
                        }


                        foreach ($orderAll as $s => $p) {
                            if (empty($p)){
                                continue;
                            }
                            $nml = false;

                            if ($value['id'] != $p['id']) {  /* 判断合同ID不等于当前合同ID */
                                $compareData = $p['product_assets_for_new_record'];
                                foreach ($compareData as $q => $e) {
                                    if ($n['product_no'] == $e['product_no']) {
                                        $nml = true;
//                                        $total_amount = $p->total_amount; /* 合同价格 */
                                        $orderAll[$key]['product_assets_for_new_record'][$c]['quantity'] =  $orderAll[$key]['product_assets_for_new_record'][$c]['quantity'] + $e['quantity'];  /* 产品数量 */
                                        $orderAll[$key]['product_assets_for_new_record'][$c]['total_price'] = $orderAll[$key]['product_assets_for_new_record'][$c]['total_price'] + $e['total_price'];  /* 产品价格 */
                                        $delIdArr[] = $p['id'];  /* 合同ID赋值到$delIdArr数组 */
                                        $test = true;
                                    }
                                }
                            }

                            if($nml){
                                $productAmount = $productAmount + $p['total_amount'];
                            }

                        }
                         $total_amount = $productAmount;
                    }
                    if ($test) {
                        $orderAll[$key]['total_amount'] = $orderAll[$key]['total_amount'] + $total_amount;

                        if (!empty($delIdArr)) {
                            $uniq = array_unique($delIdArr);
                        }
                    }

                }

                /* 遍历合同数组，同时遍历delArr去重后的uniq数组，判断合同ID存在于uniq数组里的，执行删除 */
                if (!empty($uniq)){
                    foreach ($orderAll as $z => $f) {
                        foreach ($uniq as $u => $o) {
                            if ($f['id'] == $o) {
                                unset($orderAll[$z]);
                            }
                        }
                    }
                }
            }

        }else{
            $outPutReult = array(
                'code'=>'404',
                'message'=>'您目前没有订单'
            );
            return view('list',['dakey'=>$outPutReult]);
        }
        $pric = 0;
        foreach ($orderAll as $f => $p){
            $pric += $p['total_amount'];
        }
        $outPutReult = array(
            'code'=>200,
            'amount'=>$pric,
            'data'=>$orderAll
        );
        return view('list',['dakey'=>$outPutReult]);
    }

    public function Test(Request $request){
        return view('index');
    }

    public function Test1(Request $request){
        $info = $request->all();

        dd($_FILES['file']);
        move_uploaded_file($info['path'],'imgs/1.jpg');
        dd('成功');

        return view('index');
    }
}
