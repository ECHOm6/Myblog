<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\admin\Fuser;
use App\home\Article;
use App\home\Comments;
use App\home\Acom;
use App\home\Cfuser;
use Validator;
use Session;

class HomeController extends Controller
{
/**
 * 首页文章列表
 */
public function index(){
    $data=Article::orderBy('id','desc')->paginate(5);
 
    return view('home.index',compact('data'));
}


    /**
     * regadd()注册逻辑
     * log()登录验证
     */
    public function regadd(Request  $request){
        $result=$request->all();
        
if ($request->hasFile('avatar') && $request->file('avatar')->isValid()) {
    // dd($result);
    //获取文件原名
    // dd($request->file('avatar')->getClientOriginalName());
    #getClientSize()获取文件大小
    #getClientOriginalExtension()获取后缀名
    # code...
    $path=md5(time().rand(100000,999999)).'.'.$request->file('avatar')->getClientOriginalExtension();
    $request->file('avatar')->move('./upload',$path);
    
    $result['avatar']='/upload/'.$path;
    // dd($result['avatar']);
}
        $data=Fuser::create([
            'name'=>$result['name'],
            'email'=>$result['email'],
            'phone'=>$result['phone'],
            'passwd'=>$result['passwd'],
            'avatar'=>$result['avatar']
        ]);
        
        if ($data){
          
            return redirect('/home/logup');
        }
    }
    
    public function log(Request $request){
        $res=$request->all();
        $email=Fuser::where('email',$res['email'])->get()->toArray();
        
            //    dd($email);
        $arr=[
            'email' => 'required',
            'passwd' => 'required|max:16|min:6',
        ];
        $message=[
            'email.required'=>'用户名不能为空',
            'passwd.required'=>'密码不能为空',
            'passwd.max'=>'密码最长：16',
            'passwd.min'=>'密码最短：6'

        ];
        $validator = Validator::make($res,$arr ,$message);

        if ($validator->fails()) {
            return redirect('home/logup')
                ->withErrors($validator)
                ->withInput();}
        if ($email){
            if ($email[0]['passwd']==$res['passwd']){
                Session::put([
                    'name'=>$email[0]['name'],
                    'avatar'=>$email[0]['avatar']]);
                // echo "<script>alert('login is ok');history.go(-2);</script>";
                return redirect('home/index');
            }else{
                return redirect('home/logup')->withErrors('password error!');
            }
        }else{
           return redirect('home/logup')->withErrors('this user not find');
        }
    }


    /**
     * 添加文章
     * 文章列表
     */
    public function addart(Request $request){
        $result=$request->all();
        // dd($result);
        $res=Article::create([
            'title'=>$result['title'],
            'content'=>$result['content'],
            'category'=>$result['category'],
            'author'=>Session::get('name')
        ]);
        // dd($res);
        return redirect('home/article');
        
            }
    public function article(){
        $data=Article::where('author',Session::get('name'))->orderBy('id','desc')->paginate(5);
        // $res=Article::paginate(3);
        return view('home.article',compact('data'));
    }


    /**
     * 文章详情页
     * 评论添加
     */
    public function detail($id){
        // dd($id);
        $data=Article::where('id',$id)->get();
        return view('home.detail',compact(['data']));
    }

    public function comments(Request $request){
    $result=$request->all();

    // dd($result);
     $res=Fuser::where('name',Session::get('name'))->get();
// dd($res[0]['id']);
 Cfuser::create(['uid'=>$res[0]['id']]);
    Acom::create(['aid'=>$result['aid']]);
    Comments::create(['comments'=>$result['content']]);
   
 return redirect('home/detail/'.$result['aid']);
    }
}
