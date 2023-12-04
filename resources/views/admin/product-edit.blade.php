{{--@extends('layouts.admin_navigation')--}}
{{--@section('admin-form')--}}
{{--    <div class="add-product-form">--}}
{{--        <form method="post" action="/admin/productEditSave" enctype="multipart/form-data">--}}
{{--            @csrf--}}
{{--            @method('patch')--}}
{{--            <h1>Add new product</h1>--}}
{{--            <label for="name" >Name</label>--}}
{{--            <input id="name" class="name" type="text" name="name" value="{{$product->name}}">--}}
{{--            <label for="image">Image</label>--}}
{{--            <input id="image" class="image" type="file" name="image" value="{{$product->img}}">--}}
{{--            <label for="detail">Detail</label>--}}
{{--            <input id="detail" class="detail" type="text" name="detail" value="{{$product->detail}}">--}}
{{--            <label for="price">Price</label>--}}
{{--            <input id="price" class="price" type="text" name="price" value="{{$product->price}}">--}}
{{--            <button type="submit" name="id" value="{{$product->id}}">Save</button>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--@endsection--}}
@extends('layouts.admin_navigation')
@section('admin-edit-product')
    <div class="admin-form-manage">
        <form class="form-add-product" method="post" action="/admin/productEditSave" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div>
                <p> Edit Product</p>
            </div>
            <div class="form-group">

                <label for="nameinput">Name</label>
                <input type="text" class="form-control" id="nameinput" value="{{$product->name}}" name="name" placeholder="Enter Your Name">
            </div>
            <div class="form-group">
                <label for="inputimage">Image</label>
                <input type="file" class="form-control" id="inputimage" value="{{$product->img}}" name="image">
            </div>

            <div class="form-group">
                <label for="priceinput">Price</label>
                <input type="text" class="form-control" id="priceinput" value="{{$product->price}}" name="price" placeholder="Enter Your Price">
            </div>

            <div class="radio-inputs">
                <label class="ram-0101">Ram:</label>
                @foreach($getrams as $ram)
                    <label class="radio">
                        <input type="radio" id="{{$ram->name}}" name="ram" value="{{$ram->name}}" @if(in_array($ram->name, $rams)) checked @endif>
                        <span class="name">{{$ram->name}}</span>
                    </label>
                @endforeach
            </div>

            <div class="radio-inputs" style="width: 600px;">
                <label class="ram-0101">Drive:</label>
                @foreach($getdrives as $drive)
                    <label class="radio">
                        <input type="radio" id="{{$drive->name}}" name="drive" value="{{$drive->name}}" @if(in_array($drive->name, $drives)) checked @endif>
                        <span class="name">{{$drive->name}}</span>
                    </label>
                @endforeach
            </div>

            {{--            ----------------}}
            <div class="radio-inputs-0101">
                <label class="ram-0101">CPU:</label>
                @foreach($getcpus as $cpu)
                    <label class="radio">
                        <input type="radio" id="{{$cpu->name}}" name="cpu" value="{{$cpu->name}}" @if(in_array($cpu->name, $cpus)) checked @endif>
                        <span class="name">{{$cpu->name}}</span>
                    </label>
                @endforeach
            </div>


            <select name="category" style="width: 200px; height: 50px; border-radius: 0.5rem; font-size: 25px;">--}}
                @foreach($getcategories as $category)
                    <option value="{{ $category->name }}" @if($category->name === $categorie->name) selected @endif>{{ $category->name }}</option>
                @endforeach
            </select>

            <div class="form-group">
                <label for="quantityinput">Quantity</label>
                <input type="text" class="form-control" id="quantityinput" name="quantity"  value="{{$product->quantity}}" placeholder="Enter Your Quantity">
            </div>

            <div class="form-group">
                <label for="detailinput"> Detail</label>
                <input class="form-control" id="detailinput" value="{{$product->detail}}" name="detail" rows="3">
            </div>

            <div class="form-group">
                <button type="submit" name="id" value="{{$product->id}}"> Save</button>
                <a href="/admin/product" style="background-color: #1E90FF; color: white; text-decoration: none; width: 70px; padding: 6px 10px; border-radius: 10px; "> Cancel </a>
            </div>
        </form>
    </div>
@endsection
