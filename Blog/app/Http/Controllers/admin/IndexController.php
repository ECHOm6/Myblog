<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\admin\Buser;
use Session;

class IndexController extends Controller
{

    public function logdata(Request $request){
        $result=$request->all();
        $data=Buser::where('name',$result['name'])->get();
        // dd($data);
#手动创建验证
        $arr=[
            'name' => 'required|max:16',
            'passwd' => 'required|max:16|min:6',
        ];
        $message=[
            'name.required'=>'用户名不能为空',
            'name.max'=>'用户名最大长度：16字符',
            'passwd.required'=>'密码不能为空',
            'passwd.max'=>'密码最长：16',
            'passwd.min'=>'密码最短：6'

        ];
        $validator = Validator::make($result,$arr ,$message);

        if ($validator->fails()) {
            return redirect('admin/login')
                ->withErrors($validator)
                ->withInput();
        }else {
            if($data && $request['passwd'] == $data[0]['passwd']) {
                Session::put(['admin'=>'Y','adminname'=>$request['name']]);
              
                foreach($data as $val){
                    foreach ($val->role as $per) {
                        foreach ($per->permission as $key){
                       $arr[]=$key->purl;
                        
                      }
                    }
                }
                $arr=array_unique($arr);
               Session::put('array',$arr);
                // dd(Session::get('array'));
                return redirect('admin/index');


            } else {
                return redirect('admin/login')->withErrors('user not find or passwd error');
            }

        }
    }

}
