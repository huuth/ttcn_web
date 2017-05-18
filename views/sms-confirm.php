<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/inc/header.php';?>
	<section id="aa-signin">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-signin-area">
            <div class="aa-signin-form">
              <div class="aa-signin-form-title">
                <a class="aa-property-home" href="index.php">Phòng trọ 69</a>
                <h4>Kết nối với chúng tôi</h4>
                <p>Một mã xác nhận sẽ được gửi đến số điện thoại của bạn trong vòng vài giây nữa. Nhập mã này vào ô bên dưới.</p>
              </div>
              <form class="contactform" name="form" action="index.php?ctr=auth&act=postSMSConfirm" method="post">                                                 
                <div class="aa-single-field">
                  <label for="name"> Mã xác nhận <span class="required">*</span></label>
                  <input type="text" required="required" aria-required="true" value="" name="verify_number">
                </div>                           
                <div style="text-align: center;">
                  <input class="btn btn-primary" type="submit" value="Xác nhận tài khoản" name="submit">                    
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> 
<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/inc/footer.php';?>