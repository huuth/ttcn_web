<?php require_once $_SERVER['DOCUMENT_ROOT'].'/libs/CVarDumper.php';
 // dump($data);
?>
<?php
    include('inc/header.php');

?>
	<div class="container_12">

		<div class="grid_12">

	<div class="module">
		 <h2><span>Duyệt tin tức</span></h2>		
		 <div class="browsing">
            <span>Bài đăng 
            <?php
                if ($data['rent']['status']==0) echo " đang bị ẩn";
                if ($data['rent']['status']==1) echo " đang được đăng tải";
                if ($data['rent']['status']==-1) echo " không được duyệt đăng";
            ?>
            <br>
            </span>
             <form action="index.php?ctr=rents&act=browsingNew&idRent=<?php echo $data['rent']['rent_id'] ?>" method="post">
                <input class="submit-green" name="1" type="submit" value="DUYỆT ĐĂNG" />
                <input class="submit-gray" name="0" type="submit" value="ẨN BÀI" />
                <input class="submit-blue" name="-1" type="submit" value="KHÔNG DUYỆT" /> 
             </form>
         </div>
        <div>
			<!--<form id='fn' name='fn' action="index.php?ctr=rents&act=getAdd" enctype="multipart/form-data" method="post">-->
				<div class="aa-properties-content">
                        <!-- Start properties content body -->
                        <div class="aa-properties-details">
                            <div class="aa-properties-details-img">                           
                                <?php if(!empty($data['rent']['img'])): ?>
                                    <?php foreach ($data['rent']['img'] as  $img): ?>
                                        <img src="<?php echo $img['image_url'] ?>" alt="img">    
                                    <?php endforeach; ?>
                                <?php endif; ?>                                
                            </div>
                            <div class="aa-properties-info">
                            <?php   
                            		$detail = $data['rent'];
                                    $user   = $data['user'];
                                    $type   = $data['type'];
                            ?>
                                <div class="title-post">
                                    <h3 style="color: yellowgreen"><?php echo $detail['rent_name'] ?></h3>
                                </div>
                                <div class="infor-post">
                                    <div class="row infor-post-address">                                        
                                        <div class="col-md-3 col-xs-5 color-col"><span>Địa chỉ:</span></div>
                                        <div class="col-md-9 col-xs-7"><span><?php echo $detail['address_detail']; ?></span></div>  
                                    </div>
                                    <div class="row">                                       
                                        <div class="col-md-3 col-xs-5 color-col"><span>Loại tin rao:</span></div>
                                        <div class="col-md-3 col-xs-7">
                                            <a href="https://phongtro123.com/cho-thue-phong-tro">
                                            <?php echo $type['type_name']; ?></a>
                                        </div>                                       
                                        <div class="col-md-3 col-xs-5 color-col"><span>Ngày cập nhật:</span></div>
                                        <div class="col-md-3 col-xs-7"><span><?php echo $detail['post_time'] ;?></span></div>                                       
                                    </div>
                                    <div class="row">                                    
                                        <div class="col-md-3 col-xs-5 color-col"><span>Người đăng:</span></div>
                                        <div class="col-md-3 col-xs-7"><span>
                                            <?php echo $user['username']; ?>
                                         </span></div>                                                            
                                        <div class="col-md-3 col-xs-5 color-col"><span>Điện thoại:</span></div>
                                        <div class="col-md-3 col-xs-7">
                                            <a href="tel:<?php echo $user['phone']; ?>"><?php echo $user['phone']; ?></a>
                                        </div>                                    
                                    </div>
                                    <div class="row">                                    
                                        <div class="col-md-3 col-xs-5 color-col"><span>Email:</span></div>
                                        <div class="col-md-3 col-xs-7">
                                            <a href="mailto:vohinh1989kute@gmail.com"><?php echo $user['email']; ?>
                                            </a>
                                        </div>                                                                      
                                        <div class="col-md-3 col-xs-5 color-col"><span>Đối tượng:</span></div>
                                        <div class="col-md-3 col-xs-7"><span>Tất cả </span></div>                                    
                                    </div>
                                    <div class="row">                                    
                                        <div class="col-md-3 col-xs-5 color-col"><span>Diện tích:</span></div>
                                        <div class="col-md-3 col-xs-7"><span><?php echo $detail['square'] ." m2"; ?>
                                        </span></div>                               
                                        <div class="col-md-3 col-xs-5 color-col"><span>Giá cho thuê:</span></div>
                                        <div class="col-md-3 col-xs-7"><span><?php echo $detail['price'] ;?></span></div>                                    
                                    </div>
                                </div>
                                <div class="infor-detail">
                                    <div class="title-post">
                                        <h3 style="color: yellowgreen;">THÔNG TIN CHI TIẾT</h3>
                                    </div>
                                    <div class="text-detail">
                                        <?php echo $detail['describe_rent'] ;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
			<!--</form>-->
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