<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('includes.style')
    <title>@yield('title')</title>
</head>

<body>
    @include('includes.navbar')
    @yield('content')
    @include('includes.footer')
    @include('includes.script')
</body>

</html>