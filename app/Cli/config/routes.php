<?php

/** @var Phalcon\Cli\Router $router */


$router->setDefaultTask('main');
$router->setDefaultAction('index');

$router->add('/tests/weird', 'test:another');