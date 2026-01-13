<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TambahDiklatRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama_diklat' => 'required|string|max:100',
            'nama_kelas' => 'required|string|max:50',
            'nama_instruktur' => 'required|string|max:75',

            'tgl_mulai_diklat' => 'required|date',
            'tgl_selesai_diklat' => 'required|date|after_or_equal:tgl_mulai_diklat',

            'jam_mulai_diklat' => 'required|date_format:H:i',
            'jam_selesai_diklat' => 'required|date_format:H:i|after:date:jam_mulai_diklat',
            ];
    }

    public function messages()
    {
        return [
            'nama_diklat.required' => 'Wajib diisi',
            'nama_diklat.string' => 'Wajib teks',
            'nama_diklat.max' => 'Maksimal 100 karakter',

            'nama_kelas.required' => 'Wajib diisi',
            'nama_kelas.string' => 'Wajib teks',
            'nama_kelas.max' => 'Maksimal 50 karakter',

            'nama_instruktur.required' => 'Wajib diisi',
            'nama_instruktur.string' => 'Wajib teks',
            'nama_instruktur.max' => 'Maksimal 75 karakter',

            'tgl_mulai_diklat.required' => "Wajib diisi" ,
            'tgl_mulai_diklat.date' => "Tanggal tidak valid" ,

            'tgl_selesai_diklat.required' => 'Wajib diisi',
            'tgl_selesai_diklat.after_or_equal' => 'Tidak lebih dari tanggal mulai diklat',

            'jam_mulai_diklat.required' => 'Wajib diisi',
            'jam_mulai_diklat.format_date' => 'Format jam harus HH:MM',

            'jam_selesai_diklat.required' => 'Wajib diisi',
            'jam_selesai_diklat.format_date' => 'Format jam harus HH:MM',
            'jam_selesai_diklat.after' => 'Harus setelah jam mulai',
        ];
    }
}
