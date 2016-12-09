<?php require_once $_SERVER['DOCUMENT_ROOT'].'/libs/CVarDumper.php';
 // dump($data);
?>
<?php
	require('inc/header.php');
?>
	<div class="container_12">

		<div class="grid_12">

	<div class="module">
		 <h2><span>Thêm tin tức</span></h2>		
		 <div class="module-body">
			<form id='fn' name='fn' action="index.php?ctr=rents&act=getAdd" enctype="multipart/form-data" method="post">
				<p>
					<label>Tên tin</label>
					<input type="text" name="rent_name" value="" class="input-medium" />
				</p>
				<p>
					<label>Giá</label>
					<input type="text" name="price" value="" class="input-medium" />
				</p>
				<p>
					<label>Loại tin</label>
					<select  name="type_id" class="input-short">
					<?php 

						foreach ($data["type"] as $value) {
												
					 ?>
						<option selected :'selected' value=""><?php echo $value['type_name'] ?></option>
						
					<?php
						}
					?>
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
					<input type="text" name="square" value="5000" class="input-medium" />
				</p>
				<p>
					<label>Tỉnh/thành phố </label>
					<select  name="province_id" class="input-short">
						<option value="1">Đà Nẵng</option>
						<option value="2">Hồ Chí Minh</option>
						<option value="3">Hà Nội</option>
						<option value="4">Đà Lạt</option>
					</select>
				</p>
				<p>
					<label>Quận/huyện</label>
					<select  name="district_id" class="input-short">
						<option value="1">Sơn Trà</option>
					</select>
				</p>
				<p>
					<label>Phường/ xã</label>
					<select  name="ward_id" class="input-short">
						<option value="1">bla bla</option>
					</select>
				</p>
				<p>
					<label>Mô tả</label>
					<textarea id="mota" name="describe_rent" value="" rows="7" cols="90" class="input-medium" > bla bla</textarea>
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