@extends('customer.layout')
@section('title', "")


@section('css')
<style>
    .order-table{
        border: 1px solid #ddd;
        padding: 10px;
        border-radius: 5px;
    }
    .table-success{
        background-color: #29bb94;
        color: #fff;
    }
</style>
@endsection()


@section('body')
<div class="main-content main-content-about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-trail breadcrumbs">
                    <ul class="trail-items breadcrumb">
                        <li class="trail-item trail-begin">
                            <a href="/">Trang chủ</a>
                        </li>
                        <li class="trail-item trail-end active">
                            Theo dõi đơn hàng
                        </li>
                    </ul>
                </div>
            </div>
        </div>  

            <div class="content-area content-about col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="site-main">
                    <div class="about-wrapper">
                        <h3 class="custom_blog_title">Theo dõi đơn hàng</h3>
                    </div>
                    <div class="order-table">
                        <div class="row">
                            <div class="col-sm-4 m-b-5">
                                <table class="table">
                                    <thead class="table-success">
                                      <tr>
                                        <th colspan="2">Người gửi</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>Shop</td>
                                        <td>Bk-eShop</td>
                                      </tr>
                                      <tr>
                                        <td>Điện thoại</td>
                                        <td>0888222666</td>
                                      </tr>
                                      <tr>
                                        <td>Địa chỉ</td>
                                        <td>167 Trương Định, Hai Bà Trưng, Hà Nội</td>
                                      </tr>
                                    </tbody>
                                  </table>
                            </div>
                            <div class="col-sm-4 m-b-5">
                              <table class="table">
                                <thead class="table-success">
                                  <tr>
                                    <th colspan="2">Người nhận</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Tên người nhận</td>
                                    <td>Cong Quyen</td>
                                  </tr>
                                  <tr>
                                    <td>Điện thoại</td>
                                    <td>0888336888</td>
                                  </tr>
                                  <tr>
                                    <td>Địa chỉ</td>
                                    <td>Phường 14, Quận 10, Hồ Chí Minh, Vietnam</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            <div class="col-sm-4 m-b-5">
                                <table class="table">
                                    <thead class="table-success">
                                      <tr>            
                                        <th colspan="2">Thông tin đơn  hàng</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>Mã vận đơn</td>
                                        <td>JHGN7</td>
                                      </tr>
                                      <tr>
                                        <td>Mã đơn khách hàng</td>
                                        <td>12</td>
                                      </tr>
                                      <tr>
                                        <td>Ngày dự kiến giao</td>
                                        <td>25-12-2023</td>
                                      </tr>
                                      <tr>
                                        <td>Lưu ý giao hàng</td>
                                        <td>Cho thử hàng</td>
                                      </tr>
                                      <tr>
                                        <td>Trạng thái hiện tại</td>
                                        <td>Chờ lấy hàng</td>
                                      </tr>
                                    </tbody>
                                  </table>
                            </div>
                            <div class="col-sm-4 m-b-5">
                                <table class="table">
                                    <thead class="table-success">
                                      <tr>
                                        <th colspan="2">Chi tiết đơn hàng</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>Sản phẩm</td>
                                        <td>Nước hoa x3</td>
                                      </tr>
                                      <tr>
                                        <td>Cân nặng</td>
                                        <td>600 gram</td>
                                      </tr>
                                      <tr>
                                        <td>Người trả</td>
                                        <td>Người gửi trả phí</td>
                                      </tr>
                                    </tbody>
                                  </table>
                            </div>
                            <div class="col-sm-8 m-b-5">
                                <table class="table">
                                    <thead class="table-success">
                                      <tr>
                                        <th colspan="3">Theo dõi đơn hàng</th>
                                      </tr>
                                    </thead>
                                    <tbody><tr>
                                        <th>Thời gian</th>
                                        <th>Trạng thái đơn</th>
                                        <th>Chi tiết</th>
                                      </tr>
                                    </tbody><tbody>
                                      <tr>
                                        <td>Thứ 5, 14/12/2023 11:27</td>
                                        <td>Chờ lấy hàng</td>
                                        <td>167 Giải Phóng, Phương Mai, Đống Đa, Hà Nội, Vietnam</td>
                                      </tr>
                                      <tr>
                                        <td>Thứ 6, 15/12/2023 11:27</td>
                                        <td>Đang giao hàng</td>
                                        <td>Đơn hàng đã đến bưu cục 20-HNI Long Bien Hub</td>
                                      </tr>
                                      <tr>
                                        <td>Thứ 7, 16/12/2023 11:27</td>
                                        <td>Đang giao hàng</td>
                                        <td>Đơn hàng đã đến kho phân loại BN B Mega SOC</td>
                                      </tr>
                                      <tr>
                                        <td>Thứ 7, 16/12/2023 11:27</td>
                                        <td>Đã giao hàng</td>
                                        <td>Đơn hàng đã được giao thành công</td>
                                      </tr>
    
                                    </tbody>
                                  </table>
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