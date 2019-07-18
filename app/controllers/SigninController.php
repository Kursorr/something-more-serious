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
    $pseudo = $_POST['pseudo'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $verifpassword = $_POST['verifpassword'];

    $error = '';

    if (!strlen($pseudo) >= 4) {
      return $error = 'Your pseudo should contains more or equal to 4 characters.';
    }

    return true;
  }
}
