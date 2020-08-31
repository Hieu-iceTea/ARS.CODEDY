<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\PayType;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class PayTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');

        $pay_types = PayType::where('pay_type_id', '=', $keyword)
            ->orWhere('name', 'like', '%' . $keyword . '%')
            ->where('deleted', false)
            ->orderBy('pay_type_id', 'desc')
            ->paginate();

        //giúp chuyển trang page sẽ đính kèm theo từ khóa search của người dùng:
        $pay_types->appends(['search' => $keyword]);

        return view('admin.pay-type.index', compact('pay_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Request $request)
    {
        return view('admin.pay-type.create-edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * //     * @return Application|RedirectResponse|Redirector
     * * @return Application|RedirectResponse|Redirector
     */
    public function store(Request $request)
    {
        //input
        $name = $request->get('name_pay_type');
        $file = $request->image;
        $file_name_original = $file->getClientOriginalName();
        $active = $request->get('active');
        $description = $request->get('description');

        //di chuyển file vào đường dẫn chỉ định
        $file->move('img/pay_type', $file_name_original);

        //lưu dữ liệu vào database
        $pay_type = new PayType();
        $pay_type->name = $name;
        $pay_type->image = $file_name_original;
        $pay_type->active = $active;
        $pay_type->description = $description;
        $pay_type->save();

        //output
        if ($pay_type->pay_type_id != null) {
            return redirect('admin/pay-type/')
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
     * //     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pay_type = PayType::all()->where('pay_type_id', $id)->first();

        //Kiểm tra, nếu k tìm thấy dữ liệu trong DB thì thông báo lỗi
        if ($pay_type) {
            return view('admin.pay-type.show', compact('pay_type'));
        } else {
            return redirect('admin/pay-type')->withErrors('The record does not exist or has been deleted');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        PayType::where('pay_type_id', $id)->update([
            'deleted' => true,
        ]);

        if (url()->previous() != url()->current()) {
            return redirect()->back()->with('notification', 'Deleted successfully!');
        } else {
            //Nếu trang trước giống trang hiện tại thì chuyển hướng về trang chủ
            //(tức là ở trang detail, ấn nút xóa. xóa xong redirect()->back() sẽ quay lại trang detail để hiện thị item đã xóa gây ra lỗi)
            return redirect('admin/pay-type')->with('notification', 'Deleted successfully!');
        }
    }
}
