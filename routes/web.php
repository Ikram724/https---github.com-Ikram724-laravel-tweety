<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\FollowsController;
use Illuminate\Support\Facades\DB;



use App\Http\Controllers\HomeController;
use App\Http\Controllers\LikesController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\TweetsController;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::post('/tweets', [TweetsController::class, 'store']);
    Route::get('/tweets', [TweetsController::class, 'index'])->name('home');
    Route::post('/profile/{user:username}/follow', [FollowsController::class, 'store']);
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/profile/{user:username}', [ProfilesController::class, 'show'])->name('profile');
    Route::patch('/profile/{user:username}', [ProfilesController::class, 'update'])->name('profile');
    Route::get('/explore', [ExploreController::class, 'show']);
    Route::delete('/tweet/delete/{tweet}', [ProfilesController::class, 'delete']);
    Route::post('/tweets/{tweet}/like', [LikesController::class, 'like']);
    Route::delete('/tweets/{tweet}/dislike', [LikesController::class, 'dislike']);
});
Route::get('/profile/{user:username}/edit', [ProfilesController::class, 'edit'])->middleware('can:edit,user');



Route::get('/bla', [LikesController::class, 'bla']);

Auth::routes();
