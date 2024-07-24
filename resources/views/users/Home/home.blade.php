@extends('users.master')
@section('content')
<div class="container container-gobal">
    <div class="title">
        <h2>Sản phẩm đang bán</h2>
    </div>
    <div class="list-menu-items">
        @foreach ($data_product as $key => $value )
            
            @if ($value->active === 0)
            <div class="item {{$value->fix}}">
                <div class="item-image">
                    <img src="{{ asset('upload/images/'.$value->images[0]) }}" alt="Hình ảnh sản phẩm">
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
                <div class="attention">
                    <span>hết hàng</span>
                </div>
            </div>
            @else
            <div class="item {{$value->fix}}">
                <div class="item-image">
                    <img src="{{ asset('upload/images/'.$value->images[0]) }}" alt="Hình ảnh sản phẩm">
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
            @endif
       
        @endforeach
        
      
  
    </div>
</div>
@endsection
