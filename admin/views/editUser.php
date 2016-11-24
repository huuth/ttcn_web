<?php
	require('inc/header.php');
?>
		<div style="clear: both;"></div>
		<!-- Sub navigation -->
		<div id="subnav">
			<div class="container_12">
				<div class="grid_12">
					<ul>
						<li><a href="indexNews.html">Tin tức</a></li>
						<li><a href="indexCat.html">Danh mục</a></li>
					</ul>

				</div><!-- End. .grid_12-->
			</div><!-- End. .container_12 -->
			<div style="clear: both;"></div>
		</div> <!-- End #subnav -->
	</div> <!-- End #header -->
	<div class="container_12">

		<div class="grid_12">

			<div class="module">
				 <h2><span>Sửa người dùng</span></h2>
				 <div class="module-body">
					<form action="" method="post">
						<p style='color: red' >
							<strong>thuytiendang206</strong>
						</p>
						<p>
							<label>Password</label>
							<input type="password" name="password" value="" class="input-medium" />
						</p>
						<p>
							<label>Họ và tên</label>
							<input type="text" name="fullname" value="Đặng Thị Thủy Tiên" class="input-medium" />
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
<?php
	require('inc/footer.php')
?>