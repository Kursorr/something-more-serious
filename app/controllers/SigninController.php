<?php

namespace App\Controllers;

use App\Core\App;

class SigninController
{
  public function signup()
  {
    $error = '';

    return view('signup', [
      'error' => $error
    ]);
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

    if (strlen($pseudo) < 4) {
      $error = 'Your pseudo should contains more or equal to 4 characters.';

      return view('signin', ['errorRegister' => $error]);
    }

    if (empty($email)) {
      $error = 'You need an email';

      return view('signin', ['errorRegister' => $error]);
    }

    if ((empty($password) || empty($verifpassword) || ($password !== $verifpassword)) ) {
      $error = 'Passwords should be equal';

      return view('signin', ['errorRegister' => $error]);
    }

    App::get('database')->insert('users', [
      'pseudo' => $pseudo,
      'email' => $email,
      'password' => password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]),
      'created_at' => date("Y-m-d H:i:s")
    ]);

    $error = 'Account created with success !!';
    return view('signin', ['error' => $error]);
  }

  public function signin()
  {
    $error = '';

    return view('signin', [
      'error' => $error
    ]);
  }

  /**
   * Show the signin page
   */
  public function login()
  {
    $pseudo = $_POST['pseudo'];
    $password = $_POST['password'];

    $res = App::get('database')->selectWhere();
    var_dump($res);

    $_SESSION['pseudo'] = $pseudo;

    redirect('/');
  }

  public function logout()
  {
    unset($_SESSION['pseudo']);
    return view('index');
  }
}
