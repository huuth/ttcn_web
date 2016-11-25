<?php
	require('inc/header.php');
?>

	<div class="container_12">
		<div class="bottom-spacing">
		<!-- Button -->
    	<div class="float-left">
			<a href="addDistrict.php" class="button">
				<span>Thêm Quận/Huyện <img src="images/plus-small.gif" alt="Thêm tin" > </span>
		  	</a>
	    </div>
	    <div class="clear"></div>
	    <div>
	    	<form action="/admin/find-news">
	    		Tìm kiếm theo khu vực:
				<select name="find">
					<option  value="">ALL</option>
					<option  value="">Đà Nẵng</option>
					<option  value="">Hồ Chí Minh</option>
					<option  value="">Hà Nội</option>
					
				</select>	
	    	</form>
	    </div>
	    <div class="clear"></div>
	</div>

	<div class="grid_12">
		<!-- Example table -->
		<div class="module">
			<h2><span>Danh sách quận/huyện </span></h2>
			
			<div class="module-table-body">
				<form action="">
				<table id="myTable" class="tablesorter">
					<thead>
						<tr>
							<th style="width:15%; text-align: center;">ID quận/huyện</th>
							<th>Tên quận/huyện</th>
							<th>Loại</th>
							<th>Vị trí</th>
							<th>ID tỉnh/thành phố </th>
							<th style="width:15%; text-align: center;">Chức năng</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="align-center">001</td>
							<td><a href="">Liên Chiểu</a></td>
							<td>Quận</td>
							<td>16.1129446,108.0628078</td>
							<td>TP001</td>
							<td align="center">
								<a href="editDistrict.php">Sửa <img src="images/pencil.gif" alt="edit" /></a>
								<a href="">Xóa<img src="images/bin.gif" width="16" height="16" alt="delete" /></a>
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
			<div style="clear: both;"></div> 
		</div>
	</div> <!-- End .grid_12 -->
</div>	
	<div style="clear:both;"></div>
	<!-- Footer -->
<?php
	require('inc/footer.php')
?>