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
