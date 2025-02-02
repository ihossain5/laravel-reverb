<?php

use App\Events\TestEvent;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test',function(){
    event(new TestEvent('Hello, this is a test event!'));
    return 'event dispatched';
});