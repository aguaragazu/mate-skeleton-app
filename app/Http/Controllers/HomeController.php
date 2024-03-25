<?php

namespace App\Http\Controllers;

use App\Http\Middlewares\AuthMiddleware;

class HomeController extends Controller {
    /**
     * Register middlewares.
     */
    public function __construct() {
        $this->middlewares([AuthMiddleware::class]);
    }

    /**
     * Home page.
     */
    public function show() {
        return view("home");
    }
}
