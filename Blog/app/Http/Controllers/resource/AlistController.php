<?php

namespace App\Http\Controllers\resource;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\admin\Role;
use App\admin\Buser;
use Session;
// use App\home\Ac;
use App\home\Article;
use App\admin\Student;
// use App\home\Category;
class AlistController extends Controller
{

public function student(Request $request){

    Student::create([
        'name'=>'daipan',
        'classnum'=>'20193433'
]
    );
    $data=Student::all();
    foreach($data as $val){
        echo $val->id.'&nbsp'.$val->name.'&nbsp'.$val->classnum."<br>";
    }
}



    public function test3(Request $request){
        $res=$request->all();
        dd($res);
    }
public function test2(){
    $data=Article::all();
    foreach($data as $val){
        foreach($val->comments as $com ){
            echo $com->comments;
            foreach($com->cuser as $cus){
                echo $cus->avatar."<br>";
            }
        }
    }
}


    public function test1(Request $request){
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
    public function allart(){
        $data=Article::all();
return view('home.article',compact('data'));
    }






    public function index(){
$data="主页";
return view("test.index",compact('data'));
    }
    public function news(){
$data="新闻页";
return view("test.news",compact('data'));
    }
    public function product(){
$data="产品页";
return view("test.product",compact('data'));
    }



public function test6(Request $request){

    $str=$request->all();
    // dd($str);
    $aa=$str['str']+$str['str1'];
    return view('test.test',compact('aa'));
}




















    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function in()
    {
        $user = Buser::where('name','lilulu')->get();
//dd($role->id);
foreach($user as $val){
        foreach ($val->role as $per) {
          echo 'role:'.$per->id.'<br>permission:<br>';
         foreach ($per->permission as $val){
            echo $val->purl;
          }
        }
    }
    }






    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
