<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    //Index của Acount
    public function index(){
        return view('pages.member.index');
    }
    // Login của Acount
    public function getLogin(){
        return view('pages.member.login');
    }
    public function postLogin(Request $request){

    }
    // Register của Acount
    public function getRegister(){
        return view('pages.member.register');
    }
    public function postRegister(Request $request){

    }

    //Logout của Acount
    public function logout(){
        return redirect()->route('home');
    }

}
