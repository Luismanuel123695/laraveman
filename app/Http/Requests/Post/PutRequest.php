<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class   PutRequest extends FormRequest
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
        'title' => 'required|string|max:500',
        'slug' => 'required|string|max:500|unique:posts,slug,' .$this->route('post')->id,
        'descripcion' => 'nullable|string|max:100',
        'content' => 'nullable|string',
        'category_id' => 'required|exists:categories,id',
        //     //'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
        ];
    }
}
