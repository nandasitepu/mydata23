<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PeraturanRequest extends FormRequest
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
            'jenis' => ['sometimes'],
            'nomor' => ['sometimes'],
            'tentang' => ['sometimes'],
            'tahun' => ['sometimes'],
            'tanggal' => ['sometimes'],
            'link_bt' => ['sometimes'],
            'link_pjl' => ['sometimes'],
            'link_gdrive' => ['sometimes'],

        ];
    }
}
