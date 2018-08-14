@extends('template/t_index')
@section('content')

  <div class="container">
    <p></p>
    <div class="panel panel-default">
      <div class="panel-heading"><span class="glyphicon glyphicon-user"></span>
        Register
        @if(Session::has('message'))
          <span class="label label-success">{{ Session::get('message') }}</span>
        @endif
      </div>
      <div class="panel-body">
        {!! Form::open(['url' => '/adduser']) !!}

          Username: 
          @if($errors->has())
            <br>
              <span class="text-danger">
                {!! $errors->first('username') !!}
              </span>
            <p></p>
          @endif
          {!! Form::text('username', '', ['placeholder' => 'Username', 'class' => 'form-control']) !!} 
          <p></p>
          Password:
          @if($errors->has())
            <br>
              <span class="text-danger">
                {!! $errors->first('password') !!}
              </span>
            <p></p>
          @endif
          {!! Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) !!}
          <br>
          {!! Form::submit('Register', ['class' => 'btn btn-danger']) !!}

        {!! Form::close() !!}
      </div>
    </div>
  </div>
@stop