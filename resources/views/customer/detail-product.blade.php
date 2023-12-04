@extends('layouts.profile_navigation')
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
                                <button type="button" id="sent_comment" data-user-id="{{Auth::user()->id}}">Comment</button>
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
                                <button type="button" name="user_id" value="{{Auth::user()->id}}" class="add-bag-product" id="add_bag_product">Add to cart</button>
                            </form>
                        </div>
                        <div class="favorite_product">
                            <form method="post">
                                <input type="hidden" name="product_id" id="product_id" value="{{$productDetail->id}}">
                                <button  type="button" name="user_id" value="{{Auth::user()->id}}" class="add-favorite-product" id="add_favorite_product">
                                    <div id="favorite_product">
                                        @if(in_array($productDetail->id, $favoriteProduct))
                                            <a class="tym-tym"><i class="fa-solid fa-heart"></i></a>
                                        @else
                                            <a class="tym-tym"><i class='bx bx-heart'></i></a>
                                        @endif
                                    </div>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="btn-02-buycart">
                        <form method="get" action="/buy-product">
                            @csrf
                            @method('get')
                            <input type="hidden" value="{{$productDetail->id}}" name="product_id">
                            <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
                            <button type="submit" > Buy Now </button>
                        </form>
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
{{--@endsection--}}
