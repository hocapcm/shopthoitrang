<div class="row">
            <div class="row frmtitle">
                <h1>DANH SÁCH CÁC DANH MỤC SẢN PHẨM</h1>
            </div>
            <div class="row frmdsloai">
                    <div class="row mb10">
                       <table> 
                        <tr>
                            <th></th>
                            <th>MÃ LOẠI</th>
                            <th>TÊN LOẠI</th>
                            <th></th>
                        </tr>
                        <?php 
                            foreach ($listdanhmuc as $dm) {
                                extract($dm);
                                $suadm = "index.php?act=suadm&id=".$id;
                                $xoadm = "index.php?act=xoadm&id=".$id;
                                echo '<tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>'.$id.'</td>
                                        <td>'.$name.'</td>
                                        <td><a href="'.$suadm.'"><input type="button" value="Sửa"> <a href="'.$xoadm.'"><input type="button" value="Xóa"></td>
                                    </tr>';
                            }   
                        ?>                                           
                       </table>
                    </div>

                    <div class="row mb10">
                        
                    </div>

                    <div class="row mb10">
                        <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
                    </div>
                    
                </form>
            </div>
        </div>