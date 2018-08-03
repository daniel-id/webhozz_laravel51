@extends('template/t_index')
@section('content')

  <div class="container">
    @if(Session::has('message'))
      <span class="label label-success">{{ Session::get('message') }}</span>
    @endif
    <p></p>
    <div class="panel panel-default">
      <div class="panel-heading">
        Ubah Data
      </div>
      <div class="panel-body">
        {!! Form::open(['url' => '/editprocess']) !!}

          {!! Form::hidden('id', $siswa->id, ['class' => 'form-control']) !!}
          Nama:
          {!! Form::text('nama', $siswa->nama, ['class' => 'form-control']) !!}
          <br>Alamat:
          {!! Form::text('alamat', $siswa->alamat, ['class' => 'form-control']) !!}
          <br>Kelas:
          {!! Form::text('kelas', $siswa->kelas, ['class' => 'form-control']) !!}
          <br><p></p>
          {!! Form::submit('Ubah Data', ['class' => 'btn btn-danger']) !!}

        {!! Form::close() !!}
        @stop
      </div>
    </div>
  </div>