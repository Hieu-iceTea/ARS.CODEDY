<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Airport;
class PageController extends Controller
{
    /**
     * Display a listing of the resource for search form.
     *
     */
    public function index()
    {
        $addressAirports = Airport::select('name','airport_id')->get();
        return view('pages.index',compact('addressAirports'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function news()
    {
        return view('pages.news');
    }
}
