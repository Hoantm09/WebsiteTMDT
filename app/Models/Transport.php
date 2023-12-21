<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Transport extends Model
{
    use HasFactory;
    public function getConfigGeneral(){
        $sql = "SELECT size_order,mass_order,require_order,note_order,address_warehouse FROM config";
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
        ]);
        
    }

    //Doi soat
    public function getDoiSoat($statusID){
        if ($statusID==10){
            $list = DB::table('transport')
            ->get();
        }
        else {
            $list = DB::table('transport')
            ->where('status', $statusID)
            ->get();
        }
        return $list;
    }
    public function getTicketDetail($id){
        $list = DB::table('transport')
        ->where('id', $id)
        ->first();
    return $list;
    }

    public function confirmDoiSoat($id){
        DB::table('transport')
        ->where('id', $id)
        ->update(['status' => 1]);
    }



}
