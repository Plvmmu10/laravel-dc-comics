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
            'title' => 'required',
            'description' => 'required|max:500',
            'thumb' => 'required',
            'price' => 'required',
            'series' => 'required',
            'type' => 'required',
            'sale_date' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => "E' richiesto un titolo",
            'description.required' => "E' richiesto una descrizione",
            'description.max' => "La descrizione non può superare i 500 caratteri",
            'thumb.required' => "E' richiesta un'immagine",
            'price.required' => "E' richiesto un prezzo",
            'series.required' => "E' richiesta una serie",
            'type.required' => "E' richiesto un tipo",
            'sale_date.required' => "E' richiesta una data di vendita",
        ];
    }
}