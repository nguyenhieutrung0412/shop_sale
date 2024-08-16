@extends('users.master')
@section('content')
<div class="container container-gobal">
    <div class="product-info">
        {{-- left --}}
        <div class="product-info_img">
            <div class="product-info_imgbig">
                @if (count($product->images) !== 0 )
                <img src="{{ asset('upload/images/'.$product->images[0]) }}" alt="Hình ảnh sản phẩm">
                @else
                <img src="" alt="Hình ảnh sản phẩm">
                @endif
            </div>
            <div class="product-info_imglist">
                @foreach ($product->images as $key => $img)
               
                <div class="imglist-item ">
                    <img src="{{ asset('upload/images/'.$img) }}" alt="Hình ảnh sản phẩm">
                </div>
                

                @endforeach
            </div>
        </div>
        {{-- right --}}
        
        <div class="product-info_iteminfo">
            <div class="item-name">
                @if($product->active === 0)
                    <h4>{{$product->name_product}} <span style="color: red">(Đang đợi nhập hàng...)</span></h4>
                @else
                <h2>{{$product->name_product}} </h2>
                @endif
                
            </div>
            <div class="item-description_most">
                <p>{{$product->description_most}}</p>
            </div>
            <div class="item-price">
                <h4>Giá: {{$product->price}}</h4>
            </div>
            <div class="item-contact">
                
                <button class="button">
                    <svg width="32px" height="32px" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">

                        <rect x="0" fill="none" width="20" height="20"/>
                        
                        <g>
                        
                        <path fill="#0765ff" d="M2.89 2h14.23c.49 0 .88.39.88.88v14.24c0 .48-.39.88-.88.88h-4.08v-6.2h2.08l.31-2.41h-2.39V7.85c0-.7.2-1.18 1.2-1.18h1.28V4.51c-.22-.03-.98-.09-1.86-.09-1.85 0-3.11 1.12-3.11 3.19v1.78H8.46v2.41h2.09V18H2.89c-.49 0-.89-.4-.89-.88V2.88c0-.49.4-.88.89-.88z"/>
                        
                        </g>
                        </svg>
                <p class="text">Liên hệ</p>
                </button>
            </div>
        </div>
    </div>
    {{-- description --}}
    <div class="product-description">
         <div class="title">
            <h4>MÔ TẢ SẢN PHẨM</h4>
         </div>
         <div class="description_item">
            <p>
                {{$product->description}}
            </p>
            
         </div>
    </div>
</div>
@endsection