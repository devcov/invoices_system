<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});


//Auth::routes();


Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
///Route::get('invoices','InvoicesController@index')->name('invoices');
Route::resource('invoices', 'InvoicesController');
Route::resource('sections', 'SectionsController');
Route::resource('products','ProductController');
Route::resource('InvoiceAttachments', 'InvoiceAttachmentsController');
Route::get('/section/{id}','InvoicesController@getProduct');

Route::get('/InvoicesDetails/{id}', 'InvoicesDetailsController@edit');

Route::get('View_file/{invoice_number}/{file_name}', 'InvoicesDetailsController@open_file');
Route::get('download/{invoice_number}/{file_name}', 'InvoicesDetailsController@get_file');

Route::post('delete_file', 'InvoicesDetailsController@destroy')->name('delete_file');


Route::get('/edit_invoice/{id}', 'InvoicesController@edit');

Route::get('/Status_show/{id}', 'InvoicesController@show')->name('Status_show');

Route::post('/Status_Update/{id}', 'InvoicesController@Status_Update')->name('Status_Update');

Route::get('/Status_show/{id}', 'InvoicesController@show')->name('Status_show');

Route::post('/Status_Update/{id}', 'InvoicesController@Status_Update')->name('Status_Update');

Route::resource('Archive', 'InvoiceAchiveController');

Route::get('Invoice_Paid','InvoicesController@Invoice_Paid');

Route::get('Invoice_UnPaid','InvoicesController@Invoice_UnPaid');

Route::get('Invoice_Partial','InvoicesController@Invoice_Partial');

Route::get('Print_invoice/{id}','InvoicesController@Print_invoice');


Route::get('/{page}', 'AdminController@index');
