<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>@yield('title', 'My Laravel Store')</title>
	<link href="https://stackpath.bootstrapcdn.com/bootswatch/4.2.1/darkly/bootstrap.min.css" rel="stylesheet" integrity="sha384-F7cPHYSdE3FzBKvdxDKyFow9Y28Yq7KGHQOKpOI+rwc8s6jJnp///mpEJAib2EM6" crossorigin="anonymous">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Bitter|Fjalla+One|Lobster+Two|Oswald|Poiret+One|Roboto+Slab" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
</head>
<body>

	@include('store.partials.nav')

	@yield('content')

	@include('store.partials.footer')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<script src="{{ asset('js/pinterest_grid.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>