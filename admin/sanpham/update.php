<?php 
    if(is_array($sanpham)){
        extract($sanpham);
    }   
    $imgpath = "../uploads/".$img;
    if(is_file($imgpath)){
        $hinh = "<img src = '".$imgpath."' height = '80'>";
    } else{
        $hinh = "no photo";
    }
?>


<div class="row">
            <div class="row frmtitle">
                <h1>CẬP NHẬT THÔNG TIN DANH MỤC</h1>
            </div>
            <div class="row frmcontent">
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                    <select name="idcate" >
                                <option value="0" selected>Tất cả</option>
                                <?php 
                                    foreach ($listdanhmuc as $danhmuc) {
                                        if($idcate==$danhmuc['id']) echo '<option value="'.$danhmuc['id'].'" selected>'.$danhmuc['name'].'</option>';
                                        else echo '<option value="'.$danhmuc['id'].'">'.$danhmuc['name'].'</option>';
                                    }
                                    
                                ?>
                            </select>
                       

                    <div class="row mb10">
                        Tên sản phẩm<br>    
                        <input type="text" name="tensp" value="<?=$name?>">
                    </div>

                    <div class="row mb10">
                        Giá<br>    
                        <input type="text" name="giasp" value="<?=$price?>">
                    </div>

                    <div class="row mb10">
                        Hình<br>    
                        <input type="file" name="hinh">
                        <?=$hinh?>
                    </div>

                    <div class="row mb10">
                        Mô tả<br>    
                        <textarea name="des" cols="30" rows="10"><?=$des?></textarea>
                    </div>

                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?=$id?>">
                        <input type="submit" name="capnhat" value="CẬP NHẬT">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
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