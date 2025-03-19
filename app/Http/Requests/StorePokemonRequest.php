<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class StorePokemonRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'mentor_id' => 'required|numeric',
            'name'  => 'required|string|max:255',
            'type'  => 'required|string|max:255',
            'level' => 'required|min:6|numeric',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required'  => 'Name is required!',
            'name.max'       => 'Name is too long!',
            'name.string'    => 'Name must be a string!',
            'type.required'  => 'Type is required!',
            'level.required' => 'Level is required!',
            'level.min'      => 'Level must be at least 6!',
            'level.numeric'  => 'Level must be a number!',
        ];
    }
}
