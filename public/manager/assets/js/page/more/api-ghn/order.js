
const ViewGHN = {
    DataSend: [],
    Category: {},
    Order: {
        create(data) {
            //Api.Order.CreateOrder2();
            $(document).on('click', `#submit-order-btn`, function () {
                ApiGHN.Order.CreateOrder(data)
                    .done(res => {
                        let dta = [];
                        dta['OrderCode'] = res.data.order_code;
                        dta['orderID'] = data.client_order_code;
                        dta['COD'] = data.insurance_value;
                        dta['fee'] = res.data.total_fee;

                        console.log(dta);
                        ApiGHN.Order.updateTransport(dta)
                            .done(res => {
                                console.log(res);
                            })
                            .fail(err => {
                                console.log(err);
                            })
                            .always(() => {

                            });

                    })
            });


        },
        preview(data) {
            ApiGHN.Order.Preview(data)
                .done(res => {
                    data_confirm = res.data
                    console.log(data)
                    $(document).ready(function () {
                        // Đảm bảo tất cả các phần tử trong DOM đã được tải xong
                        $("#from_phone_cf").html(data.from_phone);
                        $("#to_name_cf").html(data.to_name);
                        $("#to_phone_cf").html(data.to_phone);
                        $("#to_address_cf").html(data.to_address);
                        $("#COD_cf").html(data.insurance_value);
                        $("#total_fee_cf").html(data_confirm.fee.total_fee);
                    });

                })
                .fail(err => {
                })
                .always(() => { });
        },
        delete() {

        },
        print() {
            $("#print_order").on("click", function () {
                ApiGHN.Order.genToken([$("#order_code").val()])
                    .done(res => {
                        window.location.href = "https://dev-online-gateway.ghn.vn/a5/public-api/printA5?token=" + res.data.token;
                    })
                    .fail(err => {

                    })
                    .always(() => {

                    });
            })
        },
    },
    PackageInfor: {

    },
    SenderInfor: {
        getInfor() {
            return new Promise((resolve) => {
                var data = [];
                $(document).on('click', `#save-order-btn`, function () {
                    data['payment_type_id'] = parseInt($("#payment_type_id").val());
                    data['note'] = $("#note").val();
                    data['required_note'] = $("#required_note").val();
                    data['client_order_code'] = $("#client_order_code").val();
                    data['from_phone'] = $("#from_phone").val();
                    data['to_name'] = $("#to_name").val();
                    data['to_phone'] = $("#to_phone").val();

                    //Xử lý địa chỉ tĩnh
                    data['to_address'] = "72 Thành Thái, Phường 14, Quận 10, Hồ Chí Minh, Vietnam";
                    data['to_ward_name'] = "Phường 14";
                    data['to_district_name'] = "Quận 10";
                    data['to_province_name'] = "HCM";

                    //Size
                    data['weight'] = parseInt($("#weight").val());
                    data['length'] = parseInt($("#length").val());
                    data['width'] = parseInt($("#width").val());
                    data['height'] = parseInt($("#height").val());

                    data['insurance_value'] = parseInt($("#insurance_value").val());
                    data['service_type_id'] = 2;

                    data['coupon'] = ($("#coupon").val() == null) ? null : $("#coupon").val();


                    //Sản phẩm
                    data['items'] = [
                        {
                            "name": "Nước hoa province",
                            "code": "3",
                            "quantity": 3,
                        }
                    ]

                    ViewGHN.DataSend = data
                    resolve(ViewGHN.DataSend);

                });


            });
        },
        onPreview(callback) {
            $(document).on('click', `#preview-order-btn`, function () {
                callback();
            });
        },
        onSubmit(callback) {
            $(document).on('click', `#submit-order-btn`, function () {
                callback();
            });
        },
    },
    ReceiverInfor: {

    },
    OrderLog: {
        getOrderlog(id) {
            $(document).ready(function () {
                ApiGHN.Order.GetOrderStatus(id)
                    .done(res => {
                        console.log(res.data.order_log);
                        var data_log = res.data.order_log.split('|');
                        console.log(data_log);
                        var tbody = document.getElementById('order-log-table');

                        console.log(data_log[0].split(',')[0]);


/*                         var newDataArray = ['Thứ 2, 20/12/2023 14:30', 'Đang vận chuyển', '123 Đường ABC, Quận XYZ, Thành phố ABC'];

                        // Duyệt qua mảng dữ liệu và thêm mỗi phần tử vào ô tương ứng
                        for (var i = 0; i < newDataArray.length; i++) {
                            var newCell = newRow.insertCell(i);
                            newCell.textContent = newDataArray[i];
                        } */

                        // Tạo một hàng mới
                        var newRow = tbody.insertRow();
                        // Duyệt qua mảng chứa các mảng con
                        data_log.forEach(function (log) {
                            // Tạo một hàng mới
                            var newRow = tbody.insertRow();

                            // Tách dữ liệu từ chuỗi log bằng dấu ','
                            var newarray = log.split(',');

                            // Thêm mỗi phần tử của mảng con vào ô tương ứng
                            for (var i = 0; i < newarray.length; i++) {
                                var newCell = newRow.insertCell(i);
                                newCell.textContent = newarray[i];
                            }
                        });

                    })
            });

        },
    },
    init() {
        // ViewGHN.SenderInfor.init();
    }
};

(() => {
    ViewGHN.init();

    ViewGHN.SenderInfor.getInfor().then((data) => {
        ViewGHN.Order.preview(data);
        ViewGHN.Order.create(data);
    });



    /*  
        ViewGHN.SenderInfor.onSubmit(() => {
            ApiGHN.Order.CreateOrder(ViewGHN.DataSend)
        });
    */

})();



