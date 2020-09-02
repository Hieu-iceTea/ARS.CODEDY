<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Model\User;
use App\Utilities\Utility;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Mail;
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
     * @param UserRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postLogin(UserRequest $request)
    {
        $credentials = [
            'user_name' => $request->get('user_name'),
            'password' => $request->get('password'),
            'level' => Utility::user_level_member,
            'deleted' => FALSE,
        ];

        $remember = $request->get('remember') == 'remember';

        if (Auth::attempt($credentials, $remember)) {
            return redirect()->intended('member'); //Làm như này để sau khi đăng nhập sẽ quay lại trang trước đó
            //return redirect()->route('member'); //còn như này sẽ luôn chuyển hướng tới 'member'.
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
     * @param UserRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postRegister(UserRequest $request)
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

        //chỉ lấy những thông tin nào email cần chứ ko lấy hết (để tránh lộ mật khẩu)
        // [vì chrome liên tục cảnh báo bảo mật, nhưng sau khi làm như này vẫn còn cảnh báo, :'( híc ]
        $data_send_mail = [
            'verification_code' => $user->verification_code,
            'user_id' => $user->user_id,
            'gender' => $user->gender,
            'first_name' => $user->first_name,
            'last_name' => $user->last_name,
            'address' => $user->address,
            'created_at' => $user->created_at,
        ];

        //Gửi email kèm mã xác nhận kích hoạt tài khoản:
        $email_to = $user->email;
        Mail::send('pages.member.email', compact('data_send_mail'), function ($message) use ($email_to) {
            $message->from('ars.codedy@gmail.com', 'ARS.CODEDY');
            $message->to($email_to, $email_to);
            //$message->cc('', ''); //gửi cho chủ cửa hàng
            $message->subject('Activate your new account');
        });

        //Tự động đăng nhập sau khi đăng ký thành công
        Auth::loginUsingId($user->user_id);

        //Chuyển hướng đến trang xác nhận email sau khi đăng nhập
        return redirect('member/verify')
            ->with('notification', 'Sign Up Success! <br> Enter the verification code sent to your email to activate your account')
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
     * @param UserRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateProfile(UserRequest $request)
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
     * @param UserRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     * @throws \Exception
     */
    public function getVerify(UserRequest $request)
    {
        //Lấy dữ liệu từ request:
        $verification_code = $request->get('verification_code');
        $action = $request->get('action');

        $user_id = $request->get('user_id') ?? Auth::user()->user_id ?? null;

        //nếu có verification_code:
        if (isset($verification_code)) {
            $user = User::all()
                ->where('verification_code', $verification_code)
                ->where('user_id', $user_id)->first();

            if ($user == null) {
                //Nếu mã xác thực sai
                return back()
                    ->withErrors('Mã xác thực không hợp lệ hoặc đã hết hạn!')
                    ->withInput()
                    ->with('preloader', 'none');
            } else {
                //cập nhật DB
                User::where('user_id', $user->user_id)
                    ->update([
                        'active' => TRUE,
                        'email_verified_at' => Date::now(),
                        'verification_code' => null,
                        'loyalty_number' => random_int(111111, 999999),
                    ]);

                //tự động đăng nhập
                Auth::loginUsingId($user->user_id);

                //Chuyển hướng tới trang member
                return redirect()->route('member')
                    ->with('notification', 'Xác thực thành công! Bây giờ bạn có thể dùng mọi chức năng với tài khoản của bạn.')
                    ->with('preloader', 'none');
            }
        }

        //nếu có action:
        if (isset($action)) {
            //Nếu action là "resend_email"
            if ($action == 'resend_email') {
                // * [01] * Cập nhật DB, (cập nhật verification_code):
                User::where('user_id', $user_id)
                    ->update([
                        'verification_code' => Str::upper(Str::random(6)),
                    ]);

                // * [02] * Gửi email mới:
                //chỉ lấy những thông tin nào email cần chứ ko lấy hết (để tránh lộ mật khẩu)
                // [vì chrome liên tục cảnh báo bảo mật, nhưng sau khi làm như này vẫn còn cảnh báo, :'( híc ]
                $user = User::findOrFail($user_id);

                $data_send_mail = [
                    'verification_code' => $user->verification_code,
                    'user_id' => $user->user_id,
                    'gender' => $user->gender,
                    'first_name' => $user->first_name,
                    'last_name' => $user->last_name,
                    'address' => $user->address,
                    'created_at' => $user->created_at,
                ];

                // * [03] * Gửi email kèm mã xác nhận kích hoạt tài khoản:
                $email_to = $user->email;
                Mail::send('pages.member.email', compact('data_send_mail'), function ($message) use ($email_to) {
                    $message->from('ars.codedy@gmail.com', 'ARS.CODEDY');
                    $message->to($email_to, $email_to);
                    //$message->cc('', ''); //gửi cho chủ cửa hàng
                    $message->subject('Resend account verification code');
                });

                // * Final * Chuyển hướng, quay lại trang hiện tại (trang verify) và thông báo:
                return redirect()->back()
                    ->with('notification', 'Chúng tôi đã gửi lại mã xác thực tài khoản vào email của bạn. <br>Hãy kiểm tra hòm thư của bạn.')
                    ->with('preloader', 'none');
            }
        }

        //nếu KHÔNG có verification_code & action thì hiện thị trang view
        return view('pages.member.verify');
    }

    /**
     * Logout your account.
     *
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('member.login')
            ->with('notification', 'Successfully logout')
            ->with('preloader', 'none');
    }
}
