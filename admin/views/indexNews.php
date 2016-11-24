<?php
	require('inc/header.php');
?>

	<div class="container_12">
<div class="bottom-spacing">
	  <!-- Button -->
	  <div class="float-left">
		  <a href="addNews.php" class="button">
			<span>Thêm tin <img src="images/plus-small.gif" alt="Thêm tin"></span>
		  </a>
	  </div>
	  <div class="clear"></div>
</div>

<div>
	<form action="/admin/find-news">
		Tìm kiếm theo khu vực:
		<select name="find">
			
			<option  value="">Đà Nẵng</option>
			<option  value="">Hồ Chí Minh</option>
			<option  value="">Hà Nội</option>
			
		</select>	
		<span>---</span>
		Tìm kiếm theo quận / huyện:
		<select name="find">
			
			<option  value="">Liên Chiều</option>
			<option  value="">Hải Châu</option>
			<option  value="">Cẩm Lệ</option>
			
		</select>	
		<span>---</span>
		Tìm kiếm theo phường / xã:
		<select name="find">
			
			<option  value="">Hòa Khánh Bắc</option>
			<option  value="">Hòa Khánh Nam</option>
			
			
		</select>	
		
		
	</form>
	<br/>
	<form action="/admin/find-news">
	
		Tìm kiếm theo tên:
		<input type="search" id="txtSearch" name="txtSearch" placeholder="Từ khóa tin tức"/>
		<input type="submit" id="btnSearch" name="SearchName" value="Tìm kiếm"/>
	</form>
	<br/>
	<form action="/admin/news">
		<input type="submit" id="showall" name="showall" value="Hiển thị tất cả"/>
	</form>
</div>
<br/>
<div class="grid_12">
	<!-- Example table -->
	<div class="module">
		
		<h2><span>Danh sách bài đăng</span></h2>
		
		<div class="module-table-body">
			<form action="">
			<table id="myTable" class="tablesorter">
				<thead>
					<tr>
						<th style="width:10%; text-align: center;">Mã Bài Đăng</th>
						<th>Tên Bài Đăng</th>
						<th style="width:10%">Thành Phố</th>
						<th style="width:11%; text-align: center;">Ngày đăng</th>
						<th style="width:11%; text-align: center;">Người đăng</th>
						<th style="width:16%; text-align: center;">Hình ảnh</th>
						<th style="width:5%; text-align: center;">Duyệt</th>
						<th style="width:11%; text-align: center;">Chức năng</th>
					</tr>
				</thead>
				<tbody>
					
						<tr>
							<td class="align-center">1</td>
							<td><a href="/admin/edit-news?nid=&type=load">Bán nhà</a></td>
							<td>Đà Nẵng</td>
							<td>30/10/2016</td>
							<td>wind</td>
							<td align="center">
								
									
									<img src="images/no_image.jpg" class="hoa" />
								
							</td>
							<td align="center"><input type="checkbox" name="status" value="1"></td>
							<td align="center">
								<a href="editNews.php">Sửa <img src="images/pencil.gif" alt="edit" /></a>
								<a onclick="return confirm('Bạn có muốn xóa hay không?')" href="">Xóa <img src="images/bin.gif" width="16" height="16" alt="delete" /></a>
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
				
					<a  href="/admin/news?page=1">1</a> | 
					<a  href="/admin/news?page=1">2</a> |
					<a  href="/admin/news?page=1">3</a>
				
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