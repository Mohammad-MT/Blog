<?php

use App\Http\Controllers\Frontend\ArticleController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;


Route::get("/", HomeController::class);

Route::get("/articles", [ArticleController::class, "index"])->name("frontend.articles");
Route::get("/article/{id}", [ArticleController::class, "article"])->name("frontend.article");

Route::fallback(function(){
    return view("frontend.404");
});
