<?php
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
    return view('welcome');
});
Route::get('/index', function () {
    return view('dashboard');
});

// Route::get('locale', function () {
//     return \App::getLocale();
// });

Route::get('locale/{locale}', function ($locale) {
     $value =$_GET['lang'];
    \Session::put('locale', $value);
     return response($value,200);
});
Route::get('/signin', function () {
    return view('login');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin','ADMIN\AppController@index')->name('admin.app');
Route::get('/manager','Manager\AppController@index')->name('manager.app');
Route::get('/employee','Employee\EmployeeController@index')->name('employee.index');
