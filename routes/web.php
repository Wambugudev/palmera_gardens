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
    return view('welcome');
});

Auth::routes();


Route::middleware(['auth'])->group(function(){


Route::get('/home', 'HomeController@redy')->name('home');

    ////////////////////////////// My Routes admin Routes///////////////////////////////////

Route::resource('admin','Admincontroller');

// Redirect to admin panel
Route::get('AdminPanel','Admincontroller@adminPanel')->name('Admin.Panel');

// activate account
Route::put('Activate/{id}','Admincontroller@activateAccount')->name('Activate.Account');
// deactivate account
Route::put('deactivate/{id}','Admincontroller@deactivateAccount')->name('Deactivate.Account');

// Add alcohol item route
Route::get('AddAlcohoItem','Admincontroller@AddAlcoholItem')->name('Alcohol.Item');

// Store alcohol item route
Route::post('StoreAlcohoItem','Admincontroller@StoreAlcoholItem')->name('Alcohol.Item.Store');

//Admin add new alcohol itemrout resource
Route::resource('AddAlcoholItem','AddAlcoholItemController');


});