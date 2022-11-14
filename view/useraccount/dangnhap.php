<div class="container">
			<div class="row" style="padding-top: 20px;padding-bottom: 50px;">
            <div class="col-sm-4"></div>

				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						
                        
<?php
    if(isset($_SESSION['user'])){
?>
<h2 style="font-size: 180%; text-align: center;">Đăng nhập thành công!</h2>
<div>Xin chào <?=$_SESSION['user']['user'] ?>, bạn muốn?</div>
    <li>
    <a href="index.php?act=edittaikhoan" class="text-black" >Cập nhật tài khoản</a>
    </li>
    <?php if($_SESSION['user']['role'] == 1) { ?>
    <li>
        <a href="admin/index.php" class="text-black" >Đăng nhập admin</a>
    </li>
    <?php } ?>
    <li>
        <a href="index.php?act=thoat" class="text-black" >Thoát</a></span>
    </li>


<?php


    }else{
?>
                        <h2 style="font-size: 180%; text-align: center;">Đăng nhập!</h2>
                        <p style=" text-align: center;">Bạn chưa có tài khoản?
                                <span class="text-link"><a href="index.php?act=dangky" class="text-black" style="font-size: 90%;">Nhấn vào đây để đăng ký</a></span>
                        </p>

						<form action="index.php?act=dangnhap" method="post">
							<input type="text" placeholder="Name" name="user">
							<input type="password" placeholder="Password" name="password">
                            <input style="font-size: 120%;" type="submit" value="Đăng nhập" name="dangnhap">
						</form>
                       
                          
<?php } ?>


					</div><!--/sign up form-->
				</div>
            <div class="col-sm-4"></div>
			</div>
		</div>

	