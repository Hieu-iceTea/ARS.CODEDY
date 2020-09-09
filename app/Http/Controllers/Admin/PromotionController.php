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

        if ($keyword != null) {
            $promotions = Promotion::where(function ($query) use ($keyword) {
                    $query->where('code', '=', $keyword);
                    $query->orWhere('title', 'like', '%' . $keyword . '%');
                    $query->orWhere('expiration_date', 'like', '%' . $keyword . '%');
                    $query->orderBy('promotion_id', 'desc');
                })

                //Sắp xép theo thứ tự id
                ->paginate();
        } else {
            $promotions = Promotion::orderBy('promotion_id', 'desc')
                ->paginate();
        }

        //giúp chuyển trang page sẽ đính kèm theo từ khóa search của người dùng:
        $promotions->appends(['search' => $keyword]);

        return view('admin.promotion.index', compact('promotions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.promotion.create-edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        //Lấy dữ liệu từ request người dùng
        $code = $request->get('code');
        $title = $request->get('title');
        $discount = $request->get('discount');
        $qty_total = $request->get('qty_total');
        $qty_remain = $request->get('qty_remain');
        $start_date = $request->get('start_date');
        $expiration_date = $request->get('expiration_date');
        $active = $request->get('active');
        $description = $request->get('description');

        //Xử lí dữ liệu
        $discount = str_replace([' ₫', '.'], '', $discount);
        $discount = str_replace([','], '.', $discount);
        $active = $active ?? false;

        //Insert dữ liệu vào db
        $promotion = new Promotion();
        $promotion->code = $code;
        $promotion->title = $title;
        $promotion->discount = $discount;
        $promotion->qty_total = $qty_total;
        $promotion->qty_remain = $qty_remain;
        $promotion->start_date = $start_date;
        $promotion->expiration_date = $expiration_date;
        $promotion->active = $active;
        $promotion->description = $description;
        $promotion->save();

        //Output
        if ($promotion->promotion_id != null) {
            return redirect('admin/promotion/' . $promotion->promotion_id)->with('notification', 'Created successfully!');
        } else {
            return redirect()->back()->withErrors('Created Fail');
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
        $promotion = Promotion::findOrFail($id);
        return view('admin.promotion.show', compact('promotion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $promotion = Promotion::findOrFail($id);
        return view('admin.promotion.create-edit', compact('promotion'));
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
        //Lấy dữ liệu ra từ người dùng
        $code = $request->get('code');
        $title = $request->get('title');
        $discount = $request->get('discount');
        $qty_total = $request->get('qty_total');
        $qty_remain = $request->get('qty_remain');
        $start_date = $request->get('start_date');
        $expiration_date = $request->get('expiration_date');
        $active = $request->get('active');
        $description = $request->get('description');

        //Sử lí dữ liệu đầu vào (định dạng cho discount)
        $discount = str_replace([' ₫', '.'], '', $discount);
        $discount = str_replace([','], '.', $discount);
        $active = $active ?? false;

        //Update dữ liệu vào trong db
        $update_status = Promotion::where('promotion_id', $id)->update([
            'code' => $code,
            'title' => $title,
            'discount' => $discount,
            'qty_total' => $qty_total,
            'qty_remain' => $qty_remain,
            'start_date' => $start_date,
            'expiration_date' => $expiration_date,
            'active' => $active,
            'description' => $description,
        ]);

        //Thông báo kết quả
        if ($update_status == true) {
            return redirect('admin/promotion/' . $id)->with('notification', 'Update successfully!');
        } else {
            return redirect('admin/promotion/' . $id)->withErrors('Update Fail');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Promotion::where('promotion_id', $id)->update([
            'deleted' => true,
        ]);

        if (url()->previous() != url()->current()) {
            return redirect()->back()->with('notification', 'Deleted successfully!');
        } else {
            //Nếu trang trước giống trang hiện tại thì chuyển hướng về trang chủ
            //(tức là ở trang detail, ấn nút xóa. xóa xong redirect()->back() sẽ quay lại trang detail để hiện thị item đã xóa gây ra lỗi)
            return redirect('admin/promotion')->with('notification', 'Deleted successfully!');
        }
    }
}
