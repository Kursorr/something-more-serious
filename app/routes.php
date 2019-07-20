 <?php

$router->get('', 'PagesController@home');

$router->get('signup', 'PagesController@signup');
$router->post('signup', 'PagesController@register');

$router->get('signin', 'PagesController@signin');
$router->post('signin', 'PagesController@login');

$router->get('contact', 'PagesController@contact');

$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');
