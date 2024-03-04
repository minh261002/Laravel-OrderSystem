<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class AdminPasswordRequest extends FormRequest
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
            "current_password"=> ["required", "current_password"],
            "password"=> ["required", "min:6", "confirmed"],
            "password_confirmation"=>["required"]
        ];
    }

    function messages(){
        return [
            "current_password.required"=> "Vui lòng nhập mật khẩu hiện tại",
            "current_password.current_password"=>"Mật khẩu hiện tại không chính xác",
            "password.required"=> "Vui lòng nhập mật khẩu mới",
            "password.min"=> "Mật khẩu phải có ít nhất 6 ký tự",
            "password.confirmed"=>"Mật khẩu không trùng khớp",
            "password_confirmation"=> "Vui lòng nhập lại mật khẩu"
        ];
    }
}