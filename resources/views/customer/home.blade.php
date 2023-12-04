@extends('layouts.user_navigation')

@section('body')
    <div class="demo-product" style="z-index: 888">
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




    <section class="trend-product-0101" id="trending">
        <div class="center-text">
            <h2> Product Us</h2>
        </div>

        <div class="product-0202">
            @foreach($product as $info)
                <form method="get" action="/detail-product"  enctype="multipart/form-data">
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

{{--    <section class="block-of-top">--}}
{{--        <div class="navbar-0101">--}}
{{--            <div class="navbar-0909">--}}
{{--                <p> Top Sell Product</p>--}}
{{--            </div>--}}

{{--            <div class="navbar-0808">--}}
{{--                <div class="dropdown-0808">--}}
{{--                    <button class="dropbtn-0808">Dropdown--}}
{{--                        <i class="fa fa-caret-down"></i>--}}
{{--                    </button>--}}
{{--                    <div class="dropdown-content">--}}
{{--                        <a href="#">Ram</a>--}}
{{--                        <a href="#">CPU</a>--}}
{{--                        <a href="#">Drive</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="navbar-0000">--}}
{{--            <div class="navbar-9999" >--}}
{{--                <div class="tab-0404">--}}
{{--                    <div class="tab-image">--}}
{{--                        <a href="#" ><img src="{{asset('images/fr_1.webp')}}" alt="Asus tuf" class="d-block" style="width:100%"> </a>--}}
{{--                    </div>--}}

{{--                    <div class="name-product">--}}
{{--                        <p> <a href="#"> ASUS Zenbook 14 Flip OLED </a> </p>--}}
{{--                    </div>--}}

{{--                    <div class="detail-product">--}}
{{--                        <li> Windows 11 Pro - ASUS recommends</li>--}}
{{--                        <li> Windows 11 Pro - ASUS recommends</li>--}}
{{--                        <li> Windows 11 Pro - ASUS recommends</li>--}}
{{--                    </div>--}}

{{--                    <div class="buy-product">--}}
{{--                        <a href="#"> <button>  Buy Now  </button> </a>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{-------------------------}}
{{--                <div class="tab-0404">--}}
{{--                    <div class="tab-image">--}}
{{--                        <a href="#" ><img src="{{asset('images/fr_1.webp')}}" alt="Asus tuf" class="d-block" style="width:100%"> </a>--}}
{{--                    </div>--}}

{{--                    <div class="name-product">--}}
{{--                        <p> <a href="#"> ASUS Zenbook 14 Flip OLED </a> </p>--}}
{{--                    </div>--}}

{{--                    <div class="detail-product">--}}
{{--                        <li> Windows 11 Pro - ASUS recommends</li>--}}
{{--                        <li> Windows 11 Pro - ASUS recommends</li>--}}
{{--                        <li> Windows 11 Pro - ASUS recommends</li>--}}
{{--                    </div>--}}

{{--                    <div class="buy-product">--}}
{{--                        <a href="#"> <button>  Buy Now  </button> </a>--}}
{{--                    </div>--}}

{{--                </div>--}}

{{--                <div class="tab-0404">--}}
{{--                    <div class="tab-image">--}}
{{--                        <a href="#" ><img src="{{asset('images/fr_1.webp')}}" alt="Asus tuf" class="d-block" style="width:100%"> </a>--}}
{{--                    </div>--}}

{{--                    <div class="name-product">--}}
{{--                        <p> <a href="#"> ASUS Zenbook 14 Flip OLED </a> </p>--}}
{{--                    </div>--}}

{{--                    <div class="detail-product">--}}
{{--                        <li> Windows 11 Pro - ASUS recommends</li>--}}
{{--                        <li> Windows 11 Pro - ASUS recommends</li>--}}
{{--                        <li> Windows 11 Pro - ASUS recommends</li>--}}
{{--                    </div>--}}

{{--                    <div class="buy-product">--}}
{{--                        <a href="#"> <button>  Buy Now  </button> </a>--}}
{{--                    </div>--}}

{{--                </div>--}}

{{--                <div class="tab-0404">--}}
{{--                    <div class="tab-image">--}}
{{--                        <a href="#" ><img src="{{asset('images/fr_1.webp')}}" alt="Asus tuf" class="d-block" style="width:100%"> </a>--}}
{{--                    </div>--}}

{{--                    <div class="name-product">--}}
{{--                        <p> <a href="#"> ASUS Zenbook 14 Flip OLED </a> </p>--}}
{{--                    </div>--}}

{{--                    <div class="detail-product">--}}
{{--                        <li> Windows 11 Pro - ASUS recommends</li>--}}
{{--                        <li> Windows 11 Pro - ASUS recommends</li>--}}
{{--                        <li> Windows 11 Pro - ASUS recommends</li>--}}
{{--                    </div>--}}

{{--                    <div class="buy-product">--}}
{{--                        <a href="#"> <button>  Buy Now  </button> </a>--}}
{{--                    </div>--}}

{{--                </div>--}}




{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

@endsection

{{--@extends('layouts.user_navigation')--}}
{{--<div class="chatbox" style="width: 400px; height: 150px; border: 2px solid black; overflow-y: auto; overflow-x: hidden;">--}}
{{--    <label for="sticky-chat" style="opacity: 0;">dsfsdf</label>--}}
{{--    <input id="sticky-chat" type="checkbox" style="opacity: 0;">--}}
{{--        @foreach($chat as $chatbox)--}}
{{--            @if($chatbox->user_id == Auth::user()->id)--}}
{{--                @if($chatbox->type == 0)--}}
{{--                    <p style="color: white;background-color: #00BFFF; width: fit-content;">{{$chatbox->chat}}</p>--}}
{{--                @endif--}}
{{--                @if($chatbox->type == 1)--}}
{{--                    <p style="color: red">{{$chatbox->chat}}</p>--}}
{{--                @endif--}}
{{--            @endif--}}
{{--        @endforeach--}}
{{--        <form method="post" action="/sentChat" style="bottom: 0; width: 400px; position: sticky;">--}}
{{--            @csrf--}}
{{--            @method('patch')--}}
{{--            <input type="text" name="text" id="text" style="width: 300px">--}}
{{--            <button type="submit" name="id" value="{{Auth::user()->id}}">Sent</button>--}}
{{--        </form>--}}
{{--</div>--}}

