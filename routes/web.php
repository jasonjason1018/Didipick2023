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
//前台Web
Route::get('/', function () {
    return view('index');
});

//前台Ajax
Route::post('/ajax_index', 'IndexController@ajax_index');




//後台Web
Route::get('/_managre', function(){
    return view('Admin.login');
});

Route::get('/ckeditor123', function(){
    return view('Admin.ckeditor');
});

// Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
Route::group(['prefix' => 'managre'], function () {    
    $path_info = explode('managre/', request()->getPathInfo())[1] ?? '';
    Route::get('/'.$path_info, function(){
        $path_info = explode('managre/', request()->getPathInfo())[1] ?? '';
        $content = 'get_' . $path_info . '();';
        return view('Admin.index', ['content'=>$content]);;
    });    
});

Route::get('/test', function(){
    return view('test');
});


//後台Ajax
Route::group(['prefix' => '/ajax/managre'], function () { 
    Route::post('/login', 'ManagreAjaxController@login');
    $path_info = explode('managre/', request()->getPathInfo())[1] ?? '';
    Route::post('/'.$path_info, 'ManagreAjaxController@'.$path_info);
});

//後台編輯頁取得資料
Route::group(['prefix' => '/get_edit/managre'], function(){
    $path_info = explode('managre/', request()->getPathInfo())[1] ?? '';
    Route::post('/'.$path_info, 'ManagreEditController@'.$path_info);
});

//後台編輯頁
Route::group(['prefix' => '/edit/managre'], function(){
    $path_info = explode('managre/', request()->getPathInfo())[1] ?? '';
    Route::get('/'.$path_info , function(){
        $path_info = explode('managre/', request()->getPathInfo())[1] ?? '';
        $content = $path_info . '_edit();';
        $is_edit = explode('/', $path_info);
        if(count($is_edit) > 1){
            $path_info = $is_edit[0];
            $content = $path_info . '_edit('.$is_edit[1].');'??"";
        }
        return view('Admin.index', ['content'=>$content]);;
    });
});