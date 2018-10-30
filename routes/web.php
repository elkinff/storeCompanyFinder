<?php



Route::get('/', function () {
    return view('welcome');
});

Route::post("find", "HomeController@find")->name("find");
