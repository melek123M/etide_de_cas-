<?php

namespace App\Http\Requests;

use App\Models\Salle;
use Illuminate\Foundation\Http\FormRequest;

class CreateSalleRequest extends FormRequest
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
        return Salle::$rules;
    }
}
