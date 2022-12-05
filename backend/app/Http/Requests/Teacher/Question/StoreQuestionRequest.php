<?php

namespace App\Http\Requests\Teacher\Question;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuestionRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|numeric|exists:question_categories,id',
            'is_image_option' => 'required|numeric',
            'src' => 'nullable|string',
            'language_id' => 'required|numeric|exists:languages,id',
            'options' => 'required|array',
        ];
    }
}
