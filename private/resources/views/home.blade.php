@extends('template/t_index')
@section('content')

  <div class="container">
    <p></p>
    <div class="panel panel-default">
      <div class="panel-heading">
        Form Input Data
      </div>
      <div class="panel-body">
        {!! Form::open(['url' => '/add'])  !!}
        
          Nama:
          @if($errors->has())
            <br>
              <span class="text-danger">
                {!! $errors->first('nama') !!}
              </span>
            <p></p>
          @endif
          {!! Form::text('nama', '', ['placeholder' => 'Nama', 'class' => 'form-control']) !!}
          <br>Alamat:
          @if($errors->has())
            <br>
              <span class="text-danger">
                {!! $errors->first('alamat') !!}
              </span>
            <p></p>
          @endif
          {!! Form::text('alamat', '', ['placeholder' => 'Alamat', 'class' => 'form-control']) !!}
          <br>Kelas:
          @if($errors->has())
            <br>
              <span class="text-danger">
                {!! $errors->first('kelas') !!}
              </span>
            <p></p>
          @endif
          {!! Form::text('kelas', '', ['placeholder' => 'Kelas', 'class' => 'form-control']) !!}
          <br>No. HP:
          @if($errors->has())
            <br>
              <span class="text-danger">
                {!! $errors->first('no_hp') !!}
              </span>
            <p></p>
          @endif
          {!! Form::text('no_hp', '', ['placeholder' => 'No HP', 'class' => 'form-control']) !!}
          <br>Email:
          @if($errors->has())
            <br>
              <span class="text-danger">
                {!! $errors->first('email') !!}
              </span>
            <p></p>
          @endif
          {!! Form::text('email', '', ['placeholder' => 'Email', 'class' => 'form-control']) !!}
          <br><p></p>
          {!! Form::submit('Tambah Data', ['class' => 'btn btn-danger']) !!}

        {!! Form::close() !!}
        @stop
      </div>
    </div>
  </div>