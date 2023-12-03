<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

use App\Models\ManageStaffCustomer;

use function Ramsey\Uuid\v1;

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
    public function profileStaff(){
        return view('admin.staff.profile');
    }
    public function getData(Admin $admin){
        $staffsavedInfor = $this->staff->getData();
        return view('admin.manager.staff',[
            'staffsavedInfor' => $staffsavedInfor,
        ]);
    }
    // public function editStaff(Admin $admin){
    //     // Lấy mảng các quyền được chọn
    //     $data = $request->input();
    //     $this->staff->addStaff($data);
    //     return redirect(route('admin.manager.staff'));
    // }
    public function deleteStaff(Request $request){
        $result = $this->staff->deleteStaff($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công nhân viên'
            ]);
        }
        return response()->json(['error' => true]);
    }
}
