@extends('layouts.profile_navigation')
@section('profile-form')
    <body style=" background-color:  lightgrey">
    <section class="product-general">
        <div class="part-main">

            <div class="sort-by-infor">
                <div class="aa0101">
                    <p> Arrange and filler </p>
                </div>

                <div class="infor-01">
                    <p> Ram  </p>
                    <select class="funtion" id="ram">
                        <option value="all">All</option>
                        <option value="4GB">4GB</option>
                        <option value="8GB">8GB</option>
                        <option value="16GB">16GB</option>
                        <option value="32GB">32GB</option>
                    </select>
{{--                    <div class="box-box-01" id="ram">--}}
{{--                        <div>--}}
{{--                            <input  name="4GB" type="checkbox" value="4GB" >--}}
{{--                            <label>--}}
{{--                                4GB--}}
{{--                            </label>--}}
{{--                        </div>--}}

{{--                        <div>--}}
{{--                            <label>--}}
{{--                                <input name="8GB" type="checkbox" value="8GB" >--}}
{{--                                8GB--}}
{{--                            </label>--}}
{{--                        </div>--}}

{{--                        <div>--}}
{{--                            <label>--}}
{{--                                <input name="16GB" type="checkbox" value="16GB" >--}}
{{--                                16GB--}}
{{--                            </label>--}}
{{--                        </div>--}}

{{--                        <div>--}}
{{--                            <label>--}}
{{--                                <input name="32GB" type="checkbox" value="32GB" >--}}
{{--                                32GB--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                </div>

                <div class="infor-01">
                    <p> Driver  </p>
                    <select class="funtion" id="drive">
                        <option value="all">All</option>
                        <option value="SSD 1 TB">SSD 1 TB</option>
                        <option value="SSD 512 GB">SSD 512 GB</option>
                        <option value="SSD 256 GB">SSD 256 GB</option>
                        <option value="SSD 128 GB">SSD 128 GB</option>
                    </select>

{{--                    <div class="box-box-01">--}}
{{--                        <div>--}}
{{--                            <label>--}}
{{--                                <input name="SSD 1 TB" type="checkbox" value="SSD 1 TB" >--}}
{{--                                SSD 1 TB--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <label>--}}
{{--                                <input name="SSD 512 GB" type="checkbox" value="SSD 512 GB" >--}}
{{--                                SSD 512 GB--}}

{{--                            </label>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <label>--}}
{{--                                <input name="SSD 256 GB" type="checkbox" value="SSD 256 GB" >--}}
{{--                                SSD 256 GB--}}

{{--                            </label>--}}
{{--                        </div>--}}

{{--                        <div>--}}
{{--                            <label>--}}
{{--                                <input name="SSD 128 GB" type="checkbox" value="SSD 128 GB" >--}}
{{--                                SSD 128 GB--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                </div>

                <div class="infor-01">
                    <p> CPU  </p>
                    <select class="funtion" id="cpu">
                        <option value="all">All</option>
                        <option value="Intel celeron">Intel celeron</option>
                        <option value="Intel pentium">Intel pentium</option>
                        <option value="Intel core i3">Intel core i3</option>
                        <option value="Intel core i5">Intel core i5</option>
                        <option value="Intel core i7">Intel core i7</option>
                        <option value="Amd ryzen 3">Amd ryzen 3</option>
                        <option value="Amd ryzen 5">Amd ryzen 5</option>
                        <option value="Amd ryzen 7">Amd ryzen 7</option>
                        <option value="Amd ryzen 9">Amd ryzen 9</option>
                    </select>
{{--                    <div class="box-box-01">--}}
{{--                        <div>--}}
{{--                            <label>--}}
{{--                                <input name="Intel celeron" type="checkbox" value="Intel celeron" >--}}
{{--                                Intel celeron--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <label>--}}
{{--                                <input name="Intel pentium" type="checkbox" value="Intel pentium" >--}}
{{--                                Intel pentium--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <label>--}}
{{--                                <input name="Intel core i3" type="checkbox" value="Intel core i3" >--}}
{{--                                Intel core i3--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <label>--}}
{{--                                <input name="Intel core i5" type="checkbox" value="Intel core i5" >--}}
{{--                                Intel core i5--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <label>--}}
{{--                                <input name="Intel core i7" type="checkbox" value="Intel core i7" >--}}
{{--                                Intel core i7--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <label>--}}
{{--                                <input name="Amd ryzen 3" type="checkbox" value="Amd ryzen 3" >--}}
{{--                                Amd ryzen 3--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <label>--}}
{{--                                <input name="Amd ryzen 5" type="checkbox" value="Amd ryzen 5" >--}}
{{--                                Amd ryzen 5--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <label>--}}
{{--                                <input name="Amd ryzen 7" type="checkbox" value="Amd ryzen 7" >--}}
{{--                                Amd ryzen 7--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <label>--}}
{{--                                <input name="Amd ryzen 9" type="checkbox" value="Amd ryzen 9" >--}}
{{--                                Amd ryzen 9--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                </div>


            </div>


            <div id="list_product" class="product-main row">
                @foreach($products as $product)
                    <div class="main-sort-0101 col-sm-3">
                        <div class="tab-0404">
                            <div class="tab-image">
                                <a href="#" ><img src="{{$product->img}}" alt="Asus tuf" class="d-block" style="width:100%"> </a>
                            </div>

                            <div class="name-product">
                                <p> <a href="#">{{$product->name}}</a> </p>
                            </div>

                            <div class="detail-product">
                                <li>Ram: {{$product->ram}}</li>
                                <li>CPU: {{$product->cpu}}</li>
                                <li>Drive: {{$product->drive}}</li>
                            </div>

                            <div class="buy-product">
                                <form method="get" action="/buy-product">
                                    @csrf
                                    @method('get')
                                    <input type="hidden" value="{{$product->id}}" name="product_id">
                                    <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
                                    <button type="submit" > Buy Now </button>
                                </form>
                            </div>

                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section>

    </body>
@endsection



