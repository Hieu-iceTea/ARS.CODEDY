<?php

namespace App\Http\Controllers;

use App\Utilities\Utility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $credentials = ['user_name' => $request->user_name, 'password' => $request->password, 'level' => Utility::user_level_member];

        if ($request->remember == 'remember') {
            $remember = true;
        } else {
            $remember = false;
        }

        if (Auth::attempt($credentials, $remember)) {
            return redirect()->intended('member');
            //return redirect()->route('member');
        } else {
            return redirect()->back()
                ->withInput()
                ->withErrors('Sai tài khoản hoặc mật khẩu')
                ->with('preloader', 'none');
        }
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
        Auth::logout();
        return redirect()->route('home')->with('notification', 'Successfully logout');
    }
}
