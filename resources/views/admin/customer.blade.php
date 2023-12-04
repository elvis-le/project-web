{{--@extends('layouts.admin_navigation')--}}
{{--@section('admin-form')--}}
{{--    <div class="product-list-form">--}}
{{--        <div id="short-by">--}}
{{--            <input type="text">--}}
{{--            <select>--}}
{{--                <option value="name">Name</option>--}}
{{--                <option value="name">Price up</option>--}}
{{--                <option value="name">Price down</option>--}}
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
{{--                    <th>Email</th>--}}
{{--                    <th>Gender</th>--}}
{{--                    <th>Birthday</th>--}}
{{--                    <th></th>--}}
{{--                </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                @foreach($user as $info)--}}
{{--                    <tr>--}}
{{--                        <td>{{ $info->name }}</td>--}}
{{--                        <td><img src="{{ $info->img }}"></td>--}}
{{--                        <td>{{ $info->email }}</td>--}}
{{--                        <td>{{ $info->gender }}</td>--}}
{{--                        <td>{{ $info->birthday }}</td>--}}
{{--                        <td><form method="get" action="/admin/productEdit">--}}
{{--                                <button type="submit" name="id" value="{{$info->id}}">Edit</button>--}}
{{--                            </form></td>--}}
{{--                    </tr>--}}
{{--                @endforeach--}}
{{--                </tbody>--}}
{{--            </table>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}
@extends('layouts.admin_navigation')
@section('admin-form-manage')
    <div class="admin-form-manage">
        <div class="admin-container-manage">
            <div class="bbbb">
                <p>Manage User</p>
            </div>
            <table class="table">
                <thead>
                <tr class="first-table-0101">
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Gmail</th>
                    <th scope="col">Birthday</th>
                    <th scope="col"> Manage</th>
                </tr>
                </thead>
                <tbody>
                @foreach($user as $info)
                <tr>
                    <td>{{ $info->name }}</td>
                    <td><img src="{{ $info->img }}" class="d-block-0202" ></td>
                    <td>{{ $info->gender }}</td>
                    <td>{{ $info->email }}</td>
                    <td>{{ $info->birthday }}</td>
                    <td>@if($info->isLock == 0)
                            <form method="post" action="/admin/LockCustomer">
                                @csrf
                            <button class="btn-addcart-001" type="submit" name="id" value="{{$info->id}}">
                                <span class="material-symbols-outlined">lock_open</span>
                            </button>
                            </form>
                        @endif
                        @if($info->isLock == 1)
                            <form method="post" action="/admin/UnLockCustomer">
                                @csrf
                            <button class="btn-addcart-001" type="submit" name="id" value="{{$info->id}}">
                                <span class="material-symbols-outlined">Lock</span>
                            </button>
                            </form>
                        @endif</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

