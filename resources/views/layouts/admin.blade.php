<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/polygon/admindek/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:07:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="colorlib" />
    <title>@yield('title') | Alumni SEBI</title>
    @stack('prepend-style')
    @include('includes.admin.style')
    @stack('style-addon')
</head>
<body>
    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            @include('includes.admin.header')
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    @include('includes.admin.sidebar')
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    @stack('prepend-script')
    @include('includes.admin.script')
    @stack('script-addon')
</body>
</html>