<?php
	require('inc/header.php')
?>
	<div class="container_12">

		<div class="grid_12">

	<div class="module">
		 <h2><span>Sửa tin tức</span></h2>
			<script type="text/javascript">
			$().ready(function(){
				$('#fn').validate({
					ignore : [],
					debug : false,
					rules:{
						chitiet : {
							required : function() {
								CKEDITOR.instances.chitiet.updateElement();
							},
							minlength : 10,
						},
						tentin:{
							required:true,
							minlength:20
						},
						mota:{
							required : function() {
								CKEDITOR.instances.mota.updateElement();
							},
							minlength : 10,
						},
					},
					messages:{
						chitiet:{
							required:"<span style='color:red; font-weight:bold'>Chi tiết không được rỗng</span>",
						},
						tentin:{
							required:"<span style='color:red; font-weight:bold'>Tên tin không được rỗng</span>",
							minlength:"<span style='color:red; font-weight:bold'>Nhập tối thiểu 20 kí tự</span>",
						},
						mota:{
							required:"<span style='color:red; font-weight:bold'>Mô tả không được rỗng</span>",
							minlength:"<span style='color:red; font-weight:bold'>Nhập tối thiểu 20 kí tự</span>",
						},
					}
	
					})
				})
			</script>		
		 <div class="module-body">
			<form id='fn' name='fn' action="" enctype="multipart/form-data" method="post">
				<p>
					<label>Tên tin</label>
					<input type="text" name="rent_name" value="Tên nhà trọ xịn xịn =))" class="input-medium" />
				</p>
				<p>
					<label>Giá</label>
					<input type="text" name="price" value="5000" class="input-medium" />
				</p>
				<p>
					<label>Loại tin</label>
					<select  name="type_id" class="input-short">
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
					<br><br>
					<input type="checkbox" name="xoaanh" value="Xoa"> XOA ANH CU
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