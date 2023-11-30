<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ManageStaffCustomer extends Model
{
    //Manage staff
    public function getStaff(){
        $sql = "SELECT id,name,email,type,status FROM admin";
        return DB::select($sql);
    }
    public function addstaff($data){
        $permissions = implode(',', $data['permissions']); // Chuyển mảng thành chuỗi, cách nhau bởi dấu phẩy
        DB::table('admin')->insert([
            'secret_key' => 8888,
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'type' => $data['role'],
            'permissions' => $permissions,
            'status' => 1,
        ]);
        
    }
}
