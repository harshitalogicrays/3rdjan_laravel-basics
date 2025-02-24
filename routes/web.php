<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\firstController;
use App\Http\Controllers\layoutDemoController;
//http://127.0.0.1:8000/ - base URL
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/student',function(){
//     return "student route called";
// });

// Route::get('/student/course',function(){
//     return "student course route called";
// });
//dynamic parameter
// Route::get('/student/course/{id}',function($id){
//     return "dynamic parameter called $id";
// });

// Route::get('/student/course/{id}/{name}',function($id,$name){
//     return "dynamic parameter called $id and $name";
// });

// Route::get('/product/{id}/{title}',function($id,$name){
//     return "product route called -  $id $name";
// })->where('id','[\d]+')->whereAlpha('title');


// Route::get('/product/{id}/{title?}',function($id,$name="NA"){
//     return "product route called -  $id $name";
// })->where('id','[\d]+')->whereAlpha('title');

// Route::redirect('login', 'logout',301);

// Route::fallback(function(){
//     return "something went wrong";
// });

////////////////////////controller/////////////////////////

// Route::get('/',[firstController::class,'index']);

// Route::get('/student/course/{id}',[firstController::class,'student']);

// Route::get('/home',[layoutDemoController::class,'index']);
// Route::get('/about',[layoutDemoController::class,'about']);

Route::controller(layoutDemoController::class)->group(function(){
    Route::get('/','index');
    Route::get('/about','about');
    Route::get('/products','products');
    Route::get('/signin','login');
    Route::get('/register','register');

}); 