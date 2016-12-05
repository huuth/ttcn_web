<?php require_once $_SERVER['DOCUMENT_ROOT'].'/libs/CVarDumper.php';
 //dump($data);
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
        <form action="index.php" method="get" accept-charset="utf-8">
          <input type="hidden" name="ctr" value="search">
          <input type="hidden" name="act" value="getRent">
          <div class="aa-advance-search-top">
            <div class="row" style="margin-bottom: 10px;">              
              <div class="col-md-4">
                <div class="aa-single-advance-search">
                  <select id="province" name="province_id">                              
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="aa-single-advance-search">
                  <select id="distict" name="district_id">    
                    <option value="0" selected="selected">&laquo;Chọn quận /  huyện&raquo;</option>                             
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="aa-single-advance-search">
                  <select id="ward" name="ward_id">  
                    <option value="0" selected="selected">&laquo;Chọn phường / xã&raquo;</option>                              
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                 <div class="aa-single-advance-search">
                  <select name="type_id">                    
                  </select>
                </div>
              </div>
              <div class="col-md-4">
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
              </div>
              <div class="col-md-4">
                <div class="aa-single-advance-search">
                  <button class="aa-search-btn" type="submit">Tìm kiếm</button>
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
        <!-- $typeId = $type['type_id'];
      $typeName = $type['type_name']; -->
        <ul class="nav nav-tabs" role="tablist">
          <li><h3 class="latest-news">TIN MỚI NHẤT</h3></li>
          <?php if(isset($data['typeList'])): ?>

          <?php 
            $count = 0; 
            foreach ($data['typeList'] as $type){
              if($count == 0){
                echo '<li role="presentation" class="active"><a href="#id_'.$type['type_id'].'" aria-controls="motel" role="tab" data-toggle="tab">'.$type['type_name'].'</a></li>';
              }else{
                echo '<li role="presentation"><a href="#id_'.$type['type_id'].'" aria-controls="motel" role="tab" data-toggle="tab">'.$type['type_name'].'</a></li>';
              }
              $count++;
            }
          ?>

          <?php else:?>
            <li role="presentation" class="active"><a href="#motel" aria-controls="motel" role="tab" data-toggle="tab">Phòng trọ, nhà trọ</a></li>
            <li role="presentation"><a href="#apartment" aria-controls="apartment" role="tab" data-toggle="tab">Chung cư, căn hộ</a></li>
            <li role="presentation"><a href="#house" aria-controls="house" role="tab" data-toggle="tab">Nhà nguyên căn</a></li>
            <li role="presentation"><a href="#house-street" aria-controls="house-street" role="tab" data-toggle="tab">Nhà mặt phố</a></li>
          <?php endif;?>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
        <?php 
          if(isset($data['arrayRent'])): 
          $count = 0;
          foreach ($data['arrayRent'] as $key => $arrayRent)://foreach 1            
          $count++;
        ?>
          <div role="tabpanel" class="tab-pane <?php if($count == 1) echo 'active';?>" id="<?php echo 'id_' . $key; ?>">  
            <div class="aa-latest-properties-content">
              <div class="row">
              <?php 
              foreach ($arrayRent as $key => $rent): 
              if($rent['status'] == 1):
               ?>
              <div class="col-md-4">
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
              </div><!-- col-md-4 -->

              <?php 
              endif;
              endforeach; 
              ?>
              </div><!-- row -->
            </div>
          </div><!-- tabpanel -->

        <?php endforeach;?> <!-- foreach 1 -->
        <?php endif; ?>          
        </div>
      </div>
    </div>
  </section>
  
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/views/inc/footer-menu.php';?> 

 
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