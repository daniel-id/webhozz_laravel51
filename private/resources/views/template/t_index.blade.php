<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Belajar Laravel 5.1</title>

	{!! Html::style('assets/css/bootstrap.min.css') !!}

</head>
<body>
	<header>
		<div class="container-fluid">
			<div class="alert alert-info" role="alert">
				WebHozz - Belajar Laravel {{ App::VERSION() }}

				@if(!empty(Auth::user()->username) ) 
          <span style='float: right;'> 
              Selamat datang, {{ @Auth::user()->username }} |  
              <a class="btn btn-sm btn-danger" href="{{ URL('logout') }}"><i class="fa fa-power-off"></i> LOGOUT</a>  
          </span> 
        @endif 
			</div>
		</div>
	</header>

	@yield('content')

	{!! Html::script('assets/js/jquery.min.js') !!}
	{!! Html::script('assets/js/bootstrap.min.js') !!} 

</body>
</html>