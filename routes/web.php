<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Route::prefix('console')->middleware(['auth'])->group(function ()
// {
// });


//Route::group(['middleware'=>"web"],function(){
    
    Route::view('/console','console/index');
    Route::view('profile','console/users-profile');
    Route::get('signout', [AuthController::class, 'signOut']);
    
//});


Route::view('/','index');
Route::view('loginp','login');
Route::view('register','register');
Route::get('custom-login', [AuthController::class, 'LoginFunction']); 
Route::post('custom-registration', [AuthController::class, 'customRegistration']); 

