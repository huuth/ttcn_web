<?php
	require('inc/header.php');
?>

	<div class="container_12">
		<div class="bottom-spacing">
		<!-- Button -->
    	<div class="float-left">
			<a href="index.php?ctr=type&act=getAdd" class="button">
				<span>Thêm loại hình thuê <img src="views/images/plus-small.gif" alt="Thêm tin" > </span>
		  	</a>
	    </div>
	    <div class="clear"></div>
	</div>

	<div class="grid_12">
		<!-- Example table -->
		<?php
			if (isset($_GET['load'])){
				if($_GET['load']=='edit'){
					if($_GET['check']=='true'){
					?>
						<h5 style="color:red">Sửa thành công</h5>
					<?php
					}else{
					?>
						<h5 style="color:red">Sửa thất bại</h5>
					<?php	
					}
				}else if ($_GET['load']=='add'){
					if($_GET['check']=='true'){
					?>
						<h5 style="color:red">Thêm thành công</h5>
					<?php
					}else{
					?>
						<h5 style="color:red">Thêm thất bại</h5>
					<?php	
					}
				}elseif ($_GET['load']=='del'){
					if($_GET['check']=='true'){
					?>
						<h5 style="color:red">Xóa thành công</h5>
					<?php
					}else{
					?>
						<h5 style="color:red">Xóa thất bại</h5>
					<?php	
					}
				}	
			}
		?>
		<div class="module">
			<h2><span>Danh sách loại hình</span></h2>
			
			<div class="module-table-body">
				<form action="">
				<table id="myTable" class="tablesorter">
					<thead>
						<tr>
							<th style="width:15%; text-align: center;">ID Loại</th>
							<th>Tên loại hình</th>
							<th style="width:15%; text-align: center;">Chức năng</th>
						</tr>
					</thead>
					<tbody>
						<?php
							foreach ($data['type'] as $type):
						?>
						<tr>
							<td class="align-center"><?php echo $type['type_id']?></td>
							<td><a href="index.php?ctr=type&act=getEdit&idType=<?php echo $type['type_id']?>"><?php echo $type['type_name']?></a></td>
							<td align="center">
								<a href="index.php?ctr=type&act=getEdit&idType=<?php echo $type['type_id']?>">Sửa <img src="views/images/pencil.gif" alt="edit" /></a>
								<a onclick="return confirm('Bạn có muốn xóa hay không?')" href="index.php?ctr=type&act=delType&idType=<?php echo $type['type_id']?>">Xóa<img src="views/images/bin.gif" width="16" height="16" alt="delete" /></a>
							</td>
						</tr>
						<?php 
							endforeach;
						?>
					</tbody>
				</table>
				</form>
			 </div> <!-- End .module-table-body -->
		</div> <!-- End .module -->
		<div class="pagination">           
			<div class="numbers">
				<span>Trang:</span> 
				<a href="" class="current" >1</a>  
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