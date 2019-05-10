<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/test', function () {
    return view('Layouts.master');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//================================== DashboardController ===============================
Route::get ('/dashboard',                     'DashboardController@dashboard')        ->name('dashboard');
Route::post('/get-applied-tender-list-today', 'DashboardController@getAppliedTenderlist')     ->name('tender.applied.list.getAllData.today');






//================================== CompanyController ===============================
Route::get ('/company-list',     'CompanyController@companies')       ->name('companies');
Route::post('/get-company-list', 'CompanyController@getAllCompanies') ->name('company.getAllData');
Route::post('/insert-company',   'CompanyController@insertCompany')   ->name('company.insert');
Route::post('/edit-company',     'CompanyController@editCompany')     ->name('company.edit');
Route::post('/update-company',   'CompanyController@updateCompany')   ->name('company.update');
Route::post('/delete-company',   'CompanyController@deleteCompany')   ->name('company.delete');


//================================== DepartmentController ===============================

Route::get ('/department-list',     'DepartmentController@departments')      ->name('departments');
Route::post('/get-department-list', 'DepartmentController@getAllDepartments')->name('department.getAllData');
Route::post('/insert-department',   'DepartmentController@insertDepartment') ->name('department.insert');
Route::post('/edit-department',     'DepartmentController@editDepartment')   ->name('department.edit');
Route::post('/update-department',   'DepartmentController@updateDepartment') ->name('department.update');
Route::post('/delete-department',   'DepartmentController@deleteDepartment') ->name('department.delete');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//========================== Tender ====================================

Route::get ('/tender-list',     'TenderController@tenderShow')      ->name('tender.index');
Route::post('/tender-list',     'TenderController@getAlltenderShow')->name('tender.getAllData');
Route::post('/insert-tender',   'TenderController@insertTender')    ->name('tender.insert');
Route::get ('/insert-tender',   'TenderController@addTender')       ->name('tender.add');
Route::post('/delete-tender',   'TenderController@deleteTender') ->name('tender.delete');
Route::get('/delete-tender-doc/{docId}',   'TenderController@deleteTenderDoc') ->name('tenderDoc.delete');

Route::post('/update-tender',   'TenderController@updateTender') ->name('tender.update');
Route::get('/edit-tender/{tenderId}',     'TenderController@editTender')   ->name('tender.edit');

// applied
Route::get ('/applied-tender-list',     'TenderController@appliedTenderlist')        ->name('tender.applied.list');
Route::post('/get-applied-tender-list', 'TenderController@getAppliedTenderlist') ->name('tender.applied.list.getAllData');




//================================== ZoneController ===============================
Route::get ('/zone-list',     'ZoneController@zones')      ->name('zones');
Route::post('/get-zone-list', 'ZoneController@getAllZones')->name('zone.getAllData');
Route::post('/insert-zone',   'ZoneController@insertZone') ->name('zone.insert');
Route::post('/edit-zone',     'ZoneController@editZone')   ->name('zone.edit');
Route::post('/update-zone',   'ZoneController@updateZone') ->name('zone.update');
Route::post('/delete-zone',   'ZoneController@deleteZone') ->name('zone.delete');

