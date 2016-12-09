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
	        
	        if( (isNaN(phone.value)) || (phone.value.length < 8)) {
	            alert("Vui lòng nhập số điện thoại hợp lệ");
	            phone.focus();
	            return false;
	        }
	        return true;
	    }
</script>
<?php
	require('inc/header.php');
?>
	<div class="container_12">

		<div class="grid_12">

			<div class="module">
				 <h2><span>Sửa người dùng</span></h2>
				 <div class="module-body">
					<form name="form" action="index.php?ctr=user&act=editUser&currentPage=<?php echo $_GET['currentPage']?>&idUser=<?php echo $data['user_id']?>" method="post" onsubmit="return checkinput();">
						<p style='color: red' >
							<strong><?php echo $data['username']?></strong>
						</p>
						<p>
							<label>Password</label>
							<input type="password" name="password" id="password" value="" class="input-medium" required="required"/>
						</p>
						<p>
							<label>Confirm Password</label>
							<input type="password" required="required" name="confirm" id="confirmPassword" value="" class="input-medium" />
						</p>
						<p>
							<label>Họ và tên ( tên hiện thị) </label>
							<input type="text" name="fullname" required="required" value="<?php echo $data['name_display']?>" class="input-medium" />
						</p>
						<p>
							<label>SĐT</label>
							<input type="text" required="required" name="phone" value="<?php echo $data['phone']?>" class="input-medium" />
						</p>
						<p>
							<label>Email</label>
							<input type="email" required="required" name="email" value="<?php echo $data['email']?>" class="input-medium" />
						</p>
						<p>
							<label>Quyền truy cập </label>
							<?php 
					 	       if ($data['auth']=='0'){
					 	    ?>
					 	    	<select name="auth" class="input-short">
									<option value="0" selected="selected">Thành viên</option>
									<option value="1">Admin</option>
								</select>
					 	    <?php   	
					 	       } 
					 	       else{
					 	    ?>
					 	       	
					 	       	<select name="auth" class="input-short">
									<option value="0" >Thành viên</option>
									<option value="1" selected="selected">Admin</option>
								</select>
							<?php	
					 	       }
				 	    	?> 
							
						</p>
						<fieldset>
							<input class="submit-green" name="suaU" type="submit" value="Sửa" /> 
							<input class="submit-gray" name="reset" type="reset" value="Nhập lại" />
						</fieldset>
					</form>
				 </div> <!-- End .module-body -->

				</div>  <!-- End .module -->
			<div style="clear:both;"></div>
		</div> <!-- End .grid_12 -->
	</div>    
	<div style="clear:both;"></div>
	<!-- Footer -->
<?php
	require('inc/footer.php')
?>