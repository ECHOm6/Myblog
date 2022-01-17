<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/info',function(){echo phpinfo();});
Route::get('/', function () {
    return view('welcome');

});
/**
 * 前台逻辑
 */
Route::group(['prefix'=>'/home','namespace'=>'home'],function(){
    Route::any('/index','HomeController@index');
    Route::any('/logup',function(){return view('home.logup');});
    Route::any('/logout',function(){Session::pull('avatar');Session::pull('name'); return redirect('home/index');});
    Route::any('/regadd','HomeController@regadd')->name('register');
    Route::any('/log','HomeController@log')->name('log');

        Route::group(['middleware'=>'isLogin'],function(){
    Route::any('/article','HomeController@article');
    Route::any('/addart','HomeController@addart')->name('addart');
    Route::any('/resource',function(){return view('home.resource');});
    Route::any('/timeline',function(){return view('home.timeline');});
    Route::any('/about',function(){return view('home.about');});
    Route::any('/publicart',function(){return view('home.publicart');});
    #文章详情
    Route::any('/detail/{id}','HomeController@detail');
    #添加评论
    Route::any('/comments','HomeController@comments')->name('comments');
   });
});


/*
 * blogMS system
 */
Route::group(['prefix'=>'admin','namespace'=>'admin'],function(){
    #验证用户是否登录
    Route::any('/logdata','IndexController@logdata')->name('logdata');
    Route::any('/login',function (){ return view('admin.login');});

        #isLog中间件--检查后台用户是否登录
        Route::group(['middleware'=>'isLog'],function(){

    Route::any('/logout',function (){ Session::pull('admin');return redirect('admin/login'); })->name('logout');
    Route::any('/index',function (){return view('admin.index');});
    Route::any('/welcome',function (){return view('admin.welcome');});
    Route::any('/role-add',function (){return view('admin.role-add');});

        #isRoute中间件--权限检查
        Route::group(['middleware'=>'isRoute'],function(){

    #博客用户列表
    Route::any('/menber-list','AdminController@menberlist');
    Route::any('/addmenber','AdminController@addmenber');
    #文章列表
    Route::any('/articlelist','AdminController@articlelist');

    #管理员列表
    Route::any('/admin-list','AdminController@alist');
    Route::any('/alike','AdminController@alike')->name('alike');
    Route::any('/admin-add','AdminController@addrole');
    Route::any('/admin-edit/{id}','AdminController@aedit');
    Route::any('/addedit','AdminController@addedit');


    #角色列表
    Route::any('/admin-role','AdminController@role');


    #权限列表
    Route::any('/admin-rule','AdminController@rule');

    #权限分类列表
    // Route::any('/admin-cate','AdminController@cate');

    #逻辑添加和删除
    Route::any('/add','AdminController@add')->name('add');
    Route::any('/del/{id}/{class}','AdminController@del');
    Route::any('/delall/{ids}/{class}','AdminController@delall');

});
});
});

/**
 * 逻辑测试路由
 */
Route::group(['prefix' => 'test','namespace'=>'resource'],function (){
       Route::any('/index','AlistController@index');
       Route::any('/news','AlistController@news');
       Route::any('/product','AlistController@product');
       Route::any('/test1','AlistController@test1')->name('test1');
       Route::any('/test2','AlistController@test2')->name('test2');
       Route::any('/test3','AlistController@test3')->name('test3');
       Route::any('/student','AlistController@student')->name('student');
       Route::any('/test5','AlistController@test5')->name('test5');

       Route::any('/test6','AlistController@test6')->name('test6');

        Route::any('/test8',function(){return view('test.test8');});
        Route::any('/test7',function(){return view('test.test');});
});





