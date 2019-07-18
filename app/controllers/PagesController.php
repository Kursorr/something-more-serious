<?php

namespace App\Controllers;

class PagesController
{
  /**
   * Show the home page.
   */
  public function home()
  {
    return view('index');
  }

  /**
   * Show the contact page.
   */
  public function contact()
  {
    return view('contact');
  }

  /**
   * Show the signin page
   */
  public function signin()
  {
    $error = '';

    return view('signin', ['error' => $error]);
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

    if (strlen($pseudo) <= 4) {
      $error = 'Your pseudo should contains more or equal to 4 characters.';

      return view('signin', ['error' => $error]);
    }

    return true;
  }
}
