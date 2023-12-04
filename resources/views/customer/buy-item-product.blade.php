@extends('layouts.profile_navigation')
@section('buy-item')

    <section class="product-list-090908">
        <div class="name-product-090908">
                <p> Payment Product  </p>
        </div>
        <div class="card" style="display: flex; top: 50%; left: 50%; transform: translate(-50%, 0)">
            <div class="form">
                <div class="left-side">
                    <div class="left_top">
                        <h4>{{$productDetail->name}}</h4>
                        <p>{{$productDetail->price}}VND</p>
                    </div>
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active"> <img src="{{$productDetail->img}}" class="d-block w-100" alt="..."> </div>
                        </div>
                    </div>
                    <div class="oriton_img">
                        <h5>{{$productDetail->name}}</h5>
                        <p>{{$productDetail->detail}}</p>
                    </div>
                </div>
                <div class="right-side">
                    <h3 style="width: 80%; margin-left: 10%; margin-top: 25px">Payment Details</h3>
                    <h5 style="width: 80%; margin-left: 10%;">Complete your purchase by providing your payment details.</h5>
                    <div class="payment-form">
                        <form>
                            <label for="address">Address</label>
                            <input id="address" type="text">
                            <label for="amount">Amount</label>
                            <input id="amount" name="amount" type="number">
                            <label for="payment">Payment method</label>
                            <select id="payment">
                                <option value="cash">Cash</option>
                                <option value="credit card">Credit card</option>
                            </select>
                            <div class="bill_content_text total">
                                <h3>Total</h3>
                                <input type="hidden" value="{{$productDetail->price}}" id="product_price" >
                                <div id="price">
                                    <input type="hidden" value="{{$productDetail->price}}" id="price_total" >
                                    <p>{{$productDetail->price}}VND</p>
                                </div>
                            </div>
                            <input type="hidden" name="product_id" id="product_id" value="{{$productDetail->id}}">
                            <div class="pay"> <button type="button" value="{{Auth::user()->id}}" name="user_id" id="user_id" style="font-size: 20px;">Buy</button>
                                <div class="payemnts"> <i class="fa fa-lock"></i>
                                    <p>Payments are secure and encripted.</p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
