<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

use App\Menu;
use App\Advantage;
use App\Slide;
use App\Contact;
use App\Catalog;

class LandingController extends Controller
{

  /**
   * Show the application dashboard.
   *
   * @return Renderable
   */
  public function index(Request $request)
  {
    $menus = Menu::all();
    $advantage = Advantage::all();
    $slide = Slide::all();
    $contacts = Contact::all();
    $catalog = Catalog::all();

    return view('layouts.site', compact('menus', 'advantage', 'slide', 'contacts', 'catalog'));
  }
}
