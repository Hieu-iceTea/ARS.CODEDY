<?php

namespace App\Http\Middleware;

use App\Utilities\Utility;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckMemberLogin
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // nếu user đã đăng nhập
        if (Auth::check()) {
            $user = Auth::user();
            // nếu level = 3 (member), deleted = false (tài khoản chưa bị xóa) thì kiểm tra tiếp.
            if ($user->level == Utility::user_level_member && $user->deleted == false) {
                //nếu tài khoản chưa xác nhận email thì yêu cầu xác nhận (chỉ được vào trang verify hoặc logout)
                if ($user->active == FALSE && $request->segment(2) != 'verify' && $request->segment(2) != 'logout') {
                    return redirect('member/verify')
                        ->with('notification', 'Enter the verification code sent to your email to activate your account')
                        ->with('preloader', 'none');
                }

                //nếu tài khoản đã xác nhận nhưng vẫn vào trang verify thì chuyển hướng tới member
                //(một trong 2 $request [verification_code || user_id] = NULL)
                if ($user->active == TRUE && $request->segment(2) == 'verify'
                    && ($request->get('verification_code') == '' || $request->get('user_id') == '')) {
                    return redirect()->route('member');
                }

                //Nếu đã đăng nhập mà vẫn vào login hoặc register thì chuyển hướng
                if ($request->segment(2) == 'login' || $request->segment(2) == 'register') {
                    return redirect('member');
                }

                //Khác tất cả những trường hợp trên thì cho qua
                return $next($request);

            } else {
                //Nếu sai level (!= member) hoặc tài khoản bị xóa thì đăng xuất và chuyển hướng tới đăng nhập
                Auth::logout();
                return redirect()->route('member.login');
            }
        } else {
            //nếu chưa đăng nhập thì chặn lại & yêu cầu đăng nhập | Nếu đang vào trang login hoặc register hoặc verify thì cho qua
            if ($request->segment(2) == 'login' || $request->segment(2) == 'register' || $request->segment(2) == 'verify') {

                //Nếu chưa đăng nhập, đang vào verify mà một trong 2 $request (user_id verification_code) NULL thì chuyển hướng tới đăng nhập
                if ($request->segment(2) == 'verify' & ($request->get('user_id') == '' || $request->get('verification_code') == '')) {
                    return redirect()->route('member.login');
                }

                //Khác những trường hợp trên thì cho qua
                return $next($request);
            } else {
                //Lưu đường dẫn hiện tại (trước khi bị chuyển hướng tới login) => để sau khi login thì quay lại trang đó
                //(có cách hay hơn là dùng guest như ở dưới nè)
                //if (!session()->has('url.intended')) {
                //    session(['url.intended' => $request->url()]);
                //}

                return redirect()->guest('member/login'); //Create a new redirect response, while putting the current URL in the session.
                //return redirect()->route('member.login');
            }
        }
    }
}
