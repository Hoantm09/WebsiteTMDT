<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\ManageStaffCustomer;

class StaffController extends Controller
{
    protected $staff;
    public function __construct(){
        $this->staff = new ManageStaffCustomer();
    }
    public function index(){
        $staffInfor = $this->staff->getStaff();
        return view('admin.manager.staff',[
            'staffInfor' => $staffInfor,
        ]);
    }
    public function addStaff(Request $request){
        // Lấy mảng các quyền được chọn
        $data = $request->input();
        $this->staff->addStaff($data);
        return redirect(route('admin.manager.staff'));
    }
}
