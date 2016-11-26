<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Quản lý phòng trọ </title>
	<link rel="stylesheet" type="text/css" href="views/css/styles.css" media="screen" />
	<!-- <script src="http://www.w3schools.com/lib/w3data.js"></script> -->
</head>
<body>
	<!-- Header -->
	<div id="header">
		<!-- Header. Status part -->
		<div id="header-status">
			<div class="container_12">
				<div class="grid_4">
					<ul class="user-pro">
						<li><a href="index.php">Logout</a></li>
						<li>Chào, <a href="index.php?ctr=user&act=getDetail">admin</a></li>
					</ul>
				</div>
			</div>
			<div style="clear:both;"></div>
		</div> <!-- End #header-status -->

		<!-- Header. Main part -->
		<div id="header-main">
			<div class="container_12">
				<div class="grid_12">
					<div id="logo">
						<ul id="nav">
							<li id="current"><a href="index.php?ctr=rents&act=getIndex&currentPage=1">Quản trị</a></li>
							<li><a href="index.php?ctr=user&act=getDetail">Tài khoản</a></li>
							<li><a href="index.php?ctr=user&act=getIndex">Người dùng</a></li>
						</ul>
					</div><!-- End. #Logo -->
				</div><!-- End. .grid_12-->
				<div style="clear: both;"></div>
			</div><!-- End. .container_12 -->
		</div> <!-- End #header-main -->
		<div style="clear: both;"></div>
		<!-- Sub navigation -->
		<div id="subnav">
			<div class="container_12">
				<div class="grid_12">
					<ul>
						<li id="current"><a href="index.php?ctr=rents&act=getIndex">Quản lý bài đăng</a></li>
						<li><a href="index.php?ctr=type&act=getIndex">Loại hình cho thuê</a></li>
						<li><a href="index.php?ctr=province&act=getIndex">Thành phố</a></li>
						<li><a href="index.php?ctr=district&act=getIndex">Quận/Huyện</a></li>
						<li><a href="index.php?ctr=ware&act=getIndex">Phường/Xã</a></li>
						<li><a href="index.php?ctr=user&act=getIndex">Người dùng</a></li>
					</ul>
				</div><!-- End. .grid_12-->
			</div><!-- End. .container_12 -->
			<div style="clear: both;"></div>
		</div> <!-- End #subnav -->
	</div> <!-- End #header -->