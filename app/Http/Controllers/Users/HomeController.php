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
        //mã hóa id
        $product[0]['id_new'] = $this->handleRepo->id_encode($product[0]['id']);
        
        //chuyển chuỗi thành mảng 
        $product[0]['images'] = json_decode($product[0]['images']);
        
         //Chuyển đổi tiền tệ
         $product[0]['price'] = $this->handleRepo->currency_format($product[0]['price']);
        // Hiển thị mô tả ngắn gọn cho trang sản phẩm

        $product[0]['description'] = Str::of($product[0]['description'])->words(30);
       
        
        return view('users.Home.home')->with('data_product',$product);
    }
   
}
