

(function( $ ){
    
    $( "#file_upload" ).on( "change", function(e) {
        const files_data =   e.target.files;
        console.log(files_data)
        document.querySelector('.display_img').innerHTML = ``;
        for(var i = 0; i < files_data.length; i++)
        {
            upLoadImage(files_data[i]);
        }
      });
      $(".btn_event").on("click",(e)=>{
            delete_item(e);    
      })
      $(".delete_img").on("click",(e)=>{
            deleteImage(e); 
      })
    //   Xử lý xóa item hiện thông báo 
      function delete_item(e){
            console.log(e);
            data = e.target.dataset;
            const confirm =  window.confirm("Bạn có muốn xóa không");
            if(confirm == true)
            {
                $.ajax({
                    method: "POST",
                    url: data.route,
                    data: { 
                        id: data.id,
                        data:data
                     },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                   },
                }).done(()=>{
                    location.reload();
                })
            } 
            
            
      }
      function upLoadImage(file_data){
      
        //var type = file_data[0].type;
        var fileRender = new FileReader();

             var  file_loading = file_data;
                fileRender.onload = function(fileLoadEvent){
                    
                    var srcData = fileLoadEvent.target.result;
        
                    var newImage = document.createElement('img');
                    newImage.src = srcData;
                    document.querySelector('.display_img').innerHTML += 
                                                        `<div class="img_item">`
                                                            +newImage.outerHTML+`
                                                            <div class="delete_img">
                                                                <i class="bi bi-x-lg"></i>
                                                            </div>
                                                        </div>`;
            }
            fileRender.readAsDataURL(file_loading);
        
    }
    // Xóa ảnh 
    function deleteImage(e){
       
        data = e.target.parentElement.dataset;
        //console.log(data.route);
        const confirm =  window.confirm("Bạn có muốn xóa không");
        if(confirm == true)
        {
            $.ajax({
                method: "POST",
                url: data.route,
                data: { 
                    id: data.id,
                    data:data
                 },
                cache: true,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },
            }).done((str)=>{
                console.log(str)
                //if(str.status)
            })
        }
    }
})( jQuery )



