<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendEmailRequest extends FormRequest
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
            'to' => 'required',
            'subject' => 'required|string',
            'content' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'to.required' => '宛先を選択してください',
            'subject.required' => '件名を入力してください',
            'subject.string' => '件名は文字列で入力してください',
            'content.required' => '本文を入力してください',
        ];
    }
}
