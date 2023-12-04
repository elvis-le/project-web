{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>Document</title>--}}
{{--    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon" />--}}
{{--    <link href="{{ asset('css/site.css') }}" rel="stylesheet" type="text/css">--}}
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>--}}
{{--    <script src="https://kit.fontawesome.com/63149990bf.js" crossorigin="anonymous"></script>--}}
{{--</head>--}}
{{--<body class="body-resend-verify">--}}
{{--@if (session('status') == 'verification-link-sent')--}}
{{--    <div class="mb-4 font-medium text-sm text-green-600">--}}
{{--        {{ __('A new verification link has been sent to the email address you provided during registration.') }}--}}
{{--    </div>--}}
{{--@endif--}}
{{--<div class="resend-verification">--}}
{{--    <p>Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.</p>--}}
{{--    <form method="POST" action="{{ route('verification.send') }}">--}}
{{--        @csrf--}}
{{--        <button>Resend Verification Email</button>--}}
{{--    </form>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}

{{--<x-guest-layout>--}}
{{--    <div class="mb-4 text-sm text-gray-600">--}}
{{--        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}--}}
{{--    </div>--}}

{{--    @if (session('status') == 'verification-link-sent')--}}
{{--        <div class="mb-4 font-medium text-sm text-green-600">--}}
{{--            {{ __('A new verification link has been sent to the email address you provided during registration.') }}--}}
{{--        </div>--}}
{{--    @endif--}}

{{--    <div class="mt-4 flex items-center justify-between">--}}
{{--        <form method="POST" action="{{ route('verification.send') }}">--}}
{{--            @csrf--}}

{{--            <div>--}}
{{--                <x-primary-button>--}}
{{--                    {{ __('Resend Verification Email') }}--}}
{{--                </x-primary-button>--}}
{{--            </div>--}}
{{--        </form>--}}

{{--        <form method="POST" action="{{ route('logout') }}">--}}
{{--            @csrf--}}

{{--            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">--}}
{{--                {{ __('Log Out') }}--}}
{{--            </button>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--</x-guest-layout>--}}


    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon" />
    <link href="{{ asset('css/site.css') }}" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/63149990bf.js" crossorigin="anonymous"></script>
</head>
<body class="body-resend-verify">
@if (session('status') == 'verification-link-sent')
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
    </div>
@endif

<div class="socket">
    <div class="gel center-gel">
        <div class="hex-brick h1-111"></div>
        <div class="hex-brick h2-111"></div>
        <div class="hex-brick h3-111"></div>
    </div>
    <div class="gel c1 r1">
        <div class="hex-brick h1-111"></div>
        <div class="hex-brick h2-111"></div>
        <div class="hex-brick h3-111"></div>
    </div>
    <div class="gel c2 r1">
        <div class="hex-brick h1-111"></div>
        <div class="hex-brick h2-111"></div>
        <div class="hex-brick h3-111"></div>
    </div>
    <div class="gel c3 r1">
        <div class="hex-brick h1-111"></div>
        <div class="hex-brick h2-111"></div>
        <div class="hex-brick h3-111"></div>
    </div>
    <div class="gel c4 r1">
        <div class="hex-brick h1-111"></div>
        <div class="hex-brick h2-111"></div>
        <div class="hex-brick h3-111"></div>
    </div>
    <div class="gel c5 r1">
        <div class="hex-brick h1-111"></div>
        <div class="hex-brick h2-111"></div>
        <div class="hex-brick h3-111"></div>
    </div>
    <div class="gel c6 r1">
        <div class="hex-brick h1-111"></div>
        <div class="hex-brick h2-111"></div>
        <div class="hex-brick h3-111"></div>
    </div>

    <div class="gel c7 r2">
        <div class="hex-brick h1-111"></div>
        <div class="hex-brick h2-111"></div>
        <div class="hex-brick h3-111"></div>
    </div>

    <div class="gel c8 r2">
        <div class="hex-brick h1-111"></div>
        <div class="hex-brick h2-111"></div>
        <div class="hex-brick h3-111"></div>
    </div>
    <div class="gel c9 r2">
        <div class="hex-brick h1"></div>
        <div class="hex-brick h2-111"></div>
        <div class="hex-brick h3-111"></div>
    </div>
    <div class="gel c10 r2">
        <div class="hex-brick h1-111"></div>
        <div class="hex-brick h2-111"></div>
        <div class="hex-brick h3-111"></div>
    </div>
    <div class="gel c11 r2">
        <div class="hex-brick h1-111"></div>
        <div class="hex-brick h2-111"></div>
        <div class="hex-brick h3-111"></div>
    </div>
    <div class="gel c12 r2">
        <div class="hex-brick h1-111"></div>
        <div class="hex-brick h2-111"></div>
        <div class="hex-brick h3-111"></div>
    </div>
    <div class="gel c13 r2">
        <div class="hex-brick h1-111"></div>
        <div class="hex-brick h2-111"></div>
        <div class="hex-brick h3-111"></div>
    </div>
    <div class="gel c14 r2">
        <div class="hex-brick h1-111"></div>
        <div class="hex-brick h2-111"></div>
        <div class="hex-brick h3-111"></div>
    </div>
    <div class="gel c15 r2">
        <div class="hex-brick h1-111"></div>
        <div class="hex-brick h2-111"></div>
        <div class="hex-brick h3-111"></div>
    </div>
    <div class="gel c16 r2">
        <div class="hex-brick h1-111"></div>
        <div class="hex-brick h2-111"></div>
        <div class="hex-brick h3-111"></div>
    </div>
    <div class="gel c17 r2">
        <div class="hex-brick h1-111"></div>
        <div class="hex-brick h2-111"></div>
        <div class="hex-brick h3-111"></div>
    </div>
    <div class="gel c18 r2">
        <div class="hex-brick h1-111"></div>
        <div class="hex-brick h2-111"></div>
        <div class="hex-brick h3-111"></div>
    </div>
    <div class="gel c19 r3">
        <div class="hex-brick h1-111"></div>
        <div class="hex-brick h2-111"></div>
        <div class="hex-brick h3-111"></div>
    </div>
    <div class="gel c20 r3">
        <div class="hex-brick h1-111"></div>
        <div class="hex-brick h2-111"></div>
        <div class="hex-brick h3-111"></div>
    </div>
    <div class="gel c21 r3">
        <div class="hex-brick h1-111"></div>
        <div class="hex-brick h2-111"></div>
        <div class="hex-brick h3-111"></div>
    </div>
    <div class="gel c22 r3">
        <div class="hex-brick h1-111"></div>
        <div class="hex-brick h2-111"></div>
        <div class="hex-brick h3-111"></div>
    </div>
    <div class="gel c23 r3">
        <div class="hex-brick h1-111"></div>
        <div class="hex-brick h2-111"></div>
        <div class="hex-brick h3-111"></div>
    </div>
    <div class="gel c24 r3">
        <div class="hex-brick h1-111"></div>
        <div class="hex-brick h2-111"></div>
        <div class="hex-brick h3-111"></div>
    </div>
    <div class="gel c25 r3">
        <div class="hex-brick h1-111"></div>
        <div class="hex-brick h2-111"></div>
        <div class="hex-brick h3-111"></div>
    </div>
    <div class="gel c26 r3">
        <div class="hex-brick h1-111"></div>
        <div class="hex-brick h2-111"></div>
        <div class="hex-brick h3-111"></div>
    </div>
    <div class="gel c28 r3">
        <div class="hex-brick h1-111"></div>
        <div class="hex-brick h2-111"></div>
        <div class="hex-brick h3-111"></div>
    </div>
    <div class="gel c29 r3">
        <div class="hex-brick h1-111"></div>
        <div class="hex-brick h2-111"></div>
        <div class="hex-brick h3-111"></div>
    </div>
    <div class="gel c30 r3">
        <div class="hex-brick h1-111"></div>
        <div class="hex-brick h2-111"></div>
        <div class="hex-brick h3-111"></div>
    </div>
    <div class="gel c31 r3">
        <div class="hex-brick h1-111"></div>
        <div class="hex-brick h2-111"></div>
        <div class="hex-brick h3-111"></div>
    </div>
    <div class="gel c32 r3">
        <div class="hex-brick h1-111"></div>
        <div class="hex-brick h2-111"></div>
        <div class="hex-brick h3-111"></div>
    </div>
    <div class="gel c33 r3">
        <div class="hex-brick h1-111"></div>
        <div class="hex-brick h2-111"></div>
        <div class="hex-brick h3-111"></div>
    </div>
    <div class="gel c34 r3">
        <div class="hex-brick h1-111"></div>
        <div class="hex-brick h2-111"></div>
        <div class="hex-brick h3-111"></div>
    </div>
    <div class="gel c35 r3">
        <div class="hex-brick h1-111"></div>
        <div class="hex-brick h2-111"></div>
        <div class="hex-brick h3-111"></div>
    </div>
    <div class="gel c36 r3">
        <div class="hex-brick h1-111"></div>
        <div class="hex-brick h2-111"></div>
        <div class="hex-brick h3-111"></div>
    </div>
    <div class="gel c37 r3">
        <div class="hex-brick h1-111"></div>
        <div class="hex-brick h2-111"></div>
        <div class="hex-brick h3-111"></div>
    </div>
    <div class="resen-r3-infor">
        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div style="color: black">
                    <x-primary-button>
                        {{ __('Resend Verification Email') }}
                    </x-primary-button>
                </div>
            </form>

        </div>
    </div>
</div>

</body>
</html>

{{--<x-guest-layout>--}}
{{--    <div class="mb-4 text-sm text-gray-600">--}}
{{--        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}--}}
{{--    </div>--}}

{{--    @if (session('status') == 'verification-link-sent')--}}
{{--        <div class="mb-4 font-medium text-sm text-green-600">--}}
{{--            {{ __('A new verification link has been sent to the email address you provided during registration.') }}--}}
{{--        </div>--}}
{{--    @endif--}}

{{--    <div class="mt-4 flex items-center justify-between">--}}
{{--        <form method="POST" action="{{ route('verification.send') }}">--}}
{{--            @csrf--}}

{{--            <div>--}}
{{--                <x-primary-button>--}}
{{--                    {{ __('Resend Verification Email') }}--}}
{{--                </x-primary-button>--}}
{{--            </div>--}}
{{--        </form>--}}

{{--        <form method="POST" action="{{ route('logout') }}">--}}
{{--            @csrf--}}

{{--            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">--}}
{{--                {{ __('Log Out') }}--}}
{{--            </button>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--</x-guest-layout>--}}
