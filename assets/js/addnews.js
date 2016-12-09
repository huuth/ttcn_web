
$(function(){
    var files = [];
    ajaxP("index.php?ctr=addnews&act=getProvince","get",'select[name="province_id"]'); 
    ajaxP("index.php?ctr=addnews&act=getType","get",'select[name="type_id"]'); 
     //
    $('select[name="province_id"]').change(function(event) {
        /* Act on the event */
        var url = "index.php?ctr=addnews&act=getDistrict";
        var method = "GET";
        var selector = 'select[name="district_id"]';
        var provinceId = $(this).find(":selected").val();
        
        ajaxP(url, method, selector, provinceId);
    });

    $('select[name="district_id"]').change(function(event) {
        /* Act on the event */
        var url = "index.php?ctr=addnews&act=getWard";
        var method = "GET";
        var selector = 'select[name="ward_id"]';
        var wardId = $(this).find(":selected").val();
        ajaxP(url, method, selector, wardId);
    });
    // Add events

    // $('input[id="image_0"][type=file]').on('change', prepareUpload('0'));
    // $('input[id="image_1"][type=file]').on('change', prepareUpload);
    $('input[type=file]').on('change', function(event){
        files = event.target.files;
        if (files.length > 9){
            document.getElementById("msg-max-image").setAttribute("style", "display: block;");
            document.getElementById("image-upload").innerHTML = '';
            for (var i=0; i<9; i++){
                var img = document.createElement("IMG");
                img.setAttribute("src", URL.createObjectURL(files[i]));

                var div = document.createElement("DIV");
                div.setAttribute("class", "thumb");
                div.appendChild(img);
                
                document.getElementById("image-upload").appendChild(div);
            }
        }
        else {
            // console.log(files);
            // console.log("image0");
            document.getElementById("image-upload").innerHTML = '';
            for (var i=0; i<files.length; i++){
                var img = document.createElement("IMG");
                img.setAttribute("src", URL.createObjectURL(files[i]));

                var div = document.createElement("DIV");
                div.setAttribute("class", "thumb");
                div.appendChild(img);
                
                document.getElementById("image-upload").appendChild(div);
            }
        }
    });

    // Grab the files and set them to our variable
    // function prepareUpload(id)
    // {
    //   console.log("image0");
    // }

});
function ajaxP(url, method, selector, id=0){
    $.ajax({
        url : url, // gửi ajax đến file result.php
        type : method, // chọn phương thức gửi là get
        dateType:"text", // dữ liệu trả về dạng text
        data : { // Danh sách các thuộc tính sẽ gửi đi
             id:id
        },
        success : function (result){
            // Sau khi gửi và kết quả trả về thành công thì gán nội dung trả về
            // đó vào thẻ div có id = result
            $(selector).html(result);
        }
    });
}