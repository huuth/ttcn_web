<?php
	require('inc/header.php');
?>
	<div class="container_12">

		<div class="grid_12">

			<div class="module">
				 <h2><span>Sửa người dùng</span></h2>
				 <div class="module-body">
					<form action="index.php?ctr=user&act=editUser" method="post">
						<p style='color: red' >
							<strong><?php echo $data['username']?></strong>
						</p>
						<p>
							<label>Password</label>
							<input type="password" name="password" id="password"value="" class="input-medium" />
						</p>
						<p>
							<label>confirmPassword</label>
							<input type="password" name="confirmPassword" id="confirmPassword" value="" onChange="checkPasswordMatch();" class="input-medium" />
						</p>
						 <p><div class="registrationFormAlert" id="divCheckPasswordMatch"></div></p>
						<p>
							<label>Họ và tên</label>
							<input type="text" name="fullname" value="<?php echo$data['name_display']?>" class="input-medium" />
						</p>
						<p>
							<label>SĐT</label>
							<input type="text" name="phone" value="<?php echo$data['phone']?>" class="input-medium" />
						</p>
						<p>
							<label>Email</label>
							<input type="text" name="email" value="<?php echo$data['email']?>" class="input-medium" />
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
	<script type="text/javascript">
		function checkPasswordMatch() {
   			var password = $("#password").val();
		    var confirmPassword = $("#confirmPassword").val();

		    if (password != confirmPassword)
		        $("#divCheckPasswordMatch").html("Passwords do not match!");
		    else
		        $("#divCheckPasswordMatch").html("Passwords match.");
		}
	</script>
<?php
	require('inc/footer.php')
?>