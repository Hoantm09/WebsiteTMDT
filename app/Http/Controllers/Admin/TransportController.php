<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransportController extends Controller
{
    public function transportIndex(){
        $name = "Quyen";
        return view('admin.manager.transport.index',[
            'name' => $name
        ]);
    }

    public function transportConfig(){
        return view('admin.manager.transport.config',[
        ]);
    }
}
