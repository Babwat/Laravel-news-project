<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class,'index']);
Route::get('about-us', [MainController::class,'about_us']);
Route::get('contact-us', [MainController::class,'contact_us']);







//traversy media
Route::get('/about', function(){
    return view('pages.about');
});
/*
//dynamic route
Route::get('/user/{id}/{name}', function($id, $name){
    return 'This is user' .$name;
});

//commented from mubahood
Route::get('/', function () {
    return view('welcome');
});*/
/*
Route::get('about-us', function(){
    #echo 'This is where you find things about us ---- '.route('contact');
    return route('contact');#reference using a named route
})->name('about');

Route::get('news-details/{id}', function($id){
    return 'news-details page for post =>'.$id;
})->name('about');

Route::get('contact-us', function(){
    echo 'This is where you can talk to us';
})->name('contact');*/