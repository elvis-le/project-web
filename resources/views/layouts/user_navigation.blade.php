
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
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

</head>
<body>
<section class="abc11111111111"> a </section>
<header class="master-header-1">
    <a class="bar-user" href="#" >Straw Hat</a>

    <div class="navmenu-search">
        <a href="#" class="kinhlup"><i class='bx bx-search'></i></a>
        <input placeholder="Search Your Product..." type="text" class="search-bottom-0" id="search-product" name="search">
    </div>
    <div id="search-result">
                @foreach($product as $info)
                    <form class="search-menu" method="get" action="/detail-product"  enctype="multipart/form-data">
                        <button type="submit" name="id" value="{{$info->id}}">
                                <ul>
                                    <li><img src="{{$info->img}}">{{$info->name}}</li>
                                </ul>
                        </button>
                    </form>
                @endforeach
    </div>
    <script type="text/javascript">
        $('#search-result').hide();
    </script>
    {{--    <form method="POST" action="{{ route('logout') }}">--}}
    {{--        @csrf--}}
    {{--        <button href="{{ route('logout') }}" onclick="event.preventDefault();--}}
    {{--                                               this.closest('form').submit();">Log out</button>--}}
    {{--    </form>--}}
    <div class="nav-icon-1">

        <div class="notice-0101">

            <li class="notice-0202" >
                {{--                <a> <img src="{{Auth::user()->img}}" class="d-block"></a>--}}
                {{--                <span>{{Auth::user()->name}}</span>--}}

                <div class="dropdownsss">
                    <button class="btn btn-secondary " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="item-sort-01">
                            <a><img src="{{Auth::user()->img}}"></a>
                            <span>{{Auth::user()->name}}
                        <a> <i class='bx bxs-chevron-down'></i> </a></span>
                        </div>
                    </button>
                    <ul class="dropdown-menu" style="z-index: 999" >
                        <div>
                            <li><a class="dropdown-item" href="/customer/home"><span class="material-symbols-outlined">home</span> Home</a></li>
                            <li><a class="dropdown-item" href="/profile"><i class='bx bx-user-circle'></i> Profile</a></li>
                            <li><a class="dropdown-item" href="/product"><span class="material-symbols-outlined">shopping_cart_checkout</span> Product</a></li>
                            <li><a class="dropdown-item" href="/order-detail"><span class="material-symbols-outlined">list_alt</span> Order detail</a></li>
                            <li><a class="dropdown-item" href="/bag"><i class='bx bx-cart-alt'></i> Cart</a></li>
                            <li><a class="dropdown-item" href="/favorite_product"><i class='bx bxs-heart'></i> Favorite</a></li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button href="{{ route('logout') }}" onclick="event.preventDefault();
                                               this.closest('form').submit();"><span class="material-symbols-outlined">logout</span> Log out</button>
                            </form>
                        </div>
                    </ul>
                </div>
            </li>

        </div>
    </div>
</header>
<div class="chatbox" id="chatbox">
    <button id="chatbox-toggle">
        <i class="fa-regular fa-comment"></i>
    </button>
    <div class="menu-chat" id="menu-chat">
        <div class="nav-chat">
            <p>Chat box</p>
            <button id="close-chat"><i class="fa-solid fa-xmark"></i></button>
        </div>
        <div id="chat-content" class="chat-content">
            @csrf
            @foreach($chat as $chatbox)
                @if($chatbox->type == 0)
                    <p style="color: black; background-color: #1E90FF; box-shadow: 2px 2px 2px 2px rgba(18,38,73,0.1); float: right; margin-top: 10px; margin-right: 10px; padding: 5px 10px; border-radius: 10px; max-width: 70%; display: block; clear: both;">{{$chatbox->chat}}</p>
                @endif
                @if($chatbox->type == 1)
                    <p style="color: black; background-color: white; box-shadow: 2px 2px 2px 2px rgba(18,38,73,0.1); margin-top: 10px; margin-left: 10px; padding: 5px 10px; border-radius: 10px; max-width: 70%; display: block; clear: both;">{{$chatbox->chat}}</p>
                @endif
            @endforeach
        </div>
        <form class="sent-chat">
            @csrf
            @method('post')
            <input type="text" name="text" id="text">
            <button id="sent-new-chat" type="button" name="id" value="{{Auth::user()->id}}">Sent</button>
        </form>
    </div>
    <script type="text/javascript">
        $('#menu-chat').hide();
    </script>
</div>
<div>
    @yield('profile-form')
    @yield('detail-form')
    @yield('body')
</div>

<div>
    @include('layouts.footer')
</div>
<script src="{{ asset('js/search.js') }}"></script>
<script src="{{ asset('js/focus.js') }}"></script>
<script src="{{ asset('js/chatbox.js') }}"></script>
<script src="{{ asset('js/sentchat.js') }}"></script>
<script src="{{ asset('js/focus.js') }}"></script>
{{--<script type="text/javascript">--}}
{{--    $.ajaxSetup({--}}
{{--        headers: {--}}
{{--            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
{{--        }--}}
{{--    });--}}
{{--    $('#search-product').on('keyup',function(){--}}
{{--        $value=$(this).val();--}}
{{--        $.ajax({--}}
{{--            type : 'get',--}}
{{--            url : '{{ route('search') }}',--}}
{{--            data:{'search':$value},--}}
{{--            success:function(data){--}}
{{--                $('#search-result').html(data);--}}
{{--            }--}}
{{--        });--}}
{{--    })--}}
{{--</script>--}}
{{--<script type="text/javascript">--}}
{{--    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });--}}
{{--</script>--}}

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




{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <title>Tulip</title>--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon" />--}}
{{--    <link href="{{ asset('css/site.css') }}" rel="stylesheet" type="text/css">--}}
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">--}}
{{--    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">--}}
{{--</head>--}}
{{--<body>--}}
{{--@section('form_master')--}}
{{--<header class="main-header" >--}}
{{--    <a href="/customer/home" class="logo"><img src="{{ asset('images/logo.png') }}"></a>--}}
{{--    <div class="body-header" >--}}
{{--        @yield('content-header')--}}
{{--    </div>--}}
{{--</header>--}}
{{--<br>--}}
{{--    <div class="main-body">--}}

{{--        @yield('content-body')--}}
{{--    </div>--}}
{{--    <footer style="display: inline-block; background-color: gray; font-size: 15px; width: 100%; height: auto;">--}}
{{--        <p>Bài này ngày {{ time() }}</p>--}}
{{--    </footer>--}}
{{--@show--}}


{{--</body>--}}
{{--</html>--}}

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
{{--    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />--}}
{{--</head>--}}
{{--<body>--}}
{{--<header class="master-header">--}}
{{--    <div class="user-navigation">--}}
{{--        <nav id="sticky">--}}
{{--            <a href="/customer/home" class="logo">Straw Hat</a>--}}
{{--            <div class="user">--}}
{{--                <div class="dropdown">--}}
{{--                    <button type="button" class="btn btn-primary" data-bs-toggle="dropdown">--}}
{{--                        <img src="{{Auth::user()->img}}">--}}
{{--                    </button>--}}
{{--                    <a href="/bag" class="icon-function" ><i class="fa-solid fa-bag-shopping"></i></a>--}}
{{--                    <a href="/favorite_product" class="icon-function" ><i class="fa-solid fa-heart"></i></a>--}}
{{--                    <ul class="dropdown-menu">--}}
{{--                        <li><a class="dropdown-item" href="/customer/home">Home</a></li>--}}
{{--                        <li><a class="dropdown-item" href="/product">Product</a></li>--}}
{{--                        <li><a class="dropdown-item" href="{{route('profile.edit')}}">Profile</a></li>--}}
{{--                        <li><a class="dropdown-item" href="/favorite_product">Favorite product</a></li>--}}
{{--                        <li><a class="dropdown-item" href="/bag">Bag</a></li>--}}
{{--                        <form method="POST" action="{{ route('logout') }}">--}}
{{--                            @csrf--}}
{{--                            <button href="{{ route('logout') }}" onclick="event.preventDefault();--}}
{{--                                                this.closest('form').submit();">Log out</button>--}}
{{--                        </form>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="search">--}}
{{--                <input id="search" type="checkbox">--}}
{{--                <label for="search">--}}
{{--                    <input type="text">--}}
{{--                    <i class="fa-solid fa-magnifying-glass" type="checkbox"></i>--}}
{{--                </label>--}}
{{--            </div>--}}
{{--        </nav>--}}
{{--    </div>--}}
{{--    <div class="clearfix"></div>--}}
{{--    @yield('body')--}}
{{--</header>--}}
{{--<div class="manage-product">--}}
{{--    <div>--}}
{{--        @include('partials.product')--}}
{{--    </div>--}}
{{--</div>--}}
{{--@include('layouts.footer')--}}
{{--<script--}}
{{--    src="https://code.jquery.com/jquery-3.6.4.js"--}}
{{--    integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="--}}
{{--    crossorigin="anonymous"></script>--}}
{{--<script src="./vendor/js/jquery.waypoints.min.js"></script>--}}
{{--<script src="{{asset('js/scripts.js')}}"></script>--}}
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




{{--    <!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--        <meta name="viewport"--}}
{{--              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--        <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}

{{--    <title>Document</title>--}}
{{--        <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon" />--}}
{{--        <link href="{{ asset('css/site.css') }}" rel="stylesheet" type="text/css">--}}
{{--        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">--}}
{{--        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>--}}
{{--        <script src="https://kit.fontawesome.com/63149990bf.js" crossorigin="anonymous"></script>--}}
{{--        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>--}}
{{--</head>--}}
{{--<body>--}}
{{--<section class="abc11111111111"> a </section>--}}
{{--<header class="master-header-1">--}}
{{--    <a class="bar-user" href="/customer/home" >Straw Hat</a>--}}

{{--    <div class="navmenu-search">--}}
{{--        <a href="#" class="kinhlup"><i class='bx bx-search'></i></a>--}}
{{--        <input placeholder="Search Your Product..." type="text" class="search-bottom-0" id="search-product" name="search">--}}
{{--    </div>--}}
{{--    <div id="search-result">--}}
{{--        @foreach($product as $info)--}}
{{--            <ul>--}}
{{--                <li><img src="{{$info->img}}">{{$info->name}}</li>--}}
{{--            </ul>--}}
{{--        @endforeach--}}
{{--    </div>--}}
{{--    <script type="text/javascript">--}}
{{--        $('#search-result').hide();--}}
{{--    </script>--}}
{{--    <form method="POST" action="{{ route('logout') }}">--}}
{{--        @csrf--}}
{{--        <button href="{{ route('logout') }}" onclick="event.preventDefault();--}}
{{--                                               this.closest('form').submit();">Log out</button>--}}
{{--    </form>--}}
{{--    <div class="nav-icon-1">--}}
{{--        <ul class="notice-0101">--}}
{{--            <li class="notice-0202">--}}
{{--                <a class="bell-titi">--}}
{{--                    <i class='bx bx-bell'></i>--}}
{{--                    --}}{{--                        <span class="badge bg-c-red"></span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="notice-0202">--}}
{{--                <a> <img src="{{Auth::user()->img}}" class="d-block"></a>--}}
{{--                <span>{{Auth::user()->name}}</span>--}}
{{--                <i class='bx bxs-chevron-down'></i>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--</header>--}}

{{--<div class="chatbox" id="chatbox">--}}
{{--    <button id="chatbox-toggle">--}}
{{--        <i class="fa-regular fa-comment"></i>--}}
{{--    </button>--}}
{{--    <div class="menu-chat" id="menu-chat">--}}
{{--        <div class="nav-chat">--}}
{{--            <p>Chat box</p>--}}
{{--            <button id="close-chat"><i class="fa-solid fa-xmark"></i></button>--}}
{{--        </div>--}}
{{--        <div id="chat-content" class="chat-content">--}}
{{--            @csrf--}}
{{--            @foreach($chat as $chatbox)--}}
{{--                @if($chatbox->type == 0)--}}
{{--                    <p style="color: black; background-color: #1E90FF; box-shadow: 2px 2px 2px 2px rgba(18,38,73,0.1); float: right; margin-top: 10px; margin-right: 10px; padding: 5px 10px; border-radius: 10px; max-width: 70%; display: block; clear: both;">{{$chatbox->chat}}</p>--}}
{{--                @endif--}}
{{--                @if($chatbox->type == 1)--}}
{{--                        <p style="color: black; background-color: white; box-shadow: 2px 2px 2px 2px rgba(18,38,73,0.1); margin-top: 10px; margin-left: 10px; padding: 5px 10px; border-radius: 10px; max-width: 70%; display: block; clear: both;">{{$chatbox->chat}}</p>--}}
{{--                @endif--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--        <form class="sent-chat">--}}
{{--            @csrf--}}
{{--            @method('post')--}}
{{--            <input type="text" name="text" id="text">--}}
{{--            <button id="sent-new-chat" type="button" name="id" value="{{Auth::user()->id}}">Sent</button>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--    <script type="text/javascript">--}}
{{--        $('#menu-chat').hide();--}}
{{--    </script>--}}
{{--</div>--}}

{{--@yield('profile-form')--}}
{{--@yield('detail-form')--}}
{{--@yield('body')--}}
{{--@include('layouts.footer')--}}
{{--<script src="{{ asset('js/search.js') }}"></script>--}}
{{--<script src="{{ asset('js/focus.js') }}"></script>--}}
{{--<script src="{{ asset('js/chatbox.js') }}"></script>--}}
{{--<script src="{{ asset('js/sentchat.js') }}"></script>--}}
{{--<script type="text/javascript">--}}
{{--    $.ajaxSetup({--}}
{{--        headers: {--}}
{{--            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
{{--        }--}}
{{--    });--}}
{{--    $('#search-product').on('keyup',function(){--}}
{{--        $value=$(this).val();--}}
{{--        $.ajax({--}}
{{--            type : 'get',--}}
{{--            url : '{{ route('search') }}',--}}
{{--            data:{'search':$value},--}}
{{--            success:function(data){--}}
{{--                $('#search-result').html(data);--}}
{{--            }--}}
{{--        });--}}
{{--    })--}}
{{--</script>--}}
{{--</body>--}}
{{--</html>--}}






