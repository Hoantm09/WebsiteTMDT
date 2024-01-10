<div class="tab-pane fade show active" id="home-justified" role="tabpanel" aria-labelledby="home-tab-justified">
    <div class="row m-b-20">
        <div class="col-md-6 col-sm-6">
            Theo dõi doanh thu, chi phí và lợi nhuận của cửa hàng
        </div>
        <div class="col-md-2 col-sm-2"></div>
        <div class="col-md-2 col-sm-2">
            <div id="print-report" class="font-weight-bold">
                Xuất báo cáo <i class="far fa-arrow-alt-circle-down"></i>
            </div>
        </div>
        <div class="col-md-2 col-sm-2">
            <div id="question-ans" class="font-weight-bold" data-toggle="modal" data-target=".bd-example-modal-lg">
                Giải thích thuật ngữ <i class="far fa-question-circle"></i>
            </div>
        </div>
    </div>
    <div class="row m-b-50">
        <div class="col-md-12 col-sm-12">
            <div class="form-group">
                <label class="font-weight-bold">Kỳ hiện tại: 01/01/2024 - 01/02/2024</label>
                <div class="row">
                    <div class="col-sm-2">
                        <input type="text" class="form-control datepicker-input" name="start" placeholder="From">
                    </div>
                    to
                    <div class="col-sm-2">
                        <input type="text" class="form-control datepicker-input" name="end" placeholder="To">
                    </div>
                    <div class="col-md-6 col-sm-2">
                        <button class="btn btn-success m-l-5"><i class="fas fa-filter"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
        </div>
        <div class="col-md-12 col-sm-12">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr class="font-size-15">
                            <th class="font-weight-bold">CHỈ TIÊU BÁO CÁO</th>
                            <th class="font-weight-bold">KỲ TRƯỚC</th>
                            <th class="font-weight-bold">KỲ HIỆN TẠI</th>
                            <th class="font-weight-bold">THAY ĐỔI (%)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Dòng 1 -->
                        <tr class="table-info">
                            <td class="font-weight-bold">I. Doanh Thu Bán Hàng</td>
                            <td>2,257,116,889</td>
                            <td>2,190,222,713</td>
                            <td>-3%</td>
                        </tr>

                        <!-- Dòng 1.1 -->
                        <tr>
                            <td class="ml-4"> 1. Tiền Hàng Thực Bán (1a-1b)</td>
                            <td>3,530,386,089</td>
                            <td>3,463,764,779</td>
                            <td>-2%</td>
                        </tr>

                        <!-- Dòng 1.1.1 -->
                        <tr>
                            <td class="ml-5"> a. Tiền Hàng Bán Ra</td>
                            <td>3,536,409,339</td>
                            <td>3,465,419,779</td>
                            <td>-2%</td>
                        </tr>

                        <!-- Dòng 1.1.2 -->
                        <tr>
                            <td class="ml-5"> b. Tiền Hàng Trả Lại</td>
                            <td>6,023,250</td>
                            <td>1,655,000</td>
                            <td>-73%</td>
                        </tr>

                        <!-- ...Thêm các dòng khác tương tự... -->

                        <!-- Dòng 2 -->
                        <tr class="table-info">
                            <td class="font-weight-bold">II. Chi Phí Bán Hàng (1+2+3)</td>
                            <td>1,346,926,418</td>
                            <td>1,303,572,379</td>
                            <td>-3%</td>
                        </tr>
                        <tr>
                            <td> 1. Chi phí giá vốn hàng hóa</td>
                            <td>1,346,926,418</td>
                            <td>1,303,572,379</td>
                            <td>-3%</td>
                        </tr>
                        <tr>
                            <td> 2. Phí giao hàng trả đối tác</td>
                            <td>1,346,926,418</td>
                            <td>1,303,572,379</td>
                            <td>-3%</td>
                        </tr>
                        <tr>
                            <td> 3. Thanh toán bằng điểm</td>
                            <td>1,346,926,418</td>
                            <td>1,303,572,379</td>
                            <td>-3%</td>
                        </tr>

                        <!-- ...Thêm các dòng khác tương tự... -->

                        <!-- Dòng 3 -->
                        <tr class="table-info">
                            <td class="font-weight-bold">III. Thu Nhập Khác (1+2)</td>
                            <td>318,000</td>
                            <td>0</td>
                            <td>-100%</td>
                        </tr>
                        <tr>
                            <td> 1. Phiếu thu</td>
                            <td>1,346,926,418</td>
                            <td>1,303,572,379</td>
                            <td>-3%</td>
                        </tr>
                        <tr>
                            <td> 2. Phí khách trả hàng</td>
                            <td>1,346,926,418</td>
                            <td>1,303,572,379</td>
                            <td>-3%</td>
                        </tr>

                        <!-- ...Thêm các dòng khác tương tự... -->

                        <!-- Dòng 4 -->
                        <tr class="table-info">
                            <td class="font-weight-bold">IV. Chi Phí Khác</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0%</td>
                        </tr>
                        <tr>
                            <td> 1. Phiếu chi</td>
                            <td>1,346,926,418</td>
                            <td>1,303,572,379</td>
                            <td>-3%</td>
                        </tr>

                        <!-- ...Thêm các dòng khác tương tự... -->

                        <!-- Dòng 5 -->
                        <tr class="table-warning font-weight-bold">
                            <td>Lợi Nhuận (I + III - II - IV)</td>
                            <td>910,508,471</td>
                            <td>886,650,334</td>
                            <td>-3%</td>
                        </tr>
                    </tbody>
                </table>
            </div>



        </div>
    </div>


</div>

<!-- Modal Giải thích thuật ngữa-->
<div class="modal fade bd-example-modal-lg">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4">Giải thích thuật ngữ</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <i class="anticon anticon-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-sm">
                        <thead>
                            <tr class="table-info">
                                <th scope="col">#</th>
                                <th scope="col">Thuật ngữ</th>
                                <th scope="col">Giải thích</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Doanh thu bán hàng</td>
                                <td>

                                    Là số tiền cửa hàng thu được từ khách hàng trên mỗi đơn hàng.
                                    <br>
                                    - Với đơn hàng Chưa bao gồm thuế:
                                    <br>
                                    <strong>Doanh thu = Tiền hàng thực bán + Thuế VAT (nếu có) + Phí giao hàng thu của
                                        khách (nếu có) - Chiết khấu giảm giá cho khách hàng</strong>
                                    <br>
                                    - Với đơn hàng Đã bao gồm thuế:
                                    <br>
                                    <strong>Doanh thu = Tiền hàng thực bán + Phí giao hàng thu của khách (nếu có) -
                                        Chiết khấu giảm giá cho khách hàng</strong>

                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Tiền hàng thực bán</td>
                                <td>

                                    <div class="explain">
                                        Tiền hàng thực bán là giá trị hàng hoá thực sự bán được (sau khi đã trừ vì
                                        khách trả hàng). Cụ thể:
                                        <strong>- Tiền hàng thực bán = Tiền hàng bán ra - Tiền hàng trả lại</strong>
                                        <strong>- Tiền hàng bán ra</strong> = Số lượng sản phẩm * Đơn giá bán trên
                                        mỗi đơn hàng
                                        <strong>- Tiền hàng trả lại</strong> = Giá trị hàng bán bị trả lại trên đơn trả
                                        hàng (sau khi
                                        đã tách thuế VAT)
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Thuế VAT</td>
                                <td>Thuế thu của khách hàng trên mỗi đơn hàng. Thuế VAT sẽ giảm nếu khách hàng trả hàng.
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Phí giao hàng thu của khách</td>
                                <td>Là khoản phí thu của khách làm tăng giá trị đơn hàng. Khoản phí này thu để chi trả
                                    phí vận chuyển của
                                    đối tác giao hàng</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Chiết khấu</td>
                                <td>Là tổng chiết khấu, giảm giá trên mỗi đơn hàng, gồm cả chiết khấu cho mỗi sản phẩm
                                    và chiết khấu
                                    của tổng đơn (nếu có)</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Chi phí giá vốn hàng hoá</td>
                                <td>
                                    <div class="explain">
                                        Là giá vốn của hàng hoá tính = Số lượng hàng được xuất kho * Giá vốn
                                        Nếu khách trả hàng thì chi phí giá vốn sẽ giảm đi = Số lượng hàng bán bị trả lại
                                        * Giá nhập lại vào kho
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Thanh toán bằng điểm</td>
                                <td>Khách hàng thanh toán đơn hàng bằng điểm (Số tiền quy đổi từ điểm ra tiền)</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Phí giao hàng trả đối tác</td>
                                <td>Khoản tiền cửa hàng bỏ ra cho việc vận chuyển (phí trả shiper, phí trả giao hàng
                                    nhanh)</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Phiếu thu khác hạch toán kết quả kinh doanh</td>
                                <td>
                                    <div class="explain">
                                        Là các khoản thu được ghi nhận từ các phiếu thu tự tạo có hạch toán kết quả kinh
                                        doanh và khoản thu từ phiếu yêu cầu bảo hành (nếu có).
                                        Bạn có thể ấn để mở rộng và hiển thị chi tiết khoản thu theo từng Loại phiếu thu
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Phí khách trả hàng</td>
                                <td>
                                    <div class="explain">
                                        Là khoản chênh lệch tiền khi khách hàng đem trả hàng, khoản chênh này được coi
                                        như khoản phí khách chịu khi trả hàng
                                        <strong>Phí khách trả hàng = Giá trị hàng bán bị trả lại - Tiền hoàn trả lại cho
                                            khách</strong>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Phiếu chi khác hạch toán kết quả kinh doanh</td>
                                <td>
                                    <div class="explain">
                                        Là các khoản chi được ghi nhận từ các phiếu chi tự tạo có hạch toán kết quả kinh
                                        doanh.
                                        Bạn có thể ấn để mở rộng và hiển thị chi tiết khoản thu theo từng <strong>Loại
                                            phiếu chi</strong></div>
                                </td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Lợi nhuận</td>
                                <td>
                                    <div class="explain">
                                        Là khoản lãi thực tế của cửa hàng, dựa trên chênh lệch của các khoản thu và các
                                        khoản chi
                                        <strong>Lợi nhuận = Doanh thu bán hàng + Thu nhập khác - Chi phí bán hàng - Chi
                                            phí khác</strong>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('.datepicker-input').datepicker();
</script>
