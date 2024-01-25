<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class StatisticController extends Controller
{
    //
    public function get_financial()
    {
        // Gọi Stored Procedure trả về kết quả (vd: SELECT)
        /* $results = DB::select('CALL GetTotalSalesByCurrency()'); */



        // Kết quả trả về sẽ là một mảng chứa các đối tượng stdClass
        // Bạn có thể truy cập dữ liệu như sau:


        //Tiền hàng thực bán = money_sold - money_return
        $money_sold = DB::select("SELECT SUM(order_time.total) AS money_sold
                        FROM order_time
                        INNER JOIN transport ON order_time.id = transport.orderID
                        WHERE order_time.order_status = 6 AND transport.status = 1;");

        $money_return = DB::select("SELECT SUM(order_time.total) AS money_return
                        FROM order_time
                        INNER JOIN transport ON order_time.id = transport.orderID
                        WHERE order_time.order_status = 7 AND transport.status = 1;");

        $money_sold_real = $money_sold[0]->money_sold - $money_return[0]->money_return;


        /* 
        Chi phí bán hàng = actual_goods_cost + shipping_cost + ship_fee + pay_with_point (=0 : Hệ thống không trả bằng điểm)
        Công thức tính:
        Giá vốn hàng hóa = giá gốc sản phẩm (Từ bảng warehouse) x Số lượng bán sản phẩm đó
        Nếu trả giá vồn hàng hóa giảm, giá vốn hàng hóa= giá nhập vào kho x số lượng trả sản phẩm đó
         */

        $actual_goods_cost = DB::select("SELECT SUM(warehouse_history_detail.prices * order_detail.quantity) AS actual_goods_cost
                        FROM order_detail
                        INNER JOIN warehouse_history_detail ON order_detail.product_id = warehouse_history_detail.product_id
                        INNER JOIN order_time ON order_detail.order_id = order_time.id
                        WHERE order_time.order_status = 6;");



        return response()->json($money_return);
    }

    public function getFee()
    {
        $data = [];
        $time_start = '2024-01-25';
        $time_end = '2024-01-24';

        //Kì hiện tại
        $current_period_start = strtotime('2024-01-25' . ' 00:00:00');
        $current_period_end = strtotime(date('Y-m-d 23:59:59'));
        
        $transport_filter = "transport.created_at >= FROM_UNIXTIME($current_period_start)
                        AND transport.created_at <= FROM_UNIXTIME($current_period_end)";
        $ordertime_filter = "order_time.created_at >= FROM_UNIXTIME($current_period_start)
                        AND order_time.created_at <= FROM_UNIXTIME($current_period_end)";


        //Tiền hàng thực bán = money_sold - money_return (bán ra: xuất kho)
        $money_sold = DB::select("SELECT SUM(order_time.total) AS money_sold
                FROM order_time
                WHERE order_time.order_status = 4 OR order_time.order_status = 5 OR order_time.order_status = 6
                AND $ordertime_filter;");

        $money_return = DB::select("SELECT SUM(order_time.total) AS money_return
                FROM order_time
                WHERE order_time.order_status = 8 
                AND $ordertime_filter;");

        $monel_real = $money_sold[0]->money_sold - $money_return[0]->money_return;

        //Chi phí bán hàng = actual-cost + fee_ship + điểm
        $fee_ship = DB::select("SELECT SUM(transport.fee) AS fee
                                FROM transport
                                WHERE $transport_filter;");


        $data['fee_ship'] = $fee_ship[0]->fee;
        $data['money_sold'] = $money_sold[0]->money_sold;
        $data['money_return'] = $money_return[0]->money_return;
        $data['monel_real'] = $monel_real;

        return response()->json($data);
    }
}
