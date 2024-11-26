<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('blog.index');
});

Route::view("/create", "blog.create");
