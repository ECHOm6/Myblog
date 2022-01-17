<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\admin\Buser;
use App\admin\Role;
use App\admin\Rp;
use App\admin\Ur;
use App\admin\Fuser;
use App\home\Article;
use App\home\Acom;
use App\home\Cfuser;
class AdminController extends Controller
{
    /**
     *前台用户列表
     */
    public function menberlist(){
        $data=Fuser::paginate(5);
        return view('admin.menber-list',compact('data'));
    }
    public function addmenber(){
        $result=Fuser::all();
        dd($result);
    }

    /**
     * 前台文章列表
     */
    public function articlelist(){
        $data=Article::paginate(5);
        return view('admin.article-list',compact('data'));
    }
    /**
     * usestop
     */


/**
 * 管理员添加页面的角色复选列表
 */
public function addrole(){
    $roles=Role::all();
    return view('admin.admin-add',compact('roles'));
}

/**
 * 模糊查询aupdate()
 */
    public function alike(Request $request){
        $result=$request->all();
//        $res=$request->input('username');
        $data=Buser::where('name','like','%'.$result['username'].'%')->paginate(2);
//dd($data);
        /**
         * laravel社区提示分页数据没有传参
         */
        return view('admin.admin-list',compact('data'));
    }

    /**
     * @param Request $request
     * 角色和管理员添加add()
     */
    public function add(Request $request){
     $result=$request->all();
//dd($result['id']);
switch($result['class'])
    {
        case 'role':
    $res=Role::create([
            'name'=>$result['name'],
            'des'=>$result['des']
        ]);
        $res=Role::where('name','=',$result['name'])->get()->toArray();
        $rid=$res[0]['id'];
        foreach ($result['id'] as $id){
           Rp::create([
               'rid'=>$rid,
               'pid'=>$id

           ]);
        }
        break;
        case 'user':
            $res=Buser::create([
                'name'=>$result['name'],
                'phone'=>$result['phone'],
                'email'=>$result['email'],
                'passwd'=>$result['repass']
            ]);
            $uid=Buser::where('name','=',$result['name'])->get()->toArray();
            foreach ($result['id'] as $id){
                Ur::create([
                    'uid'=>$uid[0]['id'],
                    'rid'=>$id

                ]);
            }
            break;

    }
       if($res){
           $data=[
             'status'=>0,
             'message'=>'添加成功'
           ];
      }else{
           $data=[
               'status'=>1,
               'message'=>'添加失败'
           ];
       }
return $data;
    }


    /**
     * 管理员列表alist()
     * 角色列表role()
     * 权限列表rule()
     */
    public  function alist(){
        $data=Buser::paginate(5);
//        dd($data);
        return view('admin.admin-list',compact('data'));
    }
    public function role(){

        $data=Role::paginate(2);
        return view('admin.admin-role',compact('data'));
    }
    public function rule(){
        $data=DB::table('b_permission')->get();
//        dd($data);
        return view('admin.admin-rule',compact('data'));
    }

    /**
     * 管理员编辑
     *
     */
    public function aedit($id){
        // dd($id);
        $data=Buser::where('id',$id)->get();
        // dd($data);
        $role=Role::all();
        return view('admin.admin-edit',compact('data','role'));

    }
    public function addedit(Request $request){
        $result=$request->all();
        // dd($result);
        #更新用户表数据
        $userupdate=Buser::where('id',$result['id'])->update([
            'phone'=>$result['phone'],
            'email'=>$result['email'],
            'passwd'=>$result['repass']
        ]);
      #删除角色用户关联表记录在进行插入
      $urdel=Ur::where('uid',$result['id'])->delete();
      foreach($result['ids'] as $val){
      $urinsert=Ur::create([
          'uid'=>$result['id'],
          'rid'=>$val
      ]);
      }
if($userupdate && $urdel && $urinsert){
    $data=[
        'status'=>0,
        'message'=>'编辑成功'
    ];
}else{
    $data=[
        'status'=>1,
        'message'=>'编辑失败'
    ];
    return $data;
}
    }


    /**
     * 所有的逻辑删除
     * del()单个删除
     * dellall()批量删除
     */
    public function del($id,$class){
        switch($class){
            case 'user':
       $result= Buser::where('id',$id)->delete();
       $relationship=Ur::where('uid',$id)->delete();
            break;
            case 'role':
        $result= Role::where('id',$id)->delete();
        $relationship=Rp::where('rid',$id)->delete();
            break;
            case 'fuser':
                $result=Fuser::where('id',$id)->delete();
               
                $relationship="ture";
            break;
            case 'article':
                Article::where('id',$id)->delete();

                $res=Acom::where('aid',$id)->get()->toArray();

               $arr=[];
               foreach($res as $val){
                  $arr[]=$val['cid'];
               }

           $result= Cfuser::whereIn('cid',$arr)->delete();
            $relationship=Acom::where('aid',$id)->delete();
// dd($result);
                break;
    }
        if ($result && $relationship){
            $data=[
                'status'=>0,
                'message'=>'删除成功'
            ];
        }else{
            $data=[
                'status'=>1,
                'message'=>'删除失败'
            ];
        }
        return $data;
    }
    public function delall($ids,$class){
        $ids=explode(',',$ids);
        // dd($ids);
        switch($class){
            case 'role':
            $result= Role::whereIn('id',$ids)->delete();
            $relationship=Rp::whereIn('rid',$ids)->delete();
            break;
            case 'user':
            $result=Buser::whereIn('id',$ids)->delete();
            $relationship=Ur::whereIn('uid',$ids)->delete();
            break;
            case 'fuser':
            $result=Fuser::whereIn('id',$ids)->delete();
            break;
    }
        if ($result && $relationship){
            $data=[
                'status'=>0,
                'message'=>'批量删除成功'
            ];
        }else{
            $data=[
                'status'=>1,
                'message'=>'批量删除失败'
            ];
        }
        return $data;
    }
}
