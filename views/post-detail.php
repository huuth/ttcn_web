<?php require_once $_SERVER['DOCUMENT_ROOT'].'/libs/CVarDumper.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'/models/Type.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'/models/User.php';

//$detail = $data['ds']; dump($detail);
?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/inc/header.php';?>
    <!-- Start Proerty header  -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/inc/navigator.php';?>
    <section id="aa-property-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-property-header-inner">
                        <h2>Thông tin chi tiết</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">TRANG CHỦ</a></li>
                            <li class="active">Thông tin chi tiết</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Proerty header  -->

    <!-- Start Properties  -->
    <section id="aa-properties">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="aa-properties-content">
                        <!-- Start properties content body -->
                        <div class="aa-properties-details">
                            <div class="aa-properties-details-img">
                                <img src="assets/img/slider/1.jpg" alt="img">
                                <img src="assets/img/slider/2.jpg" alt="img">
                                <img src="assets/img/slider/3.jpg" alt="img">
                            </div>
                            <div class="aa-properties-info">
                            <?php   $detail = $data['rent'];
                                    $user   = $data['user'];
                                    $type   = $data['type'];
                            ?>
                                <div class="title-post">
                                    <h3><?php echo $detail['rent_name'] ?></h3>
                                </div>
                                <div class="infor-post">
                                    <div class="row infor-post-address">                                        
                                        <div class="col-md-2 col-xs-4"><span>Địa chỉ:</span></div>
                                        <div class="col-md-10 col-xs-8"><span><?php echo $detail['address_detail']; ?></span></div>  
                                    </div>
                                    <div class="row">                                       
                                        <div class="col-md-2 col-xs-4"><span>Loại tin rao:</span></div>
                                        <div class="col-md-4 col-xs-8">
                                            <a href="https://phongtro123.com/cho-thue-phong-tro">
                                            <?php echo $type['type_name']; ?></a>
                                        </div>                                       
                                        <div class="col-md-2 col-xs-4"><span>Ngày cập nhật:</span></div>
                                        <div class="col-md-4 col-xs-8"><span><?php echo $detail['post_time'] ;?></span></div>                                       
                                    </div>
                                    <div class="row">                                    
                                        <div class="col-md-2 col-xs-4"><span>Người đăng:</span></div>
                                        <div class="col-md-4 col-xs-8"><span>
                                            <?php echo $user['username']; ?>
                                         </span></div>                                                            
                                        <div class="col-md-2 col-xs-4"><span>Điện thoại:</span></div>
                                        <div class="col-md-4 col-xs-8">
                                            <a href="tel:0975771327"><?php echo $user['phone']; ?>
                                            </a>
                                        </div>                                    
                                    </div>
                                    <div class="row">                                    
                                        <div class="col-md-2 col-xs-4"><span>Email:</span></div>
                                        <div class="col-md-4 col-xs-8">
                                            <a href="mailto:vohinh1989kute@gmail.com"><?php echo $user['email']; ?>
                                            </a>
                                        </div>                                                                      
                                        <div class="col-md-2 col-xs-4"><span>Đối tượng:</span></div>
                                        <div class="col-md-4 col-xs-8"><span>Tất cả </span></div>                                    
                                    </div>
                                    <div class="row">                                    
                                        <div class="col-md-2 col-xs-4"><span>Diện tích:</span></div>
                                        <div class="col-md-4 col-xs-8"><span><?php echo $detail['square'] ." m2"; ?>
                                        </span></div>                               
                                        <div class="col-md-2 col-xs-4"><span>Giá cho thuê:</span></div>
                                        <div class="col-md-4 col-xs-8"><span><?php echo $detail['price'] ;?></span></div>                                    
                                    </div>
                                </div>
                                <div class="infor-detail">
                                    <div class="title-post">
                                        <h3>THÔNG TIN CHI TIẾT</h3>
                                    </div>
                                    <div class="text-detail">
                                        <?php echo $detail['describe_rent'] ;?>
                                    </div>
                                </div>
                                <!-- Properties social share -->
                                <div class="aa-properties-social">
                                    <ul>
                                        <li>Share</li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                                <!-- Nearby properties -->
                            </div>
                        </div>
                    </div>
                </div>
                    <!-- Start properties sidebar -->
                <div class="col-md-4">
                    <aside class="aa-properties-sidebar">
                        <!-- Start Single properties sidebar -->
                        <div class="aa-properties-single-sidebar">
                            <h3>TÌM KIẾM</h3>
                            <form action="">
                                <div class="aa-single-advance-search">
                                    <select>
                                       <option value="0" selected>Thành phố</option>
                                       <?php
                                        $province = sortProvince($data['province']);
                                        foreach ($province as $value):
                                        ?>
                                        <option value="<?php echo $value['provinceid']; ?>"><?php echo $value['name']; ?>
                                        </option>
                                        <?php endforeach; ?> 

                                    </select>
                                </div>
                                <div class="aa-single-advance-search">
                                    <select>
                                        <option value="0" selected>Quận</option>
                                        <option value="1">Liên Chiểu</option>
                                        <option value="2">Hải Châu</option>
                                        <option value="3">Thanh Khê</option>
                                        <option value="4">Ngũ Hành Sơn</option>
                                    </select>
                                </div>
                                <div class="aa-single-advance-search">
                                    <select>
                                        <option value="0" selected>Phường</option>
                                        <option value="1">Hòa Khánh Nam</option>
                                        <option value="2">Hòa Khánh Bắc</option>
                                        <option value="3">Hòa Minh</option>                    
                                    </select>
                                </div>
                                <div class="aa-single-advance-search">
                                    <select>
                                        <option value="0" selected>Chọn loại phòng</option>
                                        <option value="1">Nhà trọ, Phòng trọ</option>
                                        <option value="2">Chung cư, căn hộ</option>
                                        <option value="3">Nhà nguyên căn</option>
                                        <option value="4">Nhà mặt phố</option>
                                    </select>
                                </div>
                                <div class="aa-single-advance-search">
                                    <select>
                                        <option value="0" selected>Giá thấp nhất</option>
                                        <option value="1">dưới 500 ngàn</option>
                                        <option value="2">từ 500 ngàn - 1 triệu</option>
                                        <option value="3">từ 1 - 3 triệu</option>
                                        <option value="4">từ 3 - 7 triệu</option>
                                        <option value="4">trên 7 triệu</option>
                                    </select>
                                </div>
                                <div class="aa-single-advance-search">
                                    <input type="submit" value="TÌM KIẾM" class="aa-search-btn">
                                </div>
                            </form>
                        </div>
                    </aside>
                </div>
            </div>            
        </div>
    </section>
    <!-- / Properties  -->

    <!-- Footer -->
    <footer id="aa-footer">
        <div class="container">
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
<?php 
  function sortProvince($provinces){
    $temp1 = [];
    $temp2 = [];
    foreach ($provinces as $province) {
      if($province['type'] == 'Thành Phố'){
        $temp1[] = $province;
      }else{
        $temp2[] = $province;
      }
    }
    return array_merge($temp1,$temp2);
  }
 ?>