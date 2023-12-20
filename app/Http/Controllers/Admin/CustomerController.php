<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CustomerDetail;
use Illuminate\Http\Request;
use App\Models\ManageCustomer;
use App\Repositories\Manager\ManagerRepository;

use function Ramsey\Uuid\v1;

class CustomerController extends Controller
{
    //
    protected $customer;
    protected $customer_detail;
    public function __construct(CustomerDetail $customer_detail){
        $this->customer = new ManageCustomer();
        $this->customer_detail = new ManagerRepository($customer_detail);

    }
    public function index(){
        $customerInfor = $this->customer->getCustomer();
        return view('admin.manager.customer',[
            'customerInfor' => $customerInfor,
        ]);
    }
    public function addCustomer(Request $request){
        // Lấy mảng các quyền được chọn
        $data = $request->input();
        $this->customer->addCustomer($data);
        return redirect(route('admin.manager.customer'));
    }
    // Delete Customer
    public function deleteCustomer($id){
        $this->customer->deleteCustomer($id);
        return response()->json('success');
    }
        // Lấy thông tin customer
    public function getInforDetail($id){
        $data =  $this->customer->getCustomerDetail($id);
        return response()->json($data);
    }
    // Lấy thông tin customer cho vào bảng
    public function get_cus_one($id){
        $data = $this->customer_detail->get_cus_one($id);
        return  $this->customer_detail->send_response(201, $data, null);;
    }
}
