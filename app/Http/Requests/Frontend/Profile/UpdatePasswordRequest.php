<?php

namespace App\Http\Requests\Frontend\Profile;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePasswordRequest extends FormRequest
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
            "current_password" => ["required", "current_password"],
            "password" => ["required", "confirmed", "min:6"],
            "password_confirmation" => "required"
        ];
    }

    function messages(){
        return [
            "current_password.required" => "Vui lòng nhập mật khẩu hiện tại",
            "current_password.current_password" => "Mật khẩu không chính xác",
            "password.required" => "Vui lòng nhập mật khẩu",
            "password.min" => "Mật khẩu phải có ít nhất 6 ký tự",
            "password.confirmed" => "Mật khẩu không trùng khớp",
            "password_confirmation.required" => "Vui lòng nhập lại mật khẩu"
        ];
    }
}