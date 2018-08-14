<?php 

namespace App\Http\Requests; 

use App\Http\Requests\Request; 

class validasilogin extends Request 
{ 
     
    public function authorize() 
    { 
        return true; 
    } 

    public function rules() 
    { 
        return [ 
            'username' => 'email|required', 
            'password' => 'required' 
        ]; 
    } 

    public function messages() 
    { 
        return [ 
            'username.required' => 'username wajib diisi!', 
            'username.email' => 'format username salah !', 
            'password.required' => 'password wajib diisi!' 
        ]; 
    } 
}
