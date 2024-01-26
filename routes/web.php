<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\menuController;
use App\Http\Controllers\deliverdOrderController;
use App\Http\Controllers\inProgressOrderController;
use App\Http\Controllers\userController;
use App\Http\Controllers\loginController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('website.home');
});

Route::get('/adminPanel', function () {
    return view('admin.homePage');
});
Route::resource('/driver', DriverController::class);
Route::resource('/menu', menuController::class);
Route::resource('/deliverdOrder', deliverdOrderController::class);
Route::resource('/inProgressOrder', inProgressOrderController::class);
Route::resource('/user', userController::class);
Route::resource('/login', loginController::class);

// routes/web.php

Route::get('/open-popup', 'PopupController@openPopup')->name('open.popup');

