<div class="container">
			<div class="row" style="padding-top: 20px;padding-bottom: 50px;">
            <div class="col-sm-4"></div>

				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2 style="font-size: 180%; text-align: center;">Cập nhật tài khoản</h2>
<?php
    if((isset($_SESSION['user'])) && (is_array($_SESSION['user']))){
        extract($_SESSION['user']);

    }

?>
						<form action="index.php?act=edittaikhoan" method="post">
							<input type="text" placeholder="Name" name="user" value="<?=$user?>">
							<input type="email" placeholder="Email Address" name="email" value="<?=$email?>">
							<input type="password" placeholder="Password" name="password" value="<?=$password?>">
							<input type="text" placeholder="Địa chỉ" name="address" value="<?=$address?>">
							<input type="text" placeholder="SĐT" name="tel" value="<?=$tel?>">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="hidden" name="id" value="<?=$id?>">
                                    <input  style="font-size: 120%;" type="submit" value="Cập nhật" name="capnhat">
                                </div>
                                <div class="col-sm-6">
                                    <input  style="font-size: 120%;" type="reset" value="Nhập lại" name="nhaplai">
                                </div>
                            </div>
                        
						</form>
                       
                           


					</div><!--/sign up form-->
				</div>
            <div class="col-sm-4"></div>
			</div>
		</div>

	