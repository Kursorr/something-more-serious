<?php

namespace App\Controllers;

use App\Core\App;

class SigninController
{
  /**
   * Show the signin page
   * @return mixed
   */
  public function signin()
  {
    return view('signin');
  }

  /**
   * Manage post data
   */
  public function register()
  {
    var_dump($_POST);
  }
}
