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
                <p>A</p>
                <p>L</p>
                <p>O</p>
                <p>E</p>
                <p>V</p>
                <p>E</p>
                <p>R</p>
                <p>A</p>
                <p>V</p>
                <p>E</p>
            </div>
        </div>
        <div class="header-third container-gobal">
            <ul>
                <li><a href="/">Trang chủ</a></li>
                <li><a href="/">Sản phẩm</a></li>
                <li><a href="/">Liên hệ</a></li>   
            </ul>
        </div>
    </div>
</header>
{{-- end header --}}