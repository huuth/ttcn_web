 <script language="JavaScript">
       function checkinput(){
           new_password=document.form.new_password;
           old_password= document.form.old_password;
           confirm=document.form.confirm;
           phone=document.form.phone;
           
           if(old_password != ""){
            if(new_password.value.length<6){
             alert("Mật khẩu phải có ít nhất 6 ký tự");
               confirm.focus();
               return false;
           }
            if(confirm.value!==new_password.value){
               alert("Xác nhận mật khẩu không khớp");
               confirm.focus();
               return false;
           }
           
           if( (isNaN(phone.value)) || (phone.value.length < 8)) {
               alert("Vui lòng nhập số điện thoại hợp lệ");
               phone.focus();
               return false;
           }
           }
           return true;
       }
</script>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/inc/header.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/inc/navigator.php';
   require_once $_SERVER['DOCUMENT_ROOT'].'/models/Rent.php';
   require_once $_SERVER['DOCUMENT_ROOT'].'/models/User.php';
   require_once $_SERVER['DOCUMENT_ROOT'].'/models/Type.php';
   require_once $_SERVER['DOCUMENT_ROOT'].'/models/Address.php';
   require_once $_SERVER['DOCUMENT_ROOT'].'/libs/CVarDumper.php';?>
  
   

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
               <?php $user = $data['user'];

                   if(isset($_SESSION['check_pass'])){
                     if($_SESSION['check_pass'] == -1){
                        echo '<h4 style="color:red">Mật khẩu hiện tại không đúng</h4>';
                        unset($_SESSION['check_pass']);
                    }
                  }
                 ?> 
            </div>
            <form class="content" name="form" method="post" onsubmit="return checkinput();" action="index.php?ctr=account&act=editUser&user_id=<?php echo $user['user_id']?>" >
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
                     <label class="control-label" for="full_name">Username </label>
                  </div>
                  <div class="col-md-9">             
                     <input type="text" disabled="" class="form-control" id="full_name" value='<?php echo $user['username']?>' placeholder="Họ tên">
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-3">
                     <label class="control-label" for="full_name">Họ Tên </label>
                  </div>
                  <div class="col-md-9">             
                     <input type="text" name="full_name" class="form-control" required="required" value='<?php echo $user['name_display']?>' placeholder="Họ tên">
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-3">
                     <label class="control-label">Số điện thoại </label>
                  </div>
                  <div class="col-md-9">            
                     <input type="text" required="required" name="phone" class="form-control"  value='<?php echo $user['phone']?>'>               
                  </div>
               </div>
            
               <div class="form-group row">
                  <div class="col-md-3">
                     <label class="control-label" for="email">Email</label>
                  </div>
                  <div class="col-md-9">            
                     <input type="email" readonly="readonly" value='<?php echo $user['email']?>' class="form-control" name="email"  placeholder="Email">            
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
                     </select>
                  </div>                 
               </div>                 
               <div class="form-group row">
                  <div class="col-md-3">
                     <label class="control-label" for="email">Phường / xã</label>
                  </div>
                  <div class="col-md-9">
                     <select class="form-control" id="ward" name="ward_id">  
                     </select>
                  </div>               
               </div>   
              <div class="title-header">
                  <h3>Thay đổi mật khẩu.</h3>
               </div>
               <div class="password-group">
                   <div class="form-group row">
                        <div class="col-md-3">
                           <label class="control-label">Mật khẩu cũ</label>  
                           
                        </div>                           
                        <div class="col-md-9">
                           <input type="password" name="old_password" class="form-control" value="" autocomplete="off" >                           
                       </div>
                   </div>

                   <div class="form-group row">
                        <div class="col-md-3">
                           <label class="control-label" for="new-password">Mật khẩu mới</label>   
                        </div>                        
                        <div class="col-md-9">
                           <input type="password" name="new_password" class="form-control" value="" autocomplete="off" >                           
                        </div>
                   </div>
                   <div class="form-group row">
                        <div class="col-md-3">
                           <label class="control-label" >Nhập lại</label>   
                        </div>
                        
                        <div class="col-md-9">
                           <input type="password" name="confirm" class="form-control" value="" autocomplete="off" >                           
                        </div>
                   </div>
               </div> 
               <div class="form-group">
                   <div class="input-wrap">
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
                  if (!empty($data['user']['rent'])){
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
                        <td><span class="color-2">
                           <?php if($rent['status']==1){
                                    echo 'Đã duyệt';
                                 }elseif ($rent['status']==0) {
                                    echo 'Đã ẩn';
                                 }else{
                                    echo 'Không được duyệt';
                                 }
                              ?>
                        </span></td>
                     </tr>
                     <?php endforeach;} ?>
                  </tbody>
               </table>
           </div>
         </div>    
      </div>  <!-- row -->

   </div>      <!-- container  -->
</section>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/inc/footer-menu.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/inc/footer.php';?>