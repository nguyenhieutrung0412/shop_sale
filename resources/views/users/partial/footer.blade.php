{{-- footer --}}
<footer>
    <div class="global-footer">
        <div class="footer-first">
            <div class="logo">
                <a href="/"><img src="{{ asset('/images/logo5.png') }}" alt="logo"></a>
            </div>
            <div class="infomation">
                <p><i class="fa-solid fa-location-dot"></i> Bình Thạnh, Hồ Chí Minh</p>
                <p><i class="fa-solid fa-phone"></i> 035 874 2101</p>
                <p><i class="fa-solid fa-envelope"></i> aloeverahcm@gmail.com</p>
            </div>
            <div class="store-active">
                <p>Giờ hoạt động: 6AM - 22PM</p>
            </div>
        </div>
        <div class="footer-second">
                <p><i class="3"></i> <a href="/"> Trang chủ </a></p>
                <p><i class="4"></i> Tin tức</p>
                <p><i class="5"></i><a href="/chinh-sach">Chính sách</a></p>
        @if(Auth::Check())
        <div class="loginow">
            <a href="{{ route('admin.product') }}" class="admin-btn"><img src="{{ asset('/images/admins.png') }}" alt="admin"></a>
        </div>
        @else
        <div class="loginow">
            <button class="login-btn">Đăng nhập </button>
        </div>
        @endif
               <p>copyright © 2024 aloeveravn.com.</p>
        </div>
        </div>
    
</footer>
<div class="containers">
    <div class="menu-toggle">
        <span class="fa fa-plus"></span>
    </div>
    
    <div class="menu-round">
        <div class="btn-app">
            
        </div>
        <div class="btn-app">
            <a href="https://www.facebook.com/Sharecs.net">
                <div class="colorf"><div class="fa fa-facebook"></div></div>
            </a>
        </div>
        <div class="btn-app">
            <a href="tel:0123456789">
                <div class="colorf"><div class="fa fa-phone"></div></div>
            </a>
        </div>
    </div>
    
    {{-- <div class="menu-line">
        <div class="btn-app">
            
        </div>
        <div class="btn-app">
            <a href="mailto:sharecs.net@gmail.com">
                <div class="colorf"><div class="fa fa-envelope"></div></div>
            </a>
        </div>
        <div class="btn-app">
            <a href="https://bit.ly/3lGliU5">
                <div class="colorf"><div class="fa fa-video-camera"></div></div>
            </a>
        </div>
        <div class="btn-app">
            <a href="https://bit.ly/3lGliU5">
                <div class="colorf"><div class="fa fa-soundcloud"></div></div>
            </a>
        </div>
        <div class="btn-app">
            <a href="https://bit.ly/3lGliU5">
                <div class="colorf"><div class="fa fa-graduation-cap"></div></div>
            </a>
        </div>
        <div class="btn-app">
            <a href="https://bit.ly/3lGliU5">
                <div class="colorf"><div class="fa fa-image"></div></div>
            </a>
        </div>
        <div class="btn-app">
            <a href="https://bit.ly/3lGliU5">
                <div class="colorf"><div class="fa fa-vine"></div></div>
            </a>
        </div>
    </div> --}}
</div>
  <!-- làm admin
  chỉnh header
  giảm giá
  chính sách
  tin tức

         -->