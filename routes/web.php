<?php
// routes/web.php
use Illuminate\Support\Facades\Route;

Route::get('simple-slider', function () {
    return view('simpleSlider::slider');
})->name('simple-slider');
//Route::group(['namespace' => 'Vendor\AdminPackage\Http\Controllers', 'middleware' => ['web', 'auth']], function () {
//    Route::get('simple-slider', 'AdminDashboardController@index')->name('admin.dashboard');
//});


