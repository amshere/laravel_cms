<?php

use App\Http\Controllers\VenueController;
use App\Http\Controllers\RegistrationController;
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
    return view('index');
});
Route::get('index', function () {
    return view('index');
});

//login form
Route::get('login', function () {
    return view('login');
});

Route::get('register', function () {
    return view('register');
});

//venue image crude


//user registration
Route::middleware('alreadyLoggedIn')->group(function(){
    Route::get('/login',[RegistrationController::class, 'login']);
});
Route::middleware(['isLoggedIn','isOwner:1'])->group(function(){
    Route::get('/dashboardadmin',[RegistrationController::class, 'dashboardadmin']);
    Route::get('/dashboardAddvenue',[VenueController::class, 'dashboardAddvenue'])->name('dashboardAddvenue');
    Route::post('venue',[VenueController::class, 'store']);
    Route::get('/dashboardViewvenue',[VenueController::class, 'list'])->name('dashboardViewvenue');
    Route::get('/dashboardEditvenue/{id}',[VenueController::class, 'edit']);
    Route::put('/updateVenue/{id}',[VenueController::class, 'update']);
    Route::delete('/deleteVenue/{id}',[VenueController::class, 'destroy']);

});
Route::middleware(['isLoggedIn','isOwner:0'])->group(function(){
    Route::get('/dashboard',[RegistrationController::class, 'dashboard']);
});

Route::get('/register',[RegistrationController::class, 'register']);
Route::post('/register-user',[RegistrationController::class, 'registerUser'])->name('register-user');
Route::post('/login-user',[RegistrationController::class, 'loginUser'])->name('login-user');


Route::get('/logout',[RegistrationController::class, 'logout']);

//inside admin dashboard
