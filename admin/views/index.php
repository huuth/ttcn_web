<?php
	require('inc/header.php');
?>
	<div class="container_12">
		<!-- Account overview -->
		<?php
			if (!isset($_SESSION['user_infor_ad'])){
		?>
			<h5 style="color:red"> Vui lòng đăng nhập để vào trang</h5>
		<?php
			}
		?>
		<div class="grid_main_r" style="float:left">
			<div class="module">
				<h2><span>Quản trị hệ thống</span></h2>
				<div class="module-body">
					<p class="p">
						<strong>Phần mềm được viết trên nền tảng PHP&MySQL</strong>  <br />
						<strong>Tên dự án: </strong><span  style ="margin-left: 20px" > PHÒNG TRỌ 69</span><br />
						<strong>GVHD: </strong> <span  style ="margin-left: 46px" >Võ Đức Hoàng</span><br />
						<strong>Thực hiện: </strong><span  style ="margin-left: 20px" > TEAM TTCN 13T4</span><br />
						<p><strong >Thành viên: </strong></p>
						<p  style ="margin-left: 20px" ><strong >Võ Văn Hoan</strong></p>
						<p style ="margin-left: 20px" ><strong >Trương Thanh Hữu</strong></p>
						<p style ="margin-left: 20px" ><strong>Đặng Thị Thủy Tiên</strong></p>
						<p style ="margin-left: 20px" ><strong>Nguyễn Thị Phương Thảo</strong></p>
						<p style ="margin-left: 20px" ><strong>Nguyễn Thanh Tịnh</strong></p>
					</p>
				</div>
			</div>
			
			<div class="padding-bottom"></div>
		</div> <!-- End .grid_5 -->
	</div>    
	<div style="clear:both;"></div>
	<!-- Footer -->
<?php
	require('inc/footer.php')
?>                 