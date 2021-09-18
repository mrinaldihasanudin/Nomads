<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @stack('prepend-style')
    @include('includes.frontsite.style')
    @stack('addon-style')
</head>

<body>

    @include('includes.frontsite.navbar-alternate')
    @yield('content')
    @stack('prepend-script')
    @include('includes.frontsite.script')
    @stack('addon-script')

</body>

</html>
