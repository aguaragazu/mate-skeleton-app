<?php

namespace App\Providers;

use Mate\App;
use Mate\Routing\Route;

class RouteServiceProvider {
    /**
     * Load all routes defined in routes directory.
     *
     * @return void
     */
    public function registerServices() {
        Route::load(App::$root . "/routes");
    }
}
