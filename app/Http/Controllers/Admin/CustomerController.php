<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ManageCustomer;

use function Ramsey\Uuid\v1;

class CustomerController extends Controller
{
    //
    protected $customer;
    public function __construct(){
        $this->customer = new ManageCustomer();
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
}
