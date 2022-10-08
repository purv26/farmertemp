<?php


use App\Http\Controllers\UserController;
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


Route::group(['namespace' => 'App\Http\Controllers'], function() {
    Route::get('/','usercontroller@register');
    Route::get('register','usercontroller@register');
    Route::post('register','usercontroller@register_action');
    //Route::get('traderregi','usercontroller@traderregi');
    //Route::post('traderregi','usercontroller@traderregi');
    Route::get('login','usercontroller@login');
    Route::post('login','usercontroller@login_action');
    Route::get('password','usercontroller@password');
    Route::post('password','usercontroller@password_action');
    Route::get('logout','usercontroller@logout');

});
/*Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');*/

