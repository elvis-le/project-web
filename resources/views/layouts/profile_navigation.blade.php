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

    <div class="nav-icon-1">

        <div class="notice-0101">

            <li class="notice-0202" >

                <div class="dropdownsss">
                    <button class="btn btn-secondary " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="item-sort-01">
                            <a><img src="{{Auth::user()->img}}" alt="Asus tuf" class="d-block"></a>
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
<div class="clearfix"></div>
<div>
    {{--            @yield('profile-form')--}}
    <div class="modal" id="myModal" style="margin-top: 200px">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Update Password</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    @include('profile.partials.update-password-form')
                    <button type="button" class="cancel-btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    @yield('profile-form')
    @yield('detail-form')
    @yield('body')
    @yield('buy-item')
</div>
<script src="{{ asset('js/img.js') }}"></script>
<script src="{{ asset('js/update_password.js') }}"></script>
<script src="{{ asset('js/add_favorite_product.js') }}"></script>
<script src="{{ asset('js/un_favorite_product.js') }}"></script>
<script src="{{ asset('js/add_to_bag.js') }}"></script>
<script src="{{ asset('js/comment.js') }}"></script>
<script src="{{ asset('js/amount.js') }}"></script>
<script src="{{ asset('js/order.js') }}"></script>
<script src="{{ asset('js/arrange.js') }}"></script>

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
