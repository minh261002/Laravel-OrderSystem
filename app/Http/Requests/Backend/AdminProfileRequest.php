<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class AdminProfileRequest extends FormRequest
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
            "email"=> ["required", "email", Rule::unique("users", "email")->ignore(Auth::user()->id)],
            "name"=>["required"]
        ];
    }

    function messages(){
        return [
            "image"=> ["nullable", "image", "max:3000"],
            "email.required" => "Vui lòng nhập email",
            "email.email"=> "Địa chỉ email không hợp lệ",
            "email.unique"=> "Địa chỉ email đã được sử dụng",
            "name.required"=> "Vui lòng nhập họ và tên"
        ];
    }
}