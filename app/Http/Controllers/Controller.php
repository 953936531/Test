<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

        public function upload($request,$filed='file',$dir='images',$disks='public')
    {
    	//判断是否有文件上传   是否是有效文件
        if($request->hasFile($filed) && $request->file($filed)->isValid()){
            //获取文件信息
            $head_img = $request->file($filed);
            //保存   参数1:文件目录  参数2:文件系统 查看comfig\filesystemss.php
            $path = $head_img->store($dir,$disks);
            //删除文件 Storage::disk('public')->delete('file.jpg');
            return $path;
        }
        return '';
    }
}
