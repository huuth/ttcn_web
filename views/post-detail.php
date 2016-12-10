<?php require_once $_SERVER['DOCUMENT_ROOT'].'/libs/CVarDumper.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'/models/Type.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'/models/User.php';

//$detail = $data['image']; dump($detail);
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
                                <?php if(!empty($data['rent']['img'])): ?>
                                    <?php foreach ($data['rent']['img'] as  $img): ?>
                                        <img src="<?php echo $img['image_url'] ?>" alt="img">    
                                    <?php endforeach; ?>
                                <?php endif; ?>                                
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
                                        <div class="col-md-3 col-xs-5 color-col"><span>Địa chỉ:</span></div>
                                        <div class="col-md-9 col-xs-7"><span><?php echo $detail['address_detail']; ?></span></div>  
                                    </div>
                                    <div class="row">                                       
                                        <div class="col-md-3 col-xs-5 color-col"><span>Loại tin rao:</span></div>
                                        <div class="col-md-3 col-xs-7">
                                            <span><?php echo $type['type_name']; ?></span>
                                        </div>                                       
                                        <div class="col-md-3 col-xs-5 color-col"><span>Ngày cập nhật:</span></div>
                                        <div class="col-md-3 col-xs-7"><span><?php echo $detail['post_time'] ;?></span></div>                                       
                                    </div>
                                    <div class="row">                                    
                                        <div class="col-md-3 col-xs-5 color-col"><span>Người đăng:</span></div>
                                        <div class="col-md-3 col-xs-7"><span>
                                            <?php echo $user['username']; ?>
                                         </span></div>                                                            
                                        <div class="col-md-3 col-xs-5 color-col"><span>Điện thoại:</span></div>
                                        <div class="col-md-3 col-xs-7">
                                            <a href="tel:<?php echo $user['phone']; ?>"><?php echo $user['phone']; ?></a>
                                        </div>                                    
                                    </div>
                                    <div class="row">                                    
                                        <div class="col-md-3 col-xs-5 color-col"><span>Email:</span></div>
                                        <div class="col-md-3 col-xs-7">
                                            <a href="mailto:vohinh1989kute@gmail.com"><?php echo $user['email']; ?>
                                            </a>
                                        </div>                                                                      
                                        <div class="col-md-3 col-xs-5 color-col"><span>Đối tượng:</span></div>
                                        <div class="col-md-3 col-xs-7"><span>Tất cả </span></div>                                    
                                    </div>
                                    <div class="row">                                    
                                        <div class="col-md-3 col-xs-5 color-col"><span>Diện tích:</span></div>
                                        <div class="col-md-3 col-xs-7"><span><?php echo $detail['square'] ." m2"; ?>
                                        </span></div>                               
                                        <div class="col-md-3 col-xs-5 color-col"><span>Giá cho thuê:</span></div>
                                        <div class="col-md-3 col-xs-7"><span><?php echo $detail['price'] ;?></span></div>                                    
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
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/views/inc/form-search.php'; ?>
                
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
