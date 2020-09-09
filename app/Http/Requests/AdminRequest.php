<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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

        //Áp dụng tất cả, nếu 'create' thì image là bắt buộc.
        if ($this->is('admin/*/create')) {
            $rules = [
                'image' => 'required|image',
            ];
        }

        //user/*
        if ($this->is('admin/user/*')) {
            $except = ',1,deleted'; //deleted <> 1 : Không bao gồm những bản ghi đã bị xóa

            $rules = [
                'user_name' => 'required|min:6|max:64|unique:user,user_name' . $except,
                'password' => 'required|max:64|confirmed|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$/',

                'email' => 'required|email',
                'gender' => 'required|numeric',
                'first_name' => 'required|regex:/^([^0-9]*)$/',
                'last_name' => 'required|regex:/^([^0-9]*)$/',
                'dob' => 'nullable|date',
                'phone' => 'required|numeric',
                'address' => 'required',
            ];
        }

        //user/create
        if ($this->is('admin/user/create')) {
            $rules['image'] = 'required|image';
        }

        //user/edit
        if ($this->is('admin/user/*/edit')) {
            $rules['user_name'] = 'required|min:6|max:64';
            $rules['password'] = '';
        }

        return $rules;
    }

    /**
     * Change the autogenerated stub
     *
     * @return array
     */
    public function messages()
    {
        return [
            'user_name.unique' => '[User Name] Tên đăng nhập đã được đăng kí.',
            'password.regex' => '[Password] Tối thiểu sáu ký tự, ít nhất một ký tự hoa, một ký tự viết thường, một số và một ký tự đặc biệt',
            'password.confirmed' => '[Password] Xác nhận mật khẩu không khớp.',
            'email.email' => '[Email] Phải là định dạng email',
            'gender.numeric' => '[Gender] Phải là ID (kiểu số)',
            'first_name.regex' => '[First Name] Không bao gồm số',
            'last_name.regex' => '[Last Name] Không bao gồm số',
            'dob.date' => '[DOB] Phải là định dạng ngày',
            'phone.numeric' => '[Phone] Phải là kiểu số',
        ];
    }
}