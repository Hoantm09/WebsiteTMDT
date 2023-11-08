@extends('customer.layout')
@section('title', "カテゴリー")


@section('css')

@endsection()


@section('body')

<div class="main-content main-content-product left-sidebar category-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-trail breadcrumbs">
                    <ul class="trail-items breadcrumb">
                        <li class="trail-item trail-begin">
                            <a href="/">Trang Chủ</a>
                        </li>
                        <li class="trail-item trail-end active">
                            Danh Mục Sản Phẩm
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
            <div class="content-area shop-grid-content no-banner col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="site-main"> 
                    <div class="shop-top-control"> 
                        <form class="filter-choice select-form">
                            <span class="title" _msttexthash="80405" _msthash="54">Sắp Xếp Theo</span>
                            <select title="sort-by" class="sort-by" data-placeholder="Giá: Từ Cao đến Thấp">
                                <option value="0">-----------</option> 
                                <option value="1" _msttexthash="10097230" _msthash="55">Mới Nhất</option> 
                                <option value="2" _msttexthash="118859" _msthash="56">Tên: A đến Z</option> 
                                <option value="3" _msttexthash="117884" _msthash="57">Tên: Z đến A</option> 
                                <option value="4" _msttexthash="16554135" _msthash="58">Giá từ Thấp đến Cao</option> 
                                <option value="5" _msttexthash="19234657" _msthash="59">Giá từ Cao nhất đến Thấp; </option></select>
                        </form>
                        <div class="grid-view-mode">
                            <div class="inner">
                                <a class="modes-mode mode-list" atr="list">
                                    <span></span>
                                    <span></span>
                                </a>
                                <a class="modes-mode mode-grid active" atr="grid">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <ul class="row list-products auto-clear equal-container product-grid active" option-control="grid">
                         
                        <li class="product-item  col-lg-4 col-md-6 col-sm-6 col-xs-6 col-ts-12 style-1">
                            <div class="product-inner">
                                    <div class="product-top">
                                    </div>
                                    <div class="product-thumb">
                                        <div class="thumb-inner">
                                            <a href="http://127.0.0.1:8000/ProductDetail" style="background-image: url('/image-upload/1697040474o9-tkfk-q1us.webp')"> </a>
                                            <div class="thumb-group action-group action-add-to-card" atr="Add to card" product-id="110" meta-id="1"><div class="loop-form-add-to-cart">
                                        <button class="single_add_to_cart_button button" _msttexthash="129181" _msthash="697">Add to Cart</button>
                                    </div></div>
                                        </div> 
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name product_title">
                                            <a href="http://127.0.0.1:8000/ProductDetail" _msttexthash="1838967" _msthash="583">ANước Hoa SHIRO</a>
                                        </h5> 
                                        <div class="group-info">
                                            <div class="stars-rating">
                                                <div class="star-rating">
                                                    <span class="star-3"></span>
                                                </div>
                                                <div class="count-star" _msttexthash="27092" _msthash="584">
                                                    (114)
                                                </div>
                                            </div>
                                            <div class="price"> 
                                                <ins _msttexthash="86684" _msthash="585">3,000,000 ₫</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </li>
                        <li class="product-item  col-lg-4 col-md-6 col-sm-6 col-xs-6 col-ts-12 style-1">
                            <div class="product-inner">
                                    <div class="product-top">
                                    </div>
                                    <div class="product-thumb">
                                        <div class="thumb-inner">
                                            <a href="http://127.0.0.1:8000/ProductDetail" style="background-image: url('/image-upload/1697040474o9-tkfk-q1us.webp')"> </a>
                                            <div class="thumb-group action-group action-add-to-card" atr="Add to card" product-id="110" meta-id="1"><div class="loop-form-add-to-cart">
                                        <button class="single_add_to_cart_button button" _msttexthash="129181" _msthash="697">Add to Cart</button>
                                    </div></div>
                                        </div> 
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name product_title">
                                            <a href="http://127.0.0.1:8000/ProductDetail" _msttexthash="1838967" _msthash="583">Nước Hoa SHIRO</a>
                                        </h5> 
                                        <div class="group-info">
                                            <div class="stars-rating">
                                                <div class="star-rating">
                                                    <span class="star-3"></span>
                                                </div>
                                                <div class="count-star" _msttexthash="27092" _msthash="584">
                                                    (114)
                                                </div>
                                            </div>
                                            <div class="price"> 
                                                <ins _msttexthash="86684" _msthash="585">2,000,000 ₫</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </li>
                        <li class="product-item  col-lg-4 col-md-6 col-sm-6 col-xs-6 col-ts-12 style-1">
                            <div class="product-inner">
                                    <div class="product-top">
                                    </div>
                                    <div class="product-thumb">
                                        <div class="thumb-inner">
                                            <a href="http://127.0.0.1:8000/ProductDetail" style="background-image: url('/image-upload/1697040474o9-tkfk-q1us.webp')"> </a>
                                            <div class="thumb-group action-group action-add-to-card" atr="Add to card" product-id="110" meta-id="1"><div class="loop-form-add-to-cart">
                                        <button class="single_add_to_cart_button button" _msttexthash="129181" _msthash="697">Add to Cart</button>
                                    </div></div>
                                        </div> 
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name product_title">
                                            <a href="http://127.0.0.1:8000/ProductDetail" _msttexthash="1838967" _msthash="583">Nước Hoa SHIRO</a>
                                        </h5> 
                                        <div class="group-info">
                                            <div class="stars-rating">
                                                <div class="star-rating">
                                                    <span class="star-3"></span>
                                                </div>
                                                <div class="count-star" _msttexthash="27092" _msthash="584">
                                                    (114)
                                                </div>
                                            </div>
                                            <div class="price"> 
                                                <ins _msttexthash="86684" _msthash="585">2,000,000 ₫</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </li>
                        <li class="product-item  col-lg-4 col-md-6 col-sm-6 col-xs-6 col-ts-12 style-1">
                            <div class="product-inner">
                                    <div class="product-top">
                                    </div>
                                    <div class="product-thumb">
                                        <div class="thumb-inner">
                                            <a href="http://127.0.0.1:8000/ProductDetail" style="background-image: url('/image-upload/1697040474o9-tkfk-q1us.webp')"> </a>
                                            <div class="thumb-group action-group action-add-to-card" atr="Add to card" product-id="110" meta-id="1"><div class="loop-form-add-to-cart">
                                        <button class="single_add_to_cart_button button" _msttexthash="129181" _msthash="697">Add to Cart</button>
                                    </div></div>
                                        </div> 
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name product_title">
                                            <a href="http://127.0.0.1:8000/ProductDetail" _msttexthash="1838967" _msthash="583">Nước Hoa SHIRO</a>
                                        </h5> 
                                        <div class="group-info">
                                            <div class="stars-rating">
                                                <div class="star-rating">
                                                    <span class="star-3"></span>
                                                </div>
                                                <div class="count-star" _msttexthash="27092" _msthash="584">
                                                    (114)
                                                </div>
                                            </div>
                                            <div class="price"> 
                                                <ins _msttexthash="86684" _msthash="585">2,000,000 ₫</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </li>
                        <li class="product-item  col-lg-4 col-md-6 col-sm-6 col-xs-6 col-ts-12 style-1">
                            <div class="product-inner">
                                    <div class="product-top">
                                    </div>
                                    <div class="product-thumb">
                                        <div class="thumb-inner">
                                            <a href="http://127.0.0.1:8000/ProductDetail" style="background-image: url('/image-upload/1697040474o9-tkfk-q1us.webp')"> </a>
                                            <div class="thumb-group action-group action-add-to-card" atr="Add to card" product-id="110" meta-id="1"><div class="loop-form-add-to-cart">
                                        <button class="single_add_to_cart_button button" _msttexthash="129181" _msthash="697">Add to Cart</button>
                                    </div></div>
                                        </div> 
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name product_title">
                                            <a href="http://127.0.0.1:8000/ProductDetail" _msttexthash="1838967" _msthash="583">Nước Hoa SHIRO</a>
                                        </h5> 
                                        <div class="group-info">
                                            <div class="stars-rating">
                                                <div class="star-rating">
                                                    <span class="star-3"></span>
                                                </div>
                                                <div class="count-star" _msttexthash="27092" _msthash="584">
                                                    (114)
                                                </div>
                                            </div>
                                            <div class="price"> 
                                                <ins _msttexthash="86684" _msthash="585">2,000,000 ₫</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </li>
                        <li class="product-item  col-lg-4 col-md-6 col-sm-6 col-xs-6 col-ts-12 style-1">
                            <div class="product-inner">
                                    <div class="product-top">
                                    </div>
                                    <div class="product-thumb">
                                        <div class="thumb-inner">
                                            <a href="http://127.0.0.1:8000/ProductDetail" style="background-image: url('/image-upload/1697040474o9-tkfk-q1us.webp')"> </a>
                                            <div class="thumb-group action-group action-add-to-card" atr="Add to card" product-id="110" meta-id="1"><div class="loop-form-add-to-cart">
                                        <button class="single_add_to_cart_button button" _msttexthash="129181" _msthash="697">Add to Cart</button>
                                    </div></div>
                                        </div> 
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name product_title">
                                            <a href="http://127.0.0.1:8000/ProductDetail" _msttexthash="1838967" _msthash="583">Nước Hoa SHIRO</a>
                                        </h5> 
                                        <div class="group-info">
                                            <div class="stars-rating">
                                                <div class="star-rating">
                                                    <span class="star-3"></span>
                                                </div>
                                                <div class="count-star" _msttexthash="27092" _msthash="584">
                                                    (114)
                                                </div>
                                            </div>
                                            <div class="price"> 
                                                <ins _msttexthash="86684" _msthash="585">2,000,000 ₫</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </li>
                    <ul class="row list-products auto-clear equal-container product-list" option-control="list" _msthidden="42">
                        
                                                                                 <li class="product-item style-list col-lg-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-ts-12" _msthidden="7">
                            <div class="product-inner" _msthidden="7">
                                <div class="product-top">
                                </div>
                                <div class="products-bottom-content" _msthidden="7">
                                    <div class="product-thumb" _msthidden="1">
                                        <div class="thumb-inner" _msthidden="1">
                                            <a href="http://127.0.0.1:8000/ProductDetail">
                                                <img src="/image-upload/169704051041s9lovpcnl._sl500_.jpg" alt="img" _msthidden="A" _mstalt="32942" _msthash="575">
                                            </a> 
                                        </div>
                                    </div>
                                    <div class="product-info-left" _msthidden="4"> 
                                        <h5 class="product-name product_title" _msthidden="1">
                                            <a href="http://127.0.0.1:8000/ProductDetail" _msttexthash="70685641" _msthidden="1" _msthash="576">金木犀 オーデコロン 30ml 日本製 キンモクセイ</a>
                                        </h5>
                                        <div class="stars-rating" _msthidden="1">
                                            <div class="star-rating">
                                                <span class="star-3"></span>
                                            </div>
                                            <div class="count-star" _msttexthash="27092" _msthidden="1" _msthash="577">
                                                (114)
                                            </div>
                                        </div>
                                        <ul class="product-attributes"> 
                                            <li></li> 
                                        </ul>
                                        <ul class="attributes-display" _msthidden="2">
                                            <li class="swatch-color" _msttexthash="54171" _msthidden="1" _msthash="578">
                                                Size:
                                            </li>
                                             <li class="swatch-color" size-id="1" data-prices="9981" data-discount="0" _msthidden="1"> <a href="#" _msttexthash="36426" _msthidden="1" _msthash="579">30 ml</a> </li> 
                                        </ul> 
                                    </div>
                                    <div class="product-info-right" _msthidden="2">
                                        <div class="price" _msttexthash="3286439" _msthidden="1" _msthash="580">
                                            9,981  ₫
                                        </div> 
                                        <div class="cart" _msthidden="1">
                                            <div class="single_variation_wrap" _msthidden="1">  
                                                <button class="single_add_to_cart_button button" _msthidden="1">
                                                    <span class="loop-form-add-to-cart action-add-to-card d-flex" atr="Add to card" product-id="110" meta-id="1" _msttexthash="12528997" _msthidden="1" _msthash="581">
                                                            カートに入れる
                                                        </span>  
                                                </button>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>  <li class="product-item style-list col-lg-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-ts-12" _msthidden="7">
                            <div class="product-inner" _msthidden="7">
                                <div class="product-top">
                                </div>
                                <div class="products-bottom-content" _msthidden="7">
                                    <div class="product-thumb" _msthidden="1">
                                        <div class="thumb-inner" _msthidden="1">
                                            <a href="/product/109-shiro-シロ-香水-オードパルファン-3本セット-パフューム-お試し-ミニボトル-香水セット">
                                                <img src="/image-upload/1697040474o9-tkfk-q1us.webp" alt="img" _msthidden="A" _mstalt="32942" _msthash="564">
                                            </a> 
                                        </div>
                                    </div>
                                    <div class="product-info-left" _msthidden="4"> 
                                        <h5 class="product-name product_title" _msthidden="1">
                                            <a href="/product/109-shiro-シロ-香水-オードパルファン-3本セット-パフューム-お試し-ミニボトル-香水セット" _msttexthash="206906531" _msthidden="1" _msthash="565">SHIRO シロ 香水 オードパルファン 3本セット パフューム お試し ミニボトル 香水セット</a>
                                        </h5>
                                        <div class="stars-rating" _msthidden="1">
                                            <div class="star-rating">
                                                <span class="star-4"></span>
                                            </div>
                                            <div class="count-star" _msttexthash="27833" _msthidden="1" _msthash="566">
                                                (228)
                                            </div>
                                        </div>
                                        <ul class="product-attributes"> 
                                            <li></li> 
                                        </ul>
                                        <ul class="attributes-display" _msthidden="2">
                                            <li class="swatch-color" _msttexthash="54171" _msthidden="1" _msthash="567">
                                                Size:
                                            </li>
                                             <li class="swatch-color" size-id="1" data-prices="9987" data-discount="0" _msthidden="1"> <a href="#" _msttexthash="28613" _msthidden="1" _msthash="568">3 ml</a> </li> 
                                        </ul> 
                                    </div>
                                    <div class="product-info-right" _msthidden="2">
                                        <div class="price" _msttexthash="3287297" _msthidden="1" _msthash="569">
                                            9,987  ₫
                                        </div> 
                                        <div class="cart" _msthidden="1">
                                            <div class="single_variation_wrap" _msthidden="1">  
                                                <button class="single_add_to_cart_button button" _msthidden="1">
                                                    <span class="loop-form-add-to-cart action-add-to-card d-flex" atr="Add to card" product-id="109" meta-id="1" _msttexthash="12528997" _msthidden="1" _msthash="570">
                                                            カートに入れる
                                                        </span>  
                                                </button>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>  <li class="product-item style-list col-lg-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-ts-12" _msthidden="7">
                            <div class="product-inner" _msthidden="7">
                                <div class="product-top">
                                </div>
                                <div class="products-bottom-content" _msthidden="7">
                                    <div class="product-thumb" _msthidden="1">
                                        <div class="thumb-inner" _msthidden="1">
                                            <a href="/product/108-no.2-フィンカ-金木犀の夜更かし-オスマンサスナイト-(オードトワレ)100ｍl-きんもくせい">
                                                <img src="/image-upload/169704039831gsdu+6qtl._sl500_.jpg" alt="img" _msthidden="A" _mstalt="32942" _msthash="553">
                                            </a> 
                                        </div>
                                    </div>
                                    <div class="product-info-left" _msthidden="4"> 
                                        <h5 class="product-name product_title" _msthidden="1">
                                            <a href="/product/108-no.2-フィンカ-金木犀の夜更かし-オスマンサスナイト-(オードトワレ)100ｍl-きんもくせい" _msttexthash="206343501" _msthidden="1" _msthash="554">no.2 フィンカ 金木犀の夜更かし オスマンサスナイト (オードトワレ)100ｍL きんもくせい</a>
                                        </h5>
                                        <div class="stars-rating" _msthidden="1">
                                            <div class="star-rating">
                                                <span class="star-4"></span>
                                            </div>
                                            <div class="count-star" _msttexthash="26806" _msthidden="1" _msthash="555">
                                                (130)
                                            </div>
                                        </div>
                                        <ul class="product-attributes"> 
                                            <li></li> 
                                        </ul>
                                        <ul class="attributes-display" _msthidden="2">
                                            <li class="swatch-color" _msttexthash="54171" _msthidden="1" _msthash="556">
                                                Size:
                                            </li>
                                             <li class="swatch-color" size-id="1" data-prices="9932" data-discount="0" _msthidden="1"> <a href="#" _msttexthash="44681" _msthidden="1" _msthash="557">100 ml</a> </li> 
                                        </ul> 
                                    </div>
                                    <div class="product-info-right" _msthidden="2">
                                        <div class="price" _msttexthash="3285932" _msthidden="1" _msthash="558">
                                            9,932  ₫
                                        </div> 
                                        <div class="cart" _msthidden="1">
                                            <div class="single_variation_wrap" _msthidden="1">  
                                                <button class="single_add_to_cart_button button" _msthidden="1">
                                                    <span class="loop-form-add-to-cart action-add-to-card d-flex" atr="Add to card" product-id="108" meta-id="1" _msttexthash="12528997" _msthidden="1" _msthash="559">
                                                            カートに入れる
                                                        </span>  
                                                </button>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>  <li class="product-item style-list col-lg-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-ts-12" _msthidden="7">
                            <div class="product-inner" _msthidden="7">
                                <div class="product-top">
                                </div>
                                <div class="products-bottom-content" _msthidden="7">
                                    <div class="product-thumb" _msthidden="1">
                                        <div class="thumb-inner" _msthidden="1">
                                            <a href="/product/107-tiffany-ティファニー-オードパルファム-50ml-名入れ彫刻代込み名入れ-ギフト-プレゼント">
                                                <img src="/image-upload/1697040312ti60699305_ra.webp" alt="img" _msthidden="A" _mstalt="32942" _msthash="542">
                                            </a> 
                                        </div>
                                    </div>
                                    <div class="product-info-left" _msthidden="4"> 
                                        <h5 class="product-name product_title" _msthidden="1">
                                            <a href="/product/107-tiffany-ティファニー-オードパルファム-50ml-名入れ彫刻代込み名入れ-ギフト-プレゼント" _msttexthash="214856278" _msthidden="1" _msthash="543">TIFFANY ティファニー オードパルファム 50ml 名入れ彫刻代込み名入れ ギフト プレゼント</a>
                                        </h5>
                                        <div class="stars-rating" _msthidden="1">
                                            <div class="star-rating">
                                                <span class="star-7"></span>
                                            </div>
                                            <div class="count-star" _msttexthash="27209" _msthidden="1" _msthash="544">
                                                (205)
                                            </div>
                                        </div>
                                        <ul class="product-attributes"> 
                                            <li></li> 
                                        </ul>
                                        <ul class="attributes-display" _msthidden="2">
                                            <li class="swatch-color" _msttexthash="54171" _msthidden="1" _msthash="545">
                                                Size:
                                            </li>
                                             <li class="swatch-color" size-id="1" data-prices="29897" data-discount="0" _msthidden="1"> <a href="#" _msttexthash="36608" _msthidden="1" _msthash="546">50 ml</a> </li> 
                                        </ul> 
                                    </div>
                                    <div class="product-info-right" _msthidden="2">
                                        <div class="price" _msttexthash="3566667" _msthidden="1" _msthash="547">
                                            29,897  ₫
                                        </div> 
                                        <div class="cart" _msthidden="1">
                                            <div class="single_variation_wrap" _msthidden="1">  
                                                <button class="single_add_to_cart_button button" _msthidden="1">
                                                    <span class="loop-form-add-to-cart action-add-to-card d-flex" atr="Add to card" product-id="107" meta-id="1" _msttexthash="12528997" _msthidden="1" _msthash="548">
                                                            カートに入れる
                                                        </span>  
                                                </button>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>  <li class="product-item style-list col-lg-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-ts-12" _msthidden="7">
                            <div class="product-inner" _msthidden="7">
                                <div class="product-top">
                                </div>
                                <div class="products-bottom-content" _msthidden="7">
                                    <div class="product-thumb" _msthidden="1">
                                        <div class="thumb-inner" _msthidden="1">
                                            <a href="/product/106-エルメス(hermes)-ナイルの庭-液体-100ミリリットル">
                                                <img src="/image-upload/169704023631e7vqamhvl._sl500_.jpg" alt="img" _msthidden="A" _mstalt="32942" _msthash="531">
                                            </a> 
                                        </div>
                                    </div>
                                    <div class="product-info-left" _msthidden="4"> 
                                        <h5 class="product-name product_title" _msthidden="1">
                                            <a href="/product/106-エルメス(hermes)-ナイルの庭-液体-100ミリリットル" _msttexthash="72331740" _msthidden="1" _msthash="532">エルメス(Hermes) ナイルの庭 液体 100ミリリットル</a>
                                        </h5>
                                        <div class="stars-rating" _msthidden="1">
                                            <div class="star-rating">
                                                <span class="star-7"></span>
                                            </div>
                                            <div class="count-star" _msttexthash="28028" _msthidden="1" _msthash="533">
                                                (275)
                                            </div>
                                        </div>
                                        <ul class="product-attributes"> 
                                            <li></li> 
                                        </ul>
                                        <ul class="attributes-display" _msthidden="2">
                                            <li class="swatch-color" _msttexthash="54171" _msthidden="1" _msthash="534">
                                                Size:
                                            </li>
                                             <li class="swatch-color" size-id="1" data-prices="29982" data-discount="0" _msthidden="1"> <a href="#" _msttexthash="44681" _msthidden="1" _msthash="535">100 ml</a> </li> 
                                        </ul> 
                                    </div>
                                    <div class="product-info-right" _msthidden="2">
                                        <div class="price" _msttexthash="3565874" _msthidden="1" _msthash="536">
                                            29,982  ₫
                                        </div> 
                                        <div class="cart" _msthidden="1">
                                            <div class="single_variation_wrap" _msthidden="1">  
                                                <button class="single_add_to_cart_button button" _msthidden="1">
                                                    <span class="loop-form-add-to-cart action-add-to-card d-flex" atr="Add to card" product-id="106" meta-id="1" _msttexthash="12528997" _msthidden="1" _msthash="537">
                                                            カートに入れる
                                                        </span>  
                                                </button>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>  <li class="product-item style-list col-lg-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-ts-12" _msthidden="7">
                            <div class="product-inner" _msthidden="7">
                                <div class="product-top">
                                </div>
                                <div class="products-bottom-content" _msthidden="7">
                                    <div class="product-thumb" _msthidden="1">
                                        <div class="thumb-inner" _msthidden="1">
                                            <a href="/product/105-アクアディパルマ-ブルーメディテラネオ-キノットディリグーリア-150ml-edt-sp">
                                                <img src="/image-upload/1697040128gg0126421150.webp" alt="img" _msthidden="A" _mstalt="32942" _msthash="520">
                                            </a> 
                                        </div>
                                    </div>
                                    <div class="product-info-left" _msthidden="4"> 
                                        <h5 class="product-name product_title" _msthidden="1">
                                            <a href="/product/105-アクアディパルマ-ブルーメディテラネオ-キノットディリグーリア-150ml-edt-sp" _msttexthash="99247694" _msthidden="1" _msthash="521">アクアディパルマ ブルーメディテラネオ キノットディリグーリア 150ML EDT SP</a>
                                        </h5>
                                        <div class="stars-rating" _msthidden="1">
                                            <div class="star-rating">
                                                <span class="star-5"></span>
                                            </div>
                                            <div class="count-star" _msttexthash="28067" _msthidden="1" _msthash="522">
                                                (167)
                                            </div>
                                        </div>
                                        <ul class="product-attributes"> 
                                            <li></li> 
                                        </ul>
                                        <ul class="attributes-display" _msthidden="2">
                                            <li class="swatch-color" _msttexthash="54171" _msthidden="1" _msthash="523">
                                                Size:
                                            </li>
                                             <li class="swatch-color" size-id="1" data-prices="29935" data-discount="0" _msthidden="1"> <a href="#" _msttexthash="45201" _msthidden="1" _msthash="524">150 ml</a> </li> 
                                        </ul> 
                                    </div>
                                    <div class="product-info-right" _msthidden="2">
                                        <div class="price" _msttexthash="3565627" _msthidden="1" _msthash="525">
                                            29,935  ₫
                                        </div> 
                                        <div class="cart" _msthidden="1">
                                            <div class="single_variation_wrap" _msthidden="1">  
                                                <button class="single_add_to_cart_button button" _msthidden="1">
                                                    <span class="loop-form-add-to-cart action-add-to-card d-flex" atr="Add to card" product-id="105" meta-id="1" _msttexthash="12528997" _msthidden="1" _msthash="526">
                                                            カートに入れる
                                                        </span>  
                                                </button>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li> </ul>
                    <div class="pagination-navigation">

                    
    
    
    
    
    
    
    
    
    
    
    <div class="pagination clearfix style3">
        <div class="nav-link">
            
        <a class="page-numbers previous disabled" data-dt-idx="0" tabindex="0" atr="Previous"><i class="icon fa fa-angle-left" aria-hidden="true"></i></a> 
        <a class="page-numbers current" data-dt-idx="1" _msttexthash="4459" _msthash="516">1</a>  
            <a class="page-numbers " data-dt-idx="2" atr="2" _msttexthash="4550" _msthash="517">2</a>
            <a class="page-numbers disabled" data-dt-idx="3" atr="..." _msttexthash="14352" _msthash="518">...</a>
            <a class="page-numbers " data-dt-idx="4" atr="19" _msttexthash="10387" _msthash="519">19</a>
        <a class="page-numbers  next " data-dt-idx="5" atr="Next"><i class="icon fa fa-angle-right" aria-hidden="true"></i></a>  
        </div>
    </div></div> 
                </div>
            </div>
            <div class="sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="wrapper-sidebar shop-sidebar">
                    <div class="widget woof_Widget">
                        <div class="widget widget-categories">
                            <h3 class="widgettitle" _msttexthash="119132" _msthash="129">Danh Mục Sản Phẩm</h3>
                            <ul class="tagcloud category-list-tag">
                                 
                            <li class="tag-cloud-link status-tag active" status-id="new"><a _msttexthash="182585" _msthash="130">Sản Phẩm Mới</a> </li><li class="tag-cloud-link status-tag" status-id="hot"><a _msttexthash="423423" _msthash="131">Sản Phẩm Được Gợi Ý</a> </li><li class="tag-cloud-link category-tag" category-id="2"><a category-id="2" _msttexthash="42289" _msthash="132">GUCCI</a> </li><li class="tag-cloud-link category-tag" category-id="3"><a category-id="3" _msttexthash="33683" _msthash="133">DIOR</a> </li><li class="tag-cloud-link category-tag" category-id="4"><a category-id="4" _msttexthash="91130" _msthash="134">Iceberg</a> </li><li class="tag-cloud-link category-tag" category-id="5"><a category-id="5" _msttexthash="53053" _msthash="135">CHANEL</a> </li><li class="tag-cloud-link category-tag" category-id="6"><a category-id="6" _msttexthash="320567" _msthash="136">Narciso Rodriguez</a> </li><li class="tag-cloud-link category-tag" category-id="7"><a category-id="7" _msttexthash="175734" _msthash="137">Các Thương Hiệu Khác</a> </li></ul>
                        </div>
                        <div class="widget widget-tags"> 
                            <ul class="tagcloud">
                                <li class="tag-cloud-link">
                                    <a _msttexthash="136552" _msthash="138">Nam</a>
                                </li>
                                <li class="tag-cloud-link">
                                    <a _msttexthash="47346" _msthash="139">Nữ</a>
                                </li>
                                <li class="tag-cloud-link active">
                                    <a _msttexthash="138086" _msthash="140">Cả Nam Và Nữ</a>
                                </li> 
                            </ul>
                        </div>
                        <div class="widget widget_filter_price">
                            <h4 class="widgettitle" _msttexthash="58734" _msthash="141">Giá</h4>
                            <div class="price-slider-wrapper">
                                <div data-label-reasult="Range:" data-min="0" data-max="50000" data-unit=" ₫" class="slider-range-price  ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="0" data-value-max="50000">
                                <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"></span><div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 100%;"></span></div>
                                <input type="hidden" class="js-range-slider" value="0;50000">
                                <div class="price-slider-amount">
                                    <span class="from" _msttexthash="32994" _msthash="142">0  ₫</span>
                                    <span class="to" _msttexthash="69797" _msthash="143">5,000,000  ₫</span>
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
<script type="text/javascript" src="{{ asset('customer/assets/js/page/category.js') }}"></script>
@endsection()