<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('includes.style')
    @stack('addon-style')
    <title>@yield('title')</title>
</head>

<body>
    @include('includes.navbar')
    <main>
        <div class="container">
            <div class="row">
                @yield('content')
                @include('includes.sidebar')
            </div>
        </div>
    </main>
    @include('includes.footer')
    @include('includes.script')
</body>

</html>