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
    return redirect()->route('tenders.show');
});

Route::view('jobdetails','jobdetails')->name('jobdetails');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Register
Route::post('user/register',        'UserController@register')->name('user.register');


Route::get ('tenders',              'TenderController@getTenders')->name('tenders.show');
Route::get ('tender/{id}',          'TenderController@tenderDetails')->name('tender.get');
Route::post('tender/apply/{id}',    'TenderController@apply')->name('tender.apply');
Route::post('tender-filter',        'TenderController@filterTenders')->name('tender.filter');


Route::get('/mypanel', function () {
    return view('myPanel.jobdetails');
});

//================================== MyPanelController ===============================

Route::group(['middleware' => ['auth']], function () {

    Route::get ('/my-panel',                      'MyPanelController@myAppliedTenders')        ->name('myApplied.tender');
    Route::get ('/my-panel/applied-tender/{id}',  'MyPanelController@myAppliedTendersDetails') ->name('myApplied.tender.details');

    Route::get ('/my-profile',                    'MyProfileController@myProfile')              ->name('myProfile.show');
    Route::post('/my-profile/update',             'MyProfileController@updateMyProfile')        ->name('companyInfo.update');

    Route::post('/my-profile/add-contact-person', 'MyProfileController@addContactPerson')       ->name('contactPerson.insert');

    Route::get ('apply/tender/{id}',          'TenderController@tenderDetails')->name('tender.apply.log_in_first');

});

