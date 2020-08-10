<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display the dashboard.
     *
     */
    public function index()
    {
        return view('pages.member.index');
    }

    /**
     * Show the form for login.
     *
     */
    public function getLogin()
    {
        return view('pages.member.login');
    }

    /**
     * Receive data and Login.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function postLogin(Request $request)
    {
        //
        return redirect()->route('member');
    }

    /**
     * Show the form for creating a new account.
     *
     */
    public function getRegister()
    {
        return view('pages.member.register');
    }

    /**
     * Store a newly created account in storage.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function postRegister(Request $request)
    {
        //
        return redirect('member/register/verify');
    }

    /**
     * Show the form for editing profile.
     *
     */
    public function editProfile()
    {
        return view('pages.member.edit-profile');
    }

    /**
     * Update profile in storage.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function updateProfile(Request $request)
    {
        //
        return redirect()->route('member')->with('notification', 'Update successful');
    }

    /**
     * Show the form for verify a new account.
     *
     */
    public function getVerify()
    {
        return view('pages.member.verify');
    }

    /**
     * Activate a new account.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function postVerify(Request $request)
    {
        //
        return redirect()->route('member')->with('status', 'complete');
    }

    /**
     * Logout your account.
     *
     */
    public function logout()
    {
        return redirect()->route('home')->with('notification', 'Successfully logout');
    }
}
