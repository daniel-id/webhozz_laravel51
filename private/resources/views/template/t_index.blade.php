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
		<div class="container">
			<div class="alert alert-info" role="alert">
				Selamat Belajar di Laravel {{ App::VERSION() }}
			</div>
		</div>
	</header>

	@yield('content')

	{!! Html::script('assets/js/jquery.min.js') !!}
	{!! Html::script('assets/js/bootstrap.min.js') !!} 

</body>
</html>