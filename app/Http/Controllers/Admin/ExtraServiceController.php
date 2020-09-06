<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\ExtraService;
use App\Utilities\Utility;
use Illuminate\Http\Request;

class ExtraServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');

        $extra_services = ExtraService::where('extra_service_id', '=', $keyword)
            ->orWhere('name', 'like', '%' . $keyword . '%')
            ->orWhere('price', 'like', '%' . $keyword . '%')
            ->where('deleted', false)
            ->orderBy('extra_service_id', 'desc')
            ->paginate();

        //giúp chuyển trang page sẽ đính kèm theo từ khóa search của người dùng:
        $extra_services->appends(['search' => $keyword]);

        return view('admin.extra-service.index', compact('extra_services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.extra-service.create-edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        //input
        $name = $request->get('name');
        $price = $request->get('price');
        $file = $request->image;
        $file_name_original = $file->getClientOriginalName();
        $active = $request->get('active');
        $description = $request->get('description');

        //di chuyển file vào đường dẫn chỉ định
        $file->move('img/extra_service', $file_name_original);

        //Xử lí dữ liệu
        $price = str_replace([' ₫', '.'], '', $price);
        $price = str_replace([','], '.', $price);
        $active = $active ?? false;

        //lưu dữ liệu vào database
        $extra_service = new ExtraService();
        $extra_service->name = $name;
        $extra_service->price = $price;
        $extra_service->image = $file_name_original;
        $extra_service->active = $active;
        $extra_service->description = $description;
        $extra_service->save();

        //output
        if ($extra_service->extra_service_id != null) {
            return redirect('admin/extra-service/'.$extra_service->extra_service_id)
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $extra_service = ExtraService::all()->where('extra_service_id', $id)->first();

        //Kiểm tra, nếu k tìm thấy dữ liệu trong DB thì thông báo lỗi
        if ($extra_service) {
            return view('admin.extra-service.show', compact('extra_service'));
        } else {
            return redirect('admin/extra-service')->withErrors('The record does not exist or has been deleted');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        //Lấy dữ liệu cho các <Selection>
        $extra_service = ExtraService::all()->where('extra_service_id', $id)->first();

        //Kiểm tra, nếu k tìm thấy dữ liệu trong DB thì thông báo lỗi
        if ($extra_service) {
            return view('admin.extra-service.create-edit', compact('extra_service'));
        } else {
            return redirect('admin/extra-service')->withErrors('The record does not exist or has been deleted');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        //xử lí dữ liệu
        if ($request->hasFile('image')) {
            $file = $request->image;
            $file_name = (new Utility())->getFileNameUniqueID($file);

            //Giữ lại tên file cũ (để sau khi DB sửa thành tên file mới thì xóa file cũ đi trong thư mục)
            $file_name_old = $request->get('image_old');
        }

        //Xử lí dữ liệu
        $price=$request->get('price');
        $price = str_replace([' ₫', '.'], '', $price);
        $price = str_replace([','], '.', $price);
        $active = $request->get('active');
        $active = $active ?? false;

        //Tạo danh sách giá trị sẽ được update:
        $values = [
            'name' => $request->get('name'),
            'price' => $price,
//            'image'=>$request->get('image'),
            'active' => $active,
            'description' => $request->get('description'),
        ];

        //Nếu có file mới được chọn thì thêm tên file mới vào danh sách $values, nếu không thì bỏ qua:
        if ($request->hasFile('image')) {
            $values['image'] = $file_name;
        }

        //Update bản ghi trong database:
        $update = ExtraService::where('extra_service_id', $id)->update($values);

        //Nếu update database thành công && có file được chọn, Di chuyển file mới đã chọn vào thư mục public:
        if ($update == true && $request->hasFile('image')) {
            $file->move('img/extra_service', $file_name);

            //Đồng thời xóa file cũ đi (nếu có file cũ):
            if ($file_name_old != '') {
                unlink('img/extra_service/' . $file_name_old);
            }
        }

        //Kiểm tra, nếu k tìm thấy dữ liệu trong DB thì thông báo lỗi
        if ($update == true) {
            return redirect('admin/extra-service/' . $id)->with('notification', 'Updated successfully!')
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        ExtraService::where('extra_service_id', $id)->update([
            'deleted' => true,
        ]);

        if (url()->previous() != url()->current()) {
            return redirect()->back()->with('notification', 'Deleted successfully!');
        } else {
            //Nếu trang trước giống trang hiện tại thì chuyển hướng về trang chủ
            //(tức là ở trang detail, ấn nút xóa. xóa xong redirect()->back() sẽ quay lại trang detail để hiện thị item đã xóa gây ra lỗi)
            return redirect('admin/extra-service')->with('notification', 'Deleted successfully!');
        }
    }
}
