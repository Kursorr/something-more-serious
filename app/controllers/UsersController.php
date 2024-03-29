<?php

namespace App\Controllers;

use App\Core\App;

class UsersController
{
  /**
   * Show all users.
   */
  public function index()
  {
    $users = App::get('database')->selectAll('users');

    return view('users', compact('users'));
  }
}
