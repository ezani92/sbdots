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
Route::get('/about_us', 'FrontController@about_us');
Route::get('/downloads', 'FrontController@downloads');
Route::get('/sportsbooks', 'FrontController@sportsbooks');
Route::get('/live_casinos', 'FrontController@live_casinos');
Route::get('/slots', 'FrontController@slots');
Route::get('/arcades', 'FrontController@arcades');
Route::get('/game-live22', 'FrontController@game_live22');
Route::get('/lottery', 'FrontController@lottery');
Route::get('/promotions', 'FrontController@promotions');
Route::get('/banking', 'FrontController@banking');
Route::get('/registration', 'FrontController@registration');
Route::get('/contact_us', 'FrontController@contact_us');
Route::get('/faq', 'FrontController@faq');
Route::get('/tnc', 'FrontController@tnc');


// API START

Route::post('api/admin/notification', 'ApiController@adminNotofication');

Route::get('api/admin/depositTotal', 'ApiController@depositTotal');
Route::get('api/admin/withdrawTotal', 'ApiController@withdrawTotal');

Route::get('api/switch-desktop', 'ApiController@desktop');
Route::get('api/switch-mobile', 'ApiController@mobile');








// API END

Route::get('/player/verification', 'PlayerController@verification');
Route::post('/player/verification', 'PlayerController@verification_confirm');

Auth::routes();

Route::get('/admin/login', 'DashboardController@login');

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


    Route::post('/admin/transaction/addbonus', 'TransactionController@addbonus');
    Route::get('/admin/transaction/{transaction_id}/deletebonus', 'TransactionController@deletebonus');
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

    Route::post('/admin/users/password', 'UserController@password');
    Route::get('/admin/users/data', 'UserController@data');
    Route::get('/admin/users/{user_id}/transaction-data', 'UserController@transactiondata');
    Route::get('/admin/users/{user_id}/logs-data', 'UserController@logsdata');
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
    
    Route::get('/staff', 'DashboardController@index');

    Route::get('/staff/games/data', 'GameController@data');
    Route::resource('/staff/games', 'GameController');

    Route::get('/staff/banks/data', 'BankController@data');
    Route::resource('/staff/banks', 'BankController');
    Route::get('/staff/banks/{bank_id}/data', 'BankRecordController@data');
    Route::post('/staff/banks/{bank_id}/debit', 'BankController@debit');
    Route::post('/staff/banks/{bank_id}/credit', 'BankController@credit');

    Route::get('/staff/bonuses/data-active', 'BonusController@dataActive');
    Route::get('/staff/bonuses/data-deactive', 'BonusController@dataDeactive');
    Route::resource('/staff/bonuses', 'BonusController');
    Route::get('/staff/bonuses/{bonus_id}/restore', 'BonusController@restore');

    Route::post('/staff/transaction/addbonus', 'TransactionController@addbonus');
    Route::get('/staff/transaction/{transaction_id}/deletebonus', 'TransactionController@deletebonus');
    Route::get('/staff/transaction/data', 'TransactionController@data');

    Route::get('/staff/transaction/deposit', 'TransactionController@deposit');
    Route::get('/staff/transaction/deposit-data', 'TransactionController@depositData');

    Route::get('/staff/transaction/withdrawal', 'TransactionController@withdrawal');
    Route::get('/staff/transaction/withdrawal-data', 'TransactionController@withdrawalData');

    Route::get('/staff/transaction/transfer', 'TransactionController@transfer');
    Route::get('/staff/transaction/transfer-data', 'TransactionController@transferData');

    Route::get('/staff/reports', 'ReportController@index');

    Route::resource('/staff/transaction', 'TransactionController');

    Route::get('/staff/settings', 'settingController@index');
    Route::post('/staff/settings', 'settingController@update');

    Route::get('/staff/users/data', 'UserController@data');
    Route::get('/staff/users/{user_id}/transaction-data', 'UserController@transactiondata');
    Route::get('/staff/users/{user_id}/logs-data', 'UserController@logsdata');
    Route::get('/staff/users/{user_id}/ban', 'UserController@ban');
    Route::get('/staff/users/{user_id}/unban', 'UserController@unban');
    Route::resource('/staff/users', 'UserController');

    Route::post('staff/user/transaction/deposit', 'UserController@deposit');
    Route::post('staff/user/transaction/withdraw', 'UserController@withdraw');
    Route::post('staff/user/transaction/transfer', 'UserController@transfer');

    Route::get('/staff/groups/data', 'GroupController@data');
    Route::resource('/staff/groups', 'GroupController');
    
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

Route::middleware(['isaffiliate','phoneverification'])->group(function () {

    Route::get('/affiliate', 'AffiliateController@dashboard');

});