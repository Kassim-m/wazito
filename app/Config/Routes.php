<?php

use CodeIgniter\Router\RouteCollection;


$routes->add('index', 'Welcome::index');
$routes->add('register', 'Welcome::register');
$routes->add('login', 'Welcome::login');
$routes->add('home', 'Welcome::home', ['filter' => 'auth']);
$routes->add('recipesearch', 'Welcome::recipesearch', ['filter' => 'auth']);
$routes->add('about', 'Welcome::about', ['filter' => 'auth']);
$routes->add('foodtrivia', 'Welcome::foodtrivia', ['filter' => 'auth']);
$routes->add('nutritionalsearch', 'Welcome::nutritionalsearch', ['filter' => 'auth']);
$routes->add('unitconversion', 'Welcome::unitconversion', ['filter' => 'auth']);
$routes->add('test', 'Welcome::test');

$routes->add('processregistration', 'UserController::processregistration');
$routes->add('processlogin', 'UserController::processlogin');
$routes->add('logout', 'UserController::logout');

