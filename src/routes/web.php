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
    return redirect('/home');
});


Auth::routes();


Route::match(['get', 'post'], 'register', function () {
    return redirect('/');
});

Route::get('/home', 'HomeController@index')->name('home');

//kampus
Route::get('/profile/university', 'UniversityController@index')->name('university.index');

//job detail
Route::get('/job/{slug}', 'PostController@show')->name('job-details');
Route::post('/job/apply/{slug}', 'PostController@store')->name('job-submit');
Route::delete('/job/cancel/{slug}', 'PostController@destroy')->name('job-cancel');

//category
Route::get('/kategori/informatika', 'CategoryController@informatika')->name('cat.informatika');
Route::get('/kategori/mesin', 'CategoryController@mesin')->name('cat.mesin');
Route::get('/kategori/elektro', 'CategoryController@elektro')->name('cat.elektro');

//work type
Route::get('/type/onsite', 'WorkTypeController@onsite')->name('type.onsite');
Route::get('/type/remote', 'WorkTypeController@remote')->name('type.remote');
Route::get('/type/hybrid', 'WorkTypeController@hybrid')->name('type.hybrid');

//error
Route::get('404', 'ErrorController@notFound')->name('404');

//Panel
Route::get('/panel', 'MiscellaneousController@countjob')->name('panel');

Route::middleware(['auth'])->group(function () {
    //List Applicant
    Route::get('/admin/applicant', 'Admin\PostApplicantController@index')->name('admin.applicant-list');
    Route::get('/admin/applicant/data', 'Admin\PostApplicantController@show')->name('admin.applicant-show');

    //List Companies
    Route::get('/admin/companies/list', 'Admin\PostCompaniesController@index')->name('admin.companies-list');
    Route::get('/admin/companies/list/data', 'Admin\PostCompaniesController@show')->name('admin.companies-show');


    //admin companies
    Route::get('/admin/companies', 'Admin\ApplicantCompaniesController@index')->name('admin.applicant-companies-list');
    Route::get('/admin/companies/create', 'Admin\ApplicantCompaniesController@create')->name('admin.applicant-companies-create');
    Route::post('/admin/companies/store', 'Admin\ApplicantCompaniesController@store')->name('admin.applicant-companies-store');
    Route::get('/admin/companies/data', 'Admin\ApplicantCompaniesController@show')->name('admin.applicant-companies-show');
    Route::get('/admin/companies/edit/{id}', 'Admin\ApplicantCompaniesController@edit')->name('admin.applicant-companies-edit');
    Route::put('/admin/companies/update/{id}', 'Admin\ApplicantCompaniesController@update')->name('admin.applicant-companies-update');
    Route::delete('/admin/companies/delete/{id}', 'Admin\ApplicantCompaniesController@destroy')->name('admin.applicant-companies-delete');

    //admin post
    Route::get('/admin/job', 'Admin\PostController@index')->name('admin.job-list');
    Route::get('/admin/job/create', 'Admin\PostController@create')->name('admin.job-create');
    Route::post('/admin/job/store', 'Admin\PostController@store')->name('admin.job-store');
    Route::get('/admin/job/data', 'Admin\PostController@show')->name('admin.job-show');
    Route::get('/admin/job/edit/{id}', 'Admin\PostController@edit')->name('admin.job-edit');
    Route::put('/admin/job/update/{id}', 'Admin\PostController@update')->name('admin.job-update');
    Route::delete('/admin/job/delete/{id}', 'Admin\PostController@destroy')->name('admin.job-delete');

    //admin user
    Route::get('/admin/user', 'Admin\UserController@index')->name('admin.user-list');
    Route::get('/admin/user/create', 'Admin\UserController@create')->name('admin.user-create');
    Route::post('/admin/user/store', 'Admin\UserController@store')->name('admin.user-store');
    Route::get('/admin/user/data', 'Admin\UserController@show')->name('admin.user-show');
    Route::get('/admin/user/edit/{id}', 'Admin\UserController@edit')->name('admin.user-edit');
    Route::put('/admin/user/update/{id}', 'Admin\UserController@update')->name('admin.user-update');
    Route::delete('/admin/user/delete/{id}', 'Admin\UserController@destroy')->name('admin.user-delete');
});
