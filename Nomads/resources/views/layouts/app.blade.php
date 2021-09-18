<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    {{-- @stack('prepend-style') --}}
    @stack('addon-style')
    @include('includes.frontsite.style')

</head>

<body>


    @include('includes.frontsite.navbar')

    @yield('content')

    @include('includes.frontsite.footer')
    @stack('prepend-script')
    @include('includes.frontsite.script')
    @stack('addon-script')
</body>

</html>
