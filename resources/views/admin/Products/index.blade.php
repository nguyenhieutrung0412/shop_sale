@extends('admin.masterAdmin')
@section('content')
<!--begin::App Main-->
<main class="app-main">
<!--begin::App Content Header-->
<div class="app-content-header"> <!--begin::Container-->
    <div class="container-fluid"> <!--begin::Row-->
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-0"></h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Sản phẩm
                    </li>
                </ol>
            </div>
        </div> <!--end::Row-->
    </div> <!--end::Container-->
</div>

<!--begin::App Content-->
<div class="app-content"> <!--begin::Container-->
    <div class="container-fluid"> <!--begin::Row-->
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <h3 class="card-title">Sản phẩm</h3>
                        <a type="button" href="{{ route('admin.product.add') }}"  class="btn btn-primary float-end">Thêm mới</a>
                    </div> <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th style="width: 100px">Ảnh</th>
                                    <th style="">Phân loại</th>
                                    <th style="">Tên</th>
                                    <th>Mô tả nổi bật</th>
                                    <th>Mô tả</th>
                                    <th>Giá bán</th>
                                    <th style="width: 90px">Tình trạng</th>
                                    <th>Ngày tạo</th>
                                    <th style="width: 116px">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product_data as $value)
                                <tr class="align-middle">
                                    <td>{{$value->stt}}</td>
                                    {{-- Xử lý hiển thị hình ảnh(1 ảnh đầu) --}}
                                   
                                    
                                    {{--  --}}
                                    <td >
                                     @if (count($value->images) !== 0 )
                                        <img class="img-fluid img-thumbnail" src="{{ asset('upload/images/'.$value->images[0]) }}" alt="Ảnh sản phẩm"> 
                                    @endif
                                    </td>
                                    <td>{{$value->category->name}}</td>
                                    <td>{{$value->name_product}}</td>
                                    <td>{{$value->description_most}}</td>
                                    <td>{{$value->description}}</td>
                                    <td>{{$value->price}}</td>
                                    @if ($value->active === 1)
                                    <td style="color: #11d922;text-align: center">
                                        
                                        <label class="switch">
                                        <input type="checkbox" class="active_checkbox" data-route="{{ route('admin.update.active') }}" data-flag="true" data-id="{{$value->id_new}}" checked>
                                        <span class="slider"></span>
                                      </label></td>
                                    
                                    @else
                                    <td style="color: #e81526;text-align: center">
                                        
                                        <label class="switch">
                                            <input type="checkbox"  class="active_checkbox" data-route="{{ route('admin.update.active') }}" data-flag="false" data-id="{{$value->id_new}}">
                                            <span class="slider"></span>
                                          </label>
                                    </td>
                                    
                                    @endif
                                    <td>{{$value->created_at}}</td>
                                    
                                    <td class="project-actions text-right">
                                        <a class="btn btn-info btn-sm" href="{{ route('admin.product.edit', ['id'=>$value->id_new]) }}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>
                                        <a class="btn btn-danger btn-sm btn_event"  data-id="{{$value->id_new}}" data-route="{{ route('admin.product.delete') }}">
                                            <i class="fas fa-trash">
                                            </i>
                                            Delete
                                        </a>
                                    </td>
                                  
                                </tr>
                                @endforeach
                                
                               
                            </tbody>
                        </table>
                    </div> <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-end">
                            <li class="page-item"> <a class="page-link" href="#">«</a> </li>
                            <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                            <li class="page-item"> <a class="page-link" href="#">2</a> </li>
                            <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                            <li class="page-item"> <a class="page-link" href="#">»</a> </li>
                        </ul>
                    </div>
                </div> <!-- /.card -->
              
            </div> <!-- /.col -->
         
        </div> <!--end::Row-->
    </div> <!--end::Container-->
</div>
<!--end::App Content-->
</main>
<!--end::App Main-->

@endsection