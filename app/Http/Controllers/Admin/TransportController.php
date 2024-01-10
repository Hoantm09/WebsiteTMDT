<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transport;

class TransportController extends Controller
{   
    protected $transport;
    public function __construct(){
        $this->transport = new Transport();
    }
    public function transportIndex(){
        $name = "Quyen";
        return view('admin.manager.transport.index',[
            'name' => $name
        ]);
    }

    public function transportConfig(){
        //Xử lý tách size theo ||
        $generalConfig = $this->transport->getConfigGeneral();
        $size_order = explode("||", $generalConfig[0]->size_order);
        $address_warehouse = explode("||", $generalConfig[0]->address_warehouse);

        return view('admin.manager.transport.config',[
            'size_order' => $size_order,
            'address_warehouse' => $address_warehouse,
            'generalConfig' => $generalConfig[0],
        ]);
    }

    public function updateGeneralConfig(Request $request){
        dd($request->input());
    }
    public function updateWarehouseConfig(Request $request){
        dd($request->input());
    }

    //Đối soát
    public function doiSoat(){
        return view("admin.manager.transport.doi-soat");
    }

    /* 
    Chờ xử lý: status=2, status_order=2 (Đang giao hàng)
    Chưa đối soát: status=0, status_order=1 (Đã giao hàng) || status_order=0 (Hoàn hàng)
    Đã đối soát: status=1, status_order=1 (Đã giao hàng) || status_order=0 (Hoàn hàng)
    */
    public function getDoiSoat($statusID){
        $list = $this->transport->getDoiSoat($statusID);
        return response()->json($list);
    }
    public function getTicketDetail($id){
        $list = $this->transport->getTicketDetail($id);
        return response()->json($list);
    }
    public function confirmDoiSoat($id){
        $data = $this->transport->confirmDoiSoat(($id));
        return response()->json($data);
    }
}
