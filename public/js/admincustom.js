

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
})( jQuery )



