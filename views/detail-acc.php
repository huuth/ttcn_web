

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
<section id="aa-properties" class="detail-account">

   <div class="edit-infor container">
      <div class="row">
         <div class="col-md-8">
            <div class="title-header">
               <h3>Thông tin tài khoản</h3>
            </div>
            <form class="content" method="post" action="" id="edit-account">
               <div class="form-group row" id="register_name">
                  <div class="col-md-3">
                     <label class="control-label" for="pasword">Giới tính:</label>
                  </div>                  
                  <div class="col-md-9">
                     <div class="row">
                        <div class="col-md-3">
                           <label for="male"><input type="radio" checked name="optradio">Nam</label>
                        </div>
                        <div class="col-md-3">
                           <label for="female"><input type="radio" name="optradio">Nữ</label>
                        </div>
                     </div>                     
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-3">
                     <label class="control-label" for="full_name">Họ Tên </label>
                  </div>
                  <div class="col-md-9">             
                     <input type="text" enable name="full_name" class="form-control" id="full_name" value="Phương Thảo" placeholder="Họ tên">
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-3">
                     <label class="control-label" for="full_name">Số điện thoại </label>
                  </div>
                  <div class="col-md-9">            
                     <input type="text" enable name="full_name" class="form-control" id="phone" value="0123456789">               
                  </div>
               </div>
            
               <div class="form-group row">
                  <div class="col-md-3">
                     <label class="control-label" for="email">Email</label>
                  </div>
                  <div class="col-md-9">            
                     <input type="email" disabled="" value="heligrass.puta154@gmail.com" class="form-control" name="email" id="email" placeholder="Email">            
                  </div>
               </div> 
               <div class="form-group row">
                  <div class="col-md-3">
                     <label class="control-label" for="email">Tỉnh / thành phố</label>
                  </div>
                  <div class="col-md-9">
                     <select class="form-control" id="province" name="province_id">                              
                     </select>
                  </div>  
               </div>                                                             
               <div class="form-group row">
                  <div class="col-md-3">
                     <label class="control-label" for="email">Quận /  huyện</label>
                  </div>
                  <div class="col-md-9">
                     <select class="form-control" id="distict" name="district_id">    
                        <option value="0" selected="selected">&laquo;Chọn quận /  huyện&raquo;</option>           
                     </select>
                  </div>                 
               </div>                 
               <div class="form-group row">
                  <div class="col-md-3">
                     <label class="control-label" for="email">Phường / xã</label>
                  </div>
                  <div class="col-md-9">
                     <select class="form-control" id="ward" name="ward_id">  
                        <option value="0" selected="selected">&laquo;Chọn phường / xã&raquo;</option>             
                     </select>
                  </div>               
               </div>                                      
               <div class="title-header">
                  <h3>Thay đổi mật khẩu.</h3>
               </div>            
               <div class="password-group">
                   <div class="form-group row">
                        <div class="col-md-3">
                           <label class="control-label" for="old_password">Mật khẩu cũ</label>   
                        </div>                           
                        <div class="col-md-9">
                           <input type="password" name="old_password" class="form-control" id="old_password" value="" autocomplete="off" placeholder="Nhập mật khẩu cũ">                           
                       </div>
                   </div>
                   <div class="form-group row">
                        <div class="col-md-3">
                           <label class="control-label" for="new-password">Mật khẩu mới</label>   
                        </div>                        
                        <div class="col-md-9">
                           <input type="password" name="new_password" class="form-control" id="new_password" value="" autocomplete="off" placeholder="Nhập mật khẩu mới">                           
                        </div>
                   </div>
                   <div class="form-group row">
                        <div class="col-md-3">
                           <label class="control-label" for="re_new_password">Nhập lại</label>   
                        </div>
                        
                        <div class="col-md-9">
                           <input type="password" name="re_new_password" class="form-control" id="re_new_password" value="" autocomplete="off" placeholder="Nhập lại mật khẩu mới">                           
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
      </div>
      <div class="row">
         <div class="right-bar col-md-12">
            <div class="title-header">
               
            </div>
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
                        <td>
                            <a href="/sales/order/view?code=81432288">
                                <?php echo $rent['rent_id']?>
                            </a>
                        </td>
                        <td>
                            <?php echo $rent['post_time']?>
                        </td>
                        <td>
                            <?php if(isset($rent['drop_time'])){
                           echo $rent['drop_time']; }?>
                        </td>
                        <td>
                            <a href="index.php?ctr=detail&act=getIndex&rent_id=<?php echo $rent['rent_id'];?>">
                                <?php echo $rent['rent_name']?>
                            </a>
                        </td>
                        <td><span class="color-2">Đã duyệt</span></td>
                     </tr>
                     <?php endforeach; ?>
                  </tbody>
               </table>
           </div>
         </div>    
      </div>  <!-- row -->

   </div>      <!-- container  -->
</section>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/inc/footer-menu.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/inc/footer.php';?>