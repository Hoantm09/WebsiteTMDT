
const ViewGHN = {
    DataSend: [],
    Category: {},
    Order: {
        create(data){
            //Api.Order.CreateOrder2();
            ApiGHN.Order.CreateOrder(data);
            
        },
        delete(){

        },
    },
    PackageInfor:{

    },
    SenderInfor:{
        getInfor(){
            return new Promise((resolve) =>{
                var data = []
                 
/*                 // Bắt sự kiện khi giá trị thay đổi trong dropdown
                $("#inputWarehouse").on("change", function() {
                    // Lấy giá trị của option được chọn
                    var selectedWarehouse = $(this).val();
                    data['selectedWarehouse'] = selectedWarehouse;
                });
                $("#inputShift").on("change", function() {
                    // Lấy giá trị của option được chọn
                    var selectedShift = $(this).val();
                    data['selectedShift'] = selectedShift;
                });
                $("#senderPhone").on("input", function() {
                    // Lấy giá trị của option được chọn
                    var senderPhone = $(this).val();
                    data['senderPhone'] = senderPhone;
                }); */

                $("#save-order-btn").on("click",function(){
                    /* data[''] = $("#").val(); */
                    data['payment_type_id'] = parseInt($("#payment_type_id").val());
                    data['note'] = $("#note").val();
                    data['required_note'] = $("#required_note").val();
                    data['client_order_code'] = $("#client_order_code").val();
                    data['from_phone'] = $("#from_phone").val();
                    data['to_name'] =  $("#to_name").val();
                    data['to_phone'] =  $("#to_phone").val();

                    //Xử lý địa chỉ tĩnh
                    data['to_address'] = "72 Thành Thái, Phường 14, Quận 10, Hồ Chí Minh, Vietnam";
                    data['to_ward_name'] = "Phường 14";
                    data['to_district_name'] = "Quận 10" ;
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
        create(){
            $("#submit-order-btn").on("click",function(){
                ApiGHN.Order.CreateOrder(ViewGHN.DataSend)
                ApiGHN.Order.CreateOrder2()
            })
            
        }
    },
    ReceiverInfor:{

    }
};

(() => {
    ViewGHN.SenderInfor.getInfor().then((data) => {
        ViewGHN.Order.create(data);
    });

})();



