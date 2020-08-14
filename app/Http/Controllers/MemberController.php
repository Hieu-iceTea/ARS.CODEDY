<?php

namespace App\Http\Controllers;

use App\Model\User;
use App\Utilities\Utility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Str;

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
        $credentials = [
            'user_name' => $request->get('user_name'),
            'password' => $request->get('password'),
            'level' => Utility::user_level_member,
            'deleted' => FALSE,
        ];

        $remember = $request->get('remember') == 'remember';

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
        //Lấy data từ form và thêm bản ghi vào DB
        $user = new User();
        $user->user_name = $request->get('user_name');
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));
        $user->verification_code = Str::upper(Str::random(6));
        $user->gender = $request->get('gender');
        $user->first_name = $request->get('first_name');
        $user->last_name = $request->get('last_name');
        $user->dob = $request->get('dob');
        $user->phone = $request->get('phone');
        $user->address = $request->get('address');
        $user->save();

        //Tự động đăng nhập sau khi đăng ký thành công
        Auth::login($user);
        //Auth::loginUsingId($user->user_id);

        //Chuyển hướng đến trang xác nhận email sau khi đăng nhập
        return redirect('member/verify/' . $user->user_id)
            ->with('notification', 'Enter the verification code sent to your email to activate your account')
            ->with('preloader', 'none');
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
        //get data from Request & Update to DataBase
        User::where('user_id', Auth::user()->user_id)->update([
            'email' => $request->get('email'),
            'gender' => $request->get('gender'),
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'dob' => $request->get('dob'),
            'phone' => $request->get('phone'),
            'address' => $request->get('address'),
        ]);

        return redirect()->route('member')
            ->with('notification', 'Update successful')
            ->with('preloader', 'none');
    }

    /**
     * Show the form for verify a new account. & Activate a new account.
     *
     * @param Request $request
     * @param user_id $
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     * @throws \Exception
     */
    public function getVerify(Request $request, $user_id)
    {
        $verification_code = $request->get('verification_code');

        if (isset($verification_code)) {
            $user = User::all()
                ->where('verification_code', $verification_code)
                ->where('user_id', $user_id)->first();

            if ($user == null) {
                return back()
                    ->withErrors('Mã xác thực không hợp lệ!')
                    ->withInput()
                    ->with('preloader', 'none');
            } else {
                User::where('user_id', $user->user_id)
                    ->update([
                        'active' => TRUE,
                        'email_verified_at' => Date::now(),
                        'verification_code' => null,
                        'loyalty_number' => random_int(111111, 999999),
                    ]);
                return redirect()->route('member')
                    ->with('notification', 'Xác thực thành công! Bây giờ bạn có thể dùng mọi chức năng với tài khoản của bạn.')
                    ->with('preloader', 'none');
            }
        }

        return view('pages.member.verify');
    }


    /**
     * Logout your account.
     *
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home')
            ->with('notification', 'Successfully logout')
            ->with('preloader', 'none');
    }
}
