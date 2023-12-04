
@extends('layouts.profile_navigation')
@section('profile-form')
    <div class="favorite-product-form">
        <div class="favorite-product-form-05">
           <p> Favoriate </p>
       </div>

        <div class="favorite-product-user">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Detail</th>
                    <th>Price</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                <div id="favorite_product_table">
                    @foreach($favoriteProducts as $favoriteProduct)
                        <tr>
                            <td>{{$favoriteProduct->name}}</td>
                            <td><img src="{{$favoriteProduct->img}}"></td>
                            <td>{{$favoriteProduct->detail}}</td>
                            <td>{{$favoriteProduct->price}}</td>
                            <td>
                                <form>
                                    <button type="button" value="{{$favoriteProduct->id}}" name="product_id" id="un_favorite_product" style="border: none; background-color: inherit;"><i class="fa-solid fa-heart"></i></button>
                                </form>
                                </td>
                        </tr>
                    @endforeach
                </div>
                </tbody>
            </table>
        </div>
    </div>
@endsection



