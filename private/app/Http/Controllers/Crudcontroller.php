<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use DB;
use Redirect;

class Crudcontroller extends Controller
{  
    public function tambahdata() {
        $data = array(
            'nama'=>Input::get('nama'),
            'alamat'=>Input::get('alamat'),
            'kelas'=>Input::get('kelas'),
        );

        DB::table('siswa')->insert($data);
        return Redirect::to('baca')->with('message', 'Berhasil menambah data !');
    }

    public function bacadata() {
        $data = DB::table('siswa')->get();
        return View::make('baca')->with('siswa', $data);
    }
}