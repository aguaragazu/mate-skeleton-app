<?php

require_once __DIR__ . "./vendor/autoload.php";

/**
 * Bootstrap CLI application and run commands.
 */
Mate\Cli\Cli::bootstrap(__DIR__)->run();
