 <?php

$router->get('', 'PagesController@home');

$router->get('signup', 'SigninController@signup');
$router->post('signup', 'SigninController@register');

$router->get('signin', 'SigninController@signin');
$router->post('signin', 'SigninController@login');

$router->get('logout', 'PagesController@logout');

$router->get('contact', 'PagesController@contact');

$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');
