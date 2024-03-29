<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title></title>

		<meta name="description" content="">
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="cleartype" content="on">

		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/touch/apple-touch-icon-144x144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/touch/apple-touch-icon-114x114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/touch/apple-touch-icon-72x72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="img/touch/apple-touch-icon-57x57-precomposed.png">
		<link rel="shortcut icon" href="img/touch/apple-touch-icon.png">

		<!-- Tile icon for Win8 (144x144 + tile color) -->
		<meta name="msapplication-TileImage" content="img/touch/apple-touch-icon-144x144-precomposed.png">
		<meta name="msapplication-TileColor" content="#222222">

		<!-- For iOS web apps. Delete if not needed. https://github.com/h5bp/mobile-boilerplate/issues/94 -->
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="apple-mobile-web-app-title" content="">

		<link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
		<script src="{{ URL::asset('scripts/vendor/modernizr/modernizr.js') }}"></script>
	</head>
	<body>
		<div id="wrap">

		    <div class="container">
		    	<header class="row">
		    	</header>
		    	
		    	<div class="row">
		    		@yield('content')
		    	</div>

    		    <footer class"row muted credit">
    	    		@yield('footer')
    		    </footer>
		    </div> <!-- /container -->

		</div>

		@yield('scripts')
		<script data-main="scripts/main.min.js" src="scripts/vendor/requirejs/require.js"></script>
	</body>
</html>