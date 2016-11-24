
<?php
	require('inc/header.php');
?>
	<div class="container_12">

		<div class="grid_12">

	<div class="module">
		 <h2><span>Thêm tin tức</span></h2>		
		 <div class="module-body">
			<form id='fn' name='fn' action="" enctype="multipart/form-data" method="post">
				<p>
					<label>Tên tin</label>
					<input type="text" name="tentin" value="" class="input-medium" />
				</p>
				<p>
					<label>Giá</label>
					<input type="text" name="gia" value="" class="input-medium" />
				</p>
				<p>
					<label>Danh mục tin</label>
					<select  name="danhmuc" class="input-short">
						<option selected :'selected' value="">Phòng trọ</option>
						<option selected :'selected' value="">Căn hộ</option>
						<option selected :'selected' value="">Bla bla</option>
					</select>
				</p>
				<p>
					<label>Hình ảnh</label>
					<input type="file"  name="hinhanh" value="" />
					<br><br>
					   <img style='width:100px; height:100px' alt="Ảnh ảnh" src="">
				</p>
				<p>
					<label>Diện tích</label>
					<input type="text" name="dientich" value="5000" class="input-medium" />
				</p>
				<p>
					<label>Tỉnh/thành phố </label>
					<select  name="danhmuc" class="input-short">
						<option value="1">Đà Nẵng</option>
						<option value="2">Hồ Chí Minh</option>
						<option value="3">Hà Nội</option>
						<option value="4">Đà Lạt</option>
					</select>
				</p>
				<p>
					<label>Quận/huyện</label>
					<select  name="danhmuc" class="input-short">
						<option value="1">Sơn Trà</option>
					</select>
				</p>
				<p>
					<label>Phường/ xã</label>
					<select  name="danhmuc" class="input-short">
						<option value="1">bla bla</option>
					</select>
				</p>
				<p>
					<label>Mô tả</label>
					<textarea id="mota" name="mota" value="" rows="7" cols="90" class="input-medium" > bla bla</textarea>
				</p>
				<p>
					<input type="checkbox" name="status" value="1"> Status 
				</p>
				<fieldset>
					<input class="submit-green" name="them" type="submit" value="Thêm tin" /> 
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