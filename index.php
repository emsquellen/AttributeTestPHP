<?php

require_once('vendor/autoload.php');

use Framework\Router;

Router::registerController(new \App\Test());
Router::run();