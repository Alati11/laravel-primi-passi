<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    // return view('welcome');
    $data = [
        'title' => 'Home'
    ];
    return view('home',$data);
});

Route::get('/contact', function () {
    $data = [
        'title' => 'Contact'
    ];
    return view('contact', $data);

});

Route::get('/about', function () {
    $data = [
        'title' => 'About'
    ];
    return view('about',$data);
});

Route::get('/academics', function () {
    $data = [
        'title' => 'Academics'
    ];
    return view('academics', $data);
});

Route::get('/courses', function () {
    $data = [
        'title' => 'Courses'
    ];
    return view('courses', $data);
});

Route::get('/news', function () {
    $data = [
        'title' => 'News'
    ];
    return view('news', $data);
});