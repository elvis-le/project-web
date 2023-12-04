<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login/Register</title>
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon" />
    <link href="{{ asset('css/site.css') }}" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
</head>
<body class="body-login">
<div class="container" id="container">
    <div class="form-container register-container">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h1>Register</h1>
            <input type="email" name="email" placeholder="Email" required autocomplete="username">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
            <input  type="password" name="password" placeholder="Password" required autocomplete="new-password">
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
            <input  type="password" name="password_confirmation" placeholder="Confirm-Password" equired autocomplete="new-password">
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            <button id="btn-register">Register</button>
            <span>or use your account</span>
            <div class="social-container">
                <a  style="--cle:#1E90FF;" href="#" class="social"><i class="fa-brands fa-facebook"></i></a>
                <a  style="--cle:#FF4500;" href="#" class="social"><i class="fa-brands fa-google"></i></a>
                <a  style="--cle:#1E90FF;" href="#" class="social"><i class="fa-brands fa-twitter"></i></a>
            </div>
        </form>
    </div>

    <div class="form-container login-container">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h1>Login</h1>
            <input id="email" type="email" name="email" placeholder="Email" required autofocus autocomplete="username" >
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
            <input id="password" type="password" name="password" placeholder="Password" required autocomplete="current-password">
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
            <div class="content">
                <div class="checkbox">
                    <input type="checkbox" id="checkbox" name="remember">
                    <label>Remember me</label>
                </div>
                <div class="pass-link">
                    <a href="/forgot-password">Forgot password</a>
                </div>
            </div>
            <button id="btn-login" >Login</button>
            <span>or register</span>
            <div class="social-container">
                <a style="--cle:#1E90FF;" href="#" class="social"><i class="fa-brands fa-facebook"></i></a>
                <a style="--cle:#FF4500;" href="#" class="social"><i class="fa-brands fa-google"></i></a>
                <a style="--cle:#1E90FF;" href="#" class="social"><i class="fa-brands fa-twitter"></i></a>
            </div>
        </form>
    </div>

    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1 class="title">Hello<br>friend</h1>
                <p>cccccccccccccccc</p>
                <button class="ghost" id="login">Login<i class="fa-solid fa-arrow-left login"></i></button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1 class="title">Hello<br>friend</h1>
                <p>cccccccccccccccc</p>
                <button class="ghost" id="register">Register<i class="fa-solid fa-arrow-right register"></i></button>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('js/login.js')}}"></script>
</body>
</html>
