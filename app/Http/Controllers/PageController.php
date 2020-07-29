<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   public function getIndex(){
       return view('Page.Home');
   }

    public function getContact(){
       return view('Page.Contact');
    }
    public function getAbout(){
       return view('Page.About');
    }
}
