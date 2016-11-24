
<?php
	require('inc/header.php');
?>
	<div class="container_12">

		<div class="grid_12">

	<div class="module">
		 <h2><span>Thêm người dùng</span></h2>
			
		 <div class="module-body">
			<form action="" method="post">
				<p>
					<label>Tên người dùng</label>
					<input type="text" name="username" value="" class="input-medium" />
				</p>
				<p>
					<label>Password</label>
					<input type="password" name="password" value="" class="input-medium" />
				</p>
				<p>
					<label>Họ và tên</label>
					<input type="text" name="fullname" value="" class="input-medium" />
				</p>
				<p>
					<label>SĐT</label>
					<input type="text" name="phone" value="" class="input-medium" />
				</p>
				<p>
					<label>Email</label>
					<input type="text" name="email" value="" class="input-medium" />
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