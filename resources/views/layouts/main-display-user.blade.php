<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon" />
    <link href="{{ asset('css/site.css') }}" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/63149990bf.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!-- link css footer -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
          integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
          href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>
<div class="demo-product" style="z-index: 888">
    <div class="goods-coming-soon">
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <section class="main-home-01016">
                <div class="main-text-01016">
                    <h5>PC OLED Laptops</h5>
                    <h1>An unforgettable visual <br> visual experience </h1>
                    <p> Buy now with program us - Have a voucher - Discount 30% </p>
                    <Br>
                    <a href="#" class="button-shop"> SHOP NOW  <i class="fa-solid fa-arrow-right"></i> </a>
                    <a href="#" class="button-shop-01016"> Learn More  <i class="fa-solid fa-arrow-right"></i> </a>

                </div>
            </section>

            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('images/20210329040223.webp')}}" alt="vivobook pro" class="d-block" style="width:100%">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/fr_1.webp')}}" alt="Asus tuf" class="d-block" style="width:100%">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/wallpage003.jpg')}}" alt="Acer" class="d-block" style="width:100%">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/fr_9.webp')}}" alt="Zenbook 14" class="d-block" style="width:100%">
                </div>
            </div>

            <button class="btn-prev-next carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="btn-prev-next carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
</div>
</body>
</html>

