<?php

use App\Detail;
use Faker\Provider\Address;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function(){
    return view('pages.home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['web', 'auth']], function() {

    Route::get('/account', 'PagesController@account')->name('account');

    Route::get('/details', 'PagesController@details')->name('details');

    Route::resource('detail', 'DetailsController');

//    Route::get('/create', 'PagesController@create')->name('create');
////
//    Route::get('/{id}/edit', 'PagesController@edit')->name('edit');

});

//Route::get('/barcodes', 'PagesController@barcodes')->name('barcodes');






