@extends('layouts.profile_navigation')
@section('profile-form')
    <div class="favorite-product-form">
        <div class="favorite-product-form-05">
            <p> Bag </p>
        </div>

        <div class="favorite-product-user">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Image</th>
                    <th>Amount</th>
                    <th>Payment method</th>
                    <th>Total</th>
                    <th>Status</th>
                </tr>
                </thead>

                <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{$order->name}}</td>
                        <td>{{$order->address}}</td>
                        <td><img src="{{$order->img}}"></td>
                        <td>{{$order->number}}</td>
                        <td>{{$order->payment}}</td>
                        <td>{{$order->total}}</td>
                        <td style="color: forestgreen;">success</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

