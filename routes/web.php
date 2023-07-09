<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\backend\barangController;
use App\Http\Controllers\backend\karyawanController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\kucingController;
use App\Http\Controllers\kuliah\kuliahController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});

Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// untuk route  user


Route::prefix('users')->group(function(){
    Route::get('/view', [UserController::class, 'UserView'])->name('user.view');
    Route::get('/add', [UserController::class, 'UserAdd'])->name('user.add');
    Route::post('/store', [UserController::class, 'UserStore'])->name('users.store');
    Route::get('/edit/{id}', [UserController::class, 'UserEdit'])->name('users.edit');
    Route::post('/update/{id}', [UserController::class, 'UserUpdate'])->name('users.update');
    Route::get('/delete/{id}', [UserController::class, 'UserDelete'])->name('users.delete');
});
Route::prefix('karyawan')->group(function(){
    Route::get('/view', [karyawanController::class, 'karyawanView'])->name('karyawan.view');
    Route::get('/add', [karyawanController::class, 'karyawanAdd'])->name('karyawan.add');
    Route::post('/store', [karyawanController::class, 'karyawanStore'])->name('karyawan.store');
 
});

Route::prefix('barang')->group(function(){
    Route::get('/view', [barangController::class, 'barangView'])->name('barang.view');
    Route::get('/add', [barangController::class, 'barangAdd'])->name('barang.add');
    Route::post('/store', [barangController::class, 'barangStore'])->name('barang.store');
    Route::get('/edit/{id}', [barangController::class, 'barangEdit'])->name('barang.edit');
    Route::post('/update/{id}', [barangController::class, 'barangUpdate'])->name('barang.update');
 
});

Route::prefix('kucing')->group(function(){
    Route::get('/view', [kucingController::class, 'kucingView'])->name('kucing.view');
    Route::get('/add', [kucingController::class, 'kucingAdd'])->name('kucing.add');
    Route::post('/store', [kucingController::class, 'kucingStore'])->name('kucing.store');
    Route::get('/edit/{id}', [kucingController::class, 'kucingEdit'])->name('kucing.edit');
    Route::post('/update/{id}', [kucingController::class, 'kucingUpdate'])->name('kucing.update');
    Route::get('/delete/{id}', [kucingController::class, 'kucingDelete'])->name('kucing.delete');
 
});

Route::prefix('kuliah')->group(function(){
    Route::get('/view', [kuliahController::class, 'kuliahView'])->name('kuliah.view');
    Route::get('/edit/{id?}', [kuliahController::class, 'kuliahEdit'])->name('kuliah.edit');
    Route::post('/update/{id?}', [kuliahController::class, 'kuliahUpdate'])->name('kuliah.update');
 
});
