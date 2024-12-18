<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index']);


Route::middleware("auth")->group(function () {
    Route::post("/simpan", [PostController::class, 'simpan']);
    // Route::post("/simpan", [PostController::class, 'simpan'])
    //     ->middleware("auth");
    Route::view("/create", "blog.create");
    // Route::view("/create", "blog.create")
    // ->middleware("auth");

    Route::get("/show/{id}", [PostController::class, 'show']);

    Route::post("/post/{id}/comment", [PostController::class, 'comment']);
});


// Route::get("/about", function () {
//     return view("about");
// });

Route::view("/about", "about");

// Route::get("/contact", function () {
//     return view("contact");
// });

Route::view("/contact", "contact");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
