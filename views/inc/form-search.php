<!-- Start properties sidebar -->
<div class="col-md-4">    
    <aside class="aa-properties-sidebar">
        <!-- Start Single properties sidebar -->
        <div class="aa-properties-single-sidebar">
            <h3>TÌM KIẾM</h3>
            <form action="index.php" method="get" accept-charset="utf-8">   
                <input type="hidden" name="ctr" value="search">
                <input type="hidden" name="act" value="getRent">                           
                <div class="aa-single-advance-search">
                    <select id="province" name="province_id">                              
                    </select>
                </div>                                                               
                <div class="aa-single-advance-search">
                    <select id="distict" name="district_id">    
                        <option value="0" selected="selected">&laquo;Chọn quận /  huyện&raquo;</option>           
                    </select>
                </div>                                 
                <div class="aa-single-advance-search">
                    <select id="ward" name="ward_id">  
                        <option value="0" selected="selected">&laquo;Chọn phường / xã&raquo;</option>             
                    </select>
                </div>                                  
                <div class="aa-single-advance-search">
                    <select name="type_id">                    
                    </select>
                </div>                                 
                <div class="aa-single-advance-search">
                   <select name="price">
                        <option value="0" selected>&laquo;Giá thấp nhất&raquo;</option>
                        <option value="priceFrom:0,priceTo:500000">dưới 500 ngàn</option>
                        <option value="priceFrom:500000,priceTo:1000000">từ 500 ngàn - 1 triệu</option>
                        <option value="priceFrom:1000000,priceTo:3000000">từ 1 - 3 triệu</option>
                        <option value="priceFrom:3000000,priceTo:7000000">từ 3 - 7 triệu</option>
                        <option value="priceFrom:7000000,priceTo:">trên 7 triệu</option>
                    </select>
                </div>                                  
                <div class="aa-single-advance-search">
                    <button class="aa-search-btn" type="submit">Tìm kiếm</button>
                </div>
            </form>
        </div>
    </aside>    
</div>