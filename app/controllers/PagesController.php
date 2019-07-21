<?php

namespace App\Controllers;

use App\Core\App;

class PagesController
{
  /**
   * Show the home page.
   */
  public function home()
  {
    $pseudo = '';
    return view('index', ['pseudo' => $pseudo]);
  }

  /**
   * Show the contact page.
   */
  public function contact()
  {
    return view('contact');
  }
}
