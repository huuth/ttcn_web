
<script language="JavaScript">
	    function checkinput(){
	        password=document.form.password;
	        confirm=document.form.confirm;
	        phone=document.form.phone;
	        reg1=/^[0-9A-Za-z]+[0-9A-Za-z_]*@[\w\d.]+.\w{2,4}$/;
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
	        
	        if(isNaN(phone.value) && phone.value.length>10){
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
		 <h2><span>Thêm người dùng</span></h2>
			
		 <div class="module-body">
			<form action="index.php?ctr=user&act=addUser" name="form" method="post" onsubmit="return checkinput();">
				<p>
					<label>Tên người dùng</label>
					<input type="text" name="username" value="" class="input-medium" />
				</p>
				<p>
					<label>Password</label>
					<input type="password" name="password" required="required"value="" class="input-medium" />
				</p>
				<p>
					<label>Confirm Password</label>
					<input type="password" name="confirm" required="required" value="" class="input-medium" />
				</p>
				<p>
					<label>Họ và tên</label>
					<input type="text" name="fullname" value="" class="input-medium" />
				</p>
				<p>
					<label>SĐT</label>
					<input type="text" name="phone" required="required" value="" class="input-medium" />
				</p>
				<p>
					<label>Email</label>
					<input type="email" name="email" value="" required="required" aria-required="true" class="input-medium" />
				</p>
				<fieldset>
					<input class="submit-green" name="themU" type="submit" value="Thêm" /> 
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