{{--@extends('layouts.admin_navigation')--}}
{{--@section('admin-form')--}}
{{--    <div class="product-list-form">--}}
{{--        <div id="short-by">--}}
{{--            <input type="text" id="search-product" name="search">--}}
{{--            <select>--}}
{{--                <option value="arrange">Arrange</option>--}}
{{--                <option value="name">Name</option>--}}
{{--                <option value="price up">Price up</option>--}}
{{--                <option value="price down">Price down</option>--}}
{{--            </select>--}}
{{--            <button><a href="/admin/product-add">Add Product</a></button>--}}
{{--        </div>--}}
{{--        <div class="product-table">--}}
{{--            <table class="table table-dark table-hover">--}}
{{--                @csrf--}}
{{--                <thead>--}}
{{--                <tr>--}}
{{--                    <th>Name</th>--}}
{{--                    <th>Image</th>--}}
{{--                    <th>Type</th>--}}
{{--                    <th>Price</th>--}}
{{--                    <th>Action</th>--}}
{{--                </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                @foreach($product as $info)--}}
{{--                <tr>--}}
{{--                    <td>{{ $info->name }}</td>--}}
{{--                    <td><img src="{{ $info->img }}"></td>--}}
{{--                    <td>{{ $info->detail }}</td>--}}
{{--                    <td>{{ $info->price }}</td>--}}
{{--                    <td>--}}
{{--                        <form method="get" action="/admin/productEdit">--}}
{{--                            <button type="submit" name="id" value="{{$info->id}}">Edit</button>--}}
{{--                        </form>--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--                @endforeach--}}
{{--                </tbody>--}}
{{--            </table>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}

@extends('layouts.admin_navigation')
@section('admin-product-from')
    <div class="admin-form-manage">
        <div class="admin-container-manage">
            <div class="bbbb">
                <p>Manage Product</p>
            </div>
            <div class="bnt-addproduct">
                <a href="/admin/product-add" ><button > ADD PRODUCT </button></a>
            </div>
            <table class="table table-product">
                <thead>
                <tr class="first-table-0101">
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Price</th>
                    <th scope="col">Detail</th>
                    <th scope="col">Quantity</th>
                    <th scope="col"> Manage</th>
                </tr>
                </thead>
                <tbody>
                @foreach($product as $info)
                <tr class="second-table-0101">
                    <td>{{ $info->name }}</td>
                    <td><img src="{{ $info->img }}" alt="Acer" class="d-block" ></td>
                    <td>{{ $info->price }}</td>
                    <td ><p style="word-wrap: break-word; max-height: 120px; overflow: hidden;" >{{ $info->detail }}</p></td>
                    <td>{{ $info->quantity }}</td>
                    <td>
                        <form method="post" action="/admin/productEdit">
                            @csrf
                            <button class="checkbox-09" type="submit" name="id" value="{{$info->id}}">Edit</button>
                        </form>
                        <form method="post" action="/admin/productDelete">
                            @csrf
                            <button class="checkbox-09" type="submit" name="id" value="{{$info->id}}">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

