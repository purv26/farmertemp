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

    Route::get('traderregi','tradercontroller@traderregi');
    Route::post('traderregi','tradercontroller@traderregi_action');
    Route::get('farmerquestion','questioncontroller@farmerquestion');
    Route::post('farmerquestion','questioncontroller@farmerquestion_action');

    Route::get('questionanswer','QAcontroller@questionanswer');
    Route::post('questionanswer','QAcontroller@questionanswer_action');
    Route::get('editquestion','QAcontroller@questionanswer');
    
   


    Route::get('farmerregi','farmercontroller@farmerregi');
    Route::post('farmerregi','farmercontroller@farmerregi_action');
    Route::get('procurementsender','procurementcontroller@procurementsender');
    Route::post('procurementsender','procurementcontroller@procurementsender_action');
    Route::get('Dashboard1','dashboardcontrolller@Dashboard1');
    Route::get('categoryadd','categoryaddcontroller@categoryadd');
    Route::post('categoryadd','categoryaddcontroller@categoryadd_action');
    Route::get('farmeraddquantity','additemquantity@farmeraddquantity');
   Route::post('farmeraddquantity','additemquantity@farmeraddquantity_action');
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

