<?php

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index']);
    Route::resource("category",App\Http\Controllers\CategoryController::class);
    Route::resource("question",App\Http\Controllers\QuestionController::class);
    Route::get('/admin/view_all', [App\Http\Controllers\AdminController::class, 'view_all']);
    Route::get('/admin/settings', [App\Http\Controllers\AdminController::class, 'settings']);
    Route::post('/admin/settings', [App\Http\Controllers\AdminController::class, 'settings']);
    Route::get('/admin/delete_user/{num}', [App\Http\Controllers\AdminController::class, 'delete_user']);
    Route::get('/admin/download_report/{num}', [App\Http\Controllers\AdminController::class, 'download_report']);    
});
Auth::routes();

Route::post('/save_data', [App\Http\Controllers\HomeController::class, 'save_data']);
Route::get('/success', [App\Http\Controllers\HomeController::class, 'success']);
Route::get('/get_result', [App\Http\Controllers\HomeController::class, 'get_result']);
Route::get('/generate_pdf', [App\Http\Controllers\HomeController::class, 'generate_pdf']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/insert_questions', [App\Http\Controllers\HomeController::class, 'insert_questions']);
