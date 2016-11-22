<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Demo Laravel 5</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>

<body>
	<div class="container">
		@include('shared.nav')
		<section id="content" class="container-fluid">
			@yield('content')
		</section>
		@include('shared.modal')
		@include('shared.footer')
	</div>

	<script type="text/javascript" src='/js/3rd-party.js'></script>
	<script type="text/javascript" src='/js/app.js'></script>
</body>
</html>