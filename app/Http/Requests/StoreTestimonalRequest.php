<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreTestimonalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        if (!Gate::allows('socialAction' || 'superAction')) {
            return false;
        } else {
            return true;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'client_name' => 'nullable|string',
            'client_position' => 'nullable|string',
            'message' => 'nullable',
            'rating' => 'nullable|integer|between:1,5',
            'client_image' => 'nullable|image|file',
        ];
    }
}
