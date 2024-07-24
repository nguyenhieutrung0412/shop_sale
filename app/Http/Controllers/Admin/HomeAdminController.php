<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Product\ProductInterface;
use App\Repositories\Category\CategoryInterface;
use App\Repositories\Handle\HandleInterface;

class HomeAdminController extends Controller
{
    protected $productRepo ;
    protected $categoryRepo ;
    protected $handleRepo;

    public function __construct(ProductInterface $productRepo, CategoryInterface $categoryRepo, HandleInterface $handleRepo){
        $this->productRepo = $productRepo;
        $this->categoryRepo = $categoryRepo;
        $this->handleRepo = $handleRepo;
    }
    public function index(){
        $data = $this->productRepo->getProduct();
        $count = count($data);
        for($i = 0; $i < $count; $i++){
        //Chuyển đổi tiền tệ
        
        $data[$i]['price'] = $this->handleRepo->currency_format($data[$i]['price']);
        }
        //dd($data[0]['price']);die;
        //chuyển đổi tình trạng
        // if($data[0]['active'] == 1)
        // {
        //     $data[0]['active'] = 'Còn hàng';
        // } 
        // else{
        //     $data[0]['active'] = 'Hết hàng';
        // }
        return view('admin.Products.index')->with('product_data',$data);
    }
    public function index_add(){
        $data = $this->categoryRepo->getCategory();
        return view('admin.Products.addProduct')->with('data',$data);
    }
    public function add_post(Request $request){
        //Xử lý hình ảnh sủ dụng repository
        //$file_name = $this->handleRepo->imageHandle($request->files);
        //dd($file_name);die;
        // end Xử lý hình ảnh sủ dụng repository
        //xử lý hình ảnh
        $files = [];
        $files_upload = $request->files;
      
        if($request->hasfile('files'))
		{

			foreach($request->file('files') as $file)
			{  
               
                $original_filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                $fileName =$this->handleRepo->urlNormal($original_filename);
			    $name = time().$fileName.'-'.rand(1,100).'.'.$file->getClientOriginalExtension();
                
			    $file->move(public_path('upload/images'), $name);  
			    $files[] = $name;  
			}
		}
        //chuyển đổi array to json
        $json_files = json_encode($files);

        // dd($json_files);die;
       //End xử lý
        $attributes = [
            'cate_id'=>$request->category,
            'name_product'=>$request->name_product,
            'price'=>$request->price,
            'description'=>$request->description,
            'active'=>1,
            //xử lý ảnh 
            'images'=>$json_files,
        ];
       $created = $this->productRepo->create($attributes);
        
        if($created){
            return redirect()->route('admin.product')->with('success','Thêm thành công.');
        }
        else{
            return redirect()->route('admin.product.add')->with('error','Thêm thất bại.');
        }
        
        
    }
    
    public function index_edit($id){
        $data = $this->productRepo->find($id);
       // dd($data);die;
        return view('admin.Product.editProduct')->with('data',$data);
    }
    public function edit_post(Request $request){
        // $id = $request->id;
        // // $data = $this->categoryRepo->find($id);
        
        // //  dd($request->name);die;
        // $attributes = [
        //     'name'=>$request->name
        // ];
        // $update = $this->categoryRepo->update($id,$attributes);
        
         
        // if($update){
        //     return redirect()->route('admin.categories.edit',['id'=>$id])->with('success','Sửa đổi thành công.');
        // }
        // else{
        //     return redirect()->route('admin.categories.edit')->with('error','Sửa đổi thất bại.');
        // }
    }
    public function delete($id){
        // $id = $request->id;
        $data = $this->productRepo->delete($id);
        
        if($data){
            return redirect()->route('admin.product')->with('success','Xóa thành công.');
        }
        else{
            return redirect()->route('admin.product')->with('error','Xóa thất bại.');
        }


    }
}
