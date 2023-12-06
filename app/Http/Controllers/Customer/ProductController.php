<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

use App\Repositories\Manager\ProductRepository;
use App\Models\Product; 
use Carbon\Carbon;
use Session;
use Hash;
use DB;

class ProductController extends Controller
{
    protected $product;

    public function __construct(Product $product){
        $this->product             = new ProductRepository($product); 
    }
    public function get_all(Request $request){
        $count = count($this->product->get_all_condition($request));
        $data = [ 
            "data"      => $this->product->get_condition($request, $count),
            "count"     => $count,
        ];
        return $this->product->send_response(200, $data, null);
    }
    // Lấy ra 1 sản phẩm
    public function get_one($id){
        $this->product->updateView($id);
        $data = $this->product->get_one($id);
        return $this->product->send_response(200, $data, null);
    }
    // Lấy ra sản phẩm trending carousel
    public function get_trending(){
        $data = $this->product->get_trending(8);
        return $this->product->send_response(200, $data, null);
    }
    // lấy ra sản phẩm mới
    public function get_new_arrivals(){
        $data = $this->product->get_new_arrivals(8);
        return $this->product->send_response(200, $data, null);
    }
    // lấy ra sản phẩm mới
    public function get_top_view(){
        $data = $this->product->get_top_view(8);
        return $this->product->send_response(200, $data, null);
    }
    // lấy ra sản phẩm liên quan
    public function get_related($id){
        $product = $this->product->get_one($id);
        $data = $this->product->get_related($product[0]->category_id, $id);
        return $this->product->send_response(200, $data, null);
    }
    
    public function get_search(Request $request){
        $text       = $request->data_text;
        $category   = $request->data_category;
        $slug_data = $this->product->to_slug($text);
        $data = $this->product->find_real_time($slug_data, $category);
        return $this->product->send_response(200, $data, null);
    }

    //Xử lý lọc nâng cao

    //Lấy ra list các thuộc tính
    public function get_all_property(Request $request){
        $data = $this->product->getAllProperty();

        $property1 = [];
        $property2 = [];
        $property3 = [];
        $property4 = [];
        $property5 = [];
        
        // Tách mỗi bản ghi thành 5 phần tử
        $splitData = [];
        foreach ($data as $item) {
            // Make sure $item is an object
            if (is_object($item) && property_exists($item, 'property')) {
                $properties = explode("||", $item->property);
                $splitData[] = $properties;

                // Thêm phần tử thứ nhất vào mảng tương ứng
                $property1[] = isset($properties[0]) ? $properties[0] : null;
                $property2[] = isset($properties[1]) ? $properties[1] : null;
                $property3[] = isset($properties[2]) ? $properties[2] : null;
                $property4[] = isset($properties[3]) ? $properties[3] : null;
                $property5[] = isset($properties[4]) ? $properties[4] : null;
            }
        }
        $list_property = [$property1,$property2,$property3,$property4,$property5];
    
        return $this->product->send_response(200, $list_property, null);
    }
    
    //Lọc
    public function advance_filter(Request $request){
        $data = $this->product->getAllProperty();
        return $this->product->send_response(200, $data, null);
    } 

}
