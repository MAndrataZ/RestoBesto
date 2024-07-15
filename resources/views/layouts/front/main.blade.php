<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="Untree.co">
        <link rel="shortcut icon" href="favicon.png">

        <meta name="description" content="" />
        <meta name="keywords" content="bootstrap, bootstrap4" />

        @include('layouts.front.style')
        @stack('style')
		<title>RestoBesto</title>
	</head>
    
	<body>
        
        {{-- Navbar --}}
        @include('layouts.front.navbar')
        
        @yield('container')
        
        {{-- Footer --}}
        @include('layouts.front.footer')
        
        @include('layouts.front.script')
        @stack('script')
    </body>
</html>
