<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\Home;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/',[Home::class, 'index']);

// route::get('/about',[Home::class , 'about']);

// route::get('/contact',[Home::class , 'contact']);

// route::get('/services',single::class);

// route::get('/project' ,single::class);


// route::get('/about' , function(){
//     return view('about');
// });

// route::get('/services' , function(){
//     return view('services');
// });

// route::get('/project' , function(){
//     return view('project');
// });

// route::get('/page' , function(){
//     return view('page');
// });

// route::get('/contact' , function(){
//     return view('contact');
// });

route::get('/customer' ,[home::class , 'view']);

route::get('/' , [home::class , 'index']);
route::post('/' , [home::class , 'store']);

route::get('/dlt_record/{id}',[home::class , 'dlt']);
route::get('/edit_record/{id}' ,[home::class , 'edit']);
route::post('update_data/{id}', [home::class , 'update_data']);