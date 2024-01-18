<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DriverController;
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

// routes/web.php

Route::get('/open-popup', 'PopupController@openPopup')->name('open.popup');

