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
    return '<h3> Landon App Page </h3>';
});

Route::get('/about', function () {

	$response_arr = [];
	$response_arr['author'] = 'BP';
	$response_arr['version'] = '0.1.1';

	return $response_arr;


});

Route::get('/home', function () {

	$data = [];
	$data['version'] = '0.1.1';


	return view('welcome', $data);

});


Route::get('/di', 'ClientController@di');

Route::get('/facades/db', function () {

	return DB::select('SELECT * FROM TABLE');

});

Route::get('/facades/encrypt', function () {

	return Crypt::encrypt('123456789');

});

//eyJpdiI6IjRtSFhSUEFJdTVJbzVXU1lrSUFnQVE9PSIsInZhbHVlIjoiWjZ3UTVBemJLZVdCWUwraW5BMjRtOFRJTWVac0lSMmVKb0NWNTNBclZRbz0iLCJtYWMiOiIyYTY1ZTdkNDI0MWY3ZGIzZmU2YTNmNTI3NzYwYThkYmMyYjNhNmFkYzgzNDkyODM4ZDIwODcyMTM2NTM4ZjY0In0

Route::get('/facades/decrypt', function () {

	return Crypt::decrypt('eyJpdiI6IjRtSFhSUEFJdTVJbzVXU1lrSUFnQVE9PSIsInZhbHVlIjoiWjZ3UTVBemJLZVdCWUwraW5BMjRtOFRJTWVac0lSMmVKb0NWNTNBclZRbz0iLCJtYWMiOiIyYTY1ZTdkNDI0MWY3ZGIzZmU2YTNmNTI3NzYwYThkYmMyYjNhNmFkYzgzNDkyODM4ZDIwODcyMTM2NTM4ZjY0In0');

});

//Facades simplify accessing certain classes however be careful not to overdo it.



