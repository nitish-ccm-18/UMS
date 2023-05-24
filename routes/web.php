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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Setup User Profile
Route::get('/users/profile/', function() {
    // Get Current Authentcated user id
    $user = DB::select('select * from users where id = ?',[Auth::id()]);
    return view('users.profile',['user'=>$user]);
})->middleware('auth');



Route::get('/admin/dashboard', function() {
    $users = DB::select('select * from users');
    return view('admin.home',['users'=>$users]);
})->middleware('auth')->middleware('isAdmin');


