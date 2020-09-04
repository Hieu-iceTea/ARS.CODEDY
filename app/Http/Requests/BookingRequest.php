<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class BookingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [];

        if ($this->is('booking/step-1')) {
            $rules = [
                'select_flight' => 'required',

//                'from' => 'required|numeric',
//                'to' => 'required|numeric',
//                'departure' => 'required|date',
//                'adults' => 'required|not_regex:/^([^0-3]*)$/',
//                'children' => 'required|not_regex:/^([^0-3]*)$/',
//                'infant' => 'required|not_regex:/^([^0-3]*)$/',
            ];
        }

        if ($this->is('booking/step-2')) {
            $rules = [
                'passengers.*.gender' => 'required|numeric',
                'passengers.*.first_name' => 'required|regex:/^([^0-9]*)$/',
                'passengers.*.last_name' => 'required|regex:/^([^0-9]*)$/',
                'passengers.*.dob' => 'required|date',
                //'passengers.*.with_passenger' => 'required',

                'contact.contact_gender' => 'required|numeric',
                'contact.contact_firstname' => 'required|regex:/^([^0-9]*)$/',
                'contact.contact_lastname' => 'required|regex:/^([^0-9]*)$/',
                'contact.contact_email' => 'required|email',
                'contact.contact_phone' => 'required|regex:/^([0-9\s\-\.\+\(\)]*)$/|min:10',
                'contact.contact_address' => 'required',
            ];

            //Riêng trường with_passenger thì phải kiểm tra riêng: chỉ passenger_type == 3 (em bé) thì mới thêm điều kiện bắt buộc
            foreach ($this->request->get('passengers') as $key => $value) {
                if ($value['passenger_type'] == 3) {
                    $rules['passengers.' . $key . '.with_passenger'] = 'required|regex:/^([^0-9]*)$/';
                }
            }
        }

        if ($this->is('booking/step-4')) {
            $rules = [
                'pay_type' => 'required',
            ];
        }

        if ($this->is('ticket/edit-schedule/*')) {
            $rules = [
                'seat_type' => 'required',
            ];
        }

        return $rules;
    }

    public function messages()
    {
        $messages = [
            //step-1
            'select_flight.required' => 'Please choose flight',

            //step-2
            'contact.contact_gender.required' => '[contact_gender] is required',
            'contact.contact_firstname.required' => '[contact_firstname] is required',
            'contact.contact_lastname.required' => '[contact_lastname] is required',
            'contact.contact_email.required' => '[contact_email] is required',
            'contact.contact_phone.required' => '[contact_phone] is required',
            'contact.contact_address.required' => '[contact_address] is required',

            'contact.contact_firstname.regex' => '[contact_firstname] does not include numbers.',
            'contact.contact_lastname.regex' => '[contact_lastname] does not include numbers.',
            'contact.contact_phone.regex' => '[contact_phone] must be a phone number.',
            'contact.contact_phone.min' => '[contact_phone] too short (Must contain at least 10 digits).',

            //ticket/edit-schedule
            'seat_type.required' => 'Please choose flight',
        ];

        if ($this->is('booking/step-2')) {
            foreach ($this->request->get('passengers') as $key => $value) {
                $messages['passengers.' . $key . '.gender.required'] = '[Gender] of Passenger ' . $key . ' is required.';
                $messages['passengers.' . $key . '.first_name.required'] = '[First Name] of Passenger ' . $key . ' is required.';
                $messages['passengers.' . $key . '.last_name.required'] = '[Last Name] of Passenger ' . $key . ' is required.';
                $messages['passengers.' . $key . '.dob.required'] = '[Date Of Birth] of Passenger ' . $key . ' is required.';
                $messages['passengers.' . $key . '.with_passenger.required'] = '[With Passenger] of Passenger ' . $key . ' is required.';

                $messages['passengers.' . $key . '.first_name.regex'] = '[First Name] of Passenger ' . $key . ' does not include numbers.';
                $messages['passengers.' . $key . '.last_name.regex'] = '[Last Name] of Passenger ' . $key . ' does not include numbers.';
                $messages['passengers.' . $key . '.with_passenger.regex'] = '[With Passenger] of Passenger ' . $key . ' does not include numbers.';
            }
        }

        return $messages;
    }

    /***
     * Change the autogenerated stub
     *
     * @param Validator $validator
     * @throws ValidationException
     */
    protected function failedValidation(Validator $validator)
    {
        //Tắt preloader đi:
        Session::flash('preloader', 'none');

        //trỏ đến đúng div, dòng bị lỗi, (Mặc định ở đây là 1 <span> đã được khai báo kèm ID ở trong html)
        $targetUrl = '#target_when_failedValidation';

        //nếu ở bước 4, khi failedValidation thì back và trỏ tới id = #payment_details
        if ($this->is('booking/step-4')) {
            $targetUrl = '#payment_details';
        }

        //Chỗ này gọi hàm cha như mặc định
        throw (new ValidationException($validator))
            ->errorBag($this->errorBag)
            ->redirectTo($this->getRedirectUrl() . $targetUrl);
    }
}
