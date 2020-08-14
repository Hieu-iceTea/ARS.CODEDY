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
            // nếu level =1 (admin), deleted = false (tài khoản chưa bị xóa) thì cho qua.
            if ($user->level == Utility::user_level_member && $user->deleted == false) {
                //Nếu đã đăng nhập mà vẫn vào login hoặc register thì chuyển hướng
                if ($request->segment(2) == 'login' || $request->segment(2) == 'register') {
                    return redirect('member');
                }
                return $next($request);
            } else {
                //Nếu sai level thì đăng xuất và đăng nhập lại
                Auth::logout();
                return redirect()->route('member.login');
            }
        } else {
            //nếu chưa đăng nhập thì chặn lại yêu cầu đăng nhập | Nếu đang vào trang login hoặc register thì cho qua
            if ($request->segment(2) == 'login' || $request->segment(2) == 'register') {
                return $next($request);
            } else {
                return redirect()->route('member.login');
            }
        }
    }
}
