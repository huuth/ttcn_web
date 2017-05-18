<script language="JavaScript">
    function checkinput(){
        password=document.form.password;
        confirm=document.form.confirm;
        phone=document.form.phone;
        if(password.value.length<6){
          alert("Mật khẩu phải có ít nhất 6 ký tự");
            confirm.focus();
            return false;
        }
        if(confirm.value!==password.value){
            alert("Xác nhận mật khẩu không khớp");
            confirm.focus();
            return false;
        }
        
        if(isNaN(phone.value) || (phone.value.length < 8)){
            alert("Vui lòng nhập số điện thoại hợp lệ");
            phone.focus();
            return false;
        }
        return true;
    }
</script>
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
              </div>
              <form class="contactform" name="form" action="index.php?ctr=auth&act=postRegister" method="post" onsubmit="return checkinput();">                                                 
                <div class="aa-single-field">
                  <label for="name">Tên đăng nhập <span class="required">*</span></label>
                  <input type="text" required="required" aria-required="true" value="" name="name">
                </div>
                <div class="aa-single-field">
                  <label for="email">Email <span class="required">*</span></label>
                  <input type="email" required="required" aria-required="true" value="" name="email">
                  <?php                   
                    if(isset($_SESSION['existed_mail'])){
                      if($_SESSION['existed_mail'] == 1){
                        echo '<p style="color:red;">Email đã tồn tại</p>';
                        unset($_SESSION['existed_mail']);
                      }
                    } 
                  ?>
                </div>
                <div class="aa-single-field">
                  <label for="password">Số điện thoại <span class="required">*</span></label>

                  <input type="text" required="required" name="phone"> 
                </div>
                <div class="aa-single-field">
                  <label for="password">Mật khẩu <span class="required">*</span></label>
                  <input type="password" required="required" name="password"> 
                </div>
                <div class="aa-single-field">
                  <label for="confirm-password">Xác nhận mật khẩu <span class="required">*</span></label>
                  <input type="password" required="required" name="confirm"> 
                </div>
                <div class="aa-single-submit">
                  <input type="submit" value="Tạo tài khoản" name="submit">                    
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> 

<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/inc/footer.php';?>
