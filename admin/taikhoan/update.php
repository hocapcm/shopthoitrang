<?php 
    if(is_array($tk)){
        extract($tk);
    }   
?>


<div class="row">
            <div class="row frmtitle">
                <h1>CẬP NHẬT THÔNG TIN TÀI KHOẢN</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=updatetk" method="post">
                    <div class="row mb10">
                        Mã TK<br>
                        <input type="text" name="id" value="Auto increase" disabled>
                    </div>

                    <div class="row mb10">
                        Username<br>    
                        <input type="text" name="user" value="<?=$tk['user']?>">
                    </div>

                    <div class="row mb10">
                        Password<br>    
                        <input type="text" name="password" value="<?=$tk['password']?>">
                    </div>

                    <div class="row mb10">
                        Email<br>    
                        <input type="text" name="email" value="<?=$tk['email']?>">
                    </div>

                    <div class="row mb10">
                        Địa chỉ<br>    
                        <input type="text" name="address" value="<?=$tk['address']?>">
                    </div>

                    <div class="row mb10">
                        SĐT<br>    
                        <input type="text" name="tel" value="<?=$tk['tel']?>">
                    </div>

                    <div class="row mb10">
                        Vai trò<br>    
                        <input type="text" name="role" value="<?=$tk['role']?>">
                    </div>

                   

                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?php if(isset($id) && ($id>0)) echo $id;?>">
                        <input type="submit" name="capnhat" value="CẬP NHẬT">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=dskh"><input type="button" value="DANH SÁCH"></a>
                    </div>
                    <?php
                        if(isset($thongbao) && ($thongbao !="")){
                            echo  $thongbao;
                        }
                    ?>
                    
                </form>
            </div>
        </div>
    </div>