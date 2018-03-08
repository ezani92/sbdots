<?php

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

	return view('front.index');
	
});

Route::get('/player/verification', 'PlayerController@verification');
Route::post('/player/verification', 'PlayerController@verification_confirm');

Auth::routes();

Route::middleware(['isadmin'])->group(function () {
    
    Route::get('/admin', 'DashboardController@index');
    Route::resource('/admin/games', 'GameController');
    
});

Route::middleware(['isstaff'])->group(function () {
    
    Route::get('/staff', function () {
	    return 'staff';
	});
    
});

Route::middleware(['isplayer','phoneverification'])->group(function () {
    
    Route::get('/player', 'PlayerController@main');

    Route::post('/player/bank', 'PlayerController@bank');

    Route::get('/player/deposit/step1', 'PlayerController@deposit_step1');
    Route::get('/player/deposit/step2', 'PlayerController@deposit_step2');
    Route::get('/player/deposit/step3', 'PlayerController@deposit_step3');
    Route::post('/player/deposit', 'PlayerController@deposit_store');

    Route::get('/player/withdrawal/step1', 'PlayerController@withdrawal_step1');
    Route::get('/player/withdrawal/step2', 'PlayerController@withdrawal_step2');
    Route::post('/player/withdrawal/step3', 'PlayerController@withdrawal_store');

    Route::get('/player/transfer/step1', 'PlayerController@transfer_step1');
    Route::post('/player/transfer/step2', 'PlayerController@transfer_store');

    Route::get('/player/transaction', 'PlayerController@transaction');

    Route::get('/player/profile', 'PlayerController@profile');
    Route::post('/player/profile/update', 'PlayerController@profile_update');
    Route::post('/player/profile/password', 'PlayerController@password_update');

    
});