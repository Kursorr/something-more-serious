 <?php

$router->get('', 'PagesController@home');

$router->get('signin', 'PagesController@signin');
$router->post('signin', 'PagesController@register');

$router->get('contact', 'PagesController@contact');

$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');
