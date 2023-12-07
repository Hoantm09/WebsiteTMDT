<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ManageCustomer extends Model
{
    //Manage customer
    public function getCustomer(){
        $sql = "SELECT customer_id,name,phone,company,address FROM customer_detail";
        return DB::select($sql);
    }
    // Delete Customer
    public function deleteCustomer($id)
    {
        DB::table('customer_detail')->where('customer_id', $id)->delete();
        DB::table('customer')->where('id', $id)->delete();
    }
    // Lấy thông tin customer
    public function getCustomerDetail($id){
        $result = DB::table('customer_detail')
        ->select('id', 'name', 'phone', 'company', 'address')
        ->where('customer_id', $id)
        ->first();
        return $result;
    }
}