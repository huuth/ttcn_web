<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/inc/header.php';?>
  <section id="aa-signin">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-signin-area">
            <div class="aa-signin-form">
              <div class="aa-signin-form-title">
                <a class="aa-property-home" href="index.php">Phòng trọ 69</a>
        
              </div>
              <form class="contactform">                                                 
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