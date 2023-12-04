
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!-- link css footer -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
          integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
          href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>
<header class="master-header">
    <nav id="sticky">
        <a href="/" class="logo">Straw Hat</a>
        <ul class="main-option">
            <li style="--clr:#00BFFF;"><a href="/" data-text="&nbsp;Home">&nbsp;Home&nbsp;</a></li>
            <li style="--clr:#00FF00;"><a href="/home-product" data-text="&nbsp;Product">&nbsp;Product&nbsp;</a></li>
            <li style="--clr:#FF0000;"><a href="/about" data-text="&nbsp;About">&nbsp;About&nbsp;</a></li>
            <li style="--clr:#FFFF00;"><a href="/contact" data-text="&nbsp;Contact">&nbsp;Contact&nbsp;</a></li>
        </ul>
        <div class="search">
            <input id="search" type="checkbox">
            <label for="search">
                <i class="fa-solid fa-magnifying-glass" type="checkbox"></i>
            </label>
        </div>
        <div class="dropdown">
            <a href="/bag" class="icon-function" ><i class="fa-solid fa-bag-shopping"></i></a>
            <button type="button" class="btn btn-primary" data-bs-toggle="dropdown">
                <span class=" material-symbols-outlined">person</span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="{{ route('login') }}" class="btn dropdown-item">Login</a></li>
                <li><a href="/register" class="btn dropdown-item">Sign in</a></li>
            </ul>
        </div>
    </nav>

    <div class="register-suggest">
        <a href="/register">Create an account today for better support</a>
    </div>
</header>

<section class="privacy-0909">
   <div class="spit-header">
       <div class="name-page">
           <p>Privacy</p>
       </div>
       <div class="header-main-01">
           <h1>The contract when purchasing preferences</h1>
       </div>
       <div class="generaly-01">
           <div class="spit-003">
                <div>
                    <h2> Personalized and private</h2>
                    <p>
                        Your data is only used to improve your experience - it’s yours, and it’s not for sale
                    </p>
                </div>
               <div>
                   <h2> Safe and secure </h2>
                   <p>Our servers meet strict PCI standards. Your account and payment details are encrypted from end to end.                   </p>
               </div>
           </div>
           <div class="spit-003">
               <div>
                   <h2> Tracking you can trust</h2>
                   <p>
                       Shop follows Google’s API Services User Data Policy and
                       Limited Use requirements for handling your order confirmation emails.
                   </p>
               </div>
               <div>
                   <h2> Powered by Shopify </h2>
                   <p>
                       We’re part of the commerce platform trusted by millions of businesses worldwide.
                   </p>
               </div>
           </div>
       </div>
   </div>
</section>

<div>
    {{--    @include('partials.product')--}}
</div>

@include('layouts.footer')

<script
    src="https://code.jquery.com/jquery-3.6.4.js"
    integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
    crossorigin="anonymous"></script>
<script src="./vendor/js/jquery.waypoints.min.js"></script>
<script src="{{asset('js/scripts.js')}}"></script>
</body>
</html>






{{--@section('content-header')--}}
{{--    <a class="icon-user"><i class="fa-solid fa-user"></i></a>--}}
{{--    <div class="nav-user">--}}
{{--        <div class="nav-user-wrapper">--}}
{{--            <nav>--}}
{{--                <a href="/customer/home">Login</a>--}}
{{--                <a href="/customer/home">Register</a>--}}
{{--            </nav>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <a class="icon-bag" ><i class="fa-solid fa-bag-shopping"></i></a>--}}
{{--    <a class="icon-oder"><i class="fa-solid fa-truck-fast"></i></a>--}}
{{--    <a class="icon-search"><i class="fa-solid fa-magnifying-glass"></i></a>--}}
{{--    <div class="nav-search" >--}}
{{--        <input type="text" name="search" placeholder="Search" >--}}
{{--    </div>--}}
{{--@endsection--}}

{{--@section('content-body')--}}
{{--    <div class=" ads1">--}}

{{--    </div>--}}
{{--   <div>--}}
{{--       @include('partials.product')--}}
{{--   </div>--}}
{{--@endsection--}}
