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
Route::any('/webhook', 'WebhookController@test');


Route::get('/', 'FrontController@index');
Route::get('/downloads', 'FrontController@downloads');
Route::get('/sportsbooks', 'FrontController@sportsbooks');
Route::get('/live_casinos', 'FrontController@live_casinos');
Route::get('/slots', 'FrontController@slots');
Route::get('/arcades', 'FrontController@arcades');
Route::get('/game-live22', 'FrontController@game_live22');
Route::get('/lottery', 'FrontController@lottery');
Route::get('/promotions', 'FrontController@promotions');
Route::get('/contact_us', 'FrontController@contact_us');


// API START

Route::post('api/admin/notification', 'ApiController@adminNotofication');

Route::get('api/admin/depositTotal', 'ApiController@depositTotal');
Route::get('api/admin/withdrawTotal', 'ApiController@withdrawTotal');








// API END

Route::get('/player/verification', 'PlayerController@verification');
Route::post('/player/verification', 'PlayerController@verification_confirm');

Auth::routes();

Route::middleware(['isadmin'])->group(function () {
    
    Route::get('/admin', 'DashboardController@index');

    Route::get('/admin/games/data', 'GameController@data');
    Route::resource('/admin/games', 'GameController');

    Route::get('/admin/banks/data', 'BankController@data');
    Route::resource('/admin/banks', 'BankController');
    Route::get('/admin/banks/{bank_id}/data', 'BankRecordController@data');
    Route::post('/admin/banks/{bank_id}/debit', 'BankController@debit');
    Route::post('/admin/banks/{bank_id}/credit', 'BankController@credit');

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
    Route::get('/admin/users/{user_id}/transaction-data', 'UserController@transactiondata');
    Route::get('/admin/users/{user_id}/ban', 'UserController@ban');
    Route::get('/admin/users/{user_id}/unban', 'UserController@unban');
    Route::resource('/admin/users', 'UserController');

    Route::post('admin/user/transaction/deposit', 'UserController@deposit');
    Route::post('admin/user/transaction/withdraw', 'UserController@withdraw');
    Route::post('admin/user/transaction/transfer', 'UserController@transfer');

    Route::get('/admin/groups/data', 'GroupController@data');
    Route::resource('/admin/groups', 'GroupController');

    
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