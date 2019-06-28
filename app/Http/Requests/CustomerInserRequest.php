<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerInserRequest extends FormRequest
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
            'phone' => 'required|numeric|min:8',
            'email'    => 'required|max:50',
            'text'     => 'required'
        ];
    }

    public function messages()
    {
        return [
            'phone.required' => 'Энэ талбарт заавал утга оруулах ёстой',
            'phone.numeric' => 'Энэ Мэдээний гарчиг давхцаж байна.',
            'phone.min' => 'Та утасны дугаараа үнэн зөв оруулна уу.',
            'email.required'  => 'Энэ талбарт заавал утга оруулах ёстой',
            'email.max'  => 'Энэ талбарт 50 доош тэмдэгт оруулна уу',
            'text.required'  => 'Энэ талбарт заавал утга оруулах ёстой',
        ];
    }
}
