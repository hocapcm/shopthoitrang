<div class="row">
            <div class="row frmtitle mb">
                <h1>DANH SÁCH CÁC SẢN PHẨM</h1>
            </div>
            <form action="index.php?act=listsp" method="post" style="margin-bottom: 20px;">
                            <input type="text" name="kyw">
                            <select name="idcate" >
                                <option value="0" selected>Tất cả</option>
                                <?php 
                                    foreach ($listdanhmuc as $danhmuc) {
                                        extract($danhmuc);
                                        echo '<option value="'.$id.'">'.$name.'</option>';
                                    }
                                    
                                ?>
                            </select>
                            <input type="submit" name="listok" value="Go">
            </form>
                        
            <div class="row frmcontent">

                    <div class="row mb10 frmdsloai">
                       
                       <table> 
                        <tr>
                            <th></th>
                            <th>MÃ SẢN PHẨM</th>
                            <th>TÊN SẢN PHẨM</th>
                            <th>HÌNH</th>
                            <th>GIÁ</th>
                            <th>LƯỢT XEM</th>
                            <th></th>
                        </tr>
                        <?php 
                            foreach ($listsanpham as $sanpham) {
                                extract($sanpham);
                                $suasp = "index.php?act=suasp&id=".$id;
                                $xoasp = "index.php?act=xoasp&id=".$id;
                                $imgpath = "../uploads/".$img;
                                if(is_file($imgpath)){
                                    $hinh = "<img src = '".$imgpath."' height = '80'>";
                                } else{
                                    $hinh = "no photo";
                                }
                                echo '<tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>'.$id.'</td>
                                        <td>'.$name.'</td>
                                        <td>'.$hinh.'</td>
                                        <td>'.$price.'</td>
                                        <td>'.$view.'</td>
                                        <td><a href="'.$suasp.'"><input type="button" value="Sửa"> <a href="'.$xoasp.'"><input type="button" value="Xóa"></td>
                                    </tr>';
                            }   
                        ?>                                           
                       </table>
                    </div>

                    <div class="row mb10">
                        
                    </div>

                    <div class="row mb10">
                        <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
                    </div>
                    
                </form>
            </div>
        </div>