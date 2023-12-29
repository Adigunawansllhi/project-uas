<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PengirimanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user() != null;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'resi' => 'required',
            'tgl_kirim' => 'required',
            'pengirim' => 'required',
            'rute_id' => 'required',
            'penerima' => 'required',
            'no_telp_penerima' => 'required',
            'kat_id' => 'required',
            'pcs' => 'required',
            'total_harga' => 'required',
        ];
    }
}
