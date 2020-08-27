<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Promotion;
use Illuminate\Http\Request;


class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');

        $promotions = Promotion::where('code', '=', $keyword)
            // Tìm kiếm theo tên được search
            ->orWhere('title', 'like', '%' . $keyword . '%')
            ->orWhere('expiration_date', 'like', '%' . $keyword . '%')
            //Sắp xép theo thứ tự id
            ->orderBy('promotion_id', 'desc')
            ->paginate();

        //giúp chuyển trang page sẽ đính kèm theo từ khóa search của người dùng:
        $promotions->appends(['search' => $keyword]);

        return view('admin.promotion.index',compact('promotions'));
//------------------------------
//        $keyword = $request->get('search');
//
//        if ($keyword != '') {
//            $promotions = Promotion::search($keyword);
//
//            if (count($promotions) > 0) {
//                return view('admin.promotion.index', compact('promotions'));
//            }
//            return view('admin.promotion.index', compact('promotions'))->withErrors('No search results. Try to search again!');
//        }
//
//        $promotions = Promotion::all();
//        return view('admin.promotion.index', compact('promotions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        Promotion::where('promotion_id', $id)->update([
//            'deleted' => true,
//        ]);
//
//        if (url()->previous() != url()->current()) {
//            return redirect()->back()->with('notification', 'Deleted successfully!');
//        } else {
//            //Nếu trang trước giống trang hiện tại thì chuyển hướng về trang chủ
//            //(tức là ở trang detail, ấn nút xóa. xóa xong redirect()->back() sẽ quay lại trang detail để hiện thị item đã xóa gây ra lỗi)
//            return redirect('admin/promotion')->with('notification', 'Deleted successfully!');
//        }
        Promotion::find($id)->delete();
        return redirect('admin/promotion')->with('notification', 'Deleted successfully!');

    }
}
