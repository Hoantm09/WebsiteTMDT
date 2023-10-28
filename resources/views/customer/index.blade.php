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
                            <div class="slider-owl owl-slick equal-container nav-center product-trending-list"
                                 data-slick='{"autoplay":true, "autoplaySpeed":9000, "arrows":false, "dots":true, "infinite":true, "speed":1000, "rows":1}'
                                 data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":1}}]'>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 banner-wrapp">
                        <div class="banner">
                            <div class="item-banner style7">
                                <div class="inner" style="background-image: url('{{ asset("wave2.jpg")  }}');">
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
        <div class="stelina-product produc-featured rows-space-65">
            <div class="container">
                <h3 class="custommenu-title-blog">
                    今日の取引
                </h3>
                <div class="owl-products owl-slick equal-container nav-center product-new-list"
                     data-slick='{"autoplay":false, "autoplaySpeed":1000, "arrows":false, "dots":true, "infinite":false, "speed":800, "rows":1}'
                     data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":4}},{"breakpoint":"1200","settings":{"slidesToShow":3}},{"breakpoint":"992","settings":{"slidesToShow":2}},{"breakpoint":"480","settings":{"slidesToShow":1}}]'> 

                </div>
            </div>
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
                            <a data-toggle="tab" aria-expanded="true" href="#new_arrivals">新着</a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" aria-expanded="true" href="#top-rated">上面図</a>
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
                                        宅配便/無料配送
                                    </h4>
                                    <div class="text">
                                        離島･一部地域は追加送料がかかる場合があります。
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
                                        ー返品・交換は可能？
                                    </h4>
                                    <div class="text">
                                        商品到着後3日以内、未使用(未開封) <br> 未通電の場合に限り返品・交換をお受け致します。
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
                                        個人情報保護
                                    </h4>
                                    <div class="text">
                                        これらの情報をSBTCが扱う場合、いかなる取扱いケースに於いても第三者への漏えいが無きよう、 細心の注意と最高水準のセキュリティーを以って取扱いをいたします。
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
        