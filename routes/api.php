<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\usercontroller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Route::post('register' ,[usercontroller::class,'register']);

Route::group(['namespace' => 'App\Http\Controllers\Api'], function() {
    
    Route::post('register', 'authcontroller@register');
    Route::post('login', 'authcontroller@login');
    Route::post('traderregister', 'vfpckauthcontroller@traderregister');
    Route::post('traderlogin', 'vfpckauthcontroller@traderlogin');
    Route::get('traderregister', 'vfpckauthcontroller@traderregister');
    Route::get('traderregister/{id}', 'vfpckauthcontroller@showbyid');
    Route::put('traderregisterupdate/{id}', 'vfpckauthcontroller@updatebyid');
    Route::delete('traderregisterdelete/{id}', 'vfpckauthcontroller@deletebyid');
    

    
    Route::post('farmerquestion', 'farmerquestioncontroller@farmerquestion');
    Route::get('farmerquestion', 'farmerquestioncontroller@farmerquestion');
    Route::get('farmerquestion/{id}', 'farmerquestioncontroller@showbyid');
    Route::put('farmerquestionupdate/{id}', 'farmerquestioncontroller@updatebyid');
    Route::delete('farmerquestiondelete/{id}', 'farmerquestioncontroller@deletebyid');
    

    Route::post('trader', 'trader@trader');
    Route::get('trader', 'trader@trader');
    Route::get('trader/{id}', 'trader@showbyid');
    Route::put('traderupdate/{id}', 'trader@updatebyid');
    Route::delete('traderdelete/{id}', 'trader@deletebyid');
    
    Route::post('questionans', 'addqacontroller@questionans');
    Route::get('questionans', 'addqacontroller@questionans');
    Route::get('questionans/{id}', 'addqacontroller@showbyid');
    Route::put('questionansupdate/{id}', 'addqacontroller@updatebyid');
    Route::delete('questionansdelete/{id}', 'addqacontroller@deletebyid');

    Route::post('procurement', 'procurementcontroller@procurement');
    Route::get('procurement', 'procurementcontroller@procurement');
    Route::get('procurement/{id}', 'procurementcontroller@showbyid');
    Route::put('procurementupdate/{id}', 'procurementcontroller@updatebyid');
    Route::delete('procurementdelete/{id}', 'procurementcontroller@deletebyid');

    Route::post('farmergroup', 'farmergroupcontroller@farmergroup');
    Route::get('farmergroup', 'farmergroupcontroller@farmergroup');
    Route::get('farmergroup/{id}', 'farmergroupcontroller@showbyid');
    Route::put('farmergroupupdate/{id}', 'farmergroupcontroller@updatebyid');
    Route::delete('farmergroupdelete/{id}', 'farmergroupcontroller@deletebyid'); 
    
    Route::post('itemquantity','farmeraddquantitycontroller@itemquantity');
    Route::get('user','farmeraddquantitycontroller@show');
    Route::get('itemquantity/{id}','farmeraddquantitycontroller@showbyid');
    Route::put('itemquantityupdate/{id}','farmeraddquantitycontroller@updatebyid');
    Route::delete('itemquantitydelete/{id}','farmeraddquantitycontroller@deletebyid');
    
    
});



