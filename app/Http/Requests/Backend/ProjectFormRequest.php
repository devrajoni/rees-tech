<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Project;
use Illuminate\Validation\Rule;

class ProjectFormRequest extends FormRequest
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
            'category_id' => ['required'],
            'title' => ['required',  Rule::unique(Project::class)->ignore($this->project->id ?? null),],
            'name' => ['required', Rule::unique(Project::class)->ignore($this->project->id ?? null),],
            'image' => ['image', $this->project ? 'nullable' : 'required'],
            'country_name' => ['required'],
            'client' => ['nullable'],
            'key_achievment' => ['nullable'],
            'started_at' => ['nullable'],
            'end_at' => ['nullable'],
            'address' => ['nullable'],
            'short_description' => ['nullable', 'max: 255'],
            'long_description' => ['nullable'],
            'project_status' => ['required'],
            'status' => ['required'],
        ];
    }

    public function persist()
    {
        $validated = $this->validated();

        $validated['slug'] = \Str::slug($validated['title']);

        return $validated;
    }
}
