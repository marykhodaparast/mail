<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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
    //return view('welcome');
    $data = [
        'title' => 'Hi Students I hope you like the course',
        'content' => 'This laravel couse created with a lot of love',
    ];
    Mail::send('emails.test',$data, function($message){
        $message->to('maryam.kh1374@gmail.com','maryam khodaparast')->subject('Hello Student');
    });
});
