<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/inc/header.php';?>
    <!-- Start Proerty header  -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/inc/navigator.php';?>
    <section id="aa-property-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-property-header-inner">
                        <h2>Tìm kiếm</h2>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Trang chủ</a></li>
                            <li class="active">TÌm kiếm</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Proerty header  -->

    <!-- Start Properties  -->
    <section id="aa-properties" class="show-rent">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="aa-properties-content">
                        <!-- start properties content head -->
                        <div class="aa-properties-content-head">
                            <div class="aa-properties-content-head-left">
                                <div class="aa-show-form">
                                    <label for="">Hiển thị</label>
                                    <select name="numberPage">
                                        <option value="6" selected>6</option>
                                        <option value="12">12</option>
                                        <option value="24">24</option>
                                    </select>
                                </div>
                            </div>                            
                        </div>
                        <!-- Start properties content body -->
                        <div class="aa-properties-content-body">
                            <ul class="aa-properties-nav">                                
                                <?php 
                                foreach ($data['rent'] as $key => $rent): 
                                if($rent['status'] == 1):
                                ?>
                                <li>
                                    <article class="aa-properties-item">
                                        <a href="index.php?ctr=detail&act=getIndex&rent_id=<?php echo $rent['rent_id'];?>" class="aa-properties-item-img">
                                        <?php 
                                        if(empty($data['arrayImg'][$rent['rent_id']])){
                                            echo '<img src="assets/img/item/default.png" alt="img">';
                                        }else{
                                            $img = $data['arrayImg'][$rent['rent_id']];
                                            echo '<img src="'. $img[0]['image_url'] .'" alt="img">';                      
                                        }
                                        ?>                      
                                        </a>
                                        <div class="aa-properties-item-content">
                                            <div class="aa-properties-info">
                                                <?php echo mb_substr($rent['address_detail'],0,40,"utf-8"); ?>
                                            </div>
                                            <div class="aa-properties-about">
                                                <h3>
                                                    <a href="index.php?ctr=detail&act=getIndex&rent_id=<?php echo $rent['rent_id'];?>">
                                                        <?php echo mb_substr($rent['rent_name'],0,60,"utf-8"); ?>  
                                                    </a>
                                                </h3>                      
                                            </div>
                                            <div class="aa-properties-detial">
                                                <span class="aa-price">
                                                <?php 
                                                    $temp = $rent['price']/1000000;
                                                    if($temp >= 1){
                                                        echo $temp . ' triệu VND';
                                                    }else{
                                                        $temp = $rent['price']/1000;
                                                        echo $temp . ' nghìn VND';
                                                    }
                                                ?>
                                                </span>
                                                <a href="index.php?ctr=detail&act=getIndex&rent_id=<?php echo $rent['rent_id'];?>" class="aa-secondary-btn">Chi tiết</a>
                                            </div>
                                        </div> 
                                    </article> <!--article  -->
                                </li><!-- col-md-4 -->
                                <?php 
                                endif;
                                endforeach; 
                                ?>
                            </ul>
                        </div>
                        <!-- Start properties content bottom -->
                        <div class="aa-properties-content-bottom">
                            <nav>
                                <ul class="pagination paging">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>                                    
                                    <?php 
                                        $total = $data['pagination']['total'];
                                        $numberRent = $data['pagination']['numberPage'];
                                        $currentPage = $data['pagination']['currentPage'];
                                        $numberPage = intval($total/$numberRent);
                                        if($total % $numberRent > 0) {$numberPage +=1;}
                                        for($i = 0; $i < $numberPage; $i++):
                                    ?>
                                    <li <?php if($currentPage == $i) echo 'class="active"';?> >
                                        <a href="#"><?php echo $i+1; ?></a>
                                    </li>
                                    <?php endfor; ?>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
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