<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Webhook;
use DateTimeZone;
use DateTime;
use Illuminate\Support\Facades\Log;

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
        $order_id = $this->webhook->getOrderLog($data_return['OrderCode'])->orderID; //order cần cập nhật status trong order_time

        if ($type == 'create') {
            // Thực hiện xử lý đơn hàng được tạo trên GHN
            // Trên hệ thống đã set Chờ lấy hàng => Không cần update trong order_time => Trả về response 200
            $status_old = $status_old . 'Chờ lấy hàng,';
        } elseif ($type == 'Switch_status') {
            
            //Check đơn hàng có tồn tại trên hệ thống không

            //Cập nhật trạng thái
            $updateSuccess = true;
            switch ($Status) {
                case 'picking':
                    $status_old = $status_old . '|Nhân viên đang lấy hàng,';
                    break;
                case 'picked':
                    $status_old = $status_old . '|Đã lấy hàng,';
                    break;
                case 'delivering':
                    $status_old = $status_old . '|Đang giao hàng,';
                    $this->webhook->updateOrderTime($order_id, 4);
                    break;
                case 'money_collect_delivering':
                    $status_old = $status_old . '|Đang thu tiền người nhận,';
                    $this->webhook->updateOrderTime($order_id, 5);
                    break;
                case 'delivered':
                    $status_old = $status_old . '|Giao hàng thành công,';
                    $this->webhook->updateOrderTime($order_id, 6);

                    //Update trạng thái đơn ( Giao thành công || Hoàn trả) vào Transport để đối soát
                    $this->webhook->updateStatusOrderTransport($order_id,1,0); //1: Giao thành công, 0: Chưa đối soát

                    break;
                case 'delivery_fail':
                    $status_old = $status_old . '|Giao hàng không thành công,';
                    break;
                case 'return':
                    $status_old = $status_old . '|Đang hoàn hàng,';
                    $this->webhook->updateOrderTime($order_id, 8);
                    break;
                case 'returning':
                    $status_old = $status_old . '|Đang luân chuyển hàng trả,';
                    break;
                case 'returned':
                    $status_old = $status_old . '|Trả hàng thành công,';

                    //Update trạng thái đơn ( Giao thành công || Hoàn trả) vào Transport để đối soát
                    $this->webhook->updateStatusOrderTransport($order_id, 0, 0); //1: Hoàn trả, 0: Chưa đối soát

                    break;
                default:
                    $updateSuccess = false;
            }

        } elseif ($type == 'Update_weight') {
            // Thực hiện xử lý cập nhật thông tin đơn hàng
            // ...
        } elseif ($type == 'Update_fee') {
            // Thực hiện xử lý xóa đơn hàng
            // ...
        } elseif($type == 'Update_cod'){

        }  else{
            $updateSuccess = false;
        }

        if ($updateSuccess) {
            $data_return['Status_new'] = $status_old.$data_return['Time'].','.$data_return['Warehouse'];
            $this->webhook->updateOrder($data_return);
            return $this->response(200, 'Cập nhật thành công',$data_return);
        } else {
            return $this->response(500, 'Cập nhật không thành công, trạng thái không hợp lệ',null);
        }



/*         // Thực hiện xử lý response tùy thuộc vào thành công hay thất bại
        if ($updateSuccess) {
            return $this->response(200, 'Cập nhật thành công',$data_return);
        } else {
            // Trả về response lỗi và thực hiện gửi lại cập nhật
            
        } */

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
    public function insertOrder(Request $request)
    {
        try {
            $orderCode = $request->OrderCode;
            $orderID = $request->orderID;
            $COD = $request->COD;
            $fee = $request->fee;
            $expected_delivery_time = $request->expected_delivery_time;

            if ($orderCode == null || $orderID == null || $COD == null || $fee == null || $expected_delivery_time == null) {
                return $this->response(500, 'Cập nhật không thành công, thiếu trường dữ liệu', null);
            }else{
                // Gọi hàm insertOrder từ webhook
                $this->webhook->insertOrder($orderCode, $orderID, $COD, $fee, $expected_delivery_time);
        
                return $this->response(200, 'Cập nhật thành công', null);
            }

        } catch (\Exception $e) {
            // Bắt ngoại lệ và xử lý
            Log::error('Error inserting order: ' . $e->getMessage());
            return $this->response(500, 'Đã xảy ra lỗi khi cập nhật đơn hàng', null);
        }
    }

}
