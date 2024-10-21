<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SellRequest extends FormRequest
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
            'image' => 'required',
            'category_id' => 'required',
            'condition_id' => 'required',
            'name' => 'required',
            'company_id' => 'required',
            'description' => 'required|max:255',
            'price' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'image.required' => '画像を選択してください',
            'category_id.required' => 'カテゴリーを選択してください',
            'condition_id.required' => '商品の状態を選択してください',
            'name.required' => '商品名を入力してください',
            'company_id.required' => 'ブランド名を選択してください',
            'description.required' => '商品の説明を入力してください',
            'description.max' => '商品の説明は255文字以内で入力してください',
            'price.required' => '価格を入力してください',
        ];
    }
}
