<?php
Route::resource('course','PageController');

Route::get('/', function () {
    return view('index');
})->name('index');


Route::get('/login', function () {
    return view('Login.login');
})->name('login');





Route::post('/addaccount', [
  'uses' => 'newaccountController@Add',
  'as' => 'addaccount'
]);





Route::get('/create', function(){
	return view('course.create');
})->name('create');

 ?>