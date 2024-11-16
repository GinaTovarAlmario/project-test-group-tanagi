<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreFilmRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        if (Auth::check()) {
            return true;
        }
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|min:3|max:255',
            'date_of_release' => 'required|date',
            'director' => 'required|string|min:3|max:255',
            'description' => 'required|string|min:2|max:1000',
        ];
    }
    public function messages(){
        return[
            'title.required'=>'Il titolo è obbligatorio',
            'title.string'=>'Il titolo deve essere un testo!',
            'title.min' => 'Il titolo deve essere lungo minimo 3 caratteri!',
            'title.max' => 'Troppo lungo!Il testo deve essere più breve!',

            'date_of_release.required'=>'La data di rilascio è obbligatoria',
            'date_of_release.data'=>'La data deve essere nel formato YYYY-MM-DD',

            'director.required'=>'Nome direttore è obbligatorio',
            'director.string'=>'Il nome direttore deve essere un testo!',
            'director.min' => 'Il nome deve essere lungo minimo 3 caratteri!',
            'director.max' => 'Troppo lungo!Il nome deve essere più breve!',



            'description.required'=>'La descrizione è obbligatoria',
            'description.string'=>'La descrizione deve essere un testo!',
            'description.min'=>'La descrizione è troppo breve!',
            'description.max'=>'La descrizione è troppa lunga!',

        ];
    }
}
