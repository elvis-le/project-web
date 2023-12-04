
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


<section class="product-list-0909">
    <div class="name-product-0909">
        <p> {{$productDetail->name}} </p>
    </div>
    <div class="container-0909">
        <div class="row-0909">
            <div class="image-product">
                <div class="wwe-start">
                    <img src="{{$productDetail->img}}" alt="vivobook pro" class="d-block">
                </div>

                <div class="item-profit">
                    <div class="item-icon">
                        <p><i class='bx bx-check'></i>Nationwide Delivery</p>
                        <p><i class='bx bxs-message-minus'></i>Easy returns</p>
                    </div>
                    <div class="item-icon">
                        <p><i class='bx bx-cart-add' ></i>Get Help Buying</p>
                        <p><i class='bx bxs-credit-card'></i>Safe and Secure Payments</p>
                    </div>
                </div>
                {{--------------------------------}}
                <div class="card-0303">

                    <div class="header-0404">
                        <a class="title-0505" href="#">
                            Comment anh Rate
                        </a>
                    </div>


                    <div class="rate-user-01">
                        <div class="user-comment-01">
                            <form>
                                @csrf
                                @method('post')
                                <div class="rating" id="rating">
                                    <input type="radio" id="star5" name="rate" value="5">
                                    <label for="star5" title="text"></label>
                                    <input type="radio" id="star4" name="rate" value="4">
                                    <label for="star4" title="text"></label>
                                    <input checked="" type="radio" id="star3" name="rate" value="3">
                                    <label for="star3" title="text"></label>
                                    <input type="radio" id="star2" name="rate" value="2">
                                    <label for="star2" title="text"></label>
                                    <input type="radio" id="star1" name="rate" value="1">
                                    <label for="star1" title="text"></label>
                                </div>
                                <div class="comment-user-09">
                                    <input type="text" id="comment" name="comment" placeholder="Comment....">
                                </div>
                                <input type="hidden" name="product_id" id="product_id_comment" value="{{$productDetail->id}}">
                                <button type="button" id="sent_comment">Comment</button>
                            </form>
                        </div>
                    </div>
                    <div class="clearfix"></div>





                    <div id="comment_of_user">
                        @foreach($users as $user)
                            <div class="flex-user">
    <span class="image-my-cart-0202">
      <img src="{{$user->img}}" alt="photo" class="d-block">
      <p class="name-cart">{{$user->name}}</p>
    </span>
                            </div>

                            <div class="rates">
                                <input type="radio" id="star5" name="{{$user->name}}" value="5" @if($user->evaluate === 5) checked @endif>
                                <label for="star5" title="text"></label>
                                <input type="radio" id="star4" name="{{$user->name}}" value="4" @if($user->evaluate === 4) checked @endif>
                                <label for="star4" title="text"></label>
                                <input type="radio" id="star3" name="{{$user->name}}" value="3" @if($user->evaluate === 3) checked @endif>
                                <label for="star3" title="text"></label>
                                <input type="radio" id="star2" name="{{$user->name}}" value="2" @if($user->evaluate === 2) checked @endif>
                                <label for="star2" title="text"></label>
                                <input type="radio" id="star1" name="{{$user->name}}" value="1" @if($user->evaluate === 1) checked @endif>
                                <label for="star1" title="text"></label>
                            </div>

                            <div class="description">
                                {{$user->value}}
                            </div>

                            <div class="post-info">
                                <div class="cr">
                                    <dd class="dd">{{$user->created_at}}</dd>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="price-product-0909">
                <div class="detail-product">
                    <h4>{{$productDetail->name}}</h4>
                    <p>{{$productDetail->price}} </p>
                </div>
                <div class="type-product">
                    <p> Type: </p>
                    <p1>Gamming </p1>
                </div>
                {{--                    ------------------}}

                <div class="radio-inputs">
                    <label class="ram-0101">Ram:</label>
                    <label class="radio">
                        <input  name="radio">
                        <span class="name">{{$productRam->name}}</span>
                    </label>
                </div>


                {{--            ----------------}}
                <div class="radio-inputs-0101">
                    <label class="ram-0101">CPU:</label>
                    <label class="radio">
                        <input checked="" id="Intel celeron" name="radioa" value="Intel celeron" >
                        <span class="name">{{$productCpu->name}}</span>
                    </label>

                </div>
                {{--            -------------------}}
                <div class="radio-inputs">
                    <label class="ram-0101">Drive:</label>
                    <label class="radio" >
                        <input id="1TB" name="radios" value="1TB">
                        <span class="name">{{$productDrive->name}}</span>
                    </label>
                </div>
                {{--                    ------------------}}

                <div class="btn-addcart-1">
                    <p22> Include TAX</p22>
                    <p>{{$productDetail->price}}</p>
                    <div class="btn-addcart-2">
                        <div>
                            <form method="post">
                                <div id="add_bag">
                                    <input type="hidden" name="product_id_bag" id="product_id_bag" value="{{$productDetail->id}}">
                                </div>
                                <button type="button" name="user_id"  class="add-bag-product" id="add_bag_product">Add to cart</button>
                            </form>
                        </div>
                        <div class="favorite_product">
                            <form method="post">
                                <input type="hidden" name="product_id" id="product_id" value="{{$productDetail->id}}">
                                <button  type="button" name="user_id" class="add-favorite-product" id="add_favorite_product">
                                    <div id="favorite_product">


                                        <a class="tym-tym"><i class='bx bx-heart'></i></a>
                                    </div>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="btn-02-buycart">
                        <button type="submit" > Buy Now </button>
                    </div>
                </div>
                <div class="detail-product-infor">
                    <div class="tab-infor-detail">
                        <p0101> Desribe Product</p0101>
                    </div>
                    <div class="deep-infor-detail">
                        {{$productDetail->detail}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>

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

{{--@endsection--}}
