@extends('users.master')
@section('content')
<div class="container container-gobal">
    <div class="product-info">
        {{-- left --}}
        <div class="product-info_img">
            <div class="product-info_imgbig">
                <img src="{{ asset('images/forever_fields_of_greens__pd_category_256_X_256_1611596372969.png') }}" alt="Hình ảnh sản phẩm">
            </div>
            <div class="product-info_imglist">
                <div class="imglist-item active">
                    <img src="{{ asset('images/forever_fields_of_greens__pd_category_256_X_256_1611596372969.png') }}" alt="Hình ảnh sản phẩm">
                </div>
                <div class="imglist-item">
                    <img src="{{ asset('images/forever_garlic-thyme__pd_category_256_X_256_1611596255282.jpg') }}" alt="Hình ảnh sản phẩm">
                </div>
                <div class="imglist-item">
                    <img src="{{ asset('images/forever_immublend__pd_category_256_X_256_1611596411743.jpg') }}" alt="Hình ảnh sản phẩm">
                </div>
            </div>
        </div>
        {{-- right --}}
        <div class="product-info_iteminfo">
            <div class="item-name">
                <h2>Tên sản phẩm đang bán</h2>
            </div>
            <div class="item-price">
                <h4>500.000 VND</h4>
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
                <strong>Công dụng của sản phẩm</strong><br>
                Ngoài là một nguyên liệu sử dụng trong nấu ăn hay pha chế đồ uống, mật ong còn là một liều thuốc được sử dụng nhiều trong y học cổ truyền và những bài thuốc dân gian.
            </p>
            <p>
                <strong> Thành phần dinh dưỡng của mật ong nguyên chất</strong><br>
               
Trong mỗi 100g mật ong cung cấp cho bạn mức năng lượng tương đương hơn 300Kcal.
Mật ong được nhiều người lựa chọn để sử dụng bởi lượng dinh dưỡng chứa bên trong mật ong, đặc biệt là các loại vitamin và khoáng chất. Thành phần chính của mật ong sẽ bao gồm:

80% là đường tự nhiên (đường glucose và fructose)

18% là nước

2% còn lại là các khoáng chất, phấn hoa, vitamin và protein

Các vitamin có trong mật ong gồm: Vitamin C, vitamin B2, vitamin B3, vitamin B5, vitamin B6, vitamin B9
Các khoáng chất có trong mật ong gồm: Canxi, magie, natri, sắt, kali, kẽm, phốt pho.
            </p>
         </div>
    </div>
</div>
@endsection