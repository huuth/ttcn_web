<?php require_once $_SERVER['DOCUMENT_ROOT'].'/libs/CVarDumper.php';
// dump($data);
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/inc/header.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/inc/navigator.php';?>
  <!-- Start slider  -->
  <section id="aa-slider">
    <div class="aa-slider-area"> 
      <!-- Top slider -->
      <div class="aa-top-slider">
        <!-- Top slider single slide -->
        <div class="aa-top-slider-single">
          <img src="assets/img/slider/3.jpg" alt="img">         
        </div>
        <!-- / Top slider single slide -->
        <!-- Top slider single slide -->
        <div class="aa-top-slider-single">
          <img src="assets/img/slider/2.jpg" alt="img">       
        </div>
        <!-- / Top slider single slide -->
        <!-- Top slider single slide -->
        <div class="aa-top-slider-single">
          <img src="assets/img/slider/1.jpg" alt="img">         
        </div>
        <!-- / Top slider single slide -->       
         <!-- Top slider single slide -->
        <div class="aa-top-slider-single">
          <img src="assets/img/slider/5.jpg" alt="img">         
        </div>
        <!-- / Top slider single slide -->        
         <!-- Top slider single slide -->
        <div class="aa-top-slider-single">
          <img src="assets/img/slider/4.jpg" alt="img">          
        </div>
        <!-- / Top slider single slide -->
         <!-- Top slider single slide -->
        <div class="aa-top-slider-single">
          <img src="assets/img/slider/6.jpg" alt="img">        
        </div>
        <!-- / Top slider single slide -->
      </div>
    </div>
  </section>
  <!-- End slider  -->

  <!-- Advance Search -->
  <section id="aa-advance-search">
    <div class="container">
      <div class="aa-advance-search-area">
        <div class="form">
        <form action="index.php?ctr=search&act=getIndex" method="get" accept-charset="utf-8">
          <input type="hidden" name="ctr" value="search">
          <input type="hidden" name="act" value="getIndex">
          <div class="aa-advance-search-top">
            <div class="row">              
              <div class="col-md-2">
                <div class="aa-single-advance-search">
                  <select id="province" name="province_id">
                    <option value="0" selected>Thành phố</option>
                    <?php 
                    $province = sortProvince($data['province']);
                    foreach ($province as $value):
                    ?>
                    <option value="<?php echo $value['provinceid']; ?>"><?php echo $value['name']; ?></option>                    
                    <?php endforeach; ?>
                    


                  </select>
                </div>
              </div>
              <div class="col-md-2">
                <div class="aa-single-advance-search">
                  <select id="distict" name="distict_id">
                    <option value="0" selected>Quận</option>
                    
                  </select>
                </div>
              </div>
              <div class="col-md-2">
                <div class="aa-single-advance-search">
                  <select id="ward" name="ward_id">
                    <option value="0" selected>Phường</option>
                    <option value="1">Hòa Khánh Nam</option>
                    <option value="2">Hòa Khánh Bắc</option>
                    <option value="3">Hòa Minh</option>                    
                  </select>
                </div>
              </div>
              <div class="col-md-2">
                 <div class="aa-single-advance-search">
                  <select>
                    <option value="0" selected>Chọn loại phòng</option>
                    <option value="1">Nhà trọ, Phòng trọ</option>
                    <option value="2">Chung cư, căn hộ</option>
                    <option value="3">Nhà nguyên căn</option>
                    <option value="4">Nhà mặt phố</option>
                  </select>
                </div>
              </div>
              <div class="col-md-2">
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
              </div>
              <div class="col-md-2">
                <div class="aa-single-advance-search">
                  <input class="aa-search-btn" type="submit" value="Tìm kiếm">
                </div>
              </div>
            </div>
          </div>  
        </form>
        </div>         
      </div>
    </div>
  </section>
  <!-- / Advance Search -->
  
  <section id="aa-latest-property">
    <div class="container">
      <div>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li><h3 class="latest-news">TIN MỚI NHẤT</h3></li>
          <li role="presentation" class="active"><a href="#motel" aria-controls="motel" role="tab" data-toggle="tab">Phòng trọ, nhà trọ</a></li>
          <li role="presentation"><a href="#apartment" aria-controls="apartment" role="tab" data-toggle="tab">Chung cư, căn hộ</a></li>
          <li role="presentation"><a href="#house" aria-controls="house" role="tab" data-toggle="tab">Nhà nguyên căn</a></li>
          <li role="presentation"><a href="#house-street" aria-controls="house-street" role="tab" data-toggle="tab">Nhà mặt phố</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="motel">
            <div class="aa-latest-properties-content">
              <div class="row">
                <div class="col-md-4">
                  <article class="aa-properties-item">
                    <a href="#" class="aa-properties-item-img">
                      <img src="assets/img/item/1.jpg" alt="img">
                    </a>                
                    <div class="aa-tag for-rent">
                      For Rent
                    </div>    
                    <div class="aa-properties-item-content">
                      <div class="aa-properties-info">
                        <span>5 Rooms</span>
                        <span>2 Beds</span>
                        <span>3 Baths</span>
                        <span>1100 SQ FT</span>
                      </div>
                      <div class="aa-properties-about">
                        <h3><a href="#">Appartment Title</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>                                          
                      </div>
                      <div class="aa-properties-detial">
                        <span class="aa-price">
                          $35000
                        </span>
                        <a href="#" class="aa-secondary-btn">Chi tiết</a>
                      </div>
                    </div>
                  </article>
                </div>
                <div class="col-md-4">
                  <article class="aa-properties-item">
                    <a href="#" class="aa-properties-item-img">
                      <img src="assets/img/item/2.jpg" alt="img">
                    </a>
                    <div class="aa-tag for-rent">
                      For Rent
                    </div>
                    <div class="aa-properties-item-content">
                      <div class="aa-properties-info">
                        <span>5 Rooms</span>
                        <span>2 Beds</span>
                        <span>3 Baths</span>
                        <span>1100 SQ FT</span>
                      </div>
                      <div class="aa-properties-about">
                        <h3><a href="#">Appartment Title</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>                      
                      </div>
                      <div class="aa-properties-detial">
                        <span class="aa-price">
                          $11000
                        </span>
                        <a href="#" class="aa-secondary-btn">Chi tiết</a>
                      </div>
                    </div>
                  </article>
                </div>
                <div class="col-md-4">
                  <article class="aa-properties-item">
                    <a href="#" class="aa-properties-item-img">
                      <img src="assets/img/item/3.jpg" alt="img">
                    </a>
                    <div class="aa-tag sold-out">
                      Sold Out
                    </div>
                    <div class="aa-properties-item-content">
                      <div class="aa-properties-info">
                        <span>5 Rooms</span>
                        <span>2 Beds</span>
                        <span>3 Baths</span>
                        <span>1100 SQ FT</span>
                      </div>
                      <div class="aa-properties-about">
                        <h3><a href="#">Appartment Title</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>                      
                      </div>
                      <div class="aa-properties-detial">
                        <span class="aa-price">
                          $15000
                        </span>
                        <a href="#" class="aa-secondary-btn">Chi tiết</a>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
            </div>            
          </div>
          <!--  -->
          <div role="tabpanel" class="tab-pane" id="apartment">
            <div class="aa-latest-properties-content">
              <div class="row">
                <div class="col-md-4">
                  <article class="aa-properties-item">
                    <a href="#" class="aa-properties-item-img">
                      <img src="assets/img/item/1.jpg" alt="img">
                    </a>
                    <div class="aa-tag for-sale">
                      For Sale 2
                    </div>
                    <div class="aa-properties-item-content">
                      <div class="aa-properties-info">
                        <span>5 Rooms</span>
                        <span>2 Beds</span>
                        <span>3 Baths</span>
                        <span>1100 SQ FT</span>
                      </div>
                      <div class="aa-properties-about">
                        <h3><a href="#">Appartment Title</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>                      
                      </div>
                      <div class="aa-properties-detial">
                        <span class="aa-price">
                          $35000
                        </span>
                        <a href="#" class="aa-secondary-btn">Chi tiết</a>
                      </div>
                    </div>
                  </article>
                </div>
                <div class="col-md-4">
                  <article class="aa-properties-item">
                    <a href="#" class="aa-properties-item-img">
                      <img src="assets/img/item/2.jpg" alt="img">
                    </a>
                    <div class="aa-tag for-rent">
                      For Rent
                    </div>
                    <div class="aa-properties-item-content">
                      <div class="aa-properties-info">
                        <span>5 Rooms</span>
                        <span>2 Beds</span>
                        <span>3 Baths</span>
                        <span>1100 SQ FT</span>
                      </div>
                      <div class="aa-properties-about">
                        <h3><a href="#">Appartment Title</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>                      
                      </div>
                      <div class="aa-properties-detial">
                        <span class="aa-price">
                          $11000
                        </span>
                        <a href="#" class="aa-secondary-btn">Chi tiết</a>
                      </div>
                    </div>
                  </article>
                </div>
                <div class="col-md-4">
                  <article class="aa-properties-item">
                    <a href="#" class="aa-properties-item-img">
                      <img src="assets/img/item/3.jpg" alt="img">
                    </a>
                    <div class="aa-tag sold-out">
                      Sold Out
                    </div>
                    <div class="aa-properties-item-content">
                      <div class="aa-properties-info">
                        <span>5 Rooms</span>
                        <span>2 Beds</span>
                        <span>3 Baths</span>
                        <span>1100 SQ FT</span>
                      </div>
                      <div class="aa-properties-about">
                        <h3><a href="#">Appartment Title</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>                      
                      </div>
                      <div class="aa-properties-detial">
                        <span class="aa-price">
                          $15000
                        </span>
                        <a href="#" class="aa-secondary-btn">Chi tiết</a>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div>
          <!--  -->
          <div role="tabpanel" class="tab-pane" id="house">
            <div class="aa-latest-properties-content">
              <div class="row">
                <div class="col-md-4">
                  <article class="aa-properties-item">
                    <a href="#" class="aa-properties-item-img">
                      <img src="assets/img/item/1.jpg" alt="img">
                    </a>
                    <div class="aa-tag for-sale">
                      For Sale 3
                    </div>
                    <div class="aa-properties-item-content">
                      <div class="aa-properties-info">
                        <span>5 Rooms</span>
                        <span>2 Beds</span>
                        <span>3 Baths</span>
                        <span>1100 SQ FT</span>
                      </div>
                      <div class="aa-properties-about">
                        <h3><a href="#">Appartment Title</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>                      
                      </div>
                      <div class="aa-properties-detial">
                        <span class="aa-price">
                          $35000
                        </span>
                        <a href="#" class="aa-secondary-btn">Chi tiết</a>
                      </div>
                    </div>
                  </article>
                </div>
                <div class="col-md-4">
                  <article class="aa-properties-item">
                    <a href="#" class="aa-properties-item-img">
                      <img src="assets/img/item/2.jpg" alt="img">
                    </a>
                    <div class="aa-tag for-rent">
                      For Rent
                    </div>
                    <div class="aa-properties-item-content">
                      <div class="aa-properties-info">
                        <span>5 Rooms</span>
                        <span>2 Beds</span>
                        <span>3 Baths</span>
                        <span>1100 SQ FT</span>
                      </div>
                      <div class="aa-properties-about">
                        <h3><a href="#">Appartment Title</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>                      
                      </div>
                      <div class="aa-properties-detial">
                        <span class="aa-price">
                          $11000
                        </span>
                        <a href="#" class="aa-secondary-btn">Chi tiết</a>
                      </div>
                    </div>
                  </article>
                </div>
                <div class="col-md-4">
                  <article class="aa-properties-item">
                    <a href="#" class="aa-properties-item-img">
                      <img src="assets/img/item/3.jpg" alt="img">
                    </a>
                    <div class="aa-tag sold-out">
                      Sold Out
                    </div>
                    <div class="aa-properties-item-content">
                      <div class="aa-properties-info">
                        <span>5 Rooms</span>
                        <span>2 Beds</span>
                        <span>3 Baths</span>
                        <span>1100 SQ FT</span>
                      </div>
                      <div class="aa-properties-about">
                        <h3><a href="#">Appartment Title</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>                      
                      </div>
                      <div class="aa-properties-detial">
                        <span class="aa-price">
                          $15000
                        </span>
                        <a href="#" class="aa-secondary-btn">Chi tiết</a>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div>
          <!--  -->
          <div role="tabpanel" class="tab-pane" id="house-street">
            <div class="aa-latest-properties-content">
              <div class="row">
                <div class="col-md-4">
                  <article class="aa-properties-item">
                    <a href="#" class="aa-properties-item-img">
                      <img src="assets/img/item/1.jpg" alt="img">
                    </a>
                    <div class="aa-tag for-sale">
                      For Sale 4
                    </div>
                    <div class="aa-properties-item-content">
                      <div class="aa-properties-info">
                        <span>5 Rooms</span>
                        <span>2 Beds</span>
                        <span>3 Baths</span>
                        <span>1100 SQ FT</span>
                      </div>
                      <div class="aa-properties-about">
                        <h3><a href="#">Appartment Title</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>                      
                      </div>
                      <div class="aa-properties-detial">
                        <span class="aa-price">
                          $35000
                        </span>
                        <a href="#" class="aa-secondary-btn">View Details</a>
                      </div>
                    </div>
                  </article>
                </div>
                <div class="col-md-4">
                  <article class="aa-properties-item">
                    <a href="#" class="aa-properties-item-img">
                      <img src="assets/img/item/2.jpg" alt="img">
                    </a>
                    <div class="aa-tag for-rent">
                      For Rent
                    </div>
                    <div class="aa-properties-item-content">
                      <div class="aa-properties-info">
                        <span>5 Rooms</span>
                        <span>2 Beds</span>
                        <span>3 Baths</span>
                        <span>1100 SQ FT</span>
                      </div>
                      <div class="aa-properties-about">
                        <h3><a href="#">Appartment Title</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>                      
                      </div>
                      <div class="aa-properties-detial">
                        <span class="aa-price">
                          $11000
                        </span>
                        <a href="#" class="aa-secondary-btn">View Details</a>
                      </div>
                    </div>
                  </article>
                </div>
                <div class="col-md-4">
                  <article class="aa-properties-item">
                    <a href="#" class="aa-properties-item-img">
                      <img src="assets/img/item/3.jpg" alt="img">
                    </a>
                    <div class="aa-tag sold-out">
                      Sold Out
                    </div>
                    <div class="aa-properties-item-content">
                      <div class="aa-properties-info">
                        <span>5 Rooms</span>
                        <span>2 Beds</span>
                        <span>3 Baths</span>
                        <span>1100 SQ FT</span>
                      </div>
                      <div class="aa-properties-about">
                        <h3><a href="#">Appartment Title</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>                      
                      </div>
                      <div class="aa-properties-detial">
                        <span class="aa-price">
                          $15000
                        </span>
                        <a href="#" class="aa-secondary-btn">View Details</a>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  
  <!-- Footer -->
  <footer id="aa-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <div class="aa-footer-area">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="aa-footer-left">
               <p>Designed by <a rel="nofollow" href="#"></a>Team KIKA</p>
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