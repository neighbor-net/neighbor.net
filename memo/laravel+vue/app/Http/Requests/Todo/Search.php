<?php

namespace App\Http\Requests\Todo;

use Illuminate\Foundation\Http\FormRequest;

class Search extends FormRequest
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
            'criteria' => 'required|min:5|max:10'
        ];
    }

    public function messages()
    {
        return [
            'criteria.required' => '検索条件は必須入力項目です。',
            'criteria.min'  => '検索条件は5文字以上で指定して下さい。',
            'criteria.max'  => '検索条件は10文字以下で指定して下さい。',
        ];
    }
}
