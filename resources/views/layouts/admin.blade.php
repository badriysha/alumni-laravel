<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    @include('includes.admin.style')
    @stack('addon-style')
</head>

<body>
    @include('includes.admin.sidebar')
    <div id="right-panel" class="right-panel">
        @include('includes.admin.topbar')
        @yield('content')
        @include('includes.admin.footer')
    </div>
    @include('includes.admin.script')
    @stack('addon-script')
</body>

</html>