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
  public function index(Request $request)
  {
    return view('layouts.site');
  }
}
