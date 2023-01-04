<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\CloudinaryController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['middleware' => ['auth']], function(){
    Route::get('/index', [PostController::class, 'index'])->name('index');
    Route::get('/report', [PostController::class, 'report'])->name('report');
    Route::get('/mypage', [PostController::class, 'mypage'])->name('mypage');
    Route::get('/mypage/edit', [PostController::class, 'mypage_edit'])->name('mypage_edit');
    
    Route::get('/posts/recruit', [PostController::class, 'recruit']);
    Route::post('/recruits', [PostController::class, 'store']);
    Route::post('/chat/{rec}', [ChatController::class, 'chat_store']);
    Route::post('/reports', [ReportController::class, 'str_report']);
    Route::post('/mypage_edit', [PostController::class, 'edit_store']);
    
    Route::get('/posts/{recruit}', [PostController::class ,'show']);
    Route::get('/profile/{user}', [PostController::class ,'profile']);
    
    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
});
require __DIR__.'/auth.php';