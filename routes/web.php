<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\PeopleController;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("pages.welcome", [
        "title" => "Home",
    ]);
});

Route::get("/news", [NewsController::class, "index"]);
Route::get("/news/category/{id}", [NewsController::class, "category"]);
Route::get("/news/{slug}", [NewsController::class, "detail"]);

Route::get("/people", [PeopleController::class, "index"]);
Route::get("/people/{id}", [PeopleController::class, "detail"]);
