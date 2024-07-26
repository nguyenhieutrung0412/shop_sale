<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Product\ProductInterface;
use App\Repositories\Handle\HandleInterface;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    protected $productRepo;
    protected $handleRepo;

    public function __construct(ProductInterface $productRepo, HandleInterface $handleRepo) {
        $this->productRepo = $productRepo;
        $this->handleRepo = $handleRepo;
    }
    public function index()
    {
        $product = $this->productRepo->getProduct();
        $count = count($product);
        $flag = 1;
        for($i = 0; $i < $count; $i++){
          
            // xử lý thêm class fix vào item
            $product[$i]['fix'] = '';
            if($flag % 3 == 0 )
            {
                $product[$i]['fix'] = 'fix';
            }
            // 
            $product[$i]['id_new'] = $this->handleRepo->id_encode($product[$i]['id']);
        
            //chuyển chuỗi thành mảng 
            $product[$i]['images'] = json_decode($product[$i]['images']);
            
             //Chuyển đổi tiền tệ
             $product[$i]['price'] = $this->handleRepo->currency_format($product[$i]['price']);
            // Hiển thị mô tả ngắn gọn cho trang sản phẩm
    
            
            $flag++;
        }
        //mã hóa id
       
       
        // dd($product);
        return view('users.Home.home')->with('data_product',$product);
    }
   
}
