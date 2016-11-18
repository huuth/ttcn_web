<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/inc/header.php';?>
  <section id="aa-signin">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-signin-area">
            <div class="aa-signin-form">
              <div class="aa-signin-form-title">
                <a class="aa-property-home" href="index.php">Phòng trọ 69</a>
                <?php 
                  if(isset($_SESSION['success'])){
                    if($_SESSION['success'] == 1){
                      echo '<div class="success"><h3>Bạn đã đăng kí thành công</h3><h4>Mời bạn đăng nhập</h4></div>';
                      unset($_SESSION['success']);
                    }
                  }
                  if(isset($_SESSION['warning'])){
                    if($_SESSION['warning'] == 1){
                      echo '<p class="warning" style="color:red">Email và mật khẩu không hợp lệ</p>';
                      unset($_SESSION['warning']);
                    }
                  }
                 ?>
              </div>
              <form class="contactform" action='index.php?ctr=auth&act=postLogin' method="post">                                                 
                <div class="aa-single-field">
                  <label for="email">Email <span class="required">*</span></label>
                  <input type="email" required="required" aria-required="true" value="" name="email">
                </div>
                <div class="aa-single-field">
                  <label for="password">Mật khẩu <span class="required">*</span></label>
                  <input type="password" required="required" name="password"> 
                </div>
                <div class="aa-single-field">
                <label>
                  <input type="checkbox"> Lưu mật khẩu
                </label>                                                          
                </div> 
                <div class="aa-single-submit">
                  <input type="submit" value="Đăng nhập" class="aa-browse-btn" name="submit">  
                  <p>Bạn chưa có tài khoản ? <a href="index.php?ctr=auth&act=getRegister">Đăng ký tại đây!</a></p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/inc/footer.php';?>