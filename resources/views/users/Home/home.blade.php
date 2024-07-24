@extends('users.master')
@section('content')
<div class="container container-gobal">
    <div class="title">
        <h2>Sản phẩm đang bán</h2>
    </div>
    <div class="list-menu-items">
        @foreach ($data_product as $key => $value )

            {{-- @dd($value);@die; --}}
       
        <div class="item">
            <div class="item-image">
                <img src="{{ asset('upload/images/'.$value->images[$key]) }}" alt="Hình ảnh sản phẩm">
            </div>
            <div class="item-name">
                <h4>{{$value->name_product}}</h4>
            </div>
            <div class="item-description">
                <p>{{$value->description}}</p>
            </div>
            <div class="item-price">
                <h4>{{$value->price}}</h4>
            </div>
            <div class="item-btn">
                <button data-label="more" class="rainbow-hover">
                    <a href="{{ route('detail', ['id'=>$value->id_new]) }}"><span class="sp">Xem thêm</span></a>
                </button>
            </div>
        </div>
        @endforeach
        <div class="item">
            <div class="item-image">
                <img src="{{ asset('images/forever_fields_of_greens__pd_category_256_X_256_1611596372969.png') }}" alt="Hình ảnh sản phẩm">
            </div>
            <div class="item-name">
                <h4>Tên sản phẩm đang bán</h4>
            </div>
            <div class="item-description">
                <p>Sản phẩm làm đẹp cho da và hỗ trợ sức khỏe</p>
            </div>
            <div class="item-price">
                <h4>500.000 VND</h4>
            </div>
            <div class="item-btn">
                <button data-label="more" class="rainbow-hover">
                    <span class="sp">Xem thêm</span>
                </button>
            </div>
        </div>
        <div class="item fix">
            <div class="item-image">
                <img src="{{ asset('images/forever_fields_of_greens__pd_category_256_X_256_1611596372969.png') }}" alt="Hình ảnh sản phẩm">
            </div>
            <div class="item-name">
                <h4>Tên sản phẩm đang bán</h4>
            </div>
            <div class="item-description">
                <p>Sản phẩm làm đẹp cho da và hỗ trợ sức khỏe</p>
            </div>
            <div class="item-price">
                <h4>500.000 VND</h4>
            </div>
            <div class="item-btn">
                <button data-label="more" class="rainbow-hover">
                    <span class="sp">Xem thêm</span>
                </button>
            </div>
        </div>
      
  
    </div>
</div>
@endsection
