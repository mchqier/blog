<?php

namespace App\Http\Requests;

use App\Rules\UpperCaseFirst;
use Illuminate\Foundation\Http\FormRequest;

class postRequest extends FormRequest
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
            'title' => ['required','max:50',new UpperCaseFirst],
            'body' => 'required',
            //
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Title can\'t be empty',
            'title.max' => 'Maximum characters are 50 ',
            'body.required' => 'Content can\'t be empty',
        ];
    }
}
