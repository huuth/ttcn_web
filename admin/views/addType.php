
<?php
	require('inc/header.php');
?>
	<div class="container_12">

   <div class="grid_12">

	<div class="module">
		 <h2><span>Thêm loại hình</span></h2>
			
		 <div class="module-body">
			<form action="index.php?ctr=type&act=addType" method="post">
				<p>
					<label>Tên loại hình cho thuê</label>
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