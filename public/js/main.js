let img = document.querySelectorAll('.imglist-item img');
let imgshow = document.querySelector('.product-info_imgbig img');

// slide detail
    img.forEach((e)=>{
       
        e.addEventListener('click',()=>{
            imgshow.src = e.src;
            if(imgshow.src === e.src)
            {
                e.parentNode.classList.add("active");
            }
            //kiểm tra và xóa class active trong dom
            img.forEach((handle) =>{
                if(imgshow.src !== handle.src)
                    {
                        //console.log(1)
                        handle.parentNode.classList.remove("active");
                    }
            })
          
        });
    })

    $(document).ready(function(){
        $('#toggle').click(function() {
            $('#nav').slideToggle();
        });
        // Hiển thị form đăng nhập
        $(".login-btn").click(function(){
            $(".modal").toggle("fast","linear",function(){
                $(".modal").show();
            });
        });
        //đóng form đăng nhập
        $(".close").click(function(){
            $(".modal").toggle("fast","linear",function(){
                $(".modal").hide();
            });
        });
        // contact
        $(".menu-toggle").click(function () {
            $(".menu-toggle").toggleClass("open");
            $(".menu-line").toggleClass("open");
            $(".menu-round").toggleClass("open");
            
        });
        // 
        
    });

 

