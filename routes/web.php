<?php

use App\Donate;
use App\Country;
use Illuminate\Http\Request;

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
    
    $wilaya = Country::all();
    return view('welcome')->with('wilaya',$wilaya);
});

Auth::routes();

Route::prefix('search')->group(function () {
    Route::get('/', function (Request $request) {
        $grp = $request->get('groupage');
        $wilaya = $request->get('wilaya');
        $donates = Donate::where('groupage',$grp)->where('wilaya',$wilaya)->where('existance',1)->get();
        $wilaya = Country::all();
        return view('search')->with('donates',$donates)->with('wilaya',$wilaya);
    })->name('search');
});
Route::prefix('home')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
});
Route::prefix('donor')->group(function () {
    Route::get('/index', 'DonateController@index')->name('donor');
    Route::get('/store', 'DonateController@store')->name('store.donor');
    Route::post('/store', 'DonateController@store')->name('store.donor');
    
    Route::get('/update/{id}', 'DonateController@update')->name('update.donor');
    Route::post('/update/{id}', 'DonateController@update')->name('update.donor');

    Route::post('/destroy', 'DonateController@destroy')->name('destroy.donor');
});