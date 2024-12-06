<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProgramStudyRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        $rules = [];

        
        if ($this->input('kode_prody')) {
            $rules['kode_prody'] = 'required|string|max:10'; 
        } else {
            $rules['kode_prody'] = 'required';
        }

        
        if ($this->input('nama_prody')) {
            $rules['nama_prody'] = 'required|string|max:15'; r
        } else {
            $rules['nama_prody'] = 'required';
        }

        // Memvalidasi jurusan_id
        if ($this->input('jurusan_id')) {
            $rules['jurusan_id'] = 'required|integer'; 
        } else {
            $rules['jurusan_id'] = 'required';
        }

        return $rules;
    }
}
