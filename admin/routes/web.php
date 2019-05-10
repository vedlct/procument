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

//================================== CompanyController ===============================
Route::get ('/company-list', 'CompanyController@companies')->name('companies');
Route::post('/get-company-list', 'CompanyController@getAllCompanies')->name('company.getAllData');
Route::post('/insert-company', 'CompanyController@insertCompany')->name('company.insert');
Route::post('/edit-company', 'CompanyController@editCompany')->name('company.edit');
Route::post('/update-company', 'CompanyController@updateCompany')->name('company.update');
Route::post('/delete-company', 'CompanyController@deleteCompany')->name('company.delete');


//================================== DepartmentController ===============================
Route::get ('/department-list',     'DepartmentController@departments')      ->name('departments');
Route::post('/get-department-list', 'DepartmentController@getAllDepartments')->name('department.getAllData');
Route::post('/insert-department',   'DepartmentController@insertDepartment') ->name('department.insert');
Route::post('/edit-department',     'DepartmentController@editDepartment')   ->name('department.edit');
Route::post('/update-department',   'DepartmentController@updateDepartment') ->name('department.update');
Route::post('/delete-department',   'DepartmentController@deleteDepartment') ->name('department.delete');