<?php

namespace App\Http\Controllers\Home;

use App\Model\Users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    private $APPseret = '37191513daf6013987190c1df3288f44';
    public function Index(Request $request){

//        $ip = $_SERVER["REMOTE_ADDR"];
//        dd($ip);
//
//        $url='https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=wx2af68763f70f0a4b&secret=37191513daf6013987190c1df3288f44';
//        $html = file_get_contents($url);
//       dd($html);
        return view('index');
    }

    public function Test(Request $request){

    }
}
