@extends('customer.layout')
@section('title', "")


@section('css')

@endsection()


@section('body')
<div class="main-content main-content-details single no-sidebar">
    <input type="hidden" class="product-id" value="{{ $id }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-trail breadcrumbs">
                    <ul class="trail-items breadcrumb">
                        <li class="trail-item trail-begin">
                            <a href="/">Trang chủ</a>
                        </li>
                        <li class="trail-item category-data-name">
                            <a href="#"> </a>
                        </li>
                        <li class="trail-item trail-end active item-data-name"> </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="content-area content-details full-width col-lg-9 col-md-8 col-sm-12 col-xs-12">
                <div class="site-main">
                    <div class="details-product">
                        <div class="details-thumd">
                            <div class="image-preview-container image-thick-box image_preview_container">
                                <img src="" alt="img">
                                <a href="#" class="btn-zoom open_qv"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </div>
                            <div class="product-preview image-small product_preview">
                                <div id="thumbnails" class="thumbnails_carousel owl-carousel image-list-carousel" data-nav="true"
                                     data-autoplay="false" data-dots="false" data-loop="false" data-margin="10"
                                     data-responsive='{"0":{"items":3},"480":{"items":3},"600":{"items":3},"1000":{"items":3}}'>
                                     
                                </div>
                            </div>
                        </div>
                        <div class="details-infor">
                            <h1 class="product-title"> </h1> 
                            <div class="availability">
                                Tình trạng：
                                <a href="#">Còn hàng</a>
                            </div>
                            <div class="price">
                                <del class="data-discount"></del>
                                <span class="data-prices"></span>
                            </div> 
                            <div class="product-details-description">
                                <ul>

                                </ul>
                            </div>
                            <div class="variations">
                                <div class="attribute attribute_color">
                                    <div class="color-text text-attribute">
                                        Giới tính:
                                    </div>
                                    <div class="list-sex list-item">

                                    </div>
                                </div>
                                <div class="attribute attribute_size">
                                    <div class="size-text text-attribute">
                                        Dung tích:
                                    </div>
                                    <div class="list-size list-item">

                                    </div>
                                </div>
                            </div>
                            <div class="group-button"> 
                                <div class="quantity-add-to-cart"> 
                                    <button class="single_add_to_cart_button button action-add-to-card" atr="Add to card">Thêm vào giỏ</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-details-product">
                        <ul class="tab-link">
                            <li class="active">
                                <a data-toggle="tab" aria-expanded="true" href="#product-detail">Thông tin sản phẩm </a>
                            </li> 
                        </ul>
                        <div class="tab-container">
    
                            <ul class="nav nav-tabs nav-justified" id="myTabJustified" role="tablist">
                                <li class="nav-item active">
                                    <a class="nav-link active" id="home-tab-justified" data-toggle="tab" href="#home-justified" role="tab" aria-controls="home-justified" aria-selected="true" aria-expanded="true">Mô tả</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab-justified" data-toggle="tab" href="#profile-justified" role="tab" aria-controls="profile-justified" aria-selected="false" aria-expanded="false">Chi tiết</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab-justified" data-toggle="tab" href="#contact-justified" role="tab" aria-controls="contact-justified" aria-selected="false">Cách sử dụng &amp; bảo quản</a>
                                </li>
                            </ul>
                            <div class="tab-content m-t-15" id="myTabContentJustified">
                                <div class="tab-pane fade active in" id="home-justified" role="tabpanel" aria-labelledby="home-tab-justified">
                                    
                                    
                                    <div class="content-t active" data-gallery="detail-products-gallery"><div class="des_pro"><div class="des_pro_item"><p>Được giới thiệu lần đầu tại liên hoan phim Cannes 2012, <strong>Versace Eros</strong> lấy nguồn cảm hứng từ vị thần tình yêu trong thần thoại &nbsp;thần thoại Hy Lạp(Eros là vị thần hy lạp của tình yêu). Versace Eros For Men là sự kết hợp và thể hiện của niềm đam mê vô tận và ham muốn mãnh liệt.</p><h2 style="text-align:justify">Versace Eros For Men EDT</h2><h3 style="text-align:justify">Mùi hương</h3><ul>
    <li><span style="font-size: 12pt; color: #333333; font-family: arial,helvetica,sans-serif;">Hương đầu: bạc hà, táo xanh, chanh.</span></li>
    <li><span style="font-size: 12pt; color: #333333; font-family: arial,helvetica,sans-serif;">Hương giữa: đậu Tonka, hoa phong lữ, Ambroxan.</span></li>
    <li><span style="font-size: 12pt; color: #333333; font-family: arial,helvetica,sans-serif;">Hương cuối: hương vani, cỏ Vetiver, địa y, tuyết tùng.</span></li>
    </ul><p style="display: block;"><strong>Versace Eros</strong> kết hợp hương thơm của bạc hà, táo xanh, đậu tonka và phong lữ tạo nên một hương thơm khó quên. Đây đích thị là hương thơm dành cho người đàn ông mạnh mẽ, đầy đam mê nhưng ẩn giấu dư vị nống ấm, quyến luyến dụ hoặc. Hương thơm tươi mới, mát mẻ ngay từ phát xịt đầu tiên. Sau đó, dậy nên nét quyến rũ bởi các note hương Phương Đông như đậu tonka, hổ phách amrboxan, hoa phong lữ và vani kết hợp với một sự mạnh mẽ đầy nam tính bởi các loại gỗ.</p><p style="text-align:center"><img decoding="async" loading="lazy" class="aligncenter wp-image-166097" src="https://orchard.vn/wp-content/uploads/2014/06/versace-eros-for-men-orchard.vn_.jpg" alt="Versace Eros For Men" width="606" height="606" srcset="https://orchard.vn/wp-content/uploads/2014/06/versace-eros-for-men-orchard.vn_.jpg 960w, https://orchard.vn/wp-content/uploads/2014/06/versace-eros-for-men-orchard.vn_-300x300.jpg 300w, https://orchard.vn/wp-content/uploads/2014/06/versace-eros-for-men-orchard.vn_-150x150.jpg 150w, https://orchard.vn/wp-content/uploads/2014/06/versace-eros-for-men-orchard.vn_-768x768.jpg 768w, https://orchard.vn/wp-content/uploads/2014/06/versace-eros-for-men-orchard.vn_-414x414.jpg 414w, https://orchard.vn/wp-content/uploads/2014/06/versace-eros-for-men-orchard.vn_-165x165.jpg 165w, https://orchard.vn/wp-content/uploads/2014/06/versace-eros-for-men-orchard.vn_-600x600.jpg 600w, https://orchard.vn/wp-content/uploads/2014/06/versace-eros-for-men-orchard.vn_-100x100.jpg 100w" sizes="(max-width: 606px) 100vw, 606px"></p><p style="text-align:center"></p><h3 style="text-align:justify">Phù hợp với</h3><p style="display: block;">Versace Eros là sự lựa chọn hoàn hảo dành cho các quý ông sang chảnh và quyến rũ. Giúp cánh mày râu luôn tự tin tỏa sáng trong mọi thời khắc.</p><p style="text-align:center"></p><p style="text-align:center"></p><h3 style="text-align:justify">Đánh giá</h3><ul style="display: block;">
    <li>Thời điểm khuyên dùng : Ngày, Đêm, Xuân, Thu, Đông</li>
    <li>Độ lưu hương : Lâu – 7 giờ đến 12 giờ.</li>
    <li>Độ toả hương : Xa – Toả hương trong vòng bán kính 2 mét.</li>
    </ul><p style="text-align:center"></p><p style="text-align:center"></p><p style="text-align:center"></p><p style="text-align:center"></p></div></div></div>
                                </div>
                                <div class="tab-pane fade" id="profile-justified" role="tabpanel" aria-labelledby="profile-tab-justified">
                                    
                                    <div class="thong-so-table">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>                                                     
                                                        <th scope="col" colspan="2">Chi tiết</th>                                                      
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Thương hiệu</th>
                                                        <td>Versace</td>
                                                    </tr>
                                                        <tr><th scope="row">Nồng độ</th>
                                                        <td>Eau De Toilette (EDT)</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Phong cách</th>
                                                        <td>Mạnh Mẽ, Nam Tính, Quyến Rũ</td>                                                     
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Dung tích</th>
                                                        <td>50ml, 100ml</td>                                                     
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Loại nước hoa</th>
                                                        <td>Nam</td>                                                     
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Nhóm hương</th>
                                                        <td>Aromatic Fougere ( Hương Thơm Thảo Mộc )</td>                                                     
                                                    </tr>
                                                </tbody>
                                            </table>
    
                                            <table class="table">
                                                <thead>
                                                    <tr>                                                     
                                                        <th scope="col" colspan="2">More</th>                                                      
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Bảo hành đổi trả</th>
                                                        <td>Có</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contact-justified" role="tabpanel" aria-labelledby="contact-tab-justified">
                                    ...
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="clear: left;"></div>
                    <div class="related products product-grid">
                        <h2 class="product-grid-title">Có thể bạn quan tâm</h2>
                        <div class="owl-products owl-slick equal-container nav-center product-related-list"  data-slick ='{"autoplay":false, "autoplaySpeed":1000, "arrows":true, "dots":false, "infinite":true, "speed":800, "rows":1}' data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":3}},{"breakpoint":"1200","settings":{"slidesToShow":2}},{"breakpoint":"992","settings":{"slidesToShow":2}},{"breakpoint":"480","settings":{"slidesToShow":1}}]'>

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
<script type="text/javascript" src="{{ asset('customer/assets/js/page/product.js') }}"></script>
@endsection()