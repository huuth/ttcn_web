<?php
	require('inc/header.php');
?>
	<div class="container_12">

		<div class="bottom-spacing">
	  <!-- Button -->
	  <div class="float-left">
		  <a href="" class="button">
			<span>Thêm người dùng <img src="images/plus-small.gif" alt="Thêm người dùng"></span>
		  </a>
	  </div>
	  <div class="clear"></div>
</div>

<div class="grid_12">
	<!-- Example table -->
	<div class="module">
		<h2><span>Danh sách người dùng</span></h2>
		
		<div class="module-table-body">
			<form action="">
			<table id="myTable" class="tablesorter">
				<thead>
					<tr>
						<th style="width:5%; text-align: center;">ID</th>
						<th>Username</th>
						<th style="width:25%">Họ Tên</th>
						<th style="width:15%; text-align: center;">Chức năng</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="align-center">001</td>
						<td><a href="">thuytiendang206</a></td>
						<td>Đặng Thị Thủy Tiên</td>
						<td align="center">
							<a href="">Sửa <img src="images/pencil.gif" alt="edit" /></a>
							<a href="">Xóa <img src="images/bin.gif" width="16" height="16" alt="delete" /></a>
						</td>
					</tr>
				</tbody>
			</table>
			</form>
		 </div> <!-- End .module-table-body -->
	</div> <!-- End .module -->
		 <div class="pagination">           
			<div class="numbers">
				<span>Trang:</span> 
				<a href="">1</a> 
				<span>|</span> 
				<a href="">2</a> 
				<span>|</span> 
				<span class="current">3</span> 
				<span>|</span> 
				<a href="">4</a> 
				<span>|</span> 
				<a href="">5</a> 
				<span>|</span> 
				<a href="">6</a> 
				<span>|</span> 
				<a href="">7</a>
				<span>|</span> 
				<a href="">8</a> 
				<span>|</span> 
				<a href="">9</a>
				<span>|</span> 
				<a href="">10</a>   
			</div>	
		</div> 
			<div style="clear: both;"></div> 
		 </div>
	
</div> <!-- End .grid_12 -->
	<div style="clear:both;"></div>
</div> <!-- End .grid_12 -->
	</div>    
	<div style="clear:both;"></div>
	<!-- Footer -->
<?php
	require('inc/footer.php')
?>                