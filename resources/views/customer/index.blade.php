@extends('customer.layout')
@section('title', "Trang chủ")


@section('css')

@endsection()


@section('body')
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    
    <div class="fullwidth-template">
        <div class="home-slider-banner">
            <div class="container">
                <div class="row10">
                    <div class="col-lg-8 silider-wrapp">
                        
                        <div class="home-slider">
                        <!-- <div class="slider-owl owl-slick equal-container nav-center product-trending-list"
                                 data-slick='{"autoplay":true, "autoplaySpeed":9000, "arrows":false, "dots":true, "infinite":true, "speed":1000, "rows":1}'
                                 data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":1}}]'>

                            </div> -->
                            <div id="carouselExampleIndicators" class="carousel slide">
                                <div class="carousel-indicators">
                                  <!-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
                                </div>
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img src="https://giadungsato.com/Uploads/images/giadungsato(2).jpg" class="d-block w-100" alt="...">
                                  </div>
                                </div>
                              </div>
                        </div>
                    </div>
                    <div class="col-lg-4 banner-wrapp">
                        <div class="banner">
                            <div class="item-banner style7">
                                <div class="inner" style="background-image: url('{{ asset("logo3.jpg")  }}');">
                                    <div class="banner-content">
                                        <h3 class="title">Sản phẩm đề xuất</h3>
                                        <div class="description">
                                        </div>
                                        <a href="/category?status=hot" class="button btn-lets-do-it">Shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="banner">
                            <div class="item-banner style8">
                                <div class="inner">
                                    <div class="banner-content">
                                        <h3 class="title">Sản phẩm mới</h3>
                                        <div class="description">
                                        </div>
                                        <a href="/category?status=new" class="button btn-lets-do-it">Shop now</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="stelina-product produc-featured rows-space-65"> -->
            <div class="container">
                <h3 class="custommenu-title-blog">
                    Today's Deals
                </h3>
                <div class="bd-example">
               <div class="card-deck">
    <div class="card">
    <img class="card-img-top" src="https://bizweb.dktcdn.net/100/348/480/products/may-loc-nuoc-mutosi-8-loi-mp-282m-714x714-5-1655092128.png?v=1668131352447" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Máy Lọc Nước Mutosi</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      
    </div>
    </div>
    <div class="card">
    <img class="card-img-top" src="https://api-omni.mutosi.com/v0/s3/view/noi-ap-suat-mutosi-mip-t820(2).png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Nồi Áp Suất Điện Mutosi</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="https://bizweb.dktcdn.net/thumb/grande/100/348/480/products/mf-691-714x714-1-1664164155.png?v=1668149499797" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Nồi Chiên Không Dầu Mutosi</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      
    </div>
  </div>
</div>
</div>

               
 
 

            <!-- </div>
                <div class="owl-products owl-slick equal-container nav-center product-new-list"
                     data-slick='{"autoplay":false, "autoplaySpeed":1000, "arrows":false, "dots":true, "infinite":false, "speed":800, "rows":1}'
                     data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":4}},{"breakpoint":"1200","settings":{"slidesToShow":3}},{"breakpoint":"992","settings":{"slidesToShow":2}},{"breakpoint":"480","settings":{"slidesToShow":1}}]'> 

                </div>
            </div> -->
        </div>
        <div class="banner-wrapp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="banner">
                            <div class="item-banner style4">
                                <div class="inner">
                                    <div class="banner-content">
                                        {{-- <h4 class="stelina-subtitle">TOP STAFF PICK</h4> --}}
                                        <h3 class="title">Best Collection</h3>
                                        {{-- <div class="description">
                                            Proin interdum magna primis id consequat
                                        </div> --}}
                                        <a href="/category?status=hot" class="button btn-shop-now">Shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="banner">
                            <div class="item-banner style5">
                                <div class="inner">
                                    <div class="banner-content">
                                        <h3 class="title">All Product</h3> 
                                        <a href="/category?category=0" class="button btn-shop-now">Shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-wrapp rows-space-65">
            <div class="container">
                <div class="banner">
                    <div class="item-banner style17">
                        <div class="inner">
                            <div class="banner-content">
                                <h3 class="title">Dior</h3>
                                <div class="description">
                                    You have no items & Are you <br/>ready to use? come & shop with us!
                                </div> 
                                <a href="/category?category=3" class="button btn-shop-now">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="stelina-tabs  default rows-space-40">
            <div class="container">
                <div class="tab-head">
                    <ul class="tab-link">
                        <!-- <li class="active">
                            <a data-toggle="tab" aria-expanded="true" href="#bestseller">Bestseller</a>
                        </li> -->
                        <li class="active">
                            <a data-toggle="tab" aria-expanded="true" href="#new_arrivals">New</a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" aria-expanded="true" href="#top-rated">Top View</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-container"> 
                    <div id="new_arrivals" class="tab-panel active">
                        <div class="stelina-product">
                            <ul class="row list-products auto-clear equal-container product-grid">

                            </ul>
                        </div>
                    </div>
                    <div id="top-rated" class="tab-panel">
                        <div class="stelina-product">
                            <ul class="row list-products auto-clear equal-container product-grid">

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="stelina-iconbox-wrapp default">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="stelina-iconbox  default">
                            <div class="iconbox-inner">
                                <div class="icon-item">
                                    <span class="icon flaticon-rocket-ship"></span>
                                </div>
                                <div class="content">
                                    <h4 class="title">
                                        Chuyển phát nhanh/Giao hàng miễn phí
                                    </h4>
                                    <div class="text">
                                        Phí vận chuyển bổ sung có thể áp dụng cho các đảo xa và một số khu vực.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="stelina-iconbox  default">
                            <div class="iconbox-inner">
                                <div class="icon-item">
                                    <span class="icon flaticon-return"></span>
                                </div>
                                <div class="content">
                                    <h4 class="title">
                                        Có thể trả/trao đổi được không?
                                    </h4>
                                    <div class="text">
                                        Chúng tôi sẽ chỉ chấp nhận trả lại hoặc trao đổi nếu sản phẩm chưa được sử dụng (chưa mở) và không được cấp nguồn trong vòng 3 ngày kể từ ngày nhận sản phẩm.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="stelina-iconbox  default">
                            <div class="iconbox-inner">
                                <div class="icon-item">
                                    <span class="icon flaticon-padlock"></span>
                                </div>
                                <div class="content">
                                    <h4 class="title">
                                        Bảo vệ thông tin cá nhân
                                    </h4>
                                    <div class="text">
                                        Khi SBTC xử lý thông tin này, chúng tôi sẽ đảm bảo không rò rỉ thông tin cho bên thứ ba trong mọi trường hợp xử lý. Chúng tôi sẽ xử lý thông tin của bạn với sự cẩn trọng tối đa và tiêu chuẩn bảo mật cao nhất.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
    
@endsection()

@section('sub_layout')

@endsection()


@section('js')
<script type="text/javascript" src="{{ asset('customer/assets/js/page/index.js') }}"></script>
@endsection()
        