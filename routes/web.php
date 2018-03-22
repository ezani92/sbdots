<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. 
|
*/

Route::any('/webhook', function () {
    $test = new \App\Setting;

    $test->meta = $_POST['update_id'];
    $test->value = 'test_value';
    $test->save();

    return 'ok';
});

Route::get('/', function () {

	return view('front.index');
	
});

//api/admin/notification
Route::post('api/admin/notification', 'ApiController@adminNotofication');

Route::get('/player/verification', 'PlayerController@verification');
Route::post('/player/verification', 'PlayerController@verification_confirm');

Auth::routes();

Route::middleware(['isadmin'])->group(function () {
    
    Route::get('/admin', 'DashboardController@index');

    Route::get('/admin/games/data', 'GameController@data');
    Route::resource('/admin/games', 'GameController');

    Route::get('/admin/banks/data', 'BankController@data');
    Route::resource('/admin/banks', 'BankController');

    Route::get('/admin/bonuses/data-active', 'BonusController@dataActive');
    Route::get('/admin/bonuses/data-deactive', 'BonusController@dataDeactive');
    Route::resource('/admin/bonuses', 'BonusController');
    Route::get('/admin/bonuses/{bonus_id}/restore', 'BonusController@restore');

    Route::get('/admin/transaction/data', 'TransactionController@data');

    Route::get('/admin/transaction/deposit', 'TransactionController@deposit');
    Route::get('/admin/transaction/deposit-data', 'TransactionController@depositData');

    Route::get('/admin/transaction/withdrawal', 'TransactionController@withdrawal');
    Route::get('/admin/transaction/withdrawal-data', 'TransactionController@withdrawalData');

    Route::get('/admin/transaction/transfer', 'TransactionController@transfer');
    Route::get('/admin/transaction/transfer-data', 'TransactionController@transferData');

    Route::get('/admin/reports', 'ReportController@index');

    Route::resource('/admin/transaction', 'TransactionController');

    Route::get('/admin/settings', 'settingController@index');
    Route::post('/admin/settings', 'settingController@update');

    Route::get('/admin/users/data', 'UserController@data');
    Route::get('/admin/users/{user_id}/ban', 'UserController@ban');
    Route::get('/admin/users/{user_id}/unban', 'UserController@unban');
    Route::resource('/admin/users', 'UserController');

    
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