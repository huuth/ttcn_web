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
            <div class="col-md-9 col-sm-12 col-xs-12">
              <div class="aa-footer-right">
                <a href="#">TRANG CHỦ</a>
                <?php if(isset($data['typeList'])): ?>
                  <?php foreach($data['typeList'] as $type): ?>
                  <a style="text-transform: uppercase;" href="index.php?ctr=search&act=getRent&type_id=<?php echo $type['type_id'];?>"><?php echo $type['type_name']; ?></a>
                  <?php endforeach; ?>
                <?php endif; ?>     
              </div>
            </div>            
          </div>
        </div>
      </div>
      </div>
    </div>
  </footer>
  <!-- / Footer -->