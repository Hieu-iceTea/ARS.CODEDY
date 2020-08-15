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
            // nếu level = 3 (member), deleted = false (tài khoản chưa bị xóa) thì cho qua.
            if ($user->level == Utility::user_level_member && $user->deleted == false) {
                //nếu tài khoản chưa xác nhận email thì yêu cầu xác nhận (chỉ được vào trang verify hoặc logout)
                if ($user->active == FALSE && $request->segment(2) != 'verify' && $request->segment(2) != 'logout') {
                    return redirect('member/verify/' . $user->user_id)
                        ->with('notification', 'Enter the verification code sent to your email to activate your account')
                        ->with('preloader', 'none');
                }

                //Nếu đã đăng nhập mà vẫn vào login hoặc register thì chuyển hướng
                if ($request->segment(2) == 'login' || $request->segment(2) == 'register') {
                    return redirect('member');
                }
                return $next($request);
            } else {
                //Nếu sai level thì đăng xuất và chuyển hướng tới đăng nhập
                Auth::logout();
                return redirect()->route('member.login');
            }
        } else {
            //nếu chưa đăng nhập thì chặn lại & yêu cầu đăng nhập | Nếu đang vào trang login hoặc register hoặc verify thì cho qua
            if ($request->segment(2) == 'login' || $request->segment(2) == 'register' || $request->segment(2) == 'verify') {
                return $next($request);
            } else {
                return redirect()->route('member.login');
            }
        }
    }
}
