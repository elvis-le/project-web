

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon" />
    <link href="{{ asset('css/site.css') }}" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/63149990bf.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
<div class="admin-navigation">
    <header class="header--primary">
        <a href="#" class="logo-1"> Straw Hat </a>
        <ul class="navmenu">
            <li><a href="/">Home</a></li>
            <li><a href="/">Promotion</a></li>
            <li><a href="/">Product</a></li>
            <li><a href="/">Manage </a></li>
            <li><a href="/">Information</a></li>
        </ul>

        <div class="nav-icon">
            <a href="#"><i class='bx bx-search'></i></a>
            <a href="#"><i class='bx bx-user'></i></a>
            <a href="#"> <i class='bx bx-cart-alt'></i> </a>
            {{--        <div class="bx bx-menu" id="menu-icon"></div>--}}
        </div>
    </header>
    <div class="dynamic">
        <div class="image-admin-0202">
            <img src="{{asset('images/fr_9.webp  ')}}" alt="Acer" class="d-block" style="width:100%">
        </div>
        <div class="image-admin-0303">
            <img src="{{Auth::user()->img}}" alt="Acer" class="d-block">
        </div>
        <div class="text-admin-0303">
            <p>{{Auth::user()->name}}</p>
        </div>
        <a class="dropdown-item" href="/admin/home">Home</a>
        <a class="dropdown-item" href="/admin/product">Product</a>
        <a class="dropdown-item" href="/admin/customer">Customer</a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button href="{{ route('logout') }}" onclick="event.preventDefault();
                                               this.closest('form').submit();">Log out</button>
        </form>
    </div>
    <div class="with-banner-0101">
        <img src="{{asset('images/breadcrumb-bg.jpg')}}" alt="Acer" class="d-block" style="width:100%">
        {{--         <div class="banner-0202">--}}
        {{--             Manage Customer--}}
        {{--         </div>--}}
    </div>
</div>


@yield('admin-form-manage')
@yield('admin-form')
@yield('admin-product-from')
@yield('admin-add-product')
@yield('admin-edit-product')
<script src="{{ asset('js/chatbox.js') }}"></script>
<script src="{{ asset('js/resentchat.js') }}"></script>

</body>
</html>

{{--        <table>--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th><!--  Blank --></th>--}}
{{--                <th>October</th>--}}
{{--                <th>November</th>--}}
{{--                <th>December</th>--}}
{{--            <tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            <tr>--}}
{{--                <th>Projected</th>--}}
{{--                <td>$820,180</td>--}}
{{--                <td>$841,640</td>--}}
{{--                <td>$732,270</td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <th>Actual</th>--}}
{{--                <td>$850,730</td>--}}
{{--                <td>$892,580</td>--}}
{{--                <td>$801,240</td>--}}
{{--            </tr>--}}
{{--            </tbody>--}}
{{--        </table>--}}
{{--        <div class="tab-menu-infor">--}}
{{--            <th> Value</th>--}}
{{--            <th> Value </th>--}}
{{--            <th> Value </th>--}}
{{--            <th> Value</th>--}}

{{--        </div>--}}
{{--        <div class="tab-menu-infor-detail">--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- The Modal -->







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





{{--    <!doctype html>--}}
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
{{--    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">--}}
{{--    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="admin-navigation">--}}
{{--    <header class="header--primary">--}}
{{--        <a href="#" class="logo-1"> Straw Hat </a>--}}
{{--        <ul class="navmenu">--}}
{{--            <li><a href="/">Home</a></li>--}}
{{--            <li><a href="/">Promotion</a></li>--}}
{{--            <li><a href="/">Product</a></li>--}}
{{--            <li><a href="/">Manage </a></li>--}}
{{--            <li><a href="/">Information</a></li>--}}
{{--        </ul>--}}

{{--        <div class="nav-icon">--}}
{{--            <a href="#"><i class='bx bx-search'></i></a>--}}
{{--            <a href="#"><i class='bx bx-user'></i></a>--}}
{{--            <a href="#"> <i class='bx bx-cart-alt'></i> </a>--}}
{{--            --}}{{--        <div class="bx bx-menu" id="menu-icon"></div>--}}
{{--        </div>--}}
{{--    </header>--}}
{{--    <div class="dynamic">--}}
{{--        <div class="image-admin-0202">--}}
{{--            <img src="{{asset('images/fr_9.webp  ')}}" alt="Acer" class="d-block" style="width:100%">--}}
{{--        </div>--}}
{{--        <div class="image-admin-0303">--}}
{{--            <img src="{{Auth::user()->img}}" class="d-block">--}}
{{--        </div>--}}
{{--        <div class="text-admin-0303">--}}
{{--            <p>{{Auth::user()->name}}</p>--}}
{{--        </div>--}}
{{--        <a class="dropdown-item" href="/admin/home">Home</a>--}}
{{--        <a class="dropdown-item" href="/admin/product">Product</a>--}}
{{--        <a class="dropdown-item" href="/admin/customer">Customer</a>--}}
{{--        <form method="POST" action="{{ route('logout') }}">--}}
{{--            @csrf--}}
{{--            <button href="{{ route('logout') }}" onclick="event.preventDefault();--}}
{{--                                               this.closest('form').submit();">Log out</button>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--    <div class="with-banner-0101">--}}
{{--        <img src="{{asset('images/breadcrumb-bg.jpg')}}" alt="Acer" class="d-block" style="width:100%">--}}
{{--        <div class="banner-0202">--}}
{{--            Manage Customer--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

{{--@yield('admin-form-manage')--}}
{{--@yield('admin-form')--}}
{{--@yield('admin-product-from')--}}
{{--@yield('admin-add-product')--}}
{{--@yield('admin-edit-product')--}}

{{--        <table>--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th><!--  Blank --></th>--}}
{{--                <th>October</th>--}}
{{--                <th>November</th>--}}
{{--                <th>December</th>--}}
{{--            <tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            <tr>--}}
{{--                <th>Projected</th>--}}
{{--                <td>$820,180</td>--}}
{{--                <td>$841,640</td>--}}
{{--                <td>$732,270</td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <th>Actual</th>--}}
{{--                <td>$850,730</td>--}}
{{--                <td>$892,580</td>--}}
{{--                <td>$801,240</td>--}}
{{--            </tr>--}}
{{--            </tbody>--}}
{{--        </table>--}}
{{--        <div class="tab-menu-infor">--}}
{{--            <th> Value</th>--}}
{{--            <th> Value </th>--}}
{{--            <th> Value </th>--}}
{{--            <th> Value</th>--}}

{{--        </div>--}}
{{--        <div class="tab-menu-infor-detail">--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<!-- The Modal -->--}}

{{--</body>--}}
{{--</html>--}}






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



