<?php

namespace App\Controllers;
use App\Controllers\ExampleController;
use App\Core\Router;

    $router->get('users', 'ExampleController@index');
    $router->get('', 'ExampleController@login');
    $router->post('users/create', 'ExampleController@create');
    $router->post('users/edit', 'ExampleController@edit');
    $router->post('users/delete', 'ExampleController@delete');

?>