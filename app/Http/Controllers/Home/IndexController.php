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
        return view('index');
    }

    public function Test(Request $request){
        return view('test');
    }

    public function Test1(Request $request){
        $info = $request->all();
        $link = $info['link'];

        $result = $this->get($link);
        dd($result);
        return view('index');
    }

    public function Test2(Request $request){
        $url = 'https://oa.jsmdiamond.com';

        try{
            $data = $this->get($url);
        }catch (GuzzleException $e){
            return $e;
        }

        return $data;
    }

}
