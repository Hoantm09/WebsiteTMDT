@extends('customer.layout')
@section('title', "Trang Chủ")


@section('css')

@endsection()


@section('body')

    <div class="main-content main-content-login">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-trail breadcrumbs">
                        <ul class="trail-items breadcrumb">
                            <li class="trail-item trail-begin">
                                <a href="/">Trang Chủ</a>
                            </li>
                            <li class="trail-item trail-end active">
                                Xác Thực
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="content-area col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="site-main">
                        <h3 class="custom_blog_title">
                            Xác Thực
                        </h3>
                        <div class="customer_login">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-md-offset-3">
                                    <p>Tiện lợi hơn! Tiết kiệm nhiều hơn! Làm thế nào để sử dụng nó</p>
                                    <p>Chúng tôi khuyên bạn nên đăng ký làm thành viên!</p>
                                    <p>Đăng ký thành viên 3 lợi thế</p>
                                    <p>* Bạn có thể đặt hàng sản phẩm mà không cần đăng ký làm thành viên.</p>
                                    <a  href="{{ route("customer.view.checkout") }}" class="btn-auth-action button-submit form-submit m-r-20">Mua với tư cách không phải là thành viên</a>  
                                    <a href="{{ route("customer.view.register") }}" type="button" class="btn-auth-action register-button" atr="Login">Đăng ký làm thành viên</a>   
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