<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Product\ProductInterface;
use App\Repositories\Handle\HandleInterface;
use Illuminate\Support\Str;


class ProductDetailController extends Controller
{
    protected $productRepo;
    protected $handleRepo;

    public function __construct(ProductInterface $productRepo, HandleInterface $handleRepo) {
        $this->productRepo = $productRepo;
        $this->handleRepo = $handleRepo;
    }

    public function detail_product($id)
    {
        //giải hóa id
        $id = $this->handleRepo->id_decode($id);
        //
        $product = $this->productRepo->find($id);
         //Chuyển đổi tiền tệ
         $product['price'] = $this->handleRepo->currency_format($product['price']);
        // xử lí hiển thị hình ảnh từ json về dạng mảng
        $product['images'] = json_decode($product['images']);
        $product['description'] = Str::of($product['description'])->toHtmlString();
        
        return view('users.ProductDetail.detail')->with('product',$product);
    }
}
