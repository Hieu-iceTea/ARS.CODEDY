<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Utilities\Utility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function postLogin(Request $request)
    {
        $credentials = [
            'user_name' => $request->get('user_name'),
            'password' => $request->get('password'),
            'level' => [Utility::user_level_admin, Utility::user_level_host],
            'active' => TRUE,
            'deleted' => FALSE,
        ];

        $remember = $request->get('remember') == true;

        if (Auth::attempt($credentials, $remember)) {
            return redirect()->intended('admin'); //Làm như này để sau khi đăng nhập sẽ quay lại trang trước đó
            //return redirect()->route('admin'); //còn như này sẽ luôn chuyển hướng tới 'admin'.
        } else {
            return redirect()->back()
                ->withInput()
                ->withErrors('Sai tài khoản hoặc mật khẩu')
                ->with('preloader', 'none');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login')
            ->with('notification', 'Successfully logout')
            ->with('preloader', 'none');
    }
}
