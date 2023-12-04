
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
<div class="demo-product">
    <div class="goods-coming-soon">
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <section class="main-home-01016">
                <div class="main-text-01016">
                    <h5>PC OLED Laptops</h5>
                    <h1>An unforgettable visual <br> visual experience </h1>
                    <p> Buy now with program us - Have a voucher - Discount 30% </p>
                    <Br>
                    <a href="#" class="button-shop"> SHOP NOW  <i class="fa-solid fa-arrow-right"></i> </a>
                    <a href="#" class="button-shop-01016"> Learn More  <i class="fa-solid fa-arrow-right"></i> </a>

                </div>
            </section>

            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('images/20210329040223.webp')}}" alt="vivobook pro" class="d-block" style="width:100%">
                </div>
                <div class="carousel-item">
                        <img src="{{asset('images/fr_1.webp')}}" alt="Asus tuf" class="d-block" style="width:100%">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/wallpage003.jpg')}}" alt="Acer" class="d-block" style="width:100%">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/fr_9.webp')}}" alt="Zenbook 14" class="d-block" style="width:100%">
                </div>
            </div>

            <button class="btn-prev-next carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="btn-prev-next carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
</div>

<div>
    <section class="trend-product-0101" id="trending">
        <div class="center-text">
            <h2> Product Us</h2>
        </div>

        <div class="product-0202">
            @foreach($product as $info)
                <form method="get" action="/home-product-detail"  enctype="multipart/form-data">
                    <div class="row">
                        <button style="border: none" type="submit" name="id" value="{{$info->id}}">
                            <img src="{{$info->img}}" alt="Asus tuf" class="d-block">
                        </button>
                        <div class="text-product">
                            <p5>New</p5>
                        </div>
                        <div class="ratting">
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="price-product-0101">
                            <h4>{{$info->name}}</h4>
                            <P> {{$info->price}} </p>
                            {{--                            <span> 40.000.000đ</span>--}}
                        </div>
                    </div>
                </form>
            @endforeach
        </div>
    </section>

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
