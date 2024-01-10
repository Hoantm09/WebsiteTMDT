<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Webhook;
use DateTimeZone;
use DateTime;

class WebhookController extends Controller
{
    private $webhook;
    public function __construct(){
        $this->webhook = new Webhook();
    }

    public function update(Request $request)
    {
        // Thực hiện xử lý dữ liệu đơn hàng từ GHN
        $data = $request->json()->all();
        /*
        Type: create => thông báo đơn hàng được tạo trên GHN == Chờ lấy hàng (Trên hệ thống)
        Type: Switch_status  => cập nhật các trạng thái đơn hàng
         */
        $type = $data['Type'];

        //Lấy ra thông tin đơn hàng
        $OrderCode = $data['OrderCode'];
        $Status = $data['Status'];
        $warehouse = $data['Warehouse'];
        $time = $data['Time'];

        //Xử lý time
        $currentTime = new DateTime('now', new DateTimeZone('UTC'));
        $currentTime->setTimezone(new DateTimeZone('Asia/Bangkok'));
        /* $formattedTime = $currentTime->format('Y-m-d\TH:i:s.u\Z'); //2024-01-03T21:50:06.093501Z */
        $time_update = $currentTime->format('Y-m-d H:i:s'); //2023-12-11 17:40:00

        $data_return = [];
        // Thêm các giá trị vào mảng $data_return
        $data_return['Type'] = $type;
        $data_return['OrderCode'] = $OrderCode;
        $data_return['Status'] = $Status;
        $data_return['Warehouse'] = $warehouse;
        $data_return['Time'] = $time_update;

        
        // Xử lý logic của bạn dựa trên Type và thông tin đơn hàng

        $updateSuccess = true;
        $status_old = $this->webhook->getOrderLog($data_return['OrderCode'])->order_log;
        $order_id = $this->webhook->getOrderLog($data_return['OrderCode'])->orderID; //oder cần cập nhật status trong order_time

        if ($type == 'create') {
            // Thực hiện xử lý đơn hàng được tạo trên GHN
            // Trên hệ thống đã set Chờ lấy hàng => Không cần update trong order_time => Trả về response 200
            $status_old = $status_old . 'Chờ lấy hàng,';
        } elseif ($type == 'Switch_status') {
            
            //Check đơn hàng có tồn tại trên hệ thống không

            //Cập nhật trạng thái
            if ($Status == 'picking'){
                $status_old = $status_old . '|Nhân viên đang lấy hàng,';
            }elseif ($Status == 'picked'){
                $status_old = $status_old . '|Đã lấy hàng,';
                
            }elseif ($Status == 'delivering'){
                $status_old = $status_old . '|Đang giao hàng,';

                //Chuyển trạng thái trong order_time sang Đang giao hàng
                $this->webhook->updateOrderTime($order_id,4);
            }elseif ($Status == 'delivered'){
                $status_old = $status_old . '|Đã giao hàng,';
            }

        } elseif ($type == ' Update_weight') {
            // Thực hiện xử lý cập nhật thông tin đơn hàng
            // ...
        } elseif ($type == ' Update_cod') {
            // Thực hiện xử lý xóa đơn hàng
            // ...
        } elseif($type == 'Update_cod'){

        }  else{
            $updateSuccess = false;
        }

        $data_return['Status_new'] = $status_old.$data_return['Time'].','.$data_return['Warehouse'];
        $this->webhook->updateOrder($data_return);


        // Thực hiện xử lý response tùy thuộc vào thành công hay thất bại
        if ($updateSuccess) {
            return $this->response(200, 'Cập nhật thành công',$data_return);
        } else {
            // Trả về response lỗi và thực hiện gửi lại cập nhật
            return $this->response(500, 'Cập nhật không thành công',$data);
        }
    }

    private function response($statusCode, $message, $data)
    {
        $response = [
            'status' => $statusCode,
            'message' => $message,
            'data' => $data
        ];

        if ($statusCode !== 200) {
            /* $this->retryUpdates(10, 5); */
        }

        return response()->json($response, $statusCode);
    }

    public function updateOrder($data){

    }

    //API trả về các trạng thái 
    public function getOrderStatusAPI($id){
        $data = $this->webhook->getOrderStatusAPI($id);
        return $this->response(200, 'Get Logs Successfully',$data);
    }

    //insert đơn hàng vào bảng transport
    public function insertOrder(Request $request){
        $data = $request->json()->all();

/*         $orderCode = $data['OrderCode'];
        $orderID = $data['orderID'];
        $COD = $data['COD'];
        $fee = $data['fee'];
    
        $this->webhook->insertOrder($orderCode, $orderID, $COD, $fee); */
    
        return $this->response(200, 'Cập nhật thành công haha', $data);
    }

}
