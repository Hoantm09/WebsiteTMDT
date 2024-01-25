<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

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

    public function getFeeByTime($start_time,$end_time)
    {   
        $data = [];
/*          if (!isset($start_time) || !isset($end_time)) {
            $start_time = '2024-01-01';
            $end_time = '2024-01-30';
        } */
/*         $start_time = '2024-01-01';
        $end_time = '2024-01-25'; */
/* 
        //Kì hiện tại
        $current_period_start = strtotime($start_time . ' 00:00:00');
        $current_period_end = strtotime($end_time . ' 23:59:59');
        //Kì trước
        $before_period_start = strtotime('-1 month', $current_period_start);
        $before_period_end = strtotime('-1 month', $current_period_end); */
        $current_period_start = $start_time;
        $current_period_end = $end_time;

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

        //Giá gốc
        $actual_cost = DB::select("SELECT SUM(warehouse_history_detail.prices * order_detail.quantity) AS actual_cost
                                FROM order_detail
                                INNER JOIN warehouse_history_detail ON order_detail.product_id = warehouse_history_detail.product_id
                                INNER JOIN order_time ON order_detail.order_id = order_time.id
                                WHERE order_time.order_status = 4 OR order_time.order_status = 5 OR order_time.order_status = 6
                                AND $ordertime_filter;");
        $fee_sale = $fee_ship[0]->fee + $actual_cost[0]->actual_cost;

        //Doanh thu bán hàng
        $data['money_sold'] = isset($money_sold[0]->money_sold) ? $money_sold[0]->money_sold : 0;
        $data['money_return'] = isset($money_return[0]->money_return) ? $money_return[0]->money_return : 0;
        $data['monel_real'] = isset($monel_real) ? $monel_real : 0;

        //Chi phí bán hàng
        $data['fee_ship'] = isset($fee_ship[0]->fee) ? $fee_ship[0]->fee : 0;
        $data['actual_cost'] = isset($actual_cost[0]->actual_cost) ? $actual_cost[0]->actual_cost : 0;
        $data['fee_sale'] = isset($fee_sale) ? $fee_sale : 0;

        //Lợi nhuận
        $data['profit'] = isset($monel_real, $fee_sale) ? $monel_real - $fee_sale : 0;


        return $data;
        //return response()->json($data);
    }

    public function getFee(Request $request){
        $start_time = $request->start_time;
        $end_time = $request->end_time;
        if (!isset($start_time) || !isset($end_time)) {
            $start_time = '2024-01-01';
            $end_time = '2024-01-30';
        }


        //Kì hiện tại
        $current_period_start = strtotime($start_time . ' 00:00:00');
        $current_period_end = strtotime($end_time . ' 23:59:59');

        //Kì trước
        $before_period_start = strtotime('-1 month', $current_period_start);
        $before_period_end = strtotime('-1 month', $current_period_end);
/*         $before_period_start = strtotime('2023-12-01 00:00:00');
        $before_period_end = strtotime('2024-01-01 23:59:59'); */

        $data = [];
        $data["perid_profit"] = $this->getFeeByTime($current_period_start,$current_period_end);
        $data["before_period_profit"] = $this->getFeeByTime($before_period_start,$before_period_end );
        return response()->json($data);
    }

    public function generalReport(){

    }
}
