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
use App\Tracker;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    
    //number of user connected or viewed
    Tracker::firstOrCreate([
        'ip'   => $_SERVER['REMOTE_ADDR']],
        ['ip'   => $_SERVER['REMOTE_ADDR'],
        'current_date' => date('Y-m-d')])->save();

    return view('welcome');

// Route::get();
})->name('welcome');


Route::get('/about',function(){

    return view('pages.about');

})->name('about');

Route::get('/contact',function(){

    return view('pages.contact');

})->name('contact');

// Donate Resource Controller
Route::resource('donate','DonateController');

// 

Route::get('search', 'CompanySearchController@action')->name('companysearch.action');

Route::group(['middleware' => ['role:admin']], function () {
	Route::resource('permissions', 'Admin\PermissionsController');
    Route::resource('roles', 'Admin\RolesController');
    Route::resource('users', 'Admin\UsersController');
    Route::resource('location', 'Admin\CompanyLocationController');
    Route::get('login-activities',[
        'as' => 'login-activities',
        'uses' => 'Admin\UsersController@indexLoginLogs'
    ]);    
});

Route::group(['middleware' => ['role:user']], function () {
    
});

Route::group(['middleware' => ['auth']], function () {
    Route::resource('profile','Users\ProfileController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');