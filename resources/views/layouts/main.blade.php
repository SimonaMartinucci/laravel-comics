<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- includo assets -->
    @vite('resources/js/app.js')
    <title>my-template</title>
</head>
<body>

    @include('partials.header')

    @include('partials.jumbo')

    @yield('content')

    @include('partials.merch')
    
    @include('partials.upper_footer')

    @include('partials.lower_footer')

</body>
</html>