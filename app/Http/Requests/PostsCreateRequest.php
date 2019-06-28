<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostsCreateRequest extends FormRequest
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
            'photo_id' => 'required',
            'title'    => 'required|unique:posts|max:255',
            'body'     => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Энэ талбарт заавал утга оруулах ёстой',
            'title.unique' => 'Энэ Мэдээний гарчиг давхцаж байна.',
            'title.max' => 'Энэ 255 тэмдэгтээс бага байх ёстой.',
            'body.required'  => 'Энэ талбарт заавал утга оруулах ёстой',
            'photo_id.required'  => 'Энэ зураг оруулах талбарт заавал мэдээний зураг оруулах ёстой',
        ];
    }
}
