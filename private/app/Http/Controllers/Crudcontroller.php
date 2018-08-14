<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\validasilogin;
use App\Http\Requests\validasiregister;
use App\Http\Requests\validasiinput;

use Input;
use DB;
use Redirect;
use View;
use Auth;

class Crudcontroller extends Controller
{  
  public function tambahdata(validasiinput $data) {
    $data = array(
      'nama' => Input::get('nama'),
      'alamat' => Input::get('alamat'),
      'kelas' => Input::get('kelas'),
      'no_hp' => Input::get('no_hp'),
      'email' => Input::get('email')
    );

    DB::table('siswa')->insert($data);
    return Redirect::to('/read')->with('message', 'Berhasil menambah data !..');
  }

  public function bacadata() {
    $data = DB::table('siswa')->get();
    return View::make('read')->with('siswa', $data);
  }

  public function hapusdata($id)
  {
     DB::table('siswa')->where('id', '=', $id)->delete();

     return Redirect::to('/read')->with('message', 'Berhasil menghapus data !..');
  }

  public function ubahdata($id)
  {
    $data = DB::table('siswa')->where('id', '=', $id)->first();

    return View::make('edit_form')->with('siswa', $data);
  }

  public function proseseditdata(validasiinput $data) 
  {
    $data = array(
      'nama' => Input::get('nama'),
      'alamat' => Input::get('alamat'),
      'kelas' => Input::get('kelas'),
      'no_hp' => Input::get('no_hp'),
      'email' => Input::get('email')
    );

    DB::table('siswa')->where('id', '=', Input::get('id'))->update($data);

    return Redirect::to('/read')->with('message', 'Berhasil mengedit data !..');
  }

  public function tambahuser(validasiregister $data)
  {
    $data = array(
      'username' => Input::get('username'),
      'password' => bcrypt(Input::get('password')),
      'access_rights' => 'user'
    );

    DB::table('login')->insert($data);

    return Redirect::to('/login')->with('message', 'Anda berhasil mendaftar sebagai user !..');
  }

  public function login(validasilogin $validasi) 
  {
    if (Auth::attempt(['username' => Input::get('username'), 'password' => Input::get('password')])) 
    {
      if (Auth::user()->access_rights=='admin') {
        return Redirect::to('');
      } else {
        return Redirect::to('/read');
      }
    }
    else {
      echo 'Gagal Login !..';
    }
  }

  public function logout()
  {
    Auth::logout();

    return Redirect::to('login')->with('message', 'Berhasil Logout !..');
  }

}