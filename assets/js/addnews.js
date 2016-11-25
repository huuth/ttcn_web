
$(function(){
    ajaxP("index.php?ctr=addnews&act=getProvince","get",'select[name="province_id"]'); 
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