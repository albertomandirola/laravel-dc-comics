<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
            'title' => 'required|max:50|min:5',
            'description' => 'required|max:700|min:5',
            'thumb' => 'required|min:20',
            'price' => 'required|max:20',
            'series' => 'required|max:50',
            'sale_date' => 'required',
            'type' => 'required|max:30',
            'artists' => 'required',
            'writers' => 'required'
        ];
    }
}
