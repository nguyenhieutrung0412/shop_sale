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
               <img src="{{ asset('/images/logoo.png') }}" alt="logo">
            </div>
            <div class="header-second_right">
                <ul>
                    <li><a href="/">Trang chủ</a></li>
                    <li><a href="/">Sản phẩm</a></li>
                    <li><a href="/">Liên hệ</a></li>   
                </ul>
            </div>
        </div>
        <div class="header-third container-gobal">
           
        </div>
    </div>
</header>
{{-- end header --}}