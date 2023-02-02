<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            //
            'company_id'=>'required | numeric',
            'product_name'=>'required | max:255',
            'price'=>'required | numeric',
            'stock'=>'required | numeric',
            'comment'=>'max:10000'

        ];
    }

    public function attributes()
    {
        return[
            'company_id'=>'会社名',
            'product_name'=>'商品名',
            'price'=>'値段',
            'stock'=>'在庫',
            'comment'=>'コメント'
        ];
    }

    public function messages(){
        return [
            'company_id.required'=>':attributeは必須項目です。',
            'company_id.numeric'=>':attributeは半角数字で入力してください',
            'product_name.required'=>':attributeは必須項目です。',
            'product_name.max'=>':attributeは:max字以内で入力してください。',
            'price.required'=>':attributeは必須項目です。',
            'price.required'=>':attributeは半角数字で入力してください',
            'stock.required'=>':attributeは必須項目です。',
            'stock.required'=>':attributeは必須項目です。',
            'comment.10000'=>':attributeは:max字以内で入力してください。',
        ];
    }
}
