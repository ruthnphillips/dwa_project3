<!DOCTYPE html>
<html>
<head>
	<title>
        @yield('title', 'Shelter Finder')
    </title>

	<meta charset='utf-8'>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"type='text/css' rel='stylesheet'>
	<link href="css/shelter.css" type='text/css' rel='stylesheet'>

    @stack('head')

</head>
<body>

	<header>
		<img
        src='img/logo.png'
        style='width:200px'
        alt='Shelter Logo'>
	</header>

	<section>
		@yield('content')
	</section>

	<footer>
		&copy; {{ date('Y') }}
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    @stack('body')

</body>
</html>
