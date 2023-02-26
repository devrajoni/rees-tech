<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Product;

class ProductFormRequest extends FormRequest
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
        return [
            'category_id' => [
                'required',
            ],

            'sub_category_id' => [
                'required',
            ],

            'name' => [
                'required',
                'max:255',
                Rule::unique(Product::class)->ignore($this->product->id ?? null),

            ],

            'product_code' => [
                'required',
            ],

            'image' => [
                'image', $this->product ? 'nullable' : 'required',
            ],

            'gallery.*' => [
                'image', 'nullable'
            ],

            'price' => [
                'required',
            ],

            'discount' => [
                'nullable',
            ],

            'short_description' => [
                'nullable',
            ],

            'long_description' => [
                'nullable',
            ],

            'status' => [
                'required',
            ],
        ];
    }

    public function persist()
    {
        $validated = $this->validated();

        $validated['slug'] = \Str::slug($validated['name']);

        return $validated;
    }
}
