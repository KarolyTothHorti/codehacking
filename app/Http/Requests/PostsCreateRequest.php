<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PostsCreateRequest extends Request
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
            // 'title'       =>'required',
            // 'category_id' =>'required',
            // 'photo_id'    =>'required',
            // 'body'        =>'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Post Title is required',
            'category_id.required'  => 'Post Category is required',
            'photo_id.required'  => 'Post Photo is required',
            'body.required'  => 'Post Description is required',
        ];
    }
}
