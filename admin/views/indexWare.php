<?php
	require('inc/header.php');
?>

	<div class="container_12">
		<div class="bottom-spacing">
		<!-- Button -->
    	<div class="float-left">
			<a href="addWare.php" class="button">
				<span>Thêm phường/xã <img src="images/plus-small.gif" alt="Thêm tin" > </span>
		  	</a>
	    </div>
	    <div class="clear"></div>
	    <div>
	    	<form action="/admin/find-news">
	    		Tìm kiếm theo khu vực: // tìm kiểu ni khó quá thì bỏ qua bớt =)))
				<select name="find">
					<option  value="">ALL</option>
					<option  value="">Đà Nẵng</option>
					<option  value="">Hồ Chí Minh</option>
					<option  value="">Hà Nội</option>
					
				</select>	
	    	</form>
	    </div>
	    <div>
	    	<form action="/admin/find-news">
	    		Tìm kiếm theo quận/ huyện : // khó quá bỏ qua bớt =))))
				<select name="find">
					<option  value="">ALL</option>
					<option  value="">bla</option>
					<option  value="">bla</option>
					<option  value="">lab</option>
					
				</select>	
	    	</form>	
	    </div>	
	    <div class="clear"></div>
	</div>

	<div class="grid_12">
		<!-- Example table -->
		<div class="module">
			<h2><span>Danh sách phường/xã</span></h2>
			
			<div class="module-table-body">
				<form action="">
				<table id="myTable" class="tablesorter">
					<thead>
						<tr>
							<th style="width:15%; text-align: center;">ID phường/ xã</th>
							<th>Tên phường/xã </th>
							<th>Loại</th>
							<th>Vị trí</th>
							<th>ID quận/huyện</th>
							<th>ID thành phố</th>
							<th style="width:15%; text-align: center;">Chức năng</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="align-center">001</td>
							<td><a href="">Hòa Khánh Bắc</a></td>
							<td>Phường</td>
							<td>16.0807317,108.1192175</td>
							<td>H001</td>
							<td>TP001</td>
							<td align="center">
								<a href="editWare.php">Sửa <img src="images/pencil.gif" alt="edit" /></a>
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