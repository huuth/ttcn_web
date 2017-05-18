<?php
	require_once $_SERVER['DOCUMENT_ROOT'].'/libs/CVarDumper.php';
	require('inc/header.php');

?>
	<div class="container_12">

		<div class="bottom-spacing">
	  <!-- Button -->
	  <div class="float-left">
		  <a href="index.php?ctr=user&act=getAdd&currentPage=<?php echo $_GET['currentPage']?>" class="button">
			<span>Thêm người dùng <img src="views/images/plus-small.gif" alt="Thêm người dùng"></span>
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
			}
		}
	?>
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
						<th style="width:15%; text-align: center;">Quyền</th>
						<th style="width:15%; text-align: center;">Chức năng</th>
					</tr>
				</thead>
				<tbody>
					<?php
						foreach ($data['user'] as $user):
					?>
					<tr>
						<td class="align-center"><?php echo $user['user_id']?></td>
						<td><a href="index.php?ctr=user&act=getDetail&idUser=<?php echo $user['user_id']?>"><?php echo $user['username']?></a></td>
						<td><?php echo $user['name_display']?></td>
						<td align="center">
							<?php
								if ($user['auth']=='0') echo "Thành viên";
								else echo "Admin";
							?>
						</td>
						<td align="center">
							
							<?php
								if (($_SESSION['user_infor_ad']['auth']=='1' && $_SESSION['user_infor_ad']['user_id']==$user['user_id'])
									||($_SESSION['user_infor_ad']['auth']=='1' && $user['auth']=='0')
								    ||($_SESSION['user_infor_ad']['auth']=='1' && $_SESSION['user_infor_ad']['username']=='Admin_main')){
							?>
								<a href="index.php?ctr=user&act=getEdit&currentPage=<?php echo $_GET['currentPage']?>&idUser=<?php echo $user['user_id']?>">Sửa <img src="views/images/pencil.gif" alt="edit" /></a>
							<?php		
								}else{
							?>
								<p style="font-weight:bolder">Không có quyền</p>
							<?php		
								}
							?>
							
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
				<?php
							$totalRows = $data["totalRows"];
							$currentPage = $_GET["currentPage"];
							$totalPage =(int)($totalRows/10)+1;
							
							if($totalPage<=5){

								for($i=1;$i<=($totalPage);$i++)
								{
									if($_GET['currentPage']==$i){
						?>
									<a style="font: bold; color: red;" href="index.php?ctr=user&act=getIndex&currentPage=<?php echo $i ?>"><?php echo $i ?></a><?php if($currentPage+2!=($i)) echo "|" ?>
									<?php
										}else{
									?>
									<a  href="index.php?ctr=user&act=getIndex&currentPage=<?php echo $i ?>"><?php echo $i ?></a><?php if($currentPage+2!=($i)) echo "|" ?>
						<?php
										}
								}
							}else{
								if(($currentPage>3)&&($currentPage<=$totalPage)){
									$back = $currentPage-5;
									if(($currentPage-5)<1) $back=3;
									?>
									<a  href="index.php?ctr=user&act=getIndex&currentPage=<?php echo $back ?>">...</a>
									<?php
									$page_for = $currentPage;
									if(($currentPage==($totalPage-1))||($currentPage==($totalPage))) $page_for=$totalPage-2;
									for($i=$page_for-2;$i<=$page_for+2;$i++){
										if($_GET['currentPage']==$i){
										?>
											<a style="font: bold; color:red;" href="index.php?ctr=user&act=getIndex&currentPage=<?php echo $i ?>"><?php echo $i ?></a><?php if($currentPage+2!=($i)) echo "|" ?>
											<?php
												}else{
											?>
											<a  href="index.php?ctr=user&act=getIndex&currentPage=<?php echo $i ?>"><?php echo $i ?></a><?php if($i!=$currentPage+2) echo "|" ?>
										<?php
										}
									}
									if($currentPage<$totalPage-2){
										$more=$currentPage+5;
										if(($currentPage+5)>$totalPage) $more=$totalPage-2;
										?>
											<a  href="index.php?ctr=user&act=getIndex&currentPage=<?php echo $more ?>">...</a>
										<?php
									}
								}else{
									for($i=1;$i<=5;$i++){
										if($_GET['currentPage']==$i){
										?>
											<a style="font: bold; color: red;" href="index.php?ctr=user&act=getIndex&currentPage=<?php echo $i ?>"><?php echo $i ?></a><?php if(5!=($i)) echo "|" ?>
											<?php
										}else{
											?>
											<a  href="index.php?ctr=user&act=getIndex&currentPage=<?php echo $i ?>"><?php echo $i ?></a><?php if(5!=($i)) echo "|" ?>

									<?php
										}
									}
									?>
										<a  href="index.php?ctr=user&act=getIndex&currentPage=<?php echo $currentPage+5 ?>">...</a>
									<?php
								}
							}
						?>
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