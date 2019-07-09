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
    $contacts = Contact::all()->first();
    // $catalogs = Catalog::all();
    $catalogs = Catalog::latest('id')->take(8)->get();
    $catalog2 = Catalog::where('type', '2 створки')->latest('id')->take(3)->get();
    $catalog3 = Catalog::where('type', '3 створки')->latest('id')->take(3)->get();
    $catalog_li = Catalog::where('type', '3 створки')->first();

    // dd($catalog_li);

    return view('site.index', compact('menus', 'advantages', 'slide', 'contacts', 'catalogs', 'catalog2', 'catalog3', 'catalog_li'));
  }
}
