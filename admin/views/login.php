<?php
	require('inc/header.php');
?>
	<div class="container_12">
		<!-- Account overview -->
		<div class="grid_main_r" style="float:left">
			<div class="module">
				<h2> Đăng nhập</h2>
				<div class="module-body">
					<form action="" method="post">
						<p>
							<label>Email</label>
							<input type="text" name="email" value="" class="input-medium" />
						</p>
						<p>
							<label>Password</label>
							<input type="password" name="password" value="" class="input-medium" />
						</p>
						<fieldset>
							<input class="submit-green" name="login" type="submit" value="Đăng nhập" /> 
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>    
	<div style="clear:both;"></div>
	<!-- Footer -->
<?php
	require('inc/footer.php')
?>              