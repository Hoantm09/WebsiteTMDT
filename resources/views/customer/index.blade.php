@extends('customer.layout')
@section('title', "Trang chủ")


@section('css')

@endsection()


@section('body')    
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
                                        <a href="/category?status=hot" class="button btn-lets-do-it">Mua ngay</a>
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
                                        <a href="/category?status=new" class="button btn-lets-do-it">Mua ngay</a> 
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
                    Gợi ý hôm nay
                </h3>
                {{-- <div class="bd-example"> --}}
                    <div id="new_arrivals" class="tab-panel active">
                        <div class="stelina-product">
                            <ul class="row list-products auto-clear equal-container product-grid">

                            <li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner">
			                            <div class="product-top">
			                            </div>
			                            <div class="product-thumb">
			                                <div class="thumb-inner">
			                                    <a href="/product/110-金木犀-オーデコロン-30ml-日本製-キンモクセイ" style="background-image: url(https://rapido.vn/wp-content/uploads/2023/08/RC1-8L.png)"> </a>
			                                    <div class="thumb-group action-group action-add-to-card" atr="Add to card" product-id="110" meta-id="1"><div class="loop-form-add-to-cart">
                                            <button class="single_add_to_cart_button button">カートに入れる</button>
                                        </div></div>
			                                </div> 
			                            </div>
			                            <div class="product-info">
			                                <h5 class="product-name product_title">
			                                    <a href="#">Nồi cơm</a>
			                                </h5> 
			                                <div class="group-info">
			                                    <div class="stars-rating">
			                                        <div class="star-rating">
			                                            <span class="star-4"></span>
			                                        </div>
			                                        <div class="count-star">
			                                            (293)
			                                        </div>
			                                    </div>
			                                    <div class="price">
			                                        <ins>10,000,000₫</ins>
			                                    </div>
			                                </div>
			                            </div>
			                        </div>
                                </li><li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner">
			                            <div class="product-top">
			                            </div>
			                            <div class="product-thumb">
			                                <div class="thumb-inner">
			                                    <a href="/product/110-金木犀-オーデコロン-30ml-日本製-キンモクセイ" style="background-image: url(https://rapido.vn/wp-content/uploads/2023/08/RC1-8L.png)"> </a>
			                                    <div class="thumb-group action-group action-add-to-card" atr="Add to card" product-id="110" meta-id="1"><div class="loop-form-add-to-cart">
                                            <button class="single_add_to_cart_button button">カートに入れる</button>
                                        </div></div>
			                                </div> 
			                            </div>
			                            <div class="product-info">
			                                <h5 class="product-name product_title">
			                                    <a href="#">Nồi cơm</a>
			                                </h5> 
			                                <div class="group-info">
			                                    <div class="stars-rating">
			                                        <div class="star-rating">
			                                            <span class="star-4"></span>
			                                        </div>
			                                        <div class="count-star">
			                                            (293)
			                                        </div>
			                                    </div>
			                                    <div class="price">
			                                        <ins>10,000,000₫</ins>
			                                    </div>
			                                </div>
			                            </div>
			                        </div>
                                </li><li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner">
			                            <div class="product-top">
			                            </div>
			                            <div class="product-thumb">
			                                <div class="thumb-inner">
			                                    <a href="/product/110-金木犀-オーデコロン-30ml-日本製-キンモクセイ" style="background-image: url(https://rapido.vn/wp-content/uploads/2023/08/RC1-8L.png)"> </a>
			                                    <div class="thumb-group action-group action-add-to-card" atr="Add to card" product-id="110" meta-id="1"><div class="loop-form-add-to-cart">
                                            <button class="single_add_to_cart_button button">カートに入れる</button>
                                        </div></div>
			                                </div> 
			                            </div>
			                            <div class="product-info">
			                                <h5 class="product-name product_title">
			                                    <a href="#">Nồi cơm</a>
			                                </h5> 
			                                <div class="group-info">
			                                    <div class="stars-rating">
			                                        <div class="star-rating">
			                                            <span class="star-4"></span>
			                                        </div>
			                                        <div class="count-star">
			                                            (293)
			                                        </div>
			                                    </div>
			                                    <div class="price">
			                                        <ins>10,000,000₫</ins>
			                                    </div>
			                                </div>
			                            </div>
			                        </div>
                                </li><li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner">
			                            <div class="product-top">
			                            </div>
			                            <div class="product-thumb">
			                                <div class="thumb-inner">
			                                    <a href="/product/110-金木犀-オーデコロン-30ml-日本製-キンモクセイ" style="background-image: url(https://rapido.vn/wp-content/uploads/2023/08/RC1-8L.png)"> </a>
			                                    <div class="thumb-group action-group action-add-to-card" atr="Add to card" product-id="110" meta-id="1"><div class="loop-form-add-to-cart">
                                            <button class="single_add_to_cart_button button">カートに入れる</button>
                                        </div></div>
			                                </div> 
			                            </div>
			                            <div class="product-info">
			                                <h5 class="product-name product_title">
			                                    <a href="#">Nồi cơm</a>
			                                </h5> 
			                                <div class="group-info">
			                                    <div class="stars-rating">
			                                        <div class="star-rating">
			                                            <span class="star-4"></span>
			                                        </div>
			                                        <div class="count-star">
			                                            (293)
			                                        </div>
			                                    </div>
			                                    <div class="price">
			                                        <ins>10,000,000₫</ins>
			                                    </div>
			                                </div>
			                            </div>
			                        </div>
                                </li><li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner">
			                            <div class="product-top">
			                            </div>
			                            <div class="product-thumb">
			                                <div class="thumb-inner">
			                                    <a href="/product/110-金木犀-オーデコロン-30ml-日本製-キンモクセイ" style="background-image: url(https://rapido.vn/wp-content/uploads/2023/08/RC1-8L.png)"> </a>
			                                    <div class="thumb-group action-group action-add-to-card" atr="Add to card" product-id="110" meta-id="1"><div class="loop-form-add-to-cart">
                                            <button class="single_add_to_cart_button button">カートに入れる</button>
                                        </div></div>
			                                </div> 
			                            </div>
			                            <div class="product-info">
			                                <h5 class="product-name product_title">
			                                    <a href="#">Nồi cơm</a>
			                                </h5> 
			                                <div class="group-info">
			                                    <div class="stars-rating">
			                                        <div class="star-rating">
			                                            <span class="star-4"></span>
			                                        </div>
			                                        <div class="count-star">
			                                            (293)
			                                        </div>
			                                    </div>
			                                    <div class="price">
			                                        <ins>10,000,000₫</ins>
			                                    </div>
			                                </div>
			                            </div>
			                        </div>
                                </li><li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner">
			                            <div class="product-top">
			                            </div>
			                            <div class="product-thumb">
			                                <div class="thumb-inner">
			                                    <a href="/product/110-金木犀-オーデコロン-30ml-日本製-キンモクセイ" style="background-image: url(https://rapido.vn/wp-content/uploads/2023/08/RC1-8L.png)"> </a>
			                                    <div class="thumb-group action-group action-add-to-card" atr="Add to card" product-id="110" meta-id="1"><div class="loop-form-add-to-cart">
                                            <button class="single_add_to_cart_button button">カートに入れる</button>
                                        </div></div>
			                                </div> 
			                            </div>
			                            <div class="product-info">
			                                <h5 class="product-name product_title">
			                                    <a href="#">Nồi cơm</a>
			                                </h5> 
			                                <div class="group-info">
			                                    <div class="stars-rating">
			                                        <div class="star-rating">
			                                            <span class="star-4"></span>
			                                        </div>
			                                        <div class="count-star">
			                                            (293)
			                                        </div>
			                                    </div>
			                                    <div class="price">
			                                        <ins>10,000,000₫</ins>
			                                    </div>
			                                </div>
			                            </div>
			                        </div>
                                </li><li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner">
			                            <div class="product-top">
			                            </div>
			                            <div class="product-thumb">
			                                <div class="thumb-inner">
			                                    <a href="/product/110-金木犀-オーデコロン-30ml-日本製-キンモクセイ" style="background-image: url(https://rapido.vn/wp-content/uploads/2023/08/RC1-8L.png)"> </a>
			                                    <div class="thumb-group action-group action-add-to-card" atr="Add to card" product-id="110" meta-id="1"><div class="loop-form-add-to-cart">
                                            <button class="single_add_to_cart_button button">カートに入れる</button>
                                        </div></div>
			                                </div> 
			                            </div>
			                            <div class="product-info">
			                                <h5 class="product-name product_title">
			                                    <a href="#">Nồi cơm</a>
			                                </h5> 
			                                <div class="group-info">
			                                    <div class="stars-rating">
			                                        <div class="star-rating">
			                                            <span class="star-4"></span>
			                                        </div>
			                                        <div class="count-star">
			                                            (293)
			                                        </div>
			                                    </div>
			                                    <div class="price">
			                                        <ins>10,000,000₫</ins>
			                                    </div>
			                                </div>
			                            </div>
			                        </div>
                                </li><li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner">
			                            <div class="product-top">
			                            </div>
			                            <div class="product-thumb">
			                                <div class="thumb-inner">
			                                    <a href="/product/110-金木犀-オーデコロン-30ml-日本製-キンモクセイ" style="background-image: url(https://rapido.vn/wp-content/uploads/2023/08/RC1-8L.png)"> </a>
			                                    <div class="thumb-group action-group action-add-to-card" atr="Add to card" product-id="110" meta-id="1"><div class="loop-form-add-to-cart">
                                            <button class="single_add_to_cart_button button">カートに入れる</button>
                                        </div></div>
			                                </div> 
			                            </div>
			                            <div class="product-info">
			                                <h5 class="product-name product_title">
			                                    <a href="#">Nồi cơm</a>
			                                </h5> 
			                                <div class="group-info">
			                                    <div class="stars-rating">
			                                        <div class="star-rating">
			                                            <span class="star-4"></span>
			                                        </div>
			                                        <div class="count-star">
			                                            (293)
			                                        </div>
			                                    </div>
			                                    <div class="price">
			                                        <ins>10,000,000₫</ins>
			                                    </div>
			                                </div>
			                            </div>
			                        </div>
                                </li></ul>
                        </div>
                    </div>
            </div>
               {{-- <div class="card-deck">
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
  </div> --}}
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
                                        <h3 class="title">Phổ biến nhất</h3>
                                        {{-- <div class="description">
                                            Proin interdum magna primis id consequat
                                        </div> --}}
                                        <a href="/category?status=hot" class="button btn-shop-now">Mua ngay</a>
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
                                        <h3 class="title">Tất cả sản phẩm</h3> 
                                        <a href="/category?category=0" class="button btn-shop-now">Mua ngay</a>
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
                                <h3 class="title">LG</h3>
                                <div class="description">
                                    Bạn không có vật phẩm nào & Bạn đã sẵn sàng <br/> sử dụng chưa? hãy đến và mua sắm cùng chúng tôi!
                                </div> 
                                <a href="/category?category=3" class="button btn-shop-now">Mua ngay</a>
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
                            <a data-toggle="tab" aria-expanded="true" href="#new_arrivals">Sản phẩm mới</a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" aria-expanded="true" href="#top-rated">Sản phẩm nổi bật</a>
                        </li>
                    </ul>
                </div>
                <div id="new_arrivals" class="tab-panel active">
                        <div class="stelina-product">
                            <ul class="row list-products auto-clear equal-container product-grid">

                            <li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner">
			                            <div class="product-top">
			                            </div>
			                            <div class="product-thumb">
			                                <div class="thumb-inner">
			                                    <a href="/product/110-金木犀-オーデコロン-30ml-日本製-キンモクセイ" style="background-image: url(https://rapido.vn/wp-content/uploads/2023/08/RC1-8L.png)"> </a>
			                                    <div class="thumb-group action-group action-add-to-card" atr="Add to card" product-id="110" meta-id="1"><div class="loop-form-add-to-cart">
                                            <button class="single_add_to_cart_button button">カートに入れる</button>
                                        </div></div>
			                                </div> 
			                            </div>
			                            <div class="product-info">
			                                <h5 class="product-name product_title">
			                                    <a href="#">Nồi cơm</a>
			                                </h5> 
			                                <div class="group-info">
			                                    <div class="stars-rating">
			                                        <div class="star-rating">
			                                            <span class="star-4"></span>
			                                        </div>
			                                        <div class="count-star">
			                                            (293)
			                                        </div>
			                                    </div>
			                                    <div class="price">
			                                        <ins>10,000,000₫</ins>
			                                    </div>
			                                </div>
			                            </div>
			                        </div>
                                </li><li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner">
			                            <div class="product-top">
			                            </div>
			                            <div class="product-thumb">
			                                <div class="thumb-inner">
			                                    <a href="/product/110-金木犀-オーデコロン-30ml-日本製-キンモクセイ" style="background-image: url(https://rapido.vn/wp-content/uploads/2023/08/RC1-8L.png)"> </a>
			                                    <div class="thumb-group action-group action-add-to-card" atr="Add to card" product-id="110" meta-id="1"><div class="loop-form-add-to-cart">
                                            <button class="single_add_to_cart_button button">カートに入れる</button>
                                        </div></div>
			                                </div> 
			                            </div>
			                            <div class="product-info">
			                                <h5 class="product-name product_title">
			                                    <a href="#">Tủ lạnh</a>
			                                </h5> 
			                                <div class="group-info">
			                                    <div class="stars-rating">
			                                        <div class="star-rating">
			                                            <span class="star-4"></span>
			                                        </div>
			                                        <div class="count-star">
			                                            (293)
			                                        </div>
			                                    </div>
			                                    <div class="price">
			                                        <ins>10,000,000₫</ins>
			                                    </div>
			                                </div>
			                            </div>
			                        </div>
                                </li><li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner">
			                            <div class="product-top">
			                            </div>
			                            <div class="product-thumb">
			                                <div class="thumb-inner">
			                                    <a href="/product/110-金木犀-オーデコロン-30ml-日本製-キンモクセイ" style="background-image: url(https://rapido.vn/wp-content/uploads/2023/08/RC1-8L.png)"> </a>
			                                    <div class="thumb-group action-group action-add-to-card" atr="Add to card" product-id="110" meta-id="1"><div class="loop-form-add-to-cart">
                                            <button class="single_add_to_cart_button button">カートに入れる</button>
                                        </div></div>
			                                </div> 
			                            </div>
			                            <div class="product-info">
			                                <h5 class="product-name product_title">
			                                    <a href="#">Nồi cơm</a>
			                                </h5> 
			                                <div class="group-info">
			                                    <div class="stars-rating">
			                                        <div class="star-rating">
			                                            <span class="star-4"></span>
			                                        </div>
			                                        <div class="count-star">
			                                            (293)
			                                        </div>
			                                    </div>
			                                    <div class="price">
			                                        <ins>10,000,000₫</ins>
			                                    </div>
			                                </div>
			                            </div>
			                        </div>
                                </li><li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner">
			                            <div class="product-top">
			                            </div>
			                            <div class="product-thumb">
			                                <div class="thumb-inner">
			                                    <a href="/product/110-金木犀-オーデコロン-30ml-日本製-キンモクセイ" style="background-image: url(https://d1pjg4o0tbonat.cloudfront.net/content/dam/toshiba-aem/vn/tu-lanh/tu-lanh-side-by-side/tu-lanh-toshiba-gr-rs637we-pmw-06-mg/gallery1.png/jcr:content/renditions/cq5dam.compression.png)"> </a>
			                                    <div class="thumb-group action-group action-add-to-card" atr="Add to card" product-id="110" meta-id="1"><div class="loop-form-add-to-cart">
                                            <button class="single_add_to_cart_button button">カートに入れる</button>
                                        </div></div>
			                                </div> 
			                            </div>
			                            <div class="product-info">
			                                <h5 class="product-name product_title">
			                                    <a href="#">Nồi cơm</a>
			                                </h5> 
			                                <div class="group-info">
			                                    <div class="stars-rating">
			                                        <div class="star-rating">
			                                            <span class="star-4"></span>
			                                        </div>
			                                        <div class="count-star">
			                                            (293)
			                                        </div>
			                                    </div>
			                                    <div class="price">
			                                        <ins>10,000,000₫</ins>
			                                    </div>
			                                </div>
			                            </div>
			                        </div>
                                </li><li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner">
			                            <div class="product-top">
			                            </div>
			                            <div class="product-thumb">
			                                <div class="thumb-inner">
			                                    <a href="/product/110-金木犀-オーデコロン-30ml-日本製-キンモクセイ" style="background-image: url(https://d1pjg4o0tbonat.cloudfront.net/content/dam/toshiba-aem/vn/tu-lanh/tu-lanh-side-by-side/tu-lanh-toshiba-gr-rs637we-pmw-06-mg/gallery1.png/jcr:content/renditions/cq5dam.compression.png)"> </a>
			                                    <div class="thumb-group action-group action-add-to-card" atr="Add to card" product-id="110" meta-id="1"><div class="loop-form-add-to-cart">
                                            <button class="single_add_to_cart_button button">カートに入れる</button>
                                        </div></div>
			                                </div> 
			                            </div>
			                            <div class="product-info">
			                                <h5 class="product-name product_title">
			                                    <a href="#">Nồi cơm</a>
			                                </h5> 
			                                <div class="group-info">
			                                    <div class="stars-rating">
			                                        <div class="star-rating">
			                                            <span class="star-4"></span>
			                                        </div>
			                                        <div class="count-star">
			                                            (293)
			                                        </div>
			                                    </div>
			                                    <div class="price">
			                                        <ins>10,000,000₫</ins>
			                                    </div>
			                                </div>
			                            </div>
			                        </div>
                                </li><li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner">
			                            <div class="product-top">
			                            </div>
			                            <div class="product-thumb">
			                                <div class="thumb-inner">
			                                    <a href="/product/110-金木犀-オーデコロン-30ml-日本製-キンモクセイ" style="background-image: url(https://d1pjg4o0tbonat.cloudfront.net/content/dam/toshiba-aem/vn/tu-lanh/tu-lanh-side-by-side/tu-lanh-toshiba-gr-rs637we-pmw-06-mg/gallery1.png/jcr:content/renditions/cq5dam.compression.png)"> </a>
			                                    <div class="thumb-group action-group action-add-to-card" atr="Add to card" product-id="110" meta-id="1"><div class="loop-form-add-to-cart">
                                            <button class="single_add_to_cart_button button">カートに入れる</button>
                                        </div></div>
			                                </div> 
			                            </div>
			                            <div class="product-info">
			                                <h5 class="product-name product_title">
			                                    <a href="#">Nồi cơm</a>
			                                </h5> 
			                                <div class="group-info">
			                                    <div class="stars-rating">
			                                        <div class="star-rating">
			                                            <span class="star-4"></span>
			                                        </div>
			                                        <div class="count-star">
			                                            (293)
			                                        </div>
			                                    </div>
			                                    <div class="price">
			                                        <ins>10,000,000₫</ins>
			                                    </div>
			                                </div>
			                            </div>
			                        </div>
                                </li><li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner">
			                            <div class="product-top">
			                            </div>
			                            <div class="product-thumb">
			                                <div class="thumb-inner">
			                                    <a href="/product/110-金木犀-オーデコロン-30ml-日本製-キンモクセイ" style="background-image: url(https://d1pjg4o0tbonat.cloudfront.net/content/dam/toshiba-aem/vn/tu-lanh/tu-lanh-side-by-side/tu-lanh-toshiba-gr-rs637we-pmw-06-mg/gallery1.png/jcr:content/renditions/cq5dam.compression.png)"> </a>
			                                    <div class="thumb-group action-group action-add-to-card" atr="Add to card" product-id="110" meta-id="1"><div class="loop-form-add-to-cart">
                                            <button class="single_add_to_cart_button button">カートに入れる</button>
                                        </div></div>
			                                </div> 
			                            </div>
			                            <div class="product-info">
			                                <h5 class="product-name product_title">
			                                    <a href="#">Nồi cơm</a>
			                                </h5> 
			                                <div class="group-info">
			                                    <div class="stars-rating">
			                                        <div class="star-rating">
			                                            <span class="star-4"></span>
			                                        </div>
			                                        <div class="count-star">
			                                            (293)
			                                        </div>
			                                    </div>
			                                    <div class="price">
			                                        <ins>10,000,000₫</ins>
			                                    </div>
			                                </div>
			                            </div>
			                        </div>
                                </li><li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner">
			                            <div class="product-top">
			                            </div>
			                            <div class="product-thumb">
			                                <div class="thumb-inner">
			                                    <a href="/product/110-金木犀-オーデコロン-30ml-日本製-キンモクセイ" style="background-image: url(https://d1pjg4o0tbonat.cloudfront.net/content/dam/toshiba-aem/vn/tu-lanh/tu-lanh-side-by-side/tu-lanh-toshiba-gr-rs637we-pmw-06-mg/gallery1.png/jcr:content/renditions/cq5dam.compression.png)"> </a>
			                                    <div class="thumb-group action-group action-add-to-card" atr="Add to card" product-id="110" meta-id="1"><div class="loop-form-add-to-cart">
                                            <button class="single_add_to_cart_button button">カートに入れる</button>
                                        </div></div>
			                                </div> 
			                            </div>
			                            <div class="product-info">
			                                <h5 class="product-name product_title">
			                                    <a href="#">Nồi cơm</a>
			                                </h5> 
			                                <div class="group-info">
			                                    <div class="stars-rating">
			                                        <div class="star-rating">
			                                            <span class="star-4"></span>
			                                        </div>
			                                        <div class="count-star">
			                                            (293)
			                                        </div>
			                                    </div>
			                                    <div class="price">
			                                        <ins>10,000,000₫</ins>
			                                    </div>
			                                </div>
			                            </div>
			                        </div>
                                </li></ul>
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
                                        Khi Home Choice xử lý thông tin này, chúng tôi sẽ đảm bảo không rò rỉ thông tin cho bên thứ ba trong mọi trường hợp xử lý. Chúng tôi sẽ xử lý thông tin của bạn với sự cẩn trọng tối đa và tiêu chuẩn bảo mật cao nhất.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    
    
@endsection()

@section('sub_layout')

@endsection()


@section('js')
<script type="text/javascript" src="{{ asset('customer/assets/js/page/index.js') }}"></script>
@endsection()
        