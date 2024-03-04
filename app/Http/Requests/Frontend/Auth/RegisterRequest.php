<?php

namespace App\Http\Requests\Frontend\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name" => ['required'],
            "email" => ["required", "email", Rule::unique('users', 'email')],
            "password" => ['required', 'min:6', 'confirmed'],
            "password_confirmation"=> ['required']
         ];
    }

    function messages(){
        return [
            'name.required'=> 'Vui lòng nhập họ tên',
            'email.required'=> 'Vui lòng nhập địa chỉ email',
            'email.email'=> 'Địa chỉ email không hợp lệ',
            'email.unique'=> "Địa chỉ email đã được sử dụng",
            'password.required'=> "Vui lòng nhập mật khẩu",
            'password.min'=> "Mật khẩu phải có ít nhất 6 ký tự",
            'password.confirmed'=> "Mật khẩu không trùng khớp",
            'password_confirmation' => "Vui lòng nhập lại mật khẩu"
        ];
    }
}
