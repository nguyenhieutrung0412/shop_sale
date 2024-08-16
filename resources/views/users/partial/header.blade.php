 {{-- header --}}
 <header>
    <div class="global-header ">
        @if(Auth::Check())
        <div class="header-first">
            <a href="{{ route('admin.product') }}" class="admin-btn">Admin</a>
        </div>
        @else
        <div class="header-first">
            <button class="login-btn">ĐĂNG NHẬP</button>
        </div>
        @endif
        
        <div class="header-second container-gobal">
            <div class="logo">
               <a href="/"><img src="{{ asset('/images/logoo.png') }}" alt="logo"></a>
            </div>
            <div class="header-second_right">
                <div id="toggle">
                    <i class="fas fa-bars"></i>
                </div>
                <ul id="nav">
                    <li><a href="/">Trang chủ</a></li>
                    <li class="dropdown">
                        <span class="submenu">Sản phẩm <i class="fa-solid fa-caret-down"></i></span> 
                        <ul class="dropdown-menu"  aria-labelledby="dropdownMenuButton1">
                            @foreach ($cate as $value)
                            <a href="{{ route('products.by.category', ['id'=>$value->id_new]) }}"><li>{{$value->name}}</li></a>
                            @endforeach
                            
                           
                        </ul>
                    </li>
                    <li><a href="/">Liên hệ</a></li>   
                    <li><a href="/chinh-sach">Chính sách </a></li>
                </ul>
            </div>
        </div>
        <div class="header-third container-gobal">
           
        </div>
    </div>
</header>
{{-- end header --}}