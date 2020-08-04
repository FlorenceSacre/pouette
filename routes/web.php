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
	$user = Auth::user();
    var_dump($user);
});

Route::get('/yolo', function () {
	// Sorry 
	$user = App\User::find(1);
    $user->password = "password";
    $user->save();
	$user = App\User::find(2);
    $user->password = "customer";
    $user->save();
    $user = App\User::find(3);
    $user->password = "subscriber";
    $user->save();
});

Route::get('/logout', function () {
    Auth::logout();
    var_dump("Logout.");
});

Route::get('/dashboard', function () {
	$user = Auth::user();
	if(!empty($user->admin)){
        printf('You are <span style="text-decoration: line-through;">a wizard</span> an admin, %s', $user->name);
    }else{
        echo "Are you lost?";
    }
});



Route::get('home', 'HomeController@index')->name('home');

Route::get('paysage', function() {return view('paysage.index');});
Route::get('animaux', function() {return view('animaux.index');});
Route::get('hiver', function() {return view('hiver.index');});

Auth::routes();
Auth::routes(['register' => false]);

Route::get('email', 'EmailController@getForm');
Route::post('email', ['uses' => 'EmailController@postForm', 'as' => 'storeEmail']);

Route::resource('/user', 'UserController');

Route::get('/subscribe', function() {return view('subscribe.index');});
Route::post('/subscription', 'SubscriptionController');
Route::get('emails.new-subscribe');
Route::get('/unsubscription/{token}', 'UnsubscriptionController');

Route::post('login', 'Auth\LoginController@login');
//
//Route::get('admin', function() {
//    return view('admin.index');
//});

Route::get('video/{id}', 'VideoController@index')->name('video');
Route::get('add', 'AddVideoController@showUploadForm')->name('upload.video');
Route::post('add', 'AddVideoController@storeFile');

Route::get('/search','VideoController@search')->name('video.search');

//Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']], function () {
//    Route::get('/user', 'UserController@index')->name('user');
//});