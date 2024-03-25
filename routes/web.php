<?php

use App\Http\Controllers\HomeController;
use Mate\Auth\Auth;
use Mate\Routing\Route;

Auth::routes();

Route::get("/", fn () => view("welcome"));

Route::get("/home", [HomeController::class, "show"]);
