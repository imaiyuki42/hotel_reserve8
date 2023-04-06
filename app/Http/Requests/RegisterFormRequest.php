<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterFormRequest extends FormRequest
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
        return [
            'name' => 'required|string',
            'phone_number' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|alpha_num|max:12|min:8|confirmed:password',
        ];
    }

    /**
     * バリデーションメッセージ
     */
    public function messages()
    {
        return [
            'name.required' => '名前は入力必須です。',
            'name.string' => '名前は文字で入力してください。',
            'email.required' => 'メールアドレスは入力必須です。',
            'email.email' => 'メールアドレス形式で入力してください。',
            'password.required' => 'パスワードは入力必須です。',
            'password.alpha_num' => 'パスワードは半角英数字で入力してください。',
            'password.max' => 'パスワードは12文字以下で入力してください。',
            'password.min' => 'パスワードは8文字以上で入力してください。',
            'password.confirmed' => 'パスワードと一致しません。',
        ];
    }
}
