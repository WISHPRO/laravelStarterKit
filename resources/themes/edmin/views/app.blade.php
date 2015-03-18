<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel Edmin</title>

	@include('edmin::partials._styles')

	@yield('page_styles')
</head>
<body>

	<div class="container">
		@yield('content')
	</div>

	@include('edmin::partials._scripts')

</body>
</html>
