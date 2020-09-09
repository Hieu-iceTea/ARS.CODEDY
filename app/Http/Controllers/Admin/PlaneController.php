<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Plane;
use Illuminate\Http\Request;

class PlaneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //lấy dữ liệu từ request:
        $keyword = $request->get('search');

        //lấy dữ liệu từ database theo từ khóa tìm kiếm:
        $geDatatPlanes = Plane::where('code', '=', $keyword)
            ->orWhere('name', 'like', '%' . $keyword . '%')
            ->orderBy('plane_id', 'desc')
            ->paginate();

        //giúp chuyển trang page sẽ đính kèm theo từ khóa search của người dùng:
        $geDatatPlanes->appends(['search' => $keyword]);

        //trả về view kèm dữ liệu từ database:
        return view('admin.plane.index', compact('geDatatPlanes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.plane.create-edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*input*/
        $name = $request->name_plane;
        $code = $request->code_plane;
        $description = $request->description;
        $active = $request->active;

        // xử lý dữ liệu:
        $active = $active ?? false;

        //lưu dữ liệu mới:
        $plane = new Plane();

        $plane->code = $code;
        $plane->name = $name;
        $plane->description = $description;
        $plane->active = $active;

        $plane->save();

        //thông báo cho người dùng:
        $id = $plane->plane_id;
        return redirect('admin/plane/' . $id)->with('notification', 'Created successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $getDataPlane = Plane::findOrFail($id);
        return view('admin.plane.show', compact('getDataPlane'));
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
        $getDataPlane = Plane::findOrFail($id);
        return view('admin.plane.create-edit', compact('getDataPlane'));
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
        /*input*/
        $name = $request->name_plane;
        $code = $request->code_plane;
        $description = $request->description;
        $active = $request->active;

        // xử lý dữ liệu:
        $active = $active ?? false;

        $getPlane = Plane::find($id);
        $getPlane->code = $code;
        $getPlane->name = $name;
        $getPlane->description = $description;
        $getPlane->active = $active;

        $getPlane->save();
        return redirect('admin/plane/' . $id)->with('notification', 'Updated successfully!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $update = Plane::find($id)->update([
            'deleted' => true,
        ]);

        return redirect('admin/plane');
    }
}
