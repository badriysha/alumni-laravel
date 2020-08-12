<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500&family=Open+Sans:wght@300;400;600;700&display=swap">
    @include('includes.style')
    @stack('addon-style')
    <title>Alumni</title>
</head>

<body>
    @include('includes.navbar')
    @yield('content')
    @include('includes.footer')
    @include('includes.script')
    @stack('addon-script')
</body>

</html>