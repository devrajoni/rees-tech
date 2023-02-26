<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MissionVisionFormRequest extends FormRequest
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
            'mission_title' => ['nullable'],
            'mission_description' => ['nullable'],
            'mission_image' => ['nullable'],
            'vision_title' => ['nullable'],
            'vision_description' => ['nullable'],
            'vision_image' => ['nullable'],
        ];
    }
}
