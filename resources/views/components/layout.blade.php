<!DOCTYPE html>
<html lang="pt-BR">
<head>	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scakabke=no, intial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" contemt="ie=edge">
	<title>{{ $title }} - Controle de Séries</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class= "container">
	<h1>{{ $title }}</h1>

	{{ $slot }}
</div>
</body>
</html>