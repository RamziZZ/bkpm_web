<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
    
});

Route::get('foo', function (){
    return 'hello world';
});

Route::get('user/{id}', function ($id) {
    return 'user'.$id;
});

Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
    //
});

Route::get('/user', 'UserController::class@index');

Route::get($uri, $callback);
Route::post($uri, $callback);
Route::put($uri, $callback);
Route::patch($uri, $callback);
Route::delete($uri, $callback);
Route::options($uri, $callback);

Route::match(['get', 'post'], '/', function () {});

Route::any('/', function () {});

Route::redirect('/here', '/there');

Route::redirect('/here', '/there', 301);

Route::permanentRedirect('/here', '/there');

Route::view('/index', 'index');

Route::view('/index', 'index', ['name' => 'Ramzi']);

Route::get('user/{name?}', function ($name = null) {
    return $name;
});

Route::get('user/{name?}', function ($name = 'ramzi') {
    return $name;
});

Route::get('user/{name}', function ($name) {
    //
})->where('name', '[A-Za-z]+');

Route::get('user/{id}', function ($id) {
    //
})->where('id', '0-9]+');

Route::get('user/{id}/{name}', function ($id, $name) {
    //
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

Route::get('user/{id}', function ($id) {});

Route::get('search/{search}', function ($search) {
    return $search;
})->where('search', '.*');

