@extends('template/t_index')
@section('content')

Selamat Datang {{ Auth::user()->username }} <br>
<a href="{{ URL('logout') }}">Logout</a>

@endsection