@extends('template/t_index')
@section('content')

  <div class="container">
    @if(Session::has('message'))
      <span class="label label-success">{{ Session::get('message') }}</span>
    @endif
    <p></p>
    <div class="panel panel-default">
      <div class="panel-heading">
        Form Edit Data
      </div>
      <div class="panel-body">
        {!! Form::open(['url' => '/editprocess']) !!}

          {!! Form::hidden('id', $siswa->id, ['class' => 'form-control']) !!}
          Nama:
          @if($errors->has())
            <br>
              <span class="text-danger">
                {!! $errors->first('nama') !!}
              </span>
            <p></p>
          @endif
          {!! Form::text('nama', $siswa->nama, ['class' => 'form-control']) !!}
          <br>Alamat:
          @if($errors->has())
            <br>
              <span class="text-danger">
                {!! $errors->first('alamat') !!}
              </span>
            <p></p>
          @endif
          {!! Form::text('alamat', $siswa->alamat, ['class' => 'form-control']) !!}
          <br>Kelas:
          @if($errors->has())
            <br>
              <span class="text-danger">
                {!! $errors->first('kelas') !!}
              </span>
            <p></p>
          @endif
          {!! Form::text('kelas', $siswa->kelas, ['class' => 'form-control']) !!}
          <br>No. HP:
          @if($errors->has())
            <br>
              <span class="text-danger">
                {!! $errors->first('no_hp') !!}
              </span>
            <p></p>
          @endif
          {!! Form::text('no_hp', $siswa->no_hp, ['class' => 'form-control']) !!}
          <br>Email:
          @if($errors->has())
            <br>
              <span class="text-danger">
                {!! $errors->first('email') !!}
              </span>
            <p></p>
          @endif
          {!! Form::text('email', $siswa->email, ['class' => 'form-control']) !!}
          <br><p></p>
          {!! Form::submit('Ubah Data', ['class' => 'btn btn-danger']) !!}

        {!! Form::close() !!}
        @stop
      </div>
    </div>
  </div>