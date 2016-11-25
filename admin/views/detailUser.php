
<?php
	require('inc/header.php');
?>

	<div class="container_12">

		<div class="grid_12">

			<div class="module">
				 <div class="module-body">
				 	<p><strong>Username: </strong><?php echo $data[0]['username']?></p>
				 	<p><strong>Họ tên: </strong><?php echo$data[0]['name_display']?></p>
				 	<p><strong>Số điện thoại: </strong><?php echo$data[0]['phone']?></p>
				 	<p><strong>Email: </strong><?php echo$data[0]['email']?></p>
				 	<p><strong>Giới tính: </strong><?php echo$data[0]['gender']?></p>
				 	<p><strong>Ảnh: </strong><?php echo$data[0]['image_url']?></p>
				 	<p><strong>Quyền: </strong>
				 	    <?php 
				 	       if ($data[0]['auth']=='0') echo "Thành viên";
				 	       else echo "Admin";
				 	    ?>
				 	</p>
				 	<p><strong>Địa chỉ: </strong><?php echo$data[0]['address_detail']?></p>
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
