<?php

namespace DemoLaravel\Http\Requests;

use DemoLaravel\Http\Requests\Request;

class StoreBookRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:50',
            'subtitle' => 'max:100',
            'description' => 'required',
            'author' => 'required|max:50',
            'isbn' => 'required|integer|unique:books'
        ];
    }
}
