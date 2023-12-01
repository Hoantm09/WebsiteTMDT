<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ManageCustomer extends Model
{
    //Manage customer
    public function getCustomer(){
        $sql = "SELECT id,name,phone,company,address FROM customer_detail";
        return DB::select($sql);
    }
    public function addcustomer($data){
        DB::table('customer_detail')->insert([
            'customer_id' => $data['customer_id'],
            'name' => $data['name'],
            'phone' => $data['phone'],
            'company' => $data['company'],
            'address' => $data['address'],
            'status' => 1,
        ]);
        
    }
}