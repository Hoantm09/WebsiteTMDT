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
                            <a href="/">ホーム</a>
                        </li>
                        <li class="trail-item trail-end active">
                            カテゴリー
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="content-area shop-grid-content no-banner col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="site-main"> 
                    <div class="shop-top-control"> 
                        <form class="filter-choice select-form">
                            <span class="title">Sort by</span>
                            <select title="sort-by" class="sort-by" data-placeholder="Price: Low to High" class="chosen-select">
                                <option value="0">-----------</option> 
                                <option value="1">新着順</option> 
                                <option value="2">Name: A to Z</option> 
                                <option value="3">Name: Z to A</option> 
                                <option value="4">価格が低い順</option> 
                                <option value="5">価格が高い順/option>
                            </select>
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
                         
                    </ul>
                    <ul class="row list-products auto-clear equal-container product-list" option-control="list">
                        
                    </ul>
                    <div class="pagination-navigation">

                    </div> 
                </div>
            </div>
            <div class="sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="wrapper-sidebar shop-sidebar">
                    <div class="widget woof_Widget">
                        <div class="widget widget-categories">
                            <h3 class="widgettitle">カテゴリー</h3>
                            <ul class="tagcloud category-list-tag">
                                 
                            </ul>
                        </div>
                        <div class="widget widget-tags"> 
                            <ul class="tagcloud">
                                <li class="tag-cloud-link">
                                    <a >紳士</a>
                                </li>
                                <li class="tag-cloud-link">
                                    <a >レディ</a>
                                </li>
                                <li class="tag-cloud-link active">
                                    <a >両方</a>
                                </li> 
                            </ul>
                        </div>
                        <div class="widget widget_filter_price">
                            <h4 class="widgettitle">
                                Price
                            </h4>
                            <div class="price-slider-wrapper">
                                <div data-label-reasult="Range:" data-min="0" data-max="50000" data-unit="円"
                                     class="slider-range-price " data-value-min="0" data-value-max="50000">
                                </div>
                                <input type="hidden" class="js-range-slider" value="0;50000">
                                <div class="price-slider-amount">
                                    <span class="from">0 円</span>
                                    <span class="to">50000 円</span>
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