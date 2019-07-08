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
    $advantages = Advantage::all();
    // $slide = Slide::find(3);
    // $slide = Slide::first();
    $slide = Slide::latest()->first();
    // $slide = Slide::all()->last();
    $contacts = Contact::all();
    $catalog = Catalog::all();

    // dd($slide);

    return view('site.index', compact('menus', 'advantages', 'slide', 'contacts', 'catalog'));
  }
}
