<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
</head>
<body>
<div class="login-page">
    <div class="form">
        <form class="login-form" action="{{route('login')}}" method="POST">
            @csrf
            <input type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

            @error('email')
            <span class="small-error" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <input id="password" type="password" name="password" required autocomplete="current-password" placeholder="Password">

            @error('password')
            <span class="small-error" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <button type="submit">login</button>
            <p class="message">Not registered?
                <a href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a></p>
        </form>
    </div>
</div>
</body>
</html>

