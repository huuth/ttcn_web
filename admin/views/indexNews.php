<?php require_once $_SERVER['DOCUMENT_ROOT'].'/libs/CVarDumper.php';
 // dump($data);
?>
<?php
	require('inc/header.php');
?>

<div class="container_12">
	<div class="bottom-spacing">
		  <!-- Button -->
		  <div class="float-left">
			  <a href="index.php?ctr=rents&act=getAdd" class="button">
				<span>Thêm tin <img src="views/images/plus-small.gif" alt="Thêm tin"></span>
			  </a>
		  </div>
		  <div class="clear"></div>
	</div>

	<div>
		<form action="" method="post">
			Tìm kiếm theo khu vực:
			<select name="find">
				
				<option  value="">Ðà Nẵng</option>
				<option  value="">Hồ Chí Minh</option>
				<option  value="">Hà Nội</option>
				
			</select>	
			<span>---</span>
			Tìm kiếm theo quận / huyện:
			<select name="find">
				
				<option  value="">Liên Chiểu</option>
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
		<form action="index.php?ctr=rents&act=getIndex&currentPage=1" method="POST">
			Tìm kiếm theo tên:
			<input type="search" id="txtSearch" name="txtSearch" placeholder="Từ khóa tin tức"/>
			<input type="submit" id="btnSearch" name="SearchName" value="Tìm kiếm"/>
		</form>
		<br/>
		<form action="/admin/newsindex.php?ctr=rents&act=getIndex&currentPage=1">
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
							<th style="width:10%; text-align: center;">Mã Bài Ðăng</th>
							<th>Tên Bài Ðăng</th>
							<th style="width:11%; text-align: center;">Giá</th>
							<th style="width:10%">Ðịa chỉ</th>
							<th style="width:11%; text-align: center;">Thờii gian</th>

							<th style="width:16%; text-align: center;">Hình ảnh</th>
							<th style="width:5%; text-align: center;">Duyệt</th>
							<th style="width:11%; text-align: center;">Chức năng</th>
						</tr>
					</thead>
					
					<tbody>
						<?php
						//dump($data);
							foreach ($data["news"] as $value) 
							{	
						?>
							<tr>
								<td class="align-center"><?php echo $value["rent_id"] ?></td>
								<td><a href="index.php?ctr=rents&act=getEdit"><?php echo $value["rent_name"] ?></a></td>
								<td><?php echo $value["price"] ?> VNĐ</td>
								<td><?php echo $value["address_detail"] ?></td>
								<td><?php echo $value["post_time"] ?></td>
						
								<td align="center">
										<img src="views/images/no_image.jpg" class="hoa" />
								</td>
								<td align="center"><input type="checkbox" name="status" value="1"></td>
								<td align="center">
									<a href="index.php?ctr=rents&act=getEdit">Sửa <img src="views/images/pencil.gif" alt="edit" /></a>
									<a onclick="return confirm('B?n có mu?n xóa hay không?')" href="">Xóa <img src="views/images/bin.gif" width="16" height="16" alt="delete" /></a>
								</td>
							</tr>
						<?php
							}
						?>
					</tbody>
				</table>
				</form>
			 </div> <!-- End .module-table-body -->
		</div> <!-- End .module -->
			 <div class="pagination">           
				<div class="numbers">
					<span>Trang:</span> 
						<?php
							$arTotalRows = $data["totalRows"];
							$totalRows = $arTotalRows[0]["totalPage"];
							$currentPage = $_GET["currentPage"];
							$totalPage =(int)($totalRows/10+1);

							if($totalRows<=5){

								for($i=1;$i<=($totalRows/10+1);$i++)
								{
									if($_GET['currentPage']==$i){
						?>
									<a style="font: bold; color: red;" href="index.php?ctr=rents&act=getIndex&currentPage=<?php echo $i ?>"><?php echo $i ?></a><?php if($currentPage+2!=($i)) echo "|" ?>
									<?php
										}else{
									?>
									<a  href="index.php?ctr=rents&act=getIndex&currentPage=<?php echo $i ?>"><?php echo $i ?></a><?php if($currentPage+2!=($i)) echo "|" ?>
						<?php
										}
								}
							}else{
								if(($currentPage>3)&&($currentPage<=$totalPage)){
									$back = $currentPage-5;
									if(($currentPage-5)<1) $back=3;
									?>
									<a  href="index.php?ctr=rents&act=getIndex&currentPage=<?php echo $back ?>">...</a>
									<?php
									$page_for = $currentPage;
									if(($currentPage==($totalPage-1))||($currentPage==($totalPage))) $page_for=$totalPage-2;
									for($i=$page_for-2;$i<=$page_for+2;$i++){
										if($_GET['currentPage']==$i){
										?>
											<a style="font: bold; color: red;" href="index.php?ctr=rents&act=getIndex&currentPage=<?php echo $i ?>"><?php echo $i ?></a><?php if($currentPage+2!=($i)) echo "|" ?>
											<?php
												}else{
											?>
											<a  href="index.php?ctr=rents&act=getIndex&currentPage=<?php echo $i ?>"><?php echo $i ?></a><?php if($i!=$currentPage+2) echo "|" ?>
										<?php
										}
									}
									if($currentPage<$totalPage-2){
										$more=$currentPage+5;
										if(($currentPage+5)>$totalPage) $more=$totalPage-2;
										?>
											<a  href="index.php?ctr=rents&act=getIndex&currentPage=<?php echo $more ?>">...</a>
										<?php
									}
								}else{
									for($i=1;$i<=5;$i++){
										if($_GET['currentPage']==$i){
										?>
											<a style="font: bold; color: red;" href="index.php?ctr=rents&act=getIndex&currentPage=<?php echo $i ?>"><?php echo $i ?></a><?php if(5!=($i)) echo "|" ?>
											<?php
										}else{
											?>
											<a  href="index.php?ctr=rents&act=getIndex&currentPage=<?php echo $i ?>"><?php echo $i ?></a><?php if(5!=($i)) echo "|" ?>

									<?php
										}
									}
									?>
										<a  href="index.php?ctr=rents&act=getIndex&currentPage=<?php echo $currentPage+5 ?>">...</a>
									<?php
								}
							}
						?>
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