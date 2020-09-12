<?php

namespace App\Http\Middleware;

use App\Model\User;
use App\Utilities\Utility;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAdminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // nếu admin/host đã đăng nhập
        if (Auth::check()) {
            $user = Auth::user();
            // nếu level = admin/host, deleted = false (tài khoản chưa bị xóa) thì kiểm tra tiếp.
            if (($user->level == Utility::user_level_admin || $user->level == Utility::user_level_host) && $user->deleted == false) {

                //Nếu đã đăng nhập mà vẫn vào login hoặc register thì chuyển hướng
                if ($request->segment(2) == 'login' || $request->segment(2) == 'register') {
                    return redirect('admin');
                }

                //Nếu dùng tài khoản "Admin_Demo" thì ngăn không cho sửa/thêm mới/xóa
                if ($user->user_name == 'Admin_Demo') {
                    $name = User::where('user_name', '=', 'Host')->first()->first_name ?? 'Hiếu-iceTea';
                    if (!$request->isMethod('GET')) {
                        return redirect()
                            ->back()
                            ->withInput()
                            ->with('notification', '<b>Tài khoản <i>Admin_Demo</i> không có quyền sửa hoặc thêm mới dữ liệu.</b><br><br>Liên hệ với <i>' . $name . '</i> để được tạo tài khoản admin có đủ quyền của riêng bạn & được hướng dẫn chi tiết cách sử dụng.<br><br>Cảm ơn. 💜');
                    }
                }

                //Khác tất cả những trường hợp trên thì cho qua
                return $next($request);

            } else {
                //Nếu sai level (!= admin) hoặc deleted = false: thì đăng xuất và chuyển hướng tới đăng nhập.
                Auth::logout();
                return redirect()->route('admin.login');
            }
        } else {
            //nếu chưa đăng nhập thì chặn lại & yêu cầu đăng nhập | Nếu đang vào trang login hoặc register hoặc verify thì cho qua
            if ($request->segment(2) == 'login' || $request->segment(2) == 'register') {
                return $next($request);
            } else {
                return redirect()->guest('admin/login'); //Create a new redirect response, while putting the current URL in the session.
                //return redirect()->route('admin.login'); //không nên dùng cách này.
            }
        }
    }
}
