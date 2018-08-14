<?php 

namespace App\Http\Requests; 

use App\Http\Requests\Request; 

class validasiinput extends Request 
{ 
     
    public function authorize() 
    { 
        return true; 
    } 

    public function rules() 
    { 
        return [ 
            'nama' => 'required', 
            'alamat' => 'required',
            'kelas' => 'required',
            'no_hp' => 'required|numeric',
            'email' => 'required|email' 
        ]; 
    } 

    public function messages() 
    { 
        return [ 
            'nama.required' => 'Maaf, Anda belum memasukkan Nama Anda.', 
            'alamat.required' => 'Maaf, Anda belum memasukkan Alamat Anda.', 
            'kelas.required' => 'Maaf, Anda belum memasukkan Kelas.',
            'no_hp.required' => 'Maaf, No Telp tidak dapat dikosongkan.',
            'no_hp.numeric' => 'Maaf, harap memasukkan data berupa angka 0-9.',
            'email.required' => 'Maaf, Email tidak dapat dikosongkan.',
            'email.email' => 'Maaf, format Email yang Anda masukkan salah.'
        ]; 
    } 
}
