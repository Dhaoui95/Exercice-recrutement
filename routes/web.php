<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\HomeController;

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
/*
Route::get('/', function () {
    return view('welcome');
});

*/
Route::post('/auth/save',[MainController::class, 'save'])->name('auth.save');
Route::post('/auth/check',[MainController::class, 'check'])->name('auth.check');
Route::get('/auth/logout',[MainController::class, 'logout'])->name('auth.logout');




Route::group(['middleware'=>['AuthCheck']], function(){
    Route::any('/',[HomeController::class, 'getHome'])->name('Get.home'); 
    //probleme de route undefined

    Route::get('/',[MainController::class, 'dashboard']);
    Route::get('/get/video',[HomeController::class, 'getVideo'])->name('get.video');
    Route::get('/contact',[HomeController::class, 'getContact'])->name('Get.conatct');
    Route::post('/contact/add',[HomeController::class, 'addContact'])->name('add.conatct');


    Route::get('/auth/login',[MainController::class, 'login'])->name('auth.login');
    Route::get('/auth/register',[MainController::class, 'register'])->name('auth.register');

   
   
   
});
