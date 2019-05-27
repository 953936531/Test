<?php

namespace App\Http\Controllers\Home;

use App\Model\Users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(Request $request){
        $name = $request->input('name');
        $age = $request->input('age');
        $img = $request->file('img');
        move_uploaded_file($img->getPathname(),
            "upload/userImg/".$img->getClientOriginalName());

        $imgpa = "userImg/".$img->getClientOriginalName();
        $data = $request->all();
        $data['imgPath'] = $imgpa;
       $obj =  Users::create($data);
        $obj->save();
        $users = Users::all();

        return view('list')->with('users', $users);
    }
}
