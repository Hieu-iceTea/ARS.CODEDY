<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;
use App\Model\User;
use App\Utilities\Utility;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');

        if ($keyword != '') {
            $users = User::search($keyword);

            if (count($users) > 0) {
                return view('admin.user.index', compact('users'));
            }
            return view('admin.user.index', compact('users'))->withErrors('No search results. Try to search again!');
        }

        $users = User::getItems();
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('admin.user.create-edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param AdminRequest $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(AdminRequest $request)
    {
        if (Auth::user()->level == Utility::user_level_admin && ($request->get('level') == Utility::user_level_admin || $request->get('level') == Utility::user_level_host)) {
            return redirect()->back()
                ->withInput()
                ->withErrors('<b>Bạn đang dùng tài khoản <i>Admin</i>, không có quyền cập nhật nhóm tài khoản <i>Admin/Host</i>.</b><br><br>Hãy chuyển sang tài khoản <i>Host</i> để có thể thêm/sửa/xóa tài khoản thuộc nhóm tài khoản này.');
        }

        // * [01] * Xử lý dữ liệu:
        //Nếu có file được chọn:
        if ($request->hasFile('image')) {
            $file = $request->image;
            $file_name = (new Utility())->getFileNameUniqueID($file);
        } else {
            $file_name = null;
        }

        // * [02] * Insert database:
        $user = new User();
        $user->user_name = $request->get('user_name');
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));
        $user->level = $request->get('level');
        $user->image = $file_name;
        $user->gender = $request->get('gender');
        $user->first_name = $request->get('first_name');
        $user->last_name = $request->get('last_name');
        $user->dob = $request->get('dob');
        $user->phone = $request->get('phone');
        $user->address = $request->get('address');
//        $user->loyalty_number = $request->get('loyalty_number');
        $user->active = $request->get('active');
        $user->save();

        // * [03] * Lưu file:
        //Nếu thêm bản ghi thành công && có file được chọn, Di chuyển file đã chọn vào thư mục public:
        if ($user->user_id != null && $request->hasFile('image')) {
            $file->move('img/user', $file_name);
        }

        // * Final * Thông báo kết quả:
        if ($user->user_id != null) {
            return redirect('admin/user/' . $user->user_id)
                ->with('notification', 'Created successfully!');
        } else {
            return redirect()->back()
                ->withErrors('Created failed!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     */
    public function show($id)
    {
        $user = User::getItemById($id);

        return view('admin.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     */
    public function edit($id)
    {
        $user = User::getItemById($id);

        //nếu đang đăng nhập tài khoản admin, thì không thêm/sửa/xóa được tài khoản admin/host
        if (Auth::user()->level == Utility::user_level_admin && ($user->level == Utility::user_level_admin || $user->level == Utility::user_level_host)) {
            return redirect()->back()->withErrors('<b>Bạn đang dùng tài khoản <i>Admin</i>, không có quyền cập nhật nhóm tài khoản <i>Admin/Host</i>.</b><br><br>Hãy chuyển sang tài khoản <i>Host</i> để có thể thêm/sửa/xóa tài khoản thuộc nhóm tài khoản này.');
        }

        return view('admin.user.create-edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param AdminRequest $request
     * @param int $id
     * @return Application|RedirectResponse|Redirector
     */
    public function update(AdminRequest $request, $id)
    {
        //nếu đang đăng nhập tài khoản admin, thì không thêm/sửa/xóa được tài khoản admin/host
        if (Auth::user()->level == Utility::user_level_admin && ($request->get('level') == Utility::user_level_admin || $request->get('level') == Utility::user_level_host)) {
            return redirect()->back()
                ->withInput()
                ->withErrors('<b>Bạn đang dùng tài khoản <i>Admin</i>, không có quyền cập nhật nhóm tài khoản <i>Admin/Host</i>.</b><br><br>Hãy chuyển sang tài khoản <i>Host</i> để có thể thêm/sửa/xóa tài khoản thuộc nhóm tài khoản này.');
        }

        // * [01] * Xử lý dữ liệu:
        //Nếu có file được chọn:
        if ($request->hasFile('image')) {
            $file = $request->image;
            $file_name = (new Utility())->getFileNameUniqueID($file);

            //Giữ lại tên file cũ (để sau khi DB sửa thành tên file mới thì xóa file cũ đi trong thư mục)
            $file_name_old = $request->get('image_old'); //Cách 1: lưu tên file cũ trong html
            //$file_name_old = User::where('user_id', $id)->first()->image; //Cách 2: lấy từ DB lên, trước khi DB được update.
        }

        // * [02] * Update database:
        //Tạo danh sách giá trị sẽ được update:
        $values = [
            'user_name' => $request->get('user_name'),
            'email' => $request->get('email'),
//            'password' => $request->get('password'),
            'level' => $request->get('level'),
            'gender' => $request->get('gender'),
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'dob' => $request->get('dob'),
            'phone' => $request->get('phone'),
            'address' => $request->get('address'),
//            'loyalty_number' => $request->get('loyalty_number'),
            'active' => $request->get('active'),
        ];

        //Nếu có file mới được chọn thì thêm tên file mới vào danh sách $values, nếu không thì bỏ qua:
        if ($request->hasFile('image')) {
            $values['image'] = $file_name;
        }

        //Update bản ghi trong database:
        $update = User::where('user_id', $id)->update($values);

        // * [03] * Update file:
        //Nếu update database thành công && có file được chọn, Di chuyển file mới đã chọn vào thư mục public:
        if ($update == true && $request->hasFile('image')) {
            $file->move('img/user', $file_name);

            //Đồng thời xóa file cũ đi (nếu có file cũ):
            if ($file_name_old != '') {
                unlink('img/user/' . $file_name_old);
            }
        }

        // * Final * Thông báo kết quả:
        if ($update == true) {
            return redirect('admin/user/' . $id)->with('notification', 'Updated successfully!')
                ->with('notification', 'Update successfully!');
        } else {
            return redirect()->back()
                ->withErrors('Update failed!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     */
    public function destroy($id)
    {
        //nếu đang đăng nhập tài khoản admin, thì không thêm/sửa/xóa được tài khoản admin/host
        $user = User::getItemById($id);
        if (Auth::user()->level == Utility::user_level_admin && ($user->level == Utility::user_level_admin || $user->level == Utility::user_level_host)) {
            return redirect()->back()->withErrors('<b>Bạn đang dùng tài khoản <i>Admin</i>, không có quyền cập nhật nhóm tài khoản <i>Admin/Host</i>.</b><br><br>Hãy chuyển sang tài khoản <i>Host</i> để có thể thêm/sửa/xóa tài khoản thuộc nhóm tài khoản này.');
        }

        // * [01] * Chuẩn bị dữ liệu
        //(Giữ lại tên file trước khi xóa bản ghi trong DB -> để xóa được file ấy sau khi tên file đã bị xóa trong DB)
        $fileName = User::where('user_id', $id)->first()->image;

        // * [02] * Xóa trong database:
        $update = User::where('user_id', $id)->update([
            'deleted' => true,
        ]);

        // * [03] * Xóa file trong thư mục:
        // (Nếu update DB thành công thì xóa file)
        if ($update == true) {
            $str = 'img/user/';
            $file_move = File::move(public_path($str . $fileName), public_path($str . 'trash/' . $fileName)); //Di chuyển vào thùng rác
            //$file_delete = File::delete(public_path($str . $fileName)); //Xóa vĩnh viễn
        }

        // * Final * Thông báo kết quả:
        if ($update == true && $file_move == true) {
            if (url()->previous() != url()->current()) {
                return redirect()->back()->with('notification', 'Deleted successfully!');
            } else {
                //Nếu trang trước giống trang hiện tại thì chuyển hướng về trang danh sách (index).
                //(tức là ở trang detail, ấn nút xóa. xóa xong redirect()->back() sẽ quay lại trang detail để hiện thị item đã xóa gây ra lỗi)
                return redirect('admin/user')->with('notification', 'Deleted successfully!');
            }
        }
    }
}
