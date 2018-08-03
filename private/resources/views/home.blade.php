@extends('template/t_index')
@section('content')

  <div class="container">
    <p></p>
    <div class="panel panel-default">
      <div class="panel-heading">
        Tambah Data
      </div>
      <div class="panel-body">
        {!! Form::open(['url' => '/add'])  !!}
        
          Nama:
          {!! Form::text('nama', '', ['placeholder' => 'Nama', 'class' => 'form-control']) !!}
          <br>Alamat:
          {!! Form::text('alamat', '', ['placeholder' => 'Alamat', 'class' => 'form-control']) !!}
          <br>Kelas:
          {!! Form::text('kelas', '', ['placeholder' => 'Kelas', 'class' => 'form-control']) !!}
          <br><p></p>
          {!! Form::submit('Tambah Data', ['class' => 'btn btn-danger']) !!}

        {!! Form::close() !!}
        @stop
      </div>
    </div>
  </div>