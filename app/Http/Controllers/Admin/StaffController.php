<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

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

    //Edit staff
    //Lấy ra thông tin cũ
    public function getInforDetail($id){
        $data =  $this->staff->getStaffDetail($id);
        return response()->json($data);
    }
    //Update thông tin
    public function updateStaff(Request $request,$id){
        $data = $request->input();
        dd($data);
        /* $this->staff->updateStaff($data,$id); */
    }


}
