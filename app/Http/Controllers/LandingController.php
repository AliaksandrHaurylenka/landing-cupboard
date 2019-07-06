<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class LandingController extends Controller
{

  /**
   * Show the application dashboard.
   *
   * @return Renderable
   */
  public function index()
  {
    return view('site.landing');
  }
}
