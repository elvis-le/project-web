<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <title>Document</title>
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon" />
    <link href="{{ asset('css/site.css') }}" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/63149990bf.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

</head>
    <body style=" background-color:  lightgrey">
 <section class="product-general">
     <div class="part-main">

         <div class="sort-by-infor">
             <div class="aa0101">
             <p> Arrange and filler </p>
             </div>

             <div class="infor-01">
                 <p> Microprocessor  </p>
                 <div class="box-box-01">
                     <div>
                         <input  name="%%%" type="checkbox" value="Ram" checked>
                     <label>
                         4GB
                     </label>
                     </div>

                     <div>
                         <label>
                             <input name="%%%" type="checkbox" value="Ram" checked>
                             8GB
                         </label>
                     </div>

                     <div>
                         <label>
                             <input name="%%%" type="checkbox" value="Ram" checked>
                             16GB
                         </label>
                     </div>

                     <div>
                         <label>
                             <input name="%%%" type="checkbox" value="Ram" checked>
                             32GB
                         </label>
                     </div>
                 </div>

             </div>

             <div class="infor-01">
                 <p> Driver  </p>

                 <div class="box-box-01">
                     <div>
                         <label>
                             <input name="%%%" type="checkbox" value="Ram" checked>
                             SSD 1TB
                         </label>
                     </div>
                     <div>
                         <label>
                             <input name="%%%" type="checkbox" value="Ram" checked>
                             SSD 512GB

                         </label>
                     </div>
                     <div>
                         <label>
                             <input name="%%%" type="checkbox" value="Ram" checked>
                             SSD 256GB

                         </label>
                     </div>

                     <div>
                         <label>
                             <input name="%%%" type="checkbox" value="Ram" checked>
                             SSD 128GB

                         </label>
                     </div>
                 </div>

             </div>

             <div class="infor-01">
                         <p> CPU  </p>
                 <div class="box-box-01">
                     <div>
                         <label>
                             <input name="%%%" type="checkbox" value="Ram" checked>
                             Intel celeron
                         </label>
                     </div>
                     <div>
                         <label>
                             <input name="%%%" type="checkbox" value="Ram" checked>
                             Intel pentium
                         </label>
                     </div>
                     <div>
                         <label>
                             <input name="%%%" type="checkbox" value="Ram" checked>
                             Intel core i3
                         </label>
                     </div>
                     <div>
                         <label>
                             <input name="%%%" type="checkbox" value="Ram" checked>
                                Intel core i5
                         </label>
                     </div>
                     <div>
                         <label>
                             <input name="%%%" type="checkbox" value="Ram" checked>
                             Intel core i7
                         </label>
                     </div>
                     <div>
                         <label>
                             <input name="%%%" type="checkbox" value="Ram" checked>
                             Amd ryzen 3
                         </label>
                     </div>
                     <div>
                         <label>
                             <input name="%%%" type="checkbox" value="Ram" checked>
                             Amd ryzen 5
                         </label>
                     </div>
                     <div>
                         <label>
                             <input name="%%%" type="checkbox" value="Ram" checked>
                             Amd ryzen 7
                         </label>
                     </div>
                     <div>
                         <label>
                             <input name="%%%" type="checkbox" value="Ram" checked>
                             Amd ryzen 9
                         </label>
                     </div>
                 </div>

             </div>


         </div>


         <div class="product-main">
             @foreach($products as $product)
                 <div class="main-sort-0101">
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
                             <a href="#"> <button>  Buy Now  </button> </a>
                         </div>

                     </div>
                 </div>
             @endforeach

         </div>

     </div>
 </section>

</body>
</html>
