<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/datatables/language')->name('api.datatables-lang')->uses('MiscellaneousController@datatablesLang');

Route::group(['middleware' => ['auth:api']], function () {
    Route::get('/token')->name('api.token')->uses('MiscellaneousController@tokenuser');
    Route::get('/topcompanies')->name('api.companies')->uses('MiscellaneousController@topcompanies');

    Route::post('/admin/userstore', 'Admin\UserController@store')->name('admin.user-store');
});
