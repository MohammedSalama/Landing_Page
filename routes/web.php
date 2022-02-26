<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotifyController;
use App\Http\Controllers\SliderController;
use App\Models\Notify;
use App\Models\Slider;

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
 * Authentications Only Admin
 */
Route::get('/', function () {
    return view('auth.login');
});
/*
 * Dashboard Admin
 */
Route::get('/admin_dashboard', function () {
    return view('layouts.admin.admin_dashboard');
})->middleware(['auth'])->name('admin_dashboard');
/*
 * Website Frontend
 */
Route::get('/', function () {
    $slider = Slider::first();
    $notify = Notify::all();
    return view('layouts.website.master',compact('slider','notify'));
})->name('comingSoon');

/*
 * Email Notify
 */
Route::get('admin_dashboard/notify',[NotifyController::class,'index'])->name('notify');
Route::post('admin_dashboard/notify/store',[NotifyController::class,'store'])->name('notify.store');
Route::post('admin_dashboard/notify/destroy',[NotifyController::class,'destroy'])->name('notify.destroy');
/*
 * Slider Section
 */
Route::get('admin_dashboard/slider',[SliderController::class,'index'])->name('slider');
Route::post('admin_dashboard/slider/store',[SliderController::class,'store'])->name('slider.store');
Route::post('admin_dashboard/slider/update/{id}',[SliderController::class,'update'])->name('slider.update');
Route::post('admin_dashboard/slider/destroy',[SliderController::class,'destroy'])->name('slider.destroy');


require __DIR__.'/auth.php';
