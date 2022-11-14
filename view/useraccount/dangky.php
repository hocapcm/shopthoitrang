		<div class="container">
			<div class="row" style="padding-top: 20px;padding-bottom: 50px;">
            <div class="col-sm-4"></div>

				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2 style="font-size: 180%; text-align: center;">Đăng ký thành viên mới!</h2>
                        <p style="text-align: center;">Đã có tài khoản đăng nhập?
                                <span class="text-link"><a href="index.php?act=dangnhap" class="text-black" style="font-size: 90%;">Nhấn vào đây</a></span>
                        </p>
						<form action="index.php?act=dangky" method="post">
							<input type="text" placeholder="Name" name="user">
							<input type="email" placeholder="Email Address" name="email">
							<input type="password" placeholder="Password" name="password">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input  style="font-size: 120%;" type="submit" value="Đăng ký" name="dangky">
                                </div>
                                <div class="col-sm-6">
                                    <input  style="font-size: 120%;" type="reset" value="Nhập lại" name="nhaplai">
                                </div>
                            </div>
                        
						</form>
                       
                            <?php
                            if(isset($thongbao) && ($thongbao!="")){
                                echo $thongbao;
                            }

                            ?>



					</div><!--/sign up form-->
				</div>
            <div class="col-sm-4"></div>
			</div>
		</div>

	