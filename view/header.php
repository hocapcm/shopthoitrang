<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Shop thời trang</title>
    <link href="view/css/bootstrap.min.css" rel="stylesheet">
    <link href="view/css/font-awesome.min.css" rel="stylesheet">
    <link href="view/css/prettyPhoto.css" rel="stylesheet">
    <link href="view/css/price-range.css" rel="stylesheet">
    <link href="view/css/animate.css" rel="stylesheet">
	<link href="view/css/main.css" rel="stylesheet">
	<link href="view/css/slideshow123.css" rel="stylesheet">
	<link href="view/css/responsive.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="view/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="view/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="view/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="view/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="view/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6 ">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href=""><i class="fa fa-phone"></i> +84 08 62 90 32</a></li>
								<li><a href=""><i class="fa fa-envelope"></i> st001@ueh.edu.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-facebook"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-youtube"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="logo pull-left">
							<a href="index.php"><img src="view/images/home/logo.png" alt="" /></a>
						</div>
						
					</div>
					<div class="col-sm-5">
					<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
					</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php">Trang chủ</a></li>
								<li><a href="index.php?act=gioithieu">Giới thiệu</a></li>
								<li class="dropdown"><a href="#" class="active">Mua hàng<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="index.php?act=dssanpham" class="active">Sản phẩm</a></li>									 
                                    </ul>
                                </li> 
								
								
							</ul>
						</div>
						
					</div>
					<div class="col-sm-3" style="margin-top:12px;">
						<form action="index.php?act=sanphamtheodm" method="post">
							<input type="text" name="kyw" placeholder="Nhập tên sản phẩm"/>
							<input type="submit" name="timkiem" value="Tìm kiếm">
						</form>
							
					
								
					</div>
					
					<div class="col-sm-2">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="cart.html"><i class="fa fa-shopping-cart"></i></a></li>
								<li><a href="
								<?php
									if(isset($_SESSION['user'])){
										echo "index.php?act=dangnhap";
									}else{echo "index.php?act=dangnhap";}
								?>	
								"><i class="fa fa-user"></i></a></li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div><!--/header-middle-->
	
	</header>