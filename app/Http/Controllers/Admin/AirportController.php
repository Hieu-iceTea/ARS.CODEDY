<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;
use App\Model\Airport;
use App\Utilities\Utility;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AirportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');

        $airports = Airport::where('airport_id', '=', $keyword)
            ->orWhere('location', 'like', '%' . $keyword . '%')
            ->orWhere('code', 'like', '%' . $keyword . '%')
            ->orWhere('name', 'like', '%' . $keyword . '%')
            ->orderBy('airport_id', 'desc')
            ->paginate();

        //giúp chuyển trang page sẽ đính kèm theo từ khóa search của người dùng:
        $airports->appends(['search' => $keyword]);

        return view('admin.airport.index', compact('airports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.airport.create-edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(AdminRequest $request)
    {
        //input
        $name = $request->get('name');
        $location = $request->get('location');
        $code = $request->get('code');
        $file = $request->image;
        $file_name_original = $file->getClientOriginalName();
        $active = $request->get('active');
        $description = $request->get('description');

        //di chuyển file vào đường dẫn chỉ định
        $file->move('img/airport', $file_name_original);

        //Xử lí dữ liệu
        $active = $active ?? false;

        //lưu dữ liệu vào database
        $airport = new Airport();
        $airport->location = $location;
        $airport->code = $code;
        $airport->name = $name;
        $airport->image = $file_name_original;
        $airport->active = $active;
        $airport->description = $description;
        $airport->save();

        //output
        if ($airport->airport_id != null) {
            return redirect('admin/airport/' . $airport->airport_id)
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
        $airport = Airport::all()->where('airport_id', $id)->first();

        //Kiểm tra, nếu k tìm thấy dữ liệu trong DB thì thông báo lỗi
        if ($airport) {
            return view('admin.airport.show', compact('airport'));
        } else {
            return redirect('admin/airport')->withErrors('The record does not exist or has been deleted');
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
        $airport = Airport::all()->where('airport_id', $id)->first();

        //Kiểm tra, nếu k tìm thấy dữ liệu trong DB thì thông báo lỗi
        if ($airport) {
            return view('admin.airport.create-edit', compact('airport'));
        } else {
            return redirect('admin/airport')->withErrors('The record does not exist or has been deleted');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(AdminRequest $request, $id)
    {
        //xử lí dữ liệu
        if ($request->hasFile('image')) {
            $file = $request->image;
            $file_name = (new Utility())->getFileNameUniqueID($file);

            //Giữ lại tên file cũ (để sau khi DB sửa thành tên file mới thì xóa file cũ đi trong thư mục)
            $file_name_old = $request->get('image_old');
        }

        //Xử lí dữ liệu
        $active = $request->get('active');
        $active = $active ?? false;

        //Tạo danh sách giá trị sẽ được update:
        $values = [
            'location' => $request->get('location'),
            'code' => $request->get('code'),
            'name' => $request->get('name'),
//            'image'=>$request->get('image'),
            'active' => $active,
            'description' => $request->get('description'),
        ];

        //Nếu có file mới được chọn thì thêm tên file mới vào danh sách $values, nếu không thì bỏ qua:
        if ($request->hasFile('image')) {
            $values['image'] = $file_name;
        }

        //Update bản ghi trong database:
        $update = Airport::where('airport_id', $id)->update($values);

        //Nếu update database thành công && có file được chọn, Di chuyển file mới đã chọn vào thư mục public:
        if ($update == true && $request->hasFile('image')) {
            $file->move('img/airport', $file_name);

            //Đồng thời xóa file cũ đi (nếu có file cũ):
            if ($file_name_old != '') {
                unlink('img/airport/' . $file_name_old);
            }
        }

        //Kiểm tra, nếu k tìm thấy dữ liệu trong DB thì thông báo lỗi
        if ($update == true) {
            return redirect('admin/airport/' . $id)->with('notification', 'Updated successfully!')
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
        Airport::where('airport_id', $id)->update([
            'deleted' => true,
        ]);

        if (url()->previous() != url()->current()) {
            return redirect()->back()->with('notification', 'Deleted successfully!');
        } else {
            //Nếu trang trước giống trang hiện tại thì chuyển hướng về trang chủ
            //(tức là ở trang detail, ấn nút xóa. xóa xong redirect()->back() sẽ quay lại trang detail để hiện thị item đã xóa gây ra lỗi)
            return redirect('admin/airport')->with('notification', 'Deleted successfully!');
        }
    }
}
