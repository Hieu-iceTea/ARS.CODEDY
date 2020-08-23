<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     *
     *
     */
    public function getLogin()
    {
        return view('admin.login');
    }

    /**
     *
     *
     */
    public function postLogin()
    {
        return redirect('admin.index');
    }
}
