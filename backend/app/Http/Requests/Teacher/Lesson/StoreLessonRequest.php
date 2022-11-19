<?php

namespace App\Http\Requests\Teacher\Lesson;

use Illuminate\Foundation\Http\FormRequest;

class StoreLessonRequest extends FormRequest
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
            'content' => 'required|string',
            'category_id' => 'required|numeric|exists:question_categories,id',
            'language_id' => 'required|numeric|exists:languages,id',
        ];
    }
}
