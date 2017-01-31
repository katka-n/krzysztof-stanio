<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCommentRequest extends FormRequest
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

            'comment' => 'required',
            'nick' => 'required|max:16',



        ];
    }

    public function messages()
    {
        return [
            'comment.required' => 'Pole > Twoj komentarz < nie powinno być puste',
            'nick.required' => 'Pole > Twój nick < nie powinno być puste',
            'nick.max' => 'Twój Nick może posiadać max. 16 znaków',


        ];
    }
}
