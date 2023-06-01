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
            'description' => 'required',
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
            'title.required' => "Il titolo e' obbligatorio",
            'title.min' => "Il titolo non puo' essere piu' corto di :min caratteri",
            'title.max' => "Il titolo puo' essere lungo :max caratteri massimo",
            'description.required' => "La descrizione e' obbligatoria", 
            'thumb.required' => "La foto e' obbligatoria",
            'price.required' => "Il prezzo e' obbligatorio",
            'price.min' => "Il prezzo non puo' essere meno di :min caratteri",
            'price.max' => "Il prezzo non puo' essere piu di :max caratteri",
            'series.required' => "La serie e' obbligatoria",
            'series.min' => "La serie non puo' avere meno di :min caratteri",
            'series.max' => "La serie puo' avere un massimo di :max caratteri",
            'sale_date.required' => "La data e' obbligatoria",
            'sale_date.min' => "La data non puo' avere meno di :min caratteri",
            'sale_date.max' => "La data non puo' avere piu' di :max caratteri",
            'type.required' => "La tipologia e' obbligatoria",
            'type.min' => "La tipologia non puo' avere meno di :min caratteri",
            'type.max' => "La tipologia non puo' avere piu' di :max caratteri"
        ];
    }
}
