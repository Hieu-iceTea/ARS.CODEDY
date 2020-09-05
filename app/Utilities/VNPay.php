<?php


namespace App\Utilities;


class VNPay
{
    /**
     * Cấu hình
     *
     * config.php
     *
     */
    static $vnp_TmnCode = "SNGZ4EAY"; //Mã website tại VNPAY
    static $vnp_HashSecret = "ZDNHYSHNPRYZSNHUGARKGZHKDBXVVAKU"; //Chuỗi bí mật
    static $vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
    static $vnp_Returnurl = "/booking/payment"; //Đã nối thêm env('APP_URL') lúc sử dụng biến này.

    /**
     * vnpay_create_payment.php
     *
     * https://sandbox.vnpayment.vn/apis/docs/huong-dan-tich-hop
     *
     * @param array $data
     * [ <br>
     * vnp_TxnRef => ' ', //Mã tham chiếu của giao dịch tại hệ thống của merchant. Mã này là duy nhất đùng để phân biệt các đơn hàng gửi sang VNPAY. Không được trùng lặp trong ngày. Ví dụ: 23554 <br> <br>
     * vnp_OrderInfo => ' ', //Thông tin mô tả nội dung thanh toán (Tiếng Việt, không dấu). Ví dụ: **Nap tien cho thue bao 0123456789. So tien 100,000 VND** <br> <br>
     * vnp_Amount => ' ', Số tiền thanh toán. Số tiền không mang các ký tự phân tách thập phân, phần nghìn, ký tự tiền tệ. Để gửi số tiền thanh toán là 10,000 VND (mười nghìn VNĐ) thì merchant cần nhân thêm 100 lần (khử phần thập phân), sau đó gửi sang VNPAY là: 1000000 <br>
     * ]
     *
     * @return string
     */
    public static function vnpay_create_payment(array $data)
    {
        error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
        /**
         * Description of vnpay_ajax
         *
         * @author xonv
         */
        //require_once("./config.php");

//        $vnp_TxnRef = $_POST['order_id']; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
//        $vnp_TxnRef = date('YmdHis'); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_TxnRef = $data['vnp_TxnRef']; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = $data['vnp_OrderInfo'];
        $vnp_OrderType = 250007; // Vé máy bay (Xem thêm: https://sandbox.vnpayment.vn/apis/docs/loai-hang-hoa)
//        $vnp_Amount = $_POST['amount'] * 100;
        $vnp_Amount = $data['vnp_Amount'] * 100;
//        $vnp_Locale = $_POST['language'];
        $vnp_Locale = 'vn';
//        $vnp_BankCode = $_POST['bank_code'];
//        $vnp_BankCode = 'NCB'; //TODO
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];

        $inputData = array(
            "vnp_Version" => "2.0.0",
            "vnp_TmnCode" => self::$vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => env('APP_URL') . self::$vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
        );

        //thêm 'vnp_BankCode'
        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . $key . "=" . $value;
            } else {
                $hashdata .= $key . "=" . $value;
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        //thêm 'vnp_SecureHashType' & 'vnp_SecureHash'
        $vnp_Url = self::$vnp_Url . "?" . $query;
        if (isset(self::$vnp_HashSecret)) {
            // $vnpSecureHash = md5($this->vnp_HashSecret . $hashdata);
            $vnpSecureHash = hash('sha256', self::$vnp_HashSecret . $hashdata);
            $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
        }

        $returnData = array('code' => '00'
        , 'message' => 'success'
        , 'data' => $vnp_Url);

        //echo json_encode($returnData);

        return $returnData['data']; //chỉ lấy ra $vnp_Url thôi.
    }
}

//Ngân hàng: NCB
//Số thẻ: 9704198526191432198
//Tên chủ thẻ:NGUYEN VAN A
//Ngày phát hành:07/15
//Mật khẩu OTP:123456
