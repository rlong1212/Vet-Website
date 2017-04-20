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

/*Routes for general users (ones that require no authentication)*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('welcome', function() {
	return view('welcome');
});

Route::get('about', function() {
	return view('about');
});

Route::get('location', function() {
	return view('location');
});

Route::get('contact', function() {
	return view('contact');
	
});

/*Route to control the dashboards when working with the animals tabble*/
Route::resource('animals', 'AnimalController');
/*Route to control the dashboards when working with the animals tabble*/
Route::resource('appointments', 'AppointmentController');


/*Routes for authorised users (ones that require authentication)*/
Auth::routes();

/*using named routes for in future if urls need changed, it means 
they don't need changed throughout the whole program*/

/*Route for the keeper (user) to log in*/
Route::get('/home', 'HomeController@index');

/*Routes for the keeper (user)*/
Route::get('/animalrecords', 'AnimalRecordsController@index');
Route::get('/bookinghistory', 'BookingHistoryController@index');
Route::get('/booknewappointment', 'BookNewAppointmentController@index');

Route::get('/editcancelappointment', 'EditCancelAppointmentController@index');
Route::get('/contact' ,'PageController@getContact');
Route::post('/contact','PageController@postContact');

/*Routes for the manager (admin)*/
Route::get('/keeperrecord', 'KeeperRecordController@index');
Route::get('/consultantrecord', 'ConsultantRecordController@index');
Route::get('/animalrecords', 'AnimalRecordsController@index');

/*Routes for the consultant*/

/*Routes for the manager (admin) to log in*/
Route::prefix('admin')->group(function() {
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
});

/*Routes for the consultant to log in*/
Route::prefix('consultant')->group(function(){
	Route::get('/login', 'Auth\ConsultantLoginController@showLoginForm')->name('consultant.login');
	Route::post('/login', 'Auth\ConsultantLoginController@login')->name('consultant.login.submit');
	Route::get('/', 'ConsultantController@index')->name('consultant.dashboard');
});

