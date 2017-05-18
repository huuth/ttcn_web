<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/inc/header.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/inc/navigator.php';?>

    <!-- Start Proerty header  -->

    <section id="aa-property-header">
        <div class="container1">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-property-header-inner">
                        <h2>ĐĂNG TIN PHÒNG/NHÀ CHO THUÊ</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">TRANG CHỦ</a></li>
                            <li class="active">Đăng tin</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Proerty header  -->

                
<!-- 
                <form action="index.php?ctr=addnews&act=uploadImage" method="post" enctype="multipart/form-data">
                    <input type="file" id="file" name="files[]" multiple="multiple" accept="image/*" />
                    <input type="submit" value="Upload!" />
                </form>
 -->


    <!--body-->
    <section id="aa-properties">
        <div class='nhf_body' itemscope itemtype="http://schema.org/Website">
            <div id='sunny_wall' class="large_wall">  
                <div class="content_holder">  <div id="container" class="sunny_container"> 
                <div id="main_content" class="sn_content"> 
                        <div class="maintext">
                        </div>
                        <div class="ai_container">
                            <div id="ai_progress">
                               <div class='circle circle_active sunny_circle'></div>
                               <div class='progress_1 step_des_active'>Tạo tin &#187;</div>
                               <div class="clear"></div>
                           </div>
                           <div class="ai_form_col">
                            <form method="post" action="index.php?ctr=addnews&act=addNews" id="formular_m" name="formular_m"
                            enctype="multipart/form-data" onsubmit="return form_validate();">

                            <div class="ai_header">Nội dung tin&nbsp;<span class="ai_header_notice">(Vui lòng điền đầy đủ tất cả các mục)</span></div>

                            <input name="check_type_diff" id="check_type_diff" value="1" type="hidden"/>
    
                            <div class="ai_row">
                                <div class="ai_label">Tỉnh/Thành phố:</div>
                                <div class="ai_element">
                                    <div class="div_select_custom">
                                        <select name="province_id" id="category_group" sel_id="">                             
                                        </select>
                                    </div>
                                </div>
                                <div id="province_validate" class="warning_validate">
                                    <span>*Chọn tỉnh/thành phố</span>
                                </div>
                                <div class="clear"></div>
                                <div class="trans_price" id="tprice"></div>
                            </div>
                            <div class="ai_row">
                                <div class="ai_label">Quận / Huyện:</div>
                                <div class="ai_element">
                                    <div class="div_select_custom">
                                        <select name="district_id" id="category_group" sel_id="" >
                                            <option value="0" selected="selected">&laquo;Chọn quận /  huyện&raquo;</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="district_validate" class="warning_validate">
                                    <span>*Chọn quận/huyện</span>
                                </div>
                                <div class="clear"></div>
                                <div class="trans_price" id="tprice"></div>
                            </div>
                            <div class="ai_row">
                                <div class="ai_label">Phường / Xã:</div>
                                    <div class="ai_element">
                                        <div class="div_select_custom">
                                            <select name="ward_id" id="category_group" sel_id="" >
                                                <option value="0" selected="selected">&laquo;Chọn phường / xã&raquo;</option>
                                            </select>
                                        </div>
                                    </div>
                                <div id="ward_validate" class="warning_validate">
                                    <span >*Chọn phường/xã</span>
                                </div>
                                <div class="clear"></div>
                                <div class="trans_price" id="tprice"></div>
                            </div>
                            
                            <div class="ai_row">
                                <div class="ai_label">Loại tin rao:</div>
                                <div class="ai_element">
                                    <div class="div_select_custom">
                                        <select name="type_id" id="category_group">                                           
                                        </select>
                                    </div>
                                </div>
                                <div id="type_validate" class="warning_validate">
                                    <span>*Loại tin</span>
                                </div>
                                <div class="clear"></div>
                                <div class="trans_price" id="tprice"></div>
                            </div>
                            <div class="clear"></div>        

                            <div id="category_contents" class="maintext"> 
                                <div class="form_table margin_bottom cat_data">
                                    
                                    <div class="ai_row">
                                       <div class="ai_label ai_label_subject" style="margin-top: 0px;">Địa chỉ chi tiết:
                                           <small class="input_count">
                                            <span id="subject_counter"></span>
                                            </small>
                                        </div>
                                        <div class="ai_element">
                                          <input class="input_short" type="text"  class="vietuni"
                                          id="subject" name="address_detail" size="46" maxlength="46" value="" 
                                          title="Số nhà, tên đường." placeholder="Số nhà, tên đường." required="required"/>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="trans_price" id="tprice"></div>
                                    </div>

                                    <div class="ai_row">
                                       <div class="ai_label ai_label_subject" style="margin-top: 0px;">Tựa đề:
                                           <small class="input_count">
                                            <span id="subject_counter"></span>
                                            </small>
                                        </div>
                                        <div class="ai_element">
                                          <input class="input_short" type="text"  class="vietuni"
                                          id="subject" name="rent_name" size="46" maxlength="46" value="" 
                                          title="Dùng tiếng việt có dấu." placeholder="Dùng tiếng việt có dấu." required="required"/>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="trans_price" id="tprice"></div>
                                    </div>
                                    <div class="ai_row">
                                        <div class="ai_label">Nội dung tin:
                                            <small class="input_count">
                                                <span id="body_counter"></span>
                                            </small>
                                        </div>
                                        <div class="ai_element">
                                            <textarea cols="43" rows="10" name="describe_rent" maxlength="2000" class="vietuni placeholder input_long_textarea" id="body" title="Điền nội dung tin chi tiết bạn muốn rao bằng tiếng việt có dấu." placeholder="Điền nội dung tin chi tiết bạn muốn rao bằng tiếng việt có dấu."></textarea>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="trans_price" id="tprice"></div>
                                    </div>
                              <div class="ai_row" id="price_box" style="display: table-row;">
                                <div class="ai_label">Giá:</div>
                                <div class="ai_element">

                                 <input name="price" class="input_short" size="12" maxlength="19" value="" id="price" type="number" step=any min="0" placeholder="0.00" required="required"/>
                                 <span class="unit_text">VND/tháng</span>
                             </div>
                             <div class="clear"></div>
                             <div class="trans_price" id="tprice"></div>
                 </div>

                 <div class="ai_row" id="price_box" style="display: table-row;">
                    <div class="ai_label">Diện tích:</div>
                    <div class="ai_element">
                     <input name="square"  class="input_short" size="12" maxlength="19" value="" id="price" type="number" step=any min="0" placeholder="0.00"/>
                     <span class="unit_text">m&sup2;</span>
                 </div>
                 <div class="clear"></div>
                 <div class="trans_price" id="tprice"></div>
             </div>
         </div>
     </div>
     <div class="ai_row">
        <div class="ai_label">Hình:</div>
        <div class="ai_element" style="width:663px;margin-bottom: -23px;">
            <div id="drop_zone">
                <div id="ai_image_tip">“Trăm nghe không bằng mắt thấy”. Tin có hình được xem nhiều gấp 7 lần. <br><b>ĐĂNG HÌNH ĐỂ THU HÚT HƠN!</b></div>
                <div style="clear:both"></div>
                
                <div id="msg-max-image" class="warning_validate">
                    <span>*Chỉ được chọn tối đa 9 hình.</span>
                </div>
                <div id="image-upload" class="image-upload">
                    <!-- <div class="thumb">
                      <img src="" />
                    </div>
                    <div class="thumb">
                      <img src="" alt="Image" />
                    </div>
                    <div class="thumb">
                      <img src="" alt="Image" />
                    </div>
                    <div class="thumb">
                      <img src="" alt="Image" />
                    </div> -->
                </div>
                <!-- <div class="row">
                    <div id="img-box" class="col-md-4">
                        <img src="data/rent-images/zzzz.jpg"> 
                    </div>
                </div>     -->   

                   

                <div align="center" style="float:left; margin-right:10px;margin-left:7px;" data-sequence="0" class="im_upload nohistory image-placeholder image-placeholder-show" id="dummy_image_0">
                    <input id="image_upload" type="file" name="files[]" multiple="multiple" accept="image/*" data-url="https://www2.chotot.com/upload_image.json" class="ai-general-input" style="display: block; cursor: pointer;">
                    <span class="validation-message" style=""></span>
                    <div class="thumb-container thumb-container-empty">
                        <div id="thumb-camera" class="thumb-camera sprite_ai_camera" style="display: block;"></div>
                        <input type="hidden" class="image_value" id="image0" value="">
                        <input type="hidden" name="image_rotate[]" class="rotate_value" id="image0_rotate" value="0">
                        <!-- <img class="rent-img" src="data\rent-images\img1.jpg" alt=""> -->
                        <span class="image-label">Đăng hình</span>   
                    </div>
                </div>

                <span id="more_img"> Đăng nhiều hình thật nhanh bằng cách nhấn nút phía trên rồi chọn nhiều hình cùng lúc. Chỉ được chọn tối đa 9 hình.</span>
            </div>

            <div class="aiupload-right">
                <div class="triangle">&nbsp;</div>
                <span></span>
                <div class="aiupload-cloud">
                    <span id="minimum_images" class="warning" style="margin-top:0px;"></span>
                    <br>
                    <span id="ai_image_tip_des" class="aiupload-text">Chỉ hình thật phòng cho thuê được duyệt. Lưu ý không dùng hình có dán kèm số điện thoại hoặc địa chỉ website.</span>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>

    <div class="ai_row">
        <div class="ai_label">&nbsp;</div>
        <div class="ai_element">
        </div>
        <div class="clear"></div>
    </div>

    <div class="ai_row">
            <div class="ai_label">Cách thanh toán:</div>
            <div class="ai_element_text">
                &nbsp
                Người cho thuê và người thuê tự thoả thuận
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>        <div class="ai_row">

    <div class="ai_row">
      <div class="ai_label">&nbsp;</div>
      <div class="ai_element">

         <input class="ai_submit" name="validate" type="submit"
         value="ĐĂNG TIN &#187;"
         onclick="showProgressBar(this);" />
         <span id="minimum_images2"  class="warning" style="margin-top:0px;"> </span>
     </div>
     <div class="clear"></div>
 </div>
</form>
</div>
</div>
</div>
</div>


</section>


<!--end body-->



<!-- Footer -->
<footer id="aa-footer">
    <div class="container1">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-footer-area">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="aa-footer-left">
                                <p>Designed by
                                    <a rel="nofollow" href="#"></a>Team KIKA</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="aa-footer-middle">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="aa-footer-right">
                                    <a href="#">TRANG CHỦ</a>
                                    <a href="#">HỔ TRỢ</a>
                                    <a href="#">HỎI ĐÁP</a>
                                    <a href="#">LIÊN HỆ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- / Footer -->


<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/inc/footer.php';?>