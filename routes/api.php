<?php

use App\Http\Controllers\Api\HomeController;
use Mate\Routing\Route;

Route::get("/api", fn () => json(["message" => "Mate API"]));
Route::get("/api/home", [HomeController::class, "__invoke"]);

