<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/create-user', function() {
    $user = new User;
    $user->email = 'zack@inrpce.com';
    $user->username = 'zackkitzmiller';
    $user->save();
});

Route::get('/update-user', function() {
    $user = User::find(2);
    $user->updated = 0;
    $user->save();


    $user->slowProcess();
    return View::make('updating');
});

Route::get('/update-user-bg', function() {
    // reset the user
    $user = User::find(2);
    $user->updated = 0;
    $user->save();


    // queue the job
    Queue::push('UpdateUser', array('user_id' => 2));
    return View::make('updating');
});

Route::get('/update-user-py', function() {

    $user = User::find(2);
    $user->updated = 0;
    $user->save();

    Queue::push('UpdateUser', array('user_id' => 2), 'python');
    return View::make('updating');
});

Route::get('/update-multi', function () {

    $user = User::find(2);
    $user->updated = 0;
    $user->save();

    for ($i = 0; $i < 40; $i++) {
        Queue::push('UpdateUser', array('user_id' => 2), 'python');

    }
});

Route::get('/poll', function() {
    $user = User::find(2);
    if ($user->updated) {
        return json_encode(array('updated' => true));
    } else {
        return json_encode(array('updated' => false));
    }
});