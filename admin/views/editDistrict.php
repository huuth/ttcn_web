<?php
	require('inc/header.php');
?>
	<div class="container_12">
		<div class="grid_12">
			<div class="module">
				 <h2><span>Sửa tên quận/huyện</span></h2>
				 <div class="module-body">
					<form action="" method="post">
						<p>
							<label>Tên quận/huyện</label>
							<input type="text" name="tendanhmuc" value="Tên cần sửa" class="input-medium" />
						</p>
						<p>
							<label>Thuộc tỉnh / thành phố </label>
							<select  name="danhmuc" class="input-short">
								<option value="1">Đà Nẵng</option>
								<option value="2">Hồ Chí Minh</option>
								<option value="3">Hà Nội</option>
								<option value="4">Đà Lạt</option>
							</select>
						</p>
						<fieldset>
							<input class="submit-green" name="sua" type="submit" value="Sửa" /> 
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