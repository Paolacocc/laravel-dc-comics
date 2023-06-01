<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3|max:50',
            'description' => 'required|min:5|max:255',
            'thumb' => 'required',
            'price' => 'required|min:2|max:6',
            'series' => 'required|min:5|max:255',
            'sale_date' => 'required|min:6|max:20',
            'type' => 'required|min:3|max:50'
        ];
    }
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages() {
        return [
            'title.required' => 'the title is required',
            'title.min' => 'the title have to be longer then :min characters',
            'title.max' => 'the title cannot be longer then :max characters' 
        ];
    }
}
