<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500&family=Open+Sans:wght@300;400;600;700&display=swap">
    @include('includes.admin.style')
    <title>Login</title>
</head>

<body style="background-color: #0E7165;">
    <div class="height: 100%; filter: blur(8px);">
        <div class="sufee-login d-flex align-content-center flex-wrap">
            <div class="container">
                <div class="login-content">
                    <div class="login-logo mb-4">
                        <a href="{{ route('home') }}">
                            <img class="align-content" src="{{ url('frontend/images/Logo-PNG.png') }}" alt="">
                            <h6 class="text-white py-2" style="letter-spacing: 2px">IKATAN ALUMNI SEBI</h6>
                        </a>
                    </div>
                    <div class="login-form">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label class="text-capitalize">Email Address</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                                <div class="form-group">
                                    <label class="text-capitalize">Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                                <label class="pull-right">
                                    <a href="#">Forgotten Password?</a>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-flat my-3 text-white" style="background-color: #0E7165;">Sign in</button>
                            <div class="register-link mt-3 text-center">
                                <p>Don't have account ? <a href="{{ route('register') }}"> Sign Up Here</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('includes.admin.script')
</body>

</html>