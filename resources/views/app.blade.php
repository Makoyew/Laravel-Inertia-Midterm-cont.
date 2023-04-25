<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Laravel with Inertia</title>
		@vite
	</head>
	<body class="mind">
		@inertia
	</body>
</html>


<style>
    .mind {
        background-image: url(home.png);
        background-repeat: no-repeat;
        max-width: 100%;
        height: 100%;
    }
</style>
