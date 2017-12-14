<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name') }}</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend.css') }}">
    </head>
    <body>
        <header>
            @if (Route::has('login'))
	            <nav>
	                @auth
	                    <a href="{{ url('/home') }}">Home</a>
	                @else
	                    <a href="{{ route('login') }}">Login</a>
	                    <a href="{{ route('register') }}">Register</a>
	                @endauth
	            </nav>
            @endif
				</header>
        <article id="content">
					<h1>{{ config('app.name') }}</h1>
        </article>
    </body>
</html>
