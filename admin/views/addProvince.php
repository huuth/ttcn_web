
<?php
	require('inc/header.php');
?>
	<div class="container_12">

   <div class="grid_12">

	<div class="module">
		 <h2><span>Thêm tỉnh/thành phố</span></h2>
			
		 <div class="module-body">
			<form action="" method="post">
				<p>
					<label>Tên tỉnh/thành phố</label>
					<input type="text" name="tendanhmuc" value="" class="input-medium" />
				</p>
				<fieldset>
					<input class="submit-green" name="them" type="submit" value="Thêm" /> 
					<input class="submit-gray" name="reset" type="reset" value="Nhập lại" />
				</fieldset>
			</form>
		 </div> <!-- End .module-body -->

	</div>  <!-- End .module -->
	<div style="clear:both;"></div>
</div> <!-- End .grid_12 -->
	<div style="clear:both;"></div>
</div> <!-- End .grid_12 -->
</div>    
	<div style="clear:both;"></div>
	<!-- Footer -->
<?php
	require('inc/footer.php')
?>            