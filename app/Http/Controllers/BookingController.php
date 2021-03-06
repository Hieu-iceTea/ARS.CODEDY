<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingRequest;
use App\Model\Airport;
use App\Model\ExtraService;
use App\Model\FlightSchedule;
use App\Model\Passenger;
use App\Model\PayType;
use App\Model\Ticket;
use App\Utilities\Utility;
use App\Utilities\VNPay;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\View\View;

class BookingController extends Controller
{
    /**
     * Show flight search form
     *
     */
    public function index()
    {
        /*
         *
         * Phần này tương tự 'getStep1' ở ngay phía dưới.
         *
         * Nhưng chỉ hiện thị form tìm kiếm chuyến bay chứ không hiện thị dữ liệu tìm kiếm được
         * Vì thế, phần này mượn view 'pages.booking.step-1' để dùng chung.
         * Và đã xử lý phân luồng phần dùng chung.
         *
         * Hiếu iceTea
         * 2020-09-02 18:30
         *
         */

        //Lấy data cho form tìm kiếm ở modal
        $addressAirports = Airport::select('name', 'airport_id', 'location', 'code')->get();

        $isShowModalFlightSearch = true;

        return view('pages.booking.step-1', compact('addressAirports', 'isShowModalFlightSearch'))
            ->with('preloader', 'none');
    }

    /**
     * Show the form for Booking/Step-1.
     *
     * @param BookingRequest $request
     * @return Application|Factory|RedirectResponse|Redirector|View
     */
    public function getStep1(Request $request)
    {
        //Lấy data cho form tìm kiếm ở modal
        $addressAirports = Airport::select('name', 'airport_id', 'location', 'code')->get();

        //Get data from request:
        $airport_from_id = $request->get('from');
        $airport_to_id = $request->get('to');
        $departure_at = $request->get('departure');

        $adults = $request->get('adults');
        $children = $request->get('children');
        $infant = $request->get('infant');

        //Kiểm tra dữ liệu nhập vào có null không? Nếu thiếu bất cứ thông tin gì thì yêu cầu người dùng nhập thêm
        if (isset($airport_from_id) && isset($airport_to_id) && isset($departure_at) && isset($adults) && isset($children) && isset($infant)) {

            //Tính tổng số hành khách:
            $totalPassenger = $adults + $children + $infant;

            //get data of Airport from DataBase:
            $airport_from = Airport::all()->where('airport_id', $airport_from_id)->first();
            $airport_to = Airport::all()->where('airport_id', $airport_to_id)->first();

            $searchInput = [
                'airport_from_name' => $airport_from->name,
                'airport_from_code' => $airport_from->code,
                'airport_to_name' => $airport_to->name,
                'airport_to_code' => $airport_to->code,
                'departure_at' => $departure_at,
                'adults' => $adults,
                'children' => $children,
                'infant' => $infant,
                'totalPassenger' => $totalPassenger,
            ];

            //get data Flight-Schedules from DataBase:
            $flightSchedules = FlightSchedule::where('airport_from_id', $airport_from_id)
                ->where('airport_to_id', $airport_to_id)
                ->where('departure_at', 'like', '%' . $departure_at . '%')
                ->get();

            return view('pages.booking.step-1', compact('flightSchedules', 'searchInput', 'airport_to', 'addressAirports'));

            /*if (count($flightSchedules) > 0) {
                return view('pages.booking.step-1', compact('flightSchedules', 'searchInput', 'airport_to', 'addressAirports'));
            } else {
                return redirect('/')
                    ->with('notification', "Sorry, we don't have any flights yet with your chosen information!")
                    ->with('preloader', 'none');
            }*/
        } else {
            $isShowModalFlightSearch = true;

            return view('pages.booking.step-1', compact('addressAirports', 'isShowModalFlightSearch'))
                ->with('preloader', 'none');
        }
    }

    /**
     * Receive data and redirect to the next page.
     *
     * @param BookingRequest $request
     * @return Application|RedirectResponse|Redirector
     */
    public function postStep1(BookingRequest $request)
    {
        $flight_schedule_id = $request->get('flight_schedule_id');
        if ($flight_schedule_id == '') {
            return redirect()->back()->withInput()->withErrors('Please choose flight');
        }

        //get data from form (in hidden-field)
        $booking_session = [
            'flight_schedule_id' => $request->get('flight_schedule_id'),
            'flightSchedule' => FlightSchedule::find($request->get('flight_schedule_id')),
            'seat_type' => $request->get('seat_type'),
            'seat_price' => $request->get('seat_price'),

            'passenger_count' => $request->get('passenger_count'),
        ];

        //put to session
        $this->updateSession('booking_session', $booking_session);

        return redirect('booking/step-2');
    }

    /**
     * Show the form for Booking/Step-2.
     *
     * @param Request $request
     */
    public function getStep2(Request $request)
    {
        //Kiểm tra phiên session còn tồn tại không? Nếu không thì quay về trang chủ và báo lỗi
        if (!Session::has('booking_session') || Session::get('booking_session') === null) {
            return redirect('/')
                ->withErrors('Session expires. <br> please search again for your flight')
                ->with('preloader', 'none');
        }

        //get data from Session:
        $booking_session = Session::get('booking_session');


        $passenger_count = $booking_session['passenger_count'];

        return view('pages.booking.step-2', compact('passenger_count', 'booking_session'));
    }

    /**
     * Receive data and redirect to the next page.
     *
     * @param BookingRequest $request
     * @return Application|RedirectResponse|Redirector
     */
    public function postStep2(BookingRequest $request)
    {
        //get data from request:
        $new_data = [
            'passengers' => $request->get('passengers'),
            'contact' => $request->get('contact'),
        ];

        //update booking_session:
        $this->updateSession('booking_session', $new_data);

        return redirect('booking/step-3');
    }

    /**
     * Show the form for Booking/Step-3.
     *
     */
    public function getStep3()
    {
        //Kiểm tra phiên session còn tồn tại không? Nếu không thì quay về trang chủ và báo lỗi
        if (!Session::has('booking_session') || Session::get('booking_session') === null) {
            return redirect('/')
                ->withErrors('Session expires! <br> please search again for your flight')
                ->with('preloader', 'none');
        }

        $booking_session = Session::get('booking_session');
        $extraServices = ExtraService::all();

        return view('pages.booking.step-3', compact('extraServices', 'booking_session'));
    }

    /**
     * Receive data and redirect to the next page.
     *
     * @param BookingRequest $request
     * @return Application|RedirectResponse|Redirector
     */
    public function postStep3(BookingRequest $request)
    {
        //get data from request:
        $new_data = [
            'extra_service_ids' => $request->get('extra_service_ids'),
            'extraService_total_price' => $request->get('extraService_total_price'),
        ];

        //update booking_session:
        $this->updateSession('booking_session', $new_data);

        return redirect('booking/step-4');
    }

    /**
     * Show the form for Booking/Step-4.
     *
     */
    public function getStep4()
    {
        //Kiểm tra phiên session còn tồn tại không? Nếu không thì quay về trang chủ và báo lỗi
        if (!Session::has('booking_session') || Session::get('booking_session') === null) {
            return redirect('/')
                ->withErrors('Session expires! <br> please search again for your flight')
                ->with('preloader', 'none');
        }

        $booking_session = Session::get('booking_session');
        $payTypes = PayType::all();

        $data = array_merge($booking_session, ['payTypes' => $payTypes]);

        return view('pages.booking.step-4', $data);
    }

    /**
     * Receive data and redirect to the completed page.
     *
     * @param BookingRequest $request
     * @return Application|RedirectResponse|Redirector
     */
    public function postStep4(BookingRequest $request)
    {
        $pay_type_id = $request->get('pay_type');

        //Nếu PayType chưa đươc kích hoạt, thì quay lại trang cũ báo lỗi:
        if (PayType::where('pay_type_id', $pay_type_id)->first()->active == false) {

            //Lấy tên các phương thức thanh toán được hỗ trợ
            $Payment_methods_are_active = PayType::all()->where('active', true);
            $Payment_methods_are_active_name = '<br><br>List of supported payment methods:<br>';
            foreach ($Payment_methods_are_active as $item) {
                $Payment_methods_are_active_name .= '- ' . $item->name . '<br>';
            }

            return back()
                ->withInput()
                ->setTargetUrl('#payment_details')
                ->withErrors('Currently, we do not support this payment method. <br> Please choose another one. Thanks! 💜💜💜' . $Payment_methods_are_active_name)
                ->with('preloader', 'none');
        }

        //Insert data
        $ticket = $this->createTicket($request);

        //Nếu insert lỗi, thì quay lại. (một vài lỗi đã được viết trong hàm createTicket() vừa call ở trên)
        if (!isset($ticket->ticket_id)) {
            return redirect()->back();
        }

        //Nếu lựa chọn thanh toán sau
        if ($pay_type_id == Utility::pay_type_PayLater) {
            $this->sendEmail($ticket);

            return redirect('booking/complete/' . $ticket->ticket_id);
        }

        //Nếu lựa chọn thanh toán online qua VNPay
        if ($pay_type_id == Utility::pay_type_VNPay) {
            //Lấy Url cổng thanh toán
            $data_url = VNPay::vnpay_create_payment([
                'vnp_TxnRef' => $ticket->ticket_id,
                'vnp_OrderInfo' => 'Thông tin mô tả đơn hàng này ở đây',
                'vnp_Amount' => $ticket->total_price,
            ]);

            //Chuyển hướng đến cổng Url thanh toán vừa lấy được
            return redirect()->to($data_url);
        }
    }

    /**
     * Hiện thị form thanh toán HOẶC xử lý thanh toán ở đây
     *
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function getPayment(Request $request)
    {
        //Lấy data từ URL (do VNPay gửi về qua $vnp_Returnurl)
        $vnp_ResponseCode = $request->get('vnp_ResponseCode'); //Mã phản hồi kết quả thanh toán. 00 = Thành công
        $vnp_TxnRef = $request->get('vnp_TxnRef'); //ticket_id
        $vnp_Amount = $request->get('vnp_Amount'); //Số tiền thanh toán.

        if ($vnp_ResponseCode != null) {
            //Nếu giao dịch bị hủy do người dùng
            if ($vnp_ResponseCode == 24) {
                //Cập nhật bản ghi trong DataBase: status = Đã Hủy
                $ticket = Ticket::where('ticket_id', '=', $vnp_TxnRef)->update([
                    //'deleted' => true,
                    'status' => Utility::ticket_status_Cancel,
                    'description' => 'vé bị HỦY khi thanh toán bằng VNPay (Demo test mới ghi thế này thôi. Ahihi)',
                ]);

                echo "Lỗi: Bạn đã hủy giao dịch. Dữ liệu booking của bạn sẽ bị xóa khỏi hệ thống.";
            }

            //Nếu giao dịch thành công
            if ($vnp_ResponseCode == 00) {
                //cập nhật trạng thái, số tiền đã thanh toán vào DataBase
                Ticket::where('ticket_id', '=', $vnp_TxnRef)->update([
                    'status' => Utility::ticket_status_Paid,
                    'amount_paid' => $vnp_Amount / 100,
                    'description' => 'Vé được thanh toán bằng VNPay (Demo test mới ghi thế này thôi. Ahihi)',
                ]);

                $ticket = Ticket::all()->where('ticket_id', '=', $vnp_TxnRef)->first();
                $this->sendEmail($ticket);

                return redirect('booking/complete/' . $vnp_TxnRef);
            }

            //Nếu có bất cứ lỗi gì khác
            echo "Lỗi: thanh toán VNPay không thành công. Chi tiết xin liên hệ quản trị viên.";
        }
    }

    /**
     * Hiện thị thông báo đặt vé thành công
     *
     * @param $id
     * @return Application|Factory|View
     */
    public function complete($id)
    {
        //Xóa session liên quan đến booking
        Session::forget('booking_session');

        //get code from DataBase by ticket_id
        $ticket = Ticket::find($id);

        return view('pages.booking.complete', compact('ticket'));
    }

    // = = = = = = = = = = = = = = = = = = = = Common method = = = = = = = = = = = = = = = = = = = = //

    /**
     * Cập nhật session.
     * Thêm $data mới vào session hiện tại theo $key.
     * Nếu data mới trùng tên có sẵn trong session đang gọi thì ghi đè nó.
     *
     * @param $key
     * @param $data
     */
    private function updateSession($key, $data)
    {
        //get data from Session:
        $session = Session::get($key) ?? [];

        //update $session:
        $session = array_merge($session, $data);

        //put new data to session:
        Session::put($key, $session);
    }

    /**
     * Tạo vé mới trong Database với tất cả thông tin trong $request & $booking_session
     *
     * @param $request
     * @return RedirectResponse|mixed
     */
    private function createTicket($request)
    {
        //Get data from Session & Request:
        $booking_session = Session::get('booking_session');
        $pay_type_id = $request->get('pay_type');

        // = = = = = = = [00] Kiểm tra số lượng vé khả & trừ số lượng ghế trong bảng price_seat_type = = = = = = =
        $price_seat_type = FlightSchedule::all()
            ->where('flight_schedule_id', $booking_session['flight_schedule_id'])
            ->first()
            ->priceSeatType;

        $seat_type_name = Str::lower(Utility::$seat_type[$booking_session['seat_type']]); //Lấy tên kiểu ghế người dùng chọn (eco | plus | business)
        $column = $seat_type_name . '_qty_remain'; //Lấy tên cột cần trừ số lượng  (eco_qty_remain | plus_qty_remain | business_qty_remain)
        $qty_remain = $price_seat_type->getAttributeValue($column); //Lấy số lượng còn lại hiện tại trong DB theo tên cột
        $total_passengers = $booking_session['passenger_count']['total'];

        //Kiểm tra số vé khả dụng, nếu số vé cần mua nhiều hơn số vé còn lại, báo lỗi và quay lại.
        if ($total_passengers > $qty_remain) {
            return redirect()->back()->withErrors('The number of passengers is more than the remaining number of tickets')
                ->with('preloader', 'none');
        }

        //Trừ số lượng vé nè:
        $price_seat_type_update = $price_seat_type->update([
            $column => $qty_remain - $total_passengers,
        ]);

        //Nếu trừ lỗi (update bảng price_seat_type lỗi) thì báo lỗi nè:
        if ($price_seat_type_update == false) {
            return back()->withErrors('Cannot update data to table: [price_seat_type]')
                ->with('preloader', 'none');
        }

        // = = = = = = = = = = = = = = = = = = = = [01] Insert to Ticket = = = = = = = = = = = = = = = = = = = =
        $ticket = new Ticket(); //Khởi tạo Model mới
        $ticket->user_id = Auth::user()->user_id ?? null;
        $ticket->flight_schedule_id = $booking_session['flight_schedule_id'];
        //$ticket->promotion_id = 'promotion_id';
        $ticket->pay_type_id = $pay_type_id;
        $ticket->extra_service_ids = implode(',', $booking_session['extra_service_ids'] ?? []);
        $ticket->seat_type = $booking_session['seat_type'];
        //$ticket->status = 'status'; //đã đặt mặc định là 1 (Unverified) trong DB
        $ticket->code = Str::upper(Str::random(6));
        $ticket->contact_gender = $booking_session['contact']['contact_gender'];
        $ticket->contact_first_name = $booking_session['contact']['contact_firstname'];
        $ticket->contact_last_name = $booking_session['contact']['contact_lastname'];
        $ticket->contact_email = $booking_session['contact']['contact_email'];
        $ticket->contact_phone = $booking_session['contact']['contact_phone'];
        $ticket->contact_address = $booking_session['contact']['contact_address'];
        $ticket->total_price = $booking_session['passenger_count']['total'] * $booking_session['seat_price'] + $booking_session['extraService_total_price'] + 500000;
        //$ticket->amount_paid = 0; //Đã để mặc định = 0 (chưa thanh toán) trong DB
        $ticket->total_passenger = $booking_session['passenger_count']['total'];
        //$ticket->description = 'description';
        $ticket->save(); //Lưu Model vừa khởi tạo và gán giá trị

        if ($ticket->ticket_id == '') {
            return back()->withErrors('Cannot add data to table: [Ticket]')->with('preloader', 'none');
        }

        // = = = = = = = = = = = = = = = = = = = = [02] Insert to Passenger = = = = = = = = = = = = = = = = = = = =
        $passengers = $booking_session['passengers'];
        foreach ($passengers as $item) {
            $passenger = new Passenger(); //Khởi tạo Model mới
            $passenger->ticket_id = $ticket->ticket_id;
            $passenger->gender = $item['gender'];
            $passenger->passenger_type = $item['passenger_type'];
            $passenger->first_name = $item['first_name'];
            $passenger->last_name = $item['last_name'];
            $passenger->dob = $item['dob'];
            $passenger->with_passenger = $item['with_passenger'] ?? null;
            $passenger->save(); //Lưu Model vừa khởi tạo và gán giá trị

            if ($passenger->passenger_id == '') {
                return back()->withErrors('Cannot add data to table: [Passenger]')->with('preloader', 'none');
            }
        }

        // = = = = = = = = = = = = = = = = = = = = [Final] Trả về $ticket = = = = = = = = = = = = = = = = = = = =
        return $ticket;
    }

    /**
     * Gửi email thông báo Booking
     *
     * @param Ticket $ticket
     */
    private function sendEmail(Ticket $ticket)
    {
        //Send email:
        $email_to = $ticket->contact_email;
        Mail::send('pages.booking.email', compact('ticket'), function ($message) use ($email_to) {
            $message->from('ars.codedy@gmail.com', 'ARS.CODEDY');
            $message->to($email_to, $email_to);
            //$message->cc('', ''); //gửi cho chủ cửa hàng
            $message->subject('Your Reservation Details');
        });
    }
}
