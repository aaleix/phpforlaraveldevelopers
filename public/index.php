<?php

use Framework\App;

require '../vendor/autoload.php';

require '../framework/bootstrap.php';

$routes = require '../routes.php';


//$routes = new Router();
//$routes->define($routes);
//$routes->redirect($_SERVER['REQUEST_URI']);

App::get('router')->redirect($_SERVER['REQUEST_URI']);

//require 'app/index.php';
//require 'resources/views/index.blade.php';

