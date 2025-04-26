<?php

use App\Http\Controllers\admin\ContactUsController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\admin\WorkController;
use App\Http\Controllers\front\IndexController;
use Illuminate\Support\Facades\Route;
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

Route::view('/', 'front.index')->name('front');
Route::view('about', 'front.about')->name('front.about');
Route::view('contact', 'front.contact')->name('front.contact');
Route::view('our-work', 'front.our-work')->name('front.work');
Route::post('contact',[IndexController::class,'storeContact'])->name('store.contact');
// Route::get('/', function () {
//     return view('auth/login');
// })->middleware('guest');
// Route::get('/', function () {
//     return view('auth/login');
// })->middleware('guest');

Route::group(['prefix' => 'admin'], function () {
    Auth::routes();
});

Route::view('/admin','admin.index')->middleware('auth');
Route::group(['prefix' => 'admin/services', 'middleware' => ['auth'],], function () {
    Route::get('/', [ServiceController::class, 'index'])->name('services');
    Route::get('getServicesData', [ServiceController::class, 'getData'])->name('getservicesData');
    Route::get('create', [ServiceController::class, 'create'])->name('services.create');
    Route::post('store', [ServiceController::class, 'store'])->name('services.store');
    Route::get('/{id}/edit', [ServiceController::class, 'edit'])->name('services.edit');
    Route::put('/update/{id}', [ServiceController::class, 'update'])->name('services.update');
    Route::get('/delete/{id}', [ServiceController::class, 'delete'])->name('services.delete');
    Route::get('/changeStatus/{id}', [ServiceController::class, 'changeStatus'])->name('services.changeStatus');
});

Route::group(['prefix' => 'admin/works', 'middleware' => ['auth'],], function () {
    Route::get('/', [WorkController::class, 'index'])->name('works');
    Route::get('getWorksData', [WorkController::class, 'getData'])->name('getworksData');
    Route::get('create', [WorkController::class, 'create'])->name('works.create');
    Route::post('store', [WorkController::class, 'store'])->name('works.store');
    Route::get('/{id}/edit', [WorkController::class, 'edit'])->name('works.edit');
    Route::put('/update/{id}', [WorkController::class, 'update'])->name('works.update');
    Route::get('/delete/{id}', [WorkController::class, 'delete'])->name('works.delete');
    Route::get('/changeStatus/{id}', [WorkController::class, 'changeStatus'])->name('works.changeStatus');
});

Route::group(['prefix' => 'admin/contacts', 'middleware' => ['auth'],], function () {
    Route::get('/', [ContactUsController::class, 'index'])->name('contacts');
    Route::get('getcontactsData', [ContactUsController::class, 'getData'])->name('getContactsData');
    Route::get('/delete/{id}', [ContactUsController::class, 'delete'])->name('contacts.delete');

});




