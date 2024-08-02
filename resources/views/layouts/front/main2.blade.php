<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="Untree.co">
        <link rel="shortcut icon" href="favicon.png">

        <meta name="description" content="" />
        <meta name="keywords" content="bootstrap, bootstrap4" />

        <!-- Include Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        
        @include('layouts.front.style')
        @stack('style')
        <title>RestoBesto</title>
    </head>
    
    <body>
        
        {{-- Navbar --}}
        @include('layouts.front.NavPegawai')
        
        @yield('container2')
        
        {{-- Footer --}}
        @include('layouts.front.footer')

        <!-- Include jQuery and Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        @include('layouts.front.script')
        @stack('script')
        @yield('scripts')
    </body>
</html>
