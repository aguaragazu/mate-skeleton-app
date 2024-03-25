<?php

require_once __DIR__ . "/../vendor/autoload.php";

/**
 * Bootstrap the aplication and handle HTTP requests.
 */
Mate\App::bootstrap(dirname(__DIR__))->run();
