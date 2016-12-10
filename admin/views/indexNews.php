<?php require_once $_SERVER['DOCUMENT_ROOT'].'/libs/CVarDumper.php';
 // dump($data);
?>
<?php
	require('inc/header.php');
?>

<div class="container_12">
	
	<div>
		<form action="index.php?ctr=rents&act=getIndex&currentPage=1&keyWord=<?php echo $data['keyWord'] ?>&province_id=0&district_id=0&ward_id=0" method="POST">
			Tìm kiếm theo khu vực:
			<select name="province_id" id="category_group" sel_id="" ></select>
			<span>---</span>
			Tìm kiếm theo quận / huyện:
			<select name="district_id" id="category_group" sel_id="" >
                        <option value="0" selected="selected">&laquo;Chọn quận /  huyện&raquo;</option>
                    </select>
			<span>---</span>
			Tìm kiếm theo phường / xã:
			<select name="ward_id" id="category_group" sel_id="" >
                        <option value="0" selected="selected">&laquo;Chọn phường / xã&raquo;</option>
                    </select>
			</select>
			<br/>
			Tìm kiếm theo tên:
			<input type="text" id="keyWord" name="keyWord" placeholder="Từ khóa tin tức" value="<?php echo $data['keyWord'] ?>" />
			<input type="submit" id="btnSearch" name="SearchName" value="Tìm kiếm"/>
		</form>
		<br/>
		<form action="index.php?ctr=rents&act=getIndex&currentPage=1&keyWord=<?php echo "" ?>&province_id=0&district_id=0&ward_id=0"  method="POST">
			<input type="submit" id="" name="" value="Hiển thị tất cả"/>
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
								<td><a href="index.php?ctr=rents&act=browsingPage&currentPage=<?php echo $_GET['currentPage'] ?>&idRent=<?php echo $value["rent_id"] ?>"><?php echo $value["rent_name"] ?></a></td>
								<td><?php echo $value["price"] ?> VNĐ</td>
								<td><?php echo $value["address_detail"] ?></td>
								<td><?php echo $value["post_time"] ?></td>
								<?php
								require_once $_SERVER['DOCUMENT_ROOT'].'/models/Rent.php';
								$rent = new Rent(); 
								$arImage = $rent->getArrayImgByRentId($value["rent_id"]);
								if($arImage==null){
								?>
								<td align="center">
										<img src="views/images/no_image.jpg" class="hoa" />
								</td>
								<?php
								}else{
								?>
								<td align="center">
										<img src="<?php echo $arImage[0]['image_url'] ?>" class="hoa" />
								</td>
								<?php
								}

								?>
								<td align="center"><input disabled type="checkbox" name="status" value="1"
								<?php if($value["status"]==1) echo "checked=\"checked\"" ?>
								></td>
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
							$totalRows = $data["totalRows"];
							$currentPage = $_GET["currentPage"];
							$totalPage =(int)($totalRows/10)+1;
							
							if($totalPage<=5){

								for($i=1;$i<=($totalPage);$i++)
								{
									if($_GET['currentPage']==$i){
						?>
									<a style="font: bold; color: red;" href="index.php?ctr=rents&act=getIndex&currentPage=<?php echo $i ?>&keyWord=<?php echo $data['keyWord'] ?>&province_id=<?php echo $data['province_id'] ?>&district_id=<?php echo $data['district_id'] ?>&ward_id=<?php echo $data['ward_id'] ?>"><?php echo $i ?></a><?php if($currentPage+2!=($i)) echo "|" ?>
									<?php
										}else{
									?>
									<a  href="index.php?ctr=rents&act=getIndex&currentPage=<?php echo $i ?>&keyWord=<?php echo $data['keyWord'] ?>&province_id=<?php echo $data['province_id'] ?>&district_id=<?php echo $data['district_id'] ?>&ward_id=<?php echo $data['ward_id'] ?>"><?php echo $i ?></a><?php if($currentPage+2!=($i)) echo "|" ?>
						<?php
										}
								}
							}else{
								if(($currentPage>3)&&($currentPage<=$totalPage)){
									$back = $currentPage-5;
									if(($currentPage-5)<1) $back=3;
									?>
									<a  href="index.php?ctr=rents&act=getIndex&currentPage=<?php echo $back ?>&keyWord=<?php echo $data['keyWord'] ?>&province_id=<?php echo $data['province_id'] ?>&district_id=<?php echo $data['district_id'] ?>&ward_id=<?php echo $data['ward_id'] ?>">...</a>
									<?php
									$page_for = $currentPage;
									if(($currentPage==($totalPage-1))||($currentPage==($totalPage))) $page_for=$totalPage-2;
									for($i=$page_for-2;$i<=$page_for+2;$i++){
										if($_GET['currentPage']==$i){
										?>
											<a style="font: bold; color: red;" href="index.php?ctr=rents&act=getIndex&currentPage=<?php echo $i ?>&keyWord=<?php echo $data['keyWord'] ?>&province_id=<?php echo $data['province_id'] ?>&district_id=<?php echo $data['district_id'] ?>&ward_id=<?php echo $data['ward_id'] ?>"><?php echo $i ?></a><?php if($currentPage+2!=($i)) echo "|" ?>
											<?php
												}else{
											?>
											<a  href="index.php?ctr=rents&act=getIndex&currentPage=<?php echo $i ?>&keyWord=<?php echo $data['keyWord'] ?>&province_id=<?php echo $data['province_id'] ?>&district_id=<?php echo $data['district_id'] ?>&ward_id=<?php echo $data['ward_id'] ?>"><?php echo $i ?></a><?php if($i!=$currentPage+2) echo "|" ?>
										<?php
										}
									}
									if($currentPage<$totalPage-2){
										$more=$currentPage+5;
										if(($currentPage+5)>$totalPage) $more=$totalPage-2;
										?>
											<a  href="index.php?ctr=rents&act=getIndex&currentPage=<?php echo $more ?>&keyWord=<?php echo $data['keyWord'] ?>&province_id=<?php echo $data['province_id'] ?>&district_id=<?php echo $data['district_id'] ?>&ward_id=<?php echo $data['ward_id'] ?>">...</a>
										<?php
									}
								}else{
									for($i=1;$i<=5;$i++){
										if($_GET['currentPage']==$i){
										?>
											<a style="font: bold; color: red;" href="index.php?ctr=rents&act=getIndex&currentPage=<?php echo $i ?>&keyWord=<?php echo $data['keyWord'] ?>&province_id=<?php echo $data['province_id'] ?>&district_id=<?php echo $data['district_id'] ?>&ward_id=<?php echo $data['ward_id'] ?>"><?php echo $i ?></a><?php if(5!=($i)) echo "|" ?>
											<?php
										}else{
											?>
											<a  href="index.php?ctr=rents&act=getIndex&currentPage=<?php echo $i ?>&keyWord=<?php echo $data['keyWord'] ?>&province_id=<?php echo $data['province_id'] ?>&district_id=<?php echo $data['district_id'] ?>&ward_id=<?php echo $data['ward_id'] ?>"><?php echo $i ?></a><?php if(5!=($i)) echo "|" ?>

									<?php
										}
									}
									?>
										<a  href="index.php?ctr=rents&act=getIndex&currentPage=<?php echo $currentPage+5 ?>&keyWord=<?php echo $data['keyWord'] ?>&province_id=<?php echo $data['province_id'] ?>&district_id=<?php echo $data['district_id'] ?>&ward_id=<?php echo $data['ward_id'] ?>">...</a>
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