<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Postcontroller;

Route::get('/test', function () {
    //return view('welcome');
    return "welcome to Stuart Laravel";
});

Route::get('/', [Postcontroller::class,'index']);

Route::get('/post/{id}',[Postcontroller::class,'detail'])->where('id','[0-9]+');