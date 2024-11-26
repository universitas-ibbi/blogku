<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index']);

Route::post("/simpan", [PostController::class, 'simpan']);

Route::view("/create", "blog.create");


// Route::get("/about", function () {
//     return view("about");
// });

Route::view("/about", "about");

// Route::get("/contact", function () {
//     return view("contact");
// });

Route::view("/contact", "contact");
