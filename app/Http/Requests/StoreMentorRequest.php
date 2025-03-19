<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreMentorRequest
 *
 * Handles validation rules and authorization for mentor creation requests.
 */
class StoreMentorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool True if the request is authorized, false otherwise.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, string> The validation rules for mentor creation.
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255|min:6',
        ];     
    }

    /**
     * Get the custom error messages for validation failures.
     *
     * @return array<string, string> The custom validation messages.
     */
    public function messages(): array
    {
        return [
           
            'name.required'  => 'Name is required!',
            'name.max'       => 'Name is too long!',
            'name.string'    => 'Name must be a string!',
            'name.required'  => 'Name is required!',
            'name.min'       => 'Name must be at least 6!',
        ];
    }
}