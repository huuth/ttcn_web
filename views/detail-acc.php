

<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/inc/header.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/inc/navigator.php';
   require_once $_SERVER['DOCUMENT_ROOT'].'/models/Rent.php';
   require_once $_SERVER['DOCUMENT_ROOT'].'/models/User.php';
   require_once $_SERVER['DOCUMENT_ROOT'].'/models/Type.php';
   require_once $_SERVER['DOCUMENT_ROOT'].'/models/Address.php';?>

<section id="aa-property-header">
        <div class="container1">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-property-header-inner">
                        <h2>Thông tin chi tiết</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">TRANG CHỦ</a></li>
                            <li class="active">Đăng tin</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="aa-properties">
    <?php $user = $data['user']?>
      </div>
      <div class="edit-infor" style=" width: 25%; padding: 0 0 0 30px; margin: auto">
         <form class="content" method="post" action="" id="edit-account">
   <div class="form-group gender-select-wrap" id="register_name">
      <label class="control-label" for="pasword">Giới tính:</label>
      <div class="input-wrap">
         <div class="row">
            <form>
               <input name="gioitinh" type="radio" value="m" />Nam<br />
               <input name="gioitinh" type="radio" value="f" />Nữ<br />
            </form>
         </div>
         
      </div>
   </div>
   <div class="form-group">
      <label class="control-label" for="full_name">Họ Tên </label>
      <div class="input-wrap">
         <input type="text" enable name="full_name" class="form-control" id="full_name" value='
         <?php echo $user['username'] ?>' placeholder="Họ tên">
         <span class="help-block"></span>
      </div>
   </div>
   <div class="form-group">
      <label class="control-label" for="full_name">Số điện thoại </label>
      <div class="input-wrap">
         <input type="text" enable name="full_name" class="form-control" id="phone" value='
         <?php echo $user['phone'] ?>' >
         <span class="help-block"></span>
      </div>
   </div>
   <div class="form-group">
      <label class="control-label" for="email">Email</label>
      <div class="input-wrap">
         <input type="email" disabled="" value='
         <?php echo $user['email'] ?>' class="form-control" name="email" id="email" placeholder="Email">
      </div>
   </div>
   <div class="form-group">
      <div class="input-wrap">
         <label for="change-password" class="icheck-wrap">
            Thay đổi mật khẩu.
         </label>
      </div>
   </div>
   <div class="password-group">
      <div class="form-group">
         <label class="control-label" for="old_password">Mật khẩu cũ</label>
         <div class="input-wrap">
            <input type="password" name="old_password" class="form-control" id="old_password" value="" autocomplete="off" placeholder="Nhập mật khẩu cũ">
            <span class="help-block"></span>
         </div>
      </div>
      <div class="form-group">
         <label class="control-label" for="new-password">Mật khẩu mới</label>
         <div class="input-wrap">
            <input type="password" name="new_password" class="form-control" id="new_password" value="" autocomplete="off" placeholder="Nhập mật khẩu mới">
            <span class="help-block"></span>
         </div>
      </div>
      <div class="form-group">
         <label class="control-label" for="re_new_password">Nhập lại</label>
         <div class="input-wrap">
            <input type="password" name="re_new_password" class="form-control" id="re_new_password" value="" autocomplete="off" placeholder="Nhập lại mật khẩu mới">
            <span class="help-block"></span>
         </div>
      </div>
   </div>
   <div class="form-group">
      <div class="input-wrap">
         <input type="hidden" name="customer_birthdate" value="1995-04-15">
         <button type="submit" class="btn btn-info btn-block btn-update">Cập nhật</button>
      </div>
   </div>
</form>
      </div>
      <div class="right-bar col-md-9">
         <div class="dashboard-header">
            <h2>Các tin đã đăng</h2>
            <a href="/sales/order/history">Xem tất cả</a>
         </div>
         <div>

            <table class="table" border="1px">
               <thead>
                  <tr>
                     <th>
                        <span class="hidden-xs hidden-sm hidden-md">Mã tin</span>
                        <span class="hidden-lg">Code</span>
                     </th>
                     <th>Ngày đăng</th>
                     <th width="150px">Ngày ẩn</th>
                     <th>Tên tin</th>
                     <th width="150px">Trạng thái</th>
                  </tr>
               </thead>
               <?php 
                  foreach($data['user']['rent'] as $rent):?>
               <tbody>
                  <tr>
                     <td><a href="/sales/order/view?code=81432288"><?php echo $rent['rent_id']?></a></td>
                     <td><?php echo $rent['post_time']?></td>
                     <td><?php if(isset($rent['drop_time'])){
                           echo $rent['drop_time']; }?></td>
                     <td><a href="index.php?ctr=detail&act=getIndex&rent_id=<?php echo $rent['rent_id'];?>">      <?php echo $rent['rent_name']?></a></td>
                     <td><span class="color-2">Đã duyệt</span></td>
                  </tr>
                  <?php endforeach; ?>
               </tbody>
            </table>
         </div>
      <div class="container">
      
      <input type="hidden" name="TIKI_CSRF_TOKEN" value="61ad631ea5b9d876dbd38ed561fe422b" />
      <!-- END TOKEN -->
</section>
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
<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/inc/footer.php';?>