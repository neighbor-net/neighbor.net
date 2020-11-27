<?php

namespace App\Http\Requests\Todo;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class Find extends FormRequest
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
            'id' => 'required|integer|min:1'
        ];
    }

    public function messages()
    {
        return [
            'id.required' => 'idは必須入力項目です。',
            'id.integer'  => 'idは整数値で指定して下さい。',
            'id.min'  => 'idは整数値で指定して下さい。',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $data = [
            'result' => false,
            'messages' => $validator->messages(),
        ];

        throw new HttpResponseException(response()->json($data, 422));
    }
}
