@extends('layouts.admin_navigation')
@section('admin-add-product')
    <div class="admin-form-manage">
        <form class="form-add-product" method="post" action="/admin/productSave" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="text-main-add">
                <p> Add Product</p>
            </div>
            <div class="form-group">
                <label for="nameinput">Name</label>
                <input type="text" class="form-control" id="nameinput" name="name" placeholder="Enter Your Name">
            </div>
            <div class="form-group">
                <label for="inputimage">Image</label>
                <input type="file" class="form-control" id="inputimage" name="image">
            </div>

            <div class="form-group">
                <label for="priceinput">Price</label>
                <input type="text" class="form-control" id="priceinput" name="price" placeholder="Enter Your Price">
            </div>

            <div class="radio-inputs">
                <label class="ram-0101">Ram:</label>
                @foreach($rams as $ram)
                    <label class="radio">
                        <input type="radio"  id="{{$ram->name}}" name="ram" value="{{$ram->name}}">
                        <span class="name">{{$ram->name}}</span>
                    </label>
                @endforeach
            </div>

            <div class="radio-inputs" style="width: 600px;">
                <label class="ram-0101">Drive:</label>
                @foreach($drives as $drive)
                    <label class="radio">
                        <input type="radio" id="{{$drive->name}}" name="drive" value="{{$drive->name}}">
                        <span class="name">{{$drive->name}}</span>
                    </label>
                @endforeach
            </div>

            {{--            ----------------}}
            <div class="radio-inputs-0101">
                <label class="ram-0101">CPU:</label>
                @foreach($cpus as $cpu)
                    <label class="radio">
                        <input type="radio" id="{{$cpu->name}}" name="cpu" value="{{$cpu->name}}">
                        <span class="name">{{$cpu->name}}</span>
                    </label>
                @endforeach
            </div>

            <div class="form-group">
                <label>Type</label>
                <select name="category" style="width: 200px; height: 50px; border-radius: 0.5rem; font-size: 25px;">--}}
                    @foreach($categories as $category)
                        <option value="{{$category->name}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="quantityinput">Quantity</label>
                <input type="text" class="form-control" id="quantityinput" name="quantity" placeholder="Enter Your Quantity">
            </div>

            <div class="form-group">
                <label for="detailinput"> Detail</label>
                <textarea class="form-control" id="detailinput" rows="3" name="detail"></textarea>
            </div>

            <div class="form-group">
                <button name="submit" > Save</button>
                <a href="/admin/product" style="background-color: #1E90FF; color: white; text-decoration: none; width: 70px; padding: 6px 10px; border-radius: 10px; "> Cancel </a>
            </div>
        </form>
    </div>
@endsection



{{--@extends('layouts.admin_navigation')--}}
{{--@section('admin-form')--}}
{{--    <div class="add-product-form">--}}
{{--        <form method="post" action="/admin/productSave" enctype="multipart/form-data">--}}
{{--            @csrf--}}
{{--            @method('patch')--}}
{{--            <h1>Add new product</h1>--}}
{{--            <label for="name" >Name</label>--}}
{{--            <input id="name" class="name" type="text" name="name">--}}
{{--            <label for="image">Image</label>--}}
{{--            <input id="image" class="image" type="file" name="image">--}}
{{--            <label for="detail">Detail</label>--}}
{{--            <input id="detail" class="detail" type="text" name="detail">--}}
{{--            <label for="price">Price</label>--}}
{{--            <input id="price" class="price" type="text" name="price">--}}
{{--            <button name="submit">Save</button>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--@endsection--}}
{{--@extends('layouts.admin_navigation')--}}
{{--@section('admin-add-product')--}}
{{--    <div class="admin-form-manage">--}}
{{--        <form class="form-add-product" method="post" action="/admin/productSave" enctype="multipart/form-data">--}}
{{--            @csrf--}}
{{--            @method('patch')--}}
{{--            <div>--}}
{{--                <p> Add Product</p>--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}

{{--                <label for="nameinput">Name</label>--}}
{{--                <input type="text" class="form-control" id="nameinput" name="name" placeholder="Enter Your Name">--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="inputimage">Image</label>--}}
{{--                <input type="file" class="form-control" id="inputimage" name="image">--}}
{{--            </div>--}}

{{--            <div class="form-group">--}}
{{--                <label for="priceinput">Price</label>--}}
{{--                <input type="text" class="form-control" id="priceinput" name="price" placeholder="Enter Your Price">--}}
{{--            </div>--}}

{{--            <div>--}}
{{--                <label for="ram">Ram:</label>--}}
{{--                <input type="checkbox" id="4GB" name="ram[]" value="4GB">--}}
{{--                <label for="4GB">4GB</label>--}}
{{--                <input type="checkbox" id="8GB" name="ram[]" value="8GB">--}}
{{--                <label for="8GB">8GB</label>--}}
{{--                <input type="checkbox" id="16GB" name="ram[]" value="16GB">--}}
{{--                <label for="16GB">16GB</label>--}}
{{--                <input type="checkbox" id="32GB" name="ram[]" value="32GB">--}}
{{--                <label for="32GB">32GB</label>--}}
{{--            </div>--}}

{{--            <div>--}}
{{--                <label for="cpu">CPU:</label>--}}
{{--                <input type="checkbox" id="Intel celeron" name="cpu[]" value="Intel celeron">--}}
{{--                <label for="Intel celeron">Intel celeron</label>--}}
{{--                <input type="checkbox" id="Intel pentium" name="cpu[]" value="Intel pentium">--}}
{{--                <label for="Intel pentium">Intel pentium</label>--}}
{{--                <input type="checkbox" id="Intel core i3" name="cpu[]" value="Intel core i3">--}}
{{--                <label for="Intel core i3">Intel core i3</label>--}}
{{--                <input type="checkbox" id="Intel core i5" name="cpu[]" value="Intel core i5">--}}
{{--                <label for="Intel core i5">Intel core i5</label>--}}
{{--                <input type="checkbox" id="Intel core i7" name="cpu[]" value="Intel core i7">--}}
{{--                <label for="Intel core i7">Intel core i7</label>--}}
{{--                <input type="checkbox" id="Amd ryzen 3" name="cpu[]" value="Amd ryzen 3">--}}
{{--                <label for="Amd ryzen 3">Amd ryzen 3</label>--}}
{{--                <input type="checkbox" id="Amd ryzen 5" name="cpu[]" value="Amd ryzen 5">--}}
{{--                <label for="Amd ryzen 5">Amd ryzen 5</label>--}}
{{--                <input type="checkbox" id="Amd ryzen 7" name="cpu[]" value="Amd ryzen 7">--}}
{{--                <label for="Amd ryzen 7">Amd ryzen 7</label>--}}
{{--                <input type="checkbox" id="Amd ryzen 9" name="cpu[]" value="Amd ryzen 9">--}}
{{--                <label for="Amd ryzen 9">Amd ryzen 9</label>--}}
{{--            </div>--}}

{{--            <div>--}}
{{--                <label for="drive">Drive:</label>--}}
{{--                <input type="checkbox" id="1TB" name="drive[]" value="SSD 1 TB">--}}
{{--                <label for="1TB">SSD 1 TB</label>--}}
{{--                <input type="checkbox" id="512GB" name="drive[]" value="SSD 512 GB">--}}
{{--                <label for="512GB">SSD 512 GB</label>--}}
{{--                <input type="checkbox" id="256GB" name="drive[]" value="SSD 256 GB">--}}
{{--                <label for="256GB">SSD 256 GB</label>--}}
{{--                <input type="checkbox" id="128GB" name="drive[]" value="SSD 128 GB">--}}
{{--                <label for="128GB">SSD 128 GB</label>--}}
{{--            </div>--}}

{{--            <select name="category" >--}}
{{--                <option value="asus">Asus</option>--}}
{{--                <option value="msi">MSI</option>--}}
{{--                <option value="acer">Acer</option>--}}
{{--                <option value="apple">Apple</option>--}}
{{--                <option value="hp">HP</option>--}}
{{--                <option value="lenovo">Lenovo</option>--}}
{{--                <option value="dell">Dell</option>--}}
{{--            </select>--}}

{{--            <div class="form-group">--}}
{{--                <label for="detailinput"> Detail</label>--}}
{{--                <textarea class="form-control" id="detailinput" rows="3" name="detail"></textarea>--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <button name="submit" > Save</button>--}}
{{--                <a href="/admin/product"> Cancel</a>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--@endsection--}}

